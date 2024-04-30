<div class="container">
    <div class="table-responsive ">
        <table id="donhang" class="table table-striped">
            <h2 class="text-center ">DANH SÁCH LOẠI HÀNG</h2>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-danger mt-2 mb-2 ">'.$thongbao.'</h5>';
                        if(isset($thongbaocn)&&($thongbaocn!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbaocn.'</h5>';
                    ?>
            <thead>
                <tr class=" align-middle">
                    <th scope="col">STT</th>
                    <th scope="col">MÃ LOẠI</th>
                    <th scope="col">TÊN LOẠI</th>
                    <th class="text-center" scope="col">SỐ LƯỢNG SẢN PHẨM</th>
                    <th scope="col">THAO TÁC</th>
                    
                    
                </tr>
            </thead>
            <tbody> 
                <?php
                    $tong=0;
                    $i=0;
                    
                    foreach ($listdanhmuc as $danhmuc){
                        
                        extract($danhmuc);
                        $slsp=count_spdm($id);
                        $xoadm='<a href="index.php?act=xoadm&id='.$id.'"><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>';
                        
                        $suadm='<a href="index.php?act=suadm&id='.$id.'"><button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>';
                        echo'<tr class=" align-middle">
                                <td>'.$i+'1'.'</td>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td class="text-center">'.$slsp.'</td>
                                <td>'.$suadm.' '.$xoadm.'</td>
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
    </div >
    <div class="text-end control-btn mt-3">
        <a href="index.php?act=adddm"><button class="btn btn-info ">Thêm danh mục mới</button></a>
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
                "lengthMenu": "Số danh mục hiển thị: _MENU_",
                "search": "Tìm kiếm:",
                "info":"Hiển thị _START_ - _END_ trên _TOTAL_ danh mục",
                "emptyTable":"Không có danh mục nào được tìm thấy",
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
<!-- ygdfydfyhdhdg -->
