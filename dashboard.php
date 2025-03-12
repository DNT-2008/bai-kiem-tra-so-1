<?php
session_start();
include "config.php";

// Kiểm tra nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Truy vấn dữ liệu thống kê
$total_products = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$total_users = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
$total_orders = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h2>Dashboard - Quản lý sản phẩm</h2>
        <p>Xin chào, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>

        <div class="dashboard">
            <div class="card">
                <h3>Tổng Sản Phẩm</h3>
                <p><?php echo $total_products; ?></p>
            </div>
            <div class="card">
                <h3>Tổng Người Dùng</h3>
                <p><?php echo $total_users; ?></p>
            </div>
            <div class="card">
                <h3>Tổng Đơn Hàng</h3>
                <p><?php echo $total_orders; ?></p>
            </div>
        </div>

        <a href="products/index.php" class="btn">Quản Lý Sản Phẩm</a>
        <a href="logout.php" class="btn logout">Đăng Xuất</a>
    </div>
</body>
</html>
