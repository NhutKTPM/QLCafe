<?php
$tentk = $_POST['tentk'];
$matkhau = $_POST['matkhau'];

require 'connect.php';

$sql = "INSERT INTO dstaikhoan VALUES ('$tentk', '$matkhau');";
$result = $conn->query($sql);
if ($result){
    echo "<script>alert('Đăng ký thành công');window.location.href = 'login.php';</script>";
}
else {
    echo "<script>alert('Đăng ký không thành công');window.location.href = 'login.php';</script>";

}