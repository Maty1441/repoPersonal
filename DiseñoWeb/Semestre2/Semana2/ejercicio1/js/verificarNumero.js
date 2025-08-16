

$("#verificar").click(verificarNumero);

function verificarNumero(){

    let num = Number($("#numero").val());

    if (num > 0) {
        $("#resultado").html("El número es positivo.");
    } else if (num < 0) {
        $("#resultado").html("El número es negativo.");
    } else {
        $("#resultado").html("El número es cero.");
    }


}