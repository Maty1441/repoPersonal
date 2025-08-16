
$("#verificar").click(verificarNumero);

function verificarNumero(){

    let num = Number($("#numero").val());

    if (num == 10) {
        $("#resultado").html("El número es 10.");
    } else if (num < 0) {
        $("#resultado").html("El número es negativo.");
    } else if (num > 0) {
        $("#resultado").html("El número es positivo.");
    } else {
        $("#resultado").html("El número es 0.");
    }
}
