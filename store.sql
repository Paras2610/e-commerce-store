-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2020 at 10:34 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('Rani Gupta', 'orasio29@networksfs.com', 'hii'),
('paras', 'paras1236@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Iphone 11', 68300),
(2, 'Iphone 11 Pro', 106600),
(3, 'Iphone 11 Pro Max', 117100),
(4, 'Iphone XR', 53000),
(5, 'Iphone SE', 43000),
(6, 'Iphone X', 70000),
(7, 'Iphone XS', 97400),
(8, 'Iphone XS Max', 99900),
(9, 'Iphone 8', 37499),
(10, 'Iphone 8 Plus', 49900),
(11, 'Iphone 7', 33999),
(12, 'Iphone 7 Plus', 36400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Paras', 'paras1236@gmail.com', 'Paras111@', '9469501444', 'Jammu', 'H.no.145 Jain Bazaar'),
(2, 'Aditi', 'aditi14@gmail.com', 'aditimadaan', '9306452172', 'Haryana', 'H.no.142 Rohtak Gohana'),
(3, 'Priyanshu', 'Arora28@gmail.com', 'Arora6782', '9972346780', 'Rajasthan', 'H.no.69 Hanuman Garh\r\n'),
(4, 'Raghav', 'rkhajuriadec@gmail.com', 'December2020', '9876512340', 'Jammu', 'H.no.144 Gandhi Nagar'),
(5, 'Saksham', 'chacham4@gmail.com', 'nishta', '98321003200', 'Ambala', 'H.no.63 Ambala Cantt.'),
(6, 'Vishakha', 'sharmaji16@gmail.com', 'punnu14#', '7780863560', 'Himachal Pradesh', 'H.no.16 Mandi,H.P\r\n'),
(7, 'Mohit', 'mohati156@gmail.com', 'mohati&64', '9090927863', 'Jaipur', 'H.no.77 Kishan Garh,Jaipur'),
(8, 'Aanchal', 'aanchal28@gmail.com', 'aanchalvashisht12', '9090637489', 'Una', 'H.no.90 Hanuman Gali,Una'),
(9, 'Gungeen', 'arora78787@gmail.com', 'spal16$', '7878543670', 'Amritsar', 'H.no.12 Punjabi Haveli.Punjab'),
(10, 'Nitika', 'nitu02@gmail.com', 'chomu@111', '8989564370', 'Kangra', 'H.no.79 Bilaspur,H.P'),
(11, 'Yash', 'pareek04@gmail.com', 'pareek56#', '8787843690', 'Hisar', 'H.no.37 Hisar,Haryana'),
(12, 'Nihal', 'Sarawgimehak45@gmail.com', 'meh56@#', '8787653321', 'Assam', 'H.no6.63 Doom Dooma,Assam');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(5, 1, 1, 'Confirmed'),
(6, 1, 12, 'Confirmed'),
(7, 1, 2, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
