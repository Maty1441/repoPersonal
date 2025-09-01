let contador = 1;
let contenido = "";

while (contador <= 100) {
    contenido += contador + "<br>";
    contador++;
}

$("#texto").html(contenido);