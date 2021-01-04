-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-04 07:01:26
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
-- 資料表結構 `address_book`
--

CREATE TABLE `address_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(1, '李曉明', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(2, '李曉明2', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(3, '李曉明3', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(4, '李曉明4', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(5, '李曉明5', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(6, '李曉明6', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(7, '李曉明7', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(8, '李曉明8', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(9, '李曉明', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(10, '李曉明2', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(11, '李曉明3', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(12, '李曉明4', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(13, '李曉明5', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(14, '李曉明6', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(15, '李曉明7', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(16, '李曉明8', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(17, '李曉明', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(18, '李曉明2', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(19, '李曉明3', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(20, '李曉明4', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(21, '李曉明5', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(22, '李曉明6', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(23, '李曉明7', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(24, '李曉明8', 'toto@yahoo.com', '09093314789', '0000-00-00', '台北市這裡那裏', '2020-07-15 11:11:43'),
(25, '123', '123', '123', '2020-12-02', '這裡', '0000-00-00 00:00:00'),
(26, '1234', '123@mew.com', '0922888999', '2020-07-09', '123', '2020-07-19 07:18:54'),
(28, '123', '123@wow.com', '0921321123', '2020-12-02', '在這裡唷 喵喵', '0000-00-00 00:00:00'),
(29, '王曉明', 'mew1@mewmail.com', '0921321123', '2020-12-09', '喵', '2020-12-28 16:13:08');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book`
--
ALTER TABLE `address_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
