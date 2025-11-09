<?php

    class TrabajadorModel {

        //Atributos
        private $nombre;
        private $apellido;
        private $cedula;
        private $estado;

        //Constructor
        public function __construct(String $nombreU, String $apellidoU, String $cedulaU, String $estadoU)
        {
            //Atributo de la clase = valor del usuario
            $this->nombre = $nombreU;
            $this->apellido = $apellidoU;
            $this->cedula = $cedulaU;
            $this->estado = $estadoU;
        }

        public function getNombre():string {
            return $this->nombre;
        }

        public function setNombre(String $value):void {
            $this->nombre = $value;
        }

        public function getApellido():string {
            return $this->apellido;
        }

        public function getCedula():string {
            return $this->cedula;
        }

        public function getEstado():string {
            return $this->estado;
        }

        //se asegura que el estado sea activo o inactivo
        public function setEstado(String $nuevoEstado): void {
        if ($nuevoEstado === "activo" || $nuevoEstado === "inactivo" || $nuevoEstado === "suspendido") {
            $this->estado = $nuevoEstado;
        } else {
            throw new Exception("Estado inválido. Debe ser 'activo' , 'inactivo' o 'suspendido'.");
        }
    }

        // Método mágico para imprimir toda la información de los atributos
        public function __toString()
        {
            return "El nombre es: " . $this->getNombre() . " El appelido es: " . 
            $this->getApellido() . " y la cédula es: " . $this->getCedula();
        }
    }

?>