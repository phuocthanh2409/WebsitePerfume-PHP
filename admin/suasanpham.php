<?php ob_start();
require_once __DIR__. "/layouts/header.php";
?>
<?php
require_once __DIR__. "/../libraries/connect.php";
    $sql1="select * from gioitinh";
    $sql2="select * from nhasanxuat";
    $sql3="select * from quantrivien";
    $stm=$o->query($sql1);
    $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
    $stm=$o->query($sql2);
    $data2=$stm->fetchAll(PDO::FETCH_ASSOC);
    $stm=$o->query($sql3);
    $data3=$stm->fetchAll(PDO::FETCH_ASSOC);
    $sql4 = "select * from sanpham where masanpham ='$_GET[ma]'";
    $stm=$o->query($sql4);
    $data4 =$stm->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_POST["submit"]))
    {
        $magioitinh = $_POST["magioitinh"];
        $manhasanxuat = $_POST["manhasanxuat"];
        $maquanly=$_POST["maquanly"];
        $tensanpham=$_POST["tensanpham"];
        $mota=$_POST["mota"];
        $gia=$_POST["gia"];
        $hinhanh=$_FILES['hinhanh']['name'];
        $dungtich = $_POST["dungtich"];
        $tinhtrang=$_POST["tinhtrang"];
        $soluong=$_POST["soluong"];
        $masanpham=$_POST["masanpham"];
        if($hinhanh!=NULL)
        {
            $tmp_hinhanh=$_FILES["hinhanh"]["tmp_name"];
            $hinhanh=$_FILES['hinhanh']['name'];
            move_uploaded_file($tmp_hinhanh, "../images/$hinhanh");
            $sql5="update sanpham set hinhanh='$hinhanh' where masanpham='$masanpham'";
            $stm=$o->prepare($sql5);
            $stm->execute([$hinhanh]);
            header("location:sanpham.php");
        }
        $sql6="update sanpham  set magioitinh='$magioitinh', manhasanxuat='$manhasanxuat', maquanly='$maquanly', tensanpham='$tensanpham', mota='$mota', gia='$gia', dungtich='$dungtich', tinhtrang='$tinhtrang', soluong='$soluong' where masanpham='$masanpham'";
        $stm=$o->prepare($sql6);
        $stm->execute([$magioitinh,$manhasanxuat,$maquanly,$tensanpham,$mota,$gia,$dungtich,$tinhtrang,$soluong]);
        header("location:sanpham.php");
    }
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sửa sản phẩm</h6>
            </div>
            <form action="/websitenuochoa/admin/suasanpham.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Mã giới tính</th>
                                    <th>Mã nhà sản xuất</th>
                                    <th>Mã quản lý</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Mô tả</th>
                                    <th>Giá</th>
                                    <th>Hình ảnh</th>
                                    <th>Dung tích</th>
                                    <th>Tình trạng</th>
                                    <th>Số lượng</th>
                                </tr>
                            </thead>

                            <body>
                                <tr>
                                    <th><input type="text" readonly name="masanpham" value="<?php echo $data4[0]['masanpham'] ?>"></th>
                                    <th><select name="magioitinh" id="">
                                        <?php
                                            foreach ($data1 as $key => $value){
                                        ?>
                                        <option value='<?php echo $value['magioitinh'] ?>'>
                                            <?php echo $value['tengioitinh']?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select></th>
                                    <th><select name="manhasanxuat" id="">
                                        <?php
                                            foreach ($data2 as $key => $value){
                                        ?>
                                        <option value='<?php echo $value['manhasanxuat'] ?>'>
                                            <?php echo $value['tennhasanxuat']?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select></th>
                                    <th><select name="maquanly" id="">
                                        <?php
                                            foreach ($data3 as $key => $value){
                                        ?>
                                        <option value='<?php echo $value['maquanly'] ?>'>
                                            <?php echo $value['hoten']?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select></th>
                                    <th><input type="text" name="tensanpham" value="<?php echo $data4[0]['tensanpham'] ?>"></th>
                                    <th><textarea name="mota" value="<?php echo $data4[0]['mota'] ?>"></textarea></th>
                                    <th><input type="number" name="gia" value="<?php echo $data4[0]['gia'] ?>"></th>
                                    <th><input type="file" name="hinhanh" value="<?php echo $data4[0]['hinhanh'] ?>"></th>
                                    <th><input type="text" name="dungtich" value="<?php echo $data4[0]['dungtich'] ?>"></th>
                                    <th><input type="text" name="tinhtrang" value="<?php echo $data4[0]['tinhtrang'] ?>"></th>
                                    <th><input type="number" name="soluong" value="<?php echo $data4[0]['soluong'] ?>"></th>
                                </tr>
                            </body>
                        </table>
                    </div>
                </div>
                <div>
                    <a class="btn btn-light btn-icon-split">
                        <span class="icon text-light-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <button type="submit" name="submit">Xác nhận</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once __DIR__. "/layouts/footer.php";
?>