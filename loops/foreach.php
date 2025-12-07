<?php

$array = [1, 2, 3, 4, 5];

foreach ($array as $value) {
  echo "Elemento actual de \$array: " . $value . "<br>";
}

#ejemplo clave-valor
$array = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'four' => 4,
  'seventeen' => 17,
];

foreach ($array as $key => $value) {
  echo "Clave: $key => Valor: $value<br>";
}
