-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 09:23 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `error_reports`
--

CREATE TABLE `error_reports` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `error_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `thanh_vien` varchar(100) NOT NULL COMMENT 'thành viên thanh toán',
  `money` float NOT NULL COMMENT 'số tiền thanh toán',
  `note` varchar(255) DEFAULT NULL COMMENT 'ghi chú thanh toán',
  `vnp_response_code` varchar(255) NOT NULL COMMENT 'mã phản hồi',
  `code_vnpay` varchar(255) NOT NULL COMMENT 'mã giao dịch vnpay',
  `code_bank` varchar(255) NOT NULL COMMENT 'mã ngân hàng',
  `time` datetime NOT NULL COMMENT 'thời gian chuyển khoản'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(3, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(3, 1, '9281', 0),
(4, 1, '4458', 0),
(5, 6, '1632', 1),
(6, 8, '8138', 0),
(7, 1, '4175', 0),
(8, 10, '4735', 0),
(9, 10, '9942', 0),
(10, 10, '6423', 0),
(11, 10, '7455', 0),
(12, 10, '7966', 0),
(13, 10, '8874', 0),
(14, 10, '2712', 1),
(16, 12, '892', 1),
(18, 15, '4590', 0),
(162, 13, '3199', 1),
(163, 13, '5293', 1),
(234, 14, '3258', 0),
(235, 14, '8460', 4),
(236, 14, '2876', 2),
(237, 14, '6032', 2),
(238, 20, '8668', 1),
(239, 21, '8213', 1),
(240, 21, '7568', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(7, '9281', 9, 3),
(8, '9281', 8, 1),
(9, '4458', 9, 3),
(10, '4458', 8, 1),
(11, '1632', 12, 5),
(12, '8138', 11, 5),
(13, '4175', 6, 2),
(14, '4175', 8, 2),
(15, '4735', 30, 1),
(16, '9942', 29, 1),
(17, '6423', 24, 1),
(18, '7455', 29, 1),
(19, '7966', 30, 1),
(20, '8874', 30, 1),
(21, '2712', 22, 1),
(22, '1919', 22, 1),
(23, '892', 22, 1),
(24, '5067', 59, 1),
(25, '4590', 59, 1),
(26, '5197', 58, 1),
(27, '845', 59, 2),
(28, '845', 58, 1),
(29, '3229', 58, 1),
(30, '9908', 58, 1),
(31, '4184', 59, 1),
(32, '7699', 59, 1),
(33, '8443', 59, 2),
(34, '9713', 59, 2),
(35, '8', 58, 1),
(36, '1376', 59, 1),
(37, '2911', 59, 1),
(38, '5004', 58, 1),
(39, '4909', 59, 1),
(40, '8238', 59, 1),
(41, '9351', 59, 1),
(42, '2467', 59, 1),
(43, '2246', 58, 1),
(44, '3494', 59, 1),
(45, '7204', 59, 1),
(46, '7324', 59, 1),
(47, '5457', 59, 1),
(48, '1115', 59, 1),
(49, '4372', 58, 1),
(50, '2133', 58, 1),
(51, '6779', 59, 1),
(52, '1203', 59, 1),
(53, '7630', 59, 1),
(54, '6856', 59, 1),
(55, '3536', 59, 1),
(56, '9364', 59, 1),
(57, '1476', 58, 1),
(58, '4724', 59, 1),
(59, '448', 59, 1),
(60, '2662', 58, 1),
(61, '2002', 59, 1),
(62, '7748', 59, 1),
(63, '7737', 59, 1),
(64, '9530', 58, 1),
(65, '7757', 59, 1),
(66, '2152', 57, 1),
(67, '389', 58, 1),
(68, '2838', 58, 1),
(69, '17', 59, 1),
(70, '6025', 58, 1),
(71, '7641', 58, 1),
(72, '9708', 58, 1),
(73, '9431', 58, 1),
(74, '5215', 59, 1),
(75, '5699', 59, 1),
(76, '656', 59, 1),
(77, '2463', 58, 1),
(78, '7345', 58, 1),
(79, '7345', 57, 1),
(80, '1559', 57, 1),
(81, '981', 59, 1),
(82, '3640', 53, 1),
(83, '2097', 59, 1),
(84, '4970', 59, 1),
(85, '7938', 58, 1),
(86, '9662', 58, 1),
(87, '5835', 58, 1),
(88, '9999', 52, 1),
(89, '4136', 59, 1),
(90, '2944', 59, 1),
(91, '8566', 59, 1),
(92, '8403', 58, 1),
(93, '4021', 59, 1),
(94, '4862', 59, 2),
(95, '4845', 59, 1),
(96, '4169', 6, 1),
(97, '4169', 11, 1),
(98, '4169', 12, 2),
(99, '4169', 58, 1),
(100, '4169', 59, 1),
(101, '827', 59, 1),
(102, '5725', 59, 1),
(103, '3199', 12, 2),
(104, '5293', 59, 2),
(105, '5293', 12, 2),
(106, '8682', 59, 2),
(107, '8682', 12, 1),
(108, '8682', 58, 1),
(109, '8576', 59, 1),
(110, '8576', 58, 1),
(111, '585', 59, 2),
(112, '815', 59, 1),
(113, '7273', 12, 1),
(114, '7273', 53, 1),
(115, '7234', 59, 1),
(116, '8101', 58, 1),
(117, '6386', 59, 1),
(118, '2964', 58, 1),
(119, '4466', 58, 1),
(120, '', 57, 1),
(121, '', 10, 1),
(122, '', 58, 1),
(123, '2212', 58, 2),
(124, '2212', 59, 1),
(125, '8109', 58, 1),
(126, '3880', 58, 2),
(127, '3880', 59, 2),
(128, '3880', 57, 1),
(129, '3880', 44, 1),
(130, '9812', 58, 1),
(131, '6537', 58, 1),
(132, '9725', 58, 1),
(133, '4252', 56, 1),
(134, '7677', 58, 1),
(135, '2787', 58, 1),
(136, '4461', 58, 1),
(137, '9657', 58, 1),
(138, '9657', 56, 1),
(139, '3299', 58, 1),
(140, '6421', 57, 1),
(141, '2935', 55, 1),
(142, '1996', 57, 1),
(143, '1996', 53, 1),
(144, '9833', 57, 2),
(145, '7294', 59, 1),
(146, '7294', 12, 1),
(147, '7294', 58, 1),
(148, '7294', 56, 1),
(149, '5877', 57, 1),
(150, '4926', 58, 2),
(151, '2186', 56, 1),
(152, '8574', 59, 1),
(153, '4548', 58, 1),
(154, '3134', 57, 1),
(155, '3072', 58, 1),
(156, '9451', 57, 1),
(157, '9451', 53, 1),
(158, '4494', 58, 1),
(159, '8745', 59, 1),
(160, '7056', 58, 1),
(161, '7815', 58, 1),
(162, '4247', 57, 1),
(163, '4247', 58, 1),
(164, '4247', 12, 2),
(165, '8228', 58, 1),
(166, '8228', 52, 1),
(167, '1135', 56, 2),
(168, '7121', 53, 1),
(169, '7121', 57, 2),
(170, '7121', 55, 1),
(171, '4567', 56, 2),
(172, '4567', 58, 1),
(173, '9131', 58, 1),
(174, '611', 53, 1),
(175, '7958', 57, 1),
(176, '511', 58, 1),
(177, '8438', 58, 1),
(178, '8438', 39, 1),
(179, '8438', 55, 1),
(180, '5443', 57, 1),
(181, '1208', 58, 1),
(182, '5359', 57, 1),
(183, '749', 58, 1),
(184, '749', 57, 1),
(185, '5240', 58, 1),
(186, '3258', 54, 1),
(187, '3258', 58, 1),
(188, '8460', 65, 1),
(189, '2876', 64, 1),
(190, '6032', 65, 1),
(191, '8668', 66, 1),
(192, '8213', 66, 2),
(193, '7568', 66, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `tenkhachhang` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(22, 'minh', 'minhtq0009@gmail.com', '12321', '202cb962ac59075b964b07152d234b70', '12232'),
(23, 'minh', 'minhtq0009@gmail.com', '1221', '1d72310edc006dadf2190caad5802983', '1212'),
(24, 'minh', 'minhtq0009@gmail.com', '123', '202cb962ac59075b964b07152d234b70', '123'),
(25, 'Bùi Nhật Minh', 'minhtq0009@gmail.com', '123', '202cb962ac59075b964b07152d234b70', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(4, 'Sản Phẩm', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id_nhanvien` int(9) NOT NULL,
  `tennhanvien` varchar(1000) NOT NULL,
  `manv` varchar(100) NOT NULL,
  `dienthoai` int(50) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `chucvu` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) NOT NULL,
  `masp` varchar(100) NOT NULL,
  `giasp` varchar(50) NOT NULL,
  `giakm` varchar(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `giakm`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(66, ' Acer Helios NEO 2023 Core i5-13500H RAM 16GB SSD 512GB RTX 4050 16 inch 2.5K', '1', '25500000', '40000000 ', 10, '1698454027_acerhelios.png', 'CPU: Intel core i5-13500HX (1.8-2.5 GHz up to 4.7 GHz, 14 Cores, 20 Threads, 24 MB Cache)\r\nRam: 16GB DDR5-4800 MHz\r\nỔ cứng: 512GB PCIe Gen4 x4 NVMe SSD\r\nMàn hình: 16″ 2.5K (2560x1600) IPS, Non Touch, 165Hz, 16:10, 100%sRGB, G-SYNC\r\nCard đồ hoạ: NVIDIA® GeForce® RTX 4060 8GB GDDR6\r\nTrọng lượng : 2.6kg', 'CPU: Intel core i5-13500HX (1.8-2.5 GHz up to 4.7 GHz, 14 Cores, 20 Threads, 24 MB Cache)\r\nRAM: 16GB DDR5-DRAM 4800MHz (máy lắp 2 thanh 8GB, 2 khe ram cho phép nâng cấp tới 32GB, theo hãng công bố)\r\nHệ điều hành: Windows 11\r\nỔ cứng: 512GB PCIe Gen 4 x 4 NVME M.2 2280 SSD (có hai khe cắm để nâng cấp, hỗ trợ SSD Gen 4 tốc độ cao, tối đa tới 2TB)\r\nMàn hình:\r\n16″ FHD+ (1920x1200) IPS, LCD, LED, màn nhám, chống lóa, không cảm ứng, tần số quét màn 165Hz, tỷ lệ khung hình 16:10, độ phủ màu 100%sRGB\r\n16″ 2.5K (2560x1600) IPS, LCD, LED, màn nhám, chống lóa, không cảm ứng, tần số quét màn 165Hz, tỷ lệ khung hình 16:10, độ phủ màu 100%sRGB\r\nCard đồ họa:\r\nNVIDIA GeForce® RTX™ 4050 6GB GDDR6\r\nNVIDIA GeForce® RTX™ 4060 8GB GDDR6\r\nCamera: 1080p camera với hai mic thu tầm xa\r\nBàn phím: fullsize, có phần phím số, có 4-zone RGB led\r\nKết nối không dây: Killer Wi-Fi 6 AX1650i + Bluetooth 5.2\r\nCổng kết nối vật lý: 2 cổng USB A 3.2 Gen 2 (trong đó có 1 cổng hỗ trợ sạc thiết bị ngoại vi), khe khoá vật lý, LAN, 1 cổng USB A 3.2 Gen 1, khe đọc ghi thẻ microSD, Jack tai nghe, 2 cổng thunderbolt 4 type C, HDMI, cổng sạc chân tròn\r\nPin: sẽ cập nhật khi hàng trên tay, dự kiến cũng sẽ không thấp hơn 4cell 90wh của phiên bản Helios 300 2022\r\nHệ tản nhiệt: 2 quạt sử dụng công nghệ AeroBlade 3D Fan gen 5, điều chỉnh được setting trong PredatorSense, 4 khe tản gió nóng (2 khe cạnh bản lề, 1 trái, 1 phải) (hệ thống cho phép tăng thông khí lên 10% so với mức thường và với thiết kế lưỡi quạt siêu mỏng, 0.08mm với 89 cánh, giúp quạt nhẹ và chạy êm hơn so với thông thường)\r\nKích thước máy: chưa có kích thước cụ thể nhưng dự kiến sẽ không lớn hơn với kích thước của bản 2022 (35.8 x 27.68 x 2.48-2.59cm, mà bản 2022 đã có kích thước nhỉnh hơn so với bản 2021 rồi)\r\nTrọng lượng: khoảng 2.6 kg (sẽ update cụ thể sau)\r\nMàu sắc: Abyss Black (đen)\r\nNăm sản xuất: 2023\r\nTình trạng: New 100%', 1, 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `error_reports`
--
ALTER TABLE `error_reports`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id_nhanvien`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `error_reports`
--
ALTER TABLE `error_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT cho bảng `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id_nhanvien` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
