const colorGuardado = localStorage.getItem("colorTextoGlobal");
    if (colorGuardado) {
      document.body.style.color = colorGuardado;
      document.getElementById("selectorColor").value = colorGuardado;
      previewBox.style.backgroundColor = colorGuardado;
    }

    function cambiarColor() {
      const colorSeleccionado = document.getElementById("selectorColor").value;
      document.body.style.color = colorSeleccionado;
      localStorage.setItem("colorTextoGlobal", colorSeleccionado);
    }
