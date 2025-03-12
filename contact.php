<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Liên Hệ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Liên Hệ</h2>
    <form action="contact.php" method="post">
        <label>Họ Tên:</label>
        <input type="text" name="name" required>
        
        <label>Email:</label>
        <input type="email" name="email" required>
        
        <label>Chủ đề:</label>
        <input type="text" name="subject" required>
        
        <label>Nội dung:</label>
        <textarea name="message" required></textarea>
        
        <button type="submit">Gửi</button>
    </form>
</body>
</html>
