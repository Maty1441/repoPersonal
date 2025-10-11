$("#agregarYmostrar").click(agregarYmostrar);

let usuarios = [];

function agregarYmostrar() {
    let valor = $("#valor").val();

    usuarios.push(valor);

    console.log("Usuario agregado");
    console.log(usuarios);

    $("#mensaje").html("");
    $("#mensaje").html(mostrarUsuarios());

}

function mostrarUsuarios() {
    for(i=0; i<usuarios.length; i++) {
        $("#mensaje").append(usuarios[i] + "<br>");
    }
}