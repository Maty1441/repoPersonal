<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Biblioteca simple</title>
</head>
<body>

<?php
    $ultimoLibro = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['titulo'])) {
        $ultimoLibro = trim($_POST['titulo']);
    }
?>

    <h1>Agregar libro a la biblioteca</h1>

    <form action="" method="post">
        <label for="titulo">Título del libro:<br></label>
        <input type="text" id="titulo" name="titulo" required>
        <br><br>
        <input type="submit" value="Agregar Libro">
    </form>

<?php if ($ultimoLibro !== ''): ?>
    <h2>Libro agregado:</h2>
    <p><?php echo htmlspecialchars($ultimoLibro); ?></p>
<?php endif; ?>

</body>
</html>