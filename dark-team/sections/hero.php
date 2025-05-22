<!-- <section id="hero" class="d-flex align-items-center" style="min-height: 100vh;">
  <div class="container text-center">
    <h1 class="display-4">سلام، من نرگس رضائی هستم</h1>
    <p class="lead">توسعه‌دهنده فرانت‌اند و علاقه‌مند به طراحی تجربه کاربری</p>
    <a href="#about" class="btn btn-primary mt-3">بیشتر بدانید</a>
  </div>
</section> -->
<section id="hero" class="text-center " style="padding: 200px 20px;min-height: 100vh;">
  <h1>رزومه حرفه‌ای من</h1>
  <h3 id="hero-text" style="margin-top: 20px; font-weight: 300; font-size: 1.5rem;"></h3>
  <a href="assets/resume.pdf" class="btn btn-primary btn-lg mt-3" download><i class="bi bi-download me-2"></i> دریافت رزومه</a>

</section>
<script>
  const heroTexts = [
    "توسعه‌دهنده فرانت‌اند و بک‌اند",
    "علاقمند به طراحی واکنش‌گرا",
    "مهارت در Bootstrap و PHP",
    "علاقه‌مند به یادگیری مستمر",
    "طراحی قالب‌های مدرن و زیبا"
  ];

  let currentIndex = 0;
  const heroTextElement = document.getElementById('hero-text');

  function showNextText() {
    heroTextElement.style.opacity = 0;
    setTimeout(() => {
      heroTextElement.textContent = heroTexts[currentIndex];
      heroTextElement.style.opacity = 1;
      currentIndex = (currentIndex + 1) % heroTexts.length;
    }, 500);
  }

  // شروع نمایش متن اول
  showNextText();

  // هر 3 ثانیه متن عوض شود
  setInterval(showNextText, 3000);
</script>

<style>
  #hero-text {
    transition: opacity 0.5s ease-in-out;
  }
</style>
