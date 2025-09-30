$("#enviar").click(tomarDatos);

function tomarDatos(){

}

esMayorEdad(18);

function esMayorEdad(edad){
    if(edad >= 18){
        return true;
    }else{
        return false;
    }
}

esPar(5);

let esPar = numero =>{
    if(numero%2==0)
        return true;
    else
        return false;
}
//------------------------<FUNCION>--------------------------
function triple(num){
    return num*3;
}

//--------------------------<ARROW>-------------------------
let triple = num => num*3;

console.log(triple(8));

//------------------------<FUNCION>--------------------------
function promedio(a,b,c){
    return(a,b,c)/3;
}

//--------------------------<ARROW>-------------------------
let promedio = (a,b,c) => (a+b+c) / 3;