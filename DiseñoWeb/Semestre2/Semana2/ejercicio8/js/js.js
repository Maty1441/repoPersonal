
$("#verificar").click(verificarDia);

function verificarDia(){

    let dia = $("#dia").val().toLowerCase();

    if (dia == "lunes") {
        $("#resultado").text("El dia es Lunes");
    } else {
        $("#resultado").text("No es Lunes");
    }
}
