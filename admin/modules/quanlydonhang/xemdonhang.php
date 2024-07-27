
<?php
	$code = $_GET['code'];
	$sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
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
                                                        <h1 class="fw-bold mb-0 text-black"> Đơn hàng:</h1>
                                                    </div>
 
  <?php
  $i = 0;
  $tongtien = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
  	$i++;
  	$thanhtien = $row['giasp']*$row['soluongmua'];
  	$tongtien += $thanhtien ;
  ?>






<div class="row mt-3 d-flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <h6 class="text-muted">Id</h6>
                                                            <h6 class="text-black mb-0"><?php echo $i ?></h6>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"
                                                                class="img-fluid rounded-3" alt="Cotton T-shirt"/>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Mã sản phẩm</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['masp'] ?></h6>
                                                        </div>
                                                         <div class="col">
                                                            <h6 class="text-muted">Tên Sản Phẩm</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['tensanpham'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Số Lượng</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['soluongmua'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Giá</h6>
                                                            <h6 class="text-black mb-0"><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></h6>
                                                        </div>
                                                    
                              
                                                    
  <?php
  } 
  ?>
          <hr class="my-4"/>
                                                      <p class="tieude">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>                                         
                                                    
                                                    
                                                    
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



