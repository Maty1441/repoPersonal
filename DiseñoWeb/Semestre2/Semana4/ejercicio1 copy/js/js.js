let contador = -100
let contenido = "";

while (contador <= 10) {
    contenido += contador + "<br>";
    contador++;
}

$("#texto").html(contenido);