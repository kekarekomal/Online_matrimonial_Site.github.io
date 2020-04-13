-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 09:35 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `profilecreatedby` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `education_sub` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `occupation_descr` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `email`, `age`, `height`, `sex`, `religion`, `caste`, `district`, `state`, `maritalstatus`, `profilecreatedby`, `education`, `education_sub`, `firstname`, `lastname`, `body_type`, `physical_status`, `drink`, `mothertounge`, `colour`, `weight`, `blood_group`, `diet`, `smoke`, `dateofbirth`, `occupation`, `occupation_descr`, `annual_income`, `fathers_occupation`, `mothers_occupation`, `no_bro`, `no_sis`, `aboutme`, `profilecreationdate`) VALUES
(111, 0, 'jhgasdasd@hjsadkl.cop', '27', 0, 'Male', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'Single', 'Self', 'Primary', '', 'test', 'testyhtjsdf', 'Slim', 'No Problem', 'Sometime', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'Sometime', '1996-01-12', 'dgdsgsdf', 'gdsg', '4654456', 'erfdgdsg', 'dsgsdgdsfgdsfgdfg', 1, 1, 'dfgdsgdsfg', '2016-02-27'),
(112, 7, 'dadasd@asd.com', '', 0, 'Male', 'Not Applicable', 'Roman Cathaolic', '', '', 'Single', 'Self', 'Primary', '', 'kjdhkdsjfghk', 'QKJHKJFHSDFJKH', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 0, 'O +ve', 'Veg', 'No', '0000-00-00', '', '', '', '', '', 1, 1, '', '2016-02-27'),
(113, 12, 'asdasdasd@asdfsadf.com', '18', 0, 'Male', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'Single', 'Self', 'PG', 'dsadasd', 'Aswin', 'Kuttappi', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(114, 13, 'asdasdasd@asdfsadf.com', '18', 0, 'Female', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'Single', 'Self', 'PG', 'dsadasd', 'Reshma', 'Reshma', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(115, 14, 'asdasdasd@asdfsadf.com', '18', 0, 'Male', 'Hindu', 'Thiyya', 'Wayanad', 'Kerala', 'Single', 'Self', 'PG', 'dsadasd', 'Rahul', 'Rahul', 'Slim', 'No Problem', 'No', 'Malayalam', 'Dark', 58, 'O +ve', 'Veg', 'No', '1998-02-14', 'das', 'dasdas', '8598', 'dasdasd', 'asdasdsd', 1, 1, 'assdfsdf sdfas fasdf asdfasdf asdf', '2016-02-28'),
(116, 15, 'kekarekomal@gmail.com', '22', 0, 'Female', 'Hindu', 'belgaum', '', 'Karnataka', 'Single', 'Self', 'Primary', '', 'komal', 'kekare', 'Slim', 'No Problem', 'No', '', 'Fair', 50, 'O +ve', 'Veg', 'No', '1997-10-14', 'IT Employee', 'IT Job', '40000', 'business', 'housewife', 0, 1, 'komal', '2020-02-14'),
(117, 16, 'truptikavadi25@gmail.com', '33', 6, 'Female', 'Hindu', 'devang', '', 'Nagaland', 'Single', 'Self', 'Degree', 'cs', 'trupti', 'kavadi', 'Slim', 'No Problem', 'No', '', 'Fair', 45, 'A +ve', 'Non Veg', 'No', '1997-03-02', 'IT Employee', 'IT Job', '40000', 'business', 'housewife', 0, 2, 'jjj', '2020-02-23'),
(118, 17, 'rosevk0408@gmail.com', '21', 6, 'Female', 'Hindu', 'hubli', '', 'Karnataka', 'Single', 'Self', 'PG', 'cs', 'vidya', 'kavadi', 'Slim', 'No Problem', 'No', '', 'Fair', 50, 'A +ve', 'Veg', 'No', '2001-07-14', 'IT Employee', 'IT Job', '40000', 'business', 'housewife', 1, 1, 'hi im vidya', '2020-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `partnerprefs`
--

CREATE TABLE `partnerprefs` (
  `id` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnerprefs`
--

INSERT INTO `partnerprefs` (`id`, `custId`, `agemin`, `agemax`, `maritalstatus`, `complexion`, `height`, `diet`, `religion`, `caste`, `mothertounge`, `education`, `occupation`, `descr`) VALUES
(1, 6, '18', 30, 'Single', '', 180, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', 'Primary', '', 'Beautiful , Super, just for fun'),
(2, 7, '18', 40, 'Single', '', 150, 'Veg', 'Not Applicable', 'Roman Cathaolic', '', 'Primary', '', ''),
(3, 12, '18', 40, 'Single', '', 150, 'Veg', 'Hindu', 'Thiyya', '', 'PG', 'sadasdasd', ''),
(4, 13, '18', 40, 'Single', '', 0, 'Veg', 'Hindu', 'Thiyya', '', 'PG', 'das', ''),
(5, 14, '18', 50, 'Single', '', 0, 'Veg', 'Hindu', 'Thiyya', '', 'PG', 'das', 'asdasdas da asfd afsdfasdf asjdf akjsdf kjafsdks d'),
(6, 15, '25', 30, 'Single', '', 20, 'Veg', 'Christian', 'hjjkkk', '', 'Degree', 'rggfggf', ''),
(7, 16, '', 0, '', '', 0, '', '', '', '', '', '', ''),
(8, 17, '', 0, '', '', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(25) NOT NULL,
  `pic2` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `cust_id`, `pic1`, `pic2`) VALUES
(27, 6, 'img.jpg', 'picture.jpg'),
(28, 7, 'banner_img_3@2x.png', 'article_img_2.jpg'),
(29, 12, 'article_img_1.jpg', 'article_img_2.jpg'),
(30, 13, 'team-13.jpg', 'thumb-intro.jpg'),
(31, 14, '1.jpg', 'img-1.jpg'),
(32, 15, 'ppp.jpg', 'ppp1.jpg'),
(36, 16, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `dateofbirth`, `gender`, `userlevel`) VALUES
(1, 0, 'admin', 'admin', 'admin@nowhere.com', '2016-02-17', 'male', 1),
(6, 0, 'test', 'test', 'test@test.com', '2016-02-11', 'femal', 0),
(7, 0, 'shobi', 'shobi', 'jdshfkjsh@nowhere.com', '0000-00-00', 'male', 0),
(8, 0, 'Name', '', 'E-Mail', '0000-00-00', '', 0),
(9, 0, 'Raju', 'raju', 'raju@nowhere.com', '0000-00-00', 'male', 0),
(10, 0, 'kuttappi', 'kuttappi', 'kuttapi@kuttappi.com', '0000-00-00', '', 0),
(11, 0, 'fdsdte', 'qe41234234', 'twetwet@sdfds.com', '0000-00-00', '', 0),
(12, 0, 'aswin', 'aswin', 'aswin@nowhere.com', '1997-01-20', 'male', 0),
(13, 0, 'reshma', 'reshma', 'asdasdasd@asdfsadf.com', '1998-02-14', 'femal', 0),
(14, 0, 'rahul', 'rahul', 'asdasdasd@asdfsadf.com', '1998-02-14', 'male', 0),
(15, 0, 'komal', 'komal', 'rosevk0408@gmail.com', '1996-03-15', 'femal', 0),
(16, 0, 'trupti', 'trupti', 'truptikavadi25@gmail.com', '2000-08-25', 'femal', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custId` (`custId`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
