

$("#mensaje1").html("MENSAJE CON JS 1<br>")
$("#mensaje1").append("MENSAJE CON JS 2")

$("#enviar").click(tomarDatos);

function tomarDatos() {

    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();

    $("#mensaje2").append("Nombre: " + nombre + "<br>" + "Apellido: " + apellido + "<br>");

}