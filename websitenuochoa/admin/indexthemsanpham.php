<?php 
    require_once __DIR__. "/layouts/header.php"; ?>
<?php
    require_once __DIR__. "/../libraries/connect.php";
?>
<div id="content">
    <div class="container-fluid">
        <div>
            <h1 class="h3 mb-2 text-gray-800">Thêm sản phẩm
            </h1>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thêm Sản phẩm</h6>
            </div>
            <form action="themsanpham.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
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
                                </tr>
                            </thead>

                            <body>
                                <tr>
                                    <th><input type="text" name="masanpham"></th>
                                    <th><input type="text" name="tensanpham"></th>
                                    <th><input type="text" name="mansx"></th>
                                    <th><input type="text" name="maloai"></th>
                                    <th><input type="textarea" name="mota"></th>
                                    <th><input type="text" name="gia"></th>
                                    <th><input type="file" name="hinhanh"></th>
                                    <th><input type="text" name="dungtich"></th>
                                    <th><input type="text" name="tinhtrang"></th>
                                </tr>
                            </body>
                        </table>
                    </div>
                </div>
                <div>
                    <a href="/websitenuochoa/admin/modules/indexthemsanpham.php" class="btn btn-light btn-icon-split">
                        <span class="icon text-light-600">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <button type="submit" name="submit">Xác nhận</button>
                    </a>
            </form>
        </div>
    </div>
</div>
<?php require_once __DIR__. "/layouts/footer.php"?>