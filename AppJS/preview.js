

document.getElementById('img').addEventListener('change', function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('img-pre').style.display = 'block';
        document.getElementById('img-pre').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
});


document.getElementById('NombreMob').addEventListener('input', function () {
    var texto = this.value;
    document.getElementById('preview-nombre').textContent = texto;
});

document.getElementById('tipo').addEventListener('input', function (){
    var texto = this.value;
    document.getElementById('tipo-mob').textContent = texto;
});


document.addEventListener('DOMContentLoaded', function () {
    const textarea = document.getElementById('des');
    const desMob = document.getElementById('des-mob');
    const contador = document.getElementById('contador');
    const form = document.getElementById('formulario');
    const errorDescripcion = document.getElementById('error-descripcion');

    textarea.addEventListener('input', function () {
        const texto = this.value;
        desMob.textContent = texto;
        contador.textContent = texto.length + ' / 2000';

        // Oculta el mensaje de error si el texto ahora es válido
        if (texto.trim().length >= 100) {
            errorDescripcion.classList.add('d-none');
            textarea.classList.remove('is-invalid');
        }
    });

    form.addEventListener('submit', function (e) {
        const texto = textarea.value.trim();
        if (texto.length < 100) {
            e.preventDefault(); // Evita el envío
            errorDescripcion.classList.remove('d-none'); // Muestra error
            textarea.classList.add('is-invalid'); // Marca el textarea como inválido
        }
    });
});







