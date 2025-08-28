    <nav class="navbar navbar-expand-lg shadow-lg">
        <div class="container p-serif">
            <a class="navbar-brand btn btn-secondary border-black btn-border m-font" href="index.php"><span
                    class="text-black">Minecraft </span><span class="text-black">Crud </span></a>
            <button class="navbar-toggler btn-outline-primary bg-secondary btn-border" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-black">
                    <i class="bi bi-plus-circle-fill"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-font">
                    <li class="nav-item m-1">
                        <a class="nav-link text-black btn btn-secondary btn-border" aria-current="page"
                            href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link text-black btn btn-secondary btn-border text-truncate" aria-current="page"
                            href="index.php?action=guardar">Agrega un mob</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link text-black btn btn-secondary btn-border text-truncate" aria-current="page"
                            href="index.php?action=listar">Edita un mob</a>
                    </li>

                    <li class="nav-item m-1">
                        <a class="nav-link text-black btn btn-secondary btn-border" aria-current="page"
                            href="index.php?action=ajustes">ajustes</a>
                    </li>

                </ul>
            </div>
            <form action="index.php" method="get" class="d-flex">
                <input type="hidden" name="action" value="busqueda">
                <input id="buscar" name="buscar" class="form-control me-3 btn-border font-pixel" type="search"
                    placeholder="Buscas algo?" aria-label="Search">
                <button class="text-black btn btn-secondary btn-border font-pixel" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>