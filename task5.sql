-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 21, 2015 at 12:00 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `task5`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'mohamed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'mohamed@yahoo.com');
INSERT INTO `user` VALUES (2, 'taha', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'taha@yahoo.com');
INSERT INTO `user` VALUES (3, 'ahmed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'ahmed@yahoo.com');
INSERT INTO `user` VALUES (4, 'hassan', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'hassan@yahoo.com');
INSERT INTO `user` VALUES (5, 'asharf', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'ashraf@yahoo.com');
INSERT INTO `user` VALUES (6, 'mosha', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'mosha@yahoo.com');
INSERT INTO `user` VALUES (10, 'mahmoud', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'user', 'mahmoud@yahoo.com');
INSERT INTO `user` VALUES (8, 'omar', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'moderator', 'omar@yahoo.com');
INSERT INTO `user` VALUES (9, 'moussa', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'admin', 'moussa@yahoo.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `authority` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'admin', 'mohamed', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'prince4moha@yahoo.com', 'male');
INSERT INTO `users` VALUES (2, 'admin', 'hassan', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'ahmed@yahoo.com', 'male');
INSERT INTO `users` VALUES (4, 'supervisor', 'israa', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'israa@yahoo.com', 'female');
INSERT INTO `users` VALUES (5, 'admin', 'yasso', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'yasser@yahoo.com', 'male');
INSERT INTO `users` VALUES (10, 'member', 'mego', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'mego@yahoo.com', 'male');
INSERT INTO `users` VALUES (6, 'member', 'asharf', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'ashraf@yahoo.com', 'male');
INSERT INTO `users` VALUES (7, 'supervisor', 'zaher', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'zaher@zaher.com', 'male');
INSERT INTO `users` VALUES (9, 'member', 'gemy', '668d9fbf2e5d8b67a4cbe1f659dbd75f3bfef063', 'gemy@yahoo.com', 'male');
