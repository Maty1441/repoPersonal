<?php
    require_once(__DIR__ . "/../config/database.php");
    
    class TrabajadorModel {

        private $db;

        //Atributos
        private $ci;
        private $fnac;
        private $nombre;
        private $apellido;
        private $activo;
        private $email;
        private $password;

        //Constructor
        public function __construct()
        {
            $this->db = Conectar::conexion();
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

        public function setApellido(String $value):void {
            $this->apellido = $value;
        }

        public function getCedula():string {
            return $this->ci;
        }

        public function getActivo():string {
            return $this->activo;
        }

        //se asegura que el estado sea activo o inactivo
        public function setEstado(String $nuevoEstado): void {
        if ($nuevoEstado === "activo" || $nuevoEstado === "inactivo" || $nuevoEstado === "suspendido") {
            $this->estado = $nuevoEstado;
        } else {
            throw new Exception("Estado inválido. Debe ser 'activo' , 'inactivo' o 'suspendido'.");
        }
    }

    public function ci_existe($ci){
        $sql = "SELECT COUNT(*) as count FROM persona WHERE ci = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $ci);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();
        return $data['count'] > 0;
    }

    public function agregarTrabajador(String $ci, String $fnac, String $nombre, String $apellido, String $email, String $password, String $activo = "0") {

        $this->ci = $ci;
        $this->fnac = $fnac;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->activo = $activo;
        $this->email = $email;
        $this->password = $password;

        if ($this->ci_existe($ci)) {
            return false;
        }

        $sql = "INSERT INTO persona (CI, FechaNac, Nombre, Apellido, Email, Contrasena, Activo) VALUES ('$ci', '$fnac', '$nombre', '$apellido', '$email', '$password', '$activo');";
        $resultado = $this->db->query($sql);
 
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }

    public function verTrabajadores() {
        $sql = "SELECT * FROM persona";
        $resultado = $this->db->query($sql);

        // devolver todos los registros como array asociativo
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

        // Método mágico para imprimir toda la información de los atributos
        public function __toString()
        {
            return "El nombre es: " . $this->getNombre() . " El appelido es: " . 
            $this->getApellido() . " y la cédula es: " . $this->getCedula();
        }
    }

?>