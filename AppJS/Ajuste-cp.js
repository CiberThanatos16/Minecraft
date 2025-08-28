function cargarContenido(ruta) {
      fetch(ruta)
        .then(response => {
          if (!response.ok) throw new Error("Error al cargar: " + response.status);
          return response.text();
        })
        .then(data => {
          document.getElementById('contenedor').innerHTML = data;
        })
        .catch(error => {
          document.getElementById('contenedor').innerHTML = `<p style="color:red;">${error.message}</p>`;
        });
    }