
let contador = 0;
let contenido = "";

while (contador <= 450) {
    contenido += contador + "<br>";
    contador += 5;
}

$("#texto").html(contenido);