-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 12:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music_cords`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_posts`
--

CREATE TABLE IF NOT EXISTS `music_posts` (
`ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `cartegory` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music_posts`
--

INSERT INTO `music_posts` (`ID`, `title`, `artist`, `description`, `cartegory`, `photo`, `timer`) VALUES
(1, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '902472.png', '2017-03-02 10:20:26'),
(2, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '612357.png', '2017-03-02 10:20:49'),
(3, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '878357.png', '2017-03-02 10:20:54'),
(4, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '698392.png', '2017-03-02 10:20:59'),
(5, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '611016.png', '2017-03-02 10:21:05'),
(6, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '345565.png', '2017-03-02 10:21:10'),
(7, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '129015.png', '2017-03-02 10:21:15'),
(8, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '110875.png', '2017-03-02 10:21:21'),
(9, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '453794.png', '2017-03-02 10:21:27'),
(10, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '553090.png', '2017-03-02 10:21:38'),
(11, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '786896.png', '2017-03-02 10:21:44'),
(12, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '919454.png', '2017-03-02 10:21:49'),
(13, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '619979.png', '2017-03-02 10:21:53'),
(14, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '54535.png', '2017-03-02 10:22:00'),
(15, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '921710.png', '2017-03-02 10:22:07'),
(16, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '959544.png', '2017-03-02 10:22:11'),
(17, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '322638.png', '2017-03-02 10:22:16'),
(18, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '377302.png', '2017-03-02 10:22:20'),
(19, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '950368.png', '2017-03-02 10:22:25'),
(20, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '898936.png', '2017-03-02 10:22:29'),
(21, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '272274.png', '2017-03-02 10:22:34'),
(22, 'Bongo', '', 'thi \r\nshjsdhj\r\njhdsh  bc    rff              rgf   efwfe   \r\nsxdsdd sff    fdffd    weff df   wfefff \r\ndsfdf      sf f fd    fe\r\neff fd    ffs d', 'Feeds, Suppliments and Seeds', '194745.png', '2017-03-02 10:22:38'),
(23, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '594248.png', '2017-03-02 10:44:11'),
(24, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '933661.png', '2017-03-02 10:44:16'),
(25, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '139319.png', '2017-03-02 10:44:20'),
(26, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '203861.png', '2017-03-02 10:44:24'),
(27, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '292670.png', '2017-03-02 10:44:28'),
(28, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '92095.png', '2017-03-02 10:44:31'),
(29, 'Kisiimy', '', 'hdhgdsfn dsfhfjhf  sjdjds\r\nsdjdhbc   hjdjgd    t g  fds sd\r\n\r\ne nrhmfrd  nwergfh, \r\nsdffedfs', 'Feeds, Suppliments and Seeds', '129442.png', '2017-03-02 10:44:34'),
(30, 'Sitolia', 'Willy Paul', 'yuye fsyjgfgd feyjgregyje\r\negyege ewfef\r\nerewe', 'Feeds, Suppliments and Seeds', '', '2017-03-02 18:09:15'),
(33, 'jjj', 'k', 'iljk', 'Livestock, Poultry and Fish', NULL, '2017-03-02 18:12:03'),
(34, 'jjj', 'k', 'iljk', 'Livestock, Poultry and Fish', NULL, '2017-03-02 18:17:15'),
(35, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:17:42'),
(36, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:17:48'),
(37, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:17:53'),
(38, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:00'),
(39, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:07'),
(40, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:13'),
(41, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:17'),
(42, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:20'),
(43, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:23'),
(44, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:32'),
(45, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:37'),
(46, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:40'),
(47, 'Sitolia', 'Willy Paul', 'ueyuererw fhurreyu fygryurf efgfges \r\neshufhufds ehukr\r\n    yjghfe  ge\r\n\r\n\r\nef', 'Ukelele', NULL, '2017-03-02 18:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `email`, `pass`) VALUES
(1, 'emashmagak@appslab.co.ke', 'manuel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_posts`
--
ALTER TABLE `music_posts`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `photo` (`photo`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_posts`
--
ALTER TABLE `music_posts`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
