<div class="d-flex flex-nowrap">
    <section class="">
        <div class="bg-light p-5 min-vh-100">
            <h1>Hola mundo</h1>
            <form class="mt-2" method="GET" action="index.php">
                <input type="hidden" name="action" value="index">
                <div class="d-grid gap-2">
                    <canvas id="miCanvas" width="50" height="50" style="display:none;"></canvas>
                    <button id="miBoton" class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="">
                        <img id="imagenBotonC" src="" alt="icon" />
                        Todos los mobs
                    </button>
                    <hr>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Pasivo">Pacificos</button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Hostil">Hostiles</button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Neutral">Neutros</button>
                    <canvas id="miCanvas" width="50" height="50" style="display:none;"></canvas>
                    <button id="miBoton" class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Jinete">
                        <img id="imagenBoton" src="" alt="Corazón" />
                        Jinetes
                    </button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Jefe">Jefes</button>
                </div>
            </form>
            <br>
            <hr><br>
            <div class="d-grid gap-2">
                <a href="https://minecraft.wiki/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-border font-pixel" type="button">Minecraft Wiki (Fandom)</a>
                <a href="https://minecraft.fandom.com/es/wiki/Minecraft_Wiki" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-border font-pixel" type="button">Minecraft Wiki (Fandom)</a>
            </div>
        </div>
    </section>


    <section class="col-md-9">
        <div class="container ">
            <div class="min-vh-100 bg-light shadow btn-border p-5">
                <h2>Inicio</h2>
                <p>Bienvenido al crud de Minecraft.
                    Aquí puedes agregar, modificar y eliminar información de mobs que hay dentro del juego.
                    hasta puedes incluir mobs hechos por ti, incluye los nombres, el tipo y la descripcion del mob. :D</p>
                <hr>
                <h2>Mobs</h2><br>
                <div class="row row-cols-2 row-cols-md-5 g-5">
                    <?php foreach ($mob as $mobs): ?>
                        <div class="col">
                            <a href="#" class="text-decoration-none link-dark">
                                <div class="card bg-info" style="width: 12rem;">
                                    <img src="views/img_mobs/<?= $mobs['img_mob']; ?>" class="card-img-top" style="height: 100px;" alt="<?= $mobs["nombre"]; ?>">
                                    <h3 class="text-center"><?php echo $mobs["nombre"]; ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div><br>
                <hr>
            </div>
        </div>
        <script src="AppJS/icons/heart-red.js"></script>
        <script src="AppJS/creeper.js"></script>
    </section>
</div>