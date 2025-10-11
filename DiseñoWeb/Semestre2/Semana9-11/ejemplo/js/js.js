
let nombrePaises = ["Uruguay", "Argentina", "Brasil", "Paraguay", "Chile", "Bolivia", "Peru", "Ecuador", "Colombia", "Venezuela"];

function agregar (unPais) {
    nombrePaises.push(unPais);
    return "Pais agregado";
}

function mostrar () {
    for(i=0; i<nombrePaises.length;i++){
        $("#mensaje").append(paises[i]);
    }
}

function largos(unArray){
    let misLargos=[];
    for(i=0; i<paises.length;i++){
        misLargos.push(paises[i].length);
    }
}

function existe (unAlias){
    for(i=0; i<alias.length;i++){
        if(unAlias == alias[i]){
            return true;
        }
    }
    return false;
}