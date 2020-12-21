-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2020 lúc 10:58 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_info`
--
-- Error reading structure for table project.admin_info: #1932 - Table 'project.admin_info' doesn't exist in engine
-- Error reading data for table project.admin_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`admin_info`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ans`
--
-- Error reading structure for table project.ans: #1932 - Table 'project.ans' doesn't exist in engine
-- Error reading data for table project.ans: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`ans`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `Subject` varchar(10) NOT NULL,
  `ChapID` int(10) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Info` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`Subject`, `ChapID`, `Title`, `Info`) VALUES
('javascript', 21, 'Chapter 02', 'This is chapter 02'),
('javascript', 20, 'Chapter 01', 'This is chapter 01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exam_list`
--
-- Error reading structure for table project.exam_list: #1932 - Table 'project.exam_list' doesn't exist in engine
-- Error reading data for table project.exam_list: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`exam_list`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expertsugg`
--
-- Error reading structure for table project.expertsugg: #1932 - Table 'project.expertsugg' doesn't exist in engine
-- Error reading data for table project.expertsugg: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`expertsugg`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `expert_info`
--
-- Error reading structure for table project.expert_info: #1932 - Table 'project.expert_info' doesn't exist in engine
-- Error reading data for table project.expert_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`expert_info`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--
-- Error reading structure for table project.feedback: #1932 - Table 'project.feedback' doesn't exist in engine
-- Error reading data for table project.feedback: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`feedback`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `purchase`
--

CREATE TABLE `purchase` (
  `Book` varchar(500) CHARACTER SET utf8 NOT NULL,
  `OrderNo` int(10) NOT NULL,
  `Full` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Addr` varchar(500) CHARACTER SET utf8 NOT NULL,
  `City` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PinCode` int(20) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mobile` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `purchase`
--

INSERT INTO `purchase` (`Book`, `OrderNo`, `Full`, `Addr`, `City`, `PinCode`, `State`, `Email`, `Mobile`) VALUES
('HTML Complete Reference', 4, 'Parth Varde', 'dshjgjhdsjg					', 'Ahmedabad', 380051, 'Gujarat', 'parthvarde50@gmail.com', '8488061712'),
('HTML Complete Reference', 5, 'thanh dat', 'da nang', 'da nang', 550000, 'Đà Nẵng', 'honey.boydat@gmail.com', '905881830'),
('HTML Complete Reference', 6, 'thanh dat', 'da nang', 'da nang', 550000, 'Đà Nẵng', 'honey.boydat@gmail.com', '905881830');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `que`
--
-- Error reading structure for table project.que: #1932 - Table 'project.que' doesn't exist in engine
-- Error reading data for table project.que: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`que`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--
-- Error reading structure for table project.questions: #1932 - Table 'project.questions' doesn't exist in engine
-- Error reading data for table project.questions: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`questions`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `responsesugg`
--
-- Error reading structure for table project.responsesugg: #1932 - Table 'project.responsesugg' doesn't exist in engine
-- Error reading data for table project.responsesugg: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`responsesugg`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subject`
--

CREATE TABLE `subject` (
  `Title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Info` varchar(153) CHARACTER SET utf8 NOT NULL,
  `Dinfo` varchar(850) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `subject`
--

INSERT INTO `subject` (`Title`, `Info`, `Dinfo`) VALUES
('javascript', 'this is javascript', 'this is javascript 2'),
('Java', 'this is javascript Java', 'this is javascript Java this is javascript Java this is javascript Java this is javascript Java this is javascript Java this is javascript Javathis is javascript Java'),
('Java JDK', 'this is Test', 'this is Testthis is Testthis is Testthis is Testthis is Testthis is Testthis is Testthis is Testthis is Testthis is Test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_info`
--
-- Error reading structure for table project.user_info: #1932 - Table 'project.user_info' doesn't exist in engine
-- Error reading data for table project.user_info: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `project`.`user_info`' at line 1

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`ChapID`);

--
-- Chỉ mục cho bảng `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`OrderNo`);

--
-- Chỉ mục cho bảng `subject`
--
ALTER TABLE `subject`
  ADD UNIQUE KEY `Title` (`Title`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `ChapID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `purchase`
--
ALTER TABLE `purchase`
  MODIFY `OrderNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
