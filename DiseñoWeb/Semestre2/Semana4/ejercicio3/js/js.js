let contador = 43
let contenido = "";

while (contador <= 101) {
    contenido += contador + "<br>";
    contador++;
    contador++;
}

$("#texto").html(contenido);