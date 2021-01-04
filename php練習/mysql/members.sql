-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-04 07:02:16
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
-- 資料庫： `turtle128`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `hash` varchar(255) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT 0,
  `nickname` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `mobile`, `address`, `birthday`, `hash`, `activated`, `nickname`, `create_at`) VALUES
(3, 'ming@gg.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0918222333', '', '1990-02-02', '52c61e86824899ca67e8d815a7a7afb0ce43878c', 0, '老明', '2019-01-07 10:39:38'),
(4, 'aaa@qq.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '0988888888', '', '0000-00-00', '1bc88dddf4783874a5f50c8955b703be32775ca1', 0, 'aaa', '2019-01-10 10:29:53'),
(5, 'aaa@qq.coma', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d', '0911111111', '', '0000-00-00', '93264d4396836844f43a4cb1669827ba41ff5d58', 0, 'aaaa', '2019-01-10 10:33:20'),
(6, 'aaaaaaaa@qq.coma', 'fba9f1c9ae2a8afe7815c9cdd492512622a66302', '0911111111', '', '0000-00-00', '57774e6b1c6ccc3913fd8be593836c384d5da1a3', 0, 'aaaa', '2019-01-10 10:34:27'),
(14, 'mew@mewmail.com', '123456', NULL, NULL, NULL, '400f312024738a03c3bc6ac6f3cdc73d', 0, '喵喵喵', '2020-07-17 12:48:52'),
(15, 'mew1@mewmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, NULL, NULL, 'cc91bdf2588623a4a6fcd8600e1156f7', 0, '喵喵', '2020-12-29 12:29:32');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
