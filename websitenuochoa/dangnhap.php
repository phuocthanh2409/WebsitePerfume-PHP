<?php 
if (!isset($_SESSION)) session_start();
$Username = isset($_POST['Username'])?$_POST['Username']:'';
$Password= isset($_POST['Password'])?$_POST['Password']:'';
if ($Username=='')
{
	header('location:dangnhap.html'); exit;
}
$o = new PDO('mysql:host=localhost;dbname=nuochoa', 'root','');
$p = md5($p);
$sql="SELECT * from khachhang where taikhoan=? and matkhau=?";
$stm= $o->prepare($sql);
$stm->execute([$Username, $Password]);
$n = $stm->rowCount();//tra ve so dong
//echo "n= $n"; exit;
if ($n==0)
{
	header('location:dangnhap.html'); exit;
}
$_SESSION['admin']= $stm->fetch();//lay data gan cho session
header("location:sauDN.php");