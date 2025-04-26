const canvas = document.getElementById('miCanvasCr');
const ctx = canvas.getContext('2d');
const img = document.getElementById('imagenBotonCr');

const pixelSize = 4;
const heartPixels = [
    [1,1,1,1,1,1,1,1],
    [1,1,1,1,1,1,1,1],
    [1,0,0,1,1,0,0,1],
    [1,0,0,1,1,0,0,1],
    [1,1,1,0,0,1,1,1],
    [1,1,0,0,0,0,1,1],
    [1,1,0,1,1,0,1,1],
    [1,1,1,1,1,1,1,1],
];

// Función para dibujar el corazón con una escala
function drawHeart(scale = 1) {
  const size = pixelSize * scale;
  const offset = (canvas.width - heartPixels[0].length * size) / 2;

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  for (let y = 0; y < heartPixels.length; y++) {
    for (let x = 0; x < heartPixels[y].length; x++) {
      if (heartPixels[y][x] === 1) {
        ctx.fillStyle = 'red';
        ctx.fillRect(offset + x * size, offset + y * size, size, size);
      }
    }
  }

  // Actualiza la imagen del botón
  img.src = canvas.toDataURL();
}

// Animación de palpitación
let scale = 1;
let growing = true;

function animate() {
  drawHeart(scale);

  if (growing) {
    scale += 0.001;
    if (scale >= 1.2) growing = false;
  } else {
    scale -= 0.001;
    if (scale <= 1) growing = true;
  }

  requestAnimationFrame(animate);
}

// Iniciar animación
animate();