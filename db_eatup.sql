-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2021 at 08:08 PM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_eatup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `user_Id` bigint(20) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `qty` bigint(20) NOT NULL,
  `rest_Id` int(100) NOT NULL,
  `date` date DEFAULT NULL,
  `user_no` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_Id`, `id`, `name`, `price`, `qty`, `rest_Id`, `date`, `user_no`) VALUES
(4, 25, 'StrawBerry MilkShake ', 50, 3, 3, '2021-10-22', 4678),
(4, 3, 'Red  Sauce Pasta', 120, 1, 1, '2021-10-22', 4678),
(4, 90, 'Chocolate Shake', 200, 1, 9, '2021-10-22', 4678),
(4, 23, 'Hazelnut Cold Coffee', 60, 4, 3, '2021-10-22', 4678),
(17, 3, 'StrawBerry MilkShake ', 50, 1, 25, '2021-10-23', 5969),
(17, 2, 'Double Cheese Margherita', 200, 1, 12, '2021-10-23', 2694);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `autoId` bigint(20) NOT NULL AUTO_INCREMENT,
  `rest_Id` int(100) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `user_Id` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  PRIMARY KEY (`autoId`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`autoId`, `rest_Id`, `id`, `name`, `price`, `user_Id`, `qty`) VALUES
(45, 12, 2, 'Double Cheese Margherita', 200, 17, 3),
(46, 24, 3, 'Cold Coffee', 40, 17, 4),
(47, 89, 9, 'Brownie Tawa Ice cream', 150, 17, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE IF NOT EXISTS `tbl_item` (
  `item_image` varchar(200) NOT NULL,
  `item_Id` int(11) NOT NULL AUTO_INCREMENT,
  `rest_Id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` float NOT NULL,
  PRIMARY KEY (`item_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`item_image`, `item_Id`, `rest_Id`, `item_name`, `item_price`) VALUES
