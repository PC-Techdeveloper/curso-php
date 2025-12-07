<?php
/* ??: Devuelve el primer operando si existe y no tiene un valor null, y devuelve el segundo operando en caso contrario. */

$identificador = $_GET['usuario'] ?? 'ninguno';
#es equivalente a
#$identificador = isset($_GET['usuario']) ? $_GET['usuario'] : 'ninguno';

#permite encadenar 
$identificador = $_GET['usuario'] ?? $_POST['usuario'] ?? 'ninguno';

# operador nave espacial: compara dos expresiones. Devuelve -1,0 o 1
echo 1 <=> 1;
echo 1 <=> 2;
echo 1 <=> 1;
echo 1 <=> 1.5;
echo 'a' <=> 'b';

/* ARRAYS CONSTANTES CON DEFINE:
Ahora pueden ser definidos con la función define()
*/

define('ANIMALES', [
  'perro',
  'gato',
  'raton',
]);

echo ANIMALES[1];
