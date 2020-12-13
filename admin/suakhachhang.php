<?php ob_start();
require_once __DIR__. "/layouts/header.php";
?>
<?php
require_once __DIR__. "/../libraries/connect.php";
    $sql1="select * from quantrivien";
    $stm=$o->query($sql1);
    $data1=$stm->fetchAll(PDO::FETCH_ASSOC);
    $sql2 = "select * from khachhang where makhachhang ='$_GET[ma]'";
    $stm=$o->query($sql2);
    $data2 =$stm->fetchAll(PDO::FETCH_ASSOC);
    if(isset($_POST["submit"]))
    {
        $maquanly=$_POST["maquanly"];
        $tenkhachhang=$_POST["tenkhachhang"];
        $taikhoan=$_POST["taikhoan"];
        $matkhau=$_POST["matkhau"];
        $email=$_POST["email"];
        $ngaysinh = $_POST["ngaysinh"];
        $diachi=$_POST["diachi"];
        $sodienthoai=$_POST["sodienthoai"];
        $makhachhang=$_POST["makhachhang"];
        $sql3="update khachhang  set maquanly='$maquanly', tenkhachhang='$tenkhachhang', taikhoan='$taikhoan', matkhau='$matkhau', email='$email', ngaysinh='$ngaysinh', diachi='$diachi', sodienthoai='$sodienthoai' where makhachhang='$makhachhang'";
        $stm=$o->prepare($sql3);
        $stm->execute([$maquanly,$tenkhachhang,$taikhoan,$matkhau,$email,$ngaysinh,$diachi,$sodienthoai,$makhachhang]);
        header("location:khachhang.php");
    }
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sửa khách hàng</h6>
            </div>
            <form action="/websitenuochoa/admin/suakhachhang.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Mã khách hàng</th>
                                    <th>Mã quản lý</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tài khoản</th>
                                    <th>Mật khẩu</th>
                                    <th>Email</th>
                                    <th>Ngày sinh</th>
                                    <th>Địa chỉ</th>
                                    <th>Số điện thoại</th>
                                </tr>
                            </thead>

                            <body>
                                <tr>
                                    <th><input type="text" name="makhachhang" readonly value="<?php echo $data2[0]['makhachhang'] ?>"></th>
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
                                    <th><input type="text" name="tenkhachhang" value="<?php echo $data2[0]['tenkhachhang'] ?>"></th>
                                    <th><input type="text" name="taikhoan" value="<?php echo $data2[0]['taikhoan'] ?>"></th>
                                    <th><input type="text" name="matkhau" value="<?php echo $data2[0]['matkhau'] ?>"></th>
                                    <th><input type="email" name="email" value="<?php echo $data2[0]['email'] ?>"></th>
                                    <th><input type="date" name="ngaysinh" value="<?php echo $data2[0]['ngaysinh'] ?>"></th>
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