<?php
/* Un callable es una referencia a una función o método que se pasa a otra función como argumento. Se representa con la declaración de tipo callable (callback). */

function foo(callable $callback)
{
  $callback();
}

foo(function () {
  echo "Hello World!";
});
