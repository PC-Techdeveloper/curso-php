<?php
class Foo
{
  function variable()
  {
    $name = 'Bar';
    $this->$name(); //llama al método Bar
  }

  function Bar()
  {
    echo 'Es Bar';
  }
}

$foo = new Foo();
$func_name = 'variable';
$foo->$func_name();

#con propiedades estáticas
class SecondFoo
{
  static $variable = 'propiedad estática ';

  static function variable()
  {
    echo 'método variable llamado...';
  }
}

echo SecondFoo::$variable;
$variable = 'variable';
SecondFoo::variable();
