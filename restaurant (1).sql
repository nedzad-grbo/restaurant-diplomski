-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2022 at 05:00 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '$2y$10$1R8B49LmEvF7s2Cm6v0cm.g8bkFvV7MnvmoRAAjVjCVBR6o4HrX0e');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `email`) VALUES
(1, 'test@gmail.com'),
(2, 'test@gmail.com'),
(3, 'test@gmail.com'),
(4, 'test@gmail.com'),
(5, 'test_contact_reg@gmail.com'),
(6, 'test_news_indes@gmail.com'),
(7, 'test_about_mess@gmail.com'),
(8, 'test_reservation_reg@gmail.com'),
(9, 'test_recipe_reg@gmail.com'),
(10, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `name`, `description`, `image`, `price`) VALUES
(12, 'add test', 'testing add', 'https://podravkaiovariations.azureedge.net/a3c10d4c-63b4-11eb-ae16-0242ac120021/v/f2b1f6a6-64bc-11eb-b6c2-0242ac130010/1600x1200-f2b21938-64bc-11eb-9498-0242ac130010.jpeg', 500),
(7, 'test', 'testing', 'https://www.jessicagavin.com/wp-content/uploads/2020/07/how-to-cook-pasta-3-1200-500x500.jpg', 10),
(9, 'est', 'test', 'https://www.foodnetwork.com/content/dam/images/food/video/1/11/117/1176/11763645.jpg', 50),
(8, 'test', 'test', 'https://podravkaiovariations.azureedge.net/c99fc584-610d-11eb-922d-0242ac120067/v/98faa490-64bd-11eb-a93a-0242ac130010/1600x686-98fab5fc-64bd-11eb-b94f-0242ac130010.jpeg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `messsages`
--

DROP TABLE IF EXISTS `messsages`;
CREATE TABLE IF NOT EXISTS `messsages` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messsages`
--

INSERT INTO `messsages` (`ID`, `name`, `email`, `phone`, `message`) VALUES
(1, 'test', 'test@gmail.com', '061789654', 'test test'),
(2, 'test - contact', 'test@gmail.com', '000', 'test - message - contact'),
(3, 'test_news_indes@gmail.com', 'test_news_indes@gmail.com', '000', 'test_news_indes@gmail.com'),
(4, 'About - test', 'test_about_mess@gmail.com', '000', 'Test - ABOUT - MESSAGE'),
(5, 'test - reservation - message', 'test_reservation_message@gmail.com', '000', 'test_reservation_message@gmail.com'),
(6, 'Test - Recipe - Mess', 'test_recipe_mess@gmail.com', '000', 'test_recipe_news@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `email`) VALUES
(1, 'grbo@gmail.com'),
(2, 'test@gmail.com'),
(4, 'test_about@gmail.com'),
(5, 'test_contact@gmail.com'),
(6, 'test_recipe@gmail.com'),
(7, 'test_reservation@gmail.com'),
(8, 'test_contact_news@gmail.com'),
(9, 'test_news_indes@gmail.com'),
(10, 'test_about_news@gmail.com'),
(11, 'test_reservation_news@gmail.com'),
(12, 'test_recipe_news@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `food` varchar(255) NOT NULL,
  `foodQuantity` int(100) NOT NULL,
  `drink` varchar(255) NOT NULL,
  `drinkQuantity` int(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `total` int(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`ID`, `food`, `foodQuantity`, `drink`, `drinkQuantity`, `type`, `total`, `user`) VALUES
(1, 'hamburger', 1, 'cola', 1, 'delivery', 15, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `name`, `email`, `password`) VALUES
(1, 'test', 'test@gmail.com', '$2y$10$79/QYYN1Rq.dUzK45ekxNOS6BSS7G5Kb4A6KFktDWK72is0t2QOIW'),
(2, 'Testic', 'testic@gmail.com', '$2y$10$koqWKXevapd2JmI0hjqH2OpxFw81cfNQ4XO8v8zwpUAnA8pcuhsKm'),
(3, 'test test', 'test_test@gmail.com', '$2y$10$NKdYUTxs3wou8rZ599m15ef05S6o5FplG0FU6iwcHsZRfFMGK80K6'),
(4, 'test - contact - reg', 'test_contact_reg@gmail.com', '$2y$10$Be2XTG9.Ujm5A9GTj0hUgOIZdXEf7MdlzrfSlvq4hOFpBu7Gw.HbW'),
(5, 'test_news_indes@gmail.com', 'test_news_indes@gmail.com', '$2y$10$5FFWRlx24eCJPNTMENIbkOJ7vhLGqlSsQIvM2/e7YcFE.bIi/ZqMm'),
(6, 'ABOUT - REG - TEST', 'test_about_mess@gmail.com', '$2y$10$dwIDqXUpqzSGgSC1kvMvZekVi22wqbbEzsJnA8HN1mxuAwhZHUbFy'),
(7, 'TEST - RESERVATION - REG', 'test_reservation_reg@gmail.com', '$2y$10$y7FU3qDfnrdLT5hTK92rWeN5YOcnHKiTfdVyyxgkKs.WSXUvkZi6K'),
(8, 'TEST - RECIPE - REG', 'test_recipe_reg@gmail.com', '$2y$10$ZaRc0GI0TKixAwo0En8HLOCqmSCJSWuvM.1YCm8Nv.xwng5h.cPUq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
