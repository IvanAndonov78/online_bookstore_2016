SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `admins` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` text NOT NULL,
  `adminPass` text NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `admins` (`adminId`, `adminName`, `adminPass`) VALUES
(1, 'admin', 'admin');

CREATE TABLE IF NOT EXISTS `books` (
  `bookID` int(11) NOT NULL AUTO_INCREMENT,
  `bookHead` varchar(255) NOT NULL,
  `imgLink` text NOT NULL,
  `categoryBookId` int(11) NOT NULL,
  `bookAuthorId` int(11) NOT NULL,
  `bookPrice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`bookID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

INSERT INTO `books` (`bookID`, `bookHead`, `imgLink`, `categoryBookId`, `bookAuthorId`, `bookPrice`) VALUES
(9, 'Iztok', '3.jpg', 2, 3, '15'),
(12, 'asdfoljkf', '4.jpg', 2, 1, '20'),
(32, '6', '6.jpg', 6, 6, '6'),
(33, '5', '5.jpg', 5, 5, '5');

CREATE TABLE IF NOT EXISTS `customers` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `customerName` varchar(255) NOT NULL,
  `customerPass` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

INSERT INTO `customers` (`customerId`, `customerName`, `customerPass`, `customerEmail`) VALUES
(1, 'Ivan', '123', 'office@myoffice.bg'),
(2, 'Pesho', '111', 'pesho@abv.bg'),
(3, 'jhgbhjv', '310dcbbf4cce62f762a2aaa148d556bd', 's@abv.bg'),
(4, 'tester', '15de21c670ae7c3f6f3f1f37029303c9', 'w@abv.bg'),
(5, 'penco', '0a113ef6b61820daa5611c870ed8d5ee', 'r@v.bg'),
(6, 'amgul', 'cfcd208495d565ef66e7dff9f98764da', 'amgul@x.com'),
(7, 'test', '698d51a19d8a121ce581499d7b701668', 'test@abv.bg'),
(8, 'hulk', '15de21c670ae7c3f6f3f1f37029303c9', 'h@abv.bg'),
(9, 'Spiderman', '0a113ef6b61820daa5611c870ed8d5ee', 'spider@abv.bg');

CREATE TABLE IF NOT EXISTS `orders` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `orderDate` date NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

INSERT INTO `orders` (`orderId`, `customerId`, `bookId`, `orderDate`) VALUES
(1, 3, 2, '2016-06-15'),
(2, 1, 4, '2016-06-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
