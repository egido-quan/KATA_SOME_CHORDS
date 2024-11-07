<?php

include "Notas.php";

$t = (int)(readline("Cuántos minutos quieres tocar?"));
$s = (int)(readline("Cuántos segundos entre notas?"));

$notas = new Notas($t, $s);
$notas->lanzar_notas() . PHP_EOL;
