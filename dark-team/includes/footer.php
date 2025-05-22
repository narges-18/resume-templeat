<footer class=" text-center py-4 border-top mt-5 ">
  <div class="container">
    &copy; <?php echo date('Y'); ?> همه حقوق محفوظ است | ساخته شده توسط شما
  </div>
</footer>

<!-- اسکریپت‌های بوت‌استرپ و jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- اسکریپت تغییر تم -->
<script src="assets/js/theme-toggle.js"></script>
  <script>
  let percent = 0;
  const loadingPercent = document.getElementById("loading-percent");
  const preloader = document.getElementById("preloader");

  const interval = setInterval(() => {
    if (percent < 100) {
      percent++;
      loadingPercent.textContent = percent + "%";
    } else {
      clearInterval(interval);
      setTimeout(() => {
        preloader.style.opacity = "0";
        setTimeout(() => {
          preloader.style.display = "none";
        }, 500);
      }, 300);
    }
  }, 20); // سرعت افزایش درصد
</script>
</body>
</html>
