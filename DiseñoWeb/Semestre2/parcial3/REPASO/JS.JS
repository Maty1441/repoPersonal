//1
function Jugador(numero, camisa, posicion, gol){
    this.numero = numero;
    this.camisa = camisa;
    this.posicion = posicion;
    this.gol = gol;

    this.mostrarInfo = function(){
        return "Numero: " + this.numero + "<br> Camisa: " + this.camisa + "<br> Posicion: " + this.posicion + "<br> Goles: " + this.gol;
    }
}

//2
let Jugadores = [];

//3
function agregar(numero, camisa, posicion, gol){
    let jugador = new Jugador(numero, camisa, posicion, gol);
    Jugadores.push(jugador);
    console.log(Jugadores);
}

//4
function mostrar() {
    for(i=0; i<Jugadores.length; i++) {
        $("#mensaje").append(Jugadores[i].mostrarInfo() + "<br>");
    }
}

//5
function buscar(numero){
    for(let i = 0; i < Jugadores.length; i++){
        if(Jugadores[i].numero === numero){
            return Jugadores[i];
        }
    }
}


agregar(10, "Messi", "Delantero", 2);
mostrar();
buscar(10);