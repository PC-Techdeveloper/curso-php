<?php
/* los tratis es similiar a una clase, pero solo sirve para agrupar funcionalidades de una manera interesante.*/
trait TraitA
{
  public function saY_hi()
  {
    echo "hola";
  }
}

trait TraitB
{
  public function say_world()
  {
    echo "mundo";
  }
}

class Phrase
{
  use TraitA, TraitB; //una clase puede usar múltiples traits

  public function say_phrase()
  {
    $this->saY_hi();
    echo "<br>";
    $this->say_world();
  }
}

$say_phrase = new Phrase();

$say_phrase->say_phrase();

#con orden de precedencia
class Base
{
  public function say_hello()
  {
    echo "hello";
  }
}

trait SayWorld
{
  function say_hello()
  {
    parent::say_hello();
    echo " world";
  }
}

class MyHelloWorld extends Base
{
  use SayWorld;
}

$o = new MyHelloWorld();
$o->say_hello();

# obligaciones por los métodos abstractos
trait Hola
{
  public function say_hola_mundo()
  {
    echo "Hola " . $this->get_world();
  }
  abstract public function get_world();
}

class MyHelloWorld2
{
  private $word;
  use Hola;

  public function get_world()
  {
    return $this->word;
  }

  public function set_world($word)
  {
    $this->word = $word;
  }
}

# variables estáticas con los traits
trait Counter
{
  public function inc()
  {
    static $c = 0;
    $c++;
    echo $c . "<br>";
  }
}

class C1
{
  use Counter;
}

class C2
{
  use Counter;
}

$counter1 = new C1();
$counter1->inc();

$counter2 = new C2();
$counter2->inc();
