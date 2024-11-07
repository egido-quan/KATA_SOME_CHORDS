<?php

class Notas {

    private static $notas = ["DO", "RE", "MI", "FA", "SOL", "LA", "SI"];
    private $tiempo, $intervalo;

    public function __construct($tiempo, $intervalo) {
        $this->tiempo = $tiempo;
        $this->intervalo = $intervalo;
    }

    public function lanzar_notas() {

        $bucle = (int)($this->tiempo * 60 / $this->intervalo);
        for ($i=0; $i<$bucle; $i++) {
            echo self::$notas[rand(0,6)] . PHP_EOL;
            sleep($this->intervalo);
}
    }
    


}