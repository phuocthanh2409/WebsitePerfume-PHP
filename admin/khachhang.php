<?php require_once __DIR__. "/layouts/header.php";?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
    $sql="select * from khachhang";
    $stm=$o->query($sql);
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Khách hàng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $key => $value)
                                {
                                ?>
                            <tr>
                                <th><?php echo $value['makhachhang']?></th>
                                <th><?php echo $value['maquanly']?></th>
                                <th><?php echo $value['tenkhachhang']?></th>
                                <th><?php echo $value['taikhoan']?></th>
                                <th><?php echo $value['matkhau']?></th>
                                <th><?php echo $value['email']?></th>
                                <th><?php echo $value['ngaysinh']?></th>
                                <th><?php echo $value['diachi']?></th>
                                <th><?php echo $value['sodienthoai']?></th>
                                <th>
                                    <a href="/websitenuochoa/admin/suakhachhang.php?ma=<?php echo $value['makhachhang']?>">Sửa</a>
                                    <a href="/websitenuochoa/admin/khoakhachhang.php?ma=<?php echo $value['makhachhang']?>">Khóa</a>
                                </th>
                            </tr>
                            <?php
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php"?>