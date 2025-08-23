
$("#verificar").click(verificarNumero);

function verificarNumero(){

    let num = Number($("#numero").val());

    if (num == 10) {
        $("#resultado").html("El número es 10.");
    } else if (num < 10) {
        $("#resultado").html("El número es menor a 10.");
    } else if (num > 10) {
        $("#resultado").html("El número es mayor a 10.");
    } else {
        $("#resultado").html("El número es 0.");
    }
}
