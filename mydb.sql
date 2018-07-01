-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for mydb
DROP DATABASE IF EXISTS `mydb`;
CREATE DATABASE IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mydb`;

-- Dumping structure for table mydb.address
DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `xã/phường` varchar(255) NOT NULL,
  `huyện/quận` varchar(255) NOT NULL,
  `tỉnh/thành phố` varchar(255) NOT NULL,
  `quốc gia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.address: ~0 rows (approximately)
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;

-- Dumping structure for table mydb.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CategoryID` int(10) NOT NULL,
  `CategoryName` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `left` int(11) DEFAULT NULL,
  `right` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.category: ~19 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`CategoryID`, `CategoryName`, `Description`, `left`, `right`, `parent_id`) VALUES
	(1, 'Điện thoại-Máy tính bảng', '', 1, 8, NULL),
	(2, 'Tivi-Thiết bị nghe nhìn', '', 9, 18, NULL),
	(3, 'Phụ kiện-Thiết bị số', '', 19, 20, NULL),
	(4, 'Laptop-Thiết bị  IT', '', 21, 26, NULL),
	(5, 'Máy ảnh-Quay phim', '', 27, 28, NULL),
	(6, 'Điện gia dụng-Điện lạnh', '', 29, 30, NULL),
	(7, 'Hàng tiêu dùng thực phẩm', '', 31, 32, NULL),
	(8, 'Sách', '', 33, 34, NULL),
	(9, 'Đồ chơi em bé', '', 35, 36, NULL),
	(10, 'Quần áo', '', 37, 38, NULL),
	(11, 'Điện thoại smartphone', '', 2, 3, 1),
	(12, 'Điện thoại phổ thông', '', 4, 5, 1),
	(13, 'Máy tính bảng', '', 6, 7, 1),
	(14, 'Tivi', '', 10, 11, 2),
	(15, 'Loa', '', 12, 13, 2),
	(16, 'Đầu cd', '', 14, 15, 2),
	(17, 'Amply', '', 16, 17, 2),
	(18, 'Laptop', '', 22, 23, 4),
	(19, 'Máy vi tính', '', 24, 25, 4);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table mydb.favorite_product
DROP TABLE IF EXISTS `favorite_product`;
CREATE TABLE IF NOT EXISTS `favorite_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_favorite_product_product1_idx` (`product_id`),
  KEY `fk_favorite_product_users1_idx` (`users_id`),
  CONSTRAINT `fk_favorite_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_favorite_product_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.favorite_product: ~0 rows (approximately)
/*!40000 ALTER TABLE `favorite_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorite_product` ENABLE KEYS */;

-- Dumping structure for table mydb.manufacture
DROP TABLE IF EXISTS `manufacture`;
CREATE TABLE IF NOT EXISTS `manufacture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacture_name` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.manufacture: ~3 rows (approximately)
/*!40000 ALTER TABLE `manufacture` DISABLE KEYS */;
INSERT INTO `manufacture` (`id`, `manufacture_name`, `country`) VALUES
	(1, 'apple', 'mỹ'),
	(2, 'samsung', 'hàn'),
	(3, 'nokia', 'nhật');
/*!40000 ALTER TABLE `manufacture` ENABLE KEYS */;

