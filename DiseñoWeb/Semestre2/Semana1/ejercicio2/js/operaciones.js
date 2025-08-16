

$("#enviarSuma").click(obtenerDatosSuma);
$("#enviarMultiplicacion").click(obtenerDatosMultiplicacion);
$("#enviarCuadrado").click(obtenerCuadrado);
$("#enviarImc").click(obtenerImc);

function obtenerDatosSuma() {
    let num1 = Number($("#num1").val());
    let num2 = Number($("#num2").val());
    let suma = num1 + num2;

    $("#resultado1").html("El resultado de la suma es: " + suma + "<br>");
}

function obtenerDatosMultiplicacion() {
    let num1 = Number($("#num1").val());
    let num2 = Number($("#num2").val());
    let mult = num1 * num2;

    $("#resultado2").html("El resultado de la multiplicacion es: " + mult + "<br>");
}

function obtenerCuadrado() {
    let cuadrado = Number($("#cuadrado").val());
    let area = cuadrado * cuadrado;

    $("#resultadoCuadrado").html("El area del cuadrado es: " + area + "<br>");
}

function obtenerImc() {
    let peso = Number($("#peso").val());
    let estatura = Number($("#estatura").val());
    let imc = peso / (estatura * estatura);

    $("#resultadoImc").html("El Imc es: " + imc.toFixed(2) + "<br>");
}