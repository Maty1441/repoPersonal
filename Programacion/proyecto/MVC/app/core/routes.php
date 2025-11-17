<?php
// Cargar el controlador
$controllerName = $_POST['c'];
$actionName = $_POST['a'];

// Incluir el archivo del controlador
require_once '../controller/' . $controllerName . '.php';

session_start();

// Crear instancia del controlador
$controller = new $controllerName();

// Ejecutar según la acción
switch ($actionName) {
    case 'agregar':
        $controller->$actionName($_POST['ci'], $_POST['fnac'], $_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'], $_POST['activo']);
        break;
    case 'modificarTrabajador':
        $controller->$actionName($_POST['cedula'], $_POST['nombre'], $_POST['apellido']);
    break;
    case 'eliminarTrabajador':
        $controller->$actionName($_POST['cedula']);
        break;
    case 'cambiarEstado':
        $controller->$actionName($_POST['cedula'], $_POST['estado']);
    break;
    case 'buscarPorCedula':
        $controller->$actionName($_POST['cedula']);
    break;
    case 'buscarPorNombre':
        $controller->$actionName($_POST['nombre']);
    break;
    default:
        echo "Acción no reconocida.";
        break;
}
?>