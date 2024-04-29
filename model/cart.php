<?php
    function insert_donhang($ten,$email,$sdt,$diachi,$ghichu,$pttt,$ttien,$ngaydathang){
        $sql="insert into donhang(ten,email,sdt,diachi,ghichu,pttt,ttien,ngaydathang) values('$ten','$email','$sdt','$diachi','$ghichu','$pttt','$ttien','$ngaydathang')";
        return pdo_execute_last($sql);
    }
    function insert_ctdonhang($idsp,$iddonhang,$img,$name,$price,$soluong){
        $sql="insert into chitietdonhang(idsp,iddonhang,img,name,price,soluong) values('$idsp','$iddonhang','$img','$name','$price','$soluong')";
        pdo_execute($sql);
    }
    function loadall_ctdonhang($id){
        $sql="select * from chitietdonhang where iddonhang=".$id;
        $listchitiet=pdo_query($sql);
        return $listchitiet;
    }
    function loadone_donhang($id){
        $sql="select * from donhang where id=".$id;
        $donhang=pdo_query_one($sql);
        return $donhang;
    }
    function loadall_donhang(){
        $sql="select * from donhang order by id desc";
        $listdonhang=pdo_query($sql);
        return $listdonhang;
    }
    function delete_ctdh($id){
        $sql="delete from chitietdonhang where iddonhang=".$id;
        pdo_execute($sql);
    }
    function delete_donhang($id){
        delete_ctdh($id);
        $sql="delete from donhang where id=".$id;
        pdo_execute($sql);
    }
    function capnhat_donhang($id,$trangthai){
        $sql="update donhang set trangthai='".$trangthai."' where id=".$id;
        pdo_execute($sql);
    }
    function tru_soluong_sanpham($id_sanpham, $soluong_tru) {
        $sanpham=loadone_sanpham($id_sanpham);
        extract($sanpham);

        $soluongmoi=$soluong-$soluong_tru;
        $sql="update sanpham set soluong='".$soluongmoi."' where id=".$id_sanpham;
        pdo_execute($sql);
    }
    function cong_soluong_sanpham($id_sanpham, $soluong_cong) {
        $sanpham=loadone_sanpham($id_sanpham);
        extract($sanpham);

        $soluongmoi=$soluong+$soluong_cong;
        $sql="update sanpham set soluong='".$soluongmoi."' where id=".$id_sanpham;
        pdo_execute($sql);
    }
    function capnhat_donhangtru($iddh,$trangthai){
        $chitietdh=loadall_ctdonhang($iddh);
        foreach ($chitietdh as $ct) {
            extract($ct);
            tru_soluong_sanpham($idsp,$soluong);
        }
        $sql="update donhang set trangthai='".$trangthai."' where id=".$iddh;
        pdo_execute($sql);
    }
    function capnhat_donhangcong($iddh,$trangthai){
        $chitietdh=loadall_ctdonhang($iddh);
        foreach ($chitietdh as $ct) {
            extract($ct);
            cong_soluong_sanpham($idsp,$soluong);
        }
        $sql="update donhang set trangthai='".$trangthai."' where id=".$iddh;
        pdo_execute($sql);
    }
?>