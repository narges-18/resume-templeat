
  const canvas = document.getElementById('lines-canvas');
  const ctx = canvas.getContext('2d');

  let w, h;
  function resize() {
    w = canvas.width = window.innerWidth;
    h = canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  const lines = [];
  const num = 40;

  for (let i = 0; i < num; i++) {
    lines.push({
      x: Math.random() * w,
      y: Math.random() * h,
      length: 50 + Math.random() * 100,
      speed: 0.2 + Math.random() * 0.5,
      alpha: 0.2 + Math.random() * 0.3,
      angle: Math.random() * 2 * Math.PI,
    });
  }

  function animate() {
    ctx.clearRect(0, 0, w, h);
    for (let line of lines) {
      ctx.save();
      ctx.translate(line.x, line.y);
      ctx.rotate(line.angle);
      ctx.beginPath();
      ctx.moveTo(0, 0);
      ctx.lineTo(line.length, 0);
      ctx.strokeStyle = `rgba(255,255,255,${line.alpha})`;
      ctx.lineWidth = 1;
      ctx.stroke();
      ctx.restore();

      line.y += line.speed;
      if (line.y > h) line.y = -line.length;
    }
    requestAnimationFrame(animate);
  }

  animate();
