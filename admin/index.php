<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/cart.php";
    include "header.php";
    
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch($act){

            /*controller danhmuc*/ 
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }
                
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    
                    delete_danhmuc($_GET['id']);
                    $thongbao="Đã xoá" ;
                }
                
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                
                include "danhmuc/update.php";
                break;
            
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbaocn="Cập nhật thành công";
                }
                
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            

            /*controller sanpham*/ 

            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tensp=$_POST['tensp'];
                    $iddm=$_POST['iddm'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $filename=$_FILES['anhsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                    if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    insert_sanpham($tensp,$giasp,$filename,$mota,$iddm);
                    $thongbao="Thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw="";
                   $iddm=$_POST['iddm'];

                }else{
                    $kyw=""; 
                    $iddm=0;
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                    $thongbao="Đã xoá" ;
                }
                
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $iddm=$_POST['iddm'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $slm=$_POST['slsp'];
                    $sanpham=loadone_sanpham($id);
                    extract($sanpham);
                    $slct=$slm + $soluong;
                    $filename=$_FILES['anhsp']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["anhsp"]["name"]);
                    if (move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["anhsp"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($id,$tensp,$giasp,$filename,$mota,$iddm,$slct);
                    $thongbaocn="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'listdonhang':
                $listdh=loadall_donhang();
                include "donhang/listdonhang.php";
                break;
            case 'chitietdh':
                if(isset($_GET['iddh'])){
                    $dh=$_GET['iddh'];
                }
                $cthoadon=loadall_ctdonhang($dh);
                $hoadon=loadone_donhang($dh);
                include "donhang/ctdonhang.php";
                break;
            case 'deletedh':
                if(isset($_GET['iddh'])&&($_GET['iddh']>0)){
                    delete_donhang($_GET['iddh']);
                    $thongbao="Đã xoá đơn hàng" ;
                }
                
                $listdh=loadall_donhang();
                include "donhang/listdonhang.php";
                break;
            case 'capnhatdh':
                if(isset($_GET['iddh'])&&($_GET['iddh']>0)){
                    $iddh=$_GET['iddh'];
                    $ttm=$_POST['trangthai'];
                    $donhang=loadone_donhang($iddh);
                    extract($donhang);
                }
                if(($trangthai==1)&&($ttm==2)){
                    capnhat_donhangtru($iddh,$ttm);
                    $thongbaos="Trạng thái thay đổi thành công";
                    $listdh=loadall_donhang();
                    include "donhang/listdonhang.php";
                    break;
                }elseif(($trangthai==2)&&($ttm==4)){
                    capnhat_donhangcong($iddh,$ttm);
                    $thongbaos="Trạng thái thay đổi thành công";
                    $listdh=loadall_donhang();
                    include "donhang/listdonhang.php";
                    break;
                }elseif($ttm-$trangthai==1){
                    capnhat_donhang($iddh,$ttm);
                    $thongbaos="Trạng thái thay đổi thành công";
                    $listdh=loadall_donhang();
                    include "donhang/listdonhang.php";
                    break;
                }elseif($ttm==4){
                    capnhat_donhang($iddh,$ttm);
                    $thongbaos="Trạng thái thay đổi thành công";
                    $listdh=loadall_donhang();
                    include "donhang/listdonhang.php";
                    break;
                }else{
                    $cthoadon=loadall_ctdonhang($iddh);
                    $hoadon=loadone_donhang($iddh);
                    $thongbaos="Trạng thái thay đổi không hợp lệ";
                    include "donhang/ctdonhang.php";
                    break;
                }
                
                
                break;    
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
    
    
    include "footer.php";

?>