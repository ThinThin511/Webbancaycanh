<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    
    <link rel="stylesheet" href="../view/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><strong>ADMIN</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?act=listdm">Danh sách danh mục</a></li>
                                <li><a class="dropdown-item" href="index.php?act=adddm">Thêm danh mục</a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hàng hoá
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?act=listsp">Danh sách sản phẩm</a></li>
                                <li><a class="dropdown-item" href="index.php?act=addsp">Thêm sản phẩm mới</a></li>
                                <li><a class="dropdown-item" href="#">Nhập thêm số lượng sản phẩm</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php?act=listdonhang">Quản lý đơn hàng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- <div class="boxcenter">
        <div class="row mb headeradmin">
            <h1>ADMIN</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=listdm">Danh mục</a></li>
                <li><a href="index.php?act=listsp">Hàng hoá</a></li>
                <li><a href="index.php?act=listdonhang">Quản lý đơn hàng</a></li>
                
                <li><a href="#index.php?act=thongke">Thống kê</a></li>
            </ul>
        </div> -->