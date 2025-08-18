
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
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "G") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "H") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "I") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "J") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "K") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "L") { 
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "M") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "N") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "O") { 
         $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "P") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "Q") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "R") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else if (codigo == "S") {
        $("#resultado").text("El departamento con codigo " + codigo + " es: Maldonado")
    } else
        $("#resultado").text("El codigo ingresado no es valido, por favor ingrese un codigo valido");
}
