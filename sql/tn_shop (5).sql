-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 07, 2020 lúc 04:58 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tn_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `BRANDS` tinyint(1) NOT NULL COMMENT 'thương hiệu',
  `CATEGORIES` tinyint(1) NOT NULL COMMENT 'thể loại',
  `OPERATION` tinyint(1) NOT NULL COMMENT 'hệ điều hành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_categorie`, `name`, `logo`, `BRANDS`, `CATEGORIES`, `OPERATION`) VALUES
(8, 'IPHONE 99%', 'http://www.api.tnshop/files/6h4erfau1583742938TN-Shop.jpeg', 1, 0, 0),
(9, 'IPHONE', 'http://www.api.tnshop/files/5kzykd3w1583742679TN-Shop.jpeg', 1, 0, 0),
(10, 'Quảng Cáo', 'http://www.api.tnshop/files/bnbj2kaw1582801894TN-Shop.png', 0, 0, 0),
(11, 'Slide Web Site', 'http://www.api.tnshop/files/0hv6kdn21582801908TN-Shop.png', 0, 0, 0),
(12, 'ĐT Đang Hot', 'http://www.api.tnshop/files/ob0sddzu1582800877TN-Shop.jpeg', 0, 1, 0),
(13, 'OPPO', 'http://www.api.tnshop/files/4epge3cr1582800094TN-Shop.png', 1, 0, 0),
(14, 'Máy tính bảng', 'http://www.api.tnshop/files/cupymbzy1587136784TN-Shop.png', 0, 1, 0),
(16, 'IOS', 'http://www.api.tnshop/files/ae88ptzt1582801534TN-Shop.jpeg', 0, 0, 1),
(17, 'ANDROID', 'http://www.api.tnshop/files/oq2rm4cj1582801586TN-Shop.png', 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL,
  `rating` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `fullName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_rep` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`Id`, `user`, `content`, `verify`, `rating`, `id_product`, `fullName`, `time`, `content_rep`) VALUES
