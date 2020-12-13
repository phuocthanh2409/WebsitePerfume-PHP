<?php require_once __DIR__. "/layouts/header.php";?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
    $sql="select * from banner";
    $stm=$o->query($sql);
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Banner</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã banner</th>
                                <th>Mã khuyến mãi</th>
                                <th>Mã quản lý</th>
                                <th>Nội dung banner</th>
                                <th>Hình ảnh banner</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $key => $value)
                                {
                                ?>
                            <tr>
                                <th><?php echo $value['mabanner']?></th>
                                <th><?php echo $value['makhuyenmai']?></th>
                                <th><?php echo $value['maquanly']?></th>
                                <th><?php echo $value['noidungbanner']?></th>
                                <th><?php echo $value['hinhanhbanner'] ?></th>
                                <th>
                                    <a href="/websitenuochoa/admin/suabanner.php?ma=<?php echo $value['mabanner']?>">Sửa</a>
                                    <a href="/websitenuochoa/admin/xoabanner.php?ma=<?php echo $value['mabanner']?>">Xóa</a>
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