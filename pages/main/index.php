

<div class="container mt-5 mb-5" class="slideshow-container">
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class="d-block w-100 h-100" alt="1">
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100 h-100" alt="2">
    </div>
    <div class="carousel-item">
      <img src="images/banner3.jpg" class="d-block w-100 h-100" alt="3">
    </div>
    <div class="carousel-item">
      <img src="images/banner4.jpg" class="d-block w-100 h-100" alt="4">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script>
    $('#carouselExampleFade').carousel({
        interval: 3000 
    });
</script>
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
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,10";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3 class="tieude mb-3 mt-5">Sản phẩm mới cập nhật</h3>
<!-- <hr> -->
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
							<p style="text-align: center; margin-left: 17px;"><del class="price-old" style="color: #999; text-align: center;margin-right: 20px;"><?php echo number_format($row['giakm'],0,',','.').' đ' ?></del></p>
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
				<div class="click-2 mb-5">
                    <a href="index.php?quanly=danhmucsanpham&id=4">XEM THÊM</a>
                </div>
			
			
        </div>
</div>
