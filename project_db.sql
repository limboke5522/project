-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 08:47 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id_bg` int(10) UNSIGNED ZEROFILL NOT NULL,
  `du_no_bg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `list_bg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `list_pj_bg` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rv_bg` float NOT NULL DEFAULT '0',
  `ex_bg` float NOT NULL DEFAULT '0',
  `date_bg` date NOT NULL,
  `date_st` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id_bg`, `du_no_bg`, `list_bg`, `list_pj_bg`, `rv_bg`, `ex_bg`, `date_bg`, `date_st`) VALUES
(0000000001, 'ro-1', 'ไปกินข้าว', '', 100, 0, '2019-02-13', '2019-02-22 05:19:19'),
(0000000002, 'RU-2', 'ซื้อคอม', 'เปิดร้านเกม', 0, 5000, '2019-02-14', '2019-02-22 07:33:42'),
(0000000003, 'RU-3', 'ซื้อโต๊ะ', 'เปิดร้านเกม', 0, 5000, '2019-02-23', '2019-02-22 07:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_pj` int(10) UNSIGNED ZEROFILL NOT NULL,
  `do_no_pj` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `list_pj` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `budget_pj` float DEFAULT '0',
  `upfont` int(10) DEFAULT '0',
  `date_pj` date NOT NULL,
  `date_fillter` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_st` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_pj`, `do_no_pj`, `list_pj`, `budget_pj`, `upfont`, `date_pj`, `date_fillter`, `date_st`) VALUES
(0000000001, 'CPE-01', 'บ้านนี้มีรัก', 0, NULL, '2019-02-12', '2019-02-15', '2019-02-21 06:55:58'),
(0000000002, 'CEP-02', 'หนีเมีย', 0, NULL, '2019-02-14', '2019-02-22', '2019-02-21 06:57:44'),
(0000000003, 'CPE-03', 'เปิดร้านเกม', 50000, 0, '2019-02-21', '2019-02-18', '2019-02-21 09:25:26'),
(0000000004, 'ee', 'aa', 1000, 5, '2019-02-20', '0000-00-00', '2019-02-22 02:57:49'),
(0000000005, 'aa', 'hh', 1000, 0, '2019-02-13', '0000-00-00', '2019-02-22 02:59:14'),
(0000000006, 'CPE-05', 'jjj', 50000, 5, '2019-02-06', '2019-02', '2019-02-22 03:15:02'),
(0000000007, 'CPE-06', 'jane', 3000, 5, '2019-02-15', '2019-02', '2019-02-22 06:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id_bg`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_pj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id_bg` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_pj` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
