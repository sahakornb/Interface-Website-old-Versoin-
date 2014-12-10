-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `channel`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `channel`
-- 

CREATE TABLE `channel` (
  `channel` varchar(3) NOT NULL,
  `Userid` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- dump ตาราง `channel`
-- 

INSERT INTO `channel` VALUES ('c17', '', '2014-11-20', '14:06:43');
INSERT INTO `channel` VALUES ('c14', '', '2014-11-20', '14:06:40');
