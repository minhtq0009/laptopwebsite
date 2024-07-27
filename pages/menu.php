<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
</head>
<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<?php



      if(isset($_SESSION['cart'])){
  	$i = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$i++;}}
		else{
			$i=0;
		}
?>

<div class="menu">
			<ul class="list_menu">	
				<li><a href="index.php"><img src="images/logo.png" style="width:100px"; class="header-img"></a></li>
				<?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
				<li><a  href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
				
				</li>
				<?php
				} 
				?>
				<li><a href="index.php?quanly=store"> Cửa hàng</a></li>
				<li><a href="index.php?quanly=gioithieu">Giới thiệu</a></li>
				
				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a 	href="index.php?quanly=lienhe">Liên hệ và Báo lỗi</a></li>
				<li><a  href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a  href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
				<?php
				
				}else{ 
				?>
				<?php
				} 
				?>
			</ul>
				<a href="index.php?quanly=giohang"><i class="bi bi-cart2 right-icon">
					<span class='badge badge-warning' id='lblCartCount'> <?php echo $i;?> </span></i></a>
				<a href="index.php?quanly=dangky"><i class="bi bi-person-circle right-icon"></i></a>
	
		</div>
		<div class="timkiem-form"><p style="margin-top: 80px; ">
				<form action="index.php?quanly=timkiem" method="POST" class="">
					<input style="padding: 10px;  width: 60%;    margin-left: 80px; margin-top: 20px; " type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" class="input-timkiem">
					<input style="padding: 10px;border-radius: 7px;" type="submit" name="timkiem" value="Search" class="btn-timkiem">
					
				</form>
			</p>
				
	</div>
		