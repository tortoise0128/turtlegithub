-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-12 05:01:14
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mm58`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `county` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `city` varchar(11) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `activated` int(11) NOT NULL DEFAULT 0,
  `nickname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `email`, `password`, `mobile`, `county`, `city`, `address`, `birthday`, `hash`, `activated`, `nickname`, `create_at`) VALUES
(2, 'ming6666@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', '66', NULL, NULL, NULL, NULL, '58b46b6d04ebd093ffc34379675631d6', 0, '江依璇', '2020-08-05 17:25:53'),
(3, 'ming77777@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, 'cc2f864fb24bf10f1ab9cfa174252b1c', 0, '江依璇', '2020-08-06 11:47:36'),
(4, 'qqqqq@gmail.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, 'a97ad50b16b979dcd1b0d9455ac4c065', 0, '江依璇', '2020-08-06 11:51:28'),
(5, 'ming56565@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, '74b60e583d6d491f2d924ae914486f19', 0, '江依璇', '2020-08-06 11:58:30'),
(6, 'ming0805@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, 'af58a3def448e015584babe31c0ffad9', 0, '江依璇', '2020-08-06 13:59:08'),
(8, 'ming8888@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, '22a8ad616b0bec62ef35baee0a076c3a', 0, '江依璇', '2020-08-06 14:02:56'),
(9, 'ming999999@gg.com', '5e40a31e927b89304ea6cd7f49cc6b4831c9eea8', NULL, NULL, NULL, NULL, NULL, '1a278a4f8d9b53261de3902b89217f7b', 0, '江依璇', '2020-08-06 14:03:52'),
(10, 'ming888888888@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, 'c5010b1e683d8cdb15de89c6c15c6fb2', 0, '江依璇', '2020-08-06 14:06:37'),
(11, 'ming8888888@gg.com', 'f4f6d531ee444f0472a322c577dc07e7a70bc13c', NULL, NULL, NULL, NULL, NULL, '6ba7aa56d71d62a1d7b8a8420643efbe', 0, '江依璇', '2020-08-06 14:07:46'),
(13, 'ming0807@gg.com', '1f5523a8f535289b3401b29958d01b2966ed61d2', '0912345678', '新北市', '大安區', '1111', '2020-07-04', '572629cecead975b0447bce6359601d7', 0, '江依璇123', '2020-08-07 10:38:21'),
(14, 'dasd@gmail.com', 'c984aed014aec7623a54f0591da07a85fd4b762d', NULL, NULL, NULL, NULL, NULL, '0e213a7136361b5fc6eaf5cff4a7cf04', 0, '', '2020-08-10 12:03:26'),
(15, 'ming@gg.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NULL, NULL, NULL, NULL, NULL, 'bd300230f78535558df0d4af8d301636', 0, '', '2020-08-10 14:54:31'),
(16, 'ming898989@gg.com', '97c072924fc50ee518f2f130dfc7059922c97216', NULL, NULL, NULL, NULL, NULL, '2ee8626d68f5b89454d6c898d85c021a', 0, '', '2020-08-10 15:14:33'),
(17, 'ewewew@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NULL, NULL, NULL, NULL, NULL, '5bc61371ade1255bcddbfaf12d96e337', 0, '', '2020-08-10 15:30:24'),
(18, '', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '0931111111', '高雄市', '信義區', '121212', '2020-07-30', '9aafd3b38aa70e01656aa1326439aae4', 0, '123', '2020-08-11 13:37:36'),
(19, 'ming777@gg.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '0921111119', '高雄市', '中山區', '44545666', '2020-07-31', '8c170008396d0f886040864167b9e616', 0, '13454', '2020-08-11 13:41:47'),
(20, 'ming999666555@gg.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NULL, NULL, NULL, NULL, NULL, '56e14b9684dd6373906f9f377e610af3', 0, '', '2020-08-11 15:59:37'),
(21, 'qwqw@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NULL, NULL, NULL, NULL, NULL, '0cd46a72bc1ea23770e527f8a8fae6a7', 0, '', '2020-08-11 16:09:57'),
(22, 'ming9988998@gg.com', '', '0931991111', '', '', '7484545', '2020-07-31', '7a76013ace0769827cc36cfc6cb320c2', 0, '131331', '2020-08-11 16:14:26'),
(24, 'ming8989@gg.com', '', NULL, NULL, NULL, NULL, NULL, 'e8e6dd767c1d84e45ec570adadbca7b2', 0, '', '2020-08-11 19:20:50'),
(25, 'ming123456@gg.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '0911111111', '', '', '', '2020-08-06', 'e4030f2d85978af818253d0f164bd4ba', 0, '123', '2020-08-11 19:26:07'),
(26, 'ming963123@gg.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', NULL, NULL, NULL, NULL, NULL, '6f5ab91b3de67872591f02b6026f7551', 0, '', '2020-08-11 20:30:21');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
