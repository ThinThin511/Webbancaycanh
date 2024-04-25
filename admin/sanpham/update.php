<?php
    if(is_array($dm)){
        extract($dm);
    }

?>

<div class="row">
            <div class="row formtitle mb10">
                <h1>Cập nhật loại hàng hoá</h1>
            </div>
            <div class="row fromcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        <label for="">Mã sản phẩm: </label>
                        </br>
                        <input type="text" name="masp" disabled>
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
                        <input type="submit" name="capnhat" value="Cập nhật">
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