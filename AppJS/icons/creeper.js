const pixelSize = 4;
const creeperPixels = [
  [1,1,1,1,1,1,1,1],
  [1,1,1,1,1,1,1,1],
  [1,0,0,1,1,0,0,1],
  [1,0,0,1,1,0,0,1],
  [1,1,1,0,0,1,1,1],
  [1,1,0,0,0,0,1,1],
  [1,1,0,1,1,0,1,1],
  [1,1,1,1,1,1,1,1]
];

function drawCreeperOnCanvas(canvascId, colorc, imgcId) {
  const canvasc = document.getElementById(canvascId);
  const ctx = canvasc.getContext('2d');
  const imgc = document.getElementById(imgcId);

  const size = pixelSize;
  const offsetX = (canvasc.width - creeperPixels[0].length * size) / 2;
  const offsetY = (canvasc.height - creeperPixels.length * size) / 2;

  ctx.clearRect(0, 0, canvasc.width, canvasc.height);

  for (let y = 0; y < creeperPixels.length; y++) {
    for (let x = 0; x < creeperPixels[y].length; x++) {
      if (creeperPixels[y][x] === 1) {
        ctx.fillStyle = colorc;
        ctx.fillRect(offsetX + x * size, offsetY + y * size, size, size);
      }
    }
  }

  if (imgc) {
    imgc.src = canvasc.toDataURL();
  }
}

// Asegúrate de que este código se ejecute después de que el DOM esté cargado
document.addEventListener('DOMContentLoaded', () => {
  drawCreeperOnCanvas('Creeper', '#00aa00', 'imgCR');
});
