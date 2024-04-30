<?php
session_start();
require_once "../model/pdo.php";
// Kiểm tra xem người dùng đã đăng nhập chưa
    function check_login() {
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            header("location: login.php");
            exit;
        }
    }
    function checkuser($tk,$mk){
        $sql = "SELECT * FROM taikhoan WHERE tendangnhap = :tendangnhap AND matkhau = :matkhau";

        // Thực thi truy vấn SQL và truyền tham số
        $result = pdo_query_1($sql, array(':tendangnhap' => $tk, ':matkhau' => $mk));

        // Kiểm tra xem có kết quả trả về không
        if ($result) {
            // Nếu có, trả về true (tài khoản và mật khẩu đúng)
            return true;
        } else {
            // Nếu không, trả về false (tài khoản hoặc mật khẩu không đúng)
            return false;
        }
    }
?>