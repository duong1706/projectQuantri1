-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2021 lúc 05:43 PM
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
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `totalprice` double NOT NULL,
  foreign key (`user`) references `users`(`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `user`, `date`, `totalprice`) VALUES
(1, 'okok', '2021-06-15', 10),
(2, 'okok', '2021-06-02', 30),
(5, 'okok', '2021-06-15', 344),
(6, 'okok', '2021-06-15', 3446),
(7, 'okok', '2021-06-06', 271262),
(8, 'okok', '2021-06-16', 271258),
(9, 'okok', '2021-06-16', 90004),
(10, 'okok', '2021-06-16', 90008),
(11, 'okok', '2021-06-16', 180005),
(12, 'okok1', '2021-06-04', 344),
(13, 'okok1234', '2021-06-04', 344),
(14, '343242342', '2021-06-06', 271262),
(15, 'hieu', '2021-06-17', 1511),
(16, 'hieu', '2021-06-17', 130),
(17, 'hieu', '2021-06-17', 130),
(18, 'hieu', '2021-06-17', 130),
(19, 'hieu', '2021-06-17', 130);

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
(16, 'Cho Tây Campuchia', 'cho1.jpg', 'Long đen, 70kg, cao 2m1', 'vang', 10, 5),
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
(49, 'Thỏ Lào', 'x16.jpg', 'Lông trắng như tuyết', 'trắng', 250, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pet_id` int(11) NOT NULL,
  foreign key (`pet_id`) references `pet`(`idPet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`, `pet_id`) VALUES
(1, 'okok', '1234', 16),
(2, 'okok', '1244', 17),
(3, 'okok', 'okok', 16),
(4, 'okok', '3452', 16),
(5, 'okok', '4543', 16),
(6, 'okok', 'an com roi', 17),
(7, 'hieu', 'Sản phẩm thật tuyệt vời', 19),
(8, 'admin', 'Cám ơn cậu', 19),
(9, 'admin', 'hay quas', 24),
(10, 'admin', 'dep qua', 27);

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
  `token` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `matkhau`, `gmail`, `token`, `admin`) VALUES
(11, 'okok1234', '1234', '1234', '123@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiMTIzNCIsInVzZXJuYW1lIjoib2tvazEyMzQiLCJtYXRraGF1IjoiMTIzNCIsImdtYWlsIjoiMTIzQGdtYWlsLmNvbSIsImFkbWluIjoxfQ.F84u9oRfqJXnqty_Lww8vFX1eFVuklTAD8QISHenbzM', 1),
(20, 'admin', 'admin', 'okok', 'admin@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiYWRtaW4iLCJ1c2VybmFtZSI6ImFkbW1pbiIsIm1hdGtoYXUiOiJhZG1pbiIsImdtYWlsIjoiYWRtaW5AZ21haWwuY29tIiwiYWRtaW4iOjF9.DgeBLUb8vRK96dN3ZViuGZXmO4VdSvcA00Y3iN3I8tI', 1),
(21, 'hieu', 'hieu', '1234', 'trunghieungo1706@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiaGlldSIsInVzZXJuYW1lIjoiaGlldSIsIm1hdGtoYXUiOiIxMjM0IiwiZ21haWwiOiJ0cnVuZ2hpZXVuZ28xNzA2QGdtYWlsLmNvbSIsImFkbWluIjowfQ.AzXQzbZDkwY-K4RmdA9WPKdQMba_lnJnslrqGbnEh4c', 0),
(23, 'lao', 'lao', 'lo', 'lao@gmail.com', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoibGFvIiwidXNlcm5hbWUiOiJsYW8iLCJtYXRraGF1IjoibG8iLCJnbWFpbCI6Imxhb0BnbWFpbC5jb20iLCJhZG1pbiI6MH0.UgjknWv4THYtlCoI4N6rJvpmLfdOeUOpInzhiDOPmbQ', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `pet`
--
ALTER TABLE `pet`
  MODIFY `idPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
