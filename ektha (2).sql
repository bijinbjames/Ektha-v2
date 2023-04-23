-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 23, 2023 at 06:36 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ektha`
--

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
CREATE TABLE IF NOT EXISTS `workshops` (
  `id` int NOT NULL AUTO_INCREMENT,
  `workshop_dept` varchar(100) DEFAULT NULL,
  `workshop_name` varchar(200) DEFAULT NULL,
  `workshop_about` varchar(200) DEFAULT NULL,
  `workshop_venue` varchar(200) DEFAULT NULL,
  `workshop_fee` varchar(200) DEFAULT NULL,
  `workshop_assist_1` varchar(200) DEFAULT NULL,
  `workshop_assist_2` varchar(200) DEFAULT NULL,
  `workshop_image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `workshop_dept`, `workshop_name`, `workshop_about`, `workshop_venue`, `workshop_fee`, `workshop_assist_1`, `workshop_assist_2`, `workshop_image`) VALUES
(1, 'CIVIL', 'test workshop', 'This is a demo of workshop about ', 'this is a demo of venue', '100', 'test user 1', 'test user 2', 'MECHANICAl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
