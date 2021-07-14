-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 14, 2021 lúc 04:53 PM
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
-- Cơ sở dữ liệu: `webmayanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangmayanh`
--

CREATE TABLE `hangmayanh` (
  `ma_may_anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_may_anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dien_thoai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangmayanh`
--

INSERT INTO `hangmayanh` (`ma_may_anh`, `ten_may_anh`, `dia_chi`, `dien_thoai`) VALUES
('AB', 'Canon XTV03', '23 Đặng dung Hà Nội', '024361231787'),
('DL', 'Canon XTV05', '24 Đặng Tất Hà Nội', '024361231789'),
('DS', 'Canon XTV04', '24 Trần Phú Hà Nội', '024361231788'),
('NTF', 'Canon XTV02', '22 Lê Lợi Hà Nội', '024361231786'),
('VNM', 'Canon XTV01', '22 Lê Lai Hà Nội', '024361231785');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hangmayanh`
--
ALTER TABLE `hangmayanh`
  ADD PRIMARY KEY (`ma_may_anh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
