<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cambiar color con botón de guardar</title>
    <style>
        .miDiv {
            width: 300px;
            height: 100px;
            background-color: lightgray;
            border: 1px solid #000;
            margin: 10px 0;
            padding: 10px;
        }
    </style>
</head>

<body>

    <label for="selectorColor">Selecciona un color:</label>
    <input type="color" id="selectorColor">
    <button id="btnGuardar">Guardar cambios</button>
    <button id="btnRestaurar">Restaurar color</button>

    <div class="miDiv">Div 1</div>
    <div class="miDiv">Div 2</div>
    <div class="miDiv">Div 3</div>

    <script>
        const inputColor = document.getElementById("selectorColor");
        const btnGuardar = document.getElementById("btnGuardar");
        const btnRestaurar = document.getElementById("btnRestaurar");
        const divs = document.querySelectorAll(".miDiv");

        const colorPorDefecto = "lightgray";

        // ✅ Cargar color guardado al iniciar
        const colorGuardado = localStorage.getItem("colorDeFondo");
        if (colorGuardado) {
            divs.forEach(div => div.style.backgroundColor = colorGuardado);
            inputColor.value = colorGuardado;
        } else {
            divs.forEach(div => div.style.backgroundColor = colorPorDefecto);
        }

        // ✅ Cambiar color en pantalla (sin guardar aún)
        inputColor.addEventListener("input", function() {
            const nuevoColor = inputColor.value;
            divs.forEach(div => div.style.backgroundColor = nuevoColor);
        });

        // ✅ Guardar cambios
        btnGuardar.addEventListener("click", function() {
            const colorActual = inputColor.value;
            localStorage.setItem("colorDeFondo", colorActual);
            alert("Color guardado correctamente.");
        });

        // ✅ Restaurar color por defecto
        btnRestaurar.addEventListener("click", function() {
            divs.forEach(div => div.style.backgroundColor = colorPorDefecto);
            inputColor.value = "#d3d3d3"; // HEX de lightgray
            localStorage.removeItem("colorDeFondo");
        });
    </script>

</body>

</html>