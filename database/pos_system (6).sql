-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 08:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `banan`
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
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `MoTa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `machinhanh` int(11) NOT NULL,
  `TenChiNhanh` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chinhanhcodanhmuc`
--

CREATE TABLE `chinhanhcodanhmuc` (
  `MaCN` int(11) NOT NULL,
  `Iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chinhanhcomonan`
--

CREATE TABLE `chinhanhcomonan` (
  `MaCN` int(11) NOT NULL,
  `MaMonAn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDanhMuc` int(11) NOT NULL,
  `TenDanhMuc` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HinhAnh` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDanhMuc`, `TenDanhMuc`, `HinhAnh`) VALUES
(1, 'N?????c ??p', 'photos/icon.jpg'),
(2, 'H???i s???n', 'photos/icon-seafood.jpeg'),
(3, 'Tr??ng mi???ng', 'photos/icon-dessert.jpeg'),
(4, 'Th???t', 'photos/icon-meat.jpg'),
(5, 'M?? ', 'photos/icon-noodle.jpg'),
(6, 'Bia', 'photos/bia-icon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
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
-- Table structure for table `donhangcomonan`
--

CREATE TABLE `donhangcomonan` (
  `madonhang` int(11) NOT NULL,
  `mamonan` int(11) NOT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `requestTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
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
(109, '2021-11-18 19:48:26'),
(110, '2021-11-23 11:22:59'),
(111, '2021-11-23 13:16:08'),
(112, '2021-11-23 22:39:14'),
(113, '2021-11-24 20:08:24'),
(114, '2021-11-25 17:10:23'),
(115, '2021-11-25 20:07:39'),
(116, '2021-11-25 23:17:27'),
(117, '2021-11-26 11:21:01'),
(118, '2021-11-26 15:38:50'),
(119, '2021-11-26 17:55:05'),
(120, '2021-11-26 21:56:33'),
(121, '2021-11-26 22:19:39'),
(122, '2021-11-26 22:19:54'),
(123, '2021-11-27 00:45:23'),
(124, '2021-11-27 09:46:21'),
(125, '2021-11-27 11:13:22'),
(126, '2021-11-27 13:25:27'),
(127, '2021-11-27 14:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `khchonpttt_dh`
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
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `MaGiamGia` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TGbatdau` datetime DEFAULT NULL,
  `TGketthuc` datetime DEFAULT NULL,
  `phantramGiamgia` int(11) DEFAULT NULL
) ;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`MaGiamGia`, `TGbatdau`, `TGketthuc`, `phantramGiamgia`) VALUES
('ABCD', '2021-11-03 22:23:25', '2022-11-22 22:23:25', 25);

-- --------------------------------------------------------

--
-- Table structure for table `monan`
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
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`MaMonAn`, `TenMonAn`, `giaTien`, `HinhAnh`, `MoTa`, `Iddanhmuc`) VALUES
(7, 'N?????c ??p cam', 50000, 'photos/oranges-juice.jpg', 'N?????c cam hay n?????c cam ??p, n?????c cam v???t l?? m???t lo???i th???c u???ng ph??? bi???n ???????c l??m t??? cam b???ng c??ch chi???t xu???t n?????c t??? tr??i cam t????i b???ng vi???c v???t hay ??p th??nh m???t lo???i n?????c cam t????i', 1),
(8, 'N?????c ??p c?? r???t', 40000, 'photos/carrot-juice.jpeg', 'N?????c ??p c?? r???t ???????c chi???t xu???t t??? ??????tr??i c?? r???t. N?? kh??ng ch??? cung c???p kali v?? vitamin C m?? c??n r???t gi??u vitamin A. U???ng n?????c ??p c?? r???t ???????c cho l?? gi??p t??ng c?????ng mi???n d???ch v?? c???i thi???n s???c kh???e c???a m???t v?? da, trong s??? c??c l???i ??ch kh??c.', 1),
(9, 'N?????c ??p vi???t qu???t', 60000, 'photos/blueberry-juice.jpg', 'Nam vi???t qu???t l?? m???t lo???i th???c ph???m quen thu???c ??? c??c v??ng c?? kh?? h???u m??t m???, ph?? h???p ????? c???i thi???n s???c kh???e.', 1),
(10, 'N?????c ??p c?? chua', 50000, 'photos/Tomato-Juice.jpeg', 'N?????c ??p c?? chua l?? m???t lo???i n?????c ??p th??m ngon, b??? d?????ng ???????c nhi???u anh ch??? em l???a ch???n.', 1),
(11, 'N?????c ??p Cherry', 60000, 'photos/Cherry-juice.jpeg', 'N?????c ??p t??? qu??? cherry kh??ng ch??? mang h????ng v??? chua ng???t th??m ngon, gi???i nhi???t c?? th??? m?? c??n c?? nhi???u l???i ??ch cho s???c kh???e.', 1),
(12, 'N?????c ??p nho', 40000, 'photos/grape-juice.jpeg', 'N?????c ??p nho ???????c nh???p kh???u t??? v?????n tr??i c??y t???i B??nh ?????nh, ?????m b???o ch???t l?????ng nh?? Ch??u ??u.', 1),
(14, 'T??m chi??n gi??n', 200000, 'photos/1_tom_chien.png', 'T??m chi??n ???????c ch??? bi???n v???i nguy??n li???u t????i s???ng ???????c nh???p t??? Gia Lai. ', 2),
(15, 'T??m s?? xi??n que', 150000, 'photos/2_tom_xien_que.jpg', 'T??m s?? xi??n que ???????c n?????ng v???i l???a v???a, t???m ?????p gia v??? theo phong c??ch n?????c Ph??p', 2),
(16, 'B??nh cua Italia', 170000, 'photos/3_banh_cua.jpg', 'M??n ??n c?? ngu???n g???c t??? ?????t n?????c ??. ', 2),
(17, 'C?? Tuna ??p ch???o', 250000, 'photos/4_ca_tuna.jpg', 'C?? h???i Tuna ???????c s?? ch??? v?? ??p ch???o.', 2),
(18, 'T??m ?????t ', 300000, 'photos/5_tom_hap.jpg', 'Ngu???n g???c m??n ??n t??? ?????t n?????c m???t tr???i m???c Nh???t B???n', 2),
(19, 'C?? h???i ??p ch???o', 140000, 'photos/6_ca_hoi_ap_chao.jpg', 'C?? h???i ???????c nh???p kh???u t??? Anh Qu???c.', 2),
(21, 'Kem chu???i', 20000, 'photos/1-kem-chuoi.jpg', 'Kem chu???i t????i m??t cho m??a h?? oi b???c', 3),
(22, 'B??nh m?? socola', 50000, 'photos/2-banh-socola.jpg', 'B??nh s?? c?? la l??m t??? s?? c?? la', 3),
(23, 'Socola Martuk', 70000, 'photos/3-chocola-vien.jpg', 'S?? c?? la nh??ng ???????c l??m t??? s?? c?? l?? v?? s???a', 3),
(24, 'B??nh xu kem', 30000, 'photos/4-banh-xu-kem.jpg', 'B??nh xu kem ngon v?? b??o ng???y.', 3),
(25, 'B??nh m?? Lacus', 60000, 'photos/5-banh-kem.jpg', 'B??nh m?? Lacus c?? ngu???n g???c t??? Italia, l?? m???t lo???i m???t m??n tr??ng mi???ng trong th???c ????n c???a ng?????i Italia', 3),
(26, 'S???a chua Vi???t Qu???t', 70000, 'photos/6-sua-chua.jpg', 'S???a chua ch???a nhi???u men kho??ng t???t cho da v?? s???c kh???e.', 3),
(27, 'B??t t???t hun kh??i', 500000, 'photos/1-bit-tet-hun-khoi.jpg', 'Th???t b?? kobe ???????c nh???p kh???u t??? Nh???t B???n ?????t chu???n ch???t l?????ng x??? s??? m???t tr???i m???c.', 4),
(29, 'Th???t vi??n Bungary', 120000, 'photos/3-thit-vien.jpg', 'M???t m??n ??n mang ?????m ch???t ngh??? thu???t t??? ?????t n?????c Bungari', 4),
(30, 'Th???t c???u xi??n n?????ng', 100000, 'photos/4-thit-nuong.jpg', 'Th???t c???u n?????ng d?????i l???a than ch??n v???a ph?? h???p v???i r?????u Whiskey', 4),
(31, 'S?????n heo chi??n gi??n', 100000, 'photos/5-suon-heo-chien-gion.jpg', 'S?????n heo non chi??n gi??n v???i t???i h??nh phi, mang m???t v??? ngon ng???t, m???n m???n.', 4),
(32, 'Th???t kho t??u', 200000, 'photos/6-thit-kho-tau.jpg', 'M??n ??n truy???n th???ng c???a ng?????i d??n Vi???t Nam kh??ng th??? thi???u trong nh???ng b???a ??n truy???n th???ng.', 4),
(33, 'Th???t heo B???c Th???o', 130000, 'photos/7-thit-heo-bac-thao.jpg', 'Th???t heo B???c Th???o cay gi??n s???n s???t ?????m ????? n?????c s???t truy???n th???ng.', 4),
(34, 'M?? n?????c tr???ng', 80000, 'photos/1-my-trung.jpg', 'S???i m?? t????i ???????c ch??? bi???n qua 3 giai ??o???n, ?????m b???o s??? h??i l??ng v???i qu?? kh??ch.', 5),
(35, 'M?? cay s???i th???t', 40000, 'photos/2-my-soi-thit.jpg', 'M?? cay s???i th???t H??n Qu???c', 5),
(36, 'M??? h???i s???n', 80000, 'photos/3-my-hai-san.jpg', 'M?? h???i s???n cay cay xe xe ', 5),
(37, 'M??? tr???n Ramen', 40000, 'photos/4-my-tron.jpg', 'Ramen l?? m???t m??n ??n truy???n th???ng c???a ng?????i d??n Nh???t B???n', 5),
(38, 'Mi Ryan', 300000, 'photos/5-my-Ryan.jpg', 'M?? truy???n th???ng c???a nh?? h??ng Ryan', 5),
(39, 'M?? kh?? ng???t', 50000, 'photos/6-my-kho-trung.jpg', 'M?? kh?? ng???t s???i m?? m???m dai.', 5),
(40, 'M?? d??a ???n ?????', 90000, 'photos/7-my-an-do.jpg', '???????c ch??? bi???n theo phong c??ch ???n ????? mang ?????n s??? l??? m???t trong m???t th???c kh??ch', 5),
(41, 'Carton', 50000, 'photos/1-carton.jpg', 'Bia nh???p kh???u t??? Canada', 6),
(42, 'Toncani', 50000, 'photos/2-toncani.jpg', 'Toncani l?? lo???i bia mang ?????m h????ng v??? Anh Qu???c', 6),
(43, 'Amster', 50000, 'photos/3-amster.jpg', 'Amster l?? lo???i bia mang ?????m phong c??ch ho??i c??? n?????c ?? ???????c s???n xu???t t??? nh???ng n??m ?????u 1900', 6),
(44, 'Brahama', 60000, 'photos/4-brahama.jpg', 'Brahama ???????c nh???p kh???u t??? Hy L???p', 6),
(45, 'Astella', 50000, 'photos/5-astella.jpg', 'Mang h????ng v??? th??m c???a l??a m???ch c??ng v???i v??? chua c???a tr??i chanh non.', 6),
(46, 'Corona', 90000, 'photos/6-corona.jpg', 'Corona l?? lo???i bia ???????c s???n xu???t t???i Hungary, v???i v??? chanh tuy???t ch??? ?????o.', 6),
(47, 'Scoth Ale', 80000, 'photos/7-scoth ale.jpg', 'H????ng v??? ng???t ng??o c???a bi???n k???t h???p v???i tr??i cherry', 6),
(48, 'Maredsous', 90000, 'photos/8-m???edsous.jpg', 'Th???c u???ng ho??n h???o cho nh???ng qu?? ng??i.', 6),
(49, 'Splurge', 70000, 'photos/8-splurge.jpg', 'H????ng v??? ch??? ?????o tr???m v???i m??i h????ng c???a g??? tuy???t t??ng', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `bangcap` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanviennhapkho`
--

CREATE TABLE `nhanviennhapkho` (
  `idNVNK` int(11) NOT NULL,
  `tocdogophim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvientuvan`
--

CREATE TABLE `nhanvientuvan` (
  `idNVTV` int(11) NOT NULL,
  `trinhdongoaingu` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvienxuli`
--

CREATE TABLE `nhanvienxuli` (
  `idNVXL` int(11) NOT NULL,
  `tocdoxuly` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nvcotk`
--

CREATE TABLE `nvcotk` (
  `idNV` int(11) NOT NULL,
  `idTK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `optionmonan`
--

CREATE TABLE `optionmonan` (
  `idMonAn` int(11) NOT NULL,
  `luachon` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `MaPTTT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qtvcotk`
--

CREATE TABLE `qtvcotk` (
  `idQTV` int(11) NOT NULL,
  `idTK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `qtvcotk`
--

INSERT INTO `qtvcotk` (`idQTV`, `idTK`) VALUES
(1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `quantrivien`
--

CREATE TABLE `quantrivien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sdt` varchar(15) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `quantrivien`
--

INSERT INTO `quantrivien` (`id`, `hoten`, `sdt`, `email`) VALUES
(1, 'Nguyen Ke Van', '0339331739', 'van.nguyen0097275@hcmut.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `vkey` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `createdate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `email`, `matkhau`, `vkey`, `verified`, `createdate`) VALUES
(27, 'admin@gmail.com', '$2y$10$vBQp86aZf/10WWV6wgiH8exbdxV8TPisUrtOXL4o5CztpqNkJ8U0m', NULL, 1, '2021-11-26 21:49:15'),
(29, 'van.nguyen0097275@hcmut.edu.vn', '$2y$10$MGkYeWiYPBPBs9lPyhnbWOZYsWNOMssit475DeUUe/ZHKU.bCrbcu', '65db402a9f85eac1b09445641302febf', 1, '2021-11-27 11:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `idTV` int(11) NOT NULL,
  `Hoten` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `diachi` varchar(400) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`idTV`, `Hoten`, `sdt`, `diachi`) VALUES
(26, 'vandeptrai', '0339331739', '1801 asd'),
(27, 'nguyen ke van', '0339331739', '180 tr???n h??ng ?????o'),
(28, 'nguyen ke van', '0339331739', '180 tr???n h??ng ?????o'),
(29, 'nguyen ke van', '0339331739', '18 tr???n h??ng ?????o'),
(32, 'van nguyen', '+84339331739', '180 tr???n h??ng ?????o');

-- --------------------------------------------------------

--
-- Table structure for table `thongtindatcho`
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
-- Dumping data for table `thongtindatcho`
--

INSERT INTO `thongtindatcho` (`idTV`, `ngay`, `gio`, `hoten`, `email`, `sdt`, `songuoi`, `chinhanh`, `noidung`) VALUES
(20, '2021-12-03', '23:00:00', 'nguyen ke van', 'van.nguyen0097275@hcmut.edu.vn', '0339331739', 10, 'Ryan Nguy???n V??n Tr???i', '10 m??n ??n'),
(25, '2021-12-03', '23:00:00', 'nguyen ke van', 'van.nguyen0097275@hcmut.edu.vn', '0339331739', 10, 'Ryan ?????ng Kh???i', 'M??n ??n A');

-- --------------------------------------------------------

--
-- Table structure for table `thongtintinhtrangbanan`
--

CREATE TABLE `thongtintinhtrangbanan` (
  `MaBanAn` int(11) NOT NULL,
  `Machinhanh` int(11) NOT NULL,
  `ngaygio` datetime NOT NULL,
  `tinhtrangchiemdungban` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ttnganhang`
--

CREATE TABLE `ttnganhang` (
  `MaTTNH` int(11) NOT NULL,
  `TenNganHang` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tttienmat`
--

CREATE TABLE `tttienmat` (
  `MaTTTM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tttindung`
--

CREATE TABLE `tttindung` (
  `MaTD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tvapdungmgg_dh`
--

CREATE TABLE `tvapdungmgg_dh` (
  `idtv` int(11) NOT NULL,
  `maDH` int(11) NOT NULL,
  `MaGiamGia` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tvcotk`
--

CREATE TABLE `tvcotk` (
  `idTK` int(11) NOT NULL,
  `idTV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tvcotk`
--

INSERT INTO `tvcotk` (`idTK`, `idTV`) VALUES
(29, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tv_taobl_monan`
--

CREATE TABLE `tv_taobl_monan` (
  `IDTV` int(11) NOT NULL,
  `MaBL` int(11) NOT NULL,
  `MaMonan` int(11) NOT NULL,
  `DiemDanhGia` int(11) DEFAULT 0,
  `ngaygio` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banan`
--
ALTER TABLE `banan`
  ADD PRIMARY KEY (`MaBanAn`,`MaCN`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`);

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`machinhanh`);

--
-- Indexes for table `chinhanhcodanhmuc`
--
ALTER TABLE `chinhanhcodanhmuc`
  ADD PRIMARY KEY (`MaCN`,`Iddanhmuc`),
  ADD KEY `Iddanhmuc` (`Iddanhmuc`);

--
-- Indexes for table `chinhanhcomonan`
--
ALTER TABLE `chinhanhcomonan`
  ADD PRIMARY KEY (`MaCN`,`MaMonAn`),
  ADD KEY `MaMonAn` (`MaMonAn`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDanhMuc`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDonHang`);

--
-- Indexes for table `donhangcomonan`
--
ALTER TABLE `donhangcomonan`
  ADD PRIMARY KEY (`madonhang`,`mamonan`),
  ADD KEY `mamonan` (`mamonan`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`);

--
-- Indexes for table `khchonpttt_dh`
--
ALTER TABLE `khchonpttt_dh`
  ADD PRIMARY KEY (`MaDH`,`IDKH`,`MaPTTT`),
  ADD KEY `IDKH` (`IDKH`),
  ADD KEY `MaPTTT` (`MaPTTT`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`MaGiamGia`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `Iddanhmuc` (`Iddanhmuc`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nhanviennhapkho`
--
ALTER TABLE `nhanviennhapkho`
  ADD PRIMARY KEY (`idNVNK`);

--
-- Indexes for table `nhanvientuvan`
--
ALTER TABLE `nhanvientuvan`
  ADD PRIMARY KEY (`idNVTV`);

--
-- Indexes for table `nhanvienxuli`
--
ALTER TABLE `nhanvienxuli`
  ADD PRIMARY KEY (`idNVXL`);

--
-- Indexes for table `nvcotk`
--
ALTER TABLE `nvcotk`
  ADD PRIMARY KEY (`idNV`);

--
-- Indexes for table `optionmonan`
--
ALTER TABLE `optionmonan`
  ADD PRIMARY KEY (`idMonAn`,`luachon`);

--
-- Indexes for table `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`MaPTTT`);

--
-- Indexes for table `qtvcotk`
--
ALTER TABLE `qtvcotk`
  ADD PRIMARY KEY (`idQTV`);

--
-- Indexes for table `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`idTV`);

--
-- Indexes for table `thongtindatcho`
--
ALTER TABLE `thongtindatcho`
  ADD PRIMARY KEY (`idTV`,`ngay`,`gio`);

--
-- Indexes for table `thongtintinhtrangbanan`
--
ALTER TABLE `thongtintinhtrangbanan`
  ADD PRIMARY KEY (`MaBanAn`,`Machinhanh`,`ngaygio`),
  ADD KEY `Machinhanh` (`Machinhanh`);

--
-- Indexes for table `ttnganhang`
--
ALTER TABLE `ttnganhang`
  ADD PRIMARY KEY (`MaTTNH`);

--
-- Indexes for table `tttienmat`
--
ALTER TABLE `tttienmat`
  ADD PRIMARY KEY (`MaTTTM`);

--
-- Indexes for table `tttindung`
--
ALTER TABLE `tttindung`
  ADD PRIMARY KEY (`MaTD`);

--
-- Indexes for table `tvapdungmgg_dh`
--
ALTER TABLE `tvapdungmgg_dh`
  ADD PRIMARY KEY (`idtv`,`maDH`,`MaGiamGia`),
  ADD KEY `maDH` (`maDH`),
  ADD KEY `MaGiamGia` (`MaGiamGia`);

--
-- Indexes for table `tvcotk`
--
ALTER TABLE `tvcotk`
  ADD PRIMARY KEY (`idTK`,`idTV`),
  ADD KEY `idTV` (`idTV`);

--
-- Indexes for table `tv_taobl_monan`
--
ALTER TABLE `tv_taobl_monan`
  ADD PRIMARY KEY (`IDTV`,`MaBL`,`MaMonan`),
  ADD KEY `MaBL` (`MaBL`),
  ADD KEY `MaMonan` (`MaMonan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDanhMuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3457;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanviennhapkho`
--
ALTER TABLE `nhanviennhapkho`
  MODIFY `idNVNK` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvientuvan`
--
ALTER TABLE `nhanvientuvan`
  MODIFY `idNVTV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvienxuli`
--
ALTER TABLE `nhanvienxuli`
  MODIFY `idNVXL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quantrivien`
--
ALTER TABLE `quantrivien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `idTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chinhanhcodanhmuc`
--
ALTER TABLE `chinhanhcodanhmuc`
  ADD CONSTRAINT `chinhanhcodanhmuc_ibfk_1` FOREIGN KEY (`MaCN`) REFERENCES `chinhanh` (`machinhanh`),
  ADD CONSTRAINT `chinhanhcodanhmuc_ibfk_2` FOREIGN KEY (`Iddanhmuc`) REFERENCES `danhmuc` (`MaDanhMuc`);

--
-- Constraints for table `chinhanhcomonan`
--
ALTER TABLE `chinhanhcomonan`
  ADD CONSTRAINT `chinhanhcomonan_ibfk_1` FOREIGN KEY (`MaCN`) REFERENCES `chinhanh` (`machinhanh`),
  ADD CONSTRAINT `chinhanhcomonan_ibfk_2` FOREIGN KEY (`MaMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Constraints for table `donhangcomonan`
--
ALTER TABLE `donhangcomonan`
  ADD CONSTRAINT `donhangcomonan_ibfk_1` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `donhangcomonan_ibfk_2` FOREIGN KEY (`mamonan`) REFERENCES `monan` (`MaMonAn`);

--
-- Constraints for table `khchonpttt_dh`
--
ALTER TABLE `khchonpttt_dh`
  ADD CONSTRAINT `khchonpttt_dh_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `khchonpttt_dh_ibfk_2` FOREIGN KEY (`IDKH`) REFERENCES `khachhang` (`idKH`),
  ADD CONSTRAINT `khchonpttt_dh_ibfk_3` FOREIGN KEY (`MaPTTT`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`Iddanhmuc`) REFERENCES `danhmuc` (`MaDanhMuc`);

--
-- Constraints for table `nhanviennhapkho`
--
ALTER TABLE `nhanviennhapkho`
  ADD CONSTRAINT `nhanviennhapkho_ibfk_1` FOREIGN KEY (`idNVNK`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `nhanvientuvan`
--
ALTER TABLE `nhanvientuvan`
  ADD CONSTRAINT `nhanvientuvan_ibfk_1` FOREIGN KEY (`idNVTV`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `nhanvienxuli`
--
ALTER TABLE `nhanvienxuli`
  ADD CONSTRAINT `nhanvienxuli_ibfk_1` FOREIGN KEY (`idNVXL`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `nvcotk`
--
ALTER TABLE `nvcotk`
  ADD CONSTRAINT `nvcotk_ibfk_1` FOREIGN KEY (`idNV`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `optionmonan`
--
ALTER TABLE `optionmonan`
  ADD CONSTRAINT `optionmonan_ibfk_1` FOREIGN KEY (`idMonAn`) REFERENCES `monan` (`MaMonAn`);

--
-- Constraints for table `qtvcotk`
--
ALTER TABLE `qtvcotk`
  ADD CONSTRAINT `qtvcotk_ibfk_1` FOREIGN KEY (`idQTV`) REFERENCES `quantrivien` (`id`);

--
-- Constraints for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD CONSTRAINT `thanhvien_ibfk_1` FOREIGN KEY (`idTV`) REFERENCES `khachhang` (`idKH`);

--
-- Constraints for table `thongtintinhtrangbanan`
--
ALTER TABLE `thongtintinhtrangbanan`
  ADD CONSTRAINT `thongtintinhtrangbanan_ibfk_1` FOREIGN KEY (`MaBanAn`) REFERENCES `banan` (`MaBanAn`),
  ADD CONSTRAINT `thongtintinhtrangbanan_ibfk_2` FOREIGN KEY (`Machinhanh`) REFERENCES `chinhanh` (`machinhanh`);

--
-- Constraints for table `ttnganhang`
--
ALTER TABLE `ttnganhang`
  ADD CONSTRAINT `ttnganhang_ibfk_1` FOREIGN KEY (`MaTTNH`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Constraints for table `tttienmat`
--
ALTER TABLE `tttienmat`
  ADD CONSTRAINT `tttienmat_ibfk_1` FOREIGN KEY (`MaTTTM`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Constraints for table `tttindung`
--
ALTER TABLE `tttindung`
  ADD CONSTRAINT `tttindung_ibfk_1` FOREIGN KEY (`MaTD`) REFERENCES `phuongthucthanhtoan` (`MaPTTT`);

--
-- Constraints for table `tvapdungmgg_dh`
--
ALTER TABLE `tvapdungmgg_dh`
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_1` FOREIGN KEY (`idtv`) REFERENCES `thanhvien` (`idTV`),
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_2` FOREIGN KEY (`maDH`) REFERENCES `donhang` (`MaDonHang`),
  ADD CONSTRAINT `tvapdungmgg_dh_ibfk_3` FOREIGN KEY (`MaGiamGia`) REFERENCES `magiamgia` (`MaGiamGia`);

--
-- Constraints for table `tvcotk`
--
ALTER TABLE `tvcotk`
  ADD CONSTRAINT `tvcotk_ibfk_1` FOREIGN KEY (`idTK`) REFERENCES `taikhoan` (`id_taikhoan`),
  ADD CONSTRAINT `tvcotk_ibfk_2` FOREIGN KEY (`idTV`) REFERENCES `thanhvien` (`idTV`);

--
-- Constraints for table `tv_taobl_monan`
--
ALTER TABLE `tv_taobl_monan`
  ADD CONSTRAINT `tv_taobl_monan_ibfk_1` FOREIGN KEY (`IDTV`) REFERENCES `thanhvien` (`idTV`),
  ADD CONSTRAINT `tv_taobl_monan_ibfk_2` FOREIGN KEY (`MaBL`) REFERENCES `binhluan` (`MaBL`),
  ADD CONSTRAINT `tv_taobl_monan_ibfk_3` FOREIGN KEY (`MaMonan`) REFERENCES `monan` (`MaMonAn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
