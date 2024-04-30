<body>
    <div class="container mt-5" id="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item text-success" ><a style="text-decoration: none; color:#48c563;" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tra cứu</li>
          </ol>
        </nav>
        <div class="row">
            <div class="col-8">
                <form class="d-flex justify-content-center" role="search" action="index.php?act=tracuu" method="post">
                    <input style="max-width: 350px;" class="form-control me-2" type="search" name="keyw" placeholder="Nhập số điện thoại hoặc email mua hàng" aria-label="Search">
                    <button class="btn btn-outline-success" name="oke" type="submit">Tra cứu</button>
                </form>
                <div class="table-responsive mt-3">
                    <table id="donhang" class="table table-striped">

                        <h2 class="text-center ">KẾT QUẢ TRA CỨU</h2>
                        <?php
                                    
                                    if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-danger mt-2 mb-2 ">'.$thongbao.'</h5>';
                                    if(isset($thongbaos)&&($thongbaos!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbaos.'</h5>';
                                ?>
                        <thead>
                            <tr class=" align-middle">
                                <th scope="col">STT</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Tổng hoá đơn</th>
                                
                                <th scope="col">Trạng thái</th>
                                <th scope="col">Xem chi tiết</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                                $tong=0;
                                $i=0;
                                if(isset($listdonhang)&&(is_array($listdonhang))){
                                    echo '<p class="text-center alert alert-success">Tìm kiếm thành công!</p>';
                                    foreach ($listdonhang as $dh) {
                                        extract($dh);
                                        if($trangthai==0){
                                            $tt='<p class="custom-bg-0">Đơn hàng mới</p>';
                                        }elseif($trangthai==1){
                                            $tt='<p class="custom-bg-1">Đang xử lý</p>';
                                        }elseif($trangthai==2){
                                            $tt='<p class="custom-bg-2">Đang giao hàng</p>';
                                        }elseif($trangthai==3){
                                            $tt='<p class="custom-bg-3">Đã giao hàng</p>';
                                        }else{
                                            $tt='<p class="custom-bg-4">Đã huỷ</p>';
                                        }
                                        
                                        $cthd='<a href="index.php?act=chitietdh&iddh='.$id.'"><button type="submit" class="btn btn-info">Xem chi tiết</button></a>';
                                        echo'<tr class=" align-middle">
                                                <td>'.$i+'1'.'</td>
                                                <td>'.$ten.'</td>
                                                <td>'.$sdt.'</td>
                                                <td>'.$ttien.'</td>
                                                
                                                <td ><p class="custom-border">'.$tt.'</p></td>
                                                <td>'.$cthd.'</td>
                                                
                                            </tr>';
                                        $i+=1;
                                    }
                                }elseif(isset($listdonhang)&&($listdonhang==0)){
                                    echo '<p class="text-center alert alert-danger">Không tìm thấy đơn hàng! Vui lòng kiểm tra lại thông tin!</p>';
                                }else{
                                    echo '<p class="text-center alert alert-info">Nếu tìm thấy đơn hàng của bạn sẽ hiển thị tại đây!</p>';
                                }
                            ?>
                            <!-- <tr>
                                <td>SP001</td>
                                <td>Product A</td>
                                <td>10</td>
                                <td>100,000 VNĐ</td>
                                <td>1,000,000 VNĐ</td>
                            </tr>
                            <tr>
                                <td>SP002</td>
                                <td>Product B</td>
                                <td>5</td>
                                <td>150,000 VNĐ</td>
                                <td>750,000 VNĐ</td>
                            </tr> -->
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
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

