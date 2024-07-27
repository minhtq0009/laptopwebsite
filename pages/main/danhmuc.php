<div class="container">
	<div class="slider mb-5">
</div><?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<h3 class="tieude mb-3 mt-3">Danh Mục : <?php echo $row_title['tendanhmuc'] ?></h3>
<!-- <hr> -->
				<div class=" row">
					<?php
					while($row_pro = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-3 mb-3" style="">
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
							<img style=" width: 100%; border-bottom: 1px solid #ddd;" src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
							<p class="title_product mt-3" style="font-weight: 600;"><?php echo $row_pro['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').' đ' ?></p>
							<p style="text-align: center;"><del class="price-old" style="color: #999;"><?php echo number_format($row_pro['giakm'],0,',','.').' đ' ?> </del></p>
						</a>
					</div>
					<?php
					} 
					?>
					
				</div>

