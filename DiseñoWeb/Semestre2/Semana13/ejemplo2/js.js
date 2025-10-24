$("#agregar").click(recibirDatos);
$("#buscar").click(recibirBusqueda);
$("#mostrar").click(mostrar);

function recibirDatos(){
    let tipo = $("#tipo").val();
    let matricula = $("#matricula").val();
    let propietario = $("#propietario").val();
    tipo = (tipo || "").toUpperCase();
    matricula = (matricula || "").toUpperCase();
    propietario = (propietario || "").toUpperCase();

    agregar(tipo, matricula, propietario);
}

function recibirBusqueda(){
    let matricula = $("#matricula").val();
    matricula = (matricula || "").toUpperCase();

    buscar(matricula);
}

function Avion(tipo, matricula, propietario){
    this.tipo = tipo;
    this.matricula = matricula;
    this.propietario = propietario;
}

let aviones = [];

function agregar(tipo, matricula, propietario){
    let avion = new Avion(tipo, matricula, propietario);
    aviones.push(avion);
    $("#mensaje").html("Avión agregado correctamente");
    console.log(avion);
}

function mostrar(){
    for(i=0; i<aviones.length; i++){
    console.log(aviones[i].tipo + " " + aviones[i].matricula + " " + aviones[i].propietario + " ");
    $("#mensaje").html(aviones[i].tipo + " " + aviones[i].matricula + " " + aviones[i].propietario + " ");
    }
}

function buscar(matricula){
    for(let i = 0; i < aviones.length; i++){
        if(aviones[i].matricula === matricula){
            console.log("Avión encontrado:", aviones[i]);
            $("#mensaje").html("Avión encontrado: " + aviones[i].tipo + " " + aviones[i].matricula + " " + aviones[i].propietario);
            return;
        }
    }
    console.log("Avión no encontrado");
    $("#mensaje").html("Avión no encontrado");
}