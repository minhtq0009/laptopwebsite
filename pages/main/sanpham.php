

<div class="container">
	<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet row mb-3">
	<div class="hinhanh_sanpham col-4 " style=" ">
		<img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>" style="">
	</div>
	<div class="col-6">
		<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="product-meta">
			<h3 class="tieude mb-5" style="     margin: 0;"> <?php echo $row_chitiet['tensanpham'] ?></h3>
			<div class="product-price" id="price-preview">
																
								<del class="price-old" style="color: #999; font-size: 18px;color: #878c8f;margin-right: 10px;"><?php echo number_format($row_chitiet['giakm'],0,',','.').'đ' ?></del>
								
								<span class="pro-price" style="font-size: 25px;font-weight: 600;color: red;"><?php echo number_format($row_chitiet['giasp'],0,',','.').'đ' ?></span>
								
								<span class="pro-percent" style="display: inline-block;padding: 3px 14px;margin-left: 10px;background: #f94c43;text-transform: uppercase;font-weight: 600;font-size: 13px;color: white;vertical-align: text-bottom;">Sale <?php echo floor(($row_chitiet['giakm']-$row_chitiet['giasp'])/$row_chitiet['giakm']*100) ?>%</span>
															</div>
			
			<div class="row mt-3 mb-3">
				<div class="col"><p class="hv-1" style="font-weight: 600; font-size: 18px;"><input style="font-weight: 600; font-size: 18px;" class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p></div>
			</div>									
			<div class="row">
				<div class="col"></div>
				<div class="col"></div>
			</div>
			<div class="product-policy-detail row">
				<div class="item-policy-detail col "  style="background: rgba(236, 235, 232, 0.65);    padding: 15px ;text-align: center;font-weight: 600;">
					Freeship đơn hàng giá trị trên 1 triệu đồng
				</div>
				<div class="col-1"></div>
				<div class="item-policy-detail col " style="background: rgba(236, 235, 232, 0.65);    padding: 15px ;text-align: center;font-weight: 600;">
					Đổi hàng chưa qua sử dụng trong vòng 30 ngày
				</div>
			</div>
		</div>
		
	</form>
	
</div>
	<div class="mt-3 mb-3">
		<hr>
	</div>
	<div class="box-product-related mb-3 ">
				<h2 class="box-heading wow fadeInUp animated text-center mt-3"><p>Thông tin sản phẩm</p></h2>
				<div class="description-detail"><p><?php echo $row_chitiet['tomtat'] ?></p></div>
	</div>
</div>	
</div>
	<div class="mt-3 mb-3">
		<hr>
	</div>
	<div class="box-product-related mb-3 ">
				<h2 class="box-heading wow fadeInUp animated text-center mt-3"><p>Chi tiết sản phẩm</p></h2>
				<div class="description-detail"><p><?php echo $row_chitiet['noidung'] ?></p></div>
	</div>
</div>
<?php
} 
?>
<div class="container mt-3">
	<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*3)-3;
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,5";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3 class="tieude mb-3 mt-5">Gợi ý cho bạn </h3>
<hr>
				<ul class="product_list mt-3">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="hv">
					<li class="mb-3">
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="title_product mt-3" style="font-weight: 600;"><?php echo $row['tensanpham'] ?></p>
							<p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.').' đ' ?></p>
							<p style="text-align: center; margin-left: 17px;"><del class="price-old" style="color: #999; text-align: center;"><?php echo number_format($row['giakm'],0,',','.').' đ' ?></del></p>
						</a>
					</li>
				</div>
					<?php
					} 
					?>
				</ul>
				<div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    padding: 0;
					    /* padding-top: 100px; */
					    list-style: none;
					}
					ul.list_trang li {
					    float: left;
					    padding: 5px 13px;
					    margin: 5px;
					    background: #7e1117;
					    display: block;
						border-radius: 10%;
					}
					ul.list_trang li a {
					    color: #fff;
					    text-align: center;
					    text-decoration: none;
					 
					}
				</style>
				<!-- <?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/3);
				?>
				<p style="margin-top: 300px; font-weight:600">Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: #111; "';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?> -->
					
				</ul>
			
        </div>
</div>



