<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
            <a href="#" class="logo">
                <img src="image.jpg" alt="Logo" class="logo-img">
            </a>
        <nav>
            <a href="index.php" class="active">Trang chủ</a>
            <a href="contact.php">Liên hệ</a>
            <?php if (isset($_SESSION['user_id'])): ?>
                <a href="logout.php">Đăng Xuất</a>
            <?php else: ?>
                <a href="products/index.php">Sản phẩm</a>
                <a href="reset-password.php">Đặt lại mật khẩu</a>
            <?php endif; ?>
        </nav>
    </header>
    
    <section>
        <div class="container">
            <h1>Chào Mừng Đến Với <span>TSHOP</span></h1>
            <p>Đây là nơi bạn có thể khám phá các dịch vụ tuyệt vời của chúng tôi. Hãy đăng ký hoặc đăng nhập để trải nghiệm ngay hôm nay!</p>
            <div class="buttons">
                <?php if (!isset($_SESSION['user_id'])): ?>
                    <button class="register" onclick="location.href='register.php'">Đăng Ký</button>
                    <button class="login" onclick="location.href='login.php'">Đăng Nhập</button>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
    <script src="script.js"></script>
    <footer class="footer">
        &copy; 2025 - Bản quyền thuộc về Đặng Ngọc Tịnh
    </footer>
</body>
</html>