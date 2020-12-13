<?php require_once __DIR__. "/layouts/header.php";?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
    if(isset($_GET["tangdan"]))
        {
            if(($_GET["tangdan"]==1))
                {
                    $sql="SELECT * FROM sanpham ORDER BY `gia`ASC";
                    $stm=$o->query($sql);
                    $data=$stm->fetchAll();
                }
        }
    $sql="select * from sanpham";
    $stm=$o->query($sql);
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Giới tính</th>
                                <th>Nhà sản xuất</th>
                                <th>Quản lý</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Dung tích</th>
                                <th>Tình trạng</th>
                                <th><a href="tangdan.php">Số lượng</a></th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($data as $key => $value)
                                {
                                ?>
                            <tr>
                                <th><?php echo $value['masanpham']?></th>
                                <th><?php echo $value['magioitinh']?></th>
                                <th><?php echo $value['manhasanxuat']?></th>
                                <th><?php echo $value['maquanly']?></th>
                                <th><?php echo $value['tensanpham']?></th>
                                <th><?php echo $value['mota']?></th>
                                <th><?php echo $value['gia']?></th>
                                <th><img src="/websitenuochoa/images/<?php echo $value['hinhanh']?>" width="100"
                                        height="100" /></th>
                                <th><?php echo $value['dungtich']?></th>
                                <th><?php echo $value['tinhtrang']?></th>
                                <th><?php echo $value['soluong']?></th>
                                <th>
                                    <a href="/websitenuochoa/admin/suasanpham.php?ma=<?php echo $value['masanpham']?>">Sửa</a>
                                    <a href="/websitenuochoa/admin/xoasanpham.php?ma=<?php echo $value['masanpham']?>">Xóa</a>
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