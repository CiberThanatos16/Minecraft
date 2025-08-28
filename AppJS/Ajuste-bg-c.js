const inputColor = document.getElementById("selectorColor");
const btnGuardar = document.getElementById("btnGuardar");
const btnRestaurar = document.getElementById("btnRestaurar");
const divs = document.querySelectorAll(".miDiv");
const colorPorDefecto = "lightgray";

const colorGuardado = localStorage.getItem("colorDeFondo");
if (colorGuardado) {
    divs.forEach(div => div.style.backgroundColor = colorGuardado);
    inputColor.value = colorGuardado;
} else {
    divs.forEach(div => div.style.backgroundColor = colorPorDefecto);
}

inputColor.addEventListener("input", function () {
    const nuevoColor = inputColor.value;
    divs.forEach(div => div.style.backgroundColor = nuevoColor);
});

btnGuardar.addEventListener("click", function () {
    const colorActual = inputColor.value;
    localStorage.setItem("colorDeFondo", colorActual);
    alert("Color guardado correctamente.");
});

btnRestaurar.addEventListener("click", function () {
    divs.forEach(div => div.style.backgroundColor = colorPorDefecto);
    inputColor.value = "#d3d3d3"; // HEX de lightgray
    localStorage.removeItem("colorDeFondo");
});