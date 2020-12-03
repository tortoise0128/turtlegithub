-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-08-14 07:39:20
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
-- 資料表結構 `course`
--

CREATE TABLE `course` (
  `sid` int(11) NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_date` varchar(255) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img_01` varchar(255) CHARACTER SET utf8 NOT NULL,
  `end_time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 NOT NULL,
  `intro` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `course`
--

INSERT INTO `course` (`sid`, `course_name`, `course_price`, `course_date`, `content`, `img_01`, `end_time`, `size`, `intro`, `course_time`) VALUES
(1, '捧花主題課程｜《銀白浪漫》', 1800, '2020/8/11-8/17', '夜半 我的世界下起了一場雪 <br>\r\n被銀白給覆蓋 可你正在那 <br>\r\n曾與我約定的樹下 不畏這銀白了你的所有顏色 <br>\r\n笑著跟我說 聖誕快樂 <br>\r\n', 'silver', '8/07(五)23:59', '花面寬約10x15x10cm', '乾燥花正夯！在網美當道的世代，拍照或是家裡沒有放上一束美美的乾燥花束，可就少了點夢幻的氣味，一人就可以上課的乾燥花課程，獨特的造型深富美感與設計，無論是送禮或是在家內裝飾，都是獨一無二的花束！', '19:30~21:30PM'),
(2, '花瓶主題課程｜《猖狂之紅》', 2500, '2020/8/20-8/27', '於是我們選定日子 趁歲月凋謝前 猖狂地綻放 <br>\r\n於是我們拔除自己根上的刺 修剪身上的葉 <br>\r\n選定日子 趁歲月凋謝前 猖狂地綻放 <br>\r\n也就成為桌上那最亮眼的紅色饗宴 <br>\r\n', 'red', '8/14(六)23:59', '花面寬約45x20cm', '使用日本進口不凋花，由簡入深的插花技巧及系統式的教學<br>\r\n8個精選花型紮紮實實學會古典花藝插花的各項技巧 <br>\r\n每堂課程除實作外還添加了理論基礎的講解 <br>\r\n經典的古典花型運用現代的手法並帶入商業花藝手法 <br>\r\n', '18:30~20:30pm'),
(3, '桌花主題課程｜《撕裂狂藍》', 2000, '2020/9/5-9/6', '生於人類 我們張狂地需要被注意<br>\r\n我們渴望愛 我們想盡辦法接近溫暖<br>\r\n它喚起世人心中對於慶祝的渴望<br>\r\n不需要任何故事 <br>只要能有提醒自己活著的方式 就是最好的理由<br>\r\n\r\n', 'blue', '9/2(三)23:59', '花面寬約10×10×16cm', '將花朵最美麗的時光，收藏在優雅浪漫的玻璃音樂盒之中，<br>\r\n360度的旋轉設計，非常適合居家擺設或禮品贈送！<br>\r\n課程提供三款不同配色自行選擇，新手也能輕鬆完成夢幻作品。<br>', '15:00~17:00pm'),
(4, '捧花主題課程｜《耀眼白茫》', 2300, '2020/9/15-9/18', '我在一遍白茫裡找尋你<br>\r\n跟隨著所能發現的腳印<br>\r\n以為一切都終將因為刺眼而失去你的蹤跡<br>\r\n這是注定狂野的佳節 而我們聚在一起彼此依偎<br>\r\n', 'white', '9/12(六)23:59', '手綁捧花32x34cm <br>\r\n胸花14x9cm <br>', '手綁捧花－近年流行的捧花樣式，隨性自然的風格 <br>\r\n不凋花材一般以鐵絲加工花莖，很難做出自然的螺旋花腳 <br>\r\n這堂課程會教你如何修飾花莖，以及螺旋花腳的綁法 <br>\r\n讓捧花可以穩穩地站在桌上，展現出自然的線條和美麗的花面 <br>', '20:00~22:00pm'),
(5, '桌花主題課程｜《甜粉等待》', 3200, '2020/10/1-10/08', '你帶著一慣的蹣跚腳步 在街燈閃爍下遇見了我<br>\r\n我正踢掉高跟鞋  在擁擠裡尋找出口<br>\r\n如果說這市景的霓虹 往後有你一起走過<br>\r\n那麼這相遇便算值得等候<br>', 'pink', '9/25(五)23:59', '手捧型捧花58x32cm<br>\r\n兩用式花冠全長54cm<br>', '手捧型捧花－大型的手捧型捧花最適合外拍使用，<br>\r\n環抱在手裡或是隨興的拿著都能為新娘增添女神感，<br>\r\n捧花不僅使用大型乾燥花材，也搭配了許多不凋花材提升質感，<br>\r\n花冠－現在最流行的空氣感，一戴上就仙氣滿滿的設計<br>', '18:00-20:00pm'),
(6, '桌花主題課程｜《澄盡想念》', 2800, '2020/10/10-10/17', '如果說有什麼能形容你 那麼我會想起在加州海岸那一片日落<br>\r\n你恣意在沙灘上奔走 恣意的讓陽光深色了皮膚<br>\r\n浪沖走了我的孤單和寂寞 沙磨去了我們之前的衝突與困惑<br>\r\n海岸線沒有盡頭 而我和你也沒有盡頭<br>', 'orange', '10/02(五)23:59', '花面寬約45x70cm', '使用日本進口不凋花，搭配多種特色手工花<br>\r\n製作出與一般手綁花束不同的特大花束<br>\r\n運用韓系包裝技巧，以豪華氣勢襯托出不凋花的高質感<br>', '19:30~21:30pm');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `course`
--
ALTER TABLE `course`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
