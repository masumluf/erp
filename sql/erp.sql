-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2014 at 06:47 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_bill`
--

CREATE TABLE IF NOT EXISTS `accept_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_number` varchar(20) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `billingdate` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `accept_bill`
--


-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `pass`, `role`) VALUES
(1, 'masum', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `problem` varchar(500) NOT NULL,
  `tec_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cost_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cost`
--


-- --------------------------------------------------------

--
-- Table structure for table `refund`
--

CREATE TABLE IF NOT EXISTS `refund` (
  `refund_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `problem` varchar(1000) NOT NULL,
  `refund_date` varchar(20) NOT NULL,
  `manager` varchar(30) NOT NULL,
  PRIMARY KEY (`refund_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `refund`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_unique_id` varchar(20) NOT NULL DEFAULT '',
  `user_name` varchar(20) NOT NULL,
  `user_last_name` varchar(20) NOT NULL,
  `user_phone_number` int(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_zip_code` varchar(20) NOT NULL,
  `user_complain_date` varchar(20) NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_mobile_ime` int(11) NOT NULL,
  `user_mobile_buying_date` varchar(30) NOT NULL,
  `user_mobile_warrenty` varchar(10) NOT NULL,
  `user_mobile_problem` varchar(2000) NOT NULL,
  `user_mobile_password` varchar(100) NOT NULL,
  `user_mobile_os` varchar(50) NOT NULL,
  `user_bill_number` varchar(200) NOT NULL,
  `user_important_data` varchar(2000) NOT NULL,
  `cls_product` varchar(10) NOT NULL,
  `express_service` varchar(10) NOT NULL,
  `manager_name` varchar(50) NOT NULL,
  `place` varchar(20) NOT NULL,
  `acco` varchar(500) NOT NULL,
  `user_mobile_taking_from` varchar(20) NOT NULL,
  `user_mobile_other_problem` varchar(2000) NOT NULL,
  `user_accept` tinyint(4) NOT NULL,
  `finished` tinyint(4) NOT NULL,
  `amounts` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

