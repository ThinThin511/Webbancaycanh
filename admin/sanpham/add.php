<div class="row">
            <div class="row formtitle mb10">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label for="">Danh mục: </label>
                        </br>
                        <select name="iddm">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            
                            ?>
                            
                        </select>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên sản phẩm: </label>
                        </br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        <label for="">Giá sản phẩm: </label>
                        </br>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        <label for="">Ảnh: </label>
                        </br>
                        <input type="file" name="anhsp">
                    </div>
                    <div class="row mb10">
                        <label for="">Mô tả sản phẩm: </label>
                        </br>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div> 
                    <?php
                        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>