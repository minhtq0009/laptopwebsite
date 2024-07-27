<div class="conntainer row">
<p class="header-dangky tieude"> 
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'Xin chào: '.'<span style="color:red;">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
</p>
<hr>
<?php
	if(isset($_SESSION['cart'])){
	}
?>

<div class="col-1"></div>
<div class="col-10 mb-3 mt-5"><table style="width:100%;text-align: center; border: none;">
<div class="row">
  <div class="col-8">



  </div>
  <div class="col-4">


  </div>
</div>
  <tr>
    <th>Id</th>
    <th>Mã sp</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  
    $l=0;
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    	<a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>" class="a-dangky"></i></a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="8">
    	<p class="tieude mt-5" style="float: left; ">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
    	<p  class="tieude"style="float: right; margin-right: 38px; margin-top: 21px;"><a href="pages/main/themgiohang.php?xoatatca=1" class="a-dangky"><i class="bi bi-trash3-fill"></i></a></p>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
          <hr>
           <span style="font-weight:bold" >Thanh Toán Khi nhận hàng</a></span>
           <div class="row">
            <div class="col-4"></div>
            <div class="col-4"><a style="width:100%" class="btn btn-outline-dark mb-5" href="index.php?quanly=thanhtoan" role="button" type="submit">Mua Ngay</a></div>
            <div class="col-4"></div>
           </div>



           <span style="font-weight:bold">Thanh Toán Ngay Với</a></span>
           <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
              <div class="row" style> 
                <div class="col">
                  <a style="width:100%" class="btn btn-outline-dark" href="index.php?quanly=thanhtoanmomo" role="button" >MOMO</a>
                  <!-- <a href="index.php?quanly=thanhtoanmomo" class="a-dangky"><img style="width: 100px;" src="data:image/png;base64,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" alt=""></a> -->
                </div>
              <div class="col">
                <a  style="width:100%" class="btn btn-outline-dark" href="index.php?quanly=thanhtoanmomoatm" role="button">ATM</a>
                           <!-- <a href="index.php?quanly=thanhtoanmomoatm" class="a-dangky"><img style="width: 200px;" src="https://kynangquanlytaichinh.com.vn/wp-content/uploads/2022/09/vay-tien-atm-online.png" alt=""></a> -->
              </div>
              <div class="col">
                <a style="width:100%" class="btn btn-outline-dark" href="index.php?quanly=thanhtoanvnpay" role="button">VNPAY</a>
                           <!-- <a href="index.php?quanly=thanhtoanvnpay" class="a-dangky"><img style="width: 200px;" src="https://kynangquanlytaichinh.com.vn/wp-content/uploads/2022/09/vay-tien-atm-online.png" alt=""></a> -->
              </div>
            </div>
             
            </div>
            <div class="col-4"></div>
           </div>
      <?php
        }else{
      ?>
      <hr>
        <div class="row mt-3">
            <div class="col-4"></div>
            <div class="col-4"><a style="width:100%" class="btn btn-outline-dark mb-5" href="index.php?quanly=dangky" role="button">Đăng nhập để mua</a></div>
            <div class="col-4"></div>
           </div>
      <?php
        }
      ?>
      
     


    </td>

   
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td  colspan="8"><p class="mt-5">Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
 
</table></div>
<div class="col-1"></div>






</div>
