-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 13, 2020 lúc 06:14 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitenuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `mabanner` int(20) NOT NULL AUTO_INCREMENT,
  `makhuyenmai` int(20) NOT NULL,
  `maquanly` varchar(20) NOT NULL,
  `noidungbanner` text NOT NULL,
  `hinhanhbanner` varchar(50) NOT NULL,
  PRIMARY KEY (`mabanner`),
  KEY `maquanly` (`maquanly`),
  KEY `makhuyenmai` (`makhuyenmai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

DROP TABLE IF EXISTS `chitietdonhang`;
CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `machitietdonhang` varchar(20) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `masanpham` int(20) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `soluong` int(10) NOT NULL,
  PRIMARY KEY (`machitietdonhang`),
  KEY `madonhang` (`madonhang`),
  KEY `masanpham` (`masanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkhuyenmai`
--

DROP TABLE IF EXISTS `chitietkhuyenmai`;
CREATE TABLE IF NOT EXISTS `chitietkhuyenmai` (
  `makhuyenmai` int(20) NOT NULL,
  `masanpham` int(20) NOT NULL,
  `giakhuyenmai` int(50) NOT NULL,
  PRIMARY KEY (`makhuyenmai`,`masanpham`),
  KEY `masanpham` (`masanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

DROP TABLE IF EXISTS `chitietphieunhap`;
CREATE TABLE IF NOT EXISTS `chitietphieunhap` (
  `maphieunhap` varchar(20) NOT NULL,
  `masanpham` int(20) NOT NULL,
  `tensanpham` varchar(50) NOT NULL,
  `soluong` int(10) NOT NULL,
  `gia` int(50) NOT NULL,
  PRIMARY KEY (`maphieunhap`,`masanpham`),
  KEY `masanpham` (`masanpham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

DROP TABLE IF EXISTS `danhgia`;
CREATE TABLE IF NOT EXISTS `danhgia` (
  `madanhgia` varchar(20) NOT NULL,
  `makhachhang` int(20) NOT NULL,
  `machitietdonhang` varchar(20) NOT NULL,
  `saodanhgia` int(5) NOT NULL,
  `ngaydanhgia` date NOT NULL,
  PRIMARY KEY (`madanhgia`),
  KEY `machitietdonhang` (`machitietdonhang`),
  KEY `makhachhang` (`makhachhang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madonhang` varchar(20) NOT NULL,
  `makhachhang` int(20) NOT NULL,
  `maquanly` varchar(20) NOT NULL,
  `diachinhanhang` text NOT NULL,
  `ngaymuahang` datetime NOT NULL,
  `tongtien` int(50) NOT NULL,
  `sodienthoainguoinhan` int(11) NOT NULL,
  `ghichu` text NOT NULL,
  PRIMARY KEY (`madonhang`),
  KEY `maquanly` (`maquanly`),
  KEY `makhachhang` (`makhachhang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

DROP TABLE IF EXISTS `gioitinh`;
CREATE TABLE IF NOT EXISTS `gioitinh` (
  `magioitinh` varchar(20) NOT NULL,
  `tengioitinh` varchar(50) NOT NULL,
  PRIMARY KEY (`magioitinh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`magioitinh`, `tengioitinh`) VALUES
('nam', 'Nam'),
('nu', 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `makhachhang` int(20) NOT NULL AUTO_INCREMENT,
  `maquanly` varchar(20) NOT NULL,
  `tenkhachhang` varchar(100) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  PRIMARY KEY (`makhachhang`),
  KEY `maquanly` (`maquanly`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `maquanly`, `tenkhachhang`, `taikhoan`, `matkhau`, `email`, `ngaysinh`, `diachi`, `sodienthoai`) VALUES
(7, 'qlchinh', 'khachthanhvien1', 'khachthanhvien1', '123123', 'khachthanhvien1@gmail.com', '2020-12-23', 'CMT8', 123123123),
(8, 'qlchinh', 'khachthanhvien2', 'khachthanhvien2', '123123', 'khachthanhvien2@gmail.com', '2020-12-16', 'CMT8', 123123123),
(9, 'qlchinh', 'khachthanhvien3', 'khachthanhvien3', '123123', 'khachthanhvien3@gmail.com', '2020-12-16', 'CMT8', 123123123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

DROP TABLE IF EXISTS `khuyenmai`;
CREATE TABLE IF NOT EXISTS `khuyenmai` (
  `makhuyenmai` int(20) NOT NULL AUTO_INCREMENT,
  `maquanly` varchar(20) NOT NULL,
  `tenkhuyenmai` varchar(100) NOT NULL,
  `noidungkhuyenmai` text NOT NULL,
  `ngaybatdau` datetime NOT NULL,
  `ngayketthuc` datetime NOT NULL,
  PRIMARY KEY (`makhuyenmai`),
  KEY `maquanly` (`maquanly`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

DROP TABLE IF EXISTS `nhasanxuat`;
CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `manhasanxuat` int(20) NOT NULL AUTO_INCREMENT,
  `maquanly` varchar(20) NOT NULL,
  `tennhasanxuat` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  PRIMARY KEY (`manhasanxuat`),
  KEY `maquanly` (`maquanly`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`manhasanxuat`, `maquanly`, `tennhasanxuat`, `diachi`, `sodienthoai`) VALUES
(1, 'qlchinh', 'Dolce & Gabbana', 'CMT8', 123123123),
(2, 'qlchinh', 'Dior', 'CMT8', 123123123),
(3, 'qlchinh', 'Burberry', 'CMT8', 123123123),
(5, 'qlchinh', 'Chanel', 'CMT8', 123123123),
(6, 'qlchinh', 'Creed', 'CMT8', 123123123),
(7, 'qlchinh', 'Gucci', 'CMT8', 123123123),
(8, 'qlchinh', 'Hermes', 'CMT8', 123123123),
(9, 'qlchinh', 'Lancôme', 'CMT8', 123123123),
(10, 'qlchinh', 'Marc Jacobs', 'CMT8', 123123123),
(11, 'qlchinh', 'Tom Ford', 'CMT8', 123123123),
(12, 'qlchinh', 'Versace', 'CMT8', 123123123),
(13, 'qlchinh', 'Victoria\'s Secret', 'CMT8', 123123123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

DROP TABLE IF EXISTS `phieunhap`;
CREATE TABLE IF NOT EXISTS `phieunhap` (
  `maphieunhap` varchar(20) NOT NULL,
  `manhasanxuat` int(20) NOT NULL,
  `maquanly` varchar(20) NOT NULL,
  `tenphieunhap` varchar(50) NOT NULL,
  `ngaynhaphang` datetime NOT NULL,
  `tinhtrangphieunhap` varchar(50) NOT NULL,
  `tongtien` int(50) NOT NULL,
  PRIMARY KEY (`maphieunhap`),
  KEY `maquanly` (`maquanly`),
  KEY `manhasanxuat` (`manhasanxuat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

DROP TABLE IF EXISTS `quantrivien`;
CREATE TABLE IF NOT EXISTS `quantrivien` (
  `maquanly` varchar(20) NOT NULL,
  `maquyen` varchar(20) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` text NOT NULL,
  PRIMARY KEY (`maquanly`),
  KEY `maquyen` (`maquyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`maquanly`, `maquyen`, `taikhoan`, `matkhau`, `hoten`, `email`, `sdt`, `diachi`) VALUES
('qlchinh', '01', 'phuocthanh2409', '4297f44b13955235245b2497399d7a93', 'Đinh Huỳnh Phước Thành', 'phuocthanh2409@gmail.com', 399777151, '372 cách mạng tháng 8'),
('qlkho01', '02', 'quanlykho', '4297f44b13955235245b2497399d7a93', 'quanlykho', 'quanlykho@gmail.com', 123123123, 'sdfsdfsdfds'),
('qlkinhdoanh01', '03', 'quanlykinhdoanh', '4297f44b13955235245b2497399d7a93', 'quanlykinhdoanh', 'quanlykinhdoanh@gmail.com', 123123, 'dfgdfgdfg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quyenquantri`
--

DROP TABLE IF EXISTS `quyenquantri`;
CREATE TABLE IF NOT EXISTS `quyenquantri` (
  `maquyen` varchar(20) NOT NULL COMMENT '1.super admin  2.Quản lý kho  3.Quản lý kinh doanh',
  `tenquyen` varchar(20) NOT NULL,
  `chucnang` text NOT NULL,
  PRIMARY KEY (`maquyen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quyenquantri`
--

INSERT INTO `quyenquantri` (`maquyen`, `tenquyen`, `chucnang`) VALUES
('01', 'quản lý chính', 'phân quyền, quản lý nhân viên'),
('02', 'quản lý kho', 'sản phẩm, loại sản phẩm, nhà sản xuất'),
('03', 'quản lý kinh doanh', 'quản lý khách hàng, dữ liệu kinh doanh, đơn hàng, chương trình khuyến mãi, tin tức, banner, đánh giá sản phẩm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masanpham` int(20) NOT NULL AUTO_INCREMENT,
  `magioitinh` varchar(20) NOT NULL,
  `manhasanxuat` int(20) NOT NULL,
  `maquanly` varchar(20) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(20) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `dungtich` varchar(20) NOT NULL,
  `tinhtrang` varchar(50) NOT NULL,
  `soluong` int(10) NOT NULL,
  PRIMARY KEY (`masanpham`),
  KEY `magioitinh` (`magioitinh`),
  KEY `maquanly` (`maquanly`),
  KEY `manhasanxuat` (`manhasanxuat`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `magioitinh`, `manhasanxuat`, `maquanly`, `tensanpham`, `mota`, `gia`, `hinhanh`, `dungtich`, `tinhtrang`, `soluong`) VALUES
(5, 'nam', 1, 'qlchinh', 'The One EDP', 'Nốt hương đầu : Bưởi, Húng quế\r\nNốt hương giữa : Gừng, Bạch đậu khấu\r\nNốt hương cuối : Thuốc lá , Hổ phách\r\n\r\nGần gũi và nam tính. Dolce and Gabbanna The One EDP khác hẳn người anh em The One EDT của mình, đậm đà mang theo một chút trầm lắng. Làm thức tỉnh khứu giác với mùi Bưởi tươi và Húng Quế, cảm giác như được tận hưởng một ly cocktail mát lạnh, mang hương vị của những buổi hẹn hò dấu mặt, hồi hộp dự đoán xem chàng trai tối nay nàng gặp là ai. Hơi ấm của Gừng cùng Bạch đậu khấu toả ra, toát lên vẻ ngoài lịch lãm của một quý ông hiện đại, hoà quyện vào nhau, mọi hành động của chàng đều khiến cho các cô nàng say mê không muốn rời xa. Dư vị của đàn ông, pha lẫn mùi Thuốc Lá, Hổ phách còn vương vấn trên áo, giữa tiếng nhạc du dương, cám dỗ cảm xúc bằng ánh đèn, một đêm hẹn hò hoàn hảo của những cặp đôi lần đầu gặp gỡ. Dolce & Gabbanna The One Eau De Parfum, mùi hương dành cho những người đàn ông tự tin, thú vị và khó đoán.', 2300000, 'theone.jpg', '100ml', 'Còn hàng', 10),
(6, 'nu', 2, 'qlchinh', 'Miss Dior EDP', 'Hương chính : Hoa hồng Grasse, Hoắc hương, Gỗ hồng\r\nHương đầu : Chanh, Quýt hồng, Tiêu hồng, Cam đỏ, Cam ngọt, Cam bergamot\r\nHương giữa : Hoa hồng Grasse, Hoa hồng Damask, Lá hoa nhài\r\nHương cuối : Gỗ hồng, Hoắc hương\r\n\r\nSong hành cùng những khẩu hiệu mà Dior tâm đắc nhất như “Miss Dior For Love”, “Dior For Love”, “And what about you?” và “What would you do for love?”, Miss Dior giống một lời tuyên bố của tình yêu dành tặng riêng cho những người phụ nữ trẻ trung và tràn đầy sự nhiệt huyết.\r\n\r\nThể hiện rõ những cung bậc cảm xúc trong tình yêu trải qua từng giai đoạn, cha ruột – Francois Demachy khẳng định rằng ông đã dành hết công sức của mình trong nhiều năm để khiến hương thơm của Miss Dior trở nên khiêu gợi hơn bao giờ hết và bùng nổ sức lan tỏa khắp từ đầu cho đến gót chân của người phụ nữ.', 2850000, 'miss-dior-edt-50ml11.jpg', '100ml', 'Còn hàng', 10),
(8, 'nam', 5, 'qlchinh', 'Bleu De Chanel EDP', 'Hương đầu: Chanh vàng, Ớt hồng, Bạc hà\r\nHương giữa: Dưa vàng, Hoa nhài, Gừng\r\nHương cuối: Gỗ tuyết tùng, Hổ phách, Gỗ đàn hương\r\n\r\nNước hoa Bleu de Chanel Eau de Parfum là bản nâng cấp của người đàn anh đi trước Bleu de Chanel Eau de Toilette, ra đời vào mùa hè 2014, Jacques Polge đã không làm những fan nước hoa trung thành của nhà Chanel phải thất vọng. \"Nó còn hơn cả sự mong đợi của chúng tôi\" là câu nói hầu hết của những khách hàng may mắn đầu tiên sở hữu Bleu de Chanel Eau de Parfum tại Paris vào ngày ra mắt. So với bản gốc, Bleu de Chanel Eau de Parfum hể hiện sự nam tính một cách nổi bật hơn, với hương Chanh vàng, Ớt hồng, sự từng trải và tinh tế của một người đàn ông dày dạn kinh nghiệm được bộc lộ một cách trực tiếp và rõ ràng hơn bao giờ hết. Kết thúc hương đầu với sự thanh mát của Bạc hà, là mùi của một người đàn ông manly vừa mới bước ra từ phòng tắm mát lạnh. Bleu de Chanel Eau de Parfum khiến nhiều trái tim phải rung động với sự mạnh mẽ của Gừng, nhưng ẩn chứa sự lịch lãm của Hương hoa nhài quyện lẫn với Dưa vàng. Hãy thử tiến lại gần Bleu de Chanel Eau de Parfum để cảm nhận rõ sự nam tính đáng kinh ngạc đó vào cuối những buổi tiệc, khi Gỗ tuyết tùng và Hổ phách đã cám dỗ bạn bằng sự gần gũi và ấm áp đến bất ngờ.', 3690000, 'chanel-bleu-de-chanel-edp.jpg', '100ml', 'Còn hàng', 10),
(9, 'nam', 2, 'qlchinh', 'Sauvage EDP', 'Hương đầu: Cam bergamot\r\nHương giữa: Oải hương, Tiêu, Hoa hồi, Nhục đậu khấu\r\nHương cuối: Ambroxan, Vanilla\r\n\r\nĐược ra mắt vào năm 2018 - không lâu sau sự thành công vang dội của Christian Dior Sauvage EDT - Dior Sauvage EDP xuất hiện với những cải tiến về mùi hương, hòa quyện về cảm xúc hơn cho người dùng.\r\n\r\nLấy ý tưởng từ những bối cảnh hoang dã nhất, Dior Sauvage EDP gói ghém tông hương thanh cay, mộc mạc mà chân thật trong mình. Bắt đầu bằng Cam chanh tươi mát, Dior Sauvage EDP không đơn giản chỉ dừng lại ở đó, mà tỉ mẩn len lỏi dẫn dắt ta đến tầng hương thứ hai đầy mê hoặc với Oải hương, Tiêu và Nhục đậu khấu.\r\n\r\nTựa như một viên ngọc thô, Dior Sauvage EDP ánh lên nét quyến rũ hoang dại được đơm kết bởi hương hoa, kết hợp khéo léo với chút cay nồng, ngọt nhẹ của gia vị, tạo nên nét nam tính, trưởng thành đến lạ.', 3050000, 'diorsavage.jpg', '100ml', 'Còn hàng', 10),
(10, 'nam', 12, 'qlchinh', 'Pour Homme', 'Nốt hương đầu : Quả Chanh, Tinh dầu Neroli\r\nNốt hương giữa : Gỗ Tuyết Tùng, Xô Thơm\r\nNốt hương cuối : Xạ hương, Hổ phách\r\n\r\nNước hoa Versace Pour Homme như một cơn gió mát lạnh, cuốn trôi đi cái nóng của mùa hè, chứa đựng trong mình dòng chất lỏng màu xanh nhạt, trong veo và đậm đà hương Chanh tươi mát, như giúp mọi người bừng tỉnh. Hội tụ trong mình mọi yếu tố của mội người đàn ông nam tính, tràn đầy sự hưng phấn , hoà quyện cùng mùi của Gỗ Tuyết Tùng như làm tăng thêm vẻ lịch lãm , sang trọng vốn có. Sẵn sàng cho mọi cuộc chơi, bền bỉ dù là chốn văn phòng hay trong các buổi tiệc đêm, làm các quý cô phải lưu luyến bằng mùi Hổ Phách cuối ngày. Versace Pour Homme, chàng trai phong trần, lôi cuốn.', 1850000, 'pourhomme.jpg', '100ml', 'Còn hàng', 10),
(11, 'nu', 7, 'qlchinh', 'Bloom', 'Hương Đầu: Lá Galbanum, Lá lý chua đen, \r\nHương giữa: Hoa huệ trắng, Hoa nhài, Hoa kim ngân\r\nHương cuối: Xạ hương, Gỗ đàn hương\r\n\r\nGucci Bloom Acqua Di Fiori có lẽ là mùi hướng khiến bản thân liên tưởng tới \"màu xanh\" của cây cỏ một cách chân thật nhất mà tôi từng biết. Nếu có một giải bình chọn nước hoa của thiên nhiên, tôi sẽ vote cho Bloom Acqua Di Fiori một phiếu mà không cần phải đắn đo. Nhìn vào Top note của cô nàng này bạn sẽ thấy, Lá cây Galbanum và Lá cây lý chua đen, nó là lá cây, hương thơm của lá cây, hương thơm của diệp lục, và nó có màu xanh, rất xanh của lá cây. Bạn sẽ phải bất ngờ khi lên mình mùi hương này, một khu vườn của mùa xuân đúng nghĩa, cô nàng Bloom Acqua Di Fiori xuống mùi với sự dịu dàng của Hoa huệ trắng và Hoa nhài, tựa như những cánh hoa rơi rụng nằm bình yên trên mặt hồ gợn sóng với những cơn gió mát thoảng qua. Tươi, mát, và độc đáo, Công nàng Bloom Acqua Di Fiori còn mang trong mình sự ngọt ngào và nữ tính của Xạ hương và Gỗ đàn hương nữa, cuốn hút và gợi cảm theo cách tự nhiên đến bất ngờ. ', 2450000, 'gucciblom.jpg', '100ml', 'Còn hàng', 10),
(12, 'nu', 10, 'qlchinh', 'Daisy Eau So Fresh', 'Hương đầu: bưởi, mâm xôi, lê\r\nHương giữa: hoa nhài, hoa hồng, violet, vải, hoa táo\r\nHương cuối: cây tuyết tùng, xạ hương, mận\r\n\r\nNgay từ khoảnh khắc đầu bắt gặp Marc Jacobs Daisy Eau so fresh, chắc hẳn những mê say đã không ngừng thôi thúc thị giác bởi thiết kế đầy ngọt ngào, với những đoá hoa đang tràn đầy nhựa sống, nở rộ muôn sắc màu.\r\nKhông ngừng lại ở vẻ ngoài điệu đà, nữ tính, làn hương của Marc Jacobs Daisy Eau so fresh cũng được dày công \"tẩm ướp\" bởi hương thơm hoa quả vừa đậm đà, vừa thuần tuý như đưa bạn đến một khu vườn cổ tích rợp sắc hương. Bước vào khu vườn ấy, bạn sẽ bị \"chuốc say\" ánh mắt bởi những chùm quả trĩu nặng cứ mải miết đung đưa, hương bưởi, mâm xôi, lê phả ra một làn hương vừa mê đắm, quyến rũ lẫn vào chút hăng say, sinh động, như nàng thiếu nữ đang tuổi đôi mươi, e ấp, dịu dàng như cũng không quên mang theo một tâm hồn tinh nghịch, khiến mọi ánh mắt càng thèm thuồng khám phá.\r\nĐến tầng hương giữa, hoa nhài, hoa hồng, hoa violet và hoa táo lại nắm được cơ hội để chứng minh sự cám dỗ của mình. Không quá ngào ngạt, hỗn hợp hương hoa dẫn truyền một luồng cảm hứng êm ả, nhẹ tênh nhưng ẩn chứa sức sống cuồng nhiệt, đây cũng là note hương giao thoa giữa âm hưởng mộc mạc, bình dị, cùng sự quý phái, sang trọng của những cô Nàng.', 1850000, 'daisy.jpg', '125ml', 'Còn hàng', 10),
(13, 'nu', 1, 'qlchinh', 'Light Blue Eau Intense', 'Hương chính : Chanh, Táo Granny, Xạ hương\r\nHương đầu : Chanh, Táo Granny\r\nHương giữa : Cúc vạn thọ, Hoa nhài\r\nHương cuối : Gỗ Amber, Xạ hương\r\n\r\nĐánh bật đi những ngày hè nắng nóng bằng những hương thơm tươi mát, dịu ngọt của mình, Light Blue Eau Intense như chiếc thuyền đưa bạn thăm quan vùng biển Địa Trung Hải xinh đẹp và mát mẻ.\r\n\r\nCùng sự góp mặt của chuyên gia Olivier Cresp, chai nước hoa được ra mắt vào ngay thời điểm mùa hè năm 2017, nhờ vào chính những tầng hương nổi trội đầy tươi mắt cùng chiến lược “Đúng người, đúng thời điểm” mà Light Blue Eau Intense gặt hái được nhiều sự thành công và trở thành một trong những mùi hương phổ biến trong những ngày nóng, đặc biệt là ở Châu Á.\r\n\r\nVí như mặt nước biển Địa Trung Hải xanh ngát, hương Chanh thơm ngát và vị ngọt riêng biệt từ Táo Granny Smith như những gợn sóng xô vào khứu giác từng đợt, ập vào trong tâm trí một nguồn năng lượng tươi mát, thoải mái mà nơi đây đem tới. Khiến cho những hương thơm của mình trở nên độc đáo hơn để tôn vinh rõ nét đẹp của phụ nữ, hương Cúc vạn thọ và Hoa Nhài gợi lên dáng vẻ dịu dàng, tươi trẻ và gợi cảm của những cô nàng nóng bỏng mang trên mình những bộ áo tắm đầy quyến rũ.', 2300000, 'dg3_1597935465.jpg', '100ml', 'Còn hàng', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `matintuc` varchar(20) NOT NULL,
  `maquanly` varchar(20) NOT NULL,
  `noidungtintuc` text NOT NULL,
  `ngaydangtintuc` datetime NOT NULL,
  PRIMARY KEY (`matintuc`),
  KEY `maquanly` (`maquanly`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE,
  ADD CONSTRAINT `banner_ibfk_2` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`madonhang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietkhuyenmai`
--
ALTER TABLE `chitietkhuyenmai`
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkhuyenmai_ibfk_3` FOREIGN KEY (`makhuyenmai`) REFERENCES `khuyenmai` (`makhuyenmai`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `chitietphieunhap_ibfk_1` FOREIGN KEY (`maphieunhap`) REFERENCES `phieunhap` (`maphieunhap`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietphieunhap_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`machitietdonhang`) REFERENCES `chitietdonhang` (`machitietdonhang`) ON UPDATE CASCADE,
  ADD CONSTRAINT `danhgia_ibfk_3` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhang_ibfk_3` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD CONSTRAINT `nhasanxuat_ibfk_1` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `phieunhap_ibfk_2` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE,
  ADD CONSTRAINT `phieunhap_ibfk_3` FOREIGN KEY (`manhasanxuat`) REFERENCES `nhasanxuat` (`manhasanxuat`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD CONSTRAINT `quantrivien_ibfk_1` FOREIGN KEY (`maquyen`) REFERENCES `quyenquantri` (`maquyen`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`magioitinh`) REFERENCES `gioitinh` (`magioitinh`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_4` FOREIGN KEY (`manhasanxuat`) REFERENCES `nhasanxuat` (`manhasanxuat`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`maquanly`) REFERENCES `quantrivien` (`maquanly`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
