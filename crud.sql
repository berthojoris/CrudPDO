-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2013 at 10:03 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) COLLATE latin1_general_ci NOT NULL,
  `nim` varchar(12) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `hobby` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `tempat_lahir`, `tanggal_lahir`, `hobby`) VALUES
(1, 'Tony Stark', '1029482049', 'New York', '2003-04-09', 'making iron suit'),
(2, 'Bruce Wayne', '1094738504', 'Gotham City', '2004-09-13', 'riding bat mobile'),
(3, 'Bruce Banner', '1029573958', 'Arkansas', '2003-01-01', 'get angry'),
(4, 'Peter Parker', '1059305830', 'New York', '2005-12-27', 'catching spider'),
(5, 'Clark Kent', '1048392857', 'Krypton', '2003-02-11', 'wearing panties outside'),
(6, 'Juliana', '1056382938', 'Padang', '2009-02-26', 'baca komik');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
