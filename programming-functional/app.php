<?php
#funciones de orden superior
$inside = [1, 2, 3, 4, 5];

$filter_includes = function ($element) {
  return (($element % 2) == 0);
};

$return = array_filter($inside, $filter_includes);

$return = array_filter($inside, function ($element) {
  return (($element % 2) == 0);
});

print_r($return);

#closures: puede acceder a las variables importadas fuera sin usar variables globales 
function criterio_mayor_que($min)
{
  return function ($element) use ($min) {
    return $element > $min;
  };
}

$entrada = array(1, 2, 3, 4, 5);
$salida = array_filter($entrada, criterio_mayor_que(3));
print_r($salida);
