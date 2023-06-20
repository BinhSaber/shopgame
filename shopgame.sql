-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 06, 2023 lúc 02:45 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL,
  `hinhdm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`, `hinhdm`) VALUES
(1, 'Fate Grand Order', 'fgo.png'),
(2, 'Arknights', 'a9.png'),
(10, 'Epic Seven', 'e7.png'),
(11, 'Blue Archive', 'bluearchive.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hinhsp` int(11) NOT NULL,
  `tkgame` varchar(255) NOT NULL,
  `mkgame` varchar(255) NOT NULL,
  `masp` int(11) NOT NULL,
  `makh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `tensp`, `hinhsp`, `tkgame`, `mkgame`, `masp`, `makh`) VALUES
(1, '', 0, 'AsdfzxFsa', '123456', 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `tenhienthi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `trangthaikh` int(11) NOT NULL,
  `vaitro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenhienthi`, `username`, `password`, `email`, `phone`, `trangthaikh`, `vaitro`) VALUES
(4, 'Sabersss', 'admin', 'binh123', 'binhmaibbnn56@gmail.com', '0347174980', 0, 'admin'),
(5, 'Arthur', 'demo', 'binh123', 'binhmaivlvl@gmail.com', '0912390814', 0, 'thành viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `giasp` text NOT NULL,
  `hinhsp` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `trangthaisp` int(11) NOT NULL DEFAULT 0,
  `tkgame` varchar(255) NOT NULL,
  `mkgame` varchar(255) NOT NULL,
  `maloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `giasp`, `hinhsp`, `mota`, `trangthaisp`, `tkgame`, `mkgame`, `maloai`) VALUES
(1, 'Acc gem 6 xe', '250.000', 'accgem4xe.png', 'Táo: 250.\r\nTicket: 120.', 0, 'AzzfrqwGl', '123456', 1),
(2, 'Arknights 84k orun', '200.000', 'accgema9.jpg', '84k orun\r\n110+ ticket', 0, 'BalsakjFjzfr', '123456', 2),
(7, 'acc gem 12k skystones', '200.000', 'accgemepic.jpg', '12k skystones', 0, 'shopgameclone@xyz.com', '11111', 10),
(9, 'Blue Archive Start Basic', '150.000', 'accgemblue.jpg', '17000+ Gem\r\nSẵn 1-6 SSR', 0, 'FopoihYAz', '123456', 11),
(11, 'Acc gem 3 xe', '200.000', 'hinhctsp1.jpg', 'Sẵn 3 xe\r\nStory start basic', 0, 'AzzffqwGl', '12345', 1),
(12, 'Acc gem a9', '200.000', 'background.jpg', 'Acc Gem', 0, 'BalsakjFjzfr', '2441231', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_maloai_iddm` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_maloai_iddm` FOREIGN KEY (`maloai`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
