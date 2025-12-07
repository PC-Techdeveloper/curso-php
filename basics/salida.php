<?php
/* printf: permite formatear los valores de la salida, intercalar texto entre ellos, puede incluir caracteres especiales como formatear las variables.

%s: cadena de caracteres
%d: entero sin decimales
%f: decimal con decimales
%c: caracter ASCII
*/
$var = 'steven';
$num = 3;
printf("Pude facilmente intercalar <b>%s</b> con numeros <b>%d</b><br>", $var, $num);

printf("<TABLE BORDER=1 CELLPADDING=5>");
for ($i = 0; $i < 10; $i++) {
  printf("<tr><td>%10.d</td></tr>", $i);
}
printf("</table>");
