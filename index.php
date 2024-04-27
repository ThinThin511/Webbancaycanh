<?php
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "view/header.php";
    include "global.php";

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