<?php
if (!isset($_SESSION)) session_start();
?>
<!DOCTYPE html>

  <head>
    <title>The Perfume</title>
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
          <a class="navbar-brand" href="index.php">The Perfume</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="sanphamnam.php">Nước hoa nam</a>
                <a class="dropdown-item" href="sanphamnu.php">Nước hoa nữ</a>
                <!-- <a class="dropdown-item" href="#sanphamkhuyenmai">Sản phẩm khuyến mãi</a>
                <a class="dropdown-item" href="spMoi.html">Sản phẩm mới</a> -->
              </div>
            </li>
	          <!-- <li class="nav-item"><a href="#danhgiakh" class="nav-link">Đánh giá của khách hàng</a></li> -->
	          <!-- <li class="nav-item"><a href="#lienhe" class="nav-link">Liên hệ</a></li> -->
            <?php
            if (!isset($_SESSION['admin1']))
            {?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="dangnhap.php">Đăng nhập</a>
                <a class="dropdown-item" href="dangky.php">Đăng ký</a>
              </div>
            </li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                <a class="dropdown-item" href="#">Lịch sử đặt hàng</a>
                <a class="dropdown-item" href="dangxuat.php">Đăng xuất</a>
              </div>
            </li>
            <?php
            }
            ?>
            <li class="nav-item"><a href="#" class="nav-link">Giỏ hàng</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>   
    <!-- END nav -->