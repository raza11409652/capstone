-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 03:16 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`, `phone`) VALUES
(12054, 'mdkhalidrazakhan@gmail.com', '5ec86c64a4884d551cd6a55356482127', '9815963210');

-- --------------------------------------------------------

--
-- Table structure for table `requireddocument`
--

CREATE TABLE `requireddocument` (
  `id` int(11) NOT NULL,
  `document` varchar(100) NOT NULL,
  `ref_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requireddocument`
--

INSERT INTO `requireddocument` (`id`, `document`, `ref_id`) VALUES
(1, 'PAN Card of the Business or Applicant', 1),
(2, 'Identity and Address Proof along with Photographs', 1),
(3, 'Business Registration Document', 1),
(4, 'Address Proof for Place of Business', 1),
(5, 'Bank Account Proof', 1),
(6, 'Registration of Company', 2),
(7, 'Details of registered office of the Company', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services`) VALUES
(1, 'GST'),
(2, 'ROC Compliance');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_first_nane` varchar(128) NOT NULL,
  `user_last_nane` varchar(128) NOT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_adhar` varchar(16) NOT NULL,
  `user_pan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_email`, `user_first_nane`, `user_last_nane`, `user_phone`, `user_adhar`, `user_pan`) VALUES
(1, 'mdkhalidrazakhan@gmail.com', 'Md khalid', 'Raza ', '9835555982', '514917588198', '514917588198'),
(2, 'mdkhalidrazakhan@gmail.coml', 'Khalid', 'raza', '9835555982', '741025896300', 'PAv123654789');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id` int(11) NOT NULL,
  `adhar` text NOT NULL,
  `pan` text NOT NULL,
  `sign` text NOT NULL,
  `image` text NOT NULL,
  `ref_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`id`, `adhar`, `pan`, `sign`, `image`, `ref_id`) VALUES
(1, './upload/adhar/mdkhalidrazakhan@gmail.com741025896300.png', './upload/pan/mdkhalidrazakhan@gmail.com741025896300.png', './upload/sign/mdkhalidrazakhan@gmail.com741025896300.png', './upload/userImage/mdkhalidrazakhan@gmail.com741025896300.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `user_password` varchar(512) NOT NULL,
  `user_ref_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `user_password`, `user_ref_id`) VALUES
(1, '89e55d4f580dd044088b9a003110b37a', 1),
(2, '5ec86c64a4884d551cd6a55356482127', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` int(11) NOT NULL,
  `services` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `appointment` varchar(128) NOT NULL,
  `request_time` varchar(128) NOT NULL,
  `req_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `services`, `ref_id`, `appointment`, `request_time`, `req_time`) VALUES
(3, 1, 1, '6 December, 2017', '10', '2017-12-06 17:31:04'),
(4, 1, 1, '1 February, 2017', '10', '2017-12-06 17:31:04'),
(5, 1, 1, '9 February, 2017', '10', '2017-12-06 17:31:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requireddocument`
--
ALTER TABLE `requireddocument`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`ref_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`ref_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ref_id` (`user_ref_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_id` (`ref_id`),
  ADD KEY `services` (`services`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12055;
--
-- AUTO_INCREMENT for table `requireddocument`
--
ALTER TABLE `requireddocument`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `requireddocument`
--
ALTER TABLE `requireddocument`
  ADD CONSTRAINT `requireddocument_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `user_image`
--
ALTER TABLE `user_image`
  ADD CONSTRAINT `user_image_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_login`
--
ALTER TABLE `user_login`
  ADD CONSTRAINT `user_login_ibfk_1` FOREIGN KEY (`user_ref_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_request`
--
ALTER TABLE `user_request`
  ADD CONSTRAINT `user_request_ibfk_1` FOREIGN KEY (`ref_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `user_request_ibfk_2` FOREIGN KEY (`services`) REFERENCES `services` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
