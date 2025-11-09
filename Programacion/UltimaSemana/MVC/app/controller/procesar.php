<?php
require_once('../controller/TrabajadorController.php');
require_once('../controller/config.php');

$trabajador = new TrabajadorController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encontrado = false;
    $variable = $_POST['formulario'] ?? '';
    $user = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($variable == 'iniciar') {
        $encontrado = false;
        foreach ($_SESSION['users'] as $u) {
            if ($u['user'] === $user && password_verify($password, $u['password'])) {
                $encontrado = true;
                $_SESSION['user_role'] = 'trabajador';
                $_SESSION['username'] = $user;
                header('Location: ../views/dashboard/inicio.html');
            }
        }
        if (!$encontrado) {
            echo "<p style='color:red;'>No se encontró el usuario o contraseña incorrecta</p>";
        }
        exit();
    }
    if ($variable == 'agregar') {
        header('Location: ../views/trabajador/agregarTrabajador.html');
        exit();
    }

    if ($variable == 'modificar') {
        header('Location: ../views/trabajador/modificarTrabajador.html');
        exit;
    }

    if ($variable == 'borrar') {
        header('Location: ../views/trabajador/borrarTrabajador.html');
        exit;
    }

    if ($variable == 'buscar') {
        header('Location: ../views/trabajador/verTrabajador.html');
        exit;
    }

    if ($variable == 'verTodos') {
        header('Location: ../views/trabajador/verTrabajadores.php');
        exit;
    }

    if ($variable == 'salir') {
        //Acá vamos a mostrar la vista de salida, por lo general no se usa, pero lo dejamos por ahora
        exit;
    }
}