-- Dumping structure for table mydb.options
DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(45) DEFAULT NULL,
  `option_group_optiongroup_id` int(11) NOT NULL,
  PRIMARY KEY (`option_id`),
  KEY `fk_options_option_group1_idx` (`option_group_optiongroup_id`),
  CONSTRAINT `fk_options_option_group1` FOREIGN KEY (`option_group_optiongroup_id`) REFERENCES `option_group` (`optiongroup_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.options: ~35 rows (approximately)
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` (`option_id`, `option_name`, `option_group_optiongroup_id`) VALUES
	(1, ' cong hình chuối', 1),
	(2, '2.45 inch QVGA', 2),
	(3, 'Qualcomm Snapdragon 450', 3),
	(4, '512MB', 4),
	(5, ' Kháng nước chuẩn IP52', 5),
	(6, '2MP', 6),
	(7, 'trắng', 7),
	(8, 'hồng', 7),
	(9, 'đen', 7),
	(10, 'Nguyên khối kim loại', 1),
	(11, 'Super AMOLED, 5.6 inch, Full HD+', 2),
	(12, 'Exynos 7870 8 nhân 64-bit', 3),
	(13, '3GB', 4),
	(14, 'Mở khóa bằng vân tay', 5),
	(15, ' 16MP / 16MP', 6),
	(16, ' Intel Core i5-7200U', 8),
	(17, ' DDR4 4GB (2 khe cắm)', 9),
	(18, 'HDD 1TB', 10),
	(19, ' Intel HD Graphics 620', 11),
	(20, ' 15.6 Inches', 12),
	(21, 'Free Dos', 13),
	(22, 'Cell Lithium-ion', 14),
	(23, 'Intel Core i5-7300HQ Processor', 8),
	(24, '8GB', 9),
	(25, '1TB SATA3 (5400rpm)', 10),
	(26, 'NVIDIA GeForce GTX 1050 + Intel HD Graphics 6', 11),
	(27, '15.6 inch FHD (1920 x 1080) IPS, Anti-glare', 12),
	(28, 'Windows 10 home', 13),
	(29, '4 Cell 48 Whrs', 14),
	(30, 'abc', 15),
	(31, 'abc', 16),
	(32, 'Tivi LED 40 inch, Full HD (1920 x 1080 px)', 17),
	(33, 'BMR 200Hz', 18),
	(34, 'Vivid Digital Pro', 19),
	(35, 'Chức năng khử nhiễu hạt giúp hình ảnh rõ nét ', 20);
/*!40000 ALTER TABLE `options` ENABLE KEYS */;

-- Dumping structure for table mydb.option_group
DROP TABLE IF EXISTS `option_group`;
CREATE TABLE IF NOT EXISTS `option_group` (
  `optiongroup_id` int(11) NOT NULL AUTO_INCREMENT,
  `optiongroup_name` varchar(45) NOT NULL,
  `category_CategoryID` int(10) NOT NULL,
  PRIMARY KEY (`optiongroup_id`,`category_CategoryID`),
  KEY `fk_option_group_category1_idx` (`category_CategoryID`),
  CONSTRAINT `fk_option_group_category1` FOREIGN KEY (`category_CategoryID`) REFERENCES `category` (`CategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.option_group: ~20 rows (approximately)
/*!40000 ALTER TABLE `option_group` DISABLE KEYS */;
INSERT INTO `option_group` (`optiongroup_id`, `optiongroup_name`, `category_CategoryID`) VALUES
	(1, 'thiết kế', 11),
	(2, 'màn hình', 11),
	(3, 'cpu', 11),
	(4, 'ram', 11),
	(5, 'tính năng', 11),
	(6, 'cammera', 11),
	(7, 'màu', 11),
	(8, 'chip', 18),
	(9, 'ram', 18),
	(10, 'ổ cứng', 18),
	(11, 'Chipset đồ họa', 18),
	(12, 'màn hình', 18),
	(13, 'hệ điều hành', 18),
	(14, 'pin', 18),
	(15, 'dfsd', 14),
	(16, 'bcd', 14),
	(17, 'màn hình tivi', 14),
	(18, 'tần số quét', 14),
	(19, 'công nghệ hình ảnh', 14),
	(20, 'tính năng tivi', 14);
/*!40000 ALTER TABLE `option_group` ENABLE KEYS */;

-- Dumping structure for table mydb.order
DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL,
  `order-amount` float DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `order_quantity` int(11) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_order_users1_idx` (`users_id`),
  CONSTRAINT `fk_order_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.order: ~0 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table mydb.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(100) NOT NULL,
  `Payment_method` varchar(50) NOT NULL,
  `Amount` float NOT NULL,
  `TransactionStatus` varchar(100) NOT NULL,
  `ShipDate` datetime NOT NULL,
  `OrderDate` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `suppliers_SupplierID` int(100) NOT NULL,
  PRIMARY KEY (`OrderID`),
  KEY `fk_orders_users1_idx` (`users_id`),
  KEY `fk_orders_suppliers1_idx` (`suppliers_SupplierID`),
  CONSTRAINT `fk_orders_suppliers1` FOREIGN KEY (`suppliers_SupplierID`) REFERENCES `suppliers` (`SupplierID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table mydb.order_detail
DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Status` enum('mới','đang xác nhận','đã xác nhận','đang đóng gói sản phẩm','đang đi nhận','đã nhận hàng','thành công','thất bại','đã hủy') NOT NULL,
  `DeliveryDate` varchar(100) NOT NULL,
  `orders_OrderID` int(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_order_orders1_idx` (`orders_OrderID`),
  KEY `fk_order_detail_product1_idx` (`product_id`),
  CONSTRAINT `fk_order_detail_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_order_orders1` FOREIGN KEY (`orders_OrderID`) REFERENCES `orders` (`OrderID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.order_detail: ~0 rows (approximately)
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;

-- Dumping structure for table mydb.product
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `quantity` int(11) DEFAULT NULL,
  `product_status` enum('còn hàng','hết hàng','tiêu thụ mạnh') NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `category_CategoryID` int(10) NOT NULL,
  `active` enum('có','không') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_manufacture1_idx` (`manufacture_id`),
  KEY `fk_product_category1_idx` (`category_CategoryID`),
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_CategoryID`) REFERENCES `category` (`CategoryID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_manufacture1` FOREIGN KEY (`manufacture_id`) REFERENCES `manufacture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.product: ~46 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `name`, `description`, `quantity`, `product_status`, `manufacture_id`, `category_CategoryID`, `active`) VALUES
	(1, 'Điện Thoại Nokia 8 - Hàng Chính Hãng', NULL, 50, 'còn hàng', 3, 11, 'có'),
	(2, 'Điện Thoại Samsung Galaxy A6 (2018) - Hàng Ch', NULL, NULL, 'còn hàng', 1, 11, 'có'),
	(3, 'Laptop Dell Vostro V3568 XF6C61 Core i5-7200U', NULL, NULL, 'còn hàng', 1, 18, 'có'),
	(4, 'Laptop Acer Nitro A715-71G-57LL NX.GP8SV.006 ', NULL, NULL, 'còn hàng', 1, 18, 'có'),
	(5, 'Tivi LED Panasonic 40 inch TH-40E400V', NULL, NULL, 'còn hàng', 1, 14, 'có'),
	(43, 'tivi', 'mo ta 1', 12, 'còn hàng', 1, 14, 'có'),
	(44, 'tivi2', '2', 2, 'còn hàng', 1, 14, 'có'),
	(45, 'huy', 'mô tả 3', 12, 'còn hàng', 2, 11, 'có'),
	(46, 'huy', 'mô tả 3', 12, 'còn hàng', 2, 11, 'có'),
	(47, 'huy 3', '13', 12, 'còn hàng', 1, 18, 'có'),
	(48, 'huy 3', '13', 12, 'còn hàng', 1, 18, 'có'),
	(49, 'huy 3', '13', 12, 'còn hàng', 1, 18, 'có'),
	(50, 'huy 3', '13', 12, 'còn hàng', 1, 18, 'có'),
	(51, 'd', '1', 1, 'còn hàng', 1, 19, 'có'),
	(52, 'huy', '1', 1, 'còn hàng', 1, 16, 'có'),
	(53, 'huy', '3', 1, 'còn hàng', 1, 15, 'có'),
	(54, 'huy', '3', 1, 'còn hàng', 1, 15, 'có'),
	(55, 'huy4', '4', NULL, 'còn hàng', 1, 12, 'có'),
	(56, 'huy4', '4', NULL, 'còn hàng', 1, 12, 'có'),
	(57, 'sdas', NULL, NULL, 'còn hàng', 1, 13, 'có'),
	(58, 'abc', 'abvds', NULL, 'còn hàng', 1, 15, 'có'),
	(59, 'as', NULL, NULL, 'còn hàng', 1, 19, 'có'),
	(60, 'as', NULL, NULL, 'còn hàng', 1, 19, 'có'),
	(61, 'ab', NULL, NULL, 'còn hàng', 1, 16, 'có'),
	(62, 'ab', 'ac', NULL, 'còn hàng', 1, 19, 'có'),
	(63, 'ab', 'ac', 12, 'còn hàng', 1, 19, 'có'),
	(64, 'ab', 'ac', 12, 'còn hàng', 1, 19, 'có'),
	(65, 'a', 'sd', NULL, 'còn hàng', 1, 15, 'có'),
	(66, 'a', NULL, NULL, 'còn hàng', 1, 19, 'có'),
	(67, 'a', 'b', NULL, 'còn hàng', 1, 19, 'có'),
	(68, 'a', 'b', NULL, 'còn hàng', 1, 19, 'có'),
	(69, 'a', NULL, NULL, 'còn hàng', 1, 19, 'có'),
	(70, 'huy1234', '12345', 1, 'còn hàng', 1, 15, 'có'),
	(71, 'huy12345', 'mieu ta 2', 12, 'còn hàng', 1, 17, 'có'),
	(72, 'huy12345', 'mieu ta 3', 12, 'còn hàng', 1, 17, 'có'),
	(73, 'huy123', 'huy123', 12, 'còn hàng', 1, 19, 'có'),
	(74, 'huy123', '12345', 12, 'còn hàng', 1, 11, 'có'),
	(75, 'huy123', '12345', 12, 'còn hàng', 2, 18, 'có'),
	(76, 'huy1234', '12434', 12, 'còn hàng', 1, 15, 'có'),
	(77, 'Hi Hi HI', '12345', 12, 'còn hàng', 1, 19, 'có'),
	(78, 'He He He', 'asdasdsa', 12, 'còn hàng', 1, 11, 'có'),
	(79, 'Ha Ha Ha', 'sdfsdfsd', 12, 'còn hàng', 1, 16, 'có'),
	(80, 'Hu Hu HU', 'dfsdf', 12, 'còn hàng', 1, 11, 'có'),
	(81, 'HU UH HU', 'asdafsfas', 12, 'còn hàng', 1, 18, 'có'),
	(82, 'HU UH He', 'asdafsfas', 12, 'còn hàng', 1, 18, 'có'),
	(83, 'HU UH Hl', 'asdafsfas', 12, 'còn hàng', 1, 18, 'có');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table mydb.product_options
DROP TABLE IF EXISTS `product_options`;
CREATE TABLE IF NOT EXISTS `product_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `options_option_id` int(11) NOT NULL,
  `price` text,
  PRIMARY KEY (`id`),
  KEY `fk_product_options_product1_idx` (`product_id`),
  KEY `fk_product_options_options1_idx` (`options_option_id`),
  CONSTRAINT `fk_product_options_options1` FOREIGN KEY (`options_option_id`) REFERENCES `options` (`option_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_options_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.product_options: ~106 rows (approximately)
/*!40000 ALTER TABLE `product_options` DISABLE KEYS */;
INSERT INTO `product_options` (`id`, `product_id`, `options_option_id`, `price`) VALUES
	(1, 1, 1, '5000000'),
	(2, 1, 2, '5000000'),
	(3, 1, 3, '5000000'),
	(4, 1, 4, '5000000'),
	(5, 1, 5, '5000000'),
	(6, 1, 6, '5000000'),
	(7, 1, 9, '5000000'),
	(8, 2, 10, '15000000'),
	(9, 2, 11, '15000000'),
	(10, 2, 12, '15000000'),
	(11, 2, 13, '15000000'),
	(12, 2, 14, '15000000'),
	(13, 2, 15, '15000000'),
	(14, 2, 7, '15000000'),
	(15, 3, 16, '22000000'),
	(16, 3, 17, '22000000'),
	(17, 3, 18, '22000000'),
	(18, 3, 19, '22000000'),
	(19, 3, 20, '22000000'),
	(20, 3, 21, '22000000'),
	(21, 3, 22, '22000000'),
	(22, 3, 7, '22000000'),
	(23, 4, 19, '24000000'),
	(24, 4, 20, '24000000'),
	(25, 4, 21, '24000000'),
	(26, 4, 22, '24000000'),
	(27, 4, 23, '24000000'),
	(28, 4, 24, '24000000'),
	(29, 4, 25, '24000000'),
	(30, 44, 30, NULL),
	(31, 44, 31, NULL),
	(32, 5, 32, '7000000'),
	(33, 5, 33, '7000000'),
	(34, 5, 34, '7000000'),
	(35, 5, 35, '7000000'),
	(36, 5, 9, '7000000'),
	(37, 45, 10, '123'),
	(38, 45, 11, '123'),
	(39, 45, 12, '123'),
	(40, 45, 4, '123'),
	(41, 45, 5, '123'),
	(42, 45, 6, '123'),
	(43, 45, 8, '123'),
	(44, 46, 10, '123'),
	(45, 46, 11, '123'),
	(46, 46, 12, '123'),
	(47, 46, 4, '123'),
	(48, 46, 5, '123'),
	(49, 46, 6, '123'),
	(50, 46, 8, '123'),
	(51, 47, 16, '123'),
	(52, 47, 17, '123'),
	(53, 47, 18, '123'),
	(54, 47, 19, '123'),
	(55, 47, 20, '123'),
	(56, 47, 21, '123'),
	(57, 47, 22, '123'),
	(58, 48, 16, '123'),
	(59, 48, 17, '123'),
	(60, 48, 18, '123'),
	(61, 48, 19, '123'),
	(62, 48, 20, '123'),
	(63, 48, 21, '123'),
	(64, 48, 22, '123'),
	(65, 49, 16, '123'),
	(66, 49, 17, '123'),
	(67, 49, 18, '123'),
	(68, 49, 19, '123'),
	(69, 49, 20, '123'),
	(70, 49, 21, '123'),
	(71, 49, 22, '123'),
	(72, 50, 16, '123'),
	(73, 50, 17, '123'),
	(74, 50, 18, '123'),
	(75, 50, 19, '123'),
	(76, 50, 20, '123'),
	(77, 50, 21, '123'),
	(78, 50, 22, '123'),
	(79, 74, 1, '12'),
	(80, 74, 2, '12'),
	(81, 74, 3, '12'),
	(82, 74, 4, '12'),
	(83, 74, 5, '12'),
	(84, 74, 6, '12'),
	(85, 74, 7, '12'),
	(86, 75, 16, '1234'),
	(87, 75, 17, '1234'),
	(88, 75, 18, '1234'),
	(89, 75, 19, '1234'),
	(90, 75, 20, '1234'),
	(91, 75, 21, '1234'),
	(92, 75, 22, '1234'),
	(93, 78, 1, '123.456'),
	(94, 78, 2, '123.456'),
	(95, 78, 3, '123.456'),
	(96, 78, 4, '123.456'),
	(97, 78, 5, '123.456'),
	(98, 78, 6, '123.456'),
	(99, 78, 7, '123.456'),
	(100, 80, 1, '123.456'),
	(101, 80, 2, '123.456'),
	(102, 80, 3, '123.456'),
	(103, 80, 4, '123.456'),
	(104, 80, 5, '123.456'),
	(105, 80, 6, '123.456'),
	(106, 80, 7, '123.456'),
	(107, 83, 16, '112.300.034'),
	(108, 83, 17, '112.300.034'),
	(109, 83, 18, '112.300.034'),
	(110, 83, 19, '112.300.034'),
	(111, 83, 20, '112.300.034'),
	(112, 83, 21, '112.300.034'),
	(113, 83, 22, '112.300.034');
/*!40000 ALTER TABLE `product_options` ENABLE KEYS */;

-- Dumping structure for table mydb.product_photo
DROP TABLE IF EXISTS `product_photo`;
CREATE TABLE IF NOT EXISTS `product_photo` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(45) DEFAULT NULL,
  `small` varchar(45) DEFAULT NULL,
  `base` varchar(45) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_photo_product1_idx` (`product_id`),
  CONSTRAINT `fk_product_photo_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.product_photo: ~0 rows (approximately)
/*!40000 ALTER TABLE `product_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `product_photo` ENABLE KEYS */;

-- Dumping structure for table mydb.review
DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `rating` float DEFAULT NULL,
  `value` varchar(250) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_review_product1_idx` (`product_id`),
  KEY `fk_review_users1_idx` (`users_id`),
  CONSTRAINT `fk_review_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.review: ~0 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table mydb.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.roles: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table mydb.roles_users
DROP TABLE IF EXISTS `roles_users`;
CREATE TABLE IF NOT EXISTS `roles_users` (
  `roles_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_roles_has_users_users1_idx` (`users_id`),
  KEY `fk_roles_has_users_roles1_idx` (`roles_id`),
  CONSTRAINT `fk_roles_has_users_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_roles_has_users_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.roles_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;

-- Dumping structure for table mydb.slide
DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL,
  `link` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.slide: ~0 rows (approximately)
/*!40000 ALTER TABLE `slide` DISABLE KEYS */;
/*!40000 ALTER TABLE `slide` ENABLE KEYS */;

-- Dumping structure for table mydb.suppliers
DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE IF NOT EXISTS `suppliers` (
  `SupplierID` int(100) NOT NULL,
  `SupplierName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  PRIMARY KEY (`SupplierID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.suppliers: ~0 rows (approximately)
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;

-- Dumping structure for table mydb.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birth_day` date DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(2) DEFAULT '2',
  `addresss` int(20) DEFAULT NULL,
  `gender` enum('nam','nữ') DEFAULT NULL,
  `email` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table mydb.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `birth_day`, `name`, `password`, `role`, `addresss`, `gender`, `email`, `updated_at`, `created_at`, `remember_token`) VALUES
	(1, '0000-00-00', 'admin', 'admin', 1, 0, NULL, '', '2018-05-23 22:20:39', '2018-05-23 22:21:10', NULL),
	(2, '2018-05-10', 'giahuykhtn@gmail.com', '$2y$10$c8zYeyaGIsQDApkjgrnZcuMmuJtyHHMcR0gVKrmu2sgTQNrEi.RV6', 1, 0, NULL, '', '2018-05-23 22:20:39', '2018-05-23 22:21:10', NULL),
	(3, NULL, 'huy', '$2y$10$3Xm5ZGO2B3rABq85iZ6Nx.0wzeVN1F0CZKsvOWL.yJmcTjZ3Bh4HW', NULL, NULL, NULL, 'abc@gmail.com', '2018-05-23 22:22:32', '2018-05-23 22:22:32', NULL),
	(4, NULL, 'huy', '$2y$10$34ppFMHUtzbX8wdeH.dDgea4eUqdjcdS.f0ymg0aqZ9qiGhMd7GFC', 2, NULL, NULL, 'bcd@gmail.com', '2018-05-23 22:35:31', '2018-05-23 22:35:31', 'L8j0IqNGwwxPgT7UKsEqqUzo2bKTH07E4zCC6qyIzYVYPCRzcaBv9j4SGuvj'),
	(5, '2018-05-01', 'thulan1', '$2y$10$3fN8nBLeYSGLixLG/qBtgOgC7.9wix0eanrwsyp/mSRCckl/3nQ0a', 2, NULL, NULL, 'thulan1@gmail.com', '2018-05-28 10:23:38', '2018-05-28 10:23:38', '54NKiAaIfs1GLHYcsxj5kX5NCcU9MbxD0qGT7eFAkDzrYga0jsFEVylaFyY3'),
	(6, '2018-05-02', 'thulan2', '$2y$10$CKtivSlxMFN3I4/QK95avegV7XMRHHM6r3LWEsDm0r5zxxLUAhgry', 2, NULL, NULL, 'thulan2@gmail.com', '2018-05-28 10:29:52', '2018-05-28 10:29:52', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
