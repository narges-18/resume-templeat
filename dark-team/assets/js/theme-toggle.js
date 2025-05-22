document.addEventListener('DOMContentLoaded', function () {
  const palette = document.getElementById('color-palette-dark');
  const toggleBtn = document.getElementById('toggle-palette-dark');

  toggleBtn.addEventListener('click', () => {
    if (palette.style.display === 'none' || palette.style.display === '') {
      palette.style.display = 'flex';
    } else {
      palette.style.display = 'none';
    }
  });

  const colorCircles = palette.querySelectorAll('.color-circle');

  colorCircles.forEach(circle => {
    circle.addEventListener('click', () => {
      const selectedColor = circle.getAttribute('data-color');

      // تغییر رنگ پس زمینه body
      document.body.style.backgroundColor = selectedColor;

      // ذخیره رنگ انتخاب شده در localStorage برای استفاده بعدی
      localStorage.setItem('darkColor', selectedColor);
    });
  });

  // بارگذاری رنگ ذخیره شده هنگام لود صفحه
  const savedColor = localStorage.getItem('darkColor');
  if (savedColor) {
    document.body.style.backgroundColor = savedColor;
  }
});
document.querySelectorAll('#color-palette-dark .color-circle').forEach(circle => {
  circle.addEventListener('click', () => {
    const color = circle.getAttribute('data-color');
    // اعمال رنگ به body یا المنت مورد نظر
    document.body.style.backgroundColor = color;

    // ذخیره رنگ در localStorage
    localStorage.setItem('selectedColor', color);
  });
});

// بارگذاری رنگ ذخیره شده هنگام لود صفحه
document.addEventListener('DOMContentLoaded', () => {
  const savedColor = localStorage.getItem('selectedColor');
  if (savedColor) {
    document.body.style.backgroundColor = savedColor;
  }
});
