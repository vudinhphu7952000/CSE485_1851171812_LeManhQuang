-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 05:02 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `login`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `gt` varchar(80) NOT NULL,
  `date` date NOT NULL,
  `dt` varchar(80) NOT NULL,
  `tg` varchar(80) NOT NULL,
  `place` varchar(80) NOT NULL,
  `complete` varchar(80) NOT NULL,
  `hl` varchar(80) NOT NULL,
  `hk` varchar(80) NOT NULL,
  `card` int(22) NOT NULL,
  `nc` varchar(80) NOT NULL,
  `placeC` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `faculty`
--

INSERT INTO `faculty` (`id`, `faculty`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Kinh Tế'),
(3, 'Cơ điện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `id_major` varchar(80) NOT NULL,
  `combination` varchar(80) NOT NULL,
  `total` varchar(80) NOT NULL,
  `faculty` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `majors`
--

INSERT INTO `majors` (`id`, `name`, `id_major`, `combination`, `total`, `faculty`) VALUES
(1, 'Kỹ thuật phần mềm ', 'TLA106', 'A00 A01', '500', 'Công nghệ thông tin'),
(2, 'Quản trị kinh doanh', 'TLA402', 'A00 A01', '200', 'Kinh Tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gt` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `account`, `password`, `email`, `gt`, `date`) VALUES
(1, ' Lê Mạnh Quang ', 'quang', '12345', 'lmquang0812@gmail.com', 'Nam', '2020-12-08'),
(2, ' Nguyễn Minh Quang ', 'quangngu', '45678', 'lmquang0812@gmail.com', 'Nam', '2020-10-22'),
(9, ' Lê Mạnh Quang ', 'quang123', '2222', 'lmquang0812@gmail.com', 'Nam', '2020-10-06'),
(9, ' Lê Mạnh Quang ', 'quang77', 'quang77', 'lmquang0812@gmail.com', 'Nam', '2020-11-22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`,`faculty`),
  ADD KEY `faculty` (`faculty`);

--
-- Chỉ mục cho bảng `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faculty` (`faculty`),
  ADD KEY `faculty_2` (`faculty`),
  ADD KEY `faculty_3` (`faculty`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_ibfk_1` FOREIGN KEY (`faculty`) REFERENCES `faculty` (`faculty`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
