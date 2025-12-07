<?php
// TRAIT
/* Un trait es similar a una clase, pero solo sirve para agrupar funcionalidades de una manera interesante. No es posible instanciar un Trait en sí mismo. Es un añadido a la herencia tradicional, que permite la composición horizontal de comportamientos, es decir, el uso de métodos de clase sin necesidad de herencia. */
trait TraitA
{
  public function say_hello()
  {
    echo "Hello";
  }
}

trait TraitB
{
  public function say_world()
  {
    echo "World!";
  }
}

class MyHelloWorld
{
  use TraitA, TraitB;

  public function say_hello_world()
  {
    $this->say_hello();
    echo " ";
    $this->say_world();
  }
}

$say_hello = new MyHelloWorld();
$say_hello->say_hello_world();
