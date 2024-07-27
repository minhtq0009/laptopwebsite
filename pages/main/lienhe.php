<?php 
  if(isset($_POST['submit'])){
      $hoten=$_POST['hoten'];
      $email=$_POST['email'];
      $sodt =$_POST['sodt'];
      $noidung =$_POST['noidung'];
      $sql_lienhe=mysqli_query($mysqli,"INSERT INTO tbl_lienhe(ten_khachhang,email,sodt,noidung) VALUES('".$hoten."', `'".$email."','".$sodt."','".$noidung."')");
      if($sql_lienhe){
        echo "<script>alert('Cảm ơn bạn đã gửi góp ý cho chúng tôi.Chúng tôi sẽ gửi phản hồi cho bạn trong thời gian sớm nhất');</script>";
        header("Location:index.php?quanly=lienhe");
      }
    }
?>
  <style>
  .content-section {
    margin-left: 200px;
    margin-right: 200px; 
    margin-bottom: 100px;
    padding: 10px;
    align-items: center;
    height: 100%; /* Đảm bảo chiều cao của phần tử là 100% của chiều cao của viewport */
    font-weight: bold;
}
  </style>
    <div class="content-section">
              <h2 class="section-heading">LIÊN HỆ &amp; BÁO LỖI</h2>
              <p class="section-sub-heading">
                  Thông tin cho bọn mình !
              </p>
              <div class="row contact-content">
                  <div class="col col-half contact-info icon-lh">
                      <p><i class="ti-location-pin"></i>SABER GAMING</p>
                      <p><i class="ti-mobile"></i>0394424093</p>
                      <p><i class="ti-email"></i>minhtq0009@gmail.com</p>
                  </div>
                  <div class="col col-half contact-form">
                      <form action="">
                          <div class="row">
                              <div class="col col-half">
                                  <input type="text" name="hoten" placeholder="Họ tên" required="" id="hoten" class="form-control">
                              </div>
                              <div  class="col col-half">
                                  <input type="email" name="email" placeholder="Email" required="" id="email" class="form-control">
                              </div>
                              <div class="col col-half">
                                  <input type="sodt" name="sodt" placeholder="Số điện thoại" required="" id="sodt" class="form-control">
                              </div>
                              <div class="clear"></div>
                          </div>
                          <div class="row">
                              <p></p>
                              <div class="col col-full mt-8">
                              <textarea rows="5"  name="noidung" style="resize: none" class="input" placeholder="Nội dung"></textarea>
                              </div>
                              <input class="btn mt-16" type="submit" value="SEND">
                          </div>
                      </form>
                  </div>
              </div>
          </div>

        