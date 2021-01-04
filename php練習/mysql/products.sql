-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-04 07:02:47
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
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `flowername` varchar(60) NOT NULL,
  `category_sid` int(11) NOT NULL DEFAULT 1,
  `flower_img` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT 1,
  `introduction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`sid`, `author`, `flowername`, `category_sid`, `flower_img`, `price`, `on_sale`, `introduction`) VALUES
(1, '我的以拉作品', '迷之月', 16, 'DSC_0245', 560, 1, '這個好像是測試篩選器'),
(2, '我的python作業', '閏年運算1', 1, '閏年運算', 420, 1, '每個人寫出來的程式都不一樣'),
(3, '我的python作業', '潤年運算2', 1, '巢狀閏年', 480, 1, '2種閏年'),
(4, '我的python作業', '質數運算1', 1, 'data質數', 490, 1, '質數運算超多種'),
(5, '我的python作業', '質數運算2', 1, '質數程式', 690, 1, '質數阿'),
(6, '我的ps作品1', 'PS櫻花作品', 2, 'DSC_0179', 450, 1, '利用photoshop色版去背'),
(7, '我的小專作業', 'ps圖片驗證', 2, '圖片驗證', 550, 1, ''),
(8, '我的以拉作品', '我超愛水母', 3, 'Screenshot_20200423-072814', 520, 1, 'kurara'),
(9, '我的以拉作品', '我超愛水母全', 3, '水母', 350, 1, '水母拉'),
(10, '我的python作業', '找表單位置', 1, '求表單位置', 350, 1, '考了一堆這個阿'),
(11, '我的UI/UX作業', 'UI/UX按鈕作業', 2, 'mybutton', 1080, 1, '使用以拉裡的外觀做出立體陰影效果'),
(12, '我的小專作業', '隨機變數的運用', 3, 'good1', 520, 1, '我莫名的被隨機變數吸引，但好難啊'),
(13, '我的小專作業1', '隨機變數的運用1', 3, 'good 2', 500, 1, '就那樣'),
(14, '我的小專作業2', '隨機變數的運用2', 3, 'bad 3', 380, 1, '本來想寫些甚麼'),
(15, '我的小專作業3', '隨機變數的運用3', 3, 'bad 4', 650, 1, '這欄來幹嘛的'),
(16, '我的ps作品', 'PS貓作品', 2, 'cat cloud', 520, 1, '幫午睡中的貓加光影');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
