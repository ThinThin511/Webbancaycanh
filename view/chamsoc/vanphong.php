<body>
    <div class="container mt-5" id="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item text-success" ><a style="text-decoration: none; color:#48c563;" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cách chăm sóc cây cảnh văn phòng</li>
          </ol>
        </nav>
        <div class="row">
            <div class="col-8">
                <div class="new-item mt-5 mb-5 text-center">
                    <div class="name-content ">
                        <img src="./view/images/banner.png" alt="">
                        <h1 class="text-success mt-2">Cách chăm sóc cây cảnh văn phòng</h1>
                    </div>
                </div>
                <p>Một trong những điều được nhiều người quan tâm nhất sau khi đã sở hữu cây cảnh văn phòng, cây phong thủy hay cây để bàn làm việc đó chính là cách chăm sóc. Vậy chăm sóc cây cảnh văn phòng như thế nào? Để cho cây phát triển tốt, lá luôn xanh và tươi, những sai lầm thường hay mắc phải khiến cây chết là gì? Nếu bạn đang quan tâm những điều đó thì hãy theo dõi bài viết dưới đây.</p>
                <h2>Cách chăm sóc cây cảnh văn phòng</h2>
                <p>Cây cảnh văn phòng là loại cây cảnh rất dễ chăm sóc và có ý nghĩa phong thủy như mang đến tài lộc, may mắn, sự thịnh vượng, sức khỏe, sự bảo vệ…Một số cây thường được lựa chọn như: Cây Kim Tiền, cây Kim Ngân, Lưỡi Hổ, Thiết Mộc Lan…Đều là những cây có khả năng sống ở môi trường thiếu sáng và ưa râm mát.</p>
                <h3>Tưới nước</h3>
                <p>Thường nếu để cây ở ngoài trời có nắng và gió thì ngày nào bạn tưới nước cũng được, mỗi ngày tưới qua cho cây để thứ nhất là rửa sạch bụi trên lá giúp cây dễ quang hợp hơn, thông thoáng hơn, và thường tưới và buổi sáng sớm hoặc chiều tối, tránh tưới buổi trưa nắng nóng dễ làm cây sốc nhiệt mà chết. Nhưng thường cây được để ở môi trường văn phòng, có máy lạnh, hoặc trong nhà ít nắng, thiếu gió nên nước có tốc độ bay hơi thấp, đất giữ ẩm lâu. Vì vậy bạn chỉ nên tưới nước 1 tuần/ 2 lần mỗi lần đủ ẩm 1/2 đất là được. Chỉ nên tưới ở gốc còn lá nếu bẩn thì nên dùng khăn ướt lau.</p>
                <h3>Đất</h3>
                <p>Loại đất trồng sẵn ở cây thường đã là loại đất tốt có nhiều mùn đảm bảo cho cây phát triển tốt trong vòng 3 – 6 tháng. Nếu trồng lâu thấy hiện tượng vàng lá do thiếu chất bạn có thể bổ sung đất, mùn, thay đất cho cây hoặc các đơn giản là mua đạm, phân bón tan chậm rắc nên gốc cây là được.</p>
                <h3>Ánh sáng</h3>
                <p>Sống được trong môi trường thiếu sáng nhưng màu sắc của lá sẽ bớt đậm và xanh tươi, vì thế cuối tuần bạn nên để cây ra ngoài hiên để cây có thể tiếp xúc trực tiếp với nắng gió ngoài trời, còn không tốt nhất hay để cây gần cửa sổ nơi có ánh sáng chiếu qua.</p>
                <h2>Những sai lầm thường mắc khi chăm cây cảnh văn phòng</h2>
                <p>– Một trong nhưng sai lầm nhiều người mắc nhất đó là ngày nào cũng tưới nước. Nếu bạn sợ tưới quá tay thì bạn có thể kê chậu cách đất, không bịt lỗ thoát nước dưới đáy chậu để đảm bảo nước có thể chảy ra ngoài nếu tưới nhiều.</p>
                <p>– Quên không tưới nước, khi cây có hiện tượng mềm lá, lá rủ xuống là lúc cây đang thiếu nước, bạn chỉ cần tưới nước hoặc ngâm cây vào trong bồn nước khoảng 1 phút thì cây sẽ lại tươi, tình trạng này hay xảy ra đối với cây để bàn vì lượng đất ít, đất không giữ được nước</p>
                <p>– Thay đổi đột ngột nhiệt độ, ví dụ bạn đang để cây ở môi trường máy lạnh có nhiệt độ tầm 20 độ rồi giữa trưa nhiệt bên ngoài trên 30 độ hoặc gần 40 độ, bạn mang cây ra ngoài để phơi nắng như vậy cây rất dễ bị sốc nhiệt mà chết.</p>
            </div>   
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        DANH MỤC SẢN PHẨM
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php
                            foreach ($danhmuc as $dm ) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id ;
                                echo '<li class="list-group-item"><a href="'.$linkdm.'"><i class="fa-brands fa-pagelines"></i> '.$name.'</a></li>';
                            }
                        ?>
                        <!-- <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây trong nhà</a></li>
                        <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây để bàn</a></li>
                        <li class="list-group-item"><a href=""><i class="fa-brands fa-pagelines"></i> Cây phong thuỷ</a></li> -->
                    </ul>
                </div>
            </div>
        </div>
        

        
    </div>
</body>

