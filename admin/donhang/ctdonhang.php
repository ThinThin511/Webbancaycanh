
<div class="container ">
    <div class="row">
    <?php
        if(isset($hoadon)){
            extract($hoadon);
        }
    ?>
    <h1 class="mb-1 text-center">CHI TIẾT ĐƠN HÀNG </h1>
    <?php
                        
                        
                        if(isset($thongbaos)&&($thongbaos!="")) echo '<h5 class="alert alert-danger mt-2 mb-2 ">'.$thongbaos.'</h5>';
                    ?>
            <form action="index.php?act=capnhatdh&iddh=<?=$id?>" method="POST">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trangthai" id="flexRadioDefault1" value="0" <?php if($trangthai==0) echo"checked"; ?>>
                    <label class="form-check-label" for="trangthai">
                        Đơn hàng mới
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trangthai" id="flexRadioDefault1" value="1" <?php if($trangthai==1) echo"checked"; ?>>
                    <label class="form-check-label" for="trangthai">
                        Đang xử lý
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trangthai" id="flexRadioDefault1" value="2" <?php if($trangthai==2) echo"checked"; ?>>
                    <label class="form-check-label" for="trangthai">
                        Đang giao hàng
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trangthai" id="flexRadioDefault1" value="3" <?php if($trangthai==3) echo"checked"; ?>>
                    <label class="form-check-label" for="trangthai">
                        Đã giao hàng
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="trangthai" id="flexRadioDefault1" value="4" <?php if($trangthai==4) echo"checked"; ?>>
                    <label class="form-check-label" for="trangthai">
                        Đã huỷ
                    </label>
                    <input name="lydohuy" class="form-control" type="text" placeholder="Lý do huỷ đơn...">
                </div>
                <button type="submit" class="btn btn-warning">Cập nhật trạng thái</button>
            </form>
            
            <table class="table mt-5 ">
                <tbody>
                    
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
                            Ngày đặt hàng
                        </td>
                        <td class="text-end">
                            <strong><?=$ngaydathang?></strong>
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
                                        <td><img src="../'.$img.'"  style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;"></td>
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
        
    
    
</div>
