-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2015 at 03:12 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `alfapneumatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `company` varchar(30) NOT NULL,
  `design_cat` varchar(30) NOT NULL,
  `product_code` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL default 'Untitled.txt',
  `mime` varchar(50) NOT NULL default 'text/plain',
  `size` bigint(20) unsigned NOT NULL default '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `file`
--


-- --------------------------------------------------------

--
-- Table structure for table `ingersol`
--

CREATE TABLE `ingersol` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `division` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `name` varchar(255) NOT NULL default 'Untitled.txt',
  `mime` varchar(50) NOT NULL default 'text/plain',
  `size` bigint(20) unsigned NOT NULL default '0',
  `data` mediumblob NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ingersol`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_record`
--

CREATE TABLE `user_record` (
  `id` int(100) unsigned NOT NULL auto_increment,
  `uid` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_record`
--

INSERT INTO `user_record` (`id`, `uid`, `pwd`) VALUES
(1, 'anand', 'anand@123');
