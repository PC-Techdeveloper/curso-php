<?php

/*
fopen: to open a file for reading.
fgets: function lets you read a file line by line.
fread: reads a specified number of byte.
file_get_contents: reading the entire file
*/

$file = fopen('example.txt', 'r');

if ($file) {
  while (($line = fgets($file)) !== false) {
    echo $line;
  }

  fclose($file);
} else {
  echo "Error opening file 📁";
}
