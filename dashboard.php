<?php
session_start();

// 檢查用戶是否已登入
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html"); // 未登入則跳轉回登入頁
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>歡迎頁面</title>
</head>
<body>
    <h1>歡迎，<?php echo $_SESSION['username']; ?>！</h1>
    <a href="logout.php">登出</a>
</body>
</html>