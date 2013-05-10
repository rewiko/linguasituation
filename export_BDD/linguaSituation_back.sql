-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 23 Septembre 2012 à 08:26
-- Version du serveur: 5.5.24
-- Version de PHP: 5.4.4-7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `linguaSituation`
--

-- --------------------------------------------------------

--
-- Structure de la table `bf_activities`
--

CREATE TABLE IF NOT EXISTS `bf_activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=232 ;

--
-- Contenu de la table `bf_activities`
--

INSERT INTO `bf_activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-27 16:28:25', 0),
(2, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-27 16:28:25', 0),
(3, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-27 16:30:14', 0),
(4, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-27 16:30:34', 0),
(5, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-27 16:42:01', 0),
(6, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 06:53:01', 0),
(7, 1, 'deleted user: rewiko', 'users', '2012-08-28 06:55:25', 0),
(8, 1, 'deleted user: rewiko', 'users', '2012-08-28 06:55:25', 0),
(9, 1, 'App settings saved from: 127.0.0.1', 'core', '2012-08-28 07:01:19', 0),
(10, 1, 'App settings saved from: 127.0.0.1', 'core', '2012-08-28 07:02:10', 0),
(11, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 08:24:15', 0),
(12, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 08:24:29', 0),
(13, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 08:31:19', 0),
(14, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 08:31:28', 0),
(15, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 10:38:02', 0),
(16, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 10:43:54', 0),
(17, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 10:44:04', 0),
(18, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 10:46:49', 0),
(19, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 10:47:56', 0),
(20, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 10:48:58', 0),
(21, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 10:49:09', 0),
(22, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 10:55:11', 0),
(23, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 11:12:30', 0),
(24, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 11:12:56', 0),
(25, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 11:13:02', 0),
(26, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 11:16:49', 0),
(27, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 11:16:59', 0),
(28, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 11:28:12', 0),
(29, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 11:28:18', 0),
(30, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 15:10:42', 0),
(31, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-28 15:11:02', 0),
(32, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-28 15:11:07', 0),
(33, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-29 12:23:00', 0),
(34, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-29 12:23:31', 0),
(35, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-29 12:50:31', 0),
(36, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-30 13:41:30', 0),
(37, 1, 'updated their profile: rewiko', 'users', '2012-08-30 13:42:03', 0),
(38, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-30 14:53:25', 0),
(39, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-31 07:27:33', 0),
(40, 1, 'logged out from: 127.0.0.1', 'users', '2012-08-31 07:28:26', 0),
(41, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-31 08:09:37', 0),
(42, 1, 'logged in from: 127.0.0.1', 'users', '2012-08-31 16:14:16', 0),
(43, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-02 15:19:28', 0),
(44, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-02 15:20:21', 0),
(45, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-02 15:21:09', 0),
(46, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-03 13:31:07', 0),
(47, 1, 'Created Module: test : 127.0.0.1', 'modulebuilder', '2012-09-03 13:37:08', 0),
(48, 1, 'Deleted Module: test : 127.0.0.1', 'modulebuilder', '2012-09-03 13:42:22', 0),
(49, 1, 'Created Module: main : 127.0.0.1', 'modulebuilder', '2012-09-03 13:42:30', 0),
(50, 1, 'Created Module: main : 127.0.0.1', 'modulebuilder', '2012-09-03 13:42:44', 0),
(51, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-03 14:30:18', 0),
(52, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-03 20:01:01', 0),
(53, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-03 20:48:25', 0),
(54, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-03 20:49:50', 0),
(55, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-03 20:51:15', 0),
(56, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-03 20:51:47', 0),
(57, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 09:25:26', 0),
(58, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:25:58', 0),
(59, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 09:29:20', 0),
(60, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 09:32:09', 0),
(61, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-04 09:32:19', 0),
(62, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-04 09:37:22', 0),
(63, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-04 09:37:32', 0),
(64, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:38:11', 0),
(65, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:40:28', 0),
(66, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:42:04', 0),
(67, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:42:21', 0),
(68, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:44:54', 0),
(69, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:45:31', 0),
(70, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:46:01', 0),
(71, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:47:00', 0),
(72, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:47:18', 0),
(73, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:47:28', 0),
(74, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:47:33', 0),
(75, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:47:33', 0),
(76, 1, 'Migrate Type: app_ Uninstalled Version: 4 from: 127.0.0.1', 'migrations', '2012-09-04 09:48:08', 0),
(77, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-04 09:48:27', 0),
(78, 1, 'Migrate Type: app_ Uninstalled Version: 4 from: 127.0.0.1', 'migrations', '2012-09-04 09:49:02', 0),
(79, 1, 'Migrate Type: app_ Uninstalled Version: 4 from: 127.0.0.1', 'migrations', '2012-09-04 09:49:06', 0),
(80, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 09:50:11', 0),
(81, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 09:51:13', 0),
(82, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 09:51:41', 0),
(83, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 09:51:57', 0),
(84, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 09:53:58', 0),
(85, 1, 'Migrate Type: app_ to Version: 4 from: 127.0.0.1', 'migrations', '2012-09-04 09:55:04', 0),
(86, 2, 'registered a new account.', 'users', '2012-09-04 10:49:44', 0),
(87, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 10:50:06', 0),
(88, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 10:50:23', 0),
(89, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 10:50:31', 0),
(90, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 10:58:39', 0),
(91, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 10:59:25', 0),
(92, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 11:03:54', 0),
(93, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 11:04:12', 0),
(94, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 13:10:12', 0),
(95, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 13:14:13', 0),
(96, 1, 'App settings saved from: 127.0.0.1', 'core', '2012-09-04 13:17:58', 0),
(97, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 13:20:13', 0),
(98, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 13:20:43', 0),
(99, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 16:51:36', 0),
(100, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 16:51:54', 0),
(101, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 16:58:48', 0),
(102, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 16:59:51', 0),
(103, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 16:59:54', 0),
(104, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-04 16:59:59', 0),
(105, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:00:24', 0),
(106, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:00:49', 0),
(107, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:00:56', 0),
(108, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:01:00', 0),
(109, 1, 'Migrate Type: app_ to Version: 6 from: 127.0.0.1', 'migrations', '2012-09-04 17:01:31', 0),
(110, 1, 'Migrate Type: app_ to Version: 6 from: 127.0.0.1', 'migrations', '2012-09-04 17:02:37', 0),
(111, 1, 'Migrate Type: app_ to Version: 6 from: 127.0.0.1', 'migrations', '2012-09-04 17:02:49', 0),
(112, 1, 'Migrate Type: app_ to Version: 7 from: 127.0.0.1', 'migrations', '2012-09-04 17:04:39', 0),
(113, 1, 'Migrate Type: app_ to Version: 7 from: 127.0.0.1', 'migrations', '2012-09-04 17:04:41', 0),
(114, 1, 'Migrate Type: app_ to Version: 7 from: 127.0.0.1', 'migrations', '2012-09-04 17:04:43', 0),
(115, 1, 'Migrate Type: app_ to Version: 7 from: 127.0.0.1', 'migrations', '2012-09-04 17:05:01', 0),
(116, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:05:32', 0),
(117, 1, 'Migrate Type: app_ to Version: 1 from: 127.0.0.1', 'migrations', '2012-09-04 17:06:24', 0),
(118, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:08:33', 0),
(119, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:08:40', 0),
(120, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:09:00', 0),
(121, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:09:14', 0),
(122, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:31:14', 0),
(123, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:35:09', 0),
(124, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:38:35', 0),
(125, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:43:24', 0),
(126, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:45:24', 0),
(127, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:45:58', 0),
(128, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:46:34', 0),
(129, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:46:50', 0),
(130, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:46:55', 0),
(131, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:47:07', 0),
(132, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:52:45', 0),
(133, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:52:53', 0),
(134, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-04 17:57:23', 0),
(135, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-04 17:57:30', 0),
(136, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 08:43:06', 0),
(137, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 09:01:44', 0),
(138, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-05 09:52:35', 0),
(139, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-05 09:52:41', 0),
(140, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-05 09:52:46', 0),
(141, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 09:52:53', 0),
(142, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-05 10:46:25', 0),
(143, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-05 10:46:32', 0),
(144, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-05 10:46:37', 0),
(145, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 10:46:52', 0),
(146, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 13:16:04', 0),
(147, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 13:42:45', 0),
(148, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 16:30:50', 0),
(149, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-05 21:23:13', 0),
(150, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-06 09:44:13', 0),
(151, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-06 15:34:58', 0),
(152, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-08 08:55:26', 0),
(153, 1, 'logged in from: 111.250.232.143', 'users', '2012-09-09 12:04:31', 0),
(154, 1, 'logged out from: 216.244.138.139', 'users', '2012-09-09 12:24:52', 0),
(155, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-09 15:08:29', 0),
(156, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-16 17:53:38', 0),
(157, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-16 17:54:45', 0),
(158, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-17 06:00:34', 0),
(159, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-17 16:42:53', 0),
(160, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-17 17:10:04', 0),
(161, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-17 17:10:14', 0),
(162, 1, 'Migrate Type: app_ to Version: 2 from: 127.0.0.1', 'migrations', '2012-09-17 17:10:21', 0),
(163, 1, 'Migrate Type: app_ to Version: 3 from: 127.0.0.1', 'migrations', '2012-09-17 17:29:29', 0),
(164, 1, 'Migrate Type: app_ to Version: 4 from: 127.0.0.1', 'migrations', '2012-09-17 17:29:34', 0),
(165, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-17 17:34:53', 0),
(166, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-17 17:35:56', 0),
(167, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-17 19:32:38', 0),
(168, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-17 19:33:37', 0),
(169, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-17 19:36:44', 0),
(170, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-18 05:57:32', 0),
(171, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-18 16:46:34', 0),
(172, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-18 17:10:43', 0),
(173, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-18 17:11:01', 0),
(174, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-18 17:13:50', 0),
(175, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-18 18:52:42', 0),
(176, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-19 17:20:39', 0),
(177, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 06:01:30', 0),
(178, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 06:03:49', 0),
(179, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 15:52:50', 0),
(180, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 15:54:52', 0),
(181, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 15:56:24', 0),
(182, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 15:57:32', 0),
(183, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 19:20:18', 0),
(184, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 19:25:17', 0),
(185, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 19:40:22', 0),
(186, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 19:41:20', 0),
(187, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 19:42:10', 0),
(188, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 19:42:23', 0),
(189, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 19:43:41', 0),
(190, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 19:46:52', 0),
(191, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 20:05:02', 0),
(192, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-20 20:24:13', 0),
(193, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-20 20:36:38', 0),
(194, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-21 05:08:03', 0),
(195, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-21 16:35:05', 0),
(196, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:37:15', 0),
(197, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:39:07', 0),
(198, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:39:59', 0),
(199, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:40:44', 0),
(200, 1, 'Migrate Type: app_ to Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:41:23', 0),
(201, 1, 'Migrate Type: app_ to Version: 6 from: 127.0.0.1', 'migrations', '2012-09-21 16:42:04', 0),
(202, 1, 'Migrate Type: app_ Uninstalled Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:43:44', 0),
(203, 1, 'Migrate Type: app_ Uninstalled Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:44:13', 0),
(204, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-21 16:44:26', 0),
(205, 1, 'Migrate Type: app_ Uninstalled Version: 5 from: 127.0.0.1', 'migrations', '2012-09-21 16:44:31', 0),
(206, 1, 'Migrate Type: app_ to Version: 15 from: 127.0.0.1', 'migrations', '2012-09-21 16:45:28', 0),
(207, 1, 'Migrate Type: app_ to Version: 15 from: 127.0.0.1', 'migrations', '2012-09-21 16:46:13', 0),
(208, 1, 'Migrate Type: app_ to Version: 15 from: 127.0.0.1', 'migrations', '2012-09-21 16:46:52', 0),
(209, 1, 'Migrate Type: app_ to Version: 16 from: 127.0.0.1', 'migrations', '2012-09-21 16:47:33', 0),
(210, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-21 19:48:23', 0),
(211, 1, 'Migrate Type: app_ to Version: 17 from: 127.0.0.1', 'migrations', '2012-09-21 19:50:06', 0),
(212, 1, 'Migrate Type: app_ to Version: 17 from: 127.0.0.1', 'migrations', '2012-09-21 19:50:52', 0),
(213, 1, 'Migrate Type: app_ to Version: 7 from: 127.0.0.1', 'migrations', '2012-09-21 19:52:49', 0),
(214, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-22 16:29:50', 0),
(215, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-22 16:30:08', 0),
(216, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-22 16:30:33', 0),
(217, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-22 16:58:24', 0),
(218, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-22 16:58:41', 0),
(219, 1, 'logged out from: 127.0.0.1', 'users', '2012-09-22 18:38:41', 0),
(220, 2, 'logged in from: 127.0.0.1', 'users', '2012-09-22 18:38:58', 0),
(221, 2, 'logged out from: 127.0.0.1', 'users', '2012-09-22 19:09:12', 0),
(222, 1, 'logged in from: 127.0.0.1', 'users', '2012-09-22 19:09:42', 0),
(223, 1, 'Migrate Type: app_ Uninstalled Version: 2 from: 127.0.0.1', 'migrations', '2012-09-22 19:10:29', 0),
(224, 1, 'Migrate Type: app_ Uninstalled Version: 1 from: 127.0.0.1', 'migrations', '2012-09-22 19:10:40', 0),
(225, 1, 'Migrate Type: app_ Uninstalled Version: 2 from: 127.0.0.1', 'migrations', '2012-09-22 19:10:48', 0),
(226, 1, 'Migrate Type: app_ to Version: 12 from: 127.0.0.1', 'migrations', '2012-09-22 19:11:36', 0),
(227, 1, 'Migrate Type: app_ to Version: 14 from: 127.0.0.1', 'migrations', '2012-09-22 19:11:51', 0),
(228, 1, 'Migrate Type: app_ to Version: 12 from: 127.0.0.1', 'migrations', '2012-09-22 19:12:59', 0),
(229, 1, 'Migrate Type: app_ to Version: 12 from: 127.0.0.1', 'migrations', '2012-09-22 19:13:40', 0),
(230, 1, 'Migrate Type: app_ to Version: 28 from: 127.0.0.1', 'migrations', '2012-09-22 19:14:50', 0),
(231, 1, 'Migrate Type: app_ to Version: 33 from: 127.0.0.1', 'migrations', '2012-09-22 19:15:01', 0);

-- --------------------------------------------------------

--
-- Structure de la table `bf_email_queue`
--

CREATE TABLE IF NOT EXISTS `bf_email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(128) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `bf_lang`
--

CREATE TABLE IF NOT EXISTS `bf_lang` (
  `id_lang` bigint(20) unsigned NOT NULL,
  `libelle_lang` varchar(50) NOT NULL,
  PRIMARY KEY (`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bf_link_words_playlists`
--

CREATE TABLE IF NOT EXISTS `bf_link_words_playlists` (
  `id_words_fk` bigint(20) unsigned NOT NULL,
  `id_playlists_fk` bigint(20) unsigned NOT NULL,
  KEY `link_word_playlits_id_words_fk` (`id_words_fk`),
  KEY `link_word_playlits_id_playlists_fk` (`id_playlists_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bf_login_attempts`
--

CREATE TABLE IF NOT EXISTS `bf_login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) NOT NULL,
  `login` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `bf_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `bf_permissions`
--

INSERT INTO `bf_permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(1, 'Site.Signin.Allow', 'Allow users to login to the site', 'active'),
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Roles.Delete', 'Allow users to delete user Roles', 'active'),
(19, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(20, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(21, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(22, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(24, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(25, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(27, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(28, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(29, 'Activities.User.View', 'To view the user activity logs', 'active'),
(30, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(31, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(32, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(33, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(34, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(35, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(36, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(37, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(38, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(39, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(40, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(41, 'Bonfire.Modulebuilder.View', 'To view the Modulebuilder menu.', 'active'),
(42, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(43, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(44, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(45, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(46, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active'),
(47, 'Bonfire.Update.Manage', 'To manage the Bonfire Update.', 'active'),
(48, 'Bonfire.Update.View', 'To view the Developer Update menu.', 'active'),
(49, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(50, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(67, 'Main.Content.View', '', 'active'),
(68, 'Main.Content.Create', '', 'active'),
(69, 'Main.Content.Edit', '', 'active'),
(70, 'Main.Content.Delete', '', 'active'),
(71, 'Main.Reports.View', '', 'active'),
(72, 'Main.Reports.Create', '', 'active'),
(73, 'Main.Reports.Edit', '', 'active'),
(74, 'Main.Reports.Delete', '', 'active'),
(75, 'Main.Settings.View', '', 'active'),
(76, 'Main.Settings.Create', '', 'active'),
(77, 'Main.Settings.Edit', '', 'active'),
(78, 'Main.Settings.Delete', '', 'active'),
(79, 'Main.Developer.View', '', 'active'),
(80, 'Main.Developer.Create', '', 'active'),
(81, 'Main.Developer.Edit', '', 'active'),
(82, 'Main.Developer.Delete', '', 'active');

-- --------------------------------------------------------

--
-- Structure de la table `bf_playlists`
--

CREATE TABLE IF NOT EXISTS `bf_playlists` (
  `id_playlists` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_playlists` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `id_users` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_playlists`),
  KEY `u_playlists` (`id_users`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `bf_playlists`
--

INSERT INTO `bf_playlists` (`id_playlists`, `libelle_playlists`, `slug`, `created_on`, `modified_on`, `deleted`, `id_users`) VALUES
(2, 'first_house', 'first_house', '2012-09-18 19:57:55', NULL, 0, 1),
(3, 'second_house', 'second_house', '2012-09-18 19:58:08', NULL, 0, 1),
(4, 'third_house', 'third_house', '2012-09-18 19:58:52', NULL, 0, 1),
(5, 'four_limit', 'four_limit', '2012-09-19 05:40:06', NULL, 0, 1),
(6, 'five_limit', 'five_limit', '2012-09-19 05:40:25', NULL, 0, 1),
(7, 'six_limit', 'six_limit', '2012-09-19 05:40:43', NULL, 0, 1),
(8, 'fe', 'fe', '2012-09-21 05:08:24', NULL, 0, 1),
(9, 'de', 'de', '2012-09-21 05:08:36', NULL, 0, 1),
(12, 'tet', 'tet', '2012-09-22 18:41:20', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `bf_roles`
--

CREATE TABLE IF NOT EXISTS `bf_roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `deleted` int(1) NOT NULL DEFAULT '0',
  `default_context` varchar(255) NOT NULL DEFAULT 'content',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `bf_roles`
--

INSERT INTO `bf_roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `deleted`, `default_context`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '', 0, 'content'),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 0, 'content'),
(4, 'User', 'This is the default user with access to login.', 1, 0, '', 0, 'content'),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 0, 'content');

-- --------------------------------------------------------

--
-- Structure de la table `bf_role_permissions`
--

CREATE TABLE IF NOT EXISTS `bf_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bf_role_permissions`
--

INSERT INTO `bf_role_permissions` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 24),
(1, 25),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(2, 1),
(2, 2),
(2, 3),
(4, 1),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 49);

-- --------------------------------------------------------

--
-- Structure de la table `bf_schema_version`
--

CREATE TABLE IF NOT EXISTS `bf_schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bf_schema_version`
--

INSERT INTO `bf_schema_version` (`type`, `version`) VALUES
('app_', 7),
('core', 33),
('main_', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bf_sessions`
--

CREATE TABLE IF NOT EXISTS `bf_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `bf_settings`
--

CREATE TABLE IF NOT EXISTS `bf_settings` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `unique - name` (`name`),
  KEY `index - name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `bf_settings`
--

INSERT INTO `bf_settings` (`name`, `module`, `value`) VALUES
('auth.allow_name_change', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.do_login_redirect', 'core', '1'),
('auth.login_type', 'core', 'both'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_force_mixed_case', 'core', '0'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_min_length', 'core', '8'),
('auth.password_show_labels', 'core', '0'),
('auth.remember_length', 'core', '2592000'),
('auth.use_extended_profile', 'core', '0'),
('auth.use_usernames', 'core', '1'),
('auth.user_activation_method', 'core', '1'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('mailtype', 'email', 'html'),
('protocol', 'email', 'mail'),
('sender_email', 'email', 'anthony.comtois@gmail.com'),
('site.languages', 'core', 'a:1:{i:0;s:6:"french";}'),
('site.list_limit', 'core', '25'),
('site.show_front_profiler', 'core', '1'),
('site.show_profiler', 'core', '1'),
('site.status', 'core', '1'),
('site.system_email', 'core', 'anthony.comtois@gmail.com'),
('site.title', 'core', 'LinguaSituation'),
('smtp_host', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('smtp_user', 'email', ''),
('updates.bleeding_edge', 'core', '1'),
('updates.do_check', 'core', '1');

-- --------------------------------------------------------

--
-- Structure de la table `bf_users`
--

CREATE TABLE IF NOT EXISTS `bf_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` varchar(40) NOT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `salt` varchar(7) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(40) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `reset_by` int(10) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` char(4) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `bf_users`
--

INSERT INTO `bf_users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `salt`, `last_login`, `last_ip`, `created_on`, `deleted`, `banned`, `ban_message`, `reset_by`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`) VALUES
(1, 1, 'anthony.comtois@gmail.com', 'rewiko', 'b472914eb7d82cb2ba6ab40b17772c802de569bf', NULL, 'IgVHNQT', '2012-09-22 19:09:42', '127.0.0.1', '0000-00-00 00:00:00', 0, 0, NULL, NULL, '', NULL, 'UM6', 'english', 1, ''),
(2, 4, 'anthony.comtois@hotmail.fr', 'user', 'ffbfbd46842a7be622fdfcd4d350cbe7065d14c1', NULL, 'GswCUBZ', '2012-09-22 18:38:58', '127.0.0.1', '2012-09-04 10:49:43', 0, 0, NULL, NULL, 'user', NULL, 'UTC', 'english', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `bf_user_cookies`
--

CREATE TABLE IF NOT EXISTS `bf_user_cookies` (
  `user_id` bigint(20) NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bf_user_cookies`
--

INSERT INTO `bf_user_cookies` (`user_id`, `token`, `created_on`) VALUES
(1, 'nz1CFAzcxJQ9UBhKfc1I3wh6zVlTZykGUiGXC7Cxk9aRtFdyyaD6Xt6cq3doD3am6XZ2WEhyvXyJBTUl2YWZE7ftDioU4jIYg4MLRvPn8nSrsfr0mwmN5rDUrMylVXBR', '2012-08-30 13:41:30');

-- --------------------------------------------------------

--
-- Structure de la table `bf_user_meta`
--

CREATE TABLE IF NOT EXISTS `bf_user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `bf_user_meta`
--

INSERT INTO `bf_user_meta` (`meta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'state', 'FL'),
(2, 1, 'country', 'FR'),
(3, 2, 'street_name', 'France'),
(4, 2, 'state', 'FL'),
(5, 2, 'country', 'US');

-- --------------------------------------------------------

--
-- Structure de la table `bf_words`
--

CREATE TABLE IF NOT EXISTS `bf_words` (
  `id_words` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `libelle_words` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `id_users` bigint(20) unsigned NOT NULL,
  `id_words_link` bigint(20) unsigned NOT NULL,
  `id_lang_fk` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id_words`),
  KEY `u_words` (`id_users`),
  KEY `link_word_fk` (`id_words_link`),
  KEY `link_lang_fk` (`id_lang_fk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `bf_link_words_playlists`
--
ALTER TABLE `bf_link_words_playlists`
  ADD CONSTRAINT `link_word_playlits_id_playlists_fk` FOREIGN KEY (`id_playlists_fk`) REFERENCES `bf_playlists` (`id_playlists`) ON DELETE CASCADE,
  ADD CONSTRAINT `link_word_playlits_id_words_fk` FOREIGN KEY (`id_words_fk`) REFERENCES `bf_words` (`id_words`) ON DELETE CASCADE;

--
-- Contraintes pour la table `bf_playlists`
--
ALTER TABLE `bf_playlists`
  ADD CONSTRAINT `u_playlists` FOREIGN KEY (`id_users`) REFERENCES `bf_users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `bf_words`
--
ALTER TABLE `bf_words`
  ADD CONSTRAINT `link_lang_fk` FOREIGN KEY (`id_lang_fk`) REFERENCES `bf_lang` (`id_lang`) ON DELETE CASCADE,
  ADD CONSTRAINT `link_word_fk` FOREIGN KEY (`id_words_link`) REFERENCES `bf_words` (`id_words`) ON DELETE CASCADE,
  ADD CONSTRAINT `u_words` FOREIGN KEY (`id_users`) REFERENCES `bf_users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
