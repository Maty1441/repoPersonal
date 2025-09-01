$("#verificar").click(dividir);

function dividir() {
  let dividendo = Number($("#dividendo").val());
  let divisor = Number($("#divisor").val());

  if (divisor === 0) {
    alert("No se puede dividir por cero");
    return;
  }

  let cociente = 0;
  let restante = dividendo;

  while (restante >= divisor) {
    restante -= divisor;
    cociente++;
  }

  console.log(`Cociente: ${cociente}, Resto: ${restante}`);
  $("#resultado").html(`Cociente: ${cociente}, Resto: ${restante}`);

  return {
    cociente: cociente,
    resto: restante
  };
}