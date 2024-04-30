<?php
session_start();

// Hủy bỏ tất cả các session
session_destroy();

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính
header("location: login.php");
exit;
?>
