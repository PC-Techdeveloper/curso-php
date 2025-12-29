<?php
/* valores de retorno: Son devueltos utilizando una instrucción return opcional. Esto hace que la función termine su ejecución inmediatamente y pase el control a la línea llamante. */
function square($number)
{
  return $number * $number;
}

function sum($num1, $num2)
{
  return $num1 + $num2;
}

echo sum(4, 4);

echo square(4);

#devolviendo un array de una función
function small_number()
{
  return [0, 1, 2];
}

[$zero, $one, $two] = small_number();
echo $zero;
echo $one;
echo $two;

list($zero, $one, $two) = small_number();

#devolver una referencia de una función
function &back_reference($uneref)
{
  return $uneref;
}

$new_reference = &back_reference('hello');
echo $new_reference;
