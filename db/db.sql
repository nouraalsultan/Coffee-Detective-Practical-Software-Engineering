-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2022 at 04:24 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cafe_rating`
--
CREATE DATABASE IF NOT EXISTS `cafe_rating` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cafe_rating`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'talal', 'sami', 'talal', 'talal'),
(2, 'mera', 'samer', 'mera', 'mera'),
(3, 'tamer', 'tysser', 'tamer', 'tamer'),
(4, 'sara', 'kamal', 'sara', 'sara');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_shop`
--

CREATE TABLE `coffee_shop` (
  `coffee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'newOpen',
  `allow_notify` int(11) NOT NULL DEFAULT '1',
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coffee_shop`
--

INSERT INTO `coffee_shop` (`coffee_id`, `name`, `image`, `address`, `type`, `allow_notify`, `admin_id`) VALUES
(1, 'Cafe Bateel', 'coffees/10086543717312-coffeeImg-batel outdoor.jpeg', 'KSA', 'New Open', 1, 4),
(2, 'Chorisia Lounge', 'coffees/178145772205440-coffeeImg-Chorisia Lounge.jpeg', 'KSA', 'In Door', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `review_date` date NOT NULL,
  `coffee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `username`, `review`, `review_date`, `coffee_id`) VALUES
(1, 'sara ali', 'The school is required to notify parents if their children fail', '2022-04-06', 2),
(2, 'hatem', 'All of these box-shadow were copied using', '2022-04-12', 2),
(3, 'uber', 'OH... is Goooood', '2022-04-21', 2),
(4, 'uuuu', 'hhhhh', '2022-04-27', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `coffee_shop`
--
ALTER TABLE `coffee_shop`
  ADD PRIMARY KEY (`coffee_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coffee_shop`
--
ALTER TABLE `coffee_shop`
  MODIFY `coffee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;