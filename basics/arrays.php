<?php
/* Un array en PHP, es un mapa ordenado. Un mapa es un tipo que asocia valores a claves, este tipo está optimizado para varios usos diferentes, puede ser tratado como un array, lista (vector), tabla hash (implementación de un mapa) diccionario, colección de pila, cola y mucho más.también son posibles árboles y array multidimensionales. */
$array1 = array('foo' => 'bar', 'bar' => 'foo');

#sintaxis corta
$arrya2 = ['foo' => 'bar', 'bar' => 'foo'];

var_dump($arrya2, $array1);

#conversión de tipos y escritura
$array = array(1 => 'a', 2 => 'b', 1.5 => 'c', '1' => 'd');
var_dump($array);

#Puede contener claves int y string mezcladas
$array = array(
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
);

var_dump($array);

#Array indexado sin claves
$array = array('foo', 'bar', 'baz');
var_dump($array);
# las claves no está en todos los elementos
$array = array(
  "a",
  "b",
  6 => "c",
  "d",
);
var_dump($array);

#Acceso a elementos de array con sintaxis de corchetes
$array =  array(
  "foo" => "bar",
  42    => 24,
  "multi" => array(
    "dimensional" => array(
      "array" => "foo"
    )
  )
);
echo $array['foo'];
echo $array[42];
echo $array['multi']['dimensional']['array'];

#agregar elementos
$arr = [5 => 1, 12 => 2];
$arr[] = 56;
//es lo mismo que 
//$arr['x'] = 13;

//eliminar elemento del array
unset($arr[5]);
var_dump($arr);
//eliminar todo el array
unset($arr);
// print_r($arr);

/* destructuración de arrays */

$source_array = ['foo', 'bar', 'baz'];

[$foo, $bar, $baz] = $source_array;

echo $foo;
echo $bar;
echo $baz;
#puede ser usasda en iterción foreach para desestructurar un array multidimensional
#mientras se itera sobre el.
$source_array = [
  [1, 'john'],
  [2, 'jane'],
];

foreach ($source_array as [$id, $name]) {
  echo "ID: $id, Name: $name\n";
}
#los elementos de un array serán ignorados si la variable no está proporcionada.
#siempre comienza con el indice 0.
$source_array = ['foo', 'bar', 'baz'];

[,, $baz] = $source_array;
echo $baz;
var_dump($baz);

#arrays asociativos también pueden ser desestructurados
$source_array = ['foo' => 1, 'baz' => 2, 'bar' => 3];
['baz' => $three] = $source_array;

print_r($three);

#Intercambio de variables
$a = 1;
$b = 2;

[$b, $a] = [$a, $b];
echo $a;
echo $b;
print_r($a);
print_r($b);
