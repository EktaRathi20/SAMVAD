-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samvad`
--

-- --------------------------------------------------------

--
-- Table structure for table `answertable`
--

CREATE TABLE `answertable` (
  `id` int(4) NOT NULL,
  `quesid` int(4) NOT NULL,
  `answer` mediumtext NOT NULL,
  `postansdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answertable`
--

INSERT INTO `answertable` (`id`, `quesid`, `answer`, `postansdate`) VALUES
(18, 3, 'onclick call the function then store the id of the div you want to hide or show in a variable then use element.style.property', '2022-05-25 03:40:42.000000'),
(22, 5, '5 subjects in all sem', '2022-05-28 06:30:43.000000'),
(18, 22, 'today is my exam', '2022-07-06 04:06:04.000000'),
(19, 22, 'jigyasa', '2022-07-06 04:18:53.000000');

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `userid` int(4) NOT NULL,
  `id` int(11) NOT NULL,
  `quesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`userid`, `id`, `quesid`) VALUES
(23, 18, 6),
(18, 21, 3),
(27, 18, 19),
(28, 26, 22);

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  `problem` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(4) NOT NULL,
  `followersid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `followersid`) VALUES
(19, 18),
(18, 21),
(24, 18),
(18, 31);

-- --------------------------------------------------------

--
-- Table structure for table `likedislike`
--

CREATE TABLE `likedislike` (
  `userid` int(4) NOT NULL,
  `id` int(4) NOT NULL,
  `quesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likedislike`
--

INSERT INTO `likedislike` (`userid`, `id`, `quesid`) VALUES
(22, 22, 5),
(24, 22, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profilephoto`
--

CREATE TABLE `profilephoto` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `photo` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profilephoto`
--

INSERT INTO `profilephoto` (`id`, `username`, `photo`) VALUES
(19, 'jigyasa09_', 'jigyasa.jpg'),
(18, 'ekta20_', 'ekta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questiontable`
--

CREATE TABLE `questiontable` (
  `id` int(4) NOT NULL,
  `quesid` int(4) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `postquesdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questiontable`
--

INSERT INTO `questiontable` (`id`, `quesid`, `question`, `postquesdate`) VALUES
(19, 2, 'full form of html?', '2021-11-10 01:32:10.000000'),
(21, 3, 'how to hide/show div using js?', '2021-12-12 02:42:08.000000'),
(22, 5, 'How many Subjects in BCA', '2022-05-28 06:28:24.000000'),
(18, 19, 'what is javascript?', '2022-06-19 07:04:46.486208'),
(26, 22, 'my name?', '2022-07-06 04:10:45.982690');

-- --------------------------------------------------------

--
-- Table structure for table `securityans`
--

CREATE TABLE `securityans` (
  `id` int(4) NOT NULL,
  `sqid` varchar(4) NOT NULL,
  `ans` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityans`
--

INSERT INTO `securityans` (`id`, `sqid`, `ans`) VALUES
(18, 'sq1', 'Jodhpur'),
(19, 'sq1', 'jodhpur'),
(20, 'sq1', 'delhi'),
(21, 'sq1', 'jodhpur'),
(26, 'sq1', 'jdp');

-- --------------------------------------------------------

--
-- Table structure for table `securityques`
--

CREATE TABLE `securityques` (
  `sqid` varchar(4) NOT NULL,
  `ques` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `securityques`
--

INSERT INTO `securityques` (`sqid`, `ques`) VALUES
('sq1', 'birth place'),
('sq2', 'fav sub'),
('sq3', 'fav place');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `email`, `password`) VALUES
(18, 'Ekta Rathi', 'ekta20_', 'rathiekta20@gmail.com', 'heyekta'),
(19, 'Jigyasa Bhati', 'jigyasa09_', 'jigyasa19@gmail.com', 'jiji19'),
(20, 'Yamini', 'yamini02_', 'yamini01@gmail.com', 'yami01'),
(21, 'shreya', 'shreya0_', 'shreyash12@gmail.com', 'shreyahey'),
(22, 'Umang jain', 'umangjn', 'jainu016@gmail.com', 'thik hai'),
(24, 'Prince chandak', 'king007', 'princechandak02@gmail.com', '12'),
(26, 'seenu', 'seenu', 'seenu@gmail.com', 'seenu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answertable`
--
ALTER TABLE `answertable`
  ADD KEY `id` (`id`),
  ADD KEY `quesid` (`quesid`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD KEY `id` (`id`),
  ADD KEY `quesid` (`quesid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD KEY `id` (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD KEY `id` (`id`);

--
-- Indexes for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD KEY `id` (`id`),
  ADD KEY `quesid` (`quesid`);

--
-- Indexes for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD KEY `id` (`id`);

--
-- Indexes for table `questiontable`
--
ALTER TABLE `questiontable`
  ADD PRIMARY KEY (`quesid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `securityans`
--
ALTER TABLE `securityans`
  ADD KEY `id` (`id`),
  ADD KEY `sqid` (`sqid`);

--
-- Indexes for table `securityques`
--
ALTER TABLE `securityques`
  ADD PRIMARY KEY (`sqid`),
  ADD KEY `sqid` (`sqid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questiontable`
--
ALTER TABLE `questiontable`
  MODIFY `quesid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answertable`
--
ALTER TABLE `answertable`
  ADD CONSTRAINT `answertable_ibfk_1` FOREIGN KEY (`quesid`) REFERENCES `questiontable` (`quesid`),
  ADD CONSTRAINT `answertable_ibfk_2` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD CONSTRAINT `bookmark_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `follow`
--
ALTER TABLE `follow`
  ADD CONSTRAINT `follow_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `likedislike`
--
ALTER TABLE `likedislike`
  ADD CONSTRAINT `likedislike_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`),
  ADD CONSTRAINT `likedislike_ibfk_2` FOREIGN KEY (`quesid`) REFERENCES `questiontable` (`quesid`);

--
-- Constraints for table `profilephoto`
--
ALTER TABLE `profilephoto`
  ADD CONSTRAINT `profilephoto_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `questiontable`
--
ALTER TABLE `questiontable`
  ADD CONSTRAINT `questiontable_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`);

--
-- Constraints for table `securityans`
--
ALTER TABLE `securityans`
  ADD CONSTRAINT `securityans_ibfk_1` FOREIGN KEY (`id`) REFERENCES `signup` (`id`),
  ADD CONSTRAINT `securityans_ibfk_2` FOREIGN KEY (`sqid`) REFERENCES `securityques` (`sqid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
