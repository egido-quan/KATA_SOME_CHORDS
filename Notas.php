<?php

class Notas {

    private $notas;
    private $tiempo, $intervalo;

    public function __construct($tiempo, $intervalo, $notas) {
        $this->tiempo = $tiempo;
        $this->intervalo = $intervalo;
        $this->notas = $notas;
    }

    public function lanzar_notas() {

        $bucle = (int)($this->tiempo * 60 / $this->intervalo);
        for ($i=0; $i<$bucle; $i++) {
            echo $this->notas[rand(0,count($this->notas) - 1)] . PHP_EOL;
            sleep($this->intervalo);
}
    }
    


}