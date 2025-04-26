<main class="container min-vh-100 bg-white">
    <div class="d-flex flex-column flex-shrink-0 p-3">
        <div class="h-100 p-5">
            <h2>busqueda</h2><br><hr><br>
            <?php if (!empty($mobs)): ?>
                <div class="row row-cols-2 row-cols-md-5 g-5">
                    <?php foreach ($mobs as $mob): ?>
                        <div class="col">
                            <a href="#" class="text-decoration-none link-dark">
                                <div class="card bg-info" style="width: 12rem;">
                                    <img src="views/img_mobs/<?= $mob['img_mob']; ?>" class="card-img-top" style="height: 100px;" alt="<?= $mob["nombre"]; ?>">
                                    <h3 class="text-center"><?php echo $mob["nombre"]; ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div><br>
            <?php elseif (isset($_GET['buscar'])): ?>
                <p>No se encontraron resultados para "<?= htmlspecialchars($_GET['buscar']) ?>"</p>
            <?php endif; ?>
            <br><hr>
        </div>
    </div>
</main>