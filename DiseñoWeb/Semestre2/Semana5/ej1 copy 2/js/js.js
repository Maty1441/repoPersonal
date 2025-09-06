
$("#verificar").click(tomarDatos);

function tomarDatos(){
    let n1 = Number($("#n1").val());
    let n2 = Number($("#n2").val());

    console.log(pares(n1,n2))
}

function pares(n1, n2){
    let resultado =" ";

    for(let i=n1; i<=n2; i++){
        if(i % 2===0){
            resultado = resultado + " " + i + " ";
        }
    }
    return resultado;
}