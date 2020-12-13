<?php
	require_once __DIR__. "/libraries/connect.php";
	$sql1="select * from sanpham";
	$stm=$o->query($sql1);
	$data1=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

  <head>
    <title>The Perfume | Thế giới nước hoa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/animate.css">
    
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/magnific-popup.css">

    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/aos.css">

    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/ionicons.min.css">

    
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/flaticon.css">
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/icomoon.css">
    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/style.css">
  </head>

  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
          <a class="navbar-brand" href="index.html">The Perfume</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="#" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#nuochoanu" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tìm kiếm</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="nu.html">Nước hoa nữ</a>
                <a class="dropdown-item" href="nam.html">Nước hoa nam</a>
                <a class="dropdown-item" href="#sanphamkhuyenmai">Sản phẩm khuyến mãi</a>
                <a class="dropdown-item" href="spMoi.html">Sản phẩm mới</a>
              </div>
            </li>
	          <!-- <li class="nav-item"><a href="#danhgiakh" class="nav-link">Đánh giá của khách hàng</a></li> -->
	          <li class="nav-item"><a href="#lienhe" class="nav-link">Liên hệ</a></li>

              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#nuochoanu" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="dangnhap.html">Đăng nhập</a>
                <a class="dropdown-item" href="dangky.php">Đăng ký</a>
              </div>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Giỏ hàng</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>   
    <!-- END nav -->



    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third order-md-last img-fluid" src="/websitenuochoa/public/frontend/images/hinh1.jpg" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">#Sản phẩm nổi bật</span>
		          		<div class="horizontal">
							<h1 class="mb-4 mt-3">Dolce & Gabbana</p> The One</h1>
				            <p class="mb-4">Từ ý tưởng của các nhà thiết kế, The One là một loại nước hoa dành cho người phụ nữ có thể ngay lập tức lôi kéo được sự chú ý của người khác không chỉ vì ngoại hình bên ngoài mà còn vì tính cách, khí chất và thế giới nội tâm bên trong. Giống với các dòng nước hoa khác của thương hiệu D & G, The One mang đậm nét cá tính riêng biệt, nổi bật và thu hút. The One được ra mắt vào năm 2006.</p>
				            
				            <p><a href="slide1.html" class="btn-custom">Khám phá ngay</a></p>
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
				            <p><a href="slide2.html" class="btn-custom">Khám phá ngay</a></p>
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

    <section class="ftco-section bg-light" id="nuochoanu">
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
    			?>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
					<div class="product d-flex flex-column">
						
    					<a href="#" class="img-prod"><img class="img-fluid" src="/websitenuochoa/images/<?php echo $value['hinhanh']?>" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa <?php echo $value['maloai'] ?></span>
								</div>
							</div>
							<h3><a href="#"><span><?php echo $value['mansx']?></span><span> <?php echo $value['tensanpham']?></span></a></h3>
    						<div class="pricing">
								<p class="price"><span><?php echo number_format($value['gia']) ?> VNĐ</span><span> / <?php echo $value['dungtich']?></span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="nuochoanu1.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
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

	<!-- <section class="ftco-section bg-light" id="nuochoanam">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Nước hoa nam giới</h2>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam1.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa nam</span>
		    					</div>
	    					</div>
    						<h3><a href="#">Penhaligon's The Uncompromising Sohan</a></h3>
    						<div class="pricing">
	    						<p class="price"><span>3.480.000 VNĐ / 100ml</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="nuochoanam1.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product d-flex flex-column">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam2.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa nam</span>
		    					</div>
	    					</div>
    						<h3><a href="#">Montblanc Legend Night</a></h3>
  							<div class="pricing">
	    						<p class="price">1.950.000 VNĐ / 100ml</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="nuochoanam2.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam3.jpg" alt="Colorlib Template">
	    					<div class="overlay"></div>
	    				</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa nam</span>
		    					</div>
	    					</div>
    						<h3><a href="#">Creed Aventus</a></h3>
  							<div class="pricing">
	    						<p class="price"><span>6.480.000 VNĐ / 100ml</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="nuochoanam3.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam4.jpg" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3">
    						<div class="d-flex">
    							<div class="cat">
		    						<span>Nước hoa nam</span>
		    					</div>
	    					</div>
    						<h3><a href="#">Byredo Velvet Haze</a></h3>
  							<div class="pricing">
	    						<p class="price"><span>4.500.000 VNĐ / 100ml</span></p>
	    					</div>
	    					<p class="bottom-area d-flex px-3">
    							<a href="nuochoanam4.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light" id="nuochoanam">
        <div class="container">
                <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Sản phẩm mới</h2>
          </div>
        </div>          
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam1.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Nước hoa nam</span>
                                </div>
                            </div>
                            <h3><a href="#">Penhaligon's The Uncompromising Sohan</a></h3>
                            <div class="pricing">
                                <p class="price"><span>3.480.000 VNĐ / 100ml</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="nuochoanam1.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product d-flex flex-column">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam2.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Nước hoa nam</span>
                                </div>
                            </div>
                            <h3><a href="#">Montblanc Legend Night</a></h3>
                            <div class="pricing">
                                <p class="price">1.950.000 VNĐ / 100ml</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="nuochoanam2.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam3.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Nước hoa nam</span>
                                </div>
                            </div>
                            <h3><a href="#">Creed Aventus</a></h3>
                            <div class="pricing">
                                <p class="price"><span>6.480.000 VNĐ / 100ml</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="nuochoanam3.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="images/nuochoanam4.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3">
                            <div class="d-flex">
                                <div class="cat">
                                    <span>Nước hoa nam</span>
                                </div>
                            </div>
                            <h3><a href="#">Byredo Velvet Haze</a></h3>
                            <div class="pricing">
                                <p class="price"><span>4.500.000 VNĐ / 100ml</span></p>
                            </div>
                            <p class="bottom-area d-flex px-3">
                                <a href="nuochoanam4.html" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-deal bg-primary" id="sanphamkhuyenmai">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<img src="images/nuochoanam5.jpg" class="img-fluid" alt="">
    			</div>
    			<div class="col-md-6">
    				<div class="heading-section heading-section-white">
    					<span class="subheading">Sản phẩm khuyến mãi</span>
	            <h2 class="mb-3">Sản phẩm của tháng</h2>
	          </div>
						<div class="text-deal">
							<h2><a href="nuochoanam5.html">Dolce & Gabbana The One For Men</a></h2>
							<p class="price"><span class="mr-2 price-dc">2.540.000</span><span class="price-sale">2.130.000 VNĐ/ 100ml</span></p>
						</div>
    			</div>
    		</div>
    	</div>
    </section> -->

    <section class="ftco-section testimony-section" id="danhgiakh">
      <div class="container">
        <div class="row">
        	<div class="col-lg-5">
        		<div class="services-flow">
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-bag"></span>
        				</div>
        				<div class="text">
	        				<h3>Miễn phí vận chuyển</h3>
	        				<p class="mb-0">Thoải mái mua sắm với chương trình miễn phí vận chuyển</p>
        				</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-heart-box"></span>
        				</div>
        				<div class="text">
	        				<h3>Dịch vụ gói quá</h3>
	        				<p class="mb-0">Dịch vụ gói quà miễn phí cho khách hàng</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-payment-security"></span>
        				</div>
        				<div class="text">
	        				<h3>Bảo mật thông tin</h3>
	        				<p class="mb-0">Thông tin khách hàng luôn được bảo mật trong mọi trường hợp</p>
	        			</div>
        			</div>
        			<div class="services-2 p-4 d-flex ftco-animate">
        				<div class="icon">
        					<span class="flaticon-customer-service"></span>
        				</div>
        				<div class="text">
	        				<h3>Tổng đài hỗ trợ</h3>
	        				<p class="mb-0">Tổng đài hỗ trợ từ 10 sáng đến 8 tối các ngày trong tuần</p>
	        			</div>
        			</div>
        		</div>
        	</div>
          <div class="col-lg-7">
          	<div class="heading-section ftco-animate mb-5">
	            <h2 class="mb-4">Đánh giá của khách hàng</h2>
	            <p>Đánh giá của khách hàng luôn là quan trọng nhất và giúp cho cửa hàng càng ngày càng phát triển</p>
	          </div>
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(/websitenuochoa/public/frontend/images/nguoi1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Nhân viên của shop cũng luôn sẵn sàng tư vấn cho bạn rất chu đáo và thân thiện.</p>
                    <p class="name">Nam Joo-hyuk</p>
                    <span class="position">Diễn viên</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(/websitenuochoa/public/frontend/images/nguoi2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Các sản phẩm ở đây khá là đa dạng với một mức giá phải chăng.</p>
                    <p class="name">Kim Jong-in</p>
                    <span class="position">Ca sĩ</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(/websitenuochoa/public/frontend/images/nguoi3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Cửa hàng được trang trí sang trọng, Perfume có một cửa hàng online rất uy tín.</p>
                    <p class="name">Lee Jong-suk</p>
                    <span class="position">Người mẫu</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(/websitenuochoa/public/frontend/images/nguoi4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Với những bạn mới sử dụng nước hoa và chưa định hình được mùi nước hoa yêu thích và phù hợp với bản thân thì Perfume chính là một lựa chọn tuyệt vời.</p>
                    <p class="name">Park Soo-young</p>
                    <span class="position">Thành viên nhóm nhạc nữ Red Velvet</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap">
                  <div class="user-img mb-4" style="background-image: url(/websitenuochoa/public/frontend/images/nguoi5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4 pl-4 line">Không chỉ đơn giản là bán nước hoa, Perfume còn là một nơi tư vấn chọn nước hoa đáng tin cậy, giúp bạn tạo nên phong cách của riêng mình bằng nước hoa.</p>
                    <p class="name">Bae Soo-ji</p>
                    <span class="position">Ca sĩ kiêm diễn viên</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
	  
    <footer class="ftco-footer ftco-section" id="lienhe">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Perfume</h2>
              <p>Thế giới nước hoa của bạn và tất cả mọi người</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Trang chủ</a></li>
                <li><a href="#" class="py-2 d-block">Nước hoa</a></li>
                <li><a href="#" class="py-2 d-block">Đánh giá của khách hàng</a></li>
                <li><a href="#" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Trợ giúp</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Thông tin về đơn hàng</a></li>
	                <li><a href="#" class="py-2 d-block">Đổi trả hàng</a></li>
	                <li><a href="#" class="py-2 d-block">Chính sách và bảo mật</a></li>
	                <li><a href="#" class="py-2 d-block">Giới thiệu về chúng tôi</a></li>
	              </ul>
	              <ul class="list-unstyled">
	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
	                <li><a href="#" class="py-2 d-block">Trở thành đối tác</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Thông tin liên hệ</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">372/30/6 Cách mạng tháng 8, phường 10, quận 3, Tp. Hồ Chí Minh</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0123456789</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">perfume@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved		  
			</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/websitenuochoa/public/frontend/js/jquery.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/popper.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/bootstrap.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery.easing.1.3.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery.waypoints.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery.stellar.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/owl.carousel.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery.magnific-popup.min.js"></script>

  <script src="/websitenuochoa/public/frontend/js/aos.js"></script>
  <script src="/websitenuochoa/public/frontend/js/jquery.animateNumber.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/scrollax.min.js"></script>
  <script src="/websitenuochoa/public/frontend/js/main.js"></script>
    
  </body>
</html>