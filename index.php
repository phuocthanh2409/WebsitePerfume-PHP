<?php
  require_once __DIR__. "/layouts/header.php";
  require_once __DIR__. "/libraries/connect.php";
	$sql1="select * from sanpham";
	$stm=$o->query($sql1);
  $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
  $sql2="select * from nhasanxuat";
  $stm=$o->query($sql2);
  $data2=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="/websitenuochoa/public/frontend/images/hinh1.jpg" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<div class="horizontal">
							<h1 class="mb-4 mt-3">Dolce & Gabbana</p> The One</h1>
				            <p class="mb-4">Từ ý tưởng của các nhà thiết kế, The One là một loại nước hoa dành cho người phụ nữ có thể ngay lập tức lôi kéo được sự chú ý của người khác không chỉ vì ngoại hình bên ngoài mà còn vì tính cách, khí chất và thế giới nội tâm bên trong. Giống với các dòng nước hoa khác của thương hiệu D & G, The One mang đậm nét cá tính riêng biệt, nổi bật và thu hút. The One được ra mắt vào năm 2006.</p>
				            
				            <!-- <p><a href="slide1.html" class="btn-custom">Khám phá ngay</a></p> -->
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="/websitenuochoa/public/frontend/images/hinh3.jpg" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Sản phẩm nổi bật</span>
		          		<div class="horizontal">
				            <h1 class="mb-4 mt-3">Gucci Guilty Absolute</h1>
				            <p class="mb-4">Gucci Guilty Absolute, phiên bản mới của hương thơm Gucci Guilty nam tính, xuất hiện vào đầu năm 2017. Đây là sản phẩm hợp tác giữa giám đốc sáng tạo của nhà Gucci là Alessandro Michele và nhà chế tạo nước hoa Alberto Morillas.
							</p>   
				            <!-- <p><a href="slide2.html" class="btn-custom">Khám phá ngay</a></p> -->
				          </div>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-bag"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Miễn phí vận chuyển</h3>
                <p>Thoải mái mua sắm với chế độ miễn phí vận chuyển của cửa hàng</p>
              </div>
            </div>      
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Tư vấn</h3>
                <p>Khách hàng được tư vấn về sản phẩm một cách chu đáo và tận tâm nhất có thể</p>
              </div>
            </div>    
          </div>
          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-4 py-md-5">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-payment-security"></span>
              </div>
              <div class="media-body">	
                <h3 class="heading">Bảo mật về thông tin</h3>
                <p>Thông tin khách hàng được bảo mật trong mọi trường hợp</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section bg-light" id="nuochoa">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nước hoa</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
				<?php
    			foreach($data1 as $key => $value)
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
						
    					<a class="img-prod"><img class="img-fluid" src="/websitenuochoa/images/<?php echo $value['hinhanh']?>" alt="Colorlib Template" >
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
    							<a href="chitietsanpham.php?ma=<?php echo $value['masanpham']?>" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
							</p>
							<div>
							<h3><span><?php echo $value['tinhtrang']?></span></h3>
							</div>
						</div>
    				</div>
				</div>
				<?php
    			}
    			?>
    		</div>
    	</div>
    </section>
<?php
  require_once __DIR__. "/layouts/footer.php";
?>