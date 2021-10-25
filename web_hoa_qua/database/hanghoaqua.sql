-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2021 lúc 05:34 AM
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
-- Cơ sở dữ liệu: `webhoaqua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoaqua`
--

CREATE TABLE `hanghoaqua` (
  `ma_trai_cay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_trai_cay` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoaqua`
--

INSERT INTO `hanghoaqua` (`ma_trai_cay`, `ten_trai_cay`, `dia_chi`, `dienthoai`) VALUES
('AB', 'Táp Mỹ', '23 Đặng dung hà nội', '02147483647'),
('DL', 'Vải Hưng Yên', '24 Đặng tất hà nội', '02147483647'),
('NTF', 'Xoài cát Cần Thơ', '24 Trân phú hà nội', '02147483647'),
('DS', 'Sầu Riêng Thái Lan', '22 lê lợi hà nội', '02147483647'),
('VMM', 'Nho Việt Nam', '22 lê lợi hà nội', '0214748364');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
