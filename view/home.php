<body>
    <div class="container mt-5" id="content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active fs-5" aria-current="page"><i class="fa-solid fa-house"></i> Trang chủ</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./view/images/Logo.PNG" class="d-block w-100 " alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="./view/images/1.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="./view/images/2.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        DANH MỤC SẢN PHẨM
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                            foreach ($danhmuc as $dm ) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id ;
                                echo '<li class="list-group-item"><a href="'.$linkdm.'"><i class="fa-brands fa-pagelines"></i> '.$name.'</a></li>';
                            }
                        ?>
                        <!-- <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây trong nhà</a></li>
                        <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây để bàn</a></li>
                        <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây phong thuỷ</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="new-item mt-5 mb-5 text-center">
            <div class="name-content ">
                <img src="./view/images/banner.png" alt="">
                <h1 class="text-success mt-2">SẢN PHẨM MỚI</h1>
            </div>
        </div>
        <a href="'.$linksp.'">
        <div class="row row-col-12 row-col-sm-6 row-col-md-4 row-col-lg-3 g-4 mb-5">
            <?php
                    foreach ($spnew as $sp ) {
                        extract($sp);
                        $hinh=$img_path.$img ;
                        $linksp="index.php?act=sanphamct&id=".$id ;
                        echo '<div class="col text-center">
                        <div class="card" style="width: 18rem;">
                            <a href="'.$linksp.'">
                            <img src="'.$hinh.'" class="card-img-top" alt="..." style="min-height: 300px; max-height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title ">'.$name.'</h5>
                                <p class="text-danger h5">'.$price.'<sup>đ</sup></p>
                                
                            </div>
                            </a>
                        </div>
                    </div>';
                    }
            ?>                                
        </div>

        <div class="new-item mt-5 mb-5 text-center">
            <div class="name-content ">
                <img src="./view/images/banner.png" alt="">
                <h1 class="text-success mt-2">SẢN PHẨM BÁN CHẠY NHẤT</h1>
            </div>
        </div>
        <div class="row row-col-12 row-col-sm-6 row-col-md-4 row-col-lg-3 g-4 mb-5">
            <?php
                    foreach ($sptop as $sp ) {
                        extract($sp);
                        $hinh=$img_path.$img ;
                        $linksp="index.php?act=sanphamct&id=".$id ;
                        echo '<div class="col text-center">
                        <div class="card" style="width: 18rem;">
                            <a href="'.$linksp.'">
                            <img src="'.$hinh.'" class="card-img-top" alt="..." style="min-height: 300px; max-height: 300px;">
                            <div class="card-body">
                                <h5 class="card-title ">'.$name.'</h5>
                                <p class="text-danger h5">'.$price.'<sup>đ</sup></p>
                                
                            </div>
                            </a>
                        </div>
                    </div>';
                    }
            ?>                                
        </div>
    </div>
</body>

