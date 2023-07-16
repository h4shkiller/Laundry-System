-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2022 at 10:07 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

DROP TABLE IF EXISTS `admin_account`;
CREATE TABLE IF NOT EXISTS `admin_account` (
  `adminAccount_id` char(3) NOT NULL,
  `a_username` varchar(15) DEFAULT NULL,
  `a_password` varchar(50) DEFAULT NULL,
  `staff_id` char(7) DEFAULT NULL,
  PRIMARY KEY (`adminAccount_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`adminAccount_id`, `a_username`, `a_password`, `staff_id`) VALUES
('AD1', 'Sarath256', 'Sayuri', 'STF0001'),
('AD2', 'Susantha89', 'hsrhHDSI#24', 'STF0004'),
('AD3', 'Kamal32', 'Sndie#24', 'STF0005');

-- --------------------------------------------------------

--
-- Table structure for table `commentsection`
--

DROP TABLE IF EXISTS `commentsection`;
CREATE TABLE IF NOT EXISTS `commentsection` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsection`
--

INSERT INTO `commentsection` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Email`, `Comment`) VALUES
(1, 'Kamal', 'Fernando', 707637672, 'kamal6556@gmail.com\r\n', 'An amazing service!'),
(2, 'Sanduni', 'Nimeshika', 715636380, 'sanduni8779@gmail.com\r\n', ' Friendly staff and good service'),
(3, 'Vikasitha', 'Perera', 766701051, 'vikasitha12345@gmail.com', ' Fuck Off');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_email` varchar(25) NOT NULL,
  `c_firstname` varchar(20) NOT NULL,
  `c_lastname` varchar(20) NOT NULL,
  `c_city` varchar(15) DEFAULT NULL,
  `c_address1` varchar(25) DEFAULT NULL,
  `c_address2` varchar(25) DEFAULT NULL,
  `c_telephone` int(11) NOT NULL,
  `c_password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_email`, `c_firstname`, `c_lastname`, `c_city`, `c_address1`, `c_address2`, `c_telephone`, `c_password`) VALUES
(2, 'kamal8546@gmail.com', 'Kamal', 'Jayarathne', 'Ja-ela', '234/B,Vidyala mawatha', 'Ja-ela', 708243049, 'hD6fA$72'),
(1, 'saman346@gmail.com', 'Saman', 'Perera', 'Negombo', 'A/201,Sooriya Mawatha', 'Negombo', 764392384, 'Ls4hr#28'),
(3, 'Sunil9878@gmail.com', 'Sunil', 'Silva', 'Dehiwala', '65/2,Araliya Road', 'Dehiwala', 756382958, 'ujhdj45@Sa'),
(4, 'Jagath092@gmail.com', 'Jagath', 'Jayasundara', 'Malabe', '982/D,Isurupura Mawatha', 'Malabe', 727529751, 'Hfged64#jh'),
(5, 'Kaveesha_555@gmail.com', 'Kaveesha', 'Senevirathne', 'Nugegoda', 'B/734,Malwatta Road', 'Nugegoda', 779571055, 'kdG63$ue'),
(6, 'nethmi@sliit.lk', 'Nethmi', 'De Silva', 'Colombo', 'Negomb', 'Malabe', 766406523, 'chamod123');

-- --------------------------------------------------------

--
-- Table structure for table `oder_details`
--

DROP TABLE IF EXISTS `oder_details`;
CREATE TABLE IF NOT EXISTS `oder_details` (
  `Item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `sub_total` double DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oder_details`
--

INSERT INTO `oder_details` (`Item_id`, `order_id`, `qty`, `price`, `sub_total`, `product_id`, `product_name`) VALUES
(1, 1, 1, 240, 240, 5, 'Blouse-Dry Cleaned'),
(2, 1, 1, 250, 250, 4, 'Blouse[Cleaned, ironed]'),
(3, 2, 1, 240, 240, 5, 'Blouse-Dry Cleaned'),
(4, 2, 1, 250, 250, 4, 'Blouse[Cleaned, ironed]'),
(5, 3, 1, 240, 240, 5, 'Blouse-Dry Cleaned'),
(6, 3, 1, 250, 250, 4, 'Blouse[Cleaned, ironed]'),
(7, 4, 1, 240, 240, 5, 'Blouse-Dry Cleaned'),
(8, 4, 1, 250, 250, 4, 'Blouse[Cleaned, ironed]');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total`, `date`) VALUES
(1, 6, 490, '2022-05-24'),
(2, 6, 490, '2022-05-24'),
(3, 6, 490, '2022-05-24'),
(4, 6, 490, '2022-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `ID` int(11) NOT NULL,
  `CardHolderName` varchar(256) NOT NULL,
  `CardNumber` varchar(256) NOT NULL,
  `ExpireDate` date NOT NULL,
  `CVV` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `CardHolderName`, `CardNumber`, `ExpireDate`, `CVV`) VALUES
(3, 'ufhjhfj', '2345', '2022-05-26', ' 6556'),
(10, 'Test', 'qq', '2022-05-27', ' 123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `description`, `image`, `price`) VALUES
(1, 'Folded Shirt-[Washed, ironed and folded]', '../images/Folded_Shirt.jpg', 220),
(2, 'Shirt-Dry Cleaned\r\n[Carefully dry cleaned]', '../images/Shirt-Dry-Cleaned.jpg', 250),
(3, 'TShirt[Includes Men and Women]', '../images/TShirt.jpeg', 200),
(4, 'Blouse[Cleaned, ironed]', '../images/Blouse.jpeg', 250),
(5, 'Blouse-Dry Cleaned', '../images/Blouse-Dry-Cleaned.jpeg', 240),
(6, 'Kurtha Top', '../images/Kurtha.jpg', 270),
(7, 'Sweater - Dry cleaned', '../images/Sweater.jpg', 350),
(8, 'Trousers', '../images/Trousers.jpg', 250),
(9, 'Jeans[Washed and ironed]', '../images/Jeans.jpg', 280),
(10, 'Shorts[Washed, ironed folded]', '../images/Shorts.jpg', 200),
(11, 'Denim Short[Washed,ironed,folded]', '../images/Denim Short.jpg', 230),
(12, 'Skirt[trim,silk,leather,velvet]', '../images/Skirt.jpeg', 250),
(13, 'Sarong[Washed,iron,Fold]', '../images/Sarong.jpeg', 220),
(14, 'Dress-Casual[Frocks,Dresses]', '../images/Dress - Casual.jpg', 270),
(15, 'Saree Blouse', '../images/Saree-Blouse.jpg', 200),
(16, 'Bridal Saree', '../images/Bridal-Saree.jpg', 1250),
(17, 'Blazer[Professionally Dry Cleaned]', '../images/Blazer.jpg', 370),
(18, 'Casual Jacket', '../images/Casual-jacket.jpg', 290),
(19, 'National suit - Men', '../images/National-suit-Men.jpg', 450),
(20, 'Saree (Pressing Only)', '../images/Saree-(Pressing-Only).jpg', 280),
(21, 'Blazer (Pressing Only)', '../images/Blazer(Pressing-Only).jpg', 250),
(22, 'Bed Sheet (Pressing Only)', '../images/Bed-Sheet(Pressing-Only).jpg', 160),
(23, 'Pyjama[wash & Fold]', '../images/Pyjama.jpg', 250),
(24, 'Socks (Pair)', '../images/Socks.jpg', 90),
(25, 'Kid Dress[Washed,pressed,hung]', '../images/Kid Dress.jpg', 170),
(26, 'Kid Short (S)', '../images/Kid-Short.jpg', 160),
(27, 'Winter Top-Kids(Dry Cleaned)', '../images/Winter-Top - Copy.jpg', 250),
(28, 'Kid Top (S)', '../images/Kid-Top.jpg', 150),
(29, 'School Girl Dress (L)', '../images/School-Girl-Dress.jpg', 200),
(30, 'School Boy - (L) 2 Pc', '../images/boyuniform.jpg', 320),
(31, 'Tie[Includes bow ties]', '../images/Tie.jpg', 120);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
