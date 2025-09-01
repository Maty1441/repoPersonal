<?php

class Alumno{

    private $nombre;
    private $notas = [];
    private $promedio = 0;

    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->notas = [];
    }

    public function agregarNota($nota){
        $this->notas[] = $nota;
        $this->actualizarPromedio();
    }
     private function actualizarPromedio(){
        if (count($this->notas) > 0) {
            $this->promedio = array_sum($this->notas) / count($this->notas);
        } else {
            $this->promedio = 0;
        }
    }
    //array_sum — Suma todos los valores de un array
    //count — Cuenta cuantas notas hay en el array

    public function getNombre(){
        return $this->nombre;
    }

    public function getPromedio(){
        return $this->promedio;
    }


}
?>