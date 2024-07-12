<?php
// Thông tin kết nối
$dsn = 'mysql:host=localhost;port=4036;dbname=asmht;charset=utf8mb4';
$username = 'root';
$password = '';

// Tạo đối tượng PDO
try {
    $connect = new PDO($dsn, $username, $password);
    //echo "Kết nối thành công";
} catch (PDOException $e) {
    //echo "Kết nối không thành công: " . $e->getMessage();
}
?>