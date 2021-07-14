-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2021 lúc 01:43 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcaphe`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangcaphe`
--

CREATE TABLE `hangcaphe` (
  `ma_cafe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_cafe` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trong_luong` int(30) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangcaphe`
--

INSERT INTO `hangcaphe` (`ma_cafe`, `ten_cafe`, `trong_luong`, `don_gia`) VALUES
('DF', 'Cafe Đức', 600, 600000),
('NF', 'Cafe Nhật', 300, 300000),
('PF', 'Cafe Pháp', 400, 400000),
('VF', 'Cafe Việt', 200, 200000),
('YF', 'Cafe Italia', 500, 500000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangcaphe`
--
ALTER TABLE `hangcaphe`
  ADD PRIMARY KEY (`ma_cafe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
