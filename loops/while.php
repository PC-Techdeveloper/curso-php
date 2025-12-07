<?php

$i = 1;

while ($i <= 10) {
  echo $i++;
}

//sintaxis alternativa
$i = 1;

while ($i <= 10):
  echo $i;
  $i++;
endwhile;

#do-while
$i = 0;
do {
  echo $i;
} while ($i > 0);