('img/redpasta.jpg', 3, 1, 'Red  Sauce Pasta', 120),
('img/manchow.jpg', 2, 1, 'Manchow Soup', 100),
('img/soup.jpg', 1, 1, 'Hot and Sour Soup', 100),
('img/whitepasta.jpg', 4, 1, 'White Sauce Pasta', 120),
('img/dosa.jpg', 5, 1, 'Dosa', 90),
('img/paneerhandi.jpg', 6, 1, 'Paneer Handi', 100),
('img/kadiapaneer.jpg', 7, 1, 'Chatpata Paneer', 230),
('img/7UP.jpg', 8, 1, '7UP', 30),
('img/dietcoke.jpg', 9, 1, 'Diet Coke', 30),
('img/limca.jpg', 10, 1, 'Limca', 30),
('img/marpizza.jpg', 11, 2, 'Margherita', 125),
('img/margpizz.jpg', 12, 2, 'Double Cheese Margherita', 200),
('img/pizza.jpg', 13, 2, 'Farm House', 120),
('img/pizza2.jpg', 14, 2, 'Peppy Paneer', 120),
('menu_img/dominos/pizza5.jpg', 15, 2, 'Mexican Green Wave', 120),
('img/dominosh.jpg', 16, 2, 'Delux Veggie', 120),
('menu_img/dominos/mania1.png', 17, 2, 'TOMATO', 185),
('menu_img/dominos/mania2.jpg', 18, 2, 'VEG LOADED', 190),
('menu_img/dominos/mania3.jpg', 19, 2, 'CHEESY', 150),
('menu_img/dominos/mania4.jpg', 20, 2, 'CAPSICUM', 100),
('img/hzcoffee.jpg', 23, 3, 'Hazelnut Cold Coffee', 60),
('img/licetea.jpg', 22, 3, 'Lemon Iced Tea', 50),
('img/eltea.jpg', 21, 3, 'Elaichi Tea', 70),
('img/ccoffee.jpg', 24, 3, 'Cold Coffee', 40),
('img/stmilkshake.jpg', 25, 3, 'StrawBerry MilkShake ', 50),
('img/sandwich2.jpg', 26, 3, 'Mexican Cheese Grilled Sandwich', 50),
('img/sandwich3.jpg', 27, 3, 'Bombay Kachha Sandwich', 90),
('img/cheesegrill.jpg', 28, 3, 'Cheese Butter Grilled Sandwich', 60),
('img/pmsandwich.jpg', 29, 3, 'Paneer Makhani Grilled Sandwich', 150),
('img/tpsandwich.jpg', 30, 3, 'Tandoori Paneer Grilled Sandwich', 110),
('img/dosa.jpg', 31, 4, 'Dosa', 100),
('img/gujratidinner.jpg', 32, 4, 'Gujrati Lunch Box', 120),
('img/punjabidinner.jpg', 33, 4, 'Punjabi Dinner Box', 120),
('img/gravy.jpg', 34, 4, 'Veg Manchurian Gravy with Veg Fried Rice', 120),
('img/puranpoli.jpg', 35, 4, 'Puran Pooli', 50),
('img/pavbhaji.jpg', 36, 4, 'Pav Bhaji', 120),
('img/stfkul.jpg', 37, 4, 'Stuffed Kulcha', 60),
('img/coke.jpg', 38, 4, 'Coke', 25),
('img/fanta.jpg', 39, 4, 'Fanta Orange', 20),
('img/soup.jpg', 40, 4, 'Tomato Soup', 25),
('img/soup.jpg', 41, 5, 'Tomato Soup', 60),
('img/manchow.jpg', 42, 5, 'Manchow Soup', 50),
('img/redpasta.jpg', 43, 5, 'Red  Sauce Pasta', 50),
('img/chillipaneer.jpg', 44, 5, 'Chilli Paneer Dry', 50),
('img/paneerbutter.jpg', 45, 5, 'Paneer Butter Masala', 50),
('img/paneerhandi.jpg', 46, 5, 'Paneer Handi', 120),
('img/paneertikka.jpg', 47, 5, 'Paneer Tikka Masala', 190),
('img/daltadka.jpg', 48, 5, 'Daltadka', 320.7),
('img/7UP.jpg', 49, 5, '7UP', 20),
('img/limca.jpg', 50, 5, 'Limca', 25),
('menu_img/wrap3.jfif', 64, 7, 'Corn and Peas Signature Wrap', 50),
('menu_img/sandwich4.jfif', 63, 7, 'Aloo Patty Sub', 120),
('menu_img/sandwich3.jfif', 62, 7, 'Mexican Patty Sub', 100),
('menu_img/salad1.jfif', 61, 7, 'Veggie Salad', 60),
('img/fanta.jpg', 60, 6, 'Diet Coke', 25),
('img/limca.jpg', 59, 6, 'Limca', 20),
('img/kajupaneer.jpg', 58, 6, 'Kaju Paneer Masala', 30),
('img/daltadka.jpg', 57, 6, 'Dal Tadka', 90),
('img/paneertikka.jpg', 56, 6, 'Paneer Tikka Masala', 200),
('img/kadaipaneer.jpg', 55, 6, 'Paneer Chatpata', 185),
('img/dosa.jpg', 54, 6, 'Masala Dosa', 120),
('img/chillipaneer.jpg', 53, 6, 'Chilli Paneer Dry', 50),
('img/whitepasta.jpg', 52, 6, 'White Sauce pasta', 100),
('img/soup.jpg', 51, 6, 'Tomato Soup', 60),
('menu_img/wrap5.jfif', 65, 7, ' Hara Bhara Kebab Signature Wrap', 50),
('menu_img/wrap4.jfif', 66, 7, 'Veg Seekh Signature Wrap', 120),
('menu_img/wrap6.jfif', 67, 7, 'Veggie Delite', 90),
('menu_img/bev1.jfif', 68, 7, 'Mirinda', 30),
('menu_img/bev2.jfif', 69, 7, '7UP', 20),
('menu_img/bev4.jfif', 70, 7, 'Mountain Dew', 20),
('img/rspasta.jpg', 71, 8, 'Red Pasta', 60),
('img/pizza2.jpg', 72, 8, 'Paneer Sandwich Pizza', 120),
('img/marpizza.jpg', 73, 8, 'Margerita Pizza', 200),
('img/buurger.jpg', 74, 8, 'Epic Burger', 50),
('img/monsburger.jpg', 75, 8, 'Epic Mons Burger', 90),
('img/burgerr.jpg', 76, 8, 'Aloo Tikki Burger', 50),
('img/sandwich7.jpg', 77, 8, 'Cheese Chilli Grilled Sandwich', 280),
('img/mojito.jpg', 78, 8, 'Lemon Mint Mojito', 60),
('img/kiwimojito.jpg', 79, 8, 'Kiwi Mojito', 60.7),
('img/chocoshake2.jpg', 80, 8, 'Cafe Choco Shake', 100),
('img/buurger.jpg', 81, 9, 'Cheese Maharaja Burger', 100),
('img/bburger.jpg', 82, 9, 'Tandoori Cheese Burger', 100),
('img/burrger.jpg', 83, 9, 'What The freeze Special Cheese Burger', 120),
('img/tppizza.jpg', 84, 9, 'Paneer Tandoori Pizza', 120),
('img/sandwich.jpg', 85, 9, 'American Rooftop Sandwich', 50),
('img/sanwich4.jpg', 86, 9, 'Junglee Jumbo Club', 120),
('img/shpasta.jpg', 87, 9, 'Schezwan Pasta', 90),
('img/chinpas.jpg', 88, 9, 'Chinese Pasta', 120),
('img/tawaice.jpg', 89, 9, 'Brownie Tawa Ice cream', 150),
('img/chocoshake2.jpg', 90, 9, 'Chocolate Shake', 200),
('img/chinpas.jpg', 93, 1, 'ramen', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `user_Id` int(11) NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(30) NOT NULL,
  `user_Pass` varchar(30) NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`user_Id`, `user_Name`, `user_Pass`) VALUES
(1, 'nishit', 'nishit'),
(2, 'admin', 'admin'),
(4, 'krishna', 'krishna'),
(22, 'jk', 'krishna'),
(17, 'v', 'krishna');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `user_Id` int(100) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address1` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`user_Id`, `Fname`, `Lname`, `Telephone`, `Email`, `Address1`) VALUES
(4, 'krishna', 'pandya', 987654321, 'krishna@email.com', 'krishnashouse'),
(17, 'v', 'kim', 987654321, 'krishna@email.com', 'krishnas home');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rest`
--

DROP TABLE IF EXISTS `tbl_rest`;
CREATE TABLE IF NOT EXISTS `tbl_rest` (
  `rest_Id` int(11) NOT NULL AUTO_INCREMENT,
  `rest_Name` varchar(30) NOT NULL,
  PRIMARY KEY (`rest_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rest`
--

INSERT INTO `tbl_rest` (`rest_Id`, `rest_Name`) VALUES
(1, 'Kalatit'),
(2, 'Domino\'s'),
(3, 'Teapost'),
(4, 'Aaram'),
(5, 'Aatithya'),
(6, 'Celebration'),
(7, 'Subway'),
(8, 'Theism'),
(9, 'WTF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
