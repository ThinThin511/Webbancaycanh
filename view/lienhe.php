
      <div class="container1" id="content">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb fs-5">
            <li class="breadcrumb-item text-success" ><a style="text-decoration: none; color:#48c563;" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
          </ol>
        </nav>
        <h1>Liên hệ với chúng tôi</h1>
        <p>Chúng tôi rất vui khi được hỗ trợ bạn.</p>
        <?php
                        if(isset($thongbao)&&($thongbao!="")) echo '<h5 class="alert alert-success mt-2 mb-2 ">'.$thongbao.'</h5>';
                        
                    ?>
        <div class="contact-box">
          <div class="contact-left">
            <h3>Gửi yêu cầu của bạn.</h3>
            
            <form action="index.php?act=lienhe" method="post">
              <div class="input-row">
                <div class="input-group">
                  <label>Họ và tên</label>
                  <input type="text" name="ten" placeholder="Nguyễn Văn A" required >
                </div>
                <div class="input-group">
                  <label>Số điện thoại</label>
                  <input type="text" name="sdt" placeholder="0123456789" required >
                </div>
              </div>
              <div class="input-row">
                <div class="input-group">
                  <label>Email</label>
                  <input type="email" name="email" placeholder="example@gmail.com" required >
                </div>
              </div>

              <label>Nội dung</label>
              <textarea rows="5" name="noidung" placeholder="Nội dung liên hệ" required></textarea>
              <!-- <input id="button" type="button" value="Gửi" onclick="send()" /> -->
              <button id="button" type="submit" name="send">Gửi</button>
            </form>
          </div>
          <div class="contact-right"></div>
        </div>
      </div>

<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    background: #bcf2c8;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    justify-content: center;
    align-items: center;
}
.container1{
    width: 60%;

    margin: 30px auto;
}
.contact-box{
    display: flex;
    border-radius: 10px;
    background-image: url('./view/images/img.jpg');
    background-repeat: no-repeat;
    /* background-attachment: fixed;  */
    background-size: 90% 100%;
    padding: 10px;
}
.contact-left{
    flex-basis: 60%;
    padding: 40px 60px;
}
.contact-right{
    flex-basis: 40%;
    padding: 40px;
}
h1{
    margin-bottom: 10px;
}
.container p{
    margin-bottom: 40px;
}
.input-row{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.input-row .input-group{
    flex-basis: 45%;
}
input{
    width: 100%;
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
    padding-bottom: 5px;
}
textarea{
    width: 100%;
    border: 1px solid #ccc;
    outline: none;
    padding: 10px;
    box-sizing: border-box;
}
label{
    margin-bottom: 6px ;
    display: block;
    color: #000000;
}
#button{
    background: #48c563;
    width: 100px;
    border: none;
    outline: none;
    color: #ffffff;
    height: 35px;
    border-radius: 35px;
    margin-top: 20px;
    box-shadow: 0px 5px 15px 0px rgba(62, 97, 72, 0.3);
}
.contact-left h3{
    color: #48c563;
    font-weight: 600;
    margin-bottom: 30px;
}
</style>
<!-- <script>
    function send() {
    var arr = document.getElementsByTagName('input');
    var name = arr[0].value;
    var sdt = arr[1].value;
    var email = arr[2].value;
    var nd = arr[3].value;
    
    alert("Xin cảm ơn! Nội dung của bạn đã được gửi.");
 }
</script> -->
