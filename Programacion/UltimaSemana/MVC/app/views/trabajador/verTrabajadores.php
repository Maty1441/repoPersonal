<?php 
require_once("../../controller/TrabajadorController.php");
session_start();

$controller = new TrabajadorController();
$trabajadores = $controller->verTrabajadores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Trabajadores</title>
</head>
<body>
    <h1>Lista de Trabajadores</h1>
      <table border="1" width="80%" class="table">
	  <thead>
	  	<tr>
        <th>Nombre</th>
	      <th>Apellido</th>
	      <th>Cedula</th>
	  	</tr>
	  </thead>
              
    <tbody>
    <?php 
        require_once("../../controller/TrabajadorController.php");
        $controller = new TrabajadorController();
        $trabajadores = $controller->verTrabajadores();
        
        if (!empty($trabajadores)) {
            foreach($trabajadores as $trabajador) {
                echo "<tr>";
                echo "<td>" . $trabajador->getNombre() . "</td>";
                echo "<td>" . $trabajador->getApellido() . "</td>";
                echo "<td>" . $trabajador->getCedula() . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay trabajadores registrados</td></tr>";
        }
    ?>
    </tbody>
  </table>
</body>
</html>