$("#enviar").click(tomarDatos);

let requeridas = ["1234 ABC", "5678 DEF", "9101 GHI", "1121 JKL", "3141 MNO", "5161 PQR", "7181 STU", "9202 VWX", "1222 YZA", "3242 BCD"];

function tomarDatos() {
    let matricula = $("#matricula").val();
    matricula = (matricula || "").toUpperCase();

    verificarMatricula(matricula);
}

function verificarMatricula(matricula) {
    if (!matricula || String(matricula).length < 8) {
        console.log('Valor no válido');
         $("#mensaje").html("MATRICULA NO VALIDA");
    }else if (requeridas.includes(matricula)) {
        console.log('MATRICULA REQUERIDA');
        $("#mensaje").html('<p.mensaje="mensaje" style="color: red;">MATRICULA REQUERIDA</p>');
    } else {
        $("#mensaje").html('<p.mensaje="mensaje" style="color: green;">MATRICULA NO REQUERIDA</p>');
    }
}

function mostrarMensaje(mensaje) {
    if (mensaje === "MATRICULA REQUERIDA") {
        $("#mensaje").html("");
        $("#mensaje").html('<p class="mensaje" style="color: green;">' + mensaje + '</p>');
    } else if (mensaje === "MATRICULA NO REQUERIDA") {
        $("#mensaje").html("");
        $("#mensaje").html('<p class="mensaje" style="color: red;">' + mensaje + '</p>');
    } else {
        $("#mensaje").html("");
        $("#mensaje").html('<p class="mensaje" style="color: orange;">' + mensaje + '</p>');
    }
}