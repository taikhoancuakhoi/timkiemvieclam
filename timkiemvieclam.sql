-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 11:28 AM
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
  `id_baituyen` int(10) NOT NULL,
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
(4, 'gia sư toán cấp 2', '1', 'part-time', 1, '20', 4, 1, 'không', '20k/h', '20-2-2019', 'số 13 lê văn lương', '- Nhân viên parttime( 6h -11h), fulltime( 10h -14h , 17h - 21h hoặc 18h -22h)\r\n\r\n- Đón tiếp và sắp xếp bàn cho khách\r\n\r\n- Giới thiệu món ăn, thức uống và nhận order từ khách hàng', 'chị hà - 01399998888', '2019-03-31 20:22:48', 3, ''),
(5, 'gia sư toán cấp 2', '1', 'part-time', 1, '20', 4, 2, 'không', '20k/h', '20-2-2019', 'số 13 lê văn lương', '', 'chị hà - 01399998888', '2019-03-24 14:22:34', 3, 'asset/images/job.png'),
(6, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-19 16:55:54', 1, 'asset/images/job.png'),
(7, 'Designer ', '10', 'full time', 2, '20', 1, 1, 'không', '2.500.000 VND', '20-2-2019', 'Hà nội', '', 'Anh Hoàng - 0811283847', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(12, 'Gái ngành', '1', 'full time', 0, '18', 5, 2, '', '', '', '', '', '', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(13, 'Nam ngành', '2', 'full time', 0, '18', 1, 1, 'Đại học', '2000USD', '', 'Hà Nội', '', '', '2019-03-19 16:56:20', 1, 'asset/images/job.png'),
(14, 'khôi đẹp zai', '1', 'fulltime', 0, '', 1, 1, '', '2.500.000 VND', '', '', '', '', '2019-03-25 22:31:57', 2, 'asset/images/job.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_baiviet`
--

CREATE TABLE `tb_baiviet` (
  `id_bai` int(4) NOT NULL,
  `tieude` varchar(50) NOT NULL,
  `noidung` text NOT NULL,
  `id_nganh` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_baiviet`
--

INSERT INTO `tb_baiviet` (`id_bai`, `tieude`, `noidung`, `id_nganh`) VALUES
(1, 'Nguyên tắc vàng chinh phục nhà tuyển dụng', 'Nhiều thống kê cho thấy bạn chỉ có 6 – 20 giây ngắn ngủi để thu hút sự chú ý của nhà tuyển dụng vào CV của mình. Tương tự như vậy với cuộc phỏng vấn trực tiếp. Bạn không có nhiều hơn 5 – 10 phút để tạo ấn tượng ban đầu tích cực.\r\n \r\nVậy trong 10 phút đó, bạn nên làm gì để “chinh phục” người phỏng vấn? Dưới đây là một số gợi ý dành cho bạn:\r\n* Gây ấn tượng ban đầu thật tốt\r\nChúng ta đều biết ấn tượng đầu tiên vô cùng quan trọng. Một cái bắt tay thật chắc, một nụ cười lạc quan và một phong thái chuyên nghiệp giúp bạn có một khởi đầu trọn vẹn trong buổi phỏng vấn. Nếu bạn không thấy thoải mái và hạnh phúc khi gặp nhà tuyển dụng, chắc chắc họ cũng không muốn mời bạn quay lại.\r\n* Đi thẳng vào vấn đề\r\nNếu câu hỏi đầu tiên là “ Hãy nói cho chúng tôi về bạn” và bạn bắt đầu câu chuyện cuộc đời từ nơi bạn sinh ra, có thể bạn đã làm mất khán giả của mình lúc nào không hay. Thay vào đó, bạn nên trả lời một cách ngắn gọn và trực tiếp. Bạn không nên nói những thông tin nhà tuyển dụng không cần thiết phải biết.\r\n* Lắng nghe chăm chú và trả lời các câu hỏi\r\nCó thể bạn tin rằng với khả năng của mình bạn có thể lái các câu hỏi của nhà tuyển dụng sang những điều mà bạn muốn. Tuy nhiên, một lời khuyên dành cho bạn là không nên làm vầy vì nhà tuyển dụng không hể ấn tượng nếu bạn không trả lời cụ thể các câu hỏi của họ.\r\n* Hãy đảm bảo chú ý đến các câu hỏi và trả lời chi tiết thể hiện chuyên môn của bạn\r\nBạn có thể nghĩ đến việc sử dụng chiến thuật “STAR” để có một câu trả lời trọn vẹn. STAR là cách viết tắt của Situation ( tình huống), Task (nhiệm vụ), Action (hành động) và Results (kết quả). Bạn nêu ra một tình huống, mô tả nhiệm vụ bạn cần phải làm, bạn đã có những hoạt động gì để hoàn thành và cuối cùng mô tả kết quả bạn đã đạt được.\r\n* Nên có những dẫn chứng cụ thể cho những điều bạn nói\r\nBạn nên chuẩn bị các câu chuyện cụ thể mô tả thành quả công việc đặc biệt liên quan đến những mong đợi của nhà tuyển dụng cần cho vị trí này. Nếu bạn biết công việc này cần kiến thức quản lý, hãy chuẩn bị mô tả những thành công của bạn trong việc quản lý tổ chức và con người.\r\n* Không nên nói quá nhiều\r\nBạn nên ghi nhớ chiến thuật “STAR”. Chiến thuật này sẽ giúp nhà tuyển dụng hiểu bạn tốt hơn cũng như những điều bạn có thể đóng góp cho công ty họ. Tuy nhiên, việc nói quá nhiều, quá chi tiết lại khiến họ không tập trung và giảm hứng thú với những điều bạn nói.\r\n* Nhấn mạnh những điều bạn học được\r\nCác nhà tuyển dụng đánh giá cao nếu bạn có thể mô tả những điều bạn học được kinh nghiệm trong quá khứ và cách bạn vận dụng những bài học đó để làm tốt công việc hiện tại. Bạn sẽ có cơ hội nói về điều này khi nhà tuyển dụng hỏi “ Điểm yếu của bạn là gì?”. Nếu bạn có thể trả lời nhanh chóng điểm yếu và việc bạn cải thiếu điểm yếu đó và hoàn thiện bản thân, bạn sẽ còn tiến xa.', NULL),
(2, 'Top 10 câu phỏng vấn bằng tiếng anh và câu trả lời', 'What is your greatest strength? ( Điểm mạnh lớn nhất của bạn là gì?)\r\nGợi ý: Đây là câu hỏi mà hầu như các nhà tuyển dụng sẽ hỏi trong cuộc phỏng vấn. Khi bạn được hỏi về điểm mạnh lớn nhất của mình, điều quan trọng là hãy làm nổi bật về điểm mạnh trong công việc giúp bạn đặc biệt hơn so với những ứng viên khác.\r\n\r\nTrả lời: I have an extremely strong work ethic. When I’m working on a project, I don’t want just to meet deadlines. Rather, I prefer to complete the project well ahead of schedule ( Tôi có một nguyên tắc làm việc hết sức kiên định. Khi tôi làm việc một trong một dự án, tôi không chỉ muốn hoàn thành đúng hạn. Thay vào đó, tôi muốn hoàn thành dự án trước thời hạn)\r\n\r\nWhat is your greatest weakness? ( Điểm yếu lớn nhất của bạn là gì?)\r\nGợi ý: Một câu hỏi quen thuộc nữa mà nhà tuyển dụng sẽ không thể bỏ qua đó chính là hỏi về điểm yếu của bạn. Hãy đưa ra điểm yếu một cách trung thực kèm với sự khắc phục nó, để chứng tỏ với nhà tuyển dụng rằng bạn là người cầu tiến.\r\n\r\nCâu trả lời: I used to wait until the last minute to set appointments for the coming week, but I realized that scheduling in advance makes much more sense ( Tôi đã từng chờ đợi cho đến phút cuối để thiết lập các cuộc hẹn cho tuần tới, nhưng tôi đã nhận ra rằng việc thiết lập kế hoạch trước có ý nghĩa nhiều hơn nữa).\r\n\r\nTell me about yourself ( Hãy giới thiệu về bản thân bạn)\r\nGợi ý: Làm thế nào để trình bày thông tin cá nhân vừa đầy đủ lại ngắn gọn nhất? Nhà tuyển dụng sẽ không muốn biết quá nhiều về bạn, nhưng nếu bạn chia sẻ ít thông tin họ sẽ nghĩ bạn là người không cởi mở. Do đó, tốt nhất bạn nên chia sẻ ngắn gọn về thông tin cá nhân, sở thích của bạn và những điểm mạnh của mình liên quan đến công việc đang ứng tuyển.\r\n\r\nTrả lời: I am glad to introduce that my name is Giang. I’m 25 years old. Now, I’m living in Ha Noi. I have 4 years experience as an office staff. In my free time, I like reading book, shopping and listening to music ( Tôi rất vui khi được giới thiệu, tên tôi là Giang. Tôi 25 tuổi. Hiện tại, tôi đang sống ở Hà Nội. Tôi đã có 4 năm kinh nghiệm làm việc ở vị trí nhân viên văn phòng. Vào thời gian rảnh, tôi thích đọc sách, đi mua sắm và nghe nhạc).\r\n\r\nWhy should we hire you? ( Tại sao chúng tôi nên thuê bạn?)\r\nGợi ý: Bạn là ứng viên tốt nhất cho công việc này? Hãy chuẩn bị sẵn sàng để đưa ra những điểm mạnh làm bạn khác biệt so với các ứng viên khác đối với công việc đang ứng tuyển. Câu trả lời súc tích, đủ ý sẽ chinh phục bạn, và nên bắt đầu bằng : thứ nhất,…; thứ hai,…\r\n\r\nTrả lời: I have the savvy, experience, and superior communication ability to be an asset to your company ( Tôi có sự hiểu biết, kinh nghiệm và khả năng giao tiếp giỏi để trở thành một nhân viên trong công ty này).\r\n\r\nWhat are your salary expectations? ( Bạn có mong đợi gì về mức lương?)\r\nGợi ý: Đây là một câu hỏi dễ nhưng nếu chủ quan cũng có thể làm bạn thất bại trong cuộc phỏng vấn. Lương là một vấn đề tế nhị, nhưng cũng cần phải thẳng thắn. Do đó, bạn có thể đánh giá mức lương một cách khách quan dựa trên năng lực thực sự của mình.\r\n\r\nTrả lời: My salary expectations are in line with my experience and qualifications (Mức lương của tôi sẽ phù hợp với kinh nghiệm và năng lực của bản thân mình).\r\n\r\nWhy are you leaving your job? ( Tại sao bạn rời bỏ công việc?)\r\nGợi ý: Hãy thành thật đối với câu hỏi này, nhưng tuyệt đối không được nói xấu về công ty cũ, về lãnh đạo nơi bạn đã làm việc. Thay vào đó, bạn nên đưa ra câu trả lời khôn ngoan những kỳ vọng về một công việc tốt trong tương lai.\r\n\r\nTrả lời: I found myself bored with the work and looking for more challenges. I am an excellent employee and I didn’t want my unhappiness to have any impact on the job I was doing for my employer (Tôi cảm thấy buồn chán với công việc và đang tìm kiếm nhiều thử thách. Tôi là một nhân viên xuất sắc và tôi không muốn những cảm xúc của mình ảnh hưởng tới công việc mà tôi đã làm).\r\n\r\nWhy do you want this job? ( Tại sao bạn muốn công việc này?)\r\nGợi ý: Đây là cơ hội để bạn bày tỏ với nhà tuyển dụng những gì bạn biết về công việc và công ty. Hãy thể hiện nguyện vọng làm việc và cống hiến đối với công việc mà mình ứng tuyển.\r\n\r\nTrả lời: This job is a good fit for what I’ve been doing and enjoying throughout my career. It offers a mix of short – term projects and long – term goals. My organizational skills allow me to successfully multitask and complete both kinds of projects (Công việc này rất phù hợp đối với những gì tôi đã làm và mong muốn trong suốt sự nghiệp của mình. Công việc này đáp ứng một sự kết hợp của một kế hoạch ngắn hạn và mục tiêu dài hạn. Kỹ năng tổ chức của tôi che phép mình hoàn thành xuất sắc các nhiệm vụ và hoàn thành các kế hoạch đề trên).\r\n\r\nHow do you handle stress and pressure? ( Bạn làm thế nào để giải quyết những mệt mỏi và áp lực?)\r\nGợi ý: Cách tốt nhất để trả lời câu hỏi này là đưa ra ví dụ về cách giải quyết mệt mỏi và áp lực của bạn trong công việc cũ.\r\n\r\nTrả lời: I actually work better under pressure and I’ve found that I enjoy working in a challenging environment (Tôi thực sự làm việc tốt hơn dưới áp lực, và tôi đã thấy rằng tôi thích làm việc trong một môi trường đầy thách thức).\r\n\r\nDescribe a difficult work situation ( Hãy mô tả một tình huống làm việc khó khăn của bạn)\r\nGợi ý: Nhà tuyển dụng muốn biết bạn sẽ làm những gì khi bạn đối mặt với những quyết định khó khăn. Tương tự như câu hỏi số 8, hãy đưa ra một ví dụ thực tế.\r\n\r\nTrả lời:When I face a difficult decision, I often keep calm down, and think of  all problems and make the best answers ( Khi tôi phải đối mặt với một quyết định khó khăn, tôi thường giữ bình tĩnh, và suy nghĩ về tất cả các vấn đề, và đưa ra những phương án tốt nhất).\r\n\r\nWhat are your goals for the future? ( Mục tiêu của bạn trong tương lai là gì?)\r\nGợi ý : Đây là câu hỏi được thiết kế để xem bạn có phải là người dễ dàng nhảy việc nếu có cơ hội tốt. Hãy tập trung trả lời câu hỏi dựa trên công việc và công ty mình đang ứng tuyển.\r\n\r\nTrả lời : My long – term goals involve growing with a company where I can continue to learn, take on additional responsibilities, and contribute as much value as I can. (Mục tiêu dài hạn của tôi liên quan tới sự phát triển với một công ty, nơi tôi có thể tiếp tục học hỏi, đảm nhận trách nhiệm và đóng góp nhiều giá trị mà tôi có thể).\r\n\r\nTrên đây là Top 10 các câu hỏi phỏng vấn tiếng Anh xin việc và câu trả lời hay nhất thường gặp trong phỏng vấn xin việc làm. Nếu muốn  lọt vào “ mắt xanh” của nhà tuyển dụng thì đừng bỏ lỡ 10 câu hỏi được Aroma chia sẻ trên nhé. Và các bạn nên chuẩn bị chu đáo cộng với sự tự tin sẽ giúp bạn chiến thắng mọi cuộc phỏng vấn dù khó khăn đến mức độ nào.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hopthu`
--

CREATE TABLE `tb_hopthu` (
  `id` int(11) NOT NULL,
  `id_thanhvien` int(10) NOT NULL,
  `id_nhatd` int(10) NOT NULL,
  `thu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `tb_luuvieclam`
--

CREATE TABLE `tb_luuvieclam` (
  `id` int(11) NOT NULL,
  `id_thanhvien` int(10) DEFAULT NULL,
  `id_baituyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_luuvieclam`
--

INSERT INTO `tb_luuvieclam` (`id`, `id_thanhvien`, `id_baituyen`) VALUES
(1, 1, 4);

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
(4, 'khoi', '123', 2),
(5, 'hoang', '123', 2);

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
  `id_tk` int(11) NOT NULL,
  `loainn` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_thanhvien`
--

INSERT INTO `tb_thanhvien` (`id_thanhvien`, `ten`, `diachi`, `sdt`, `gioitinh`, `bangcap`, `loai`, `ngoaingu`, `anh`, `kinhnghiem`, `slogan`, `id_thanhpho`, `email`, `id_tk`, `loainn`) VALUES
(1, 'Trần Anh Khôi', NULL, '0942755384', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'khoi@gmail.com', 4, NULL),
(2, 'Vũ đình Hoàng', 'số 30 hàng bài', '0922472834', 0, 'giỏi', 0, 0, NULL, 'không', NULL, 2, 'hoang@gmail.com', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ungtuyen`
--

CREATE TABLE `tb_ungtuyen` (
  `id` int(11) NOT NULL,
  `id_thanhvien` int(11) DEFAULT NULL,
  `id_baituyen` int(10) DEFAULT NULL,
  `link_file` varchar(100) NOT NULL,
  `thoigian` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ungtuyen`
--

INSERT INTO `tb_ungtuyen` (`id`, `id_thanhvien`, `id_baituyen`, `link_file`, `thoigian`) VALUES
(1, 1, 5, 'upload/cvupload/QCVN_14_MT_2015_BTNMT.pdf', '2019-04-02 15:18:49');

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
-- Indexes for table `tb_hopthu`
--
ALTER TABLE `tb_hopthu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ntd` (`id_nhatd`),
  ADD KEY `id_tv` (`id_thanhvien`);

--
-- Indexes for table `tb_loaitk`
--
ALTER TABLE `tb_loaitk`
  ADD PRIMARY KEY (`id_loaitk`);

--
-- Indexes for table `tb_luuvieclam`
--
ALTER TABLE `tb_luuvieclam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bt` (`id_baituyen`),
  ADD KEY `id_tvien` (`id_thanhvien`);

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
-- Indexes for table `tb_ungtuyen`
--
ALTER TABLE `tb_ungtuyen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtv` (`id_thanhvien`),
  ADD KEY `idbaituyen` (`id_baituyen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baituyen`
--
ALTER TABLE `tb_baituyen`
  MODIFY `id_baituyen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_baiviet`
--
ALTER TABLE `tb_baiviet`
  MODIFY `id_bai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_hopthu`
--
ALTER TABLE `tb_hopthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_loaitk`
--
ALTER TABLE `tb_loaitk`
  MODIFY `id_loaitk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_luuvieclam`
--
ALTER TABLE `tb_luuvieclam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `tb_taikhoan`
--
ALTER TABLE `tb_taikhoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_thanhpho`
--
ALTER TABLE `tb_thanhpho`
  MODIFY `id_thanhpho` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_thanhvien`
--
ALTER TABLE `tb_thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_ungtuyen`
--
ALTER TABLE `tb_ungtuyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- Constraints for table `tb_hopthu`
--
ALTER TABLE `tb_hopthu`
  ADD CONSTRAINT `id_ntd` FOREIGN KEY (`id_nhatd`) REFERENCES `tb_nhatd` (`id_nhatd`),
  ADD CONSTRAINT `id_tv` FOREIGN KEY (`id_thanhvien`) REFERENCES `tb_thanhvien` (`id_thanhvien`);

--
-- Constraints for table `tb_luuvieclam`
--
ALTER TABLE `tb_luuvieclam`
  ADD CONSTRAINT `id_bt` FOREIGN KEY (`id_baituyen`) REFERENCES `tb_baituyen` (`id_baituyen`),
  ADD CONSTRAINT `id_tvien` FOREIGN KEY (`id_thanhvien`) REFERENCES `tb_thanhvien` (`id_thanhvien`);

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
-- Constraints for table `tb_ungtuyen`
--
ALTER TABLE `tb_ungtuyen`
  ADD CONSTRAINT `idbaituyen` FOREIGN KEY (`id_baituyen`) REFERENCES `tb_baituyen` (`id_baituyen`),
  ADD CONSTRAINT `idtv` FOREIGN KEY (`id_thanhvien`) REFERENCES `tb_thanhvien` (`id_thanhvien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
