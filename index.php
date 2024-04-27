<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";
    
    if(!isset($_SESSION['mycart'])){
        $_SESSION['mycart']=[];
    }

    $spnew=loadall_sanpham_home();
    $sptop=loadall_sanpham_top();
    $danhmuc=loadall_danhmuc();
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case 'tintuc':
                include "view/tintuc.php";
                break;
            case 'sanphamct':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $onesanpham=loadone_sanpham($id);
                    extract($onesanpham);
                    $splienquan=loadall_sanpham_lq($id,$iddm);
                    include "view/sanphamct.php";
                }else{
                    include "view/home.php";
                }
                
                break;
            case 'sanpham':
                if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                    $kyw=$_POST['kyw'];
                    
                }else{
                    $kyw="";
                }
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                    
                }else{
                    $iddm=0;
                }
                $sanphamdm=loadall_sanpham($kyw,$iddm);
                $tendm=load_ten_danhmuc($iddm);
                include "view/sanpham.php";
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $hinh=$_POST['hinh'];
                    $gia=$_POST['gia'];
                    $ten=$_POST['ten'];
                    $soluong=$_POST['soluong'];
                    $spadd=[$id,$hinh,$gia,$ten,$soluong];

                    array_push($_SESSION['mycart'],$spadd);
                    $thongbao="Đã thêm $ten vào giỏ hàng!";
                }
                include "view/cart/viewcart.php";
                break;
            case 'viewcart':
                $thongbao = urldecode($_GET['thongbaoxoa']);
                
                include "view/cart/viewcart.php";
                break;
            case 'deletecart':
                if(isset($_GET['idcart'])){
                    $ten=array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                    array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                }else{
                    $_SESSION['mycart']=[];
                    $ten="";
                }

                $thongbaoxoa = "Đã xoá " . $ten[0][3] . " khỏi giỏ hàng!!!";;
                $encoded_data = urlencode($thongbaoxoa);
                // include "view/cart/viewcart.php";
                header('Location: index.php?act=viewcart&thongbaoxoa='.$encoded_data);
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
            include "view/home.php";
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
?>