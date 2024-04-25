<div class="row">
            <div class="row formtitle mb10">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="row fromcontent">
                
                    <div class="row mb10 dsloai">
                        <table>
                            <tr>
                                <th></th>
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach ($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    $suadm="index.php?act=suadm&id=".$id;
                                    $xoadm="index.php?act=xoadm&id=".$id;
                                    echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td><a href="'.$suadm.'"><input type="button" value="Sửa"></a> <a href="'.$xoadm.'"> <input type="button" value="Xoá"></a></td>
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
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div> 
                
            
            </div>
        </div>