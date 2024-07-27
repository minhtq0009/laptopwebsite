
<hr>
<?php
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE email='".$email."'AND dienthoai='".$dienthoai."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_khachhang'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại.</p>';
			
		}
	} 
?>
<div class="dangky-form2">
<form action="" autocomplete="off" method="POST" class="dangky">
<h3 header-dangky style="margin-left:170px; margin-bottom:25px">Đăng nhập khách hàng</h3>
<input type="text" size="50" name="email" placeholder="Email..." class="input">
<input type="password" size="50" name="password" placeholder="Mật khẩu..." class="input">

				
<input type="submit" name="dangnhap" value="Đăng nhập" class="btn" style="margin-left:240px;margin-bottom:100px">
</form>
</div>