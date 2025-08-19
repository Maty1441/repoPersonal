<?php

class Persona2 {

private $ci;
private $nombre;
private $apellido;

public function __construct(string $ci, string $nombre, string $apellido) {
    $this->ci = $ci;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
}   

public function getCi(): string {
    return $this->ci;
}

public function getNombre(): string {
    return $this->nombre;
}

public function getApellido(): string {
    return $this->apellido;
}

public function caminar(): string{
    return "Puedes caminar";
}

public function saltar(): string{
    return "Puedes saltar";
}

}

?>