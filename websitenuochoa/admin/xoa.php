<?php
  require_once __DIR__. "/../../libraries/connect.php";
  $m= isset($_GET['ma'])?$_GET['ma']:'';
  $sql="delete from sanpham where masanpham=?";
  $stm=$o->prepare($sql);
  $stm->execute([$m]);
  header("location: ../index.php");
?>