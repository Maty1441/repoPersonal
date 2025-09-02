<?php

class Producto{

    private $nombre;
    private $precio;
    private $cantidad;

}

class Pedido{

    private $productos = [];

    public function agregarProducto($nombre, $precio, $cantidad){
    $this->productos[] = $productos;
}

    public function calcularTotal(){
        $total = count($this->productos);
        return $total;
}

    public function getTotal(){
        return $this->total;
    }

    public function getNombre(){
        return $this->nombre;
    }




}

