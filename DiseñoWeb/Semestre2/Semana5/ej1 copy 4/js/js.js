
$("#verificar").click(tomarDatos);

function tomarDatos(){
    let base = Number($("#base").val());
    let altura = Number($("#altura").val());

    $("#texto").html(calcularAreaTriangulo(base, altura))
}

function calcularAreaTriangulo(base, altura){

    let area;
    let error = "Los valores no estan permitidos"

    if(base > 0 && altura > 0){
        area = base * altura / 2;
    }
    else{
        return error;
    }

    return area;

}