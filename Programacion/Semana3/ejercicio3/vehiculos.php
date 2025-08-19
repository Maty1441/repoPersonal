<?php

class Vehiculo {

private $marca;
private $modelo;
private $año;
private $kilometraje;

public function __construct(string $marca, string $modelo, int $año, float $kilometraje) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->año = $año;
    $this->kilometraje = $kilometraje;
}

public function actualizarKilometraje(float $kilometraje): void {
    $this->kilometraje += $kilometraje; // Suma al kilometraje actual
}

    public function getKilometraje(): float {
        return $this->kilometraje;
    }
    public function getMarca(): string {
        return $this->marca;
    }
    public function getModelo(): string {
        return $this->modelo;
    }
    public function getAño(): int {
        return $this->año;
    }


}