CREATE DATABASE IF NOT EXISTS lookhere;

USE lookhere;

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(10) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO `words` values(1,'i am the first record'),(2,'i am the second record'),(3,'no more records');
