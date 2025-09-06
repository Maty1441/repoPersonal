
$("#verificar").click(tomarDatos);

function tomarDatos(){
    let edad = Number($("#tope").val());
    let tope = Number($("#edad").val());

    $("#texto").html(esMayor(tope,edad))

    if(esMayor(edad, tope)){
        $("#texto").html("Es menor");
    }
    else{
        $("#texto").html("Es mayor");
    }
}

function esMayor(edad, tope){
    if(edad > tope){
        return true;
    }
    else{
        return false;
    }
}
