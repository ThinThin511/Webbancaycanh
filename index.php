<?php
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/cart.php";
    include "view/header.php";
    include "phpmailer/sendmail.php";
    
    include "global.php";
    
    if(!isset($_SESSION['mycart'])){
        $_SESSION['mycart']=[];
    }

    $spnew=loadall_sanpham_home();
    $sptop=loadall_sanpham_banchay();
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
                    $soluongnhap=$_POST['soluong'];
                    $soluongkho=$_POST['slkho'];
                    $fg=0;

                    //Kiểm tra số lượng
                    if($soluongnhap>$soluongkho){
                        $thongbao="Xin lỗi! Số lượng cây trong kho không đủ.";
                        $onesanpham=loadone_sanpham($id);
                        extract($onesanpham);
                        $splienquan=loadall_sanpham_lq($id,$iddm);
                        include "view/sanphamct.php";
                        break;
                    }
                    //kiểm tra trùng
                    $i=0;
                    foreach ($_SESSION['mycart'] as $item) {
                        if($item[3]===$ten){
                            $slnew=$soluongnhap+$item[4];
                            $_SESSION['mycart'][$i][4]=$slnew;
                            $fg=1;
                            $thongbao="Đã cập nhật số lượng $ten vào giỏ hàng!";
                            break;
                        }
                        $i++;
                    }
                    if($fg==0){
                        $spadd=[$id,$hinh,$gia,$ten,$soluongnhap];

                        array_push($_SESSION['mycart'],$spadd);
                        $thongbao="Đã thêm $ten vào giỏ hàng!";
                    }


                    
                    
                }
                include "view/cart/viewcart.php";
                break;
            case 'editcart':
                if(isset($_GET['idcart'])){
                    $soluong=$_POST['soluong'];
                    $ten=$_SESSION['mycart'][$_GET['idcart']][3];
                    $_SESSION['mycart'][$_GET['idcart']][4]=$soluong;
                    if($_SESSION['mycart'][$_GET['idcart']][4]==0){
                        $thongbaos="Đã xoá $ten khỏi giỏ hàng! ";
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                        
                    }else{
                    $thongbao="Đã cập nhật số lượng $ten vào giỏ hàng!";}
                }
                
                include "view/cart/viewcart.php";
                break;
            case 'viewcart':
                $thongbaos = urldecode($_GET['thongbaoxoa']);
                
                include "view/cart/viewcart.php";
                break;
            case 'bill':
                foreach ($_SESSION['mycart'] as $cart) {
                    $sanpham=loadone_sanpham($cart[0]);
                    extract($sanpham);
                    if($cart[4]>$soluong){
                        $thongbaos="Số lượng sản phẩm {$cart[3]} không còn đủ trong kho!";
                        include "view/cart/viewcart.php";
                        break;
                    }
                }
                
                include "view/cart/bill.php";
                break;
            case 'addbill':
                if(isset($_POST['addbill'])){
                    $ten=$_POST['ten'];
                    $diachi=$_POST['diachi'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $ghichu=$_POST['ghichu'];
                    $pttt=$_POST['pttt'];
                    $ttien=$_POST['ttien'];
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $ngaydathang=date('h:i:s a d/m/Y');
                    $iddonhang=insert_donhang($ten,$email,$sdt,$diachi,$ghichu,$pttt,$ttien,$ngaydathang);
                    
                    foreach ($_SESSION['mycart'] as $cart) {
                        insert_ctdonhang($cart[0],$iddonhang,$cart[1],$cart[3],$cart[2],$cart[4]);
                    }
                    $_SESSION['mycart']=[];
                }
                $email_content = "<p>Chào bạn {$ten}!</p>
                    <p>Bạn vừa đặt hàng thành công các sản phẩm tại CỬA HÀNG CÂY CẢNH của chúng tôi.</p>
                    <p>Đơn hàng sẽ được giao đến {$diachi} trong thời gian sớm nhất.</p> 
                    <p>Tổng giá trị đơn hàng của bạn là : {$ttien} VNĐ.</p>
                    <p>Xin chân thành cảm ơn vì đã mua sắm tại cửa hàng chúng tôi.</p>
                    <p>Trân trọng!</p>";
                send_mail($email,$ten,"Đặt hàng thành công!",$email_content);
                $cthoadon=loadall_ctdonhang($iddonhang);
                $hoadon=loadone_donhang($iddonhang);
                include "view/cart/confirm.php";
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
                if(isset($_POST['send'])){
                    $ten=$_POST['ten'];
                    $sdt=$_POST['sdt'];
                    $email=$_POST['email'];
                    $noidung=$_POST['noidung'];
                    $email_content = "<p>Bạn có liên hệ/ý kiến từ {$ten}!</p>
                    <p>Khách hàng có số điện thoại: {$sdt}.</p> 
                    <p>Email khách hàng: {$email} </p>
                    <p>Với nội dung như sau:</p>
                    <p>{$noidung}</p>";
                    send_mail("thienb2111865@student.ctu.edu.vn","PLANTSHOPE","Ý kiến phản hồi!",$email_content);
                    $thongbao="Nội dung liên hệ đã được gửi thành công. Chúng tôi sẽ cố gắng phản hồi trong thời gian sớm nhất.";
                }
                include "view/lienhe.php";
                break;
            case 'tintuc':
                
                
                include "view/tintuc.php";
                break;
            case 'vp':
            
            
                include "view/chamsoc/vanphong.php";
                break;
            case 'xr':
            
            
                include "view/chamsoc/xuongrong.php";
                break;
            default:
            include "view/home.php";
        }
    }else{
        include "view/home.php";
    }
    
    include "view/footer.php";
?>