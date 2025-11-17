<?php 
session_start();
require_once('../../controller/TrabajadorController.php');

$controller = new TrabajadorController();
if (!$trabajadores = $controller->buscarPorCedula = null){
    $trabajadores = $controller->buscarPorNombre();
    }else{
        echo "No se encontraron trabajadores con los criterios de búsqueda proporcionados.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Trabajadores</title>
</head>
<body>
    <h1>Lista de Trabajadores</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Fecha Nac</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Activo</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($trabajadores)) {
            foreach($trabajadores as $t) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($t['CI']) . "</td>";
                echo "<td>" . htmlspecialchars($t['FechaNac']) . "</td>";
                echo "<td>" . htmlspecialchars($t['Nombre']) . "</td>";
                echo "<td>" . htmlspecialchars($t['Apellido']) . "</td>";
                echo "<td>" . htmlspecialchars($t['Email']) . "</td>";
                echo "<td>" . htmlspecialchars($t['Activo']) . "</td>";
                echo "<td>" . htmlspecialchars($t['Contrasena']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No hay trabajadores registrados</td></tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>