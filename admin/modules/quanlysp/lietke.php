<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p class="tieude">Tất Cả Sản Phẩm</p>
<div class="row container_content">
                <section class="h-100 h-custom">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12">
                                <div class="card card-registration card-registration-2" >
                                    <div class="card-body p-0">
                                        <div class="row g-0">
                                            <div class="col-lg-12">
                                                <div class="p-5">
                                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                                        <h1 class="fw-bold mb-0 text-black"> Danh Sách Sản Phẩm</h1>
                                                       <a href="index.php?action=quanlysp&query=them"><button type="button" class="btn btn-secondary btn-lg">Thêm Sản Phẩm </button></a> 
                                                    </div>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
 <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <h6 class="text-muted">Id</h6>
                                                            <h6 class="text-black mb-0"><?php echo $i ?></h6>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                                            <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"
                                                                class="img-fluid rounded-3" alt="Insert picture"/>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Tên</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['tensanpham'] ?></h6>
                                                        </div>
                                                         <div class="col">
                                                            <h6 class="text-muted">Mã Sản Phẩm</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['masp'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Giá</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['giasp'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Số Lượng</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['soluong'] ?></h6>
                                                        </div>
                                                       
                                                      
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>" class="text-muted"><i class="bi bi-pencil-square"></i></a>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" class="text-muted"><i class="bi bi-x"></i></a>
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



