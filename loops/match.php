<?php

/* La expresión match permite realizar una evaluación basada en el control de identidad de un valor. De manera similar a una instrucción switch, una expresión match tiene una expresión sujeto que es comparada con varias alternativas. */

$food = 'cake';

$return_value = match ($food) {
  'apple'   => 'this food is an apple 🍎',
  'banana'  => 'this food is a banana 🍌',
  'cake'    => 'this food is a cake 🍰',
};

var_dump($return_value);
