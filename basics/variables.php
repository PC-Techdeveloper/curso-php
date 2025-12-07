<?php
#ámbito de variables

$a = 1; #global
$b = 2;

function sum()
{
  global $a, $b;
  $b =  $a + $b;
}

sum();
echo $b;

#variable estática
#existe solo en el ámbito local de la función
function test()
{
  static $a = 0;
  echo $a;
  $a++;
}

test();
