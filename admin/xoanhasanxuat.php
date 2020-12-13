<?php
  require_once __DIR__. "/../libraries/connect.php";
  $m= isset($_GET['ma'])?$_GET['ma']:'';
  $sql="delete from nhasanxuat where manhasanxuat=?";
  $stm=$o->prepare($sql);
  $stm->execute([$m]);
  header("location: nhasanxuat.php");
?>