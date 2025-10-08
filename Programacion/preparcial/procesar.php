<?php
include_once("Libro.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$precio = $_POST['precio'];

o

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$tituto = htmlspecialchars($_POST['titulo']);
	$autor = htmlspecialchars($_POST['auto']);
	$precio = htmlspecialchars($_POST['precio']);
}

$NewLibro = new Libro($titulo, $autor, $precio);

if(!isset($_SESSION['libros'])){
    $_SESSION['libros'] = array();
}

$_SESSION['libros'][] = $NewLibro;
?>