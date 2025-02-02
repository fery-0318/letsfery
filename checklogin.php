<?php
// 啟動 Session（用於記錄用戶登入狀態）
session_start();

// 假設我們有一個用戶資料庫（這裡用陣列代替）
$users = [
    "user1" => password_hash("password123", PASSWORD_DEFAULT), // 密碼加密
    "user2" => password_hash("abc456", PASSWORD_DEFAULT),
    "admin" => password_hash("admin@2023", PASSWORD_DEFAULT)
];

// 獲取表單提交的帳號和密碼
$input_username = $_POST['username'];
$input_password = $_POST['password'];

// 檢查帳號是否存在
if (isset($users[$input_username])) {
    // 如果存在，驗證密碼
    if (password_verify($input_password, $users[$input_username])) {
        // 登入成功：記錄 Session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $input_username;
        header("Location: dashboard.php"); // 跳轉到成功頁面
        exit;
    } else {
        echo "密碼錯誤！";
    }
} else {
    echo "帳號不存在！";
}
?>