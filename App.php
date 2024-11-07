<?php

include "Notas.php";

const NOTAS = ["DO", "RE", "MI", "FA", "SOL", "LA", "SI"];

$t = (int)(readline("Cuántos minutos quieres tocar? "));
$s = (int)(readline("Cuántos segundos entre notas? "));

$is_nota = false;
while (!$is_nota) {
$lista_notas = (readline("Qué notas quieres practicar? (escríbelas separadas por espacios o escribe TODAS para practicar todas) "));
if (strtolower($lista_notas) == "todas") {
    $lista_notas = NOTAS;
    $is_nota = true;
} else {
    $is_nota = true;
    $lista_notas = (explode(" ",strtoupper($lista_notas)));
    foreach ($lista_notas as $nota) {
        if (!in_array($nota, NOTAS)) {
            $is_nota = false;
            echo "Alguna de las notas que has puesto no es una nota musical" . PHP_EOL;
            break;
        }
    }

}
}

$notas = new Notas($t, $s, $lista_notas);
$notas->lanzar_notas() . PHP_EOL;
