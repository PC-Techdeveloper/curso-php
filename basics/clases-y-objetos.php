<?php
// activar tipado estricto en php (por archivo)
// declare(strict_types=1);

/* 
Los objetos:
- inicialización de objetos: Para crear nuevos objetos, se utiliza la palabra clave "new" para instanciar una clase.
*/
class Foo
{
  function do_foo()
  {
    echo "Doing foo.";
  }
}

// $bar = new Foo();
// $bar->do_foo();

##conversión de objetos
$obj = (object) array('1' => 'foo');
var_dump(isset($obj->{'1'}));
##cualquier otro tipo, llamado "scalar" contendrá el valor
$obj = (object) 'ciao';
echo $obj->scalar;

##DEFINICIÓN DE CLASES
class MyClass
{
  #declaraci+on de propiedades
  public $var = 'un valor por omisión';
  #declaraci+on de métodos
  public function display_var()
  {
    echo $this->var;
  }
}

$shoe_variable = new MyClass();
$shoe_variable->display_var();

##CLASES DE SOLO LECTURA (READONLY)
/* una clase pueder ser marcada con el modificador readonly, marcar una clase como readonly añadira a ese modificador a cada clase declarada, y evitar la creación de propiedades dinámicas. Y no permiten ser modificadas. */

##Palabra clave new
#Instanciar una clase para que pueda ser utilizada, las clases deben ser definidas
# antes de la instanciación (en algunos casos, esto es imprescindible).

##crear una instancia utilizando una expresión arbitraria
class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function get_some_class(): string
{
  return 'ClassA';
}

var_dump(new (get_some_class()));
var_dump(new ('Class' . 'B'));
var_dump(new ('Class' . 'C'));
var_dump(new (ClassD::class));

/* En el contexto de la clase, es posible crear un nuevo objeto con new y new parent. Al asignar una instancia que fue asignado. Este comportamiento es el mismo al pasar una instancia a una función. Una copia de un objeto ya creado puede ser realizada por clonación. */
class SimpleClass
{
  public string $var;
}

$instance = new SimpleClass();

$assigned = $instance;
$reference = &$instance;

$instance->var = '$assigned tendrá este valor';
$instance = null;

var_dump($instance);
var_dump($reference);
var_dump($assigned);

#Es posible crear una instancia de un objeto de varias maneras
class Test
{
  public static function get_new()
  {
    return new static();
  }
}

class Child extends Test {}

$obj1 = Test::get_new(); #por el nombre de la clase
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::get_new(); #por el método de la clase
var_dump($obj3 instanceof Test);

$obj4 = Child::get_new(); #a través de la clase hija
var_dump($obj4 instanceof Child);

## Es posible acceder a un miembro de un objeto recien creado en una sola expresión.
echo (new DateTime())->format('Y');

/* Propiedades y métodos: Las propiedades y métodos de clase viven de espacios de nombre separados, por lo que es posible tener una propiedad y un método con el mismo nombre. Depende del contexto asi mismo el uso es un acceso variable o una llamada de función. */

class ThirdClass
{
  public $bar = 'property';

  public function bar(): string
  {
    return "método";
  }
}

$obj = new ThirdClass();
echo "</br>";
echo $obj->bar, $obj->bar();

/* Llamar a una función anónima almacenada en una propiedad */
class FourthClass
{
  public $bar;

  public function __construct()
  {
    $this->bar = function () {
      return 42;
    };
  }
}

$obj = new FourthClass();
echo ($obj->bar)();

# palabra clave "new"
/* Una clase puede heredar las constantes, métodos y propiedades de otra clase utilizando la palabra clave "extends" en la declaración. No es posible extender múltiples clases, una clase puede heredar solo de una clase base. Las constantes, métodos y propiedades heredadas pueden ser redefinidas redeclarándolas con el mismo nombre que en la clase padre. Sin embargo, si la clase padre ha definido un método o constante como final, entonces estos no pueden ser redefinidos. Es posible acceder a los métodos o propiedades estáticas redefinidas haciendo referencia a ellos con el operador parent::. */
class OtherClass
{
  function display_var()
  {
    echo "Clase padre";
  }
}

class ExtendClass extends OtherClass
{
  function display_var()
  {
    echo "Clase extendida";
    parent::display_var();
  }
}

$extended = new ExtendClass();
$extended->display_var();

/*
::class:
La palabra clave class también se utiliza para la resolución de nombres de clases. Es posible obtener el nombre completamente calificado de una clase ClassName utilizando ClassName::class. Esto es particularmente útil con las clases que utilizan espacios de nombres.
*/

#resolución de nombres de clase
// namespace NS {
//   class ClassName {}

//   echo ClassName::class;
// };

/* PROPIEDADES */

#Las variables dentro de una clase se denominan propiedades.
class MyFirstClass
{
  public $var1 = 'hello' . 'world';
  public $var2  = [true, false];
  #sin modificador de visibilidad
  static $var3;
  readonly int $var4;
}

//DECLARACIONES DE TIPOS
class User
{
  public int $id;
  public ?string $name;

  public function __construct(int $id, ?string $name)
  {
    $this->id = $id;
    $this->name = $name;
  }
}

