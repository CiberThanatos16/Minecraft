
    const btn = document.getElementById('btn');
    const bar = document.getElementById('bar');
    const icon = btn.querySelector('i');

    btn.addEventListener('click', () => {
        bar.classList.toggle('show');

        // Cambiar contenido del botón
        if (bar.classList.contains('show')) {
            icon.classList.remove ('bi-arrow-bar-down');
            icon.classList.add ('bi-arrow-bar-up');
        } else {
            icon.classList.remove ('bi-arrow-bar-up');
            icon.classList.add ('bi-arrow-bar-down');
        }
    });

