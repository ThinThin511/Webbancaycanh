<?php
function insert_sanpham($tensp,$giasp,$anhsp,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$anhsp','$mota','$iddm')";
    pdo_execute($sql);
}


function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}

// function loadall_sanpham(){
//     $sql="select * from danhmuc order by id desc";
//     $listsanpham=pdo_query($sql);
//     return $listsanpham;
// }
function loadall_sanpham($kyw,$iddm){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,8";
    
    
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_banchay(){
    $sql = "SELECT s.*, SUM(ctd.soluong) AS tong_soluong_ban 
            FROM sanpham s
            LEFT JOIN chitietdonhang ctd ON s.id = ctd.idsp
            GROUP BY ctd.idsp
            ORDER BY tong_soluong_ban DESC
            LIMIT 0, 8";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_lq($id, $iddm){
    $sql = "SELECT * FROM sanpham WHERE iddm = ? AND id <> ? LIMIT 4";
    
    $listsanpham = pdo_query($sql, $iddm, $id);
    return $listsanpham;
}


function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_sanpham($id,$tensp,$giasp,$filename,$mota,$iddm,$slct){
    if($filename!="")
        $sql="update sanpham set name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."', soluong='".$slct."' ,img='".$filename."' where id=".$id;
    else 
        $sql="update sanpham set name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."', soluong='".$slct."' where id=".$id;
    pdo_execute($sql);
}
?>