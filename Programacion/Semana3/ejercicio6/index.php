<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="titulo">Nombre:<br></label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="titulo">Notas:<br></label>
        <input type="text" id="nota" name="nota" required>
        <br><br>
        <!-- Campo oculto que contiene las notas anteriores -->
        <input type="hidden" name="notas_anteriores" value="<?= $notasTexto ?? '' ?>">
        <input type="submit" value="Calcular Promedio">
    </form>


</body>
</html>