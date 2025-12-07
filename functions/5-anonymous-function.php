<?php
/* las funciones anónimas, también llamadas closures que permiten la creación de funciones sin especificar su nombre. Las funciones anónimas están implementadas utilizando la clase Closure. */

echo preg_replace_callback('~-([a-z])~', function ($match) {
  return strtoupper($match[1]);
}, 'hola-mundo');

#herencia de variables desde el contexto padre
$message = 'hola';

// // Sin "use"
// $example = function () {
//   var_dump($message);
// };
// $example();

#una declaración de tipo de retorno para la función debe ser colocada después de 
#la clausula use.
// Hereda $message
$example = function () use ($message) {
  var_dump($message);
};
$example();
