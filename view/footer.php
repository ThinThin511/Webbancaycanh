<footer>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="./view/images/Logo.PNG" alt="..." width="200" height="200" id="img-ft">
                <p class="mt-3 fs-5">Chào bạn mình là PLANTSHOPE! Mình chuyên cung cấp các loại cây cảnh với mong muốn đem thiên nhiên đến từng không gian sống cho căn phòng của bạn.</p>
            </div>
            <div class="col-3 " >
                <div class="text-success title ">
                    DANH MỤC SẢN PHẨM
                </div>
                <?php
                            foreach ($danhmuc as $dm ) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id ;
                                echo '<a href="'.$linkdm.'"><i class="fa-brands fa-pagelines"></i> '.$name.'</a>';
                            }
                        ?>
                
            </div>
            <div class="col-6 text-center" >
                <div class="text-success title mb-5">
                    THEO DÕI CHÚNG TÔI QUA: 
                </div>
                <a href=""><i class="fa-brands fa-facebook" style="color: #0300c7;"></i> </a>
                <a href=""><i class="fa-brands fa-youtube " style="color: #db0000;"></i></a>
                <a href=""><i class="fa-brands fa-twitter" style="color: #42adff;"></i></a>
            </div>
        </div>
    </div>
</footer>
