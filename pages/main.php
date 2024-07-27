	<div id="main">

			<div class="maincontent mb-5">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='giohang'){
					include("main/giohang.php");
				}elseif($tam=='store'){
					include("main/store.php");
				}elseif($tam=='gioithieu'){
					include("main/gioithieu.php");
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='sanpham'){
					include("main/sanpham.php");	
				}elseif($tam=='dangky'){
					include("main/dangky.php");
				}elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='thanhtoanvnpay'){
					include("main/xulythanhtoanvnpay.php");
				}elseif($tam=='thanhtoanmomo'){
					include("main/xulythanhtoanmomo.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='camon'){
					include("main/camon.php");
				}elseif($tam=='camonmomo'){
					include("main/camonmomo.php");
				}elseif($tam=='camonvnpay'){
					include("main/camonvnpay.php");
				}elseif($tam=='camonlienhe'){
					include("main/camonlienhe.php");
				}elseif($tam=='thanhtoanmomoatm'){
					include("main/xulythanhtoanmomo_atm.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}else{
					include("main/index.php");
				}
				?>
			</div>

		</div>