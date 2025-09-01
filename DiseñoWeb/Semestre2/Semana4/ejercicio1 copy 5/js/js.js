
$("#calcular").click(calcularNumeros);

function calcularNumeros() {
    let num1 = Number($("#num1").val());
    let num2 = Number($("#num2").val());
    let resultado = 0;
    let contador = 0;

    while (contador < num1) {
        resultado = num2 + resultado;
        contador++;
    }

    $("#resultado").html("El resultado es: " + resultado);
}