

<div class="container">
            <div class="text-center">
                <h1>CẬP NHẬT HÀNG HOÁ</h1>
            </div>
            <div class="row fromcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <select class="form-select" name="iddm">
                            <option value="0" selected>Tất cả</option>
                            <?php
                                if(is_array($sanpham)){
                                    extract($sanpham);
                                }
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if($iddm==$id) $s="selected"; else $s="" ;
                                    echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';

                                }
                                
                                
                            
                            ?>
                        </select>
                    </div>
                    <?php
                        if(is_array($sanpham)){
                            extract($sanpham);
                        } 
                        $hinhpath="../upload/".$img;
                                          
                    ?>
                    <div class="row mb10">
                        <label class="form-label" for="">Tên sản phẩm: </label>
                        </br>
                        <input class="form-control" type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Giá sản phẩm: </label>
                        </br>
                        <input class="form-control" type="number" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Ảnh: </label>
                        </br>
                        <input class="form-control" type="file" name="anhsp">
                        <img src="<?=$hinhpath?>" alt="" style="min-height: 80px; max-height: 80px; width:100%; max-width: 120px;min-width: 120px;">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Mô tả sản phẩm: </label>
                        </br>
                        <textarea class="form-control" name="mota" ><?=$mota?></textarea>
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Nhập số lượng muốn thêm: </label>
                        </br>
                        <input class="form-control" type="number" name="slsp" value="">
                    </div>
                    <div class="d-flex">
                        <div class="text-start mt-4">
                            <input type="hidden" name="id" value="<?=$id?>">
                            <input type="submit" class="btn btn-info me-3" name="capnhat" value="Cập nhật">
                            <input type="reset" class="btn btn-warning" value="Nhập lại">
                        </div>
                        
                        
                    </div> 
                    
                    
                </form>
                <div class="control-btn text-end">
                            <a href="index.php?act=listsp"><input type="button" class="btn btn-success" value="Danh sách"></a>
                </div>
            </div>
        </div>
    </div>