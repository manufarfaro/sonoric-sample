###############################################################
# @customer Sonoric Studios                                   #
# @company Ualabi Solutions                                   #
# @dbengine MySQL                                             #
# @version 5.5.10                                             #
# @author Emanuel Farfaro Ruiz <efarfaro@ualabisolutions.com> #
# @comments Sql script for application database creation.     #
###############################################################

##Database Creation
CREATE DATABASE `sonoricstudios`

##Table Structures

#Users Table
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)

#Studio Table
CREATE TABLE `studio` (
  `id` int(10) unsigned NOT NULL,
  `about` text,
  PRIMARY KEY (`id`)
)

#Guestbook Table
CREATE TABLE `guestbook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `url_image` varchar(255) DEFAULT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)

#Insert Statements

#Studio Table
INSERT INTO `sonoricstudios`.`studio`
(`id`,`about`)
VALUES
(0,'change me');
