<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="precio">Precio del producto:</label>
        <input type="number" id="precio" name="precio" step="0.01" required><br><br>
        <label for="cantidad">Cantidad del producto:</label>
        <input type="number" id="cantidad" name="cantidad" required><br><br>
        <input type="submit" value="Agregar Producto">
        <input type="hidden" name="form" value="1">
        <br><br>
    </form>

    <form action="index.php" method="post">
        <input type="submit" value="Finalizar Pedido">
        <input type="hidden" name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?>">
        <input type="hidden" name="precio" value="<?php echo isset($_POST['precio']) ? $_POST['precio'] : ''; ?>">
        <input type="hidden" name="cantidad" value="<?php echo isset($_POST['cantidad']) ? $_POST['cantidad'] : ''; ?>">
        <input type="hidden" name="form" value="2">
    </form>


<?php
require 'producto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_POST["form"] == "1") {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $producto = new Producto($nombre, $precio, $cantidad);

        $producto = agregarProducto($nombre, $precio, $cantidad);

        echo "<h2>Producto" . "Agregado</h2>";
    }

    if ($_POST["form"] == "2") {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $producto = new Producto($nombre, $precio, $cantidad);

        echo "<h2>Pedido Finalizado</h2>";
}
}
?>


</body>
</html>