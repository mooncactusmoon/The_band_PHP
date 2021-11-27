-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-11-27 06:51:35
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `front_end`
--

-- --------------------------------------------------------

--
-- 資料表結構 `front_hw01`
--

CREATE TABLE `front_hw01` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_c` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文名稱',
  `name_e` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文名稱',
  `text_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '中文說明',
  `text_e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '英文說明',
  `img` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '圖片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `front_hw01`
--

INSERT INTO `front_hw01` (`id`, `name_c`, `name_e`, `text_c`, `text_e`, `img`) VALUES
(1, '什麼是樂團 ?', ' What is the band?', '樂團是由一群熱愛音樂的人們組成，唱著自己寫的歌曲。<br>就讓我們來認識一下有哪些樂手吧。\n', 'The band is composed of a group of people who love music.<br>They sing and write songs by themselves. <br>Let\'s get to know the musicians of the band.\n', 'index.jpg'),
(2, '主唱', 'Lead singer / Vocalist', '樂團的門面，擁有著天籟嗓音。<br>通常是樂團中人氣最高的人。', 'Representatives of the band. Vocalist has a beautiful voice.<br>Usually the most popular person in the band.', 'vocal.jpg'),
(3, '吉他手', 'Guitarist', '分為主奏吉他及節奏吉他，是樂團中形象非常鮮明的角色。', 'There are two types of lead guitar and rhythm guitar.<br> Guitarist is a very distinctive characters in the band.', 'guitar.jpg'),
(4, '貝斯手', 'Bassis', '以低音襯托音樂，讓歌曲更有穿透力。<br>雖然常被人們忽略，但在樂團中是缺一不可的。', 'Use bass to set off the music and make the song more penetrating.<br>Although bassist is often ignored by people, bassist is indispensable in the band.\n', 'bass.jpg'),
(5, '鼓手', 'Drummer', '樂團的靈魂，打出穩定的節奏帶領樂團進行歌曲。', 'The soul of the band.<br>Drummer plays a stable rhythm and leads the band to perform songs.', 'drum.jpg'),
(6, '琴鍵手', 'Keyboard player (KB)', '樂團中不一定會有的角色，會善用合成器讓歌曲更豐富。', 'KB that do not necessarily appear.<br>KB make good use of synthesizer to enrich songs.', 'kb.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `front_hw01`
--
ALTER TABLE `front_hw01`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `front_hw01`
--
ALTER TABLE `front_hw01`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
