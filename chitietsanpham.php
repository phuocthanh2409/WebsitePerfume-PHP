<?php
  require_once __DIR__. "/layouts/header.php";
  require_once __DIR__. "/libraries/connect.php";
  $ma=isset($_GET['ma'])?$_GET['ma']:"";
  $sql1="select * from sanpham where masanpham='$ma'";
  $stm=$o->query($sql1);
  $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
  $gioitinh=$data1[0]['magioitinh'];
  $sql2="SELECT * from sanpham,gioitinh  where sanpham.magioitinh = gioitinh.magioitinh and gioitinh.magioitinh='$gioitinh'";
  $stm=$o->query($sql2);
  $data2=$stm->fetchAll(PDO::FETCH_ASSOC);
  $nhasanxuat=$data1[0]['manhasanxuat'];
  $sql3="SELECT * FROM sanpham,nhasanxuat WHERE sanpham.manhasanxuat = nhasanxuat.manhasanxuat and nhasanxuat.manhasanxuat='$nhasanxuat'";
  $stm=$o->query($sql3);
  $data3=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
    <!-- END nav -->
	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="mb-4">Nước hoa <?php echo  $data2[0]['tengioitinh'] ?></h1>
          	</div>
        </div>
      </div>
    </div>
	
	<section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a class="image-popup prod-img-bg"><img src="/websitenuochoa/images/<?php echo $data1[0]['hinhanh']?>" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3><?php echo $data3[0]['tennhasanxuat'] ?> <?php echo $data1[0]['tensanpham']?></h3>
						<p class="price"><span><?php echo number_format($data1[0]['gia'])?> VNĐ / <?php echo $data1[0]['dungtich']?></span></p>
						<p><?php echo $data1[0]['mota']?></p>
          	<p><a href="#" class="btn btn-primary py-3 px-5">Mua ngay</a></p>
    			</div>
    		</div>
		</div>
	</section>
	
	<?php
  require_once __DIR__. "/layouts/footer.php";