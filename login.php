<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $valid_email = "admin@example.com";
    $valid_password = "123456";

    if ($email == $valid_email && $password == $valid_password) {
        $_SESSION["user"] = $email;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Email hoặc mật khẩu không đúng!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <div class="space-y-4">
                <h2>Đăng Nhập</h2>
            </div>
            <?php if (!empty($error)): ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="person"></ion-icon>
                </span>
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" placeholder="Mật khẩu" required>
            </div>
            <div class="forgot-pass">
                <a href="reset-password.php">Quên mật khẩu?</a>
            </div>
            <button type="submit" class="btn">Đăng nhập</button>
            <div class="sign-link">
                <p>Chưa có tài khoản? <a href="register.php" class="register-link">Đăng ký</a></p>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
