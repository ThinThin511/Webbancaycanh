<div class="container">
            <div class="text-center">
                <h1>THÊM MỚI SẢN PHẨM</h1>
            </div>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbao.'</h5>';
                    ?>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label class="form-label" for="">Danh mục: </label>
                        </br>
                        <select class="form-select" style="width:fit-content;" name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Tên sản phẩm: </label>
                        </br>
                        <input type="text" class="form-control"  name="tensp">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Giá sản phẩm: </label>
                        </br>
                        <input class="form-control" type="text"  name="giasp">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Ảnh: </label>
                        </br>
                        <input  type="file" class="form-control"  name="anhsp">
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Mô tả sản phẩm: </label>
                        </br>
                        <textarea class="form-control" name="mota" ></textarea>
                    </div>
                    <div class="d-flex">
                        <div class="text-start mt-4">
                            <input type="submit" class="btn btn-info me-3" name="themmoi" value="Thêm mới">
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