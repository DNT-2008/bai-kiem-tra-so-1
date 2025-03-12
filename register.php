<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Đăng Ký</h2>
    <form action="register.php" method="post">
        <label>Họ Tên:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mật khẩu:</label>
        <input type="password" name="password" required>

        <label>Xác nhận mật khẩu:</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">Đăng Ký</button>
    </form>
</body>
</html>
