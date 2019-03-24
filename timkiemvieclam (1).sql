-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 03:01 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
(5, 'gia sư toán cấp 2', '1', 'part-time', 1, '20', 4, 2, 'không', '20k/h', '20-2-2019', 'số 13 lê văn lương', '', 'chị hà - 01399998888', '2019-03-24 14:22:34', 3, 'asset/images/job.png'),
(6, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-19 16:55:54', 1, 'asset/images/job.png'),
(7, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(12, 'Gái ngành', '1', 'full time', 0, '18', 5, 2, '', '', '', '', '', '', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(13, 'Nam ngành', '2', 'full time', 0, '18', 1, 1, 'Đại học', '2000USD', '', 'Hà Nội', '', '', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(14, 'khôi đẹp zai', '1', 'fulltime', 0, '', 1, 1, '', '', '', '', '', '', '2019-03-19 16:56:20', 2, 'asset/images/job.png');

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
-- Table structure for table `tb_loaitk`
--

CREATE TABLE `tb_loaitk` (
  `id_loaitk` int(2) NOT NULL,
  `ten` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_loaitk`
--

INSERT INTO `tb_loaitk` (`id_loaitk`, `ten`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'business');

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
  `link` varchar(100) NOT NULL,
  `sdt` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `slogan` varchar(250) NOT NULL,
  `id_tk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nhatd`
--

INSERT INTO `tb_nhatd` (`id_nhatd`, `ten`, `mota`, `link`, `sdt`, `email`, `diachi`, `slogan`, `id_tk`) VALUES
(1, 'vingroup', '', '', '', '', '', '', 1),
(2, 'dingtea', '', '', '', '', '', '', 2),
(3, 'trung tâm gia sư Ánh Mai', '', '', '', '', '', '', 3);

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
-- Table structure for table `tb_taikhoan`
--

CREATE TABLE `tb_taikhoan` (
  `id_tk` int(11) NOT NULL,
  `ten_tk` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_loaitk` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_taikhoan`
--

INSERT INTO `tb_taikhoan` (`id_tk`, `ten_tk`, `password`, `id_loaitk`) VALUES
(1, 'vin', '123', 3),
(2, 'dingtea', '123', 3),
(3, 'giasu', '123', 3),
(4, 'khoi', '123', 2);

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
  `id_tk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_thanhvien`
--

INSERT INTO `tb_thanhvien` (`id_thanhvien`, `ten`, `diachi`, `sdt`, `gioitinh`, `bangcap`, `loai`, `ngoaingu`, `anh`, `kinhnghiem`, `slogan`, `id_thanhpho`, `email`, `id_tk`) VALUES
(1, 'Trần Anh Khôi', NULL, '0942755384', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khoi@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tv_ntd`
--

CREATE TABLE `tb_tv_ntd` (
  `id` int(11) NOT NULL,
  `id_thanhvien` int(11) DEFAULT NULL,
  `id_nhatd` int(10) DEFAULT NULL
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
  ADD PRIMARY KEY (`id_bai`),
  ADD KEY `id_nganh` (`id_nganh`);

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
  ADD PRIMARY KEY (`id_nhatd`),
  ADD KEY `id_ltk` (`id_tk`);

--
-- Indexes for table `tb_quangcao`
--
ALTER TABLE `tb_quangcao`
  ADD PRIMARY KEY (`id_qc`);

--
-- Indexes for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD PRIMARY KEY (`id_tk`),
  ADD KEY `id_loaitk` (`id_loaitk`);

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
  ADD KEY `id_tk` (`id_tk`);

--
-- Indexes for table `tb_tv_ntd`
--
ALTER TABLE `tb_tv_ntd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtv` (`id_thanhvien`),
  ADD KEY `idntd` (`id_nhatd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baituyen`
--
ALTER TABLE `tb_baituyen`
  MODIFY `id_baituyen` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  MODIFY `id_bai` int(4) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_nhatd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_quangcao`
--
ALTER TABLE `tb_quangcao`
  MODIFY `id_qc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_thanhpho`
--
ALTER TABLE `tb_thanhpho`
  MODIFY `id_thanhpho` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tv_ntd`
--
ALTER TABLE `tb_tv_ntd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  ADD CONSTRAINT `id_nganh_bv` FOREIGN KEY (`id_nganh`) REFERENCES `tb_nganh` (`id_nganh`);

--
-- Constraints for table `tb_nhatd`
--
ALTER TABLE `tb_nhatd`
  ADD CONSTRAINT `id_ltk` FOREIGN KEY (`id_tk`) REFERENCES `tb_taikhoan` (`id_tk`);

--
-- Constraints for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  ADD CONSTRAINT `id_tk_loaitk` FOREIGN KEY (`id_loaitk`) REFERENCES `tb_loaitk` (`id_loaitk`);

--
-- Constraints for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  ADD CONSTRAINT `id_tp_FK` FOREIGN KEY (`id_thanhpho`) REFERENCES `tb_thanhpho` (`id_thanhpho`),
  ADD CONSTRAINT `id_tv_tk` FOREIGN KEY (`id_tk`) REFERENCES `tb_taikhoan` (`id_tk`);

--
-- Constraints for table `tb_tv_ntd`
--
ALTER TABLE `tb_tv_ntd`
  ADD CONSTRAINT `idntd` FOREIGN KEY (`id_nhatd`) REFERENCES `tb_nhatd` (`id_nhatd`),
  ADD CONSTRAINT `idtv` FOREIGN KEY (`id_thanhvien`) REFERENCES `tb_thanhvien` (`id_thanhvien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
