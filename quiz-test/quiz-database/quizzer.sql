-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2018 at 04:52 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

DROP TABLE IF EXISTS `choices`;
CREATE TABLE IF NOT EXISTS `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'A) JavaScript'),
(2, 1, 0, 'B) ActionScript'),
(3, 1, 1, 'C) PHP'),
(4, 1, 0, 'D) ASP'),
(5, 2, 0, 'A) Server-side scripting'),
(6, 2, 1, 'B) Client-side scripting'),
(7, 2, 0, 'C) JavaScript'),
(8, 3, 0, 'A) Java'),
(9, 3, 0, 'B) Ruby'),
(10, 3, 1, 'C) PHP'),
(11, 3, 0, 'D) JavaScript'),
(12, 3, 0, 'E) Perl'),
(13, 4, 1, 'A) It enables processing and returning data from client browser to browser.'),
(14, 4, 0, 'B) It uses web browsers to run its scripts.'),
(15, 4, 0, 'C) It enables processing and returning data from server to server.'),
(16, 5, 1, 'A) It enables functions such as user validation, retrieving data, saving data, and navigating from web page to web page.'),
(17, 5, 0, 'B) It allows the engineering of faster and more responsive applications.'),
(18, 5, 0, 'C) Its scripts are embedded in a website\'s HTML markup code.'),
(19, 6, 1, 'A) Request'),
(20, 6, 0, 'B) Command'),
(21, 6, 0, 'C) Response'),
(22, 6, 0, 'D) Message'),
(23, 7, 0, 'A) Static web page content'),
(24, 7, 0, 'B) Web server extension'),
(25, 7, 0, 'C) Web server'),
(26, 7, 1, 'D) Dynamic web page content'),
(27, 8, 0, 'A) Request'),
(28, 8, 0, 'B) Command'),
(29, 8, 0, 'C) Response'),
(30, 8, 1, 'D) Message'),
(31, 9, 0, 'A) Personal Hypertext Preprocessor'),
(32, 9, 0, 'B) Personal Home Pages'),
(33, 9, 1, 'C) Hypertext preprocessor'),
(34, 10, 0, 'A) Defined to the users'),
(35, 10, 1, 'B) Invisible to end users'),
(36, 10, 0, 'C) Visible to end users'),
(37, 10, 0, 'D) None of the above');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_number` int(20) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`question_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'Which of the following is a language for writing server-side scripts?'),
(2, 'What type of scripting environment processes and returns data from server to browser and browser to server?'),
(3, 'Which of the following is a server-side scripting programming language?'),
(4, 'What is one essential feature of a server-side scripting technology?'),
(5, 'What is one essential feature of a server-side scripting technology?'),
(6, 'hat do web servers send to clients?'),
(7, 'Sending packets that are created by server-side scripts are referred to as?'),
(8, 'Sending packets that are created by server-side scripts are referred to as?'),
(9, 'What does PHP stand for?'),
(10, 'Server-side scripts are');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
