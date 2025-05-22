<section id="contact" class="py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">تماس با من</h2>
      <p class="text-muted">در صورت تمایل، پیام خود را ارسال کنید یا با من تماس بگیرید.</p>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4">
        <form action="backend/contact_process.php" method="POST">
          <div class="mb-3">
            <label class="form-label">نام</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">پیام</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-outline-primary" style="width: 50%;margin-right:100px;">ارسال پیام</button>
        </form>
      </div>
      <div class="col-md-6 mb-4">
        <h5>موقعیت مکانی ما روی نقشه</h5>
        <div class="ratio ratio-16x9">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.1234567890!2d51.6680!3d32.654321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbe1234567890ab%3A0x1234567890abcdef!2sYour%20Place!5e0!3m2!1sen!2sus!4v1611234567890" 
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
      </div>
    </div>
  </div>
</section>
