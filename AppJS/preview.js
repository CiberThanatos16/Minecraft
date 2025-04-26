
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


document.getElementById('des').addEventListener('input', function (){
    var texto = this.value;
    document.getElementById('des-mob').textContent = texto;
});



