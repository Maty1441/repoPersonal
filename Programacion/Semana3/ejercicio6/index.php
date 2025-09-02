<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="titulo">Nombre: <br></label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="titulo">Notas: <br></label>
        <input type="number" id="nota" name="nota" required>
        <br><br>
        <input type="submit" value="Calcular Promedio">
        <input type="hidden" name="form_id" value="1">
    </form>

    <form action="index.php" method="post">
        <label for="titulo">Nota: <br></label>
        <input type="number" id="nota" name="nota" required>
        <br><br>
        <input type="hidden" name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?>">
        <input type="submit" value="Agregar Nota">
        <input type="hidden" name="form_id" value="2">
    </form>

<?php
require_once("alumno.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["form_id"] == "1") {
        $nombre = $_POST['nombre'];
        $nota = floatval($_POST['nota']);

        $alumno = new Alumno($nombre, $nota);

        $alumno->agregarNota($nota);

        echo "Nombre: " . $alumno->getNombre() . "<br>";
        echo "Promedio: " . $alumno->getPromedio() . "<br>";
    }

    if ($_POST["form_id"] == "2") {
        $nombre = $_POST['nombre'];
        $nota = floatval($_POST['nota']);
    
        $alumno = new Alumno($nombre, $nota);    
    
        $alumno->agregarNota($nota);
    
        echo "Nombre: " . $alumno->getNombre() . "<br>";
        echo "Promedio: " . $alumno->getPromedio() . "<br>";
    
    }

}
?>
</body>
</html>