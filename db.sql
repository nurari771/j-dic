-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2018 at 10:28 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_func`
--

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `kanji` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `romanji` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `romanjisub` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hiragana` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hiraganasub` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meaning` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`id`, `level`, `kanji`, `romanji`, `romanjisub`, `hiragana`, `hiraganasub`, `meaning`) VALUES
(2, 5, '日本', 'nihon', 'nippon', 'にほん', 'にっぽん', 'ประเทศญี่ปุ่น'),
(3, 0, '日本語', 'nihongo', '', 'にほんご', '', 'ภาษาญี่ปุ่น'),
(4, 0, '', '', '', 'にほんご', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
