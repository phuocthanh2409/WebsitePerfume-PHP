<?php
  require_once __DIR__. "/layouts/header.php";
  require_once __DIR__. "/libraries/connect.php";
$sql1="select * from khachhang";
$stm=$o->query($sql1);
$data1=$stm->fetchAll(PDO::FETCH_ASSOC);
?>

<head>
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>


    <link href="/websitenuochoa/public/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />


    <link rel="stylesheet" href="/websitenuochoa/public/frontend/css/style1.css" type="text/css" media="all">


    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>

    <body>
            <div class="w3layoutscontaineragileits">
                <h2>Thông tin khách hàng</h2>
                <form action="dangky.php" method="post">
                    <input placeholder="Tài khoản" name="username" type="text" required="">
                    <input type="text" Name="fullname" placeholder="Họ và tên" required="">
                    <input type="email" Name="email" placeholder="Email" required=""><br>
                    <span>Ngày sinh <input type="date" name="date" placeholder="Date of birth"></span>
                    <input type="text" name="diachi" placeholder="Địa chỉ">
                    <input type="text" name="sdt" placeholder="Số điện thoại">
                    <input type="password" Name="password" placeholder="Mật khẩu" required="">

                    <div>
                        <input type="password" Name="repassword" placeholder="Nhập lại mật khẩu" required="">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                    <span id="error_user"></span>
                    <div class="submit">
                        <input type="submit" name="btn_submit" value="Đăng ký">
                    </div>
                    <p> Quay về trang chủ <span>→</span> <a href="index.php"> Bấm vào đây</a></p>
            </div>
            </form>
            </div>
            </div>
            </div>
            <script type="text/javascript" src="/websitenuochoa/public/frontend/js/jquery-2.1.4.min.js"></script>


            <script src="/websitenuochoa/public/frontend/js/jquery.magnific-popup.js" type="text/javascript"></script>

            <script>
                $(document).ready(function () {
                    $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>
    </body>
    <?php
  require_once __DIR__. "/layouts/footer.php";
?>