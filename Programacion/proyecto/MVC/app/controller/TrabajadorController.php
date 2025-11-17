<?php
require_once(dirname(dirname(__FILE__)) . '/models/TrabajadorModel.php');

class TrabajadorController {

    public function agregar(): void {
   
        $ci = $_POST["ci"];
        $fnac = $_POST["fnac"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $activo = $_POST["activo"];

        $persona = new TrabajadorModel($ci, $fnac, $nombre, $apellido, $email, $password, $activo);
        $persona->agregarTrabajador($ci, $fnac, $nombre, $apellido, $email, $password, $activo);
        header("Location: ../views/dashboard/inicio.html");
}

    public function verTrabajadores() {
        $model = new TrabajadorModel();
        return $model->verTrabajadores(); // devuelve array asociativo
    }

    public function cambiarEstado(String $cedula, String $nuevoEstado): void {
    if (!isset($_SESSION['trabajadores'])) return;

    foreach ($_SESSION['trabajadores'] as $trabajador) {
        if ($trabajador->getCedula() === $cedula) {
            $trabajador->setEstado($nuevoEstado);
            header("Location: ../app/views/dashboard/inicio.html"); 
        }
    }
    echo "No se encontró trabajador con esa cédula.<br>";
}

    public function modificarTrabajador(String $cedula, String $nuevoNombre, String $nuevoApellido): void {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                $trabajador->setNombre($nuevoNombre);
                $ref = new ReflectionClass($trabajador);
                if ($ref->hasMethod('setApellido')) {
                    $trabajador->setApellido($nuevoApellido);
                } else {
                    echo "Aviso: el modelo no permite modificar el apellido.<br>";
                }
                echo "Trabajador con cédula $cedula modificado.<br>";
                return;
            }
        }
        echo "No se encontró un trabajador con la cédula proporcionada.<br>";
    }

    public function eliminarTrabajador(String $cedula): void {
        foreach ($_SESSION['trabajadores'] as $index => $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                unset($_SESSION['trabajadores'][$index]);
                //Datos importantes, reindexar el arreglo es necesario para tener mejor control
                //De nuestra estructura de datos. array_values siempre es necesario
                $_SESSION['trabajadores'] = array_values($_SESSION['trabajadores']);
                header("Location: ../app/views/dashboard/inicio.html");
                return;
            }
        }
        echo "No se encontró un trabajador con esa cédula.<br>";
    }

    public function limpiarTrabajadores(): void {
        unset($_SESSION['trabajadores']);
        $_SESSION['trabajadores'] = [];
        echo "Se ha limpiado la lista de trabajadores.<br>";
    }

    public function buscarPorCedula(String $cedula) {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador->getCedula() === $cedula) {
                $_SESSION['trabajador_encontrado'] = $trabajador;
                header("Location: ../app/views/trabajador/verTrabajador.php");
                exit();
            }
        }
        echo "No se encontró ningún trabajador con esa cédula.<br>";
        return null;
    }

    public function buscarPorNombre(String $cedula) {
        foreach ($_SESSION['trabajadores'] as $trabajador) {
            if ($trabajador->getNombre() === $cedula) {
                $_SESSION['trabajador_encontrado'] = $trabajador;
                header("Location: ../app/views/trabajador/verTrabajador.php");
                exit();
            }
        }
        echo "No se encontró ningún trabajador con este nombre.<br>";
        return null;
    }

}
?>