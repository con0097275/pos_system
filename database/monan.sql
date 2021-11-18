-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 03:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`MaMonAn`),
  ADD KEY `Iddanhmuc` (`Iddanhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `MaMonAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`Iddanhmuc`) REFERENCES `danhmuc` (`MaDanhMuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
