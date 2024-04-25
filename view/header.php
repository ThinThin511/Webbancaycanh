<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/CSS/style.css">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">Logo</a>
    
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="index.php?act=adddm">Tin tức</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Liên hệ</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cách chăm sóc
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cây văn phòng</a></li>
                  <li><a class="dropdown-item" href="#">Cây thuỷ sinh</a></li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link mx-lg-2 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Danh mục sản phẩm
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cây cảnh để bàn<noscript></noscript></a></li>
                  <li><a class="dropdown-item" href="#">Cây cảnh phong thuỷ</a></li>
                  <li><a class="dropdown-item" href="#">Cây cảnh trong nhà</a></li>
                </ul>
              </li>
            </ul>
        
          </div>
        </div>
        <a href="#" class="login-button">Đăng nhập</a>
        <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <section class="hero-section">

    </section>






  





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>