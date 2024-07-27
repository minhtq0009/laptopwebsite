
<?php
	$sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_khachhang ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="row container_content">
                <section class="h-100 h-custom">
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card card-registration card-registration-2" >
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-12">
                                                <div class="p-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                                        <h1 class="fw-bold mb-0 text-black"> Danh sách đơn hàng</h1>
                                                    </div>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  ?>



<div class="row mb-4 d-flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <h6 class="text-muted">Id</h6>
                                                            <h6 class="text-black mb-0"><?php echo $i ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Mã Đơn Hàng</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['code_cart'] ?></h6>
                                                        </div>
                                                         <div class="col">
                                                            <h6 class="text-muted">Tên Khách Hàng</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['tenkhachhang'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Địa Chỉ</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['diachi'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Email</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['email'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Điện Thoại</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['dienthoai'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Tình Trạng</h6>
                                                            <h6 class="text-black mb-0"><?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Chưa thanh toán</a>';
    	}
        if($row['cart_status']==0){
    		echo 'Đã thanh toán';
    	}
        if($row['cart_status']==2){
    		echo 'Đã thanh toán bằng MOMO ATM';
    	}
        if($row['cart_status']==3){
    		echo 'Đã thanh toán bằng MOMO QR';
    	}
        if($row['cart_status']==4){
    		echo 'Đã thanh toán bằng VNPAY';
    	}
    	?></h6>
                                                        </div>             
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>" class="text-muted"><i class="bi bi-pencil-square"></i></a>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="modules/quanlydonhang/xuly.php?query=xoa&codexoa=<?php echo $row['code_cart'] ?>" class="text-muted"><i class="bi bi-x"></i></a>
                                                        </div>
                                                    </div> 
                                                    <hr class="my-4"/>
                                                      
  <?php
  } 
  ?>
                                                   
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



