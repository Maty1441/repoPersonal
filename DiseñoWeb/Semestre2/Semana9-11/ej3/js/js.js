$("#agregar").click(agregar);
$("#mostrarMayor").click(mostrarMayor);

let numero = [];

function agregar() {
    let valor = Number($("#valor").val());
    numero.push(valor);
    console.log("Numero agregado");
    console.log(numero);
}

function mostrarMayor() {
    if (numero.length === 0) {
        $("#mensaje").html("No hay números ingresados.");
        return;
    }
    let mayor = Math.max(...numero);
    $("#mensaje").html("El mayor número es: " + mayor);
    console.log("El mayor número es:", mayor);
}