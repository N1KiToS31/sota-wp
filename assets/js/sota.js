document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.querySelector('#sotaCanvas');
    const section = document.querySelector('#heroScreen');

  if (!canvas || !section) {
    console.log('Canvas #sotaCanvas или секция #hero не найдены');
    return;
  }

  const ctx = canvas.getContext('2d');

  const borderColor = '#333';
  const hexSize = 22.5;
  const hoverFillColor = '#FF7514';
  const gapX = 6;
  const gapY = 6;

  let hoveredHex = null;
  const activatedHexes = new Set();

  function resizeCanvas() {
    const dpr = window.devicePixelRatio || 1;

    const width = canvas.offsetWidth;
    const height = canvas.offsetHeight;

    canvas.width = width * dpr;
    canvas.height = height * dpr;

    canvas.style.width = `${width}px`;
    canvas.style.height = `${height}px`;

    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

    drawGrid();
  }

  function drawHex(x, y, size, strokeColor = null, fillColor = null) {
    const angleStep = Math.PI / 3;

    ctx.beginPath();

    for (let i = 0; i < 6; i++) {
      const angle = angleStep * i + Math.PI / 6;
      const px = x + size * Math.cos(angle);
      const py = y + size * Math.sin(angle);

      if (i === 0) {
        ctx.moveTo(px, py);
      } else {
        ctx.lineTo(px, py);
      }
    }

    ctx.closePath();

    if (fillColor) {
      ctx.fillStyle = fillColor;
      ctx.fill();
    }

    if (strokeColor) {
      ctx.strokeStyle = strokeColor;
      ctx.lineWidth = 1;
      ctx.lineJoin = 'round';
      ctx.lineCap = 'round';
      ctx.stroke();
    }
  }

  function getGridMetrics() {
    const hexW = Math.sqrt(3) * hexSize;
    const hexH = 2 * hexSize;

    const horizDist = hexW + gapX;
    const vertDist = hexH * 0.75 + gapY;

    return {
      hexW,
      hexH,
      horizDist,
      vertDist,
    };
  }

  function drawGrid() {
    const width = canvas.offsetWidth;
    const height = canvas.offsetHeight;

    ctx.clearRect(0, 0, width, height);

    const { horizDist, vertDist } = getGridMetrics();

    const rows = Math.ceil(height / vertDist) + 2;
    const cols = Math.ceil(width / horizDist) + 2;

    for (let row = 0; row < rows; row++) {
      for (let col = 0; col < cols; col++) {
        const x = col * horizDist + ((row % 2) * horizDist) / 2 + gapX;
        const y = row * vertDist + gapY;

        const hexKey = `${col},${row}`;

        const isHovered =
          hoveredHex &&
          hoveredHex.col === col &&
          hoveredHex.row === row;

        const isActivated = activatedHexes.has(hexKey);

        let fillColor = null;
        let strokeColor = null;

        if (isHovered) {
          fillColor = hoverFillColor;
        } else if (isActivated) {
          strokeColor = borderColor;
        }

        drawHex(x, y, hexSize, strokeColor, fillColor);
      }
    }
  }

  function handleMouseMove(event) {
    const rect = canvas.getBoundingClientRect();

    const mouseX = event.clientX - rect.left;
    const mouseY = event.clientY - rect.top;

    const { horizDist, vertDist } = getGridMetrics();

    const row = Math.floor(mouseY / vertDist);
    const col = Math.floor(
      (mouseX - ((row % 2) * horizDist) / 2) / horizDist
    );

    if (col < 0 || row < 0) return;

    const hexKey = `${col},${row}`;

    activatedHexes.add(hexKey);
    hoveredHex = { col, row };

    drawGrid();
  }

  function handleMouseLeave() {
    hoveredHex = null;
    drawGrid();
  }

  section.addEventListener('mousemove', handleMouseMove);
  section.addEventListener('mouseleave', handleMouseLeave);
  window.addEventListener('resize', resizeCanvas);

  resizeCanvas();
});