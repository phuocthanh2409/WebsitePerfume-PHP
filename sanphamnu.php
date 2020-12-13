<?php
  require_once __DIR__. "/layouts/header.php";
  require_once __DIR__. "/libraries/connect.php";
  $sql1="select * from sanpham";
  $stm=$o->query($sql1);
  $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="mb-4">Nước hoa nữ</h1>
          	</div>
        </div>
      </div>
	</div>
	<section class="ftco-section bg-light" id="nuochoa">
    	<div class="container">
    		<div class="row">
				<?php
    			foreach($data1 as $key => $value)
    			{
					if( $value['magioitinh'] == 'nu')
					{
					$mnxs=$value['manhasanxuat'];
					$sql3="SELECT * from sanpham,nhasanxuat where sanpham.manhasanxuat ='$mnxs' and nhasanxuat.manhasanxuat='$mnxs'";
					$query=$o->query($sql3);
					$data3=$query->fetchAll(PDO::FETCH_ASSOC);
					$mgt=$value['magioitinh'];
					$sql4="SELECT * FROM sanpham,gioitinh where sanpham.magioitinh ='$mgt' and gioitinh.magioitinh='$mgt'";
					$query=$o->query($sql4);
					$data4=$query->fetchAll(PDO::FETCH_ASSOC);
    			?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
					<div class="product d-flex flex-column">
						
    					<a href="#" class="img-prod"><img class="img-fluid" src="/websitenuochoa/images/<?php echo $value['hinhanh']?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa <?php echo $data4[0]['tengioitinh'] ?></span>
								</div>
              </div> 
              <h3><a href="#"><span><?php echo $data3[0]['tennhasanxuat']?></span>
              <span> <?php echo $value['tensanpham']?></span></a>
              </h3>
    						<div class="pricing">
								<p class="price"><span><?php echo number_format($value['gia']) ?> VNĐ</span><span> / <?php echo $value['dungtich']?></span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="chitietsanpham?ma=<?php echo $value['masanpham']?>" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
							</p>
							<div>
							<h3><span><?php echo $value['tinhtrang']?></span></h3>
							</div>
						</div>
    				</div>
				</div>
				<?php
				}
				}
    			?>
    		</div>
    	</div>
	</section>
	<?php?>
<?php
  require_once __DIR__. "/layouts/footer.php";
?>