(1, 2, 'noi dung', 1, 5, 5, 'Nguyen Thien ngoc', '25/1/2020 19:51:32:7', 'Cảm ơn quý khách đã để lại nhận xét!'),
(2, 1, 'asd', 1, 3, 5, 'Find', '25/1/2020 19:51:32:7', ''),
(3, 0, 'asd', 1, 3, 5, 'Find', '25/1/2020 19:51:32:7', ''),
(4, 1, 'asd', 1, 3, 5, 'Find', '', ''),
(5, 1, 'asd', 1, 3, 5, 'Find', '', ''),
(6, 1, 'Runc dictum, erat id molestie vestibulum, ex leo vestibulum justo, luctus tempor erat sem quis', 1, 3, 5, 'Find', '', ''),
(8, 1, 'ádasd', 1, 4, 5, 'Find', '', ''),
(9, 1, 'ádasd', 1, 4, 5, 'Find', '', ''),
(10, 1, 'um, ex leo vestibulu', 0, 3, 5, 'Find', '', ''),
(12, 1, 'Do not have', 0, 3, 5, 'Find', '25/1/2020 19:51:32:7', ''),
(13, 1, 'aum, erat id molestie vestibulum, ex ', 0, 5, 5, 'Find', '25/1/2020 19:51:32:7', ''),
(14, 1, 'ád', 0, 3, 5, 'Find', '25/1/2020 19:51:32:7', ''),
(15, 0, 'noidung', 0, 4, 8, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(16, 0, 'um, erat id molestie vestibulum, ex leo vestibu', 0, 3, 8, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(17, 0, 'um, erat id molestie vestibulum, ex leo vestibu', 0, 3, 8, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(18, 0, 'aaaaaaaaaa', 0, 4, 2, 'TranDe', '25/1/2020 19:51:32:7', ''),
(19, 0, 'ádđ', 0, 3, 2, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(20, 0, 'ádđ', 1, 3, 2, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(21, 0, 'Noi dung', 0, 5, 8, 'Khachs', '25/1/2020 19:51:32:7', ''),
(22, 0, 'gi vay. cai nay la test moment', 0, 5, 5, 'Nau Dev', '25/1/2020 19:51:32:7', ''),
(23, 0, 'haha', 1, 5, 5, 'Nau Dev', '25/1/2020 20:16:43', ''),
(24, 0, 'Loanja qá', 1, 5, 6, 'Dũng', '25/1/2020 23:4:15', 'Cảm ơn!'),
(25, 0, 'OPERATION SYSTEM', 1, 4, 6, 'Nau Dev', '25/1/2020 23:11:14', 'Camr onw');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `dataUser` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataBill` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderOnline` tinyint(1) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`Id`, `dataUser`, `dataBill`, `orderOnline`, `status`) VALUES
(21, '{}', '{\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"okc\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\"}]}', 1, 0),
(23, '{}', '{\"fullName\":\"Dũng\",\"phone\":\"03456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"wtf\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\"}]}', 1, 0),
(24, '{}', '{\"fullName\":\"Dũng\",\"phone\":\"03456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"wtf\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\"}]}', 1, 0),
(30, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"d\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 14:57:59\"}', 1, 2),
(31, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:30:21\"}', 1, 0),
(32, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Devs\",\"phone\":\"123456789s\",\"address\":\"187 Dien Bien Phu, Da Kao Wards\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:30:58\"}', 0, 0),
(33, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:32:10\"}', 0, 0),
(34, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:34:10\"}', 0, 0),
(35, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:34:53\"}', 0, 0),
(36, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:35:38\"}', 0, 0),
(37, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:38:31\"}', 0, 0),
(38, '{}', '{\"total\":22315500,\"totalNotSale\":23490000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"6\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},\"IdNow\":1582660021543,\"quality_by\":1,\"name\":\"Samsung Galaxy A51\",\"code\":\"MB-galaxyA5\",\"screen\":\"5\",\"system\":\"5000000\"},{\"Id\":\"8\",\"color_by\":{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},\"IdNow\":1582701443494,\"quality_by\":1,\"name\":\"Samsung Galaxy Tab S6\",\"code\":\"MTB-TabS6\",\"screen\":\"5\",\"system\":\"18490000\"}],\"time\":\"26/1/2020 15:59:3\"}', 1, 0),
(39, '{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}', '{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Thieen Ngoc\",\"phone\":\"0982415396\",\"address\":\"Tiền Yên Hoài Đức Hà Nội\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:6:44\"}', 0, 0),
(40, '{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}', '{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Thieen Ngoc\",\"phone\":\"0982415396\",\"address\":\"Gia Lai\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:28:16\"}', 0, 0),
(41, '{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}', '{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"ad\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:56:58\"}', 1, 0),
(42, '{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}', '{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"sad\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:57:52\"}', 0, 0),
(43, '{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}', '{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nguyễn Thiên Ngọc\",\"phone\":\"087874525\",\"address\":\"Tiền Yên, Hoài Đức\",\"note_order\":\" Chúng tôi khuyến khích thanh toán onl\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:59:25\"}', 0, 3),
(44, '{}', '{\"total\":8500000,\"totalNotSale\":10000000,\"fullName\":\"Nguyen Thien\",\"phone\":\"098245824\",\"address\":\"Ha Noi\",\"note_order\":\"ghi chu\",\"dataProduct\":[{\"Id\":\"2\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#00d5ff\"},\"IdNow\":1587137490063,\"quality_by\":2,\"name\":\"Samsung Galaxy S20\",\"code\":\"MB-SS-S20\",\"screen\":\"15\",\"system\":\"5000000\"}],\"time\":\"17/3/2020 22:32:30\"}', 0, 1),
(45, '{\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"orders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Thieen Ngoc\",\"phone\":\"0982415396\",\"address\":\"Tiền Yên Hoài Đức Hà Nội\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:6:44\"},\"orderOnline\":\"0\",\"status\":\"0\"},{\"Id\":\"40\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}\",\"dataBill\":{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Thieen Ngoc\",\"phone\":\"0982415396\",\"address\":\"Gia Lai\",\"note_order\":\"\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:28:16\"},\"orderOnline\":\"0\",\"status\":\"0\"},{\"Id\":\"41\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}\",\"dataBill\":{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"ad\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:56:58\"},\"orderOnline\":\"1\",\"status\":\"0\"},{\"Id\":\"42\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}\",\"dataBill\":{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nau Dev\",\"phone\":\"123456789\",\"address\":\"187 Dien Bien Phu, Da Kao Ward\",\"note_order\":\"sad\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:57:52\"},\"orderOnline\":\"0\",\"status\":\"0\"},{\"Id\":\"43\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\",\"oders\":[{\"Id\":\"39\",\"dataUser\":\"{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"}\",\"dataBill\":{\"authenticate\":\"Basic Zml0dGhpZW5uZ29jQGdtYWlsLmNvbToxMjMxMjM=\",\"name\":\"Thieen Ngoc\",\"email\":\"fitthienngoc@gmail.com\",\"id_user\":\"3\",\"phone\":\"\",\"permission\":\"\"},\"orderOnline\":\"0\",\"status\":\"0\"}]}\",\"dataBill\":{\"total\":12000000,\"totalNotSale\":12000000,\"fullName\":\"Nguyễn Thiên Ngọc\",\"phone\":\"087874525\",\"address\":\"Tiền Yên, Hoài Đức\",\"note_order\":\" Chúng tôi khuyến khích thanh toán onl\",\"dataProduct\":[{\"Id\":\"10\",\"color_by\":{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"},\"IdNow\":1582707970951,\"quality_by\":2,\"name\":\" Samsung Galaxy A01\",\"code\":\"MB-AKJSh\",\"screen\":\"\",\"system\":\"6000000\"}],\"time\":\"26/1/2020 16:59:25\"},\"orderOnline\":\"0\",\"status\":\"3\"}]}', '{\"total\":8500000,\"totalNotSale\":10000000,\"fullName\":\"Thien Ngoc\",\"phone\":\"098525585\",\"address\":\"Hoai Duc Ha Noi\",\"note_order\":\"ghi chu\",\"dataProduct\":[{\"Id\":\"2\",\"color_by\":{\"nameColor\":\"Xanh ngọc\",\"code\":\"#00d5ff\"},\"IdNow\":1587561625659,\"quality_by\":2,\"name\":\"Samsung Galaxy S20\",\"code\":\"MB-SS-S20\",\"screen\":\"15\",\"system\":\"5000000\"}],\"time\":\"22/3/2020 20:21:40\"}', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `Id` int(11) NOT NULL,
  `code` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quality` int(11) NOT NULL,
  `screen` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'giảm giá',
  `screenName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenPixel` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenWidth` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screenCam_ung` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'giá',
  `front_camera` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'banner product',
  `front_cameraDoPhanGiai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_cameraVideoCall` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_cameraFlash` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_cameraNangCao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_camera` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_cameraDoPhanGiai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_cameraQuayPhim` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_cameraFlash` tinyint(1) NOT NULL,
  `back_cameraNangCao` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'color',
  `cpuHeDH` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpuChipset` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpuSpeed` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpuChipDoHoa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rom` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memorySD` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mangDiDong` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wifi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bluetooth` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketNoiKhac` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinDungLuong` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinType` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinCongNghe` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_lieu` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trong_luong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_nang_dac_biet` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thietKe` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictures` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `order_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`Id`, `code`, `name`, `quality`, `screen`, `screenName`, `screenPixel`, `screenWidth`, `screenCam_ung`, `system`, `front_camera`, `front_cameraDoPhanGiai`, `front_cameraVideoCall`, `front_cameraFlash`, `front_cameraNangCao`, `back_camera`, `back_cameraDoPhanGiai`, `back_cameraQuayPhim`, `back_cameraFlash`, `back_cameraNangCao`, `cpu`, `cpuHeDH`, `cpuChipset`, `cpuSpeed`, `cpuChipDoHoa`, `ram`, `rom`, `memorySD`, `sim`, `mangDiDong`, `wifi`, `gps`, `bluetooth`, `ketNoiKhac`, `pin`, `pinDungLuong`, `pinType`, `pinCongNghe`, `categories`, `chat_lieu`, `trong_luong`, `tinh_nang_dac_biet`, `thietKe`, `pictures`, `rating`, `order_count`) VALUES
(2, 'MB-SS-S20', 'Samsung Galaxy S20', 1, '15', 'Dynamic AMOLED 2X', '2K+ (1440 x 3200 Pixels)', '6.2\"', 'Kính cường lực Corning Gorilla Glass 6', '5000000', '{\"name\":\"800-300-800x300-27.png\",\"type\":\"image/png\",\"size\":\"69 kB\",\"base64\":\"http://www.api.tnshop/files/rm3vdt5i1583204615TN-Shop.png\",\"file\":[]}', '10 MP', 'Hỗ trợ VideoCall thông qua ứng dụng', 'Đang cập nhật', 'HDR, Góc rộng (Wide), Tự động lấy nét (AF), Quay video Full HD, Làm đẹp (Beautify), Nhận diện khuôn mặt, Chụp bằng cử chỉ, Flash màn hình, Nhãn dán (AR Stickers), Quay phim 4K, Xoá phông', '', 'Chính 64 MP & phụ 12 MP, 12 MP', 'Quay phim HD 720p@960fps, Quay phim FullHD 1080p@30fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@30fps, Quay phim 4K 2160p@60fps, Quay phim 8K 4320p@24fps', 1, '	Zoom quang học, Góc rộng (Wide), Góc siêu rộng (Ultrawide), Trôi nhanh thời gian (Time Lapse), Ban đêm (Night Mode), Xoá phông, Quay chậm (Slow Motion), Quay siêu chậm (Super Slow Motion), Điều chỉnh khẩu độ, Lấy nét theo pha (PDAF), A.I Camera, Tự động lấy nét (AF), Chạm lấy nét, Nhận diện khuôn mặt, HDR, Toàn cảnh (Panorama), Chống rung quang học (OIS), Làm đẹp (Beautify), Chuyên nghiệp (Pro)', '[{\"nameColor\":\"Xanh ngọc\",\"code\":\"#00d5ff\"},{\"nameColor\":\"Đỏ\",\"code\":\"#fa5555\"},{\"nameColor\":\"Trắng\",\"code\":\"#ffffff\"}]', 'Android 10', 'Exynos 990 8 nhân', '2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz', 'Mali-G77 MP11', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ)', 'Hỗ trợ 4G', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi Direct, Wi-Fi hotspot', 'BDS, A-GPS, GLONASS', 'LE, A2DP, apt-X, v5.0', 'NFC, OTG', 'Đang cập nhật', '4000 mAh', 'Pin chuẩn Li-Ion', 'Tiết kiệm pin, Siêu tiết kiệm pin, Sạc pin nhanh, Sạc pin không dây, Sạc ngược không dây', '[{\"value\":\"10\",\"label\":\"Quảng Cáo\",\"logo\":\"http://www.api.tnshop/files/bnbj2kaw1582801894TN-Shop.png\"},{\"value\":\"12\",\"label\":\"ĐT Đang Hot\",\"logo\":\"http://www.api.tnshop/files/ob0sddzu1582800877TN-Shop.jpeg\"},{\"value\":\"17\",\"label\":\"ANDROID\",\"logo\":\"http://www.api.tnshop/files/oq2rm4cj1582801586TN-Shop.png\"}]', 'Khung kim loại & Mặt lưng kính cường lực', '163 g', 'Dolby Audio™, Chuẩn Kháng nước, Chuẩn kháng bụi, Sạc pin cho thiết bị khác, Đèn pin, Sạc pin không dây, Chạm 2 lần sáng màn hình, Sạc pin nhanh, Samsung DeX, Nhân bản ứng dụng, Samsung Pay, Thu nhỏ màn hình sử dụng một tay, Trợ lý ảo Samsung Bixby, Màn hình luôn hiển thị AOD, Chặn tin nhắn, Ghi âm cuộc gọi, Chặn cuộc gọi', 'Nguyên khối', '[{\"name\":\"samsung-galaxy-s20-ultra-128gb.jpg\",\"type\":\"image/jpeg\",\"size\":\"42 kB\",\"base64\":\"http://www.api.tnshop/files/xmydesds1582794220TN-Shop.jpeg\",\"file\":[]},{\"name\":\"samsung-galaxy-s20-5g (3).jpg\",\"type\":\"image/jpeg\",\"size\":\"28 kB\",\"base64\":\"http://www.api.tnshop/files/5fngxv3x1582794246TN-Shop.jpeg\",\"file\":[]}]', 2, 29),
(5, 'MB-OppoRno2F', 'Điện thoại OPPO Reno2 F', 5, '10', 'AMOLED', 'Full HD+ (1080 x 2340 Pixels)', '6.5\"', 'Kính cường lực Corning Gorilla Glass 5', '600000', '{\"name\":\"big-oppo-800-300-800x300-1.png\",\"type\":\"image/png\",\"size\":\"72 kB\",\"base64\":\"http://www.api.tnshop/files/mbnhvzy71583204819TN-Shop.png\",\"file\":[]}', '16 MP', 'Hỗ trợ VideoCall thông qua ứng dụng', 'Đang cập nhật', 'Xoá phông, Làm đẹp (Selfie A.I Beauty), Flash màn hình, Quay video HD, Chụp bằng cử chỉ, Nhận diện khuôn mặt, Quay video Full HD, Tự động lấy nét (AF), HDR', '', 'Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP', 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps', 1, 'Lấy nét theo pha (PDAF), A.I Camera, Ban đêm (Night Mode), Trôi nhanh thời gian (Time Lapse), Quay chậm (Slow Motion), Xoá phông, Chụp bằng cử chỉ, Góc rộng (Wide), Góc siêu rộng (Ultrawide), Tự động lấy nét (AF), Chạm lấy nét, Nhận diện khuôn mặt, HDR, Toàn cảnh (Panorama), Làm đẹp (Beautify), Chuyên nghiệp (Pro)', '[{\"nameColor\":\"Xanh ngọc\",\"code\":\"#00a0ff\"},{\"nameColor\":\"Hồng\",\"code\":\"#d835ff\"}]', '	Android 9.0 (Pie)', 'MediaTek Helio P70 8', '4 nhân 2.1 GHz & 4 nhân 2.0 GHz', 'Mali-G72 MP3', '8 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 256 GB', '2 Nano SIM', 'Hỗ trợ 4G', 'Wi-Fi 802.11 a/b/g/n/ac, Dual-band, Wi-Fi Direct, Wi-Fi hotspot', 'BDS, A-GPS, GLONASS', 'A2DP, LE, v4.2', 'OTG', '', '4000 mAh', 'Pin chuẩn Li-Po', 'Tiết kiệm pin, Siêu tiết kiệm pin, Sạc nhanh VOOC', '[{\"value\":\"10\",\"label\":\"Quảng Cáo\",\"logo\":\"http://www.api.tnshop/files/bnbj2kaw1582801894TN-Shop.png\"},{\"value\":\"11\",\"label\":\"Slide Web Site\",\"logo\":\"http://www.api.tnshop/files/0hv6kdn21582801908TN-Shop.png\"},{\"value\":\"17\",\"label\":\"ANDROID\",\"logo\":\"http://www.api.tnshop/files/oq2rm4cj1582801586TN-Shop.png\"},{\"value\":\"12\",\"label\":\"ĐT Đang Hot\",\"logo\":\"http://www.api.tnshop/files/ob0sddzu1582800877TN-Shop.jpeg\"}]', 'Khung nhựa & Mặt lưng kính', '195 g', 'Mở khoá khuôn mặt, Mở khoá vân tay dưới màn hình,\n	Dolby Audio™\nTrợ lý ảo Google Assistant\nSạc pin nhanh\nGhi âm cuộc gọi\nChặn cuộc gọi\nChặn tin nhắn\nNhân bản ứng dụng\nĐa cửa sổ (chia đôi màn hình)\nĐèn pin', 'Nguyên khối', '[{\"name\":\"oppo-reno2-f-400x460.png\",\"type\":\"image/png\",\"size\":\"181 kB\",\"base64\":\"http://www.api.tnshop/files/zzt4jens1582801926TN-Shop.png\",\"file\":[]},{\"name\":\"oppo-reno2-f-note-2.jpg\",\"type\":\"image/jpeg\",\"size\":\"146 kB\",\"base64\":\"http://www.api.tnshop/files/be4num8v1582801999TN-Shop.jpeg\",\"file\":[]},{\"name\":\"oppo-reno2-f-note-2.jpg\",\"type\":\"image/jpeg\",\"size\":\"146 kB\",\"base64\":\"http://www.api.tnshop/files/vb2vygo21582801926TN-Shop.jpeg\",\"file\":[]}]', 4, 23),
(6, 'MB-galaxyA5', 'Samsung Galaxy A51', 10, '5', 'Super AMOLED', 'Full HD+ (1080 x 2400 Pixels)', '	6.5\"', '	Kính cường lực Corning Gorilla Glass 3', '5000000', '{\"name\":\"800-300-800x300-20.png\",\"type\":\"image/png\",\"size\":\"48 kB\",\"base64\":\"http://www.api.tnshop/files/hp4y7kcz1583204858TN-Shop.png\",\"file\":[]}', '	32 MP', 'Hỗ trợ VideoCall thông qua ứng dụng', 'Đang cập nhật', 'Tự động lấy nét (AF), A.I Camera, Xoá phông, Quay phim 4K, Flash màn hình, Quay video HD, Nhận diện khuôn mặt, Làm đẹp (Beautify), Quay video Full HD, Góc rộng (Wide)', '', 'Chính 48 MP & Phụ 12 MP, 5 MP, 5 MP', 'Quay phim HD 720p@30fps, Quay phim HD 720p@240fps, Quay phim FullHD 1080p@30fps, Quay phim 4K 2160p@30fps', 1, '	Quay siêu chậm (Super Slow Motion), Lấy nét theo pha (PDAF), Ban đêm (Night Mode), Trôi nhanh thời gian (Time Lapse), Quay chậm (Slow Motion), Xoá phông, Siêu cận (Macro), Góc siêu rộng (Ultrawide), Chụp bằng cử chỉ, Tự động lấy nét (AF), Chạm lấy nét, Nhận diện khuôn mặt, HDR, Toàn cảnh (Panorama), Làm đẹp (Beautify), Chuyên nghiệp (Pro)', '[{\"nameColor\":\"Xanh ngọc\",\"code\":\"#4affa5\"},{\"nameColor\":\"Đỏ Tươi\",\"code\":\"#ff1010\"}]', 'Android 10', 'Exynos 9611 8 nhân', '	4 nhân 2.3 Ghz & 4 nhân 1.7 GHz', 'U)	Mali-G72', '6 GB', '128 GB', 'MicroSD, hỗ trợ tối đa 1 TB', '2 SIM Nano (SIM 2 chung khe thẻ nhớ)', 'Hỗ trợ 4G', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi Direct, Wi-Fi hotspot', 'BDS, A-GPS, GLONASS', 'A2DP, LE, v4.2', 'NFC, OTG', '', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"value\":\"12\",\"label\":\"ĐT Đang Hot\",\"logo\":\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAUEBAYFBQUGBgYHCQ4JCQgICRINDQoOFRIWFhUSFBQXGiEcFxgfGRQUHScdHyIjJSUlFhwpLCgkKyEkJST/2wBDAQYGBgkICREJCREkGBQYJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCT/wAARCAHCAyADASIAAhEBAxEB/8QAHAABAQEAAwEBAQAAAAAAAAAAAAIBBgcIBQQD/8QAWBAAAgEDAgICCwcODAQGAwAAAAECAwQRBQYHEiExCBMUQVFhcYGRobEVIjJCcrLBFxgjMzU3UlVic3SSlNEWJCY0Q1NWgpOz0uJEVISiJSc2g6PhY2TC/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEFAwQGAgf/xAA1EQEAAgEDAQUECQQDAQAAAAAAAQIDBAURMRIhMkFRE3GBkQYUIjM0QmGhsRVSwdEjQ+Hw/9oADAMBAAIRAxEAPwDvMAGJ7AAAAAAAADTDQNRqMRoFI1GIpAaikSikSKRSJRSDypFIlFICkUiUWgNRSJRSJgUikSikBSNRiKQGo1GIoDUajEagNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABjMZrMYEsxlEgYyWUyWBLJZTMYEMllslgQyWWyGQJZLLZDAlkspksJSyWUzGEpZLKZJAlmMpkgYYaYwAAAAAAAAAAAAAAAAAAAAAAjTEaBpRJQGlIlFICkajEUiUNRSMRSCGotEItAUikSikBSKRKKQgUikSikSNRSMRqA0oxGgaajDUBoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMZhpgGGM0wCWYzWYwJZLKZLAlkspksgSyWUyWBL', 'Đang cập nhật', 'Đang cập nhật', '	Đèn pin\nChạm 2 lần sáng màn hình\nSạc pin nhanh\nChặn cuộc gọi\nGhi âm cuộc gọi\nChặn tin nhắn\nMặt kính 2.5D\nMàn hình luôn hiển thị AOD\nTrợ lý ảo Samsung Bixby\nThu nhỏ màn hình sử dụng một tay\nNhân bản ứng dụng\nKhông gian trò chơi', 'Đang cập nhật', '[{\"name\":\"samsung-galaxy-a51-white-400x460.png\",\"type\":\"image/png\",\"size\":\"188 kB\",\"base64\":\"http://www.api.tnshop/files/ek202vvv1583204858TN-Shop.png\",\"file\":[]},{\"name\":\"samsung-galaxy-a51-note.jpg\",\"type\":\"image/jpeg\",\"size\":\"176 kB\",\"base64\":\"http://www.api.tnshop/files/zrtnnr3q1583204858TN-Shop.jpeg\",\"file\":[]}]', 4, 32),
(7, 'MB-ip11', 'iPhone 11 Pro Max 64GB', 20, '', 'OLED', '2K+ (1440 x 3200 Pixels)', '6.5\"', 'Kính cường lực Corning Gorilla Glass 5', '20000000', '{\"name\":\"big-iphone-800-300-800x300-3.png\",\"type\":\"image/png\",\"size\":\"50 kB\",\"base64\":\"http://www.api.tnshop/files/77zehzyq1583204882TN-Shop.png\",\"file\":[]}', '	12 MP', '	Có', 'Đang cập nhật', 'Xoá phông, Quay phim 4K, Nhãn dán (AR Stickers), Retina Flash, Quay video HD, Nhận diện khuôn mặt, Quay video Full HD, Tự động lấy nét (AF), HDR, Quay chậm (Slow Motion)', '', '3 camera 12 MP', 'Quay phim HD 720p@30fps, Quay phim FullHD 1080p@30fps, Quay phim FullHD 1080p@60fps, Quay phim FullHD 1080p@120fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@24fps, Quay phim 4K 2160p@30fps, Q', 1, '	Góc rộng (Wide), Xoá phông, Quay chậm (Slow Motion), Trôi nhanh thời gian (Time Lapse), Ban đêm (Night Mode), Góc siêu rộng (Ultrawide), Tự động lấy nét (AF), Chạm lấy nét, Nhận diện khuôn mặt, HDR, Toàn cảnh (Panorama), Chống rung quang học (OIS)', '[{\"nameColor\":\"Gray\",\"code\":\"#d1d1d1\"}]', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"value\":\"9\",\"label\":\"IPHONE\",\"logo\":\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wgARCAO+A+gDASIAAhEBAxEB/8QAHQABAAEEAwEAAAAAAAAAAAAAAAECAwcIBAUGCf/EABcBAQEBAQAAAAAAAAAAAAAAAAABAgP/2gAMAwEAAhADEAAAAdqQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACCUEIpWYsWTmPC+RM1Oo7UugAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"name\":\"tu1ea3i xuu1ed1ng.jfif\",\"type\":\"image/jpeg\",\"size\":\"2 kB\",\"base64\":\"http://www.api.tnshop/files/xknp3i4j1583129404TN-Shop.jpeg\",\"file\":[]},{\"name\":\"iphone-11-pro-max-note.jpg\",\"type\":\"image/jpeg\",\"size\":\"135 kB\",\"base64\":\"http://www.api.tnshop/files/2ewshgu31583129404TN-Shop.jpeg\",\"file\":[]},{\"name\":\"iphone-11-pro-max-mau-bac-1-org.jpg\",\"type\":\"image/jpeg\",\"size\":\"241 kB\",\"base64\":\"http://www.api.tnshop/files/6ykk247m1583129404TN-Shop.jpeg\",\"file\":[]}]', 0, 0),
(8, 'MTB-TabS6', 'Samsung Galaxy Tab S6', 10, '5', 'Super AMOLED', '2560 x 1600 pixels', '10.5\"', 'Đang cập nhật', '18490000', '{\"name\":\"vi-vn-samsung-galaxy-tab-s6-pinkhung.jpg\",\"type\":\"image/jpeg\",\"size\":\"69 kB\",\"base64\":\"http://www.api.tnshop/files/on7rdwba1583204896TN-Shop.jpeg\",\"file\":[]}', '8 MP', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', 'Chính 13 MP & Phụ 5 MP', 'Ultra HD@30fps', 1, '	Chế độ làm đẹp, Chụp hình góc rộng, Chụp hình góc siêu rộng, Tự động lấy nét, Chạm lấy nét, Nhận diện khuôn mặt, HDR, Panorama', '[{\"nameColor\":\"Gray\",\"code\":\"#c9c9c9\"},{\"nameColor\":\"Đen\",\"code\":\"#000000\"}]', 'Android 9.0 (Pie)', '	Snapdragon 855 8 nh', '	1 nhân 2.84 GHz, 3 nhân 2.41 GHz & 4 nhân 1.78 GHz', 'Adreno 640', '	6 GB', '128 GB', 'Micro SD 	512 GB', '1 SIM Nano Sim', 'Có 3G,4G', 'Wi-Fi 802.11 a/b/g/n/ac, Wi-Fi Direct, Dual-band, Wi-Fi hotspot', 'GPS, GLONASS', 'LE, A2DP, apt-X, v5.0', 'NFC, OTG', '', '7040 mAh', 'Pin chuẩn Li-Ion', 'Đang cập nhật', '[{\"value\":\"14\",\"label\":\"Máy tính bảng\",\"logo\":\"http://www.api.tnshop/files/cupymbzy1587136784TN-Shop.png\"},{\"value\":\"11\",\"label\":\"Slide Web Site\",\"logo\":\"http://www.api.tnshop/files/0hv6kdn21582801908TN-Shop.png\"}]', 'Kim loại', '420 g', 'Đang cập nhật', 'Dài 244.5 mm - Ngang 159.5 mm - Dày 5.7 mm', '[{\"name\":\"samsung-galaxy-tab-s6-note.jpg\",\"type\":\"image/jpeg\",\"size\":\"203 kB\",\"base64\":\"http://www.api.tnshop/files/87caj5ny1583129429TN-Shop.jpeg\",\"file\":[]},{\"name\":\"vi-vn-samsung-galaxy-tab-s6-thietke.jpg\",\"type\":\"image/jpeg\",\"size\":\"88 kB\",\"base64\":\"http://www.api.tnshop/files/j5fipkr31583129429TN-Shop.jpeg\",\"file\":[]},{\"name\":\"samsung-galaxy-tab-s6-400x460.png\",\"type\":\"image/png\",\"size\":\"164 kB\",\"base64\":\"http://www.api.tnshop/files/4tc62g2k1583129429TN-Shop.png\",\"file\":[]}]', 3, 34),
(9, 'MTB-iPad10.2', 'iPad 10.2 inch Wifi 128GB (2019)', 3, '', 'LED backlit LCD', '2160 x 1620 pixels', '10.2\"', 'Đang cập nhật', '12000000', '{\"name\":\"vi-vn-ipad-10-2-inch-wifi-128gb-2019-tinhnang.jpg\",\"type\":\"image/jpeg\",\"size\":\"134 kB\",\"base64\":\"http://www.api.tnshop/files/amt7ctu21583204927TN-Shop.jpeg\",\"file\":[]}', '1.2 MP', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', '8 MP', 'Full HD 1080p@30fps', 0, 'Gắn thẻ địa lý, Tự động lấy nét, Chạm lấy nét, Nhận diện khuôn mặt, Panorama, Slow Motion', '[{\"nameColor\":\"Hồng\",\"code\":\"#f9cfcf\"},{\"nameColor\":\"Ghi\",\"code\":\"#beb7b7\"}]', 'iOS 13', 'Apple A10 Fusion 4 n', '2.34 GHz', 'PowerVR Series 7', '3 GB', '128 GB', 'Không', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', 'Khoảng 8600 mAh', 'Lithium - Ion', 'Đang cập nhật', '[{\"value\":\"14\",\"label\":\"Máy tính bảng\",\"logo\":\"http://www.api.tnshop/files/cupymbzy1587136784TN-Shop.png\"},{\"value\":\"11\",\"label\":\"Slide Web Site\",\"logo\":\"http://www.api.tnshop/files/0hv6kdn21582801908TN-Shop.png\"}]', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"name\":\"ipad-10-2-inch-wifi-128gb-2019-silver-400x460.png\",\"type\":\"image/png\",\"size\":\"160 kB\",\"base64\":\"http://www.api.tnshop/files/ibjgarw01583204927TN-Shop.png\",\"file\":[]},{\"name\":\"vi-vn-ipad-10-2-inch-wifi-128gb-2019-tienich.jpg\",\"type\":\"image/jpeg\",\"size\":\"137 kB\",\"base64\":\"http://www.api.tnshop/files/hongp0o41583204927TN-Shop.jpeg\",\"file\":[]},{\"name\":\"vi-vn-ipad-10-2-inch-wifi-128gb-2019-thietke.jpg\",\"type\":\"image/jpeg\",\"size\":\"81 kB\",\"base64\":\"http://www.api.tnshop/files/t3pxnqfi1583204927TN-Shop.jpeg\",\"file\":[]}]', 0, 0),
(10, 'MB-AKJSh', ' Samsung Galaxy A01', 10, '', 'PLS TFT LCD', 'HD+ (720 x 1520 Pixels)', '5.7\"', '	Kính thường', '6000000', '{\"name\":\"samsung-galaxy-a01-note-.jpg\",\"type\":\"image/jpeg\",\"size\":\"142 kB\",\"base64\":\"http://www.api.tnshop/files/qba3usuk1583204954TN-Shop.jpeg\",\"file\":[]}', 'HD+ (720 x 1520 Pixels)ật', 'có', 'Đang cập nhật', 'không', '', 'HD+ (720 x 1520 Pixels)ật', '5 MP', 1, '5 MP', '[{\"nameColor\":\"Ghi\",\"code\":\"#cfcfcf\"}]', '	Android 10', '2 nhân 1.95 GHz & 6 ', '2 nhân 1.95 GHz & 6 nhân 1.45 GHt', '	Adreno 505', '	2 GB', '16 GB', '	MicroSD, hỗ trợ tối đa 512 GB', '2 Nano SIM', '	Hỗ trợ 4G', 'Wi-Fi 802.11 a/b/g/n/ac/ax, Dual-band, Wi-Fi Direct, Wi-Fi hotspot', 'BDS, A-GPS, GLONASS', 'A2DP, LE, v4.2', 'NFC, OTG', '', '3000 mAh', '	Pin chuẩn Li-Ion', 'Tiết kiệm pin', '[{\"value\":\"12\",\"label\":\"ĐT Đang Hot\",\"logo\":\"http://www.api.tnshop/files/ob0sddzu1582800877TN-Shop.jpeg\"}]', '	Khung & Mặt lưng nhựa', '	149 g', 'Mở khoá khuôn mặt\n	Nhân bản ứng dụng\nChặn tin nhắn\nChặn cuộc gọi\nĐèn pin', '	Nguyên khối', '[{\"name\":\"samsung-galaxy-a01-400x460-3-400x460.png\",\"type\":\"image/png\",\"size\":\"215 kB\",\"base64\":\"http://www.api.tnshop/files/nhic0sfw1583204954TN-Shop.png\",\"file\":[]},{\"name\":\"iphone-11-pro-max-mau-bac-1-org.jpg\",\"type\":\"image/jpeg\",\"size\":\"241 kB\",\"base64\":\"http://www.api.tnshop/files/wh75hfdp1583204954TN-Shop.jpeg\",\"file\":[]}]', 0, 33),
(11, 'MB-avxxxxS', 'Vsmart Joy 3 (3GB/32GB)', 11, '', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '5000000', '{\"name\":\"vi-vn-vsmart-joy-3-tinhnang.jpg\",\"type\":\"image/jpeg\",\"size\":\"193 kB\",\"base64\":\"http://www.api.tnshop/files/26o2ceie1583204972TN-Shop.jpeg\",\"file\":[]}', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', 'Đang cập nhật', 'Đang cập nhật', 0, 'Đang cập nhật', '[{\"nameColor\":\"Đỏ\",\"code\":\"#ff4343\"}]', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"value\":\"10\",\"label\":\"Quảng Cáo\",\"logo\":\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAYEBAUEBAYFBQUGBgYHCQ4JCQgICRINDQoOFRIWFhUSFBQXGiEcFxgfGRQUHScdHyIjJSUlFhwpLCgkKyEkJST/2wBDAQYGBgkICREJCREkGBQYJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCT/wAARCAHCAyADASIAAhEBAxEB/8QAHAABAQEAAwEBAQAAAAAAAAAAAAIBBgcIBQQD/8QAWBAAAgEDAgICCwcODAQGAwAAAAECAwQRBQYHEiExCBMUQVFhcYGRobEVIjJCcrLBFxgjMzU3UlVic3SSlNEWJCY0Q1NWgpOz0uJEVISiJSc2g6PhY2TC/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEFAwQGAgf/xAA1EQEAAgEDAQUECQQDAQAAAAAAAQIDBAURMRIhMkFRE3GBkQYUIjM0QmGhsRVSwdEjQ+Hw/9oADAMBAAIRAxEAPwDvMAGJ7AAAAAAAADTDQNRqMRoFI1GIpAaikSikSKRSJRSDypFIlFICkUiUWgNRSJRSJgUikSikBSNRiKQGo1GIoDUajEagNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABjMZrMYEsxlEgYyWUyWBLJZTMYEMllslgQyWWyGQJZLLZDAlkspksJSyWUzGEpZLKZJAlmMpkgYYaYwAAAAAAAAAAAAAAAAAAAAAAjTEaBpRJQGlIlFICkajEUiUNRSMRSCGotEItAUikSikBSKRKKQgUikSikSNRSMRqA0oxGgaajDUBoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMZhpgGGM0wCWYzWYwJZLKZLAlkspksgSyWUyWBLIZ', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', 'Đang cập nhật', '[{\"name\":\"vsmart-joy-3-tim-400x460-1-400x460.png\",\"type\":\"image/png\",\"size\":\"158 kB\",\"base64\":\"http://www.api.tnshop/files/bzccstga1583204972TN-Shop.png\",\"file\":[]},{\"name\":\"vsmart-joy-3-note1.jpg\",\"type\":\"image/jpeg\",\"size\":\"151 kB\",\"base64\":\"http://www.api.tnshop/files/c65czuso1583204972TN-Shop.jpeg\",\"file\":[]},{\"name\":\"vi-vn-vsmart-joy-3-manhinh.jpg\",\"type\":\"image/jpeg\",\"size\":\"209 kB\",\"base64\":\"http://www.api.tnshop/files/yy7wr3fn1583204972TN-Shop.jpeg\",\"file\":[]}]', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`, `phone`, `permission`) VALUES
(1, 'Find', 'admin', 'admin', '098855556', 'admin'),
(2, 'ten', 'email@xxxxs', 'password', '', ''),
(3, 'Thieen Ngoc', 'fitthienngoc@gmail.com', '123123', '', ''),
(4, 'Thieen Ngoc', 'ádđ@ádd', 'ádasdasd', '0982415396', ''),
(5, 'Thieen Ngoc', 'ádđ@áddd', 'ádasdasd', '0982415396', ''),
(6, 'Thieen Ngoc', 'ádđ@ádddd', 'ádasdasd', '0982415396', ''),
(16, '', '', '', '', ''),
(17, 'Thieen5Ngoc', '4433@1112a', 'áddddd', '0982415396', ''),
(18, 'Thieen5Ngoc', '4433@1112ad', 'áddddd', '0982415396', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
