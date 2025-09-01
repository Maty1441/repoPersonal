
$("#calcular").click(calcularNumeros);

function calcularNumeros() {
    let dividendo = Number($("#num1").val());
    let divisor = Number($("#num2").val());
    let resto = dividendo;
    let contador = 0;

    
    while(dividendo >= divisor){
        dividendo -= divisor;
        contador++;
    }

    $("#resultado").html("El cociente es : " + contador + "<br> el resto es: " + resto);

}
