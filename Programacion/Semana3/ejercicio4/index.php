<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulación Bancaria</title>
</head>
<body>
    <h2>Operaciones Bancarias</h2>
    <form action="index.php" method="post">
        <label for="titular">Titular:</label>
        <input type="text" name="titular" id="titular" required>
        <br>
        <label for="saldo">Saldo inicial:</label>
        <input type="number" name="saldo" id="saldo" required>
        <br>
        <label for="tipoCuenta">Tipo de cuenta:</label>
        <input type="text" name="tipoCuenta" id="tipoCuenta" required>
        <br>
        <label for="monto">Monto:</label>
        <input type="number" name="monto" id="monto" required>
        <br>
        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion" required>
            <option value="depositar">Depositar</option>
            <option value="retirar">Retirar</option>
        </select>
        <br><br>
        <input type="submit" value="Realizar operación">
    </form>

<?php
    require_once("banco.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titular = $_POST["titular"];
        $saldo = floatval($_POST["saldo"]);
        $tipoCuenta = $_POST["tipoCuenta"];
        $monto = floatval($_POST["monto"]);
        $operacion = $_POST["operacion"];

        $cuentaBancaria = new cuentaBancaria($titular, $saldo, $tipoCuenta);

        if ($operacion === "depositar") {
            $nuevoSaldo = $cuentaBancaria->depositar($monto);
            echo "<p>Depósito realizado.<br><br> Saldo actual: $nuevoSaldo</p>";
        } elseif ($operacion === "retirar") {
            $saldoAnterior = $cuentaBancaria->getSaldo();
            $nuevoSaldo = $cuentaBancaria->retirar($monto);
            if ($nuevoSaldo < $saldoAnterior) {
                echo "<p>Retiro realizado.<br><br> Saldo actual: $nuevoSaldo</p>";
            } else {
                echo "<p>No se pudo realizar el retiro.<br><br> Saldo insuficiente.</p>";
            }
        }
    }
?>
</body>
</html>