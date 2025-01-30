<?php
// 模擬用戶數據庫
$users = [
    'user1' => 'password1',
    'user2' => 'password2'
];

// 獲取表單數據
$username = $_POST['username'];
$password = $_POST['password'];

// 檢查用戶名和密碼
if (isset($users[$username]) && $users[$username] === $password) {
    echo '登錄成功！';
} else {
    http_response_code(401);
    echo '用戶名或密碼錯誤！';
}
?>