//Creo la funcion que permite crear el objeto Persona
function Persona(nombre, edad) {
    this.nombre = nombre;
    this.edad = edad;
}

//Creo el array para guardar todas las personas
let personas = [];

//Creo una instancia de Persona
let persona1 = new Persona("Juan", 50);
let persona2 = new Persona("Ana", 60);

//Guardo en el array
personas.push(persona1);
personas.push(persona2);

//Muestro todas las personas en la consola
for(i=0; i<personas.length; i++){
    console.log(personas[i].nombre + " " + personas[i].edad + " ");
}
