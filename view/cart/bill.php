
<div class="container " id="content">
    <div class="row">
        <h1 class="mb-4">THÔNG TIN GIAO HÀNG </h1>
        <div class="col-9">
            <form class="fw-bold mb-5" method="POST" action="index.php?act=addbill">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Người đặt hàng:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="ten" aria-describedby="emailHelp" required>
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ giao hàng:</label>
                    <input type="text" class="form-control" name="diachi" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại:</label>
                    <input type="text" class="form-control" name="sdt" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" id="exampleInputPassword1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ghi chú:</label>
                    <input type="text" class="form-control" name="ghichu" id="exampleInputPassword1" >
                </div>
                <div class="d-flex mb-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pttt" value="Thanh toán khi nhận hàng" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Thanh toán khi nhận hàng
                        </label>
                    </div>
                    <div class="form-check ms-5">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Thanh toán trực tuyến
                        </label>
                    </div>
                </div>
            
        
            <h2 class="mb-4">Chi tiết đơn hàng <i class="fa-solid fa-cart-shopping"></i></h2>
            
            <div class="table-responsive scrollable-content">
                <table class="table table-striped">
                    
                    <thead>
                        <tr class="text-center align-middle">
                            <th scope="col">STT</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Thành tiền</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody> <strong></strong>
                        <?php
                            $tong=0;
                            $i=0;
                            if(empty($_SESSION['mycart'])){
                                echo'<tr class="text-center align-middle">
                                <td colspan="6">
                                    Chưa có sản phẩm nào trong giỏ hàng. Tiếp tục mua sắm nhé!
                                </td>
                            </tr>';
                            }
                            foreach ($_SESSION['mycart'] as $cart) {
                                $ttien = (int)$cart[2] * (int)$cart[4];
                                $tong+=$ttien;
                                
                                echo'<tr class="text-center align-middle">
                                        <td>'.$i+'1'.'</td>
                                        <td><img src="'.$cart[1].'"  style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;"></td>
                                        <td>'.$cart[3].'</td>
                                        <td>'.$cart[4].'</td>
                                        <td>'.$cart[2].'</td>
                                        <td>'.$ttien.'</td>
                                        
                                    </tr>';
                                $i+=1;
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
        <div class="col-3">
            <h2 class="text-center">Tổng đơn hàng</h2>
            <table class="table mt-5">
        <tbody>
            
            <tr class=" align-middle">
                <td>
                    Tạm tính:
                </td>
                <td class="text-end">
                    <strong><?=$tong?><sup>đ</sup></strong>
                </td>
            </tr>
            <tr class=" align-middle">
                <td>
                    Thành tiền:
                </td>
                <td class="text-end">
                    <strong><?=$tong?><sup>đ</sup></strong>
                    <input type="hidden" value="<?=$tong?>" name="ttien">
                </td>
            </tr>
            <tr class="text-center align-middle">
                <td colspan="2">
                    <button type="submit" name="addbill" class="btn btn-warning"><strong>XÁC NHẬN THANH TOÁN</strong></button>
                </td>
            </tr>
        </tbody>

        </form>
    </table>
        </div>
    </div>
    <div class="control-btn mt-2">
        <table>
            <tbody>
                <tr>
                    <td>
                        <a href="index.php?act=viewcart"><button class="btn btn-info btn-lg me-5"><i class="fa-solid fa-arrow-rotate-left"></i>Trở lại giỏ hàng</button></a>
                    </td>
                    <td class="text-end">
                        <a href="index.php"><button class="btn btn-success btn-lg"><i class="fa-solid fa-cart-shopping " ></i> Tiếp tục mua sắm</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
    </div>
</div>
