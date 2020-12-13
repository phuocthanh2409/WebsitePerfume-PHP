<?php ob_start();
require_once __DIR__. "/layouts/header.php";
?>
<?php
require_once __DIR__. "/../libraries/connect.php";
    $sql1="select * from quantrivien";
    $stm=$o->query($sql1);
    $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
    $sql2 = "select * from nhasanxuat where manhasanxuat ='$_GET[ma]'";
    $stm=$o->query($sql2);
    $data2 =$stm->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_POST["submit"]))
    {
        $maquanly=$_POST["maquanly"];
        $tennhasanxuat=$_POST["tennhasanxuat"];
        $diachi=$_POST["diachi"];
        $sodienthoai=$_POST["sodienthoai"];
        $manhasanxuat=$_POST["manhasanxuat"];
        $sql3="update nhasanxuat  set maquanly='$maquanly',tennhasanxuat='$tennhasanxuat',diachi='$diachi',sodienthoai='$sodienthoai' where manhasanxuat='$manhasanxuat'";
        $stm=$o->prepare($sql3);
        $stm->execute([$maquanly,$tennhasanxuat,$diachi,$sodienthoai,$manhasanxuat]);
        header("location:nhasanxuat.php");
    }
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sửa khách hàng</h6>
            </div>
            <form action="/websitenuochoa/admin/suanhasanxuat.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã nhà sản xuất</th>
                                    <th>Mã quản lý</th>
                                    <th>Tên nhà sản xuất</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                </tr>
                            </thead>

                            <body>
                                <tr>
                                    <th><input type="text" name="manhasanxuat" readonly value="<?php echo $data2[0]['manhasanxuat'] ?>"></th>
                                    <th><select name="maquanly" id="">
                                        <?php
                                            foreach ($data1 as $key => $value){
                                        ?>
                                        <option value='<?php echo $value['maquanly'] ?>'>
                                            <?php echo $value['hoten']?>
                                        </option>
                                        <?php
                                        }
                                        ?>
                                    </select></th>
                                    <th><input type="text" name="tennhasanxuat" value="<?php echo $data2[0]['tennhasanxuat'] ?>"></th>
                                    <th><input type="text" name="diachi" value="<?php echo $data2[0]['diachi'] ?>"></th>
                                    <th><input type="number" name="sodienthoai" value="<?php echo $data2[0]['sodienthoai'] ?>"></th>
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