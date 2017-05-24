-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 11:45 AM
-- Server version: 5.6.13
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newlibweb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `uspSelMessageCode`(IN `message_code_id` INT)
    READS SQL DATA
BEGIN
	SELECT
    	M.id,
        M.message,
        M.message_code_type
    FROM
    	`message_code` M
    WHERE
    	CASE WHEN message_code_id = 0
        THEN 0
        ELSE M.id
        END = message_code_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `uspSelParameter`(IN `parameter_id` INT)
    READS SQL DATA
BEGIN
	SELECT
    	P.id,
        P.parameter_name,
        P.parameter_type,
        P.parameter_value
    FROM
    	`parameter` P
    WHERE
    	CASE WHEN parameter_id = 0
        THEN 0
        ELSE P.id
        END = parameter_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE IF NOT EXISTS `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `ci_session`
--

TRUNCATE TABLE `ci_session`;
-- --------------------------------------------------------

--
-- Table structure for table `message_code`
--

CREATE TABLE IF NOT EXISTS `message_code` (
  `id` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `message_type` enum('INFO','CONFIRMATION','WARNING','ERROR') NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(150) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `message_code`
--

TRUNCATE TABLE `message_code`;
-- --------------------------------------------------------

--
-- Table structure for table `parameter`
--

CREATE TABLE IF NOT EXISTS `parameter` (
  `id` int(11) NOT NULL,
  `parameter_name` varchar(50) NOT NULL,
  `parameter_type` enum('STRING','DATE','INTEGER','') NOT NULL,
  `parameter_value` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(150) NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `parameter`
--

TRUNCATE TABLE `parameter`;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
