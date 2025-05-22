<section id="blog" class="py-5 ">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">آخرین مقالات</h2>
      <p>مطالب و نکات مرتبط با حوزه کاری من</p>
    </div>

    <div class="row">
      <?php for ($i = 1; $i <= 3; $i++): ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="assets/images/blog<?= $i ?>.jpg" class="card-img-top" alt="Blog <?= $i ?>">
            <div class="card-body">
              <h5 class="card-title">عنوان مقاله <?= $i ?></h5>
              <p class="card-text text-muted">این متن خلاصه‌ای از محتوای مقاله است که به کاربر کمک می‌کند موضوع را سریع متوجه شود.</p>
              <a href="#" class="btn btn-outline-primary">ادامه مطلب</a>
            </div>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
</section>
