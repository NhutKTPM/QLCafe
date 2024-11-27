<?php
include 'connect.php';

if (isset($_GET['mathucuong'])) {
    $mathucuong = $_GET['mathucuong'];


    $sql = "DELETE FROM dsorder WHERE mathucuong = '$mathucuong'";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa món thành công!";
        header("Location: cart.php"); 
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>
