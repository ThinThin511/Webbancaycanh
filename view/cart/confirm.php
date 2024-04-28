
<div class="container " id="content">
    <div class="row">
        <h1 class="text-center text-success">ĐẶT HÀNG THÀNH CÔNG!</h1>
        <i class="fa-regular fa-circle-check text-center text-success fs-1 mt-3"></i>
        <p class="text-center fs-5 mt-3"><strong>Cảm ơn quý khách đã đặt hàng. Trong vòng 30 phút PLANTSHOPE sẽ liên hệ để xác nhận thông tin giao hàng.</strong></p>

        
            <h2 class="mb-1">Chi tiết đơn hàng </h2>
            <table class="table mt-5 ">
                <tbody>
                    <?php
                        if(isset($hoadon)){
                            extract($hoadon);
                        }
                    ?>
                        <td>
                            Mã đơn hàng
                        </td>
                        <td class="text-end">
                            <strong>#DH-<?=$id?></strong>
                        </td>
                    </tr>
                    <tr class=" align-middle">
                        <td>
                            Tên khách hàng
                        </td>
                        <td class="text-end">
                            <strong><?=$ten?></strong>
                        </td>
                    </tr>
                    <tr class=" align-middle">
                        <td>
                            Email khách hàng
                        </td>
                        <td class="text-end">
                            <strong><?=$email?></strong>
                        </td>
                    </tr>
                    <tr class=" align-middle">
                        <td>
                            Số điện thoại
                        </td>
                        <td class="text-end">
                            <strong><?=$sdt?></strong>
                        </td>
                    </tr>
                    <tr class=" align-middle">
                        <td>
                            Hình thức thanh toán
                        </td>
                        <td class="text-end">
                            <strong><?=$pttt?></strong>
                        </td>
                    </tr>
                    <tr class=" align-middle">
                        <td>
                            Địa chỉ giao hàng
                        </td>
                        <td class="text-end">
                            <strong><?=$diachi?></strong>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="table-responsive ">
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
                            
                            foreach ($cthoadon as $ct) {
                                extract($ct);
                                $ttien = (int)$price * (int)$soluong;
                                $tong+=$ttien;
                                
                                echo'<tr class="text-center align-middle">
                                        <td>'.$i+'1'.'</td>
                                        <td><img src="'.$img.'"  style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;"></td>
                                        <td>'.$name.'</td>
                                        <td>'.$soluong.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$ttien.'</td>
                                        
                                    </tr>';
                                $i+=1;
                            }
                            echo'<tr>
                                    <td colspan="5" class="text-end"><strong>Tổng giá trị hoá đơn:</strong></td>
                                    
                                    <td class="text-center"><strong>'.$tong.' VNĐ</strong></td>
                                </tr>';
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
        
    
    <div class="control-btn mt-2 text-end">     
        <a href="index.php"><button class="btn btn-success btn-lg"><i class="fa-solid fa-cart-shopping " ></i> Tiếp tục mua sắm</button></a>
    </div>
</div>
