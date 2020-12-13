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
    if(isset($_POST["submit"]))
    {   
        $hinhanh=$_FILES['hinhanh']['error']==0?$_FILES['hinhanh']['name']:'';
        $path = "../images/".basename($_FILES["hinhanh"]["name"]);
        $data4=[
        $masanpham = NULL,
        $magioitinh = $_POST["magioitinh"],
        $manhasanxuat = $_POST["manhasanxuat"],
        $maquanly=$_POST["maquanly"],
        $tensanpham=$_POST["tensanpham"],
        $mota=$_POST["mota"],
        $gia=$_POST["gia"],
        $hinhanh,
        $dungtich = $_POST["dungtich"],
        $tinhtrang=$_POST["tinhtrang"],
        $soluong=$_POST["soluong"]
        ];
        if($magioitinh==""||$manhasanxuat==""||$maquanly==""||$tensanpham==""||$mota==""||$gia==""||$hinhanh==""||$dungtich==""||$tinhtrang==""||$soluong=="")
        { ?>
        <div class="container-fluid">
            <h2 class="h3 mb-2 text-gray-800">Nhập đầy đủ thông tin trước khi xác nhận</h2>
        </div>
        <?php
        }
        else
        {
            $sql4="insert into sanpham(masanpham, magioitinh, manhasanxuat, maquanly, tensanpham, mota, gia, hinhanh, dungtich, tinhtrang, soluong)
            values (?,?,?,?,?,?,?,?,?,?,?)";
            $stm=$o->prepare($sql4);
            $stm->execute($data4);
            if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $path))
            {
                header("location:sanpham.php");
            }
        }
    }
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
            </div>
            <form action="/websitenuochoa/admin/themsanpham.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Giới tính</th>
                                    <th>Nhà sản xuất</th>
                                    <th>Quản lý</th>
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
                                    <th><input type="text" name="tensanpham"></th>
                                    <th><textarea name="mota"></textarea></th>
                                    <th><input type="number" name="gia"></th>
                                    <th><input type="file" name="hinhanh"></th>
                                    <th><input type="text" name="dungtich"></th>
                                    <th><input type="text" name="tinhtrang"></th>
                                    <th><input type="number" name="soluong"></th>
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
<?php require_once __DIR__. "/layouts/footer.php"?>