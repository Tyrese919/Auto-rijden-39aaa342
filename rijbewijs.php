<?php

echo "Hoe oud ben je?".PHP_EOL;
$jaartal = readline ();

$a = 16.49;
$b = 16.50;

  if ($jaartal < $b) {
    echo "Je mag nog niet je rijbewijs doen.";
  }

  if ($a < $jaartal) {
    echo "Je mag je rijbewijs doen";
  }
