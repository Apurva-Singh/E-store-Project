-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 23, 2020 at 11:32 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `city` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `forgot_pass_identity` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `city`, `address`, `forgot_pass_identity`) VALUES
(1, 'mary', 'mary@gmail.com', '202cb962ac59075b964b07152d234b70', 9074, 'delhi', 'jdrfbiwk', ''),
(2, 'Apurva Singh ', 'a1p2u3r4@gmail.com', '8fdfdb005ab0174c24abb9e25f68b2d9', 73839, 'defrgthyj', 'swdefrgthy', ''),
(14, 'Ashutosh Shisodia', 'shisodiaashutosh@gmail.com', 'e67c10a4c8fbfc0c400e047bb9a056a1', 2147483647, 'Ghaziabad', 'wfvw', ''),
(23, 'chhaya', 'aaa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1234567890, 'Mumbai', 'adf', ''),
(24, 'Nannu', 'nandini@gmail.com', '72cbd63d72a748ea951740263d1392e1', 1234567890, 'Meerut', 'adf', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
