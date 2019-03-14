-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 03:25 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timkiemvieclam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_baituyen`
--

CREATE TABLE `tb_baituyen` (
  `id_baituyen` int(2) NOT NULL,
  `tieude` varchar(50) NOT NULL,
  `soluong` varchar(2) NOT NULL,
  `hinhthuc` varchar(10) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `tuoi` varchar(2) NOT NULL,
  `id_nganh` int(5) NOT NULL,
  `id_thanhpho` int(4) NOT NULL,
  `bangcap` varchar(100) NOT NULL,
  `mucluong` varchar(50) NOT NULL,
  `hannop` varchar(20) NOT NULL,
  `diadiem` varchar(120) NOT NULL,
  `mota` text NOT NULL,
  `lienhe` varchar(250) NOT NULL,
  `ngaydang` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `id_nhatd` int(10) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_baituyen`
--

INSERT INTO `tb_baituyen` (`id_baituyen`, `tieude`, `soluong`, `hinhthuc`, `gioitinh`, `tuoi`, `id_nganh`, `id_thanhpho`, `bangcap`, `mucluong`, `hannop`, `diadiem`, `mota`, `lienhe`, `ngaydang`, `id_nhatd`, `img`) VALUES
(1, 'tester', '10', 'full time', 0, '20', 1, 1, 'đại học', '2000USD', '20-05-2018', 'số 3 vũ trọng phụng', '', '0918272377', '2019-03-10 22:31:57', 1, 'asset/images/job.png'),
(2, 'Kế toán', '1', 'full time', 1, '20', 2, 2, 'đại học', '2000USD', '20-9-2019', 'SỐ 30 hà thành', '', '0918277364 - Chị Hoa', '2019-03-10 22:32:13', 1, 'asset/images/job.png'),
(4, 'gia sư toán cấp 2', '1', 'part-time', 1, '20', 4, 1, 'không', '20k/h', '20-2-2019', 'số 13 lê văn lương', '', 'chị hà - 01399998888', '2019-03-18 08:14:00', 3, ''),
(5, 'gia sư toán cấp 2', '1', 'part-time', 1, '20', 4, 1, 'không', '20k/h', '20-2-2019', 'số 13 lê văn lương', '', 'chị hà - 01399998888', '2019-03-18 08:14:00', 3, 'asset/images/job.png'),
(6, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-28 00:00:00', 1, ''),
(7, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-28 00:00:00', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_baiviet`
--

CREATE TABLE `tb_baiviet` (
  `id_bai` int(4) NOT NULL,
  `tieude` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `id_nganh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bv_n`
--

CREATE TABLE `tb_bv_n` (
  `id` int(10) NOT NULL,
  `id_bai` int(4) NOT NULL,
  `id_nganh` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_loaitk`
--

CREATE TABLE `tb_loaitk` (
  `id_loaitk` int(2) NOT NULL,
  `quyen` int(2) NOT NULL,
  `ten` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_loaitk`
--

INSERT INTO `tb_loaitk` (`id_loaitk`, `quyen`, `ten`) VALUES
(1, 0, 'admin'),
(2, 1, 'user'),
(3, 2, 'business');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nganh`
--

CREATE TABLE `tb_nganh` (
  `id_nganh` int(5) NOT NULL,
  `ten_nganh` varchar(50) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nganh`
--

INSERT INTO `tb_nganh` (`id_nganh`, `ten_nganh`, `mota`) VALUES
(1, 'công nghệ thông tin', 'ngành hot'),
(2, 'kế toán', ''),
(3, 'Phục vụ, Bưng bê', ''),
(4, 'giáo dục', ''),
(5, 'PB-PG', ''),
(6, 'văn phòng', ''),
(7, 'telesale,CSKH', ''),
(8, 'an ninh, bảo vệ', ''),
(9, 'Quản lý fanpage', ''),
(10, 'vận chuyển', ''),
(11, 'cộng tác viên', ''),
(12, 'phát tờ rơi', ''),
(13, 'xây dựng', ''),
(14, 'du lịch', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nhatd`
--

CREATE TABLE `tb_nhatd` (
  `id_nhatd` int(10) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nhatd`
--

INSERT INTO `tb_nhatd` (`id_nhatd`, `ten`, `mota`, `link`) VALUES
(1, 'vingroup', '', ''),
(2, 'dingtea', '', ''),
(3, 'trung tâm gia sư Ánh Mai', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_quangcao`
--

CREATE TABLE `tb_quangcao` (
  `id_qc` int(10) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_thanhpho`
--

CREATE TABLE `tb_thanhpho` (
  `id_thanhpho` int(4) NOT NULL,
  `ten_tp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_thanhpho`
--

INSERT INTO `tb_thanhpho` (`id_thanhpho`, `ten_tp`) VALUES
(1, 'Hà nội'),
(2, 'Hải phòng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_thanhvien`
--

CREATE TABLE `tb_thanhvien` (
  `id_thanhvien` int(10) NOT NULL,
  `ten` varchar(40) NOT NULL,
  `diachi` varchar(100) DEFAULT NULL,
  `sdt` varchar(11) NOT NULL,
  `gioitinh` tinyint(1) DEFAULT NULL,
  `bangcap` varchar(50) DEFAULT NULL,
  `loai` int(1) DEFAULT NULL,
  `ngoaingu` int(1) DEFAULT NULL,
  `anh` text,
  `kinhnghiem` varchar(30) DEFAULT NULL,
  `slogan` varchar(100) DEFAULT NULL,
  `id_thanhpho` int(4) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_loaitk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_thanhvien`
--

INSERT INTO `tb_thanhvien` (`id_thanhvien`, `ten`, `diachi`, `sdt`, `gioitinh`, `bangcap`, `loai`, `ngoaingu`, `anh`, `kinhnghiem`, `slogan`, `id_thanhpho`, `email`, `password`, `id_loaitk`) VALUES
(1, 'khôi', 'số 3 ngõ 39 lĩnh nam', '0916712266', 0, 'không', 0, 0, '', 'không', 'sống để cống hiến', 1, 'khoi@gmail.com', '1234', 2),
(2, 'hoang', NULL, '0917672287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hoang@gmail.com', '123456', NULL),
(3, 'admin', NULL, '01223345821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', '1234', NULL),
(4, 'công', NULL, '01223345821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cong@gmail.com', '1234', NULL),
(5, 'trung', NULL, '01223345821', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'trung@gmail.com', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tv_n`
--

CREATE TABLE `tb_tv_n` (
  `id` int(10) NOT NULL,
  `id_nganh` int(5) NOT NULL,
  `id_thanhvien` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baituyen`
--
ALTER TABLE `tb_baituyen`
  ADD PRIMARY KEY (`id_baituyen`),
  ADD KEY `id_nganh_fk` (`id_nganh`),
  ADD KEY `id_thanhpho_fk` (`id_thanhpho`),
  ADD KEY `id_nhatd_FK` (`id_nhatd`);

--
-- Indexes for table `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  ADD PRIMARY KEY (`id_bai`);

--
-- Indexes for table `tb_bv_n`
--
ALTER TABLE `tb_bv_n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bai_FK` (`id_bai`),
  ADD KEY `id_nganh_FK` (`id_nganh`) USING BTREE;

--
-- Indexes for table `tb_loaitk`
--
ALTER TABLE `tb_loaitk`
  ADD PRIMARY KEY (`id_loaitk`);

--
-- Indexes for table `tb_nganh`
--
ALTER TABLE `tb_nganh`
  ADD PRIMARY KEY (`id_nganh`);

--
-- Indexes for table `tb_nhatd`
--
ALTER TABLE `tb_nhatd`
  ADD PRIMARY KEY (`id_nhatd`);

--
-- Indexes for table `tb_quangcao`
--
ALTER TABLE `tb_quangcao`
  ADD PRIMARY KEY (`id_qc`);

--
-- Indexes for table `tb_thanhpho`
--
ALTER TABLE `tb_thanhpho`
  ADD PRIMARY KEY (`id_thanhpho`);

--
-- Indexes for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`),
  ADD KEY `id_tp_FK` (`id_thanhpho`),
  ADD KEY `id_loaitk_tv` (`id_loaitk`) USING BTREE;

--
-- Indexes for table `tb_tv_n`
--
ALTER TABLE `tb_tv_n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nganh` (`id_nganh`),
  ADD KEY `id_thanhvien` (`id_thanhvien`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baituyen`
--
ALTER TABLE `tb_baituyen`
  MODIFY `id_baituyen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  MODIFY `id_bai` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bv_n`
--
ALTER TABLE `tb_bv_n`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_loaitk`
--
ALTER TABLE `tb_loaitk`
  MODIFY `id_loaitk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_nganh`
--
ALTER TABLE `tb_nganh`
  MODIFY `id_nganh` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_nhatd`
--
ALTER TABLE `tb_nhatd`
  MODIFY `id_nhatd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_quangcao`
--
ALTER TABLE `tb_quangcao`
  MODIFY `id_qc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_thanhpho`
--
ALTER TABLE `tb_thanhpho`
  MODIFY `id_thanhpho` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tv_n`
--
ALTER TABLE `tb_tv_n`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_baituyen`
--
ALTER TABLE `tb_baituyen`
  ADD CONSTRAINT `id_nganh_fk` FOREIGN KEY (`id_nganh`) REFERENCES `tb_nganh` (`id_nganh`),
  ADD CONSTRAINT `id_nhatd_FK` FOREIGN KEY (`id_nhatd`) REFERENCES `tb_nhatd` (`id_nhatd`),
  ADD CONSTRAINT `id_thanhpho_fk` FOREIGN KEY (`id_thanhpho`) REFERENCES `tb_thanhpho` (`id_thanhpho`);

--
-- Constraints for table `tb_bv_n`
--
ALTER TABLE `tb_bv_n`
  ADD CONSTRAINT `id_bai_FK` FOREIGN KEY (`id_bai`) REFERENCES `tb_baiviet` (`id_bai`);

--
-- Constraints for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  ADD CONSTRAINT `id_tp_FK` FOREIGN KEY (`id_thanhpho`) REFERENCES `tb_thanhpho` (`id_thanhpho`),
  ADD CONSTRAINT `id_tv_ltk` FOREIGN KEY (`id_loaitk`) REFERENCES `tb_loaitk` (`id_loaitk`);

--
-- Constraints for table `tb_tv_n`
--
ALTER TABLE `tb_tv_n`
  ADD CONSTRAINT `id_nganh` FOREIGN KEY (`id_nganh`) REFERENCES `tb_nganh` (`id_nganh`),
  ADD CONSTRAINT `id_thanhvien` FOREIGN KEY (`id_thanhvien`) REFERENCES `tb_thanhvien` (`id_thanhvien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
