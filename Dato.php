<?php

class Dato {

    private $intervalo;
    private $tiempo;
    private $listaNotas;

    public function __construct() {

        do {
            $this->tiempo = (int)(readline("Cuántos minutos quieres tocar? "));
        } while ($this->tiempo == 0);

        do {
            $this->intervalo = (int)(readline("Cuántos segundos entre notas? "));
        } while ($this->intervalo == 0);

        $this->listaNotas = $lista_notas = (readline("Qué notas quieres practicar? (escríbelas separadas por espacios o escribe TODAS para practicar todas) "));;

    }

    public function getDato() {
        return [
            "tiempo" => $this->tiempo,
            "intervalo" => $this->intervalo,
            "listaNotas" => $this->listaNotas];
    }
        
    
}