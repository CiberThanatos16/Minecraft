<?php
include 'plantillas/header.php';
?>
<!-----FORMULARIO----->

<div class="row">
    <div class="col-md-3 bg-light shadow p-3 min-vh-100">
        <form class="" action="index.php?action=store" method="post" enctype="multipart/form-data">
            <div class="">
                <label for="validationServer01"> <span class="">Agregar imagen</span></label>
                <input type="file" class="form-control" multiple accept="image" id="img" name="imgM"  required>
                <div class="valid-feedback is-valid">
                    ¡Seleccione la foto del mob que desea subir!
                </div>
            </div>
            <div class="">
                <label for="" class="form-label"><span class="">Nombre del mob</span></label>
                <input class="form-control" type="text" name="nombreM" id="NombreMob" placeholder="Ingrese el nombre del mob" required>
                <div class="valid-feedback">
                    <span class="text-light">¡Escriba el nombre del mob!</span>
                </div>
            </div>

            <div class="">
                <label for="validationServer04" class="form-label"> <span class="">Tipo</span></label>
                <select class="form-select is-invalid" id="tipo" name="tipo" required>
                    <option selected disabled value="">...</option>
                    <option value="Pasivo">Pasivo</option>
                    <option value="Neutral">Neutral</option>
                    <option value="Jinete">Jinete</option>
                    <option value="Hostil">Hostil</option>
                    <option value="Jefe">Jefe</option>
                </select>
                <div class="invalid-feedback">
                    Seleccione que tipo es el mob.
                </div>
            </div>
            <div class="">
                <label for="validationTextarea" class="form-label"><span class="">Descripción</span></label>
                <textarea class="form-control" id="des" name="des" placeholder="Escriba aquí la descripción" required></textarea>
                <div class="valid-feedback">
                    Describa un poco sobre el mob.
                </div>
            </div>

            <button class="btn btn-primary" type="submit">Subir producto</button>
        </form>
    </div>

    <!-------PREVIEW FORMULARIO---------->

    <div class="col-xxl-9">
        <div class="p-5">
            <div class="card mb-3 shadow">
                <div class="row g-0">
                    <div class="col-md-4 p-3">
                        <img src="views/img_s/mine02.jpg" id="img-pre" class="img-thumbnail rounded bg-body" height="200px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title" id="preview-nombre">Nombre del mob</h3>
                            <p class="card-text" id="tipo-mob">Tipo del mob</p>
                            <p class="card-text" id="des-mob">Descripcion del mob</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="AppJS/preview.js">
</script>
<?php
include_once 'plantillas/footer.php';
?>