<?php
    if(is_array($dm)){
        extract($dm);
    }

?>

<div class="container">
            <div class="row formtitle mb10">
                <h1>Cập nhật loại hàng hoá</h1>
            </div>
            
            <div class="row fromcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        <label class="form-label" for="">Mã loại: </label>
                        </br>
                        <input class="form-control" type="text" name="maloai" value="<?php if(isset($id)&&($id>0)) echo $id ;?>"disabled>
                    </div>
                    <div class="row mb10">
                        <label class="form-label" for="">Tên loại: </label>
                        </br>
                        <input class="form-control" type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>">
                    </div> 
                    <div class="d-flex">
                        <div class="text-start mt-4">
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                            <input type="submit" class="btn btn-info me-3" name="capnhat" value="Cập nhật">
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