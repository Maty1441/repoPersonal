
$("#verificar").click(verificarNumero);

function verificarNumero(){

    let nombre = $("#nombre").val();
    let num = Number($("#numero").val());

    if (num >= 18) {
        $("#resultado").text(nombre + " es mayor de edad");
    } else {
        $("#resultado").text(nombre + " es menor de edad");
    }
}
