<?php
#las funciones flecha capturan variables por valor automáticamente
$y = 1;

$fni = fn($x) => $x + $y;

var_export($fni(3));

fn(array $x) => $x;
static fn($x): int => $x;
fn($x = 42) => $x;
fn(&$x) => $x;
fn&($x) => $x;
fn($x, ...$rest) => $rest;