
$("#verificar").click(calcularViaje);

function calcularViaje() {
    let millas = Number($("#millas").val());
    let planPlus = $("#planPlus").is(":checked") ? 1 : 0;

    let totalMillas = planPlus ? millas * 2 : millas;

    if (totalMillas >= 60000) {
        $("#resultado").text("Su viaje tiene destino Europa");
    } else if (totalMillas >= 30000) {
        $("#resultado").text("Su viaje tiene destino America del Norte");
    } else if (totalMillas >= 15000) {
        $("#resultado").text("Su viaje tiene destino America del Sur");
    } else {
        $("#resultado").text("Aun no tiene saldo suficiente para un viaje");
    }
}







