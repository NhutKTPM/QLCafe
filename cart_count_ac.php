<?php
session_start();
header('Content-Type: application/json');

include 'connect.php';

if (!isset($_SESSION["tentk"])) {
    echo json_encode(['count' => 0]); 
    exit;
}

$tentk = $_SESSION["tentk"];
$sql = "SELECT SUM(soluong) AS total_items FROM dsorder WHERE tentk = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tentk);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$count = $row['total_items'] ?? 0; 
echo json_encode(['count' => $count]);
exit;
?>
