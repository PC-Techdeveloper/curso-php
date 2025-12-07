<?php

declare(strict_types=1);
#lista de parámetros de funcion como una coma final
function takes_many_args($a, $b, $c, $again = 'a default string')
{
  echo "a: $a, b: $b, c: $c, again: $again";
}

takes_many_args(1, 2, 3);

#paso de argumentos por referencia
function add_some_extra(&$string)
{
  $string .= ', y un poco más.';
}

$str = 'Esto es un string';
add_some_extra($str);
echo $str;

#valores por defecto de parámetros

function servir_cafe($type = "cappuccino "): string
{
  return " Servir un café de $type";
}

echo servir_cafe();
echo servir_cafe(null); #no define el valor por defecto
echo servir_cafe("expresso");

#uso de objetos como valores por defecto 
class DefaultCoffeMaker
{
  public function brew(): string
  {
    return "Hacer café";
  }
}

class FancyCoffeMaker
{
  public function brew(): string
  {
    return "Crear un café bonito solo para usted.";
  }
}

function make_coffe($coffeMaker = new DefaultCoffeMaker()): string
{
  return $coffeMaker->brew();
}

echo make_coffe();
echo make_coffe(new FancyCoffeMaker());

#uso correcto de parámetros de función por defecto
function make_yogurt($flayour, $container = 'bol'): string
{
  return "Preparar un $container de yogurt a la $flayour";
}

print make_yogurt('Framboise');

#argumentos posicionales y nombrados
#posicionales
array_fill(0, 100, 50);
#nombrados
array_fill($start_index = 0, $count = 100, $value = 50);
