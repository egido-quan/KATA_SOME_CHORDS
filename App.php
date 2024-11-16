<?php

include "Notas.php";
include "Dato.php";

$dato = new Dato();


$notas = new Notas($dato->getDato());
$notas->lanzar_notas() . PHP_EOL;
