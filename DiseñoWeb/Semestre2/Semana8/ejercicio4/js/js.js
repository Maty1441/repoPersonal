$("#enviar").click(tomarDatos);

function tomarDatos() {
    let num = Number($("#num").val());
    console.log(calcular(num));
}

let calcular = (num) => {    
    if(num %2==0){
    return "El numero es par"; 
}else{ 
    return "El numero es impar";
}
};
