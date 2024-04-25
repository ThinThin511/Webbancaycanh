<div class="row">
            <div class="row formtitle mb10">
                <h1>Danh sách sản phẩm</h1>
            </div>
            <form action="index.php?act=listsp" method="post">
                            <input type="text" name="kyw">
                            <select name="iddm">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach ($listdanhmuc as $danhmuc) {
                                        extract($danhmuc);
                                        echo '<option value="'.$id.'">'.$name.'</option>';
                                    }
                                
                                ?>
                            </select>
                            <input type="submit" name="listok" value="Lọc">
            </form>
            <div class="row fromcontent">
                
                    <div class="row mb10 dsloai">
                        
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>ẢNH</th>
                                <th>GIÁ SẢN PHẨM</th>
                                <th>LƯỢT XEM</th>
                                <th>MÔ TẢ</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listsanpham as $sanpham){
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh="<img src='".$hinhpath."' height='80' >";
                                    }else{
                                        $hinh="no photo";
                                    }
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$luotxem.'</td>
                                            <td>'.$mota.'</td>
                                            <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"> <input type="button" value="Xoá"></a></td>
                                        </tr>';
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
                            
                        </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="reset" value="Bỏ chọn tất cả">
                        <input type="button" value="Xoá các mục đã chọn">
                        <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                    </div> 
                
            
            </div>
        </div>