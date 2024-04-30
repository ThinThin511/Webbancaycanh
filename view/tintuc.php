<body>
    <div class="container mt-5" id="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item text-success" ><a style="text-decoration: none; color:#48c563;" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
          </ol>
        </nav>
        <div class="row">
            <div class="col-8">
                <div class="new-item mt-5 mb-5 text-center">
                    <div class="name-content ">
                        <img src="./view/images/banner.png" alt="">
                        <h1 class="text-success mt-2">TIN TỨC</h1>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">
                    <div class="col">
                        <div class="card mx-4" style="width: 18rem;">
                            <img src="./view/images/sen-da-len-mau-350x245.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cách chăm sen đá vào mùa đông</h5>
                                <p class="card-text">Thời tiết miền bắc bắt đầu chuyển dần sang mùa đông. Thời tiết mà cây cối bắt đầu rụng lá không còn phát triển mạnh mẽ và rực rỡ….</p>
                                <a href="https://webcaycanh.com/cach-cham-sen-da-vao-mua-dong/" target="_blank" class="text-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mx-4" style="width: 18rem;">
                            <img src="./view/images/818294fbfc39f028f9dbf7367ae40caa-350x245.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cây Ngũ Gia Bì có hoa không?</h5>
                                <p class="card-text">Cây Ngũ Gia Bì hay cây Chân Chim Bảy Lá là loại cây cảnh để bàn được rất nhiều người ưa chuộng. Bởi tính thẩm mĩ và đa dụng…</p>
                                <a href="https://webcaycanh.com/cay-ngu-da-bi-co-hoa-khong/" target="_blank" class="text-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mx-4" style="width: 18rem;">
                            <img src="./view/images/cay-kim-tien-3-842-350x245.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tác dụng của cây kim tiền</h5>
                                <p class="card-text">Cây kim tiền vốn là một loại cây cảnh phổ biến trên thị trường. Vì xét về mặt phong thủy thì cây kim tiền mang ý nghĩa hút lộc,…</p>
                                <a href="https://webcaycanh.com/tac-dung-cua-cay-kim-tien/" target="_blank" class="text-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mx-4" style="width: 18rem;">
                            <img src="./view/images/hoa-cay-cuc-tan-an-do-350x245.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hoa cây cúc tần ấn độ</h5>
                                <p class="card-text">Cây cúc tần ấn độ ngày càng được nhiều người ưa chuộng để trồng che bóng mát cho ban công, che phủ những mảng tường…</p>
                                <a href="https://webcaycanh.com/hoa-cay-cuc-tan-an-do/" target="_blank" class="text-info">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
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
        

        
    </div>
</body>

