<?php
require_once __DIR__. "/../../libraries/connect.php";
isset($_GET['ma'])?$code=$_GET['ma']:$code='';
$sql="select * from sanpham where masanpham='$code'";
$stm=$o->query($sql);
$data=$stm->fetchAll();

if(isset($_POST["btn_submit"]))
{
    $masanpham=$_POST['masanpham'];
    $tensanpham=$_POST['tensanpham'];
    $mansx=$_POST['mansx'];
    $maloai=$_POST['maloai'];
    $mota=$_POST['mota'];
    $gia=$_POST['gia'];
    if(isset($_POST['hinhanh']))
    {
        $hinhanh=$_POST['hinhanh']['tmp_name'];
    }
    $dungtich=$_POST['dungtich'];
    $tinhtrang=$_POST['tinhtrang'];
    $sql="update sanpham set masanpham='$masanpham', tensanpham='$tensanpham', mansx='$mansx', maloai='$maloai', mota='$mota', gia='$gia', hinhanh='$hinhanh', dungtich='$dungtich', tinhtrang='$tinhtrang' where masanpham='$masanpham'";
    $o->query($sql);
    
    header("location: ../index.php");
}
if(isset($data))
{
    foreach($data as $c)
}
?>