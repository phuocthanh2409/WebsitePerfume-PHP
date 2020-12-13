<?php
    if (!isset($_SESSION)) session_start();
    if (!isset($_SESSION['admin']))
    {
	    header('location:login.html'); 
	    exit;
    }
?>
<?php
    require_once __DIR__. "/layouts/header.php";
?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
    $sql="select * from sanpham";
    $stm=$o->query($sql);
    $data=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
<div id="content">
    <div class="container-fluid">
        <div>
            <h1 class="h3 mb-2 text-gray-800">Sản phẩm
                <a href="/websitenuochoa/admin/modules/indexthemsanpham.php" class="btn btn-light btn-icon-split">
                    <span class="icon text-light-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Thêm sản phẩm</span>
                </a>
            </h1>
        </div>
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
                                <th>Tên sản phẩm</th>
                                <th>Mã nhà sản xuất</th>
                                <th>Mã loại</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Dung tích</th>
                                <th>Tình trạng</th>
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
                                <th><?php echo $value['tensanpham']?></th>
                                <th><?php echo $value['mansx']?></th>
                                <th><?php echo $value['maloai']?></th>
                                <th><?php echo $value['mota']?></th>
                                <th><?php echo $value['gia']?></th>
                                <th><img src="/websitenuochoa/images/<?php echo $value['hinhanh']?>" width="100"
                                        height="100" /></th>
                                <th><?php echo $value['dungtich']?></th>
                                <th><?php echo $value['tinhtrang']?></th>
                                <th>
                                    <a href="/websitenuochoa/admin/modules/sua.php?ma=<?php echo $value['masanpham']?>">Sửa</a>
                                    <a href="/websitenuochoa/admin/modules/xoa.php?ma=<?php echo $value['masanpham']?>">Xóa</a>
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
<?php require_once __DIR__. "/layouts/footer.php" ?>