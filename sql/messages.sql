-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2013 at 03:26 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT '1',
  `svisible` tinyint(1) NOT NULL DEFAULT '1',
  `rvisible` tinyint(1) NOT NULL DEFAULT '1',
  `subject` varchar(500) DEFAULT NULL,
  `hospid` int(11) NOT NULL,
  `message` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `delete_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `new`, `svisible`, `rvisible`, `subject`, `hospid`, `message`, `created_at`, `updated_at`, `delete_status`) VALUES
(33, 5, 2, 1, 1, 1, 'Subject1', 1, 'Here is the message...I like it I like it....come on...', '2013-02-09 12:36:04', '2013-01-19 02:27:06', 0),
(34, 2, 5, 1, 1, 1, 'Subject2', 1, 'I like it I like it.', '2013-02-09 12:38:04', '2013-01-19 17:42:10', 1),
(35, 5, 2, 1, 1, 1, 'Subject3', 1, 'that''s awesome', '2013-02-09 12:40:10', '2013-01-22 04:45:15', 1),
(36, 5, 29, 1, 1, 1, 'Subject4', 1, 'Sending you test email', '2013-02-09 12:40:10', '2013-02-03 07:50:08', 0),
(37, 6, 2, 1, 1, 1, 'Subject5', 1, 'this is mytest', '2013-02-09 12:40:13', '0000-00-00 00:00:00', 0),
(38, 29, 2, 1, 1, 1, 'Subject6', 1, 'I am your recruiter', '2013-02-09 12:40:13', '0000-00-00 00:00:00', 0),
(39, 1, 2, 1, 1, 1, 'Subject7', 1, 'this is an admin test', '2013-02-09 12:42:39', '0000-00-00 00:00:00', 0),
(44, 2, 1, 1, 1, 1, 'Subject8', 1, 'Hi Admin', '2013-02-09 19:39:34', '2013-02-09 19:39:34', 0),
(45, 2, 1, 1, 1, 1, 'Subject9', 1, 'So glad to meet you', '2013-02-09 19:40:20', '2013-02-09 19:40:20', 0),
(46, 1, 2, 1, 1, 1, 'Subject10', 1, 'It''s nice to meet you as well.', '2013-02-09 19:40:58', '2013-02-09 19:40:58', 0),
(47, 2, 1, 1, 1, 1, 'Subject11', 1, 'test', '2013-02-09 19:41:33', '2013-02-09 19:41:33', 0),
(48, 2, 1, 1, 1, 1, 'Subject12', 1, 'test', '2013-02-09 19:41:39', '2013-02-09 19:41:39', 0),
(49, 2, 1, 1, 1, 1, 'Subject13', 1, 'test', '2013-02-09 19:41:44', '2013-02-09 19:41:44', 0),
(50, 2, 1, 1, 1, 1, 'Subject14', 1, 'test', '2013-02-09 19:42:09', '2013-02-09 19:42:09', 0),
(51, 1, 2, 1, 1, 1, 'Subject15', 1, 'test', '2013-02-09 19:46:12', '2013-02-09 19:46:12', 0),
(52, 2, 6, 1, 1, 1, 'Subject16', 1, 'This is a test', '2013-02-09 20:46:41', '2013-02-09 20:46:41', 0),
(53, 5, 2, 1, 1, 1, 'Subject17', 1, 'THis is the shiznik', '2013-02-09 22:44:40', '2013-02-09 22:44:40', 1),
(54, 5, 2, 1, 1, 1, 'Subject18', 1, 'I am the man...', '2013-02-09 22:48:04', '2013-02-09 22:48:04', 0),
(55, 5, 2, 1, 1, 1, 'Subject19', 1, 'As I thought', '2013-02-09 22:54:48', '2013-02-09 22:54:48', 0),
(56, 5, 2, 1, 1, 1, 'Subject20', 1, 'here''s a new message', '2013-02-25 23:07:41', '2013-02-25 23:07:41', 0),
(57, 2, 5, 1, 1, 1, 'Subject21', 1, 'That''s the shiznik', '2013-02-25 23:08:25', '2013-02-25 23:08:25', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
