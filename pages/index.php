<div class="row">
    <button id="btn" class="btn-b">Tipos de mobs <i class="bi bi-arrow-bar-down"></i></button>
    <section id="bar" class="col-12 col-md-3 bar-i">
        <div class="bg-light p-5 min-vh-100 scroll-box">
            <h1>Hola mundo</h1>
            <form class="mt-2" method="GET" action="index.php">
                <input type="hidden" name="action" value="index">
                <div class="d-grid gap-2 ">

                    <canvas id="heartSilver" width="50" height="50" style="display:none;"></canvas>
                    <canvas id="heartRed" width="50" height="50" style="display:none;"></canvas>
                    <canvas id="heartBlue" width="50" height="50" style="display:none;"></canvas>
                    <canvas id="heartGreen" width="50" height="50" style="display:none;"></canvas>
                    <canvas id="heartBlack" width="50" height="50" style="display:none;"></canvas>
                    <canvas id="heartWhite" width="50" height="50" style="display:none;"></canvas>

                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="">
                        <img id="imgSilver" />Todos los mobs
                    </button>
                    <hr>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Pasivo">
                        <img id="imgWhite" />Pacificos
                    </button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Hostil">
                        <img id="imgRed" />Hostiles
                    </button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Neutral">
                        <img id="imgBlue" />Neutros
                    </button>
                    <button id="miBoton" class="btn btn-secondary btn-border font-pixel" type="submit" name="filter"
                        value="Jinete">
                        <img id="imgGreen" />Jinetes
                    </button>
                    <button class="btn btn-secondary btn-border font-pixel" type="submit" name="filter" value="Jefe">
                        <img id="imgBlack" />Jefe
                    </button>
                </div>
            </form>
            <br>
            <hr><br>
            <div class="d-grid gap-2">
                <a href="https://minecraft.wiki/" target="_blank" rel="noopener noreferrer"
                    class="btn btn-secondary btn-border font-pixel" type="button">Minecraft Wiki (Fandom)</a>
                <a href="https://minecraft.fandom.com/es/wiki/Minecraft_Wiki" target="_blank" rel="noopener noreferrer"
                    class="btn btn-secondary btn-border font-pixel" type="button">Minecraft Wiki</a>
            </div>
        </div>
    </section>

    <!--===SECCION DE MOBS =====---->
    <section class="col-12 col-md-9">
        <div class="container">
            <div class="min-vh-100 bg-light shadow btn-border p-5">
                <h2>Inicio</h2>
                <p>Bienvenido al crud de Minecraft.
                    Aquí puedes agregar, modificar y eliminar información de mobs que hay dentro del juego.
                    hasta puedes incluir mobs hechos por ti, incluye los nombres, el tipo y la descripcion del mob. :D
                </p>
                <hr>
                <h2>Mobs</h2><br>
                <div class="row row-cols-1 row-cols-md-5 g-5">
                    <?php foreach ($mob as $mobs): ?>
                        <div class="col">
                            <a href="index.php?action=mob_select&id_mob=<?= $mobs["id_mob"]; ?>"
                                class="text-decoration-none link-dark">
                                <div class="card bg-info" style="width: 12rem;">
                                    <img src="views/img_mobs/<?= $mobs['img_mob']; ?>" class="card-img-top"
                                        style="height: 100px;" alt="<?= $mobs["nombre"]; ?>">
                                    <h3 class="text-center"><?php echo $mobs["nombre"]; ?></h3>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div><br>
                <hr>
            </div>
        </div>
    </section>
</div>

<script src="AppJS/icons/hearts.js" defer></script>
<script src="AppJS/activateBtnBar.js" defer></script>