
$("#verificar").click(verificarNumero);

function verificarNumero(){

    let num = Number($("#numero").val());

    if (num % 2 == 0 && num > 0) {
        $("#resultado").text("El numero es par y positivo");
    } else if (num % 2 == 0 && num < 0) {
        $("#resultado").text("El numero es par y negativo");
    } else if (num % 2 != 0 && num > 0) {
        $("#resultado").text("El numero es impar y positivo");
    } else if (num % 2 != 0 && num < 0) {
        $("#resultado").text("El numero es impar y negativo");    
    } else {
        $("#resultado").text("El numero es cero");
    }
}
