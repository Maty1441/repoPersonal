$("#verificar").click(multiplicar);

function multiplicar() {
    let a = Number($("#multiplicando").val());
    let b = Number($("#multiplicador").val());

    let resultado = 0;

    for (let i = 0; i < b; i++) {
        resultado += a;
    }

    $("#resultado").html(`Resultado: ${resultado}`);
}