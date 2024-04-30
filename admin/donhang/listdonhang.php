<div class="container">
    <div class="row text-center d-flex justify-content-center">
        <div class="col-md-2 mb-4 " >
            <div class="card h-100">
                <div class="card-body" style="background-color:#9effbd ;">
                    <div class="row">
                        <div class="col-8">
                            <p ><strong>Đơn mới</strong></p>
                            <h3 class="mb-0"><?=demtt(0)?></h3>
                            
                        </div>
                        <div class="col-4 text-center d-flex align-items-center">
                            <i class="fa-solid fa-cart-plus fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4 " >
            <div class="card h-100">
                <div class="card-body" style="background-color:rgb(152, 255, 255) ;">
                    <div class="row">
                        <div class="col-8">
                            <p ><strong>Đang xử lí</strong></p>
                            <h3 class="mb-0"><?=demtt(1)?></h3>
                            
                        </div>
                        <div class="col-4 text-center d-flex align-items-center">
                            <i class="fa-solid fa-gears fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4 " >
            <div class="card h-100">
                <div class="card-body" style="background-color:rgb(236, 255, 173) ;">
                    <div class="row">
                        <div class="col-8">
                            <p ><strong>Đang giao </strong></p>
                            <h3 class="mb-0"><?=demtt(2)?></h3>
                            
                        </div>
                        <div class="col-4 text-center d-flex align-items-center">
                            <i class="fa-solid fa-truck-fast fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4 " >
            <div class="card h-100">
                <div class="card-body" style="background-color:rgb(252, 172, 164) ;">
                    <div class="row">
                        <div class="col-8">
                            <p ><strong>Đã giao hàng</strong></p>
                            <h3 class="mb-0"><?=demtt(3)?></h3>
                            
                        </div>
                        <div class="col-4 text-center d-flex align-items-center">
                            <i class="fa-regular fa-circle-check fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 mb-4 " >
            <div class="card h-100">
                <div class="card-body" style="background-color:rgb(126, 126, 126);">
                    <div class="row">
                        <div class="col-8">
                            <p ><strong>Đã huỷ</strong></p>
                            <h3 class="mb-0"><?=demtt(4)?></h3>
                            
                        </div>
                        <div class="col-4 text-center d-flex align-items-center">
                            <i class="fa-solid fa-ban fs-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive ">
        <table id="donhang" class="table table-striped">

            <h2 class="text-center ">DANH SÁCH ĐƠN HÀNG</h2>
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
                    <th scope="col">Thao tác</th>
                    
                </tr>
            </thead>
            <tbody> 
                <?php
                    $tong=0;
                    $i=0;
                    
                    foreach ($listdh as $dh) {
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
                        $xoadh='<a href="index.php?act=deletedh&iddh='.$id.'"><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>';
                        $cthd='<a href="index.php?act=chitietdh&iddh='.$id.'"><button type="submit" class="btn btn-info">Xem chi tiết</button></a>';
                        echo'<tr class=" align-middle">
                                <td>'.$i+'1'.'</td>
                                <td>'.$ten.'</td>
                                <td>'.$sdt.'</td>
                                <td>'.$ttien.'</td>
                                
                                <td ><p class="custom-border">'.$tt.'</p></td>
                                <td>'.$cthd.'</td>
                                <td>'.$xoadh.'</td>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        var table=$('#donhang').DataTable({
            "language": {
                "lengthMenu": "Số đơn hàng hiển thị: _MENU_",
                "search": "Tìm kiếm",
                "info":"Hiển thị _START_ - _END_ trên _TOTAL_ đơn hàng",
                "emptyTable":"Không có đơn hàng nào được tìm thấy",
                "paginate": {
                    "previous": "Trước",
                    "next": "Tiếp"
                }
            },
            "lengthMenu":[
                [5,10,20,50],
                ["5","10","15","20"]
            ],
        });
        // new DataTable('#user');

        // $('#delete-user').on('click', function(e){
        //     e.preventDefault();
        //     const form = $(this).closest('form');
        //     const nameTd = $(this).closest('tr').find('td:first');
        //     if (nameTd.length > 0) {
        //         $('.modal-body').html(
        //         `Bạn có muốn xoá "${nameTd.text()}"?`
        //         );
        //     }
        //     $('#delete-confirm')
        //     .modal({
        //         backdrop: 'static',
        //         keyboard: false
        //     })
        //     .one('click', '#delete', function() {
        //         form.trigger('submit');
        //     });

        // });
    });
</script>