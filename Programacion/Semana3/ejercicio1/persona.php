<?php

class Persona {

    private $nombre;
    private $apellido;
    private $edad;

    public function __construct(string $nombre, string $apellido, int $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function mostrarInformacion() {
        return "Nombre: ". $this->nombre . "<br>Apellido: " . $this->apellido . "<br>Edad: " . $this->edad;
    }
    
}