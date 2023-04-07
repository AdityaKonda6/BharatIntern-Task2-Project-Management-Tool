-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2015 at 09:34 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` char(5) NOT NULL,
  `password` char(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `f_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `research` varchar(200) NOT NULL,
  `others` varchar(500) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`f_id`, `name`, `email`, `phone`, `password`, `qualification`, `domain`, `research`, `others`) VALUES
('f112', 'Jaswant Kumar a', 'jas@gmail.coma', '123', '12312', 'M.Techa', 'java', 'php', 'asp'),
('f908', 'jas', 'jas@gmail.com', '1234567', '123', '', 'NUL', 'NUL', 'NUL'),
('f987', 'jas', 'jas@gmail.comhahah', '1234567', '147', 'sbkjh', 'NULL', 'NULL', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `mail_id` int(5) NOT NULL AUTO_INCREMENT,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `msg` varchar(250) NOT NULL,
  PRIMARY KEY (`mail_id`),
  KEY `s_id` (`s_id`,`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `s_id`, `f_id`, `msg`) VALUES
(1, 's111', 'f112', 'hello'),
(4, 's113', 'f112', ''),
(5, 's113', 'f112', ''),
(6, 's113', 'f112', ''),
(7, 's113', 'f112', 'student'),
(10, 's113', 'f112', 'heuyyk'),
(11, 's115', 'f112', 'hey'),
(12, 's113', 'f112', 'hahah'),
(14, 's113', 'f112', ''),
(15, 's113', 'f112', 'asdfgghh'),
(16, 's113', 'f112', 'I am writing in this letter in response to you that as a web designer I need to show my technical skills. And I have got the job according to my choice by surfing for freejobalert.com.\r\nI have done my project  in ASP.NET,JAVA,VB  Technologies and als');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meeting_id` int(5) NOT NULL AUTO_INCREMENT,
  `f_id` varchar(10) NOT NULL,
  `s_id` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `desc` varchar(200) NOT NULL,
  PRIMARY KEY (`meeting_id`),
  KEY `f_id` (`f_id`,`s_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `f_id`, `s_id`, `date`, `time`, `desc`) VALUES
(1, 'f112', 's113', '2015-03-30', '20:30:50', 'hkjhk'),
(2, 'f112', 's115', '2015-03-31', '20:30:00', 'hello'),
(3, 'f112', 's113', '1989-06-15', '08:57:00', 'Deo.');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `p_id` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `domain` varchar(20) DEFAULT NULL,
  `s_id` varchar(10) DEFAULT NULL,
  `f_id` varchar(10) DEFAULT NULL,
  `ppf` varchar(200) NOT NULL,
  `psf` varchar(200) NOT NULL,
  `remark` varchar(500) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `f_id` (`f_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `name`, `domain`, `s_id`, `f_id`, `ppf`, `psf`, `remark`) VALUES
('1234', '', '', 'we34', 'f112', '', '', 'Excellent report!'),
('dd', NULL, NULL, 's115', 'f112', 'gantt chart f.pdf', '', 'hello'),
('gdg', '', '', 's112', 'f987', '', '', ''),
('p114', NULL, NULL, 's113', 'f112', 'CSFF-SDM.doc', 'CSFF-SDM.doc', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `s_id` (`s_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=795 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `s_id`, `f_id`) VALUES
(1, 's112', 'f987'),
(4, 's113', 'f908'),
(789, 'we34', 'f112'),
(790, 's113', 'f987'),
(791, 's113', 'f112'),
(792, 's113', 'f112'),
(793, 's113', 'f987'),
(794, 's113', 'f112');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `year` varchar(10) NOT NULL,
  `stream` varchar(15) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `email`, `phone`, `password`, `year`, `stream`) VALUES
('', '', '', 'admin', 'admin', '', 'Selcet'),
('1213', 'ksk', 'sdlj@gmail.com', 'admin', 'admin', '2001', 'CSE'),
('12345', 'Pritesh', 'p4@yahoo.com', '2324345', 'bunny', '2016', 'CSE'),
('141', 'saaya', 'sweetsaaya@gmail.com', 'admin', 'admin', '1990', 'COM'),
('s111', 'Jaswant Kumar', 'jas@gmail.com', '1234567890', '12345', '15-16', 'COM'),
('s112', 'Jaswant Kumar', 'jaswant@gmail.com', '123456789', '123', '15-16', 'CSE'),
('s113', 'Jaswant Kumar', 'jaswant@gamial.com', '5468522', '', '123', 'EE'),
('s114', 'jaswant', 'jas@gmail.com', '12345678', '123a', '15-16', 'CSE'),
('s115', 'jas', 'jaswant@gamial.com', '1234567890', '122', '15-16', 'CSE'),
('we34', 'jknbkjn', 'jhbjb@hgih', 'jhgjhbh', 'hbkbmj', 'jhbkh', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `st_mail`
--

CREATE TABLE IF NOT EXISTS `st_mail` (
  `s_mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` varchar(10) NOT NULL,
  `f_id` varchar(10) NOT NULL,
  `mag` varchar(250) NOT NULL,
  PRIMARY KEY (`s_mail_id`),
  KEY `s_id` (`s_id`,`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `st_mail`
--

INSERT INTO `st_mail` (`s_mail_id`, `s_id`, `f_id`, `mag`) VALUES
(1, 's113', 'f112', 'huj'),
(2, 's113', 'f112', '142'),
(3, 's113', 'f112', 'hello dear'),
(4, 's113', 'f112', 'hello');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mail`
--
ALTER TABLE `mail`
  ADD CONSTRAINT `makey1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `makey2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `mkey1` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`),
  ADD CONSTRAINT `mkey2` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `fkey1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `fkey2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

--
-- Constraints for table `st_mail`
--
ALTER TABLE `st_mail`
  ADD CONSTRAINT `m1` FOREIGN KEY (`s_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `m2` FOREIGN KEY (`f_id`) REFERENCES `faculty` (`f_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
