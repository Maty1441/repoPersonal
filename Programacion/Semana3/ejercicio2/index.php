<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej2</title>
</head>
<body>

    <form action="index.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" required>
        <br>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" required>
        <br>
        <input type="hidden" name="form_id" value="1">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <br>
    <br>
    <br>
    <br>
 
    <form action="index.php" method="post">
        <input type="hidden" name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?>">
        <label for="precio">Nuevo Precio:        
        </label>
        <input type="number" name="precio" id="precio" required>
        <br>
        <label for="stock">Nuevo Stock:
        </label>
        <input type="number" name="stock" id="stock" required>
        <br>
        <br>
        <input type="hidden" name="form_id" value="2">
        <button type="submit">Modificar</button>
    </form>
    <br>
    <br>

<?php
    require_once("Producto.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["form_id"] == "1") {
        $nombre = $_POST['nombre'] ?? '';
        $precio = $_POST['precio'] ?? '';
        $stock = $_POST['stock'] ?? 0;

        $productos = new Producto($nombre , $precio, $stock);

        echo $productos->getProducto() . "<br>";

    } elseif ($_POST["form_id"] == "2") {
        
        $nombre = $_POST['nombre'] ?? '';
        $nuevoPrecio = $_POST['precio'];
        $nuevoStock = $_POST['stock'];

        $productos = new Producto($nombre , $nuevoPrecio, $nuevoStock);

        $productos->setPrecio($nuevoPrecio);
        $productos->setStock($nuevoStock);

        echo "El producto ha sido modificado:";
        echo "<br><br>Producto: " . $nombre;
        echo "<br>Nuevo Precio: " . $productos->getPrecio() . "<br>";
        echo "Nuevo Stock: " . $productos->getStock() . "<br>";
    }
}
?>
</body>
</html>