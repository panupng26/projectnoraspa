-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2018 at 03:21 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noraspa`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_date`, `booking_time_id`, `service_id`, `member_id`, `status`) VALUES
(1, '2018-02-07', 5, 1, 13, 2),
(4, '2018-02-08', 5, 40, 17, 1),
(6, '2018-02-28', 1, 2, 12, 3),
(28, '2018-02-08', 1, 2, 12, 1),
(29, '2018-02-08', 3, 4, 13, 1),
(30, '2018-02-08', 7, 13, 13, 0),
(31, '2018-02-11', 1, 36, 18, 0),
(37, '2018-02-12', 9, 9, 27, 0),
(38, '2018-02-12', 1, 16, 13, 0),
(41, '2018-03-02', 1, 44, 13, 0),
(42, '2018-03-02', 2, 12, 13, 3),
(43, '2018-03-03', 1, 46, 12, 0),
(44, '2018-03-02', 7, 17, 13, 0),
(45, '2018-03-05', 10, 10, 13, 2),
(46, '2018-03-06', 1, 4, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bookingtime`
--

CREATE TABLE `bookingtime` (
  `booking_time_id` int(11) NOT NULL,
  `booking_time_name` varchar(20) NOT NULL,
  `timechk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `bookingtime`
--

INSERT INTO `bookingtime` (`booking_time_id`, `booking_time_name`, `timechk`) VALUES
(1, '08.00-09.00', '08:00:00'),
(2, '09.00-10.00', '09:00:00'),
(3, '10.00-11.00', '10:00:00'),
(4, '11.00-12.00', '11:00:00'),
(5, '12.00-13.00', '12:00:00'),
(6, '13.00-14.00', '13:00:00'),
(7, '14.00-15.00', '14:00:00'),
(8, '15.00-16.00', '15:00:00'),
(9, '16.00-17.00', '16:00:00'),
(10, '17.00-18.00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_member`
--

CREATE TABLE `login_member` (
  `member_id` int(10) NOT NULL,
  `member_firstname` varchar(40) NOT NULL,
  `member_lastname` varchar(40) NOT NULL,
  `member_username` varchar(50) NOT NULL,
  `member_password` varchar(50) NOT NULL,
  `member_tel` varchar(10) NOT NULL,
  `member_level` enum('0','100','500','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_member`
--

INSERT INTO `login_member` (`member_id`, `member_firstname`, `member_lastname`, `member_username`, `member_password`, `member_tel`, `member_level`) VALUES
(12, 'admin', 'admin', 'admin', 'admin', '0987654321', '500'),
(13, 'สายธารา', 'กัญญาดี', 'dow', 'dow', '0980499065', '100'),
(17, 'ภาณุพงศ์', 'คงเสน่ห์', 'graninw', 'graninw', '0937867607', '100'),
(18, 'อรสา', 'อ่อนทอง', 'orasa', '123456', '0611111111', '100'),
(19, 'วันวิสา', 'พืชผล', 'wanwisa', '1234', '0806475087', '100'),
(27, 'narawit', 'vongin', 'nest', 'narawit19', '0935767184', '100'),
(28, 'max', 'fc', 'maxfc123', 'max0897230116', '0856192884', '100'),
(29, 'ฉลาม', 'บก', 'chahlam', '123456', '0999999999', '100'),
(30, 'วศิน', 'จงรักษ์', 'วศิน', '121057', '0642293090', '100');

-- --------------------------------------------------------

--
-- Table structure for table `noraspa_service`
--

CREATE TABLE `noraspa_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(60) NOT NULL,
  `type_id` int(11) NOT NULL,
  `service_price` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noraspa_service`
--

INSERT INTO `noraspa_service` (`service_id`, `service_name`, `type_id`, `service_price`) VALUES
(1, 'อบสมุนไพรเพื่อสุขภาพและความงาม', 3, '100'),
(2, 'นวดไทยเพื่อสุขภาพ', 1, '180'),
(3, 'นวดรักษาอาการปวด', 1, '200'),
(4, 'นวดรักษาอาการปวด+ประคบสมุนไพร', 1, '250'),
(5, 'นวดอโรม่า', 1, '300'),
(7, 'นวดด้วยน้ำนมมิลค์กี้เบอร์รี่ หรือ โยเกิร์ตอโรมาออยล์', 1, '400'),
(8, 'สปาเท้าผ่อนคลาย + กดจุดสะท้อนฝ่าเท้า', 1, '150'),
(9, 'ขัดหน้า', 4, '100'),
(10, 'นวดหน้า', 4, '100'),
(11, 'มาร์คหน้าบำรุงผิวอย่างล้ำลึก', 4, '100'),
(12, 'กัวซาหน้าเด้ง', 4, '150'),
(13, 'สปาหน้าน้ำนม', 4, '350'),
(14, 'รักษาสิวบนใบหน้า', 4, '250'),
(15, 'กดสิวบนใบหน้า', 4, '100'),
(16, 'ลดเลือนริ้วรอยบนใบหน้า', 4, '350'),
(17, 'De-tox ผิวหน้า', 4, '250'),
(18, 'สปาหน้าทองคำ', 4, '400'),
(19, 'Treatmet aha ออร่าไวท์ ', 4, '350'),
(20, 'สครับผลัดเซลล์ผิวเสื่อมสภาพบริเวณริมฝีปาก ', 4, '50'),
(21, 'มารคบำรุงบริเวณรอบดวงตา', 4, '70'),
(22, 'ขจัดสิวเสี้ยนที่จมูก', 4, '50'),
(23, 'สครับผิวกาย', 5, '300'),
(24, 'พอกผิวกาย', 5, '300'),
(25, 'สปาตัวขาวใส', 5, '700'),
(26, 'อาบน้ำแร่+แช่น้ำนม', 5, '300'),
(27, 'รักษาสิวบนแผ่นหลัง', 5, '200'),
(28, 'นวดสลายเซลลูไลท์', 6, '400'),
(29, 'กัวซาบำบัดขจัดสารพัดโรค ', 6, '350'),
(30, 'พาราฟินมือ-เท้า ', 6, '500'),
(31, 'คอร์สเจ้าสาว', 6, '2500'),
(32, 'คอร์สอยู่ไฟดูแลมารดาหลังคลอด', 6, '3500'),
(33, 'คอร์สคืนความสาว สดใส กระชับช่องคลอด', 6, '350'),
(34, 'คอร์สโนราห์หน้าเรียว ', 6, '800'),
(35, 'สระไดร์', 7, '80'),
(36, 'สระซอย', 7, '100'),
(37, 'ทำสีผม', 7, '400'),
(38, 'อบไอน้ำ', 7, '300'),
(39, 'ยืดผมถาวร', 7, '800'),
(40, 'แว็กซ์ เคลือบเงา', 7, '300'),
(41, 'สปาผม', 7, '400'),
(42, 'ทำเล็บมือ ', 7, '100'),
(43, 'ทำเล็บเท้า', 7, '120'),
(44, 'มวยไทย', 2, '250'),
(45, 'มวยไทย คอร์ส 10 ครั้ง', 2, '2000'),
(46, 'มวยไทย คอร์ส 15 ครั้ง ', 2, '2800');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'นวด'),
(2, 'มวยไทย'),
(3, 'อบสมุนไพร'),
(4, 'Facial Treatments'),
(5, 'Body Treatments'),
(6, 'โปรแกรมพิเศษ'),
(7, 'Norah Beauty Salon'),
(9, 'ประเภทใหม่');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bookingtime`
--
ALTER TABLE `bookingtime`
  ADD PRIMARY KEY (`booking_time_id`);

--
-- Indexes for table `login_member`
--
ALTER TABLE `login_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `noraspa_service`
--
ALTER TABLE `noraspa_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `bookingtime`
--
ALTER TABLE `bookingtime`
  MODIFY `booking_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login_member`
--
ALTER TABLE `login_member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `noraspa_service`
--
ALTER TABLE `noraspa_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
