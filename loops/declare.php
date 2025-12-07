<?php
/* el elemento declare se utiliza para añadir directivas de ejecución en un bloque de código. La expresión directive permite controlar la intervención del bloque declare, actualmente, solo tres directivas son reconocidas: ticks, endcoding, strict_types */

/* Un tick es un evento que interviene cada N comandos de bajo nivel tickables, ejecutados por el analizador en el bloque de declare. El valor de N es especificado por la sintaxis ticks=N en el bloque de directiva declare. */

declare(ticks=1);

#una función llamada en cada evento tick
function tick_handler()
{
  echo "tick_handler() llamada\n";
}

register_tick_function('tick_handler'); # causa un evento tick

$a = 1;

if ($a > 0) {
  $a += 2; #causa un evento tick
  print $a;
}

#codificiacióN: puede ser especificada por un script utilizando la directiva encoding
declare(encoding='IS0-8859-1');
