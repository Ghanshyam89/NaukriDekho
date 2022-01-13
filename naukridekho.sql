-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 05:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naukridekho`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(5) NOT NULL,
  `jobtitle` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `jobduration` varchar(20) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `jobdetail` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `posted_by` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `jobtitle`, `address`, `profession`, `jobduration`, `contactNo`, `jobdetail`, `budget`, `posted_by`) VALUES
(1, 'Plumber needed ', 'Indraprasth Bhopal', 'Plumber', '1-2 Days', '2147483647', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ', '500', '1'),
(3, 'carpointer', 'bhopal', 'worker', '1-2 Days', '657485858', 'expert', '50000', '2'),
(4, 'Plumber needed ', 'bhopal', 'Plumber', '1-2 Days', '545454545', 'hgjg', '500', '3'),
(5, 'carpointer', 'bhopal', 'Plumber', '1-2 Days', '8989898989', 'saa', '500', '3'),
(6, 'Plumber needed ', 'bhopal', 'Plumber', '2 Days', '5454545787', 'aa', '5454', '3'),
(8, 'Plumber needed ', 'saket nagar bhopal', 'Plumber', '8hr', '9561213123', 'plumber is needed for house', '800', '3');

-- --------------------------------------------------------

--
-- Table structure for table `jobapplication`
--

CREATE TABLE `jobapplication` (
  `u_id` int(5) NOT NULL,
  `job_id` int(5) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `owndetail` varchar(100) NOT NULL,
  `phoneNo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapplication`
--

INSERT INTO `jobapplication` (`u_id`, `job_id`, `firstname`, `lastname`, `email`, `owndetail`, `phoneNo`) VALUES
(0, 3, 'Ankit', 'Prajapati', 'ag1@gmail.com', 'yhg', '7412589632'),
(0, 0, 'Aman', 'Dhatarwal', 'aman112@gmail.com', 'plumber ', ''),
(0, 3, 'Aman', 'Kumar', 'aman12@gmail.com', 'i,m aman kumar a carpainter looking for job', '9874563210'),
(0, 1, 'Ghanshyam', 'Prajapati', 'fgg12@gmail.com', 'wkshnj', ''),
(0, 0, 'Ghanshyam', 'Prajapati', 'gh12@gmail.com', 'car', ''),
(0, 0, 'Manav', 'singh', 'manav12@gmail.com', 'electrician', ''),
(0, 0, 'Mohit', 'modi', 'mohit@1245@gmail.com', 'Carpainter', ''),
(0, 0, 'Sunil', 'Shah', 'sunil898@gmail.com', 'carpainter', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(5) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `job_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `firstname`, `lastname`, `dob`, `gender`, `email`, `phonenumber`, `usertype`, `password`, `job_id`) VALUES
(1, 'Ghanshyam', 'Prajapati', '0000-00-00', 'op', 'vishwaka13@gmail.com', '2147483647', '2', 'Gg@123', 1),
(4, 'Ghanshyam', 'Prajapati', '0000-00-00', 'op', 'gfhansh@gmail.com', '2147483647', '2', 'Gg@123', 2),
(5, 'Ghanshyam', 'Prajapati', '12/09/2001', 'op', 'jhgjhjhgj@gmail.com', '2147483647', '2', 'Gg@123', 3),
(6, 'Ankit', 'Vishwakarma', '12/09/2001', 'M', 'kjfhksjdhgfdsj@gmail.com', '2147483647', '3', '48571e88282961c3d60b', 1),
(7, 'Aiman', 'Asif', '12/09/2004', 'F', 'aiamtopeer123@gmail.com', '9988774455', '2', '6c25b7564155f9d6ddd9', 3),
(8, 'Geeta', 'jali', '12/09/2001', 'F', 'geeta12@gmail.com', '1478523698', 'Job-seeker', '241ec4262ebd5fffed95', 2),
(9, 'Ankit', 'Vishwakarma', '23/03/2001', 'M', 'vishwaka1234@gmail.com', '9874563211', 'Job-provider', 'df6ba1fc6e6aaefcbcca', 4),
(10, 'Ankit', 'Vishwakarma', '12/09/2001', 'M', 'ankit123@gmail.com', '9874466314', 'Job-provider', '0f18f475614a5a069b94', 2),
(11, 'Ankit', 'Vishwakarma', '12/09/2001', 'M', 'ankit1223@gmail.com', '9874466314', 'Job-provider', '35708787ac959f87fec7', 3),
(12, 'Ghanshyam', 'Prajapati', '02/09/2000', 'M', 'ghan@gmail.com', '7878878777', 'Job-seeker', '48571e88282961c3d60b', 0),
(13, 'Ghanshyam', 'Prajapati', '12/09/2001', 'op', 'jhgjhjhgj@gmail.com', '2147483647', '2', 'Gg@123', 1),
(14, 'Ankit', 'akas', '12/09/2001', 'M', 'ak122@gmail.com', '4563217895', 'Job-provider', '00bb3b2ac8da5f8a2393', 0),
(15, 'Aman', 'Kumar', '01/01/2000', 'M', 'aman12@gmail.com', '9874563210', 'Job-seeker', 'a73d8ebf5b2ae1c756af', 0),
(16, 'Amit', 'Singh', '01/02/2001', 'M', 'amit12@gmail.com', '9632587410', 'Job-provider', 'c3cad61fe4269ced88eb', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`),
  ADD UNIQUE KEY `job_id` (`job_id`),
  ADD UNIQUE KEY `contactNo` (`contactNo`);

--
-- Indexes for table `jobapplication`
--
ALTER TABLE `jobapplication`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
