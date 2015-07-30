-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 11:03 AM
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

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Sno`, `comid`, `comment`, `postid`, `username`, `timestamp`) VALUES
(1, 'COM00001', 'fdfds', 'POST00013', 'Jiten  Sabharwal', '2015-07-30 08:13:36');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`Sno`, `postid`, `user`, `post`, `upvote`, `downvote`, `timestamp`) VALUES
(4, 'POST00004', 'jitensabharwal08@gmail.com', 'hello', 4, 1, '2015-07-28 11:28:45'),
(5, 'POST00005', 'jitensabharwal08@gmail.com', 'hello', 0, 0, '2015-07-28 11:29:41'),
(6, 'POST00006', 'jitensabharwal08@gmail.com', 'hrerbfb', 0, 0, '2015-07-28 11:30:43'),
(7, 'POST00007', 'jitensabharwal08@gmail.com', 'heiii', 1, 2, '2015-07-28 12:08:18'),
(8, 'POST00008', 'jitensabharwal08@gmail.com', 'hello', 2, 2, '2015-07-28 12:08:53'),
(23, 'POST00009', 'jitensabharwal08@gmail.com', 'my name is sheela sheela ki jawani ', 2, 2, '2015-07-28 17:05:35'),
(24, 'POST00010', 'jitensabharwal08@gmail.com', 'baaba is my name i love to suck my boobs', 0, 1, '2015-07-28 17:06:41'),
(25, 'POST00011', 'jitensabharwal08@gmail.com', 'Fuck Chammo Fuck\n', 8, 0, '2015-07-28 17:07:13'),
(26, 'POST00012', 'jitensabharwal08@gmail.com', 'hi', 0, 0, '2015-07-30 04:01:27'),
(27, 'POST00013', 'jitensabharwal08@gmail.com', 'jlfs;lsdf', 13, 5, '2015-07-30 05:39:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Sno`, `username`, `firstname`, `lastname`, `contact`, `password`, `salt`, `timestamp`) VALUES
(4, 'jitensabharwal08@gmail.com', 'Jiten ', 'Sabharwal', '9962939364', '202cb962ac59075b964b07152d234b70', 'MOumGrrdW6HXHAzXcw0oiijAIjizwnlpJBiz/2v6s34=', '2015-07-28 08:49:01');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
