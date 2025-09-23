<?php
session_start();
require_once 'config.php';
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);

    borrarTrabajador($email);

    // Redirigir a página principal
    header("Location: ../html/principal.html");
    exit();
}
?>