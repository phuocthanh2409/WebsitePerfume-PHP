<?php 
	ob_start(); 
	require_once __DIR__. "/libraries/connect.php"; ?>
<?php  
if(isset($_POST['btn_submit']))
{
	$makhachhang='';
	$maquanly="qlchinh";
	$username=$_POST["username"];
	$fullname=$_POST["fullname"];
	$ngaysinh=$_POST["date"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$repassword=$_POST["repassword"];
	$diachi=$_POST["diachi"];
	$sdt=$_POST["sdt"];
	if($password!=$repassword)
	{
		echo "Mật khẩu và nhập lại mật khẩu không trùng nhau!";
	}
	else
	{
		$sql="INSERT INTO khachhang(makhachhang,maquanly,tenkhachhang,taikhoan,matkhau,email,ngaysinh,diachi,sodienthoai) VALUES (null,'$maquanly','$fullname','$username','$password','$email','$ngaysinh','$diachi','$sdt')";
		$stm=$o->prepare($sql);
		$stm->execute([$makhachhang,$maquanly,$fullname,$username,$password,$email,$ngaysinh,$diachi,$sdt]);
		echo 'Đăng ký thành công !';
	}
}
?>
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Đăng ký | ThePerfume</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Existing Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<link href="/websitenuochoa/public/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />

<!-- Style --> <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/style1.css" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
	<h1>Thông tin đăng ký</h1>
	<div class="w3layoutscontaineragileits">
		<h2>Đăng ký</h2>
		<form action="dangky.php" method="post">
			<input placeholder="Tài khoản" name="username"  type="text" required="">
			<input type="text" Name="fullname" placeholder="Họ và tên" required="">
			<input type="email" Name="email" placeholder="Email" required=""><br>
			<span>Ngày sinh <input type="date" name="date" placeholder="Date of birth"></span>
			<input type="text" name="diachi" placeholder="Địa chỉ">
			<input type="text" name="sdt" placeholder="Số điện thoại">
			<input type="password" Name="password" placeholder="Mật khẩu" required="">

			<div>
				<input type="password" Name="repassword" placeholder="Nhập lại mật khẩu" required="">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
			</div>
				<span id="error_user"></span>
				<div class="submit">
					<input type="submit" name="btn_submit" value="Đăng ký">
				</div>
				<p> Quay về trang chủ <span>→</span> <a  href="index.php"> Bấm vào đây</a></p>
	</div>
				</form>
			</div>
		</div>	
	</div>
	
	<script type="text/javascript" src="/websitenuochoa/public/frontend/js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="/websitenuochoa/public/frontend/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
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
<!-- //Body -->

</html>
