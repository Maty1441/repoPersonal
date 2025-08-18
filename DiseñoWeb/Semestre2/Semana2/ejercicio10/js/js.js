
$("#verificar").click(codigoDepartamento);

function codigoDepartamento() {
    let codigo = $("#codigo").val().toUpperCase();

    if (codigo == "A") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Canelones");
    } else if (codigo == "B") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "C") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Rocha")
    } else if (codigo == "D") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Treinta y Tres")
    } else if (codigo == "E") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Cerro Largo")
    } else if (codigo == "F") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Rivera")
    } else if (codigo == "G") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Artigas")
    } else if (codigo == "H") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Salto")
    } else if (codigo == "I") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Paysandú")
    } else if (codigo == "J") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Río Negro")
    } else if (codigo == "K") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Soriano")
    } else if (codigo == "L") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Colonia")
    } else if (codigo == "M") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: San José")
    } else if (codigo == "N") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: Flores")
    } else if (codigo == "O") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: Florida")
    } else if (codigo == "P") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Lavalleja")
    } else if (codigo == "Q") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Durazno")
    } else if (codigo == "R") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Tacuarembó")
    } else if (codigo == "S") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Montevideo")
    } else
        $("#resultado").text("El codigo ingresado no es valido, por favor ingrese un codigo valido");
}