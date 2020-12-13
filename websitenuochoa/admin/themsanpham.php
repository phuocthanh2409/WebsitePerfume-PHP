<?php
    require_once __DIR__. "/../../libraries/connect.php";
    $hinh=$_FILES['hinhanh']['error']==0?$_FILES['hinhanh']['name']:'';
    function postIndex($i,$v='')
    {
    return isset($_POST[$i])?$_POST[$i]:$v;
    }
    $data =[
        postIndex('masanpham'),
        postIndex('tensanpham'),
        postIndex('mansx'),
        postIndex('maloai'),
        postIndex('mota'),
        postIndex('gia'),
        $hinh,
        postIndex('dungtich'),
        postIndex('tinhtrang')
    ];
    $sql="insert into sanpham(masanpham, tensanpham, mansx, maloai, mota, gia, hinhanh, dungtich, tinhtrang)
            value (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stm=$o->prepare($sql);
    $stm->execute($data);
    if($hinh!='')
        move_uploaded_file($_FILES['hinhanh']['tmp_name'],"../../images/$hinh");
    header("location: ../index.php");
?>