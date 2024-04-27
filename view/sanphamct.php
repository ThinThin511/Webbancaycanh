<body>
    <div class="container mt-5" id="content">
        <div class="row">
            <div class="col-8 chitietsp">
                <div class="content-top mb-5 mt-5">
                    <?php
                        extract($onesanpham);
                        $hinh=$img_path.$img;
                    ?>
                    <h1 class="text-success"><?=$name?></h1>
                </div>
                <div class="row content-body mb-5">
                    <div class="col-6 content-img">
                        <img src="<?=$hinh?>" alt="..." style="min-height: 320px; max-height: 320px;width: 100%;">
                    </div>
                    <div class="col-6 ">
                        <div class="d-flex">
                            <p class="fs-1">Giá bán: </p>
                            <p class="text-danger fs-1">&nbsp <?=$price?><sup>đ</sup></p>
                        </div>
                        
                        <form action="index.php?act=addtocart" method="post" class="row align-items-center">
                            <!-- Cột chứa input số lượng -->
                            <div class="">
                                <div class="row align-items-center">
                                    <!-- Label số lượng -->
                                    <div class="col-md-4">
                                        <label for="soluong" class="form-label">Số lượng:</label>
                                    </div>
                                    <!-- Input số lượng -->
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" id="quantity" name="soluong" placeholder="Nhập số lượng" required>
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <input type="hidden" name="hinh" value="<?=$hinh?>">
                                        <input type="hidden" name="gia" value="<?=$price?>">
                                        <input type="hidden" name="ten" value="<?=$name?>">

                                    </div>
                                </div>
                            </div>
                            <!-- Cột chứa nút "Thêm vào giỏ hàng" -->
                            <div class=" button d-flex justify-content-end mt-5 ">
                                <button type="submit" name="addtocart" class="btn btn-success btn-block btn-sm  g-start-3 fs-5"> <i class="fa-solid fa-cart-shopping "></i> THÊM VÀO GIỎ HÀNG</button>
                            </div>
                        </form>



                        
                    </div>
                </div>
                <h4>MÔ TẢ</h4>
                <p class="text-wrap mb-5"><?=$mota?></p>
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
                       
                    </ul>
                </div>
            </div>
        
        </div>
        <div class="new-item mt-5 mb-5 text-center">
            <div class="name-content ">
                <img src="./view/images/banner.png" alt="">
                <h1 class="text-success mt-2">SẢN PHẨM LIÊN QUAN</h1>
            </div>
        </div>
        <div class="row row-col-12 row-col-sm-6 row-col-md-4 row-col-lg-3 g-4 mb-5">
            <?php
                    foreach ($splienquan as $lq ) {
                        extract($lq);
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