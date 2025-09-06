$("#verificar").click(tomarDatos);

function tomarDatos(){
    let num = Number($("#num").val());
    $("#texto").html(mult3(num));
}

function mult3(num) {  
    return num * 3;
    console.log(mult3(num));
    $("#texto").html(mult3(num));
}