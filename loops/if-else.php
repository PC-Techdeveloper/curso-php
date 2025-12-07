<?php
$number = 10;

if ($number > 5) {
  echo "El número es mayor que 5";
} else {
  echo "El número es menor que 5";
}

#elseif-else if
#good practice ✅
$a = 10;
$b = 5;

if ($a > $b):
  echo $a . " es más grande que " . $b;
elseif ($a == $b): // Las dos palabras están unidas
  echo $a . " igual " . $b;
else:
  echo $a . " es más grande o igual a " . $b;
endif;
