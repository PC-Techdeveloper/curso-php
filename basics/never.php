<?php
/* never es un tipo de retorno que indica que la función nunca termina, es un tipo de dato vacío. */

function say_hello(string $name): never
{
  echo "Hola $name";
  exit(); //lanza una excepción
}

say_hello('Pepito');
