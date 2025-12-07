<?php
/* allowing you to store data and modify it later. fwrite is the most commonly used one. it requires two arguments the file pointer and the string of data to be written. */

#file_get_contents: is used to get the current data.
#file_put_contents: is used to write back to the file.
$file = 'data.txt';
$current = file_get_contents($file);
$current .= "New data\n";
file_put_contents($file, $current);
