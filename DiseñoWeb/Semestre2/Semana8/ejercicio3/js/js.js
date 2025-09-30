$("#enviar").click(tomarDatos);

function tomarDatos() {
    let num = Number($("#num").val());
    console.log(calcular(num));
}

let calcular = (num) => {    
    if(num >= 0){
    return "El numero es positivo"; 
}else{ 
    return "El numero es negativo";
}
};
