<?php

class libro {
    private $titulo;
    private $autor;
    private $precio;

 function __construct($titulo, $autor, $precio) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->precio = $precio;
}

}

class biblioteca {
    private $libros = [];
    
 public function __construct() {
    $this->libros = [];
}

 public function agregarLibro($titulo) {
    $this->libros[] = $titulo;
}

 public function listarLibros() {
    if (empty($this->libros)) {
        echo "No hay libros en la biblioteca.<br>";
    } else {
        echo "Libros en la biblioteca:<br>";
        foreach ($this->libros as $indice => $libro) {
            echo ($indice + 1) . ". " . $libro . "<br>";
        }
    }
}
}


?>