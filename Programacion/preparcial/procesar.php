<?php
session_start();
require_once 'libro.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$tituto = htmlspecialchars($_POST['titulo']);
	$autor = htmlspecialchars($_POST['auto']);
	$precio = htmlspecialchars($_POST['precio']);
}

—

$NewLibro = new Libro($titulo, $autor, $precio);

if(!isset($_SESSION['libros'])){
    $_SESSION['libros'] = array();
}

$_SESSION['libros'][] = $NewLibro;
?>