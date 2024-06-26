<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLANTSHOPE</title>
    <link rel="stylesheet" href="./view/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<header>
  <div class="container">
  <nav class="navbar navbar-expand-lg bg-body-tertiary" id="header">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="./view/images/Logo.PNG" width="100" height="100" style="border-radius: 99%; border: 1px solid green"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?act=tintuc">Tin tức</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cách chăm sóc
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.php?act=vp">Cây văn phòng</a></li>
              <li><a class="dropdown-item" href="index.php?act=xr">Sen đá </a></li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?act=lienhe">Liên hệ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?act=tracuu">Tra cứu đơn hàng</a>
          </li>
        </ul>
        <?php
        if(isset($_SESSION['mycart'])&&($_SESSION['mycart']!=[])){
          $tong=0;
          $count = count($_SESSION['mycart']);
          
          foreach ($_SESSION['mycart'] as $cart) {
              $ttien = (int)$cart[2] * (int)$cart[4];
              $tong+=$ttien;
              
          }
          echo'<div class="giohang-content">
          <a href="index.php?act=viewcart" class="me-5 giohang"> <button id="custom-btn" class="btn btn-success btn-lg">'.$tong.'<sup>đ</sup> <i class="fa-solid fa-cart-shopping ms-2" ></i> </button></a>
          <span id="nut">'.$count.'</span>
        </div>';
        }else{
          echo'<div class="giohang-content">
          <a href="index.php?act=viewcart" class="me-5 giohang"> <button id="custom-btn" class="btn btn-success btn-lg">0<sup>đ</sup> <i class="fa-solid fa-cart-shopping ms-2" ></i> </button></a>
          
        </div>';
        }
          
        ?>
        
        
        <form class="d-flex" role="search" action="index.php?act=sanpham" method="post">
          <input class="form-control me-2" type="search" name="kyw" placeholder="Tìm kiếm..." aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Tìm</button>
        </form>
      </div>
    </div>
  </nav>
  </div>
</header>

