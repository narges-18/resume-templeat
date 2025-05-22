<?php
$host = 'localhost';
$dbname = 'resume_db';
$username = 'root';
$password = '';

// اتصال به دیتابیس
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("خطا در اتصال به دیتابیس: " . $conn->connect_error);
}

// گرفتن اطلاعات فرم
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$parent_id = $_POST['parent_id'] ?? null;

// محافظت از ورود داده مخرب
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);
$message = $conn->real_escape_string($message);
$parent_id = $conn->real_escape_string($parent_id);

// ذخیره در دیتابیس
$sql = "INSERT INTO comments (name, email, message) VALUES ('$name', '$email', '$message' )";
if ($conn->query($sql)) {
    header("Location: ../index.php?comment_success=true");
} else {
    echo "خطا در ثبت نظر: " . $conn->error;
}
$stmt = $conn->prepare("INSERT INTO comments (name, email, message, parent_id) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $email, $message, $parent_id);
$stmt->execute();

header("Location: ../index.php#comments");
exit;
$conn->close();
?>

