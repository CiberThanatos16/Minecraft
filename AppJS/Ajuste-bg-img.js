const fondoPorDefecto = "views/img_s/mine05.png"; // imagen predeterminada

function cambiarFondo(ruta) {
  document.body.style.backgroundImage = `url('${ruta}')`;
  localStorage.setItem("fondoSeleccionado", ruta);
}

function restaurarFondo() {
  document.body.style.backgroundImage = `url('${fondoPorDefecto}')`;
  localStorage.removeItem("fondoSeleccionado");
}

// Al cargar la página, aplicar fondo guardado si existe
window.addEventListener("DOMContentLoaded", () => {
  const fondoGuardado = localStorage.getItem("fondoSeleccionado");
  if (fondoGuardado) {
    document.body.style.backgroundImage = `url('${fondoGuardado}')`;
  } else {
    document.body.style.backgroundImage = `url('${fondoPorDefecto}')`;
  }
});
