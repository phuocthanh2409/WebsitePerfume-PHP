<?php require_once __DIR__. "/layouts/header.php";?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
    $sql="select * from nhasanxuat";
    $stm=$o->query($sql);
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Nhà sản xuất</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã nhà sản xuất</th>
                                <th>Mã quản lý</th>
                                <th>Tên nhà sản xuất</th>
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
                                <th><?php echo $value['manhasanxuat']?></th>
                                <th><?php echo $value['maquanly']?></th>
                                <th><?php echo $value['tennhasanxuat']?></th>
                                <th><?php echo $value['diachi']?></th>
                                <th><?php echo $value['sodienthoai']?></th>
                                <th>
                                    <a href="/websitenuochoa/admin/suanhasanxuat.php?ma=<?php echo $value['manhasanxuat']?>">Sửa</a>
                                    <a href="/websitenuochoa/admin/xoanhasanxuat.php?ma=<?php echo $value['manhasanxuat']?>">Xóa</a>
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