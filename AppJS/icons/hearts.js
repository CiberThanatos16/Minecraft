const pixelSize = 4;
const heartPixels = [
  [0,0,1,1,0,1,1,0,0],
  [0,1,1,1,1,1,1,1,0],
  [1,1,1,1,1,1,1,1,1],
  [1,1,1,1,1,1,1,1,1],
  [0,1,1,1,1,1,1,1,0],
  [0,0,1,1,1,1,1,0,0],
  [0,0,0,1,1,1,0,0,0],
  [0,0,0,0,1,0,0,0,0],
];

function drawHeartOnCanvas(canvasId, color, imgId) {
  const canvas = document.getElementById(canvasId);
  const ctx = canvas.getContext('2d');
  const img = document.getElementById(imgId);

  const size = pixelSize;
  const offset = (canvas.width - heartPixels[0].length * size) / 2;

  ctx.clearRect(0, 0, canvas.width, canvas.height);

  for (let y = 0; y < heartPixels.length; y++) {
    for (let x = 0; x < heartPixels[y].length; x++) {
      if (heartPixels[y][x] === 1) {
        ctx.fillStyle = color;
        ctx.fillRect(offset + x * size, offset + y * size, size, size);
      }
    }
  }

  // Si se especifica una imagen destino, usarla
  if (img) {
    img.src = canvas.toDataURL();
  }
}

// Dibujar todos los corazones
document.addEventListener('DOMContentLoaded', () => {
    drawHeartOnCanvas('heartSilver', 'silver', 'imgSilver');
    drawHeartOnCanvas('heartRed', 'red', 'imgRed');
    drawHeartOnCanvas('heartBlue', 'blue', 'imgBlue');
    drawHeartOnCanvas('heartGreen', 'green', 'imgGreen');
    drawHeartOnCanvas('heartBlack', 'black', 'imgBlack');
    drawHeartOnCanvas('heartWhite', 'white', 'imgWhite'); 
});