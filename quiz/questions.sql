-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2020 lúc 04:01 PM
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
-- Cơ sở dữ liệu: `website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans1` varchar(80) NOT NULL,
  `ans2` varchar(80) NOT NULL,
  `ans3` varchar(80) NOT NULL,
  `ans4` varchar(80) NOT NULL,
  `ans` int(4) NOT NULL,
  `cat_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `ans`, `cat_id`) VALUES
(1, 'CSS là từ viết tắt của:', 'Creative Style Sheets', 'Computer Style Sheets', 'Cascading Style Sheets', 'Cascade Style Sheets', 2, 1),
(2, 'Phần nào của file HTML được đặt mã tới external style sheet?', ' Trong thẻ body', 'Ở phía cuối của file HTML', 'Ở phần đầu của file HTML', 'Trong thẻ head', 3, 1),
(3, 'Thẻ HTML nào được sử dụng để khởi tạo internal style sheet?', ' Css', 'Text/style', 'Style', ' Script ', 2, 1),
(4, 'Thuộc tính HTML nào được sử dụng để khởi tạo inline style?', ' Font', 'Style', 'Css', 'Text', 1, 1),
(5, 'Cú pháp CSS nào sau đây là chuẩn xác:', 'Body {color:black}', 'Body: color=black', '{body:color=black(body} ', '{body;color:black}', 0, 1),
(6, 'Thuộc tính tạo nên đường viền', 'padding', 'border', 'margin', 'color', 1, 1),
(7, 'Thuộc tính nào được sử dụng để thay đổi màu nền', 'Bgcolor', 'Background-color:', 'Color', 'Background ', 1, 1),
(8, 'Làm thế nào để gán màu nền vào tất cả các thẻ <h1>', ' all.h1 {background-color:#FFFFFF}', 'h1.all {background-color:#FFFFFF}', 'h1 {background-color:#FFFFFF}', 'h2 {background-color:#FFFFFF}', 2, 1),
(9, 'Làm thế nào để thay đổi màu text của thẻ bất kỳ:', 'Text-color:', 'Color:', 'Text-color=', 'Font-color:', 1, 1),
(10, 'Thuộc tính CSS nào được sử dụng để điều khiển kích thước của text:', 'font-style', 'text-style', 'font-size', 'text-size', 2, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
