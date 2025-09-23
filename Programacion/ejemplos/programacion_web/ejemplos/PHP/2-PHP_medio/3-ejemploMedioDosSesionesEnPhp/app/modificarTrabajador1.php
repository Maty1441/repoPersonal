<?php
session_start();
require_once 'config.php';
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $posicion = htmlspecialchars($_POST['posicion']);

    modificarTrabajador($nombre, $posicion, $email);

    // Redirigir a página principal
    header("Location: ../html/principal.html");
    exit();
}
?>
