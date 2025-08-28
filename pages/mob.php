<section class="container">
    <div class="card pt-5 mt-5">
        <h4 class="fw-bold text-center fw-bold">Informacion del mob</h4>
        <div class="row m-5">
            <div class="col-12 col-md-4">
                <img class="img-thumbnail" src="views/img_mobs/<?= $mob['img_mob'] ?>" alt="<?= $mob['nombre'] ?>">
            </div>
            <div class="col-12 col-md-7">
                <h5><span class="fw-bold">Nombre: </span> <?= $mob['nombre'] ?></h5>
                <h5><span class="fw-bold">Tipo: </span> <?= $mob['tipo'] ?></h5>
                <h5><span class="fw-bold">Descripcion: </span> </h5>
                <pre class="justify"><?= $mob['descripcion'] ?></pre>
            </div>
        </div>
    </div>
</section>