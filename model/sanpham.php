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

function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}

function update_sanpham($id,$tensp,$giasp,$filename,$mota,$iddm){
    if($filename!="")
        $sql="update sanpham set name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."', img='".$filename."' where id=".$id;
    else 
        $sql="update sanpham set name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."' where id=".$id;
    pdo_execute($sql);
}
?>