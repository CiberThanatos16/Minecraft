        <div class="container">
            <div class="bg-light shadow btn-border">
                <div class="p-5">
                    <h2>Edicion de mobs</h2>
                    <p>Que tal?
                        Aquí puedes modificar y/o eliminar información de mobs que hay dentro del juego.
                        hasta puedes incluir mobs hechos por ti, incluye los nombres, el tipo y la descripcion del mob. :D</p>
                    <hr>
                    <h2>Mobs</h2><br>
                    <div class="row row-cols-2 row-cols-md-5 g-5">
                        <?php foreach ($mobs as $mobs): ?>
                            <div class="col">
                                <div class="card bg-info" style="width: 12rem;">
                                    <img src="views/img_mobs/<?= $mobs['img_mob']; ?>" class="card-img-top" style="height: 100px;" alt="<?= $mobs["nombre"]; ?>">
                                    <h3 class="text-center"><?php echo $mobs["nombre"]; ?></h3>
                                </div>
                                <div class="card-footer bg-transparent border-info">
                                    <a href="index.php?action=edit&id_mob=<?php echo $mobs["id_mob"]; ?>">Actualizar</a> |
                                    <a href="index.php?action=eliminar&id_mob=<?php echo $mobs["id_mob"]; ?>" onclick="return confirm('¿Estás seguro de eliminar este mob?')">Eliminar</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><br>
                    <hr>
                </div>
            </div>
        </div>
        <script src="AppJS/heart.js"></script>
        <script src="AppJS/creeper.js"></script>