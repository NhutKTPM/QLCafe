<?php
session_start();
if (!isset($_SESSION["tentk"])){
    header("location: login.php");
}

include 'connect.php';

$mathucuong = $_POST['mathucuong'];
$soluong = 1;
$tentk = $_SESSION["tentk"]; 
$checkQuery = "SELECT * FROM dsorder WHERE mathucuong = '$mathucuong' AND tentk = '$tentk'";
$checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        $updateQuery = "UPDATE dsorder 
                        SET soluong = soluong + $soluong 
                        WHERE mathucuong = '$mathucuong' AND tentk = '$tentk'";
        $conn->query($updateQuery);
    } else {
        $insertQuery = "INSERT INTO dsorder (mathucuong, soluong, tentk) 
                        VALUES ('$mathucuong', $soluong, '$tentk')";
        $conn->query($insertQuery);
    }
    echo "<script>alert('Thêm vào giỏ hàng thành công!'); window.location.href = 'index.php';</script>";
    // echo $mathucuong;
    // echo $tentk;
    // echo "Thêm thành công";
// }
?>
