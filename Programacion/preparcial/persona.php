<?php
class Persona {
    private $nombre;
    private $apellido;
    private $ciudad;

    public function __construct($nombre, $apellido, $ciudad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ciudad = $ciudad;
    }

    public function getNombre(){ 
        return $this->nombre;
    }

    public function getApellido(){ 
        return $this->apellido;
    }
    
    public function getCiudad(){ 
        return $this->ciudad;
    }  

    public function setNombre($nombre){ 
        $this->nombre = $nombre;
    }

    public function setApellido($apellido){ 
        $this->apellido = $apellido;
    }

    public function setCiudad($ciudad){ 
        $this->ciudad = $ciudad;
    }

public function __toString(){
   	return "<p>
    Nombre: $this->nombre 
    Apellido: $this->apellido
    Ciudad: $this->ciudad
    </p>";
}

}
?>