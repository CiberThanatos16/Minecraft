const textarea = document.getElementById('miTextarea');
  const contador = document.getElementById('contador');
  const formulario = document.getElementById('miFormulario');
  const minCaracteres = 100;
  let alertaMostrada = false;

  textarea.addEventListener('input', () => {
    const longitud = textarea.value.length;
    contador.textContent = `${longitud} / ${minCaracteres}`;

    if (longitud < minCaracteres && !alertaMostrada) {
      contador(`Debes escribir al menos ${minCaracteres} caracteres.`);
      //alertaMostrada = true;
    }

    if (longitud >= minCaracteres) {
      alertaMostrada = false;
    }
  });

  formulario.addEventListener('submit', function (e) {
    const longitud = textarea.value.length;

    if (longitud < minCaracteres) {
      e.preventDefault(); // Evita que se envíe el formulario
      alert(`No puedes enviar el formulario. Escribe al menos ${minCaracteres} caracteres.`);
    }
  });