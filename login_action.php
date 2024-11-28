<?php
$tentk = $_POST['tentk'];
$matkhau = $_POST['matkhau'];

require 'connect.php';

$sql = "SELECT FROM dstaikhoan WHERE tentk='$tentk'";
$result = $conn->query($sql);
$dstaikhoan = $result->fetch_all(MYSQLI_ASSOC);
