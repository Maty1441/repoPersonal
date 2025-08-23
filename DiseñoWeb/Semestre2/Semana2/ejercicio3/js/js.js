
$("#verificar").click(verificarNumero);

function verificarNumero(){

    let num = Number($("#numero").val());

    if (num % 2 == 0) {
        $("#resultado").text("El número es par");
    } else {
        $("#resultado").text("El número es impar");
    }
}
