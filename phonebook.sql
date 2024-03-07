/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : phonebook

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2013-01-31 16:50:25
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `phonebook`
-- ----------------------------
DROP TABLE IF EXISTS `phonebook`;
CREATE TABLE `phonebook` (
  `MobileNo` varchar(20) NOT NULL default '',
  `MobileOwner` varchar(100) default NULL,
  PRIMARY KEY  (`MobileNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of phonebook
-- ----------------------------
INSERT INTO `phonebook` VALUES ('098980834', 'Jose Rizal');
