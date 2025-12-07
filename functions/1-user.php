<?php
//declaración de una nueva función
function foo($arg1, $arg2)
{
  echo "Ejemplo de función";
}

#funciones condicionales
$makefoo = true;

#funciones dentro de otra función
function func()
{
  function child_func()
  {
    echo "No existe hasta que func() sea llamado.";
  }
}

func();
child_func();

#función recursiva
function recursion($n)
{
  if ($n < 20) {
    echo $n;
    recursion($n + 1);
  }
}

recursion(0);
