-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-12-30 22:07:35
-- 伺服器版本： 10.4.27-MariaDB
-- PHP 版本： 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `tt`
--

-- --------------------------------------------------------

--
-- 資料表結構 `gy`
--

CREATE TABLE `gy` (
  `id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `temperature` int(50) NOT NULL,
  `humidity` int(50) NOT NULL,
  `pressure` int(50) NOT NULL,
  `lux` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `gy`
--

INSERT INTO `gy` (`id`, `time`, `temperature`, `humidity`, `pressure`, `lux`) VALUES
(4878, '2022-10-18 17:22:30', 31, 61, 100756, 4931),
(4879, '2022-10-18 17:24:40', 26, 62, 155750, 4556),
(4880, '2022-10-18 17:26:00', 26, 63, 100748, 5713),
(4881, '2022-10-18 17:28:30', 26, 62, 100745, 7188),
(4882, '2022-10-18 17:30:30', 26, 63, 100688, 7167),
(7777, '2022-12-05 14:54:31', 30, 40, 50, 62),
(8888, '2022-12-05 15:54:32', 12, 21, 45, 456);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `name`, `reason`, `state`) VALUES
(1, 'b', '接觸不良', '維修中'),
(7, 'Zxc', '目前還在查', '維修中'),
(8, '465', '接觸不良', '已修復');

-- --------------------------------------------------------

--
-- 資料表結構 `vo`
--

CREATE TABLE `vo` (
  `id` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `vo` float NOT NULL,
  `co` float NOT NULL,
  `pow` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `vo`
--

INSERT INTO `vo` (`id`, `time`, `vo`, `co`, `pow`) VALUES
(4863, '2022-10-18 17:22:30', 2.03, 0.06, 0.13),
(4864, '2022-10-18 17:24:31', 1.82, 0.06, 0.08),
(4865, '2022-10-18 17:26:30', 1.5, 0.05, 0.08),
(4866, '2022-10-18 17:28:35', 1.8, 0.05, 0.08),
(4867, '2022-10-18 17:30:34', 1.8, 0.06, 0.06);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `gy`
--
ALTER TABLE `gy`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `vo`
--
ALTER TABLE `vo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