$user = new User(1234, null);
var_dump($user->id);
var_dump($user->name);

#propiedad de solo lectura (READONLY)
#impide la modificación de la propiedad
class ReadOnlyClass
{
  public readonly string $prop;

  public function __construct(string $prop)
  {
    $this->prop = $prop;
  }
}

$test = new ReadOnlyClass('foo');
var_dump($test->prop);

#❌Reasignación ilegal
// $test->prop = 'bar';

//CONSTANTES DE CLASE
#definir constantes por clase que permanecen idénticas y no modificables
#definición y uso de constantes
class MyConstants
{
  const CONSTANT = 'valor constante';

  function show_constant()
  {
    echo self::CONSTANT . "\n";
  }
}

echo MyConstants::CONSTANT . "\n";
$class_name = 'MyConstants';
echo $class_name::CONSTANT . "\n";

$class = new MyConstants();
$class->show_constant();
echo $class::CONSTANT . "\n";

#::class permite una resolución de nombres de clase completameante cualificado en el momento
#de compilación, esto es útil para las clases en un espacio de nombres
#Ejemplo de uso de::class
// namespace foo {
//   class bar {}

//   echo bar::class; // foo\bar
// }

/* OPERADOR DE RESOLUCIÓN DE ÁMBITO (::) proporciona un medio para acceder a los miembros de una constante, una propiedad estatica o un método estático de una clase o de una de sus clases padre. */

#fuera de la definición de clase
class MyAmb
{
  const CONST_VALUE = 'un valor constante';
}

$classname = 'MyAmb';
echo $classname::CONST_VALUE;

echo MyAmb::CONST_VALUE;

#desde la definición de clase
class MoreClass
{
  const CONST_VALUE = 'un valor constante desde la clase MoreClass';
}

class OneMoreClass extends MoreClass
{
  public static $my_static = 'un valor estático';

  public static function double_colon()
  {
    echo parent::CONST_VALUE . "<br>";
    echo self::CONST_VALUE . "<br>";
  }
}

$classname = 'MoreClass';

OneMoreClass::double_colon();

//PROPIEDADES ESTÁTICAS
/* las propiedades estáticas so accedidas utilizando (::) y no puede ser accedida a través del operador objeto (->) */
class FooClass
{
  public static $my_static = 'foo';

  public function static_value()
  {
    return self::$my_static;
  }
}

class BarClass extends FooClass
{
  public function foo_static()
  {
    return parent::$my_static;
  }
}

print FooClass::$my_static . "<br>";

/* 
ABSTRACCIÓN DE CLASES:
PHP tiene clases, métodos y propiedades abstractas. Las clases definidas como abstractas no pueden ser instanciadas, y cualquier clase que contenga al menos un método abstracto debe ser también abstracta. Los métodos definidos como abstractos se contentan con declarar la firma del método y con indicar si es público o protegido; no pueden definir la implementación. Las propiedades definidas como abstractas pueden declarar un requisito para el comportamiento de get o de set, y pueden proporcionar una implementación para una de estas operaciones, pero no para ambas.
*/
abstract class AbstractClass
{
  #fuerza a las clases hijas a definir este método
  abstract protected function get_value();
  abstract protected function prefix_value($prefix);

  #método común
  public function print_out()
  {
    print $this->get_value() . "<br>";
  }
}

class ConcreteClass1 extends AbstractClass
{
  public function get_value()
  {
    return "ConcreteClass1";
  }

  public function prefix_value($prefix)
  {
    return "{$prefix}ConcreteClass1";
  }
}


$class1 = new ConcreteClass1();
$class1->print_out();
echo $class1->prefix_value('FOO_'), "<br>";

#CLASES ANÓNIMAS
#cuando se necesita crear objetos únicos simples
# clase explícita
// class Logger
// {
//   public function log($msg)
//   {
//     echo $msg;
//   }
// }
// $util->setLogger(new Logger());

#clase anónima
// $util->setLogger(new class
// {
//   public function log($msg)
//   {
//     echo $msg;
//   }
// });

## RECORRIDO DE OBJETOS
class MyClassIterator
{
  public $var1 = 'valor 1';
  public $var2 = 'valor 2';
  public $var3 = 'valor 3';

  protected $protected = 'variable protegida';
  private   $private   = 'variable privada';

  function iterateVisible()
  {
    echo "MyClass::iterateVisible:\n";
    foreach ($this as $key => $value) {
      print "$key => $value\n";
    }
  }
}

$class = new MyClassIterator();

foreach ($class as $key => $value) {
  print "$key => $value\n";
}
echo "\n";

$class->iterateVisible();

/* PALABRA CLAVE FINAL EN LAS CLASES: impide que las clases hijas redefinan un método, una propiedad o constante prefijando la definición con final. Si la clase misma es definida como final, no podrá ser extendida. */
class BaseClass
{
  public function test()
  {
    echo "BaseClass::test() llamada\n";
  }

  final public function moreTesting()
  {
    echo "BaseClass::moreTesting() llamada\n";
  }
}

$base = new BaseClass();
$base->test();
$base->moreTesting();
