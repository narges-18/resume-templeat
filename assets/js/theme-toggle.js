$(function () {
  // رنگ‌های پاستلی
  const themes = [
    'theme-pastel-1',
    'theme-pastel-2',
    'theme-pastel-3',
    'theme-pastel-4',
    'theme-pastel-5',
  ];

  // بارگذاری تم از localStorage
  let currentTheme = localStorage.getItem('siteTheme') || themes[0];
  $('body').removeClass(themes.join(' ')).addClass(currentTheme);

  // دکمه تغییر تم
  $('#themeToggleBtn').click(() => {
    let index = themes.indexOf(currentTheme);
    index = (index + 1) % themes.length;
    currentTheme = themes[index];
    $('body').removeClass(themes.join(' ')).addClass(currentTheme);
    localStorage.setItem('siteTheme', currentTheme);
  });
});
 const colorCircles = document.querySelectorAll('.color-circle');
  colorCircles.forEach(circle => {
    circle.addEventListener('click', () => {
      document.body.style.backgroundColor = circle.dataset.color;
    });
  });
     const savedColor = localStorage.getItem('darkColor');
  if (savedColor) {
    document.body.style.backgroundColor = savedColor;
  }
  
  document.querySelectorAll('.color-circle').forEach(circle => {
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