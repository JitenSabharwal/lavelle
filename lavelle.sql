-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 03:27 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lavelle`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `comid` varchar(20) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `postid` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `friend_request` varchar(50) DEFAULT NULL,
  `friend_accpeted` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `postid` varchar(10) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `post` varchar(1000) DEFAULT NULL,
  `upvote` int(10) DEFAULT NULL,
  `downvote` int(10) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Sno`, `postid`, `user`, `post`, `upvote`, `downvote`, `timestamp`) VALUES
(28, 'POST00001', 'jitensabharwal08@gmail.com', 'hi my name is jiten', 0, 0, '2015-07-30 13:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `skill_id` varchar(20) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `head` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`Sno`, `skill_id`, `username`, `head`, `timestamp`) VALUES
(6, 'SKIL00001', 'jitensabharwal08@gmail.com', 'Jiten', '2015-07-29 20:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Sno` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `salt` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `username`, `firstname`, `lastname`, `contact`, `password`, `salt`, `timestamp`) VALUES
(4, 'jitensabharwal08@gmail.com', 'Jiten ', 'Sabharwal', '9962939364', '202cb962ac59075b964b07152d234b70', 'MOumGrrdW6HXHAzXcw0oiijAIjizwnlpJBiz/2v6s34=', '2015-07-28 08:49:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
