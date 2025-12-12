<?php
/* El operador |> o pipe acepta un callable de un solo parámetro en el lado derecho y le pasa el valor del lado izquierdo, evaluando el resultado y en el lado derecho puede ser un closure, callable de primera clase, etc. */

# usando el operador |>
$result = "PHP Rocks"
|> htmlentities(...)
|> str_split(...)
|> (fn($x) => array_map(strtoupper(...), $x))
|> (fn($x) => array_filter($x, fn($v) => $v != 'O'));
print_r($result);

$temp = "PHP Rocks";
$temp = htmlentities($temp);
$temp = str_split($temp);
$temp = array_map(strtoupper(...), $temp);
$temp = array_filter($temp, fn($v) => $v != 'O');
$result = $temp;
print_r($result);
