$("#verificar").click(tomarDatos);

function tomarDatos(){
    let n1 = Number($("#n1").val());
    let n2 = Number($("#n2").val());

    $("#texto").html(mostrarPares(n1,n2));
}

function mostrarPares(n1,n2){
    let contador = 0;
    let mostrar;

    if(n1 > n2){
        if(n1 % 2===0){
            contador = n1;
            console.log(n1);
            while(contador < n2){
                mostrar = mostrar + 2;
                console.log(mostrar);
                contador ++;
            }
            return mostrar;
        }else if(n1 % 2 !== 0){
            contador = n1;
            console.log(n1-1);
            while(contador < n2){
                mostrar = mostrar + 2;
                console.log(mostrar);
                contador ++;
            }    
            return mostrar;
        }    
    }
}