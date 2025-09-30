
let tomarDatos = () => {
    let num = Number($("#num").val());
    console.log(calcular(num));
}

$("#enviar").click(tomarDatos);

let calcular = (num) => {    
    if(num %2!=0 && num > 50){
    return "El numero es impar y mayor a 50";
}else if (num %2!=0 && num < 50){
    return "El numero es impar y menor a 50";
}else if (num == 50){
    return "El numero es 50";
}else{
    return "El numero es par";
}
};
