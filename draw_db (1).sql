-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 07:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `draw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิค',
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุล',
  `telephone` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Username',
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Password',
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL COMMENT '0=user,1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `lastname`, `telephone`, `username`, `password`, `status`) VALUES
(000001, 'nes', 'poonyarit', 0615386694, 'admin', 'c2faa45ca7fb91ec3b3e3b5bd0f5893a6399b8fa4accb211bfb0dccb0f8db73edb76232d2c80f6b0a606e84647b713cd4e076271c382178982a5d95c9070596f', '1'),
(000002, 'fon', 'sod', 0615386649, 'fonsod1', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', '0'),
(000006, 'ton', 'sod', 0615386656, 'tonsod1', '9961d468d1563f74f3b425ea9972d8d7b661838c806781156c6d702dbce91c5cb74d2b514dad16bbe40e026b8cc2611f4e278759942fb00618b74e58768c27bb', '1'),
(000007, 'นายปุญฤทธิ์', 'กวางทอง', 0845297623, 'user', '9961d468d1563f74f3b425ea9972d8d7b661838c806781156c6d702dbce91c5cb74d2b514dad16bbe40e026b8cc2611f4e278759942fb00618b74e58768c27bb', '0'),
(000008, 'game', 'dee', 4294967295, 'game1', 'b7705ba40e35d8e09c807222d412534da497aa714c078fc713b863f3c2b7e1a4bc872977f21f480431dc4d842ac96df8d378f8e521f0ee7228850b6343c523e6', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสรูปภาพ',
  `pro_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อรูปภาพ',
  `type_ID` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภท',
  `detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียด',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `type_ID`, `detail`, `image`) VALUES
(000001, 'benimaru', 001, 'fire force', 'pr_63ff767e5f18e.jpg'),
(000002, 'kaido', 001, 'onepiece onigashima', 'pr_64004bea66c21.jpg'),
(000007, 'zolo', 001, 'onepiece', 'pr_64004c0a35401.jpg'),
(000008, 'วิวยามเย็น01', 003, 'ความสวยงานของธรรมชาติ', 'pr_64008e53f3cbc.jpg'),
(000009, 'rayleigh', 004, 'onepiece shabondi', 'pr_64016f6b6dcaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `prg_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสโปรเเกรม',
  `prg_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อโปรเเกรม',
  `prgtype_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสโปรเเกรม',
  `prg_detail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดโปรเเกรม',
  `prg_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รูปภาพ',
  `trick` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'เคล็ดลับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`prg_id`, `prg_name`, `prgtype_id`, `prg_detail`, `prg_img`, `trick`) VALUES
(000001, 'การวาดหน้า', 003, 'เป็นการวาดเเค่หน้า', 'pr_6401700e481e3.webp', 'ต้องกำหนดสัดส่วนให้ดีไม่งั้นรูปที่ได้ออกมาจะไม่สมส่วน'),
(000003, 'ลงเส้นรูปผู้ชาย', 004, 'เป็นการลงเส้นเฉยๆ', 'pr_6401709976158.jpg', 'ถ้าร่างดีก็จะลงรายละเอียดได้เหมือนเเละสมจริง'),
(000004, 'การร่างสัดส่วนร่างกาย', 003, '1.วาดวงกลม 2.จากนั้นก็วาดทรงกระบอกต่อกัน', 'pr_640191ff4ecd7.jpg', 'การวาดเเบบนี้จะทำให้ว่างร่างกายได้ง่ายขึ้น');

-- --------------------------------------------------------

--
-- Table structure for table `program_type`
--

CREATE TABLE `program_type` (
  `prgtype_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทprograme',
  `prgtype_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อประเภทprograme'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program_type`
--

INSERT INTO `program_type` (`prgtype_id`, `prgtype_name`) VALUES
(001, 'การตัดเส้น'),
(002, 'การลงสี'),
(003, 'การร่างภาพ'),
(004, 'การลงรายละเอียด');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_ID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_ID`, `type_name`) VALUES
(001, 'รูปการ์ตูน'),
(002, 'รูปภาพart'),
(003, 'view'),
(004, 'ลายเส้น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`prg_id`);

--
-- Indexes for table `program_type`
--
ALTER TABLE `program_type`
  ADD PRIMARY KEY (`prgtype_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิค', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `prg_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสโปรเเกรม', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program_type`
--
ALTER TABLE `program_type`
  MODIFY `prgtype_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทprograme', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_ID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
