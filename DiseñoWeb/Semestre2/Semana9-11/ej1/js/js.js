function mostrar(){
    console.log(obtenerLargos(array));
    $("#mensaje").html(obtenerLargos(array));
}

let array = ["Hola", "ser", "sol"];

function obtenerLargos(unArray) {
    let resultado = [];

    for (i=0; i < unArray.length; i++) {
        resultado.push(unArray[i].length);
    }
    return resultado;
}