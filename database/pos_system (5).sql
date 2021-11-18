-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2021 lúc 05:52 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pos_system`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banan`
--

CREATE TABLE `banan` (
  `MaBanAn` int(11) NOT NULL,
  `MaCN` int(11) NOT NULL,
  `songuoitoida` int(11) DEFAULT NULL,
  `TenBan` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vitri` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `MoTa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanh`
--

CREATE TABLE `chinhanh` (
  `machinhanh` int(11) NOT NULL,
  `TenChiNhanh` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanhcodanhmuc`
--

CREATE TABLE `chinhanhcodanhmuc` (
  `MaCN` int(11) NOT NULL,
  `Iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chinhanhcomonan`
--

CREATE TABLE `chinhanhcomonan` (
  `MaCN` int(11) NOT NULL,
  `MaMonAn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnh` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `HinhAnh`) VALUES
(1, 'Nước ép', 'photos/icon.jpg'),
(2, 'Hải sản', 'photos/icon-seafood.jpeg'),
(3, 'Tráng miệng', 'photos/icon-dessert.jpeg'),
(4, 'Thịt', 'photos/icon-meat.jpg'),
(5, 'Mì ', 'photos/icon-noodle.jpg'),
(6, 'Bia', 'photos/bia-icon.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDonHang` int(11) NOT NULL,
  `TongTien` int(11) DEFAULT NULL,
  `MaCN` int(11) DEFAULT NULL,
  `maBanAn` int(11) DEFAULT NULL,
  `idKH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangcomonan`
--

CREATE TABLE `donhangcomonan` (
  `madonhang` int(11) NOT NULL,
  `mamonan` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `requestTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `requestTime`) VALUES
(1, '2021-10-26 17:31:15'),
(2, '2021-10-26 18:43:30'),
(3, '2021-10-26 18:43:48'),
(4, '2021-10-26 18:44:19'),
(5, '2021-10-26 18:48:14'),
(6, '2021-10-26 20:13:00'),
(7, '2021-10-26 21:48:27'),
(8, '2021-10-30 17:01:14'),
(9, '2021-10-30 17:01:14'),
(10, '2021-10-30 22:01:47'),
(11, '2021-10-30 22:02:00'),
(12, '2021-10-30 22:02:01'),
(13, '2021-10-30 22:02:02'),
(14, '2021-10-30 22:02:07'),
(15, '2021-10-30 22:02:10'),
(16, '2021-11-15 22:59:16'),
(17, '2021-11-15 22:59:16'),
(18, '2021-11-15 22:59:16'),
(19, '2021-11-15 22:59:16'),
(20, '2021-11-15 22:59:16'),
(21, '2021-11-15 22:59:17'),
(22, '2021-11-15 22:59:25'),
(23, '2021-11-15 22:59:25'),
(24, '2021-11-15 22:59:25'),
(25, '2021-11-15 22:59:25'),
(26, '2021-11-15 22:59:26'),
(27, '2021-11-15 22:59:26'),
(28, '2021-11-15 22:59:26'),
(29, '2021-11-15 22:59:26'),
(30, '2021-11-15 22:59:27'),
(31, '2021-11-15 22:59:27'),
(32, '2021-11-15 22:59:27'),
(33, '2021-11-15 22:59:27'),
(34, '2021-11-15 22:59:28'),
(35, '2021-11-15 22:59:28'),
(36, '2021-11-15 22:59:28'),
(37, '2021-11-15 22:59:28'),
(38, '2021-11-15 22:59:29'),
(39, '2021-11-15 22:59:29'),
(40, '2021-11-15 22:59:29'),
(41, '2021-11-15 22:59:29'),
(42, '2021-11-15 22:59:29'),
(43, '2021-11-15 22:59:29'),
(44, '2021-11-15 22:59:30'),
(45, '2021-11-15 22:59:30'),
(46, '2021-11-15 22:59:30'),
(47, '2021-11-15 22:59:30'),
(48, '2021-11-15 22:59:30'),
(49, '2021-11-15 22:59:31'),
(50, '2021-11-15 22:59:31'),
(51, '2021-11-15 22:59:31'),
(52, '2021-11-15 22:59:31'),
(53, '2021-11-15 22:59:31'),
(54, '2021-11-15 22:59:32'),
(55, '2021-11-15 22:59:32'),
(56, '2021-11-15 22:59:32'),
(57, '2021-11-15 22:59:32'),
(58, '2021-11-15 22:59:32'),
(59, '2021-11-15 22:59:32'),
(60, '2021-11-15 22:59:33'),
(61, '2021-11-15 22:59:33'),
(62, '2021-11-15 22:59:33'),
(63, '2021-11-15 22:59:33'),
(64, '2021-11-15 22:59:33'),
(65, '2021-11-15 22:59:33'),
(66, '2021-11-15 22:59:34'),
(67, '2021-11-15 22:59:34'),
(68, '2021-11-15 22:59:34'),
(69, '2021-11-15 22:59:34'),
(70, '2021-11-15 22:59:34'),
(71, '2021-11-15 22:59:34'),
(72, '2021-11-15 22:59:35'),
(73, '2021-11-15 22:59:35'),
(74, '2021-11-15 22:59:35'),
(75, '2021-11-15 22:59:35'),
(76, '2021-11-15 22:59:35'),
(77, '2021-11-15 22:59:36'),
(78, '2021-11-15 22:59:36'),
(79, '2021-11-15 22:59:36'),
(80, '2021-11-15 22:59:36'),
(81, '2021-11-15 22:59:36'),
(82, '2021-11-15 22:59:37'),
(83, '2021-11-15 22:59:37'),
(84, '2021-11-15 22:59:37'),
(85, '2021-11-15 22:59:37'),
(86, '2021-11-15 22:59:38'),
(87, '2021-11-15 22:59:38'),
(88, '2021-11-15 22:59:39'),
(89, '2021-11-15 22:59:39'),
(90, '2021-11-15 22:59:39'),
(91, '2021-11-15 22:59:39'),
(92, '2021-11-15 22:59:39'),
(93, '2021-11-15 22:59:40'),
(94, '2021-11-15 22:59:40'),
(95, '2021-11-15 22:59:52'),
(96, '2021-11-15 22:59:53'),
(97, '2021-11-16 11:13:28'),
(98, '2021-11-16 11:17:29'),
(99, '2021-11-16 11:18:00'),
(100, '2021-11-16 11:18:04'),
(101, '2021-11-16 11:20:22'),
(102, '2021-11-16 11:22:10'),
(103, '2021-11-16 11:23:51'),
(104, '2021-11-16 11:24:42'),
(105, '2021-11-16 22:07:46'),
(106, '2021-11-18 15:58:04'),
(107, '2021-11-18 16:46:53'),
(108, '2021-11-18 17:52:33'),
(109, '2021-11-18 19:48:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khchonpttt_dh`
--

CREATE TABLE `khchonpttt_dh` (
  `MaDH` int(11) NOT NULL,
  `IDKH` int(11) NOT NULL,
  `MaPTTT` int(11) NOT NULL,
  `TinhTrangThanhToan` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayGio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `MaGiamGia` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TGbatdau` datetime DEFAULT NULL,
  `TGketthuc` datetime DEFAULT NULL,
  `phantramGiamgia` int(11) DEFAULT NULL
) ;

--
-- Đang đổ dữ liệu cho bảng `magiamgia`
--

INSERT INTO `magiamgia` (`MaGiamGia`, `TGbatdau`, `TGketthuc`, `phantramGiamgia`) VALUES
('ABCD', '2021-11-03 22:23:25', '2021-11-22 22:23:25', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `MaMonAn` int(11) NOT NULL,
  `TenMonAn` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `giaTien` int(11) DEFAULT NULL,
  `HinhAnh` varchar(600) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MoTa` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Iddanhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`MaMonAn`, `TenMonAn`, `giaTien`, `HinhAnh`, `MoTa`, `Iddanhmuc`) VALUES
(7, 'Nước ép cam', 50000, 'photos/oranges-juice.jpg', 'Nước cam hay nước cam ép, nước cam vắt là một loại thức uống phổ biến được làm từ cam bằng cách chiết xuất nước từ trái cam tươi bằng việc vắt hay ép thành một loại nước cam tươi', 1),
(8, 'Nước ép cà rốt', 40000, 'photos/carrot-juice.jpeg', 'Nước ép cà rốt được chiết xuất từ ​​trái cà rốt. Nó không chỉ cung cấp kali và vitamin C mà còn rất giàu vitamin A. Uống nước ép cà rốt được cho là giúp tăng cường miễn dịch và cải thiện sức khỏe của mắt và da, trong số các lợi ích khác.', 1),
(9, 'Nước ép việt quất', 60000, 'photos/blueberry-juice.jpg', 'Nam việt quất là một loại thực phẩm quen thuộc ở các vùng có khí hậu mát mẻ, phù hợp để cải thiện sức khỏe.', 1),
(10, 'Nước ép cà chua', 50000, 'photos/Tomato-Juice.jpeg', 'Nước ép cà chua là một loại nước ép thơm ngon, bổ dưỡng được nhiều anh chị em lựa chọn.', 1),
(11, 'Nước ép Cherry', 60000, 'photos/Cherry-juice.jpeg', 'Nước ép từ quả cherry không chỉ mang hương vị chua ngọt thơm ngon, giải nhiệt cơ thể mà còn có nhiều lợi ích cho sức khỏe.', 1),
(12, 'Nước ép nho', 40000, 'photos/grape-juice.jpeg', 'Nước ép nho được nhập khẩu từ vườn trái cây tại Bình Định, đảm bảo chất lượng như Châu Âu.', 1),
(14, 'Tôm chiên giòn', 200000, 'photos/1_tom_chien.png', 'Tôm chiên được chế biến với nguyên liệu tươi sống được nhập từ Gia Lai. ', 2),
(15, 'Tôm sú xiên que', 150000, 'photos/2_tom_xien_que.jpg', 'Tôm sú xiên que được nướng với lửa vừa, tẩm ướp gia vị theo phong cách nước Pháp', 2),
(16, 'Bánh cua Italia', 170000, 'photos/3_banh_cua.jpg', 'Món ăn có nguồn gốc từ đất nước Ý. ', 2),
(17, 'Cá Tuna áp chảo', 250000, 'photos/4_ca_tuna.jpg', 'Cá hồi Tuna được sơ chế và áp chảo.', 2),
(18, 'Tôm đất ', 300000, 'photos/5_tom_hap.jpg', 'Nguồn gốc món ăn từ đất nước mặt trời mọc Nhật Bản', 2),
(19, 'Cá hồi áp chảo', 140000, 'photos/6_ca_hoi_ap_chao.jpg', 'Cá hồi được nhập khẩu từ Anh Quốc.', 2),
(21, 'Kem chuối', 20000, 'photos/1-kem-chuoi.jpg', 'Kem chuối tươi mát cho mùa hè oi bức', 3),
(22, 'Bánh mì socola', 50000, 'photos/2-banh-socola.jpg', 'Bánh sô cô la làm từ sô cô la', 3),
(23, 'Socola Martuk', 70000, 'photos/3-chocola-vien.jpg', 'Sô cô la nhưng được làm từ sô cô là và sữa', 3),
(24, 'Bánh xu kem', 30000, 'photos/4-banh-xu-kem.jpg', 'Bánh xu kem ngon và béo ngậy.', 3),
(25, 'Bánh mì Lacus', 60000, 'photos/5-banh-kem.jpg', 'Bánh mì Lacus có nguồn gốc từ Italia, là một loại một món tráng miệng trong thực đơn của người Italia', 3),
(26, 'Sữa chua Việt Quất', 70000, 'photos/6-sua-chua.jpg', 'Sữa chua chứa nhiều men khoáng tốt cho da và sức khỏe.', 3),
(27, 'Bít tết hun khói', 500000, 'photos/1-bit-tet-hun-khoi.jpg', 'Thịt bò kobe được nhập khẩu từ Nhật Bản đạt chuẩn chất lượng xứ sở mặt trời mọc.', 4),
(29, 'Thịt viên Bungary', 120000, 'photos/3-thit-vien.jpg', 'Một món ăn mang đậm chất nghệ thuật từ đất nước Bungari', 4),
(30, 'Thịt cừu xiên nướng', 100000, 'photos/4-thit-nuong.jpg', 'Thịt cừu nướng dưới lửa than chín vừa phù hợp với rượu Whiskey', 4),
(31, 'Sườn heo chiên giòn', 100000, 'photos/5-suon-heo-chien-gion.jpg', 'Sườn heo non chiên giòn với tỏi hành phi, mang một vị ngon ngọt, mặn mặn.', 4),
(32, 'Thịt kho tàu', 200000, 'photos/6-thit-kho-tau.jpg', 'Món ăn truyền thống của người dân Việt Nam không thể thiếu trong những bữa ăn truyền thống.', 4),
(33, 'Thịt heo Bắc Thảo', 130000, 'photos/7-thit-heo-bac-thao.jpg', 'Thịt heo Bắc Thảo cay giòn sần sật đậm đạ nước sốt truyền thống.', 4),
(34, 'Mì nước trứng', 80000, 'photos/1-my-trung.jpg', 'Sợi mì tươi được chế biến qua 3 giai đoạn, đảm bảo sự hài lòng với quý khách.', 5),
(35, 'Mì cay sợi thịt', 40000, 'photos/2-my-soi-thit.jpg', 'Mì cay sợi thịt Hàn Quốc', 5),
(36, 'Mỳ hải sản', 80000, 'photos/3-my-hai-san.jpg', 'Mì hải sản cay cay xe xe ', 5),
(37, 'Mỳ trộn Ramen', 40000, 'photos/4-my-tron.jpg', 'Ramen là một món ăn truyền thống của người dân Nhật Bản', 5),
(38, 'Mi Ryan', 300000, 'photos/5-my-Ryan.jpg', 'Mì truyền thống của nhà hàng Ryan', 5),
(39, 'Mì khô ngọt', 50000, 'photos/6-my-kho-trung.jpg', 'Mì khô ngọt sợi mì mềm dai.', 5),
(40, 'Mì dĩa Ấn Độ', 90000, 'photos/7-my-an-do.jpg', 'Được chế biến theo phong cách Ấn độ mang đến sự lạ mắt trong mắt thực khách', 5),
(41, 'Carton', 50000, 'photos/1-carton.jpg', 'Bia nhập khẩu từ Canada', 6),
(42, 'Toncani', 50000, 'photos/2-toncani.jpg', 'Toncani là loại bia mang đậm hương vị Anh Quốc', 6),
(43, 'Amster', 50000, 'photos/3-amster.jpg', 'Amster là loại bia mang đậm phong cách hoài cổ nước Ý được sản xuất từ những năm đầu 1900', 6),
(44, 'Brahama', 60000, 'photos/4-brahama.jpg', 'Brahama được nhập khẩu từ Hy Lạp', 6),
(45, 'Astella', 50000, 'photos/5-astella.jpg', 'Mang hương vị thơm của lúa mạch cùng với vị chua của trái chanh non.', 6),
(46, 'Corona', 90000, 'photos/6-corona.jpg', 'Corona là loại bia được sản xuất tại Hungary, với vị chanh tuyết chủ đạo.', 6),
(47, 'Scoth Ale', 80000, 'photos/7-scoth ale.jpg', 'Hương vị ngọt ngào của biển kết hợp với trái cherry', 6),
(48, 'Maredsous', 90000, 'photos/8-mảedsous.jpg', 'Thức uống hoàn hảo cho những quý ngài.', 6),
(49, 'Splurge', 70000, 'photos/8-splurge.jpg', 'Hương vị chủ đạo trầm với mùi hương của gỗ tuyết tùng', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `optionmonan`
--

CREATE TABLE `optionmonan` (
  `idMonAn` int(11) NOT NULL,
  `luachon` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPTTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vkey` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `createdate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `email`, `matkhau`, `vkey`, `verified`, `createdate`) VALUES
(25, 'van.nguyen0097275@hcmut.edu.vn', '$2y$10$B.evAiwCiclojcX3mRLNCuAqxSDDp3MVPYKODgj677mvv2q4U3mDK', '715eed5b77136c48ffcac6ca7b2e346c', 1, '2021-11-18 22:24:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `idTV` int(11) NOT NULL,
  `Hoten` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`idTV`, `Hoten`, `sdt`, `diachi`) VALUES
(24, 'van nguyen', '+84339331739', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindatcho`
--

CREATE TABLE `thongtindatcho` (
  `idTV` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `gio` time NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `songuoi` int(11) NOT NULL,
  `chinhanh` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtindatcho`
--

INSERT INTO `thongtindatcho` (`idTV`, `ngay`, `gio`, `hoten`, `email`, `sdt`, `songuoi`, `chinhanh`, `noidung`) VALUES
(20, '2021-12-03', '23:00:00', 'nguyen ke van', 'van.nguyen0097275@hcmut.edu.vn', '0339331739', 10, 'Ryan Nguyễn Văn Trỗi', '10 món ăn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtintinhtrangbanan`
--

CREATE TABLE `thongtintinhtrangbanan` (
  `MaBanAn` int(11) NOT NULL,
  `Machinhanh` int(11) NOT NULL,
  `ngaygio` datetime NOT NULL,
  `tinhtrangchiemdungban` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ttnganhang`
--

CREATE TABLE `ttnganhang` (
  `MaTTNH` int(11) NOT NULL,
  `TenNganHang` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tttienmat`
--

CREATE TABLE `tttienmat` (
  `MaTTTM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tttindung`
--

CREATE TABLE `tttindung` (
  `MaTD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tvapdungmgg_dh`
--

CREATE TABLE `tvapdungmgg_dh` (
  `idtv` int(11) NOT NULL,
  `maDH` int(11) NOT NULL,
  `MaGiamGia` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tvcotk`
--

CREATE TABLE `tvcotk` (
  `idTK` int(11) NOT NULL,
  `idTV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tvcotk`
--

INSERT INTO `tvcotk` (`idTK`, `idTV`) VALUES
(25, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tv_taobl_monan`
--

CREATE TABLE `tv_taobl_monan` (
  `IDTV` int(11) NOT NULL,
  `MaBL` int(11) NOT NULL,
  `MaMonan` int(11) NOT NULL,
  `DiemDanhGia` int(11) DEFAULT 0,
  `ngaygio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banan`
--
ALTER TABLE `banan`
  ADD PRIMARY KEY (`MaBanAn`,`MaCN`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`);

--
-- Chỉ mục cho bảng `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`machinhanh`);

--
-- Chỉ mục cho bảng `chinhanhcodanhmuc`
--
ALTER TABLE `chinhanhcodanhmuc`
  ADD PRIMARY KEY (`MaCN`,`Iddanhmuc`),
  ADD KEY `Iddanhmuc` (`Iddanhmuc`);

--
-- Chỉ mục cho bảng `chinhanhcomonan`
--
ALTER TABLE `chinhanhcomonan`
  ADD PRIMARY KEY (`MaCN`,`MaMonAn`),
  ADD KEY `MaMonAn` (`MaMonAn`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`);

--
-- Chỉ mục cho bảng `donhangcomonan`
--
ALTER TABLE `donhangcomonan`
  ADD PRIMARY KEY (`madonhang`,`mamonan`),
  ADD KEY `mamonan` (`mamonan`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`);

--
-- Chỉ mục cho bảng `khchonpttt_dh`
--
ALTER TABLE `khchonpttt_dh`
  ADD PRIMARY KEY (`MaDH`,`IDKH`,`MaPTTT`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `MaPTTT` (`MaPTTT`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`MaGiamGia`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `Iddanhmuc` (`Iddanhmuc`);

--
-- Chỉ mục cho bảng `optionmonan`
--
ALTER TABLE `optionmonan`
  ADD PRIMARY KEY (`idMonAn`,`luachon`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPTTT`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`idTV`);

--
-- Chỉ mục cho bảng `thongtindatcho`
--
ALTER TABLE `thongtindatcho`
  ADD PRIMARY KEY (`idTV`,`ngay`,`gio`);

--
-- Chỉ mục cho bảng `thongtintinhtrangbanan`
--
ALTER TABLE `thongtintinhtrangbanan`
  ADD PRIMARY KEY (`MaBanAn`,`Machinhanh`,`ngaygio`),
  ADD KEY `Machinhanh` (`Machinhanh`);

--
-- Chỉ mục cho bảng `ttnganhang`
--
ALTER TABLE `ttnganhang`
  ADD PRIMARY KEY (`MaTTNH`);

--
-- Chỉ mục cho bảng `tttienmat`
--
ALTER TABLE `tttienmat`
  ADD PRIMARY KEY (`MaTTTM`);

--
-- Chỉ mục cho bảng `tttindung`
--
ALTER TABLE `tttindung`
  ADD PRIMARY KEY (`MaTD`);

--
-- Chỉ mục cho bảng `tvapdungmgg_dh`
--
ALTER TABLE `tvapdungmgg_dh`
  ADD PRIMARY KEY (`idtv`,`maDH`,`MaGiamGia`),
  ADD KEY `maDH` (`maDH`),
  ADD KEY `MaGiamGia` (`MaGiamGia`);

--
-- Chỉ mục cho bảng `tvcotk`
--
ALTER TABLE `tvcotk`
  ADD PRIMARY KEY (`idTK`,`idTV`),
  ADD KEY `idTV` (`idTV`);

--
-- Chỉ mục cho bảng `tv_taobl_monan`
--
ALTER TABLE `tv_taobl_monan`
  ADD PRIMARY KEY (`IDTV`,`MaBL`,`MaMonan`),
  ADD KEY `MaBL` (`MaBL`),
  ADD KEY `MaMonan` (`MaMonan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3457;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `idTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chinhanhcodanhmuc`
--
ALTER TABLE `chinhanhcodanhmuc`
  ADD CONSTRAINT `chinhanhcodanhmuc_ibfk_1` FOREIGN KEY (`MaCN`) REFERENCES `chinhanh` (`machinhanh`),
  ADD CONSTRAINT `chinhanhcodanhmuc_ibfk_2` FOREIGN KEY (`Iddanhmuc`) REFERENCES `danhmuc` (`MaDanhMuc`);

--
-- Các ràng buộc cho bảng `chinhanhcomonan`
--
ALTER TABLE `chinhanhcomonan`
  ADD CONSTRAINT `chinhanhcomonan_ibfk_1` FOREIGN KEY (`MaCN`) REFERENCES `chinhanh` (`machinhanh`),
  ADD CONSTRAINT `chinhanhcomonan_ibfk_2` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Các ràng buộc cho bảng `donhangcomonan`
--
ALTER TABLE `donhangcomonan`
  ADD CONSTRAINT `donhangcomonan_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `donhangcomonan_ibfk_2` FOREIGN KEY (`mamonan`) REFERENCES `monan` (`MaMonAn`);

--
-- Các ràng buộc cho bảng `khchonpttt_dh`
--
ALTER TABLE `khchonpttt_dh`
  ADD CONSTRAINT `khchonpttt_dh_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `khchonpttt_dh_ibfk_2` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`idKH`),
  ADD CONSTRAINT `khchonpttt_dh_ibfk_3` FOREIGN KEY (`MaPTTT`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`Iddanhmuc`) REFERENCES `danhmuc` (`MaDanhMuc`);

--
-- Các ràng buộc cho bảng `optionmonan`
--
ALTER TABLE `optionmonan`
  ADD CONSTRAINT `optionmonan_ibfk_1` FOREIGN KEY (`idMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Các ràng buộc cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`idTV`) REFERENCES `khachhang` (`idKH`);

--
-- Các ràng buộc cho bảng `thongtintinhtrangbanan`
--
ALTER TABLE `thongtintinhtrangbanan`
  ADD CONSTRAINT `thongtintinhtrangbanan_ibfk_1` FOREIGN KEY (`MaBanAn`) REFERENCES `banan` (`MaBanAn`),
  ADD CONSTRAINT `thongtintinhtrangbanan_ibfk_2` FOREIGN KEY (`Machinhanh`) REFERENCES `chinhanh` (`machinhanh`);

--
-- Các ràng buộc cho bảng `ttnganhang`
--
ALTER TABLE `ttnganhang`
  ADD CONSTRAINT `ttnganhang_ibfk_1` FOREIGN KEY (`MaTTNH`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Các ràng buộc cho bảng `tttienmat`
--
ALTER TABLE `tttienmat`
  ADD CONSTRAINT `tttienmat_ibfk_1` FOREIGN KEY (`MaTTTM`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Các ràng buộc cho bảng `tttindung`
--
ALTER TABLE `tttindung`
  ADD CONSTRAINT `tttindung_ibfk_1` FOREIGN KEY (`MaTD`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Các ràng buộc cho bảng `tvapdungmgg_dh`
--
ALTER TABLE `tvapdungmgg_dh`
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_1` FOREIGN KEY (`idtv`) REFERENCES `thanhvien` (`idTV`),
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_2` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_3` FOREIGN KEY (`MaGiamGia`) REFERENCES `magiamgia` (`MaGiamGia`);

--
-- Các ràng buộc cho bảng `tvcotk`
--
ALTER TABLE `tvcotk`
  ADD CONSTRAINT `tvcotk_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `taikhoan` (`id_taikhoan`),
  ADD CONSTRAINT `tvcotk_ibfk_2` FOREIGN KEY (`idTV`) REFERENCES `thanhvien` (`idTV`);

--
-- Các ràng buộc cho bảng `tv_taobl_monan`
--
ALTER TABLE `tv_taobl_monan`
  ADD CONSTRAINT `tv_taobl_monan_ibfk_1` FOREIGN KEY (`IDTV`) REFERENCES `thanhvien` (`idTV`),
  ADD CONSTRAINT `tv_taobl_monan_ibfk_2` FOREIGN KEY (`MaBL`) REFERENCES `binhluan` (`MaBL`),
  ADD CONSTRAINT `tv_taobl_monan_ibfk_3` FOREIGN KEY (`MaMonan`) REFERENCES `monan` (`MaMonAn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
