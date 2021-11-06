-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 05:11 AM
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
(1, 'Kem', 'photos/kem.jpg'),
(123, 'Beer', 'photos/beer2.jpg'),
(460, 'Juice', 'photos/juice2.jpg'),
(461, 'Meat', 'photos/beef-steak.jpg'),
(1111, 'Coca', 'photos/coca.png');

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
(15, '2021-10-30 22:02:10');

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
(2, 'hahahaha', 3453, 'photos/heineken-beer.jpg', 'áergsdf', 123),
(5, 'sdfgs', 3245, 'photos/Lemon.jfif', 'ádfgsdf', 460),
(6, 'drfgs', 234, 'photos/kingcrab.jpg', 'ádfg', 461),
(7, 'dfgsd', 3456, 'photos/quinhon-beer.png', 'èdgh', 460),
(8, 'sdfgh', 345, 'photos/orange-juice.png', 'rdgsd', 460),
(9, 'sdfg', 345, 'photos/Apple-juice.jfif', 'xdfgh', 460),
(10, 'sdfghdf', 34534, 'photos/juice2.jpg', 'sdfgds', 460),
(11, 'sdfgsd', 2345234, 'photos/iberico-ham.png', 'dfsghf', 461),
(12, 'sdfgds', 34534, 'photos/fried-chicken.jpg', 'sdfgh', 461),
(13, 'Beefsteak', 500000, 'photos/meat.jpg', 'Bít tết, là một món ăn bao gồm miếng thịt bò lát phẳng, thường được nướng vỉ, áp chảo hoặc nướng broiling ở nhiệt độ cao.', 461),
(14, 'sdfgh', 3456, 'photos/voivoi.jpg', 'dstfhgfg', 461),
(15, 'Kem Chocolate', 100000, 'photos/kem-chocolate.jpg', '', 1),
(16, 'Kem Dâu tây', 150000, 'photos/kem-dau.jpg', 'kem dâu', 1),
(17, 'Kem Bơ', 99000, 'photos/kem-bo.jpg', 'ẻgsdf', 1),
(18, 'Kem Chocolate', 23452, 'photos/kem.jpg', 'ưergs', 1),
(19, 'coca', 20000, 'photos/coca.png', 'Coca là tên gọi chung của bốn loài cây trồng trong họ Erythroxylaceae có nguồn gốc từ miền tây Nam Mỹ.\r\n\r\nCây được trồng như một loại hoa màu sinh lợi ở Argentina, Bolivia, Colombia, Ecuador, và Peru và cả những khu vực bị cấm trồng.[2] Có vài báo cáo cho rằng cây đang được trồng ở miền Nam Mexico như là cây hoa màu sinh lợi và là nguồn thay thế trong khâu buôn lậu sản phẩm cocain.[3] Nó cũng đóng vai trò trong nhiều hoạt động văn hóa truyền thống ở khu vực Andes cũng như ở dãy Sierra Nevada de Santa Marta. Coca được cả thế giới biết đến do chứa hợp chất alkaloid gây ảnh hưởng đến thần kinh là cocain. Lá coca chứa tỉ lệ thấp alkaloid, chỉ giữa 0,25% và 0,77%.[4] Do đó, nhai lá coca hoặc uống trà coca không gây ra tình trạng phê thuốc (hưng phấn, ái kỷ, u sầu) như những người dùng cocain. Chiết xuất từ lá coca được dùng trong Coca-Cola từ năm 1885, và trong khoảng năm 1929 thì cocain bị loại bỏ hoàn toàn trong loại thức uống này.[5][6] Việc chiết xuất cocain từ coca đòi hỏi nhiều dung môi và một quá trình hóa học gọi là chiết xuất acid/base có thể dễ dàng chiết xuất các chất alkaloid từ cây.', 1111),
(20, 'pepsi', 20000, 'photos/pepsi.png', 'dfghdf', 1111),
(21, 'sting', 15000, 'photos/sting.jpg', 'ádfas', 1111);

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
(13, 'van.nguyen0097275@hcmut.edu.vn', '$2y$10$KpYFkKxpIKGydBW0LTAzOeIQcHmErfe5U.bNxkuYHAZa8gGCY/XOK', 'fc584032019581aa80467e5dd5338368', 1, '2021-10-30 22:03:59');

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
(12, 'van nguyen', '+84339331739', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtindatcho`
--

CREATE TABLE `thongtindatcho` (
  `idTV` int(11) NOT NULL,
  `NgayGio` datetime NOT NULL,
  `soNguoiLon` int(11) DEFAULT NULL,
  `soTreEm` int(11) DEFAULT NULL,
  `ghiChu` text COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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
(13, 12);

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
  ADD PRIMARY KEY (`idTV`,`NgayGio`);

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
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `idTV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
