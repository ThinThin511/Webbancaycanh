
<div class="container " id="content">
    <div class="row">
        <div class="col-9">

        
            <h2 class="mb-4">Giỏ hàng <i class="fa-solid fa-cart-shopping"></i></h2>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="text-success mt-2 mb-2 ">'.$thongbao.'</h5>';
                    ?>
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
                            <th scope="col">Thao tác</th>
                            
                        </tr>
                    </thead>
                    <tbody> <strong></strong>
                        <?php
                            $tong=0;
                            $i=0;
                            if(empty($_SESSION['mycart'])){
                                echo'<tr class="text-center align-middle">
                                <td colspan="7">
                                    Chưa có sản phẩm nào trong giỏ hàng. Tiếp tục mua sắm nhé!
                                </td>
                            </tr>';
                            }
                            foreach ($_SESSION['mycart'] as $cart) {
                                $ttien = (int)$cart[2] * (int)$cart[4];
                                $tong+=$ttien;
                                $xoasp='<a href="index.php?act=deletecart&idcart='.$i.'"><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>';
                                echo'<tr class="text-center align-middle">
                                        <td>'.$i+'1'.'</td>
                                        <td><img src="'.$cart[1].'"  style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;"></td>
                                        <td>'.$cart[3].'</td>
                                        <td>'.$cart[4].'</td>
                                        <td>'.$cart[2].'</td>
                                        <td>'.$ttien.'</td>
                                        <td>'.$xoasp.'</td>
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
                </td>
            </tr>
            <tr class="text-center align-middle">
                <td colspan="2">
                    <a href=""><button class="btn btn-warning">TIẾN HÀNH THANH TOÁN</button></a>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
    <div class="control-btn mt-2">
        <table>
            <tbody>
                <tr>
                    <td>
                        <a href="index.php?act=deletecart"><button class="btn btn-danger btn-lg me-5">Xoá toàn bộ giỏ hàng</button></a>
                    </td>
                    <td class="text-end">
                        <a href="index.php"><button class="btn btn-info btn-lg"><i class="fa-solid fa-arrow-rotate-left"></i> Tiếp tục mua sắm</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
        
        
    </div>
</div>
