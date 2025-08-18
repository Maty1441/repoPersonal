
$("#verificar").click(calcularPagos);

function calcularPagos() {
    let valor = Number($("#valor").val());
    let ingresos = Number($("#ingresos").val());
    let pagoInicial = 0;
    let resto = 0;
    let pagoMensual = 0;
    
    if (ingresos < 20000){
        pagoInicial = valor * 0.15;
        resto = valor - pagoInicial;
        pagoMensual = resto / 84;
        $("#resultado1").html("El primer pago sera de: $" + pagoInicial);
        $("#resultado2").html(" y la cantidad de pagos restantes a 7 años seran de: " + pagoMensual.toFixed(2) + "$");
    
    } else if (ingresos > 20000){
        pagoInicial = valor * 0.30;
        resto = valor - pagoInicial;
        pagoMensual = resto / 12;
        $("#resultado1").html("El primer pago sera de: $" + pagoInicial);
        $("#resultado2").html("Y la cantidad de pagos restantes a 1 años seran de: " + pagoMensual.toFixed(2) + "$");
    }
}