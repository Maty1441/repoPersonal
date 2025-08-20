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
        <input type="text" name="marca" id="marca" required><br>

        <label for="Modelo">Ingrese Modelo:     
        </label>
        <input type="text" name="modelo" id="modelo" required><br>

        <label for="Año">Ingrese año:     
        </label>
        <input type="text" name="año" id="año" required><br>

        <label for="Kilometraje">Ingrese Kilometraje:     
        </label>
        <input type="text" name="kilometraje" id="kilometraje" required><br><br>

        <input type="hidden" name="form_id" value="1">
        <button type="submit">Modificar</button>
    </form>
    <br>
    <br>

    <form action="index.php" method="post">
        <input type="hidden" name="marca" value="<?php echo isset($_POST['marca']) ? $_POST['marca'] : ''; ?>">
        <input type="hidden" name="modelo" value="<?php echo isset($_POST['modelo']) ? $_POST['modelo'] : ''; ?>">
        <input type="hidden" name="año" value="<?php echo isset($_POST['año']) ? $_POST['año'] : ''; ?>">
        <label for="kilometraje">Ingrese kilometraje a actualizar:        
        </label>
        <input type="text" name="kilometraje" id="kilometraje" required>
        <br>
        <input type="hidden" name="form_id" value="2">
        <button type="submit">Actualizar Kilometraje</button><br><br>
    </form>
</body>
</html>

<?php
require_once("vehiculos.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["form_id"] == "1") {
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $año = $_POST['año'];
        $kilometraje = $_POST['kilometraje'];

        $vehiculo = new Vehiculo($marca, $modelo, $año, $kilometraje);

        echo "Marca : " . $vehiculo->getMarca() . "<br>";
        echo "Modelo : " . $vehiculo->getModelo() . "<br>";
        echo "Año : " . $vehiculo->getAño() . "<br>";
        echo "Kilometraje : " . $vehiculo->getKilometraje() . "<br>";
    
    } elseif ($_POST["form_id"] == "2") {

        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $año = $_POST['año'];
        $kilometraje = $_POST['kilometraje'];

        $vehiculo = new Vehiculo($marca, $modelo, $año, $kilometraje);

        $vehiculo->actualizarKilometraje($kilometraje);

        echo "Kilometraje actualizado:<br><br>";
        echo "Marca : " . $vehiculo->getMarca() . "<br>";
        echo "Modelo : " . $vehiculo->getModelo() . "<br>";
        echo "Año : " . $vehiculo->getAño() . "<br>";
        echo "Kilometraje : " . $vehiculo->getKilometraje() . "<br>";
    }
    
}
?>