$("#enviar").click(agregar);

function agregar(){
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let edad = Number($("#edad").val());

    agregarPersona(nombre, apellido, edad);
}

function Personas(nombre, apellido, edad) {
    this.nombre = nombre;
    this.apellido = apellido;
    this.edad = edad;
}

let personas = [];

function agregarPersona(nombre, apellido, edad) {
    let nuevaPersona = new Personas(nombre, apellido, edad);
    personas.push(nuevaPersona);
    console.log("Persona agregada:" + personas);
}