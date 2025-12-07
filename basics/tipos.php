<?php
/*Null: Es el tipo de unidad PHP, es decir, solo tiene un valor null. */
$var = null;
var_dump($var);

#Conversión a null
$foo = NULL;

var_dump(is_null($foo));
#destruye una variable
function destroy_foo()
{
  global $foo;
  unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;

#booleanos
$action = 'shoe version';
$show_separator = false;

if ($action == 'shoe version') {
  echo 'La versión es 1.23';
};

##conversión en booleanos
var_dump((bool) "");
var_dump((bool) "0");
var_dump((bool) 1);
var_dump((bool) -2);
var_dump((bool) "foo");
var_dump((bool) 2.3e5);
var_dump((bool) array(12));
var_dump((bool) array());
var_dump((bool) "false");

#Enteros
$a = 123;
$a = 0123;
$a = 0o123;
$a = 0x123;
$a = 0b1010;
$a = 1_234_567;
var_dump($a);
# Conversión a enteros
var_dump(25 / 7);
var_dump((int) (25 / 7));
var_dump(round(25 / 7));

##Floats
$a = 123.456;
$b = 1.2e3;
$c = 1_234.567;

print_r($c);

##Strings
// Un string literal puede ser de comillas simples, dobles, heredor, nowdoc
echo 'esto es un string simple', PHP_EOL;
##Heredoc: <<< y el identificador de cierre puede estar identado con espacios o tabulaciones.
echo <<<END
  esto es un string heredoc
END;
//expresión después de un identificador de cierre.
$values = [<<<END
a
  b
    c
END, 'd e f'];
var_dump($values);

$str = <<<EOD
Ejemplo de string
que se extiende sobre múltiples líneas
usando la sintaxis heredoc
EOD;

echo $str;
//con argumentos
var_dump(array(
  <<<EOD
foobar!
EOD
));

//nowdoc: Son para los strings entre comillas simples 
echo <<<'EOD'
Ejemplo de string que se extiende sobre múltiples líneas
usando la sintaxis nowdoc. Las barras invertidas son siempre tratadas literalmente,
es decir \\ y \'.
EOD;

/* Interpolación de strings: Las variables pueden ser sustituidas dentro */
$juice = 'appenzeller';

echo "El bebió un poco de $juice jugo.";
##sintaxis de llaves
$great = 'great';
// echo "Esto es ${great}";

##string numérica: int o un float
var_dump("0D1" == "000");
var_dump("0E1" == "000");
var_dump("2E1" == "020");
##utilizados en contexto númerico
$foo = 1 + "10.5"; //casting, conversión de tipo
echo $foo;
