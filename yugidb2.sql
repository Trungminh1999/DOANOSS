-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2020 at 05:14 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yugidb2`
--

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `madon` int(11) NOT NULL AUTO_INCREMENT,
  `danhsach` text NOT NULL,
  `soluong` text NOT NULL,
  `thanhtien` int(20) NOT NULL,
  `diachi` text NOT NULL,
  `sdt` int(10) NOT NULL,
  `nguoinhan` varchar(50) NOT NULL,
  `xacnhan` tinyint(1) NOT NULL,
  `ngaydat` date NOT NULL,
  PRIMARY KEY (`madon`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madon`, `danhsach`, `soluong`, `thanhtien`, `diachi`, `sdt`, `nguoinhan`, `xacnhan`, `ngaydat`) VALUES
(1, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'fff', 0, '2020-12-10'),
(7, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'fff', 0, '2020-12-10'),
(8, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'fff', 0, '2020-12-10'),
(9, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10'),
(10, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10'),
(11, '', '', 0, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10'),
(12, '', '', 0, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10'),
(13, '', '', 0, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10'),
(14, 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9', 9750000, 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', 123456789, 'nguyá»…n thá»‹ aa', 0, '2020-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

DROP TABLE IF EXISTS `giohang`;
CREATE TABLE IF NOT EXISTS `giohang` (
  `email` varchar(50) NOT NULL,
  `danhsach` text NOT NULL,
  `soluong` text NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`email`, `danhsach`, `soluong`) VALUES
('khachhang1', 'MAGO-EN-1ST/SR04-EN-UNL/bdab9ppa', '3/6/9'),
('sad5asd5', 'MAGO-EN-1ST/SR04-EN-UNL', '2/3'),
('gaucon131415@gmail.com', 'PHRA-JPS01-1SNE/bdab9ppa', '1/4'),
('gaucon131415', 'WIRA-EN021-1SNE/LED7-EN-1ST-PAK/LED7-EN-1ST', '3/5/6'),
('adssadasd', 'LED7-EN000-1SNE', '2'),
('sadfa5555', 'LED7-EN-1ST/LED7-EN000-1SNE', '3/2'),
('kljfjh', 'PHRA-JPS01-1SNE', '2');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `email` varchar(50) NOT NULL,
  `matkhau` varchar(32) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`email`, `matkhau`, `tenkh`, `diachi`, `sdt`) VALUES
('khachhang1', 'a722c63db8ec8625af6cf71cb8c2d939', 'KhÃ¡ch hÃ ng nguyá»…n 1', 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', '0123456789'),
('gaucon131415@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'fdgfdgdf', 'dsfsdfsdf', '65211588'),
('gaucon131415', '7815696ecbf1c96e6894b779456d330e', 'nguyá»…n vÄƒn a', 'sss11ss11', '0123456789'),
('adssadasd', '7815696ecbf1c96e6894b779456d330e', 'fdgfdgdf', 'dsfsdfsdf', '0123456789'),
('sad5asd5', '202cb962ac59075b964b07152d234b70', 'nguyen van b', 'sadasdasd', '0258714'),
('sadfascvbvb', '7815696ecbf1c96e6894b779456d330e', 'fdgfdgdf', 'dsfsdfsdf', '0123456789'),
('sadfascvbvbs', '7815696ecbf1c96e6894b779456d330e', 'fdgfdgdf', 'dsfsdfsdf', '0123456789'),
('sadfa5555', 'f970e2767d0cfe75876ea857f92e319b', 'fdgfdgdf', 'dsfsdfsdf', '0123456789'),
('kljfjh', '9f6e6800cfae7749eb6c486619254b9c', 'asdasdasd', 'nhÃ  khÃ¡ch hÃ ng 1 Ä‘Æ°á»ng abc 1222', '9999999'),
('sad5asd5asd5', '7815696ecbf1c96e6894b779456d330e', 'sssssssssss', 'dsfsdfsdf', '0123456789'),
('66jsdgjhjb', '7815696ecbf1c96e6894b779456d330e', 'sssssssssss', 'dsfsdfsdf', '65211588'),
('zxcvbzxczxc', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'zxczxczc', 'zxczxczxc', '324234'),
('khachhang2', 'c1572d05424d0ecb2a65ec6a82aeacbf', 'Khách hàng 2', 'nhà kh2', '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` char(10) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('stcg', 'Single Card TCG'),
('socg', 'Single Card OCG'),
('sd', 'Starter Deck'),
('std', 'Structure Deck'),
('bp', 'Booster Pack'),
('slv', 'Sleeves'),
('db', 'Deck box'),
('or', 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `matin` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  PRIMARY KEY (`matin`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`matin`, `tieude`, `hinh`, `tomtat`, `noidung`) VALUES
(1, 'Support cuối cùng của Selection 10 đã lộ diện', 'https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/129062866_719539825336051_5763487171204452670_o.jpg?_nc_cat=111&ccb=2&_nc_sid=730e14&_nc_ohc=IKWLxtoEI8AAX-h5WYM&_nc_ht=scontent-sin6-1.xx&oh=478a38a8b6f5eae4f3e8c9a9f09fc36c&oe=5FF4F2EA', 'Support cuối cùng của Selection 10 đã lộ diện, Chúa tể của các Vampire đã thức tỉnh để mang đến cái chết cho những kẻ ngáng đường!!!', 'Support cuối cùng của Selection 10 đã lộ diện<br>\r\nChúa tể của các Vampire đã thức tỉnh để mang đến cái chết cho những kẻ ngáng đường!!!<br>\r\nSLT1-JP001 竜血公ヴァンパイア Draculea Vampire<br>\r\nLevel 8 DARK Zombie Effect Monster<br>\r\nATK 2800<br>\r\nDEF 2100<br>\r\nYou can only use this card name’s (1), (2), and (3) effects once per turn each.<br>\r\n(1) If this card is Normal Summoned: You can target up to 2 monsters in your opponent’s GY; Special Summon them to your field in Defense Position, but their effects are negated.<br>\r\n(2) When a monster effect activates and a monster with the same name as that monster is in either GY (Quick Effect): You can negate that activation.<br>\r\n(3) If a monster is Special Summoned from your opponent’s GY: You can Tribute 2 monsters; Special Summon this card from your GY.'),
(2, 'Support tiếp theo cho Time Thief trong Selection 10', 'https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/126361157_717605268862840_4744057322116305977_n.jpg?_nc_cat=107&ccb=2&_nc_sid=730e14&_nc_ohc=a98f3ddbitIAX-RK4PT&_nc_ht=scontent-sin6-1.xx&oh=c7e1af2ff4c9cc827f711aba9b89f7db&oe=5FF68D71', 'Support tiếp theo cho Time Thief trong Selection 10 đã có mặt!!!', 'Support tiếp theo cho Time Thief trong Selection 10 đã có mặt!!!<br>\r\nSLT1-JP023 Chronodiver Adjuster / Time Thief Adjuster\r\nDARK, Psychic/Effect, Lv 4, ATK 1200, DEF 1800<br>\r\nYou can only use 1 of the 1st and 2nd effects of this card’s name per turn, and only once that turn.<br>\r\n(1) If you Normal or Special Summon a “Time Thief” monster(s) other than “Time Thief Adjuster”: You can Special Summon this card from your hand.<br>\r\n(2) If this card is Normal or Special Summoned: You can send 1 “Time Thief” card from your Deck to the GY, except “Time Thief Adjuster”.'),
(4, 'ahihihihih', 'ewewewew', 'ahuhuhu', 'aaaaaaaaaassssss'),
(5, 'dsfeeweewew', 'ewewewew', 'ewewewewew', 'eweweewew'),
(6, 'ahihihihih', 'aaaa', 'ahuhuhu', 'aaaaaaaaaassssss'),
(7, 'ahihihihih', 'aaaa', 'ahuhuhu', 'aaaaaaaaaassssss');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `pass`, `ten`) VALUES
('idad', '123', 'Quản Trị Viên');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(15) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(20) NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `maloai` char(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  PRIMARY KEY (`masp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `gia`, `hinh`, `maloai`, `soluong`) VALUES
('WIRA-EN022-1SNE', 'Raidraptor - Force Strix - WIRA-EN022 - Secret Rare 1st Edition', 280000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1089792.jpg', 'stcg', 99),
('PHRA-EN045-1SNE', 'Divine Arsenal AA-ZEUS - Sky Thunder - PHRA-EN045 - Starlight Rare 1st Edition', 9000000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1681562.jpg', 'stcg', 30),
('MAGO-EN-1ST', 'Maximum Gold 1st Edition Box of 4 Maximum Gold Packs', 900000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1672226.jpg', 'bp', 120),
('SR04-EN-UNL', 'Structure Deck: Dinosmasher\'s Fury Unlimited', 350000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1663961.jpg', 'std', 30),
('PHRA-JPS01-1SNE', 'Dark Requiem Xyz Dragon-PHRA-JPS01-PSR', 15000000, 'https://bigweb.co.jp/new/imgc/031/186/3118656.jpg?c=3118656?c2014', 'socg', 10),
('bdab9ppa', 'Ash Blossom 9 Pocket Portfolio Album', 550000, 'https://saigontcg.com/wp-content/uploads/Ash-Blossom-Album.jpg', 'or', 35),
('dfgdfg', '555555555555555555', 3000000, 'sdfsfsd', 'sd', 55),
('WIRA-EN021-1SNE', 'Raidraptor - Tribute Lanius - WIRA-EN021 - Ultra Rare 1st Edition', 750000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1089808.jpg', 'stcg', 60),
('LED7-EN-1ST-PAK', 'Legendary Duelists: Rage of Ra 1st Edition Pack', 80000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1672224.jpg', 'bp', 60),
('LED7-EN-1ST', 'Legendary Duelists: Rage of Ra Booster Box of 36 1st Edition Packs', 1900000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1672223.JPG', 'bp', 35),
('LED7-EN000-1SNE', 'The Winged Dragon of Ra (Alternate Artwork) - LED7-EN000 - Ultra Rare 1st Edition', 400000, 'https://52f4e29a8321344e30ae-0f55c9129972ac85d6b1f4e703468e6b.ssl.cf2.rackcdn.com/products/pictures/1677341.jpg', 'stcg', 77),
('asd', '6666sad', 36363636, 'ddddd', 'std', 22),
('sdasd', 'sss', 99999, 'sdfsfsd', 'db', 99);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
