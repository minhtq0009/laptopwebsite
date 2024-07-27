<?php

	$ten_khachhang = $_SESSION['ten_khachhang'];
	$code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_lienhe(ten_khachhang,email,sodt,noidung) VALUES('".$hoten."', `'".$email."','".$sodt."','".$noidung."')";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['lienhe'] as $key => $value){
			$hoten = $value['ten_khachhang'];
			$email = $value['email'];
            $sodt = $value['sodt'];
            $noidung = $value['noidung'];
			$insert_order_details = "INSERT INTO tbl_lienhe(ten_khachhang,email,sodt,noidung) VALUE('".$hoten."', `'".$email."','".$sodt."','".$noidung."')";
			mysqli_query($mysqli,$insert_order_details);
		}
	}
	unset($_SESSION['lienhe']);


?>
<hr>
<br>
<div class="container mt-5 mb-5">
	<h3 class="tieude mb-3 mt-5">Cảm ơn bạn đã thông báo, chúng tôi sẽ gửi câu trả lời cho bạn trong thời gian sớm nhất</h3>
  <br>
  <br>
  <div>
      <img src="images/ship.jpg" class="d-block w-50 mx-auto" alt="1">
    </div>

</div>


