<?php

class Producto {

private $nombre;
private $precio;
private $stock;
private $productos;

function __construct(string $nombre, float $precio, int $stock) {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->stock = $stock;
}

public function modPrecio(float $nuevoPrecio): void {
        $this->precio = $nuevoPrecio;
    }

    public function modStock(int $nuevoStock): void {
        $this->stock = $nuevoStock;
    }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    

}
?>