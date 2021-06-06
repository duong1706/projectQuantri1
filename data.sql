create table `users` (
    `id` int primary key not null,
    `username` varchar(255) not null,
    `name` varchar(255) not null,
    `matkhau` varchar(255) not null,
    `gmail` varchar(255) not null
);

insert into `users` (`id`, `username`, `name`, `matkhau`, `gmail`) values (1, 'thaiminhhuy','huy','thaiminhhuy','huythai910@gmail.com');

create table `posts` (
    `id` int primary key not null,
    `name` varchar(255) not null,
    `content` varchar(255) not null,
    `pet_id` int not null,
    foreign key (`pet_id`) references `pet`(`idPet`)

);
ALTER TABLE `posts`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;


insert into `users` (`id`, `username`, `name`, `gender`, `created`) values (
    'b1818b2a-0196-49a8-a502-a2b3b8203080', 'chuongdlb', 'Chương Đặng', 'male', now()
);
-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2021 lúc 03:04 PM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idPet`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pet`
--
ALTER TABLE `pet`
  MODIFY `idPet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
