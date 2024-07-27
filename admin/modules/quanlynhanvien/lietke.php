<?php
	$sql_lietke_nv = "SELECT * FROM tbl_nhanvien ORDER BY id_nhanvien DESC";
	$query_lietke_nv = mysqli_query($mysqli,$sql_lietke_nv);
?>
<p class="tieude">Tất Cả nhân Viên</p>
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
                                                        <h1 class="fw-bold mb-0 text-black"> Danh Sách Nhân Viên</h1>
                                                         <a href="index.php?action=quanlynhanvien&query=them"><button type="button" class="btn btn-secondary btn-lg">Thêm Nhân Viên </button></a> 
                                                    </div>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_nv)){
  	$i++;
  ?>


<div class="row mb-4 d-flex justify-content-between align-items-center">
                                                        <div class="col">
                                                            <h6 class="text-muted">Id</h6>
                                                            <h6 class="text-black mb-0"><?php echo $i ?><h6>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                                            <img src="modules/quanlynhanvien/uploads/<?php echo $row['hinhanh'] ?> ?>"
                                                                class="img-fluid rounded-3" alt="insert picture"/>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Tên</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['tennhanvien'] ?></h6>
                                                        </div>
                                                         <div class="col">
                                                            <h6 class="text-muted">Mã Nhân Viên</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['manv'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">SĐT</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['dienthoai'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Địa Chỉ</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['diachi'] ?></h6>
                                                        </div>
                                                        <div class="col">
                                                            <h6 class="text-muted">Chức Vụ</h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['chucvu'] ?></h6>
                                                        </div>
                                                       
                                                      
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="?action=quanlynhanvien&query=sua&idnhanvien=<?php echo $row['id_nhanvien'] ?>" class="text-muted"><i class="bi bi-pencil-square"></i></a>
                                                        </div>
                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="modules/quanlynhanvien/xuly.php?idnhanvien=<?php echo $row['id_nhanvien'] ?>" class="text-muted"><i class="bi bi-x"></i></a>
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



