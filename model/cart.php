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
    function demtt($status){
        $sql = "SELECT COUNT(*) AS total FROM donhang WHERE trangthai = :status";
        $result = pdo_query_1($sql, array(':status' => $status));
        $total = $result['total'];
        return $total;
    }
    function calculate_total_revenue_this_month() {
        
            // Lấy ngày đầu tiên và cuối cùng của tháng hiện tại
            $first_day_of_month = date('Y-m-01');
            $last_day_of_month = date('Y-m-t');
    
            // Xây dựng câu truy vấn SQL để tính tổng tiền trong tháng
            $sql = "SELECT SUM(ttien) AS total_revenue FROM donhang 
                    WHERE STR_TO_DATE(ngaydathang, '%h:%i:%s %p %d/%m/%Y') 
                    BETWEEN STR_TO_DATE(:first_day_of_month, '%Y-%m-%d') 
                    AND STR_TO_DATE(:last_day_of_month, '%Y-%m-%d')
                    AND trangthai = 3";
            
            // Thực thi truy vấn SQL
            $result = pdo_query_1($sql, array(':first_day_of_month' => $first_day_of_month, ':last_day_of_month' => $last_day_of_month));
    
            // Lấy tổng tiền từ kết quả truy vấn
            $total_revenue = $result['total_revenue'];
    
            return $total_revenue;
       
    }
    function calculate_total_revenue_for_recent_months() {
        // Lấy ngày đầu tiên và cuối cùng của tháng hiện tại
        $current_month = date('n');
        $first_day_of_current_month = date('Y-m-01');
        $last_day_of_current_month = date('Y-m-t');
    
        // Tạo mảng chứa thông tin về doanh số của 4 tháng gần nhất
        $data = array();
    
        // Lặp qua 4 tháng gần nhất theo thứ tự ngược lại
        for ($i = 3; $i >= 0; $i--) {
            // Lấy tháng hiện tại trừ đi số tháng đã lặp
            $month = $current_month - $i;
            if ($month <= 0) {
                $month += 12; // Nếu tháng âm, quay lại tháng cuối năm trước đó
            }
            
            // Lấy ngày đầu tiên và cuối cùng của tháng
            $first_day_of_month = date('Y-m-01', strtotime(date('Y-' . $month . '-01')));
            $last_day_of_month = date('Y-m-t', strtotime(date('Y-' . $month . '-01')));
    
            // Xây dựng câu truy vấn SQL để tính tổng tiền trong tháng
            $sql = "SELECT SUM(ttien) AS total_revenue FROM donhang 
                    WHERE STR_TO_DATE(ngaydathang, '%h:%i:%s %p %d/%m/%Y') 
                    BETWEEN STR_TO_DATE(:first_day_of_month, '%Y-%m-%d') 
                    AND STR_TO_DATE(:last_day_of_month, '%Y-%m-%d')
                    AND trangthai = 3";
            
            // Thực thi truy vấn SQL
            $result = pdo_query_1($sql, array(':first_day_of_month' => $first_day_of_month, ':last_day_of_month' => $last_day_of_month));
    
            // Lấy tổng tiền từ kết quả truy vấn
            $total_revenue = $result['total_revenue'];
    
            // Thêm thông tin về doanh số của tháng vào mảng data
            $data[] = array('month' => $month, 'Sales' => $total_revenue);
        }
    
        return $data;
    }
    
    
    
    
    
?>