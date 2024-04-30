<div class="container">
            <div class="text-center">

                <h1>DANH SÁCH SẢN PHẨM</h1>
            </div>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-danger mt-2 mb-2 ">'.$thongbao.'</h5>';
                        if(isset($thongbaocn)&&($thongbaocn!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbaocn.'</h5>';
                        $ht=dem_het_hang();
                    ?>
            <div class="d-flex">

            
                <form class="d-flex mt-4 mb-3" action="index.php?act=listsp" method="post">
                                <!-- <input type="text" name="kyw"> -->
                                <select name="iddm" class="form-select" style="width:fit-content;">
                                    <option value="0" selected>Tất cả</option>
                                    <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="'.$id.'">'.$name.'</option>';
                                        }
                                    
                                    ?>
                                </select>
                                <input  type="submit" class="btn btn-info ms-3" name="listok" value="Lọc">
                </form>
                
                <button class="btn btn-warning ms-auto p-2" >
                    <p><i class="fa-solid fa-triangle-exclamation fs-1"></i></p>
                    <p style="font-size: 20px;">Sản phẩm hết hàng: <?=$ht?></p>
                </button>
            </div>
            <div class="row fromcontent">
                
                    <div class="table-responsive ">
                        
                        <table id="sanpham" class="table table-striped text-center">
                            <thead class="mt-3">
                                <tr class=" align-middle">
                                    <th>STT</th>
                                    <th>MÃ SẢN PHẨM</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>ẢNH</th>
                                    <th>GIÁ SẢN PHẨM</th>
                                    <th>SỐ LƯỢNG</th>
                                    
                                    <th>THAO TÁC</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i=1;
                                foreach ($listsanpham as $sanpham){
                                    extract($sanpham);
                                    
                                    $xoasp='<a href="index.php?act=xoasp&id='.$id.'"><button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>';
                                    
                                    $suasp='<a href="index.php?act=suasp&id='.$id.'"><button type="submit" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>';
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80' >";
                                    }else{
                                        $hinh="no photo";
                                    }
                                    echo '<tr class=" align-middle">
                                            <td>'.$i.'</td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td><img src="'.$hinhpath.'" alt="" style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;"></td>
                                            <td>'.$price.'</td>
                                            <td>'.$soluong.' </td>
                                            
                                            <td>'.$suasp.' '.$xoasp.'</td>
                                        </tr>';
                                    $i++;
                                }
                            ?>
                            <!-- <tr>
                                <td><input type="checkbox"></td>
                                <td>0001</td>
                                <td>aaaa</td>
                                <td><input type="button" value="Sửa"> <input type="button" value="Xoá"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>0001</td>
                                <td>aaaa</td>
                                <td><input type="button" value="Sửa"> <input type="button" value="Xoá"></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>0001</td>
                                <td>aaaa</td>
                                <td><input type="button" value="Sửa"> <input type="button" value="Xoá"></td>
                            </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="control-btn text-end mb-5">
                        
                        <a href="index.php?act=addsp"><input type="button " class="btn btn-success" value="Nhập thêm"></a>
                    </div> 
                
            
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
        var table=$('#sanpham').DataTable({
            "language": {
                "lengthMenu": "Số sản phẩm hiển thị: _MENU_",
                "search": "Tìm kiếm:",
                "info":"Hiển thị _START_ - _END_ trên _TOTAL_ sản phẩm",
                "emptyTable":"Không có sản phẩm nào được tìm thấy",
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