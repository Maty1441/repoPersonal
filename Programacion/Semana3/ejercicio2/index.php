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
 
<?php
require_once("Producto.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nuevoPrecio = $_POST['precio'];
    $nuevoStock = $_POST['stock'];

    // Crear una instancia de Producto
    $producto = new Producto("Laptop", 1200.00, 5);

    // Modificar el precio y el stock
    $producto->setPrecio($nuevoPrecio);
    $producto->setStock($nuevoStock);

    // Mostrar los nuevos valores
    echo "Nuevo Precio: " . $producto->getPrecio() . "<br>";
    echo "Nuevo Stock: " . $producto->getStock() . "<br>";
}
?>
</body>
</html>