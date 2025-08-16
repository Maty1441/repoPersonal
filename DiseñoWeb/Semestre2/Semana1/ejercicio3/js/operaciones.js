

$("#enviar").click(tomarDatos);

function tomarDatos() {
    let num1 = Number($("#num1").val());
    let num2 = Number($("#num2").val());
    let suma = num1 + num2;

    $("#resultado").html("El resultado de la suma es: " + suma + "<br>");
}