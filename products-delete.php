<?php
require_once "products-db.php";

if (!isset($_GET['id'])) {
    die("Không tìm thấy sản phẩm!");
}

$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: products-index.php");
    exit();
} else {
    echo "Lỗi khi xóa sản phẩm!";
}

$conn->close();
?>
