<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ej3</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="Marca">Ingrese marca:        
        </label>
        <input type="text" name="marca" id="marca" required>
        <br>
        <label for="Modelo">Ingrese Modelo:     
        </label>
        <input type="text" name="modelo" id="modelo" required>
        <br>
        <label for="Año">Ingrese año:     
        </label>
        <input type="text" name="año" id="año" required>
        <br>
        <label for="Kilometraje">Ingrese Kilometraje:     
        </label>
        <input type="text" name="kilometraje" id="kilometraje" required>
        <br>
        <button type="submit">Modificar</button>
    </form>

    <form action="index.php" method="post">
        <label for="kilometraje">Ingrese kilometraje a actualizar:        
        </label>
        <input type="text" name="kilometraje" id="kilometraje" required>
        <br>
        <button type="submit">Actualizar Kilometraje</button>
    </form>

</body>
</html>

<?php
require_once("vehiculos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $año = $_POST['año'];
    $kilometraje = $_POST['kilometraje'];

    // Crear una instancia de Producto
    $vehiculo = new Vehiculo($marca, $modelo, $año, $kilometraje);

    // Mostrar los nuevos valores
    echo "Marca : " . $vehiculo->getMarca() . "<br>";
    echo "Modelo : " . $vehiculo->getModelo() . "<br>";
    echo "Año : " . $vehiculo->getAño() . "<br>";
    echo "Kilometraje : " . $vehiculo->getKilometraje() . "<br>";
}
