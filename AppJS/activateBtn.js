
    const btn = document.getElementById('btn');
    const prew = document.getElementById('prew');
    const icon = btn.querySelector('i');

    btn.addEventListener('click', () => {
        prew.classList.toggle('show');

        // Cambiar contenido del botón
        if (prew.classList.contains('show')) {
            icon.classList.remove ('bi-arrow-bar-up');
            icon.classList.add ('bi-arrow-bar-down');
        } else {
            icon.classList.remove ('bi-arrow-bar-down');
            icon.classList.add ('bi-arrow-bar-up');
        }
    });

