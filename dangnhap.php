<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập | ThePerfume</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords"
		content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	

	<link href="/websitenuochoa/public/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

	
	<link rel="stylesheet" href="/websitenuochoa/public/frontend/css/style1.css" type="text/css" media="all">

	
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	

</head>
<body>
	<h1>Thông tin đăng nhập</h1>
	<div class="w3layoutscontaineragileits">
		<h2>Đăng nhập</h2>
		<form action="dangnhap.php" method="post">
			<input type="text" Name="Username" placeholder="Tên tài khoản" required="">
			<span id="error_user"></span>
			<input type="password" Name="Password" placeholder="Mật khẩu" required="">
			<ul class="agileinfotickwthree">
				<li>
					<span id="error_password"></span>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Nhớ mật khẩu</label>
					<!-- <a href="#">Quên mật khẩu?</a> -->
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input name="submit" type="submit" value="Đăng nhập">
				<div class="clear"></div>
			</div>
			<p> Quay về trang chủ <span> → </span> <a href="index.php"> Bấm vào đây</a></p>
		</form>
	</div>

	<?php
	if(isset($_POST["submit"])){
	if (!isset($_SESSION)) session_start();
	$Username = isset($_POST['Username'])?$_POST['Username']:'';
	$Password= isset($_POST['Password'])?$_POST['Password']:'';
	if ($Username == "")
	{
		echo '
		<script>
		    var x = document.getElementById("error_user");
		    x.innerHTML = "Tài khoản không được để trống!" ;
		</script>';
	}
	else if($Password=="")
	{
		echo '
		<script>
		    var x = document.getElementById("error_password");
		    x.innerHTML = "Tài khoản không được để trống!" ;
		</script>';
	}
	else{
		$o = new PDO('mysql:host=localhost;dbname=websitenuochoa', 'root','');
		/* $Password = md5($Password); */
		$sql="SELECT * from khachhang where taikhoan=? and matkhau=?";
		$stm= $o->prepare($sql);
		$stm->execute([$Username, $Password]);
		$n = $stm->rowCount();
		if ($n==0)
		{
		echo '
			<script>
				var x = document.getElementById("error_password");
				x.innerHTML = "Tài khoản hoặc mật khẩu không đúng!" ;
			</script>';
		}
		else
		{
		$_SESSION['admin1']= $stm->fetch();
		header("location:index.php");
		}	
	}
	}
	?>

<script type="text/javascript" src="/websitenuochoa/public/frontend/js/jquery-2.1.4.min.js"></script>

<!-- pop-up-box-js-file -->
<script src="/websitenuochoa/public/frontend/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box-js-file -->
<script>
	$(document).ready(function () {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
	});
</script>
</body>

</html>