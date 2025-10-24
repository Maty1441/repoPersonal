//Ejemplos

//Funcion Mostrar
function mostrar(){
    console.log(nombreDeLaFuncion(array));
    $("#mensaje").html(nombreDeLaFuncion(array));
}

//Funcion agregar
function agregar() {
    //Tomo el valor del input
    let valor = Number($("#valor").val());
    //Agrego con "push" el valor al array
    numero.push(valor);
    console.log("Numero agregado");
    console.log(numero);
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//ej1
let array = ["Hola", "ser", "sol"];
//Esta funcion devuelve la cantidad de caracteres de cada palabra en un nuevo array llamado "resultado"
function obtenerLargos(unArray) {
    let resultado = [];

    for (i=0; i < unArray.length; i++) {
        resultado.push(unArray[i].length);
    }
    return resultado;
}

//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//ej2
let numero = [];
function mostrarMayor() {
    //si el largo del numero es 0, da un mensaje
    if (numero.length === 0) {
        $("#mensaje").html("No hay números ingresados.");
        return;
    }
    //"math.exe" devuelve el mayor numero del array y "...numero" lo desglosa para que funcione
    let mayor = Math.max(...numero);
    $("#mensaje").html("El mayor número es: " + mayor);
    console.log("El mayor número es:", mayor);
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//ej4
function agregarYmostrar() {
    //guardo el valor en "valor"
    let valor = $("#valor").val();
    //guardo el valor en el array "usuarios"
    usuarios.push(valor);
    //muestro un mensaje y el array
    console.log("Usuario agregado");
    console.log(usuarios);
    //muestro con la funcion "mostrarUsuarios"
    $("#mensaje").html("");
    $("#mensaje").html(mostrarUsuarios());

}
//recorro el array usuarios y con .append agrego cada usuairo al mensaje sin remplazar el anterior
function mostrarUsuarios() {
    for(i=0; i<usuarios.length; i++) {
        $("#mensaje").append(usuarios[i] + "<br>");
    }
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//ej5
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
