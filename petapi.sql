-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2021 lúc 01:46 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `petapi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet`
--

CREATE TABLE `pet` (
  `idPet` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `color` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pet`
--

INSERT INTO `pet` (`idPet`, `name`, `image`, `content`, `color`, `price`, `star`) VALUES
(16, 'Cho 1', 'cho1.jpg', 'Long vang', 'vang', 90000, 5),
(17, 'Cho 2', 'cho2.jpg', 'Long den', 'den', 500, 5),
(18, 'Cho 3', 'cho3.jpg', 'Long xu', 'vang', 125, 0),
(19, 'Meo 1', 'meo1.jpg', 'Long ngan', 'Xanh', 125, 4),
(20, 'Meo 3', 'meo3.jpg', '4 chan', 'Do', 930, 5),
(21, 'Meo 2', 'meo2.jpg', 'Co long', 'Xanh', 500, 4),
(22, 'Cho 4', 'x3.jpg', 'Co duoi', 'Tim', 145, 2),
(23, 'Meo 4', 'meo4.jpg', 'Long ngan', 'Do', 125, 4),
(24, 'Chuot 1', 'chuot.jpg', 'Long ngan', 'vang', 500, 0),
(25, 'Meo 5', 'x1.jpg', 'Long ngan', 'den', 2000, 0),
(26, 'Cho 5', 'x2.jpg', 'Long ngan', 'blue', 125, 0),
(27, 'Chuot 2', 'x4.jpg', 'Long ngan', 'blue', 90000, 0),
(28, 'Cho 6', 'x5.jpg', 'Long ngan', 'red', 5000, 0),
(29, 'Meo 6', 'x6.jpg', 'Co long', 'red', 2000, 2),
(30, 'Cho 7', 'x7.jpg', 'Long vang', 'den', 235, 4),
(31, 'Cho 8', 'x9.jpg', 'Long ngan', 'Do', 125, 5),
(32, 'Cho 9', 'x10.jpg', 'Long vang', 'Xanh', 500, 4),
(33, 'Cho 10', 'x12.jpg', 'Co long', 'red', 500, 5),
(34, 'Chuot 3', 'x13.jpg', 'Long ngan', 'vang', 235, 4),
(35, 'Chuot 4', 'x14.jpg', 'Long ngan', 'den', 90000, 0),
(36, 'Chuot 5', 'x16.jpg', 'Long vang', 'blue', 235, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `pet_id`) VALUES
(1, 'okok', '1234', 16),
(2, 'okok', '1244', 17),
(3, 'okok', 'okok', 16),
(4, 'okok', '3452', 16),
(5, 'okok', '4543', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `matkhau`, `gmail`, `token`) VALUES
(8, '343242342', '342342242', 'q4242', '3445rerw', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiMzQyMzQyMjQyIiwidXNlcm5hbWUiOiIzNDMyNDIzNDIiLCJtYXRraGF1IjoicTQyNDIiLCJnbWFpbCI6IjM0NDVyZXJ3In0.34PFBnUXuaIHdu9oi00iyDRzL8Cvoq7FNsKmAnXpIjU'),
(10, 'okok1', '12', 'okok', 'okok@gmail.com', ''),
(11, 'okok1234', '1234', '1234', '123@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiMTIzNCIsInVzZXJuYW1lIjoib2tvazEyMzQiLCJtYXRraGF1IjoiMTIzNCIsImdtYWlsIjoiMTIzQGdtYWlsLmNvbSJ9.YJN_99m-jmyGVpXQ9NwSDgiqEHqJA-do-7sIdJpRF7A'),
(12, 'okok', 'okok', 'okok', 'taolahieu099@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoib2tvayIsInVzZXJuYW1lIjoib2tvayIsIm1hdGtoYXUiOiJva29rIiwiZ21haWwiOiJ0YW9sYWhpZXUwOTlAZ21haWwuY29tIn0.4XSmfunT08zWdsWdwo4blVJJCCPx_5-CWVsrqsD49PI');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idPet`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pet`
--
ALTER TABLE `pet`
  MODIFY `idPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
