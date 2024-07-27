
<div class="logo">
	<img src="./images/logo-1.png" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="./images/vi.jpg" alt="" class="img-slider">
</div>
<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green">Mật khẩu đã được thay đổi.</p>';
		}else{
			echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng,vui lòng nhập lại.</p>';
		}
	} 
?>
<div class="dangky-form1">
<form action="" autocomplete="off" method="POST" class="dangky">
		<h3 class="header-dangky" style="margin-left:170px; margin-bottom:20px">Đổi mật khẩu</h3>
<input type="text" name="email" class="input" placeholder="Nhập Email *">
<input type="text" name="password_cu" class="input" placeholder="Nhập mật khẩu cũ *">
<input type="text" name="password_moi" class="input" placeholder="Nhập mật khẩu mới *">
<input type="submit" name="doimatkhau" value="Đổi mật khẩu" class="btn" style="margin-left:210px">

	</form>
	</div>