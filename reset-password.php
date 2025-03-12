<?php
session_start();
include "config.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Kiểm tra xem email có tồn tại không
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Tạo token reset mật khẩu
        $token = bin2hex(random_bytes(50));
        $stmt = $pdo->prepare("UPDATE users SET reset_token = ?, reset_token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $stmt->execute([$token, $email]);

        // Gửi email reset mật khẩu (giả lập)
        $reset_link = "http://localhost/reset-password-confirm.php?token=$token";
        $message = "Liên kết đặt lại mật khẩu của bạn: <a href='$reset_link'>$reset_link</a>";
    } else {
        $message = "Email không tồn tại!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Reset Mật Khẩu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Reset Mật Khẩu</h2>
        <p>Nhập email của bạn để nhận liên kết đặt lại mật khẩu.</p>
        <?php if ($message) echo "<p class='message'>$message</p>"; ?>
        <form action="reset-password.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" required>
            <button type="submit">Gửi Yêu Cầu</button>
        </form>
        <p><a href="login.php">Quay lại Đăng Nhập</a></p>
    </div>
</body>
</html>
