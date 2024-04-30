<?php

require_once "../model/auth.php"; // Đường dẫn đến file chứa hàm checkuser

// Kiểm tra thông tin đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra thông tin đăng nhập
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Thực hiện kiểm tra thông tin đăng nhập bằng hàm checkuser
    if (checkuser($username, $password)) {
        // Nếu đăng nhập thành công, đặt session và chuyển hướng đến trang admin
        $_SESSION['loggedin'] = true;
        header("location: index.php");
        exit;
    } else {
        // Nếu đăng nhập không thành công, hiển thị thông báo lỗi hoặc thực hiện hành động phù hợp
        echo "Tên đăng nhập hoặc mật khẩu không đúng.";
    }
}
?>
