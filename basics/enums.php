<?php
/* Las enumeraciones son una capa restrictiva sobre las clases y las constantes de clase. Permiten definir un conjunto cerrado de valores posibles para un tipo. */
enum Suit
{
  case SPADES;
  case HEARTS;
  case DIAMONDS;
  case CLUBS;
}

function do_stuff(Suit $s)
{
  echo $s;
}
