-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 01:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbackrequests`
--

CREATE TABLE `feedbackrequests` (
  `ID` int(11) NOT NULL,
  `userEmail` text,
  `userOrganization` text,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackrequests`
--

INSERT INTO `feedbackrequests` (`ID`, `userEmail`, `userOrganization`, `message`) VALUES
(1, 'email1@email.com', 'organization1', 'message1'),
(2, 'email2@email.com', 'organization2', 'message2'),
(3, 'email3@email.com', 'organization3', 'message3'),
(4, 'email4@email.com', 'organization4', 'message4'),
(5, 'email5@email.com', 'organization5', 'message5'),
(6, 'email6@email.com', 'organization6', 'message6'),
(7, 'email7@email.com', 'organization7', 'message7'),
(8, 'email8@email.com', 'organization8', 'message8'),
(9, 'email9@email.com', 'organization9', 'message9'),
(10, 'email10@email.com', 'organization10', 'message10'),
(11, 'email11@email.com', 'organization11', 'message11'),
(12, 'email12@email.com', 'organization12', 'message12'),
(13, 'email13@email.com', 'organization13', 'message13'),
(14, 'email14@email.com', 'organization14', 'message14'),
(15, 'email15@email.com', 'organization15', 'message15'),
(16, 'email16@email.com', 'organization16', 'message16'),
(17, 'email17@email.com', 'organization17', 'message17'),
(18, 'email18@email.com', 'organization18', 'message18'),
(19, 'email19@email.com', 'organization19', 'message19'),
(20, 'email20@email.com', 'organization20', 'message20');

-- --------------------------------------------------------

--
-- Table structure for table `newslettersubscribers`
--

CREATE TABLE `newslettersubscribers` (
  `ID` int(11) NOT NULL,
  `fname` text,
  `lname` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslettersubscribers`
--

INSERT INTO `newslettersubscribers` (`ID`, `fname`, `lname`, `email`) VALUES
(1, 'fname1', 'lname1', 'email1@email.com'),
(2, 'fname2', 'lname2', 'email2@email.com'),
(3, 'fname3', 'lname3', 'email3@email.com'),
(4, 'fname4', 'lname4', 'email4@email.com'),
(5, 'fname5', 'lname5', 'email5@email.com'),
(6, 'fname6', 'lname6', 'email6@email.com'),
(7, 'fname7', 'lname7', 'email7@email.com'),
(8, 'fname8', 'lname8', 'email8@email.com'),
(9, 'fname9', 'lname9', 'email9@email.com'),
(10, 'fname10', 'lname10', 'email10@email.com'),
(11, 'fname11', 'lname11', 'email11@email.com'),
(12, 'fname12', 'lname12', 'email12@email.com'),
(13, 'fname13', 'lname13', 'email13@email.com'),
(14, 'fname14', 'lname14', 'email14@email.com'),
(15, 'fname15', 'lname15', 'email15@email.com'),
(16, 'fname16', 'lname16', 'email16@email.com'),
(17, 'fname17', 'lname17', 'email17@email.com'),
(18, 'fname18', 'lname18', 'email18@email.com'),
(19, 'fname19', 'lname19', 'email19@email.com'),
(20, 'fname20', 'lname20', 'email20@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicespecialists`
--

CREATE TABLE `servicespecialists` (
  `ID` int(11) NOT NULL,
  `fname` text,
  `lname` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicespecialists`
--

INSERT INTO `servicespecialists` (`ID`, `fname`, `lname`) VALUES
(1, 'fname1', 'lname1'),
(2, 'fname2', 'lname2'),
(3, 'fname3', 'lname3'),
(4, 'fname4', 'lname4'),
(5, 'fname5', 'lname5'),
(6, 'fname6', 'lname6'),
(7, 'fname7', 'lname7'),
(8, 'fname8', 'lname8'),
(9, 'fname9', 'lname9'),
(10, 'fname10', 'lname10'),
(11, 'fname11', 'lname11'),
(12, 'fname12', 'lname12'),
(13, 'fname13', 'lname13'),
(14, 'fname14', 'lname14'),
(15, 'fname15', 'lname15'),
(16, 'fname16', 'lname16'),
(17, 'fname17', 'lname17'),
(18, 'fname18', 'lname18'),
(19, 'fname19', 'lname19'),
(20, 'fname20', 'lname20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbackrequests`
--
ALTER TABLE `feedbackrequests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `newslettersubscribers`
--
ALTER TABLE `newslettersubscribers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `servicespecialists`
--
ALTER TABLE `servicespecialists`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbackrequests`
--
ALTER TABLE `feedbackrequests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `newslettersubscribers`
--
ALTER TABLE `newslettersubscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `servicespecialists`
--
ALTER TABLE `servicespecialists`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
