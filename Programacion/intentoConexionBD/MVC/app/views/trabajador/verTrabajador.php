<?php
require_once(__DIR__ . "/../../models/TrabajadorModel.php");
session_start();

$trabajador = $_SESSION['trabajador_encontrado'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Trabajador</title>
</head>
<body>
    <h1>Lista de Trabajadores</h1>
      <table border="1" width="80%" class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cédula</th>
            <th>Estado</th>
        </tr>
    </thead>
    <?php if ($trabajador): ?>
    <tbody>
        <tr>
            <td><?= htmlspecialchars($trabajador->getNombre()) ?></td>
            <td><?= htmlspecialchars($trabajador->getApellido()) ?></td>
            <td><?= htmlspecialchars($trabajador->getCedula()) ?></td>
            <td><?= htmlspecialchars($trabajador->getEstado()) ?></td>
        </tr>
    </tbody>
</table>
<?php else: ?>
    <p style="color:red;">No se encontró ningún trabajador con esa cédula.</p>
<?php endif; ?>
    </tbody>
  </table>
</body>
</html>