<!-- Una copia de objeto se crea utilizando la palabra clave clone (que invoca al método __clone() del objeto, si ha sido definido). -->
<?php
class SubObject
{
  static $instances = 0;
  public $instance;

  public function __construct()
  {
    $this->instance = ++self::$instances;
  }

  public function __clone()
  {
    $this->instance = ++self::$instances;
  }
}

class MyCloneable
{
  public $object1;
  public $object2;

  function __clone()
  {
    // Fuerza la copia de this->object, de lo contrario
    // apuntará al mismo objeto.
    $this->object1 = clone $this->object1;
  }
}

$obj = new MyCloneable();

$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

print "Objeto original :\n";
print_r($obj);

print "Objeto clonado :\n";
print_r($obj2);

?>