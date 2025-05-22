<section id="comments" class="py-5 ">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-3">نظرات کاربران</h2>
      <p>دیدگاه‌های کاربران درباره فعالیت‌ها</p>
    </div>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <form action="backend/comment_process.php" method="POST">
          <div class="mb-3">
            <label class="form-label">نام شما</label>
            <input type="text" name="name" class="form-control" required>
            <label class="form-label mt-4">ایمیل شما</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">نظر شما</label>
            <textarea name="message" class="form-control" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-outline-primary" style="width: 50%;margin-right:170px;">ارسال نظر</button>
        </form>
      </div>
    </div>
  </div>
</section>
<section id="comments-list" class="py-4">
  <div class="container">
    <h3 class="mb-4 text-center">نظرات کاربران</h3>
    <div class="comments-box">



    <!-- نمایش نظرات -->
    <div class="comments-list">
      <?php
      $conn = new mysqli('localhost', 'root', '', 'resume_db');
      $conn->set_charset("utf8");
      $result = $conn->query("SELECT name, message, created_at FROM comments ORDER BY created_at DESC");
      while ($row = $result->fetch_assoc()) {
        echo '<div class="card mb-3">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($row['name']) . '</h5>';
        echo '<p class="card-text">' . nl2br(htmlspecialchars($row['message'])) . '</p>';
        echo '<p class="text-dark small mb-0">' . $row['created_at'] . '</p>';
        echo '</div></div>';
      }
      $conn->close();
      ?>
    </div>

    </div>
  </div>
</section>


