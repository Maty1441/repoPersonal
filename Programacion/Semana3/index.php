<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
</head>
<body>
    
    <form action="index.php" method="post">
    <label for="precio">Nuevo Precio:        
    </label>
    <input type="number" name="precio" id="precio" required>
    <br>
    <label for="stock">Nuevo Stock:     
    </label>
    <input type="number" name="stock" id="stock" required>
    <br>
    <button type="submit">Modificar</button>
</form>


</body>
</html>

<?php

require_once("Producto.php");

$nombre = "Laptop";
$precio = 1200.00;
$stock = 5;

$hola = new Producto($nombre, $precio, $stock);

echo $hola->getNombre() . "<br>";
echo $hola->getPrecio() . "<br>";
echo $hola->getStock() . "<br>";
