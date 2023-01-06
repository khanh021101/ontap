-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2022 lúc 05:49 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `de4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `trangthai` varchar(255) NOT NULL,
  `baohanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `gia`, `trangthai`, `baohanh`) VALUES
(1, 'Ipad mini 2 Wifi-Cellular 16GB', 'image/sp1.png', '12.000.000đ', 'còn hàng', '12 tháng'),
(2, 'Iphone 5s 16GB( Vàng sâm phanh)', 'image/sp2.png', '15.290.000đ', 'còn hàng', '12 tháng'),
(3, 'Iphone 5c 16GB(Đủ màu)', 'image/sp3.png', '12.000.000đ', 'còn hàng', '12 tháng'),
(5, 'Iphone 5c 16GB(Đủ màu)', 'image/sp3.png', '12.000.000đ', 'còn hàng', '12 tháng'),
(6, 'LG Nexu5', 'image/sp5.png', '10.290.000đ', 'còn hàng', '12 tháng'),
(8, 'HTC One Max- Xách tay', 'image/sp6.png', '14.890.000đ', 'còn hàng', '12 tháng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
