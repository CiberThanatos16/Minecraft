<section class="container mt-5 p-5 bg-light shadow">
    <h2>ajustes</h2>
    <div class="card-group">
        <div class="card">
            <div class="row">
                <button class="btn-menu" onclick="toggleMenu()">Menu</button>
                <div id="menuLateral" class="col-12 col-md-3 border-end pt-3 list-left ">
                    <h5 class="card-title text-center">Usado comunmente</h5> <br>
                    <p><a href="#" class="selected" onclick="cargarContenido('pages/Ajustes/text-color.php')">
                            Text-color </a></p>
                    <p>
                        <a href="#" class="selected" onclick="cargarContenido('pages/Ajustes/img-bg.php')">
                            Background
                            image</a>
                    </p>
                    <!--<p><a href="#" class="selected" onclick="cargarContenido('pages/Ajustes/bg-container.php')">
                            background container </a></p> // terminar para despues. Solo agrega clases a los divs 
                            que deseas que cambie el color-->
                    <p><a href="#" class="selected" onclick="cargarContenido('pages/Ajustes/songs.php')">
                            Songs
                        </a></p>
                </div>
                <div class="col-12 col-md-9 p-5 pre-right">
                    <div id="contenedor">
                        <p>Haz clic en un botón para cargar contenido.
                            O haz clic en el boton "Menu" para cargar menu de contenido.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>
<script defer>
    function toggleMenu() {
        const menu = document.getElementById('menuLateral');
        menu.classList.toggle('open');
    }
</script>
<script src="AppJS/Ajuste-cp.js" defer></script>