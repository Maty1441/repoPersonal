<?php

// Cargar el controlador
$controllerName = $_POST['c'];
$actionName = $_POST['a'];

// Incluir el archivo del controlador
require_once 'controller/' . $controllerName . '.php';

session_start();

// Crear instancia del controlador
$controller = new $controllerName();

// Llamar al método con los parámetros del POST
$controller->$actionName($_POST['nombre'], $_POST['apellido'], $_POST['cedula']);
?>