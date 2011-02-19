-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2011 at 12:59 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE SCHEMA IF NOT EXISTS `dijiyd_mcph` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;

USE `dijiyd_mcph` ;


--
-- Database: `dijiyd_mcph`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatar`
--

CREATE TABLE IF NOT EXISTS `avatar` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `image` tinyblob COMMENT 'Contains avatars image code',
  `date_modified` varchar(45) DEFAULT NULL,
  `date_posted` varchar(45) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_avatar_user1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `avatar`
--


-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `message` mediumtext COMMENT 'Contains the txt of the message',
  `date_modified` varchar(45) DEFAULT NULL,
  `date_posted` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `image` mediumblob COMMENT 'Contains the image code',
  `date_posted` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image`
--


-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL COMMENT 'Contains item post Title or name.',
  `condition` varchar(10) NOT NULL COMMENT 'Contains item post condition wheter brand new or used',
  `status` varchar(10) NOT NULL COMMENT 'Contains item post status wheter item is sodl, for sale or for trade',
  `category` varchar(45) NOT NULL COMMENT 'Contains item post category',
  `description` mediumtext COMMENT 'Contains item post description',
  `price` varchar(45) DEFAULT NULL COMMENT 'Contains item post price range or budget',
  `date_posted` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_item_user1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `item`
--


-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `sent_to` varchar(45) NOT NULL COMMENT 'Contains usersname  where the message to be sent.',
  `from` varchar(45) NOT NULL COMMENT 'Contains usersname  where the message is from.',
  `date_sent` varchar(45) NOT NULL,
  `message` mediumtext NOT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_message_user1` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message`
--


-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE IF NOT EXISTS `meta` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(65) DEFAULT NULL,
  `user_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`,`user_id`),
  KEY `fk_meta_user1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `first_name`, `last_name`, `company`, `phone`, `location`, `user_id`) VALUES
(1, 'Admin', 'istrator', 'EAC', '1234567', 'Morayta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` char(16) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_group` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_on`, `last_login`, `active`, `group_id`) VALUES
(1, '127.0.0.1', 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'marketcloudph@gmail.com', '', NULL, '9d029802e28cd9c768e8e62277c0df49ec65c48c', 1268889823, 1297687782, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avatar`
--
ALTER TABLE `avatar`
  ADD CONSTRAINT `fk_avatar_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `meta`
--
ALTER TABLE `meta`
  ADD CONSTRAINT `meta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);