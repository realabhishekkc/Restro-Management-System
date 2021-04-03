-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 04:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restro_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_contact` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_password`, `a_email`, `a_contact`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 9861364452),
(2, 'sarak', 'sarak', 'sarak@gmail.com', 9864856693),
(3, 'bishesh', 'bishesh', 'bishesh@gmail.com', 9859486754);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_subject` varchar(50) NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_message`) VALUES
(1, 'Bishesh Panday', 'bishesh1@gmail.com', 'Delivery Enquiry', 'How long will it take to deliver one of your food?'),
(2, 'Karma Lama', 'karma@gmail.com', 'About Location', 'Where is your restaurant located at?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `u_id`, `p_id`, `date`) VALUES
(1, 1, 1, '2020-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `p_image`, `p_description`, `p_price`) VALUES
(1, 'Chicken Curry', '82601441.jpg', 'Maecenas interdum ullamcorper tincidunt. Donec ultrices velit non lacus tincidunt tincidunt.', 350),
(2, 'Chicken Chilly', '9874451.jpg', 'Maecenas interdum ullamcorper tincidunt. Donec ultrices velit non lacus tincidunt tincidunt.', 240),
(3, 'Chicken Momo', '56402347.jpg', 'Maecenas interdum ullamcorper tincidunt. Donec ultrices velit non lacus tincidunt tincidunt.', 120),
(4, 'Chicken Pizza', '10469020.jpg', 'Maecenas interdum ullamcorper tincidunt. Donec ultrices velit non lacus tincidunt tincidunt.', 380);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register_user`
--

CREATE TABLE `tbl_register_user` (
  `u_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Other','') NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register_user`
--

INSERT INTO `tbl_register_user` (`u_id`, `fname`, `lname`, `e_mail`, `phone`, `address`, `city`, `gender`, `password`, `confirm_password`) VALUES
(1, 'Sarak', 'Dahal', 'sarak@gmail.com', 9864856693, 'Mahadevsthan', 'Koteshwor', 'Male', 'sarak123', 'sarak123');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_username` (`a_username`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);


--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_register_user`
--
ALTER TABLE `tbl_register_user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_product` (`p_id`),
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `tbl_register_user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
