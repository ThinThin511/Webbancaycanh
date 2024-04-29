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
?>