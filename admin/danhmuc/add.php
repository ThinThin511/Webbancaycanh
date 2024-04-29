<div class="container">
            <div class="text-center">
                <h1>Thêm mới loại hàng hoá</h1>
            </div>
            <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbao.'</h5>';
                    ?>
            <div class="row fromcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        <label class="form-label" for="">Mã loại: </label>
                        </br>
                        <input class="form-control" type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Tên loại: </label>
                        </br>
                        <input class="form-control" type="text" name="tenloai">
                    </div> 
                    <div class="d-flex">
                        <div class="text-start mt-4">
                            <input type="submit" class="btn btn-info me-3" name="themmoi" value="Thêm mới">
                            <input type="reset" class="btn btn-warning" value="Nhập lại">
                        </div>
                        
                        
                    </div> 
                    
                </form>
                <div class="control-btn text-end">
                            <a href="index.php?act=listdm"><input type="button" class="btn btn-success" value="Danh sách"></a>
                </div>
            </div>
        </div>
    </div>