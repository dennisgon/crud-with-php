-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2015 at 05:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amdp3`
--

-- --------------------------------------------------------

--
-- Table structure for table `msbook`
--

CREATE TABLE IF NOT EXISTS `msbook` (
`BookID` int(11) NOT NULL,
  `BookTitle` varchar(100) DEFAULT NULL,
  `Author` varchar(100) DEFAULT NULL,
  `BookImage` varchar(100) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `msbook`
--

INSERT INTO `msbook` (`BookID`, `BookTitle`, `Author`, `BookImage`, `Stock`) VALUES
(1, 'a', 'a', '1', 0),
(2, '', '', '', 0),
(3, 'a', 'a', '', 0),
(4, 'a', 'aa', 'a', 0),
(5, 'a', 'a', 'aa', 0),
(6, 'a', 'a', 'aa', 0),
(7, 'a', 'a', 'a', 10),
(8, '', '', '', 0),
(9, '', '', '', 0),
(10, '', '', '', 0),
(11, 'a', 'a', '', 0),
(12, 'admin', 'admin', '', 0),
(13, 'a', 'a', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `msmember`
--

CREATE TABLE IF NOT EXISTS `msmember` (
`MemberId` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `Genre` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `msmember`
--

INSERT INTO `msmember` (`MemberId`, `Username`, `Password`, `FullName`, `Genre`, `Email`, `Status`, `Phone`, `address`, `image`, `role`) VALUES
(1, 'admin', '0cc175b9c0f1b6a831c399e269772661', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin'),
(5, 'a', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'admin', '4124bc0a9335c27f086f24ba207a4912', 'aaa', NULL, 'dennisgon69@hotmail.com', NULL, '1234', '', NULL, NULL),
(12, 'den', '32ce9c04a986b6360b0ea1984ed86c6c', 'aaa', NULL, 'dennisgon69@hotmail.com', NULL, '12345', '', NULL, NULL),
(13, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', NULL, 'a@deni.com', NULL, '123', '', NULL, NULL),
(14, 'admin', '0cc175b9c0f1b6a831c399e269772661', 'aaa', NULL, 'dennisgon69@hotmail.com', NULL, 'a', '', NULL, NULL),
(15, 'admin', '0cc175b9c0f1b6a831c399e269772661', 'adfa', NULL, 'dennisgon69@hotmail.com', NULL, '1', '', NULL, NULL),
(16, 'admin', '0cc175b9c0f1b6a831c399e269772661', 'adfa', NULL, 'dennisgon69@hotmail.com', NULL, '12', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trborrow`
--

CREATE TABLE IF NOT EXISTS `trborrow` (
`TransactionID` int(11) NOT NULL,
  `BorrowDate` date DEFAULT NULL,
  `MemberID` int(11) DEFAULT NULL,
  `BookID` int(11) DEFAULT NULL,
  `ReturnDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msbook`
--
ALTER TABLE `msbook`
 ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `msmember`
--
ALTER TABLE `msmember`
 ADD PRIMARY KEY (`MemberId`);

--
-- Indexes for table `trborrow`
--
ALTER TABLE `trborrow`
 ADD PRIMARY KEY (`TransactionID`), ADD KEY `MemberID` (`MemberID`,`BookID`), ADD KEY `MemberID_2` (`MemberID`,`BookID`), ADD KEY `BookID` (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msbook`
--
ALTER TABLE `msbook`
MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `msmember`
--
ALTER TABLE `msmember`
MODIFY `MemberId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `trborrow`
--
ALTER TABLE `trborrow`
MODIFY `TransactionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `trborrow`
--
ALTER TABLE `trborrow`
ADD CONSTRAINT `trborrow_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `msmember` (`MemberId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `trborrow_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `msbook` (`BookID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
