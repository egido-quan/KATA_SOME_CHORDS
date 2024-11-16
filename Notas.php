<?php

class Notas {

    private $dato;
    private static $notas = ["DO", "RE", "MI", "FA", "SOL", "LA", "SI"];

    public function __construct(array $dato) {
        $this->dato = $dato;
    }

    public function lanzar_notas() {

        $listaNotas = self::checkListaNotas();
        if ($listaNotas == []) {
            echo "Alguna de las notas que has puesto no es una nota musical." . PHP_EOL;
        } else {
            $bucle = (int)($this->dato["tiempo"] * 60 / $this->dato["intervalo"]);
            for ($i=0; $i<$bucle; $i++) {
                $nota = rand(0,count($listaNotas) - 1);
                echo $listaNotas[$nota] . PHP_EOL;
                sleep($this->dato["intervalo"]);    
            } 
        }      
    }

    protected function checkListaNotas() :array {
        $is_nota = false;
        while (!$is_nota) {
            if (strtolower($this->dato["listaNotas"]) == "todas") {
                $listaNotas = self::$notas;
                $is_nota = true;
            } else {
                $listaNotas = (explode(" ",strtoupper($this->dato["listaNotas"])));
                foreach ($listaNotas as $nota) {
                    if (!in_array($nota, self::$notas)) {
                        $listaNotas = [];
                    }
                }
                $is_nota = true;                

            }
        }

        return $listaNotas;
    }
    


}