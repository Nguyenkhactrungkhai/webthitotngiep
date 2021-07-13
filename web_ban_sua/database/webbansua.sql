-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 13, 2021 lúc 05:30 PM
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
-- Cơ sở dữ liệu: `webbansua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsua`
--

CREATE TABLE `hangsua` (
  `ma_hang_sua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_hang_sua` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsua`
--

INSERT INTO `hangsua` (`ma_hang_sua`, `ten_hang_sua`, `dia_chi`, `dienthoai`) VALUES
('AB', 'Abbot', '23 Đặng dung hà nội', 2147483647),
('DL', 'Ductch Lady', '24 Đặng tất hà nội', 2147483647),
('DS', 'Daissy', '24 Trân phú hà nội', 2147483647),
('NTF', 'Nutifood', '22 lê lợi hà nội', 2147483647),
('VNM', 'vinamilk', '22 lê lợi hà nội', 2147483647);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangsua`
--
ALTER TABLE `hangsua`
  ADD PRIMARY KEY (`ma_hang_sua`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
