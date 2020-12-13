<?php
    if (!isset($_SESSION)) session_start();
    require_once __DIR__. "/../libraries/connect.php";
    $sql="SELECT * FROM sanpham ORDER BY `gia`ASC";
    $stm=$o->query($sql);
    $_SESSION['sapxep']=$stm->fetchAll();
    header("location:sanpham.php");
?>