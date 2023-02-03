-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2023 at 07:48 PM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u921362050_jomer_vims`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto_mail_history`
--

CREATE TABLE `auto_mail_history` (
  `id` int(11) NOT NULL,
  `promo_id` int(50) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto_mail_history`
--

INSERT INTO `auto_mail_history` (`id`, `promo_id`, `code`, `status`, `date_time`) VALUES
(1, 2, 8814, 'PAID', '2022-12-04 01:34:55'),
(2, 2, 9323, 'VERIFIED', '2022-12-04 01:34:55'),
(3, 2, 7829, 'CANCELLED', '2022-12-04 01:34:55'),
(4, 2, 7235, 'PAID', '2022-12-04 01:34:55'),
(5, 2, 7627, 'PAID', '2022-12-04 01:34:55'),
(6, 2, 6833, 'PAID', '2022-12-04 01:34:55'),
(7, 2, 8014, 'PAID', '2022-12-04 01:34:55'),
(8, 2, 7821, 'PAID', '2022-12-04 01:34:55'),
(9, 2, 9657, 'VERIFIED', '2022-12-04 01:34:55'),
(10, 3, 8903, 'VERIFIED', '2022-12-04 01:34:55'),
(11, 2, 9687, 'PAID', '2022-12-04 01:34:55'),
(12, 3, 9406, 'UNPAID', '2022-12-04 01:34:55'),
(13, 3, 8410, 'UNPAID', '2022-12-04 01:34:55'),
(14, 3, 7335, 'PAID', '2022-12-04 01:34:55'),
(15, 3, 8076, 'UNPAID', '2022-12-04 01:34:55'),
(16, 3, 7521, 'UNPAID', '2022-12-04 01:34:55'),
(17, 2, 7420, 'RESERVE', '2022-12-04 01:34:55'),
(18, 3, 9816, 'UNPAID', '2022-12-04 01:34:55'),
(19, 3, 9671, 'UNPAID', '2022-12-04 01:34:55'),
(20, 3, 8588, 'UNPAID', '2022-12-04 01:34:55'),
(21, 3, 8238, 'UNPAID', '2022-12-04 01:34:55'),
(22, 3, 7626, 'UNPAID', '2022-12-04 01:34:55'),
(23, 2, 8383, 'UNPAID', '2022-12-04 01:34:55'),
(24, 3, 8715, 'UNPAID', '2022-12-04 01:34:55'),
(25, 2, 7632, 'UNPAID', '2022-12-04 01:34:55'),
(26, 2, 9764, 'PAID', '2022-12-04 01:34:55'),
(27, 3, 6689, 'PAID', '2022-12-04 01:34:55'),
(28, 2, 7930, 'PAID', '2022-12-04 01:34:55'),
(29, 2, 8779, 'UNPAID', '2022-12-04 01:34:55'),
(30, 3, 8246, 'UNPAID', '2022-12-04 01:34:55'),
(31, 2, 6934, 'PAID', '2022-12-04 01:34:55'),
(32, 3, 7594, 'PAID', '2022-12-04 01:34:55'),
(33, 3, 9632, 'PAID', '2022-12-04 01:34:55'),
(34, 2, 8814, 'PAID', '2022-12-04 01:55:15'),
(35, 2, 9323, 'VERIFIED', '2022-12-04 01:55:15'),
(36, 2, 7829, 'CANCELLED', '2022-12-04 01:55:15'),
(37, 2, 7235, 'PAID', '2022-12-04 01:55:15'),
(38, 2, 7627, 'PAID', '2022-12-04 01:55:15'),
(39, 2, 6833, 'PAID', '2022-12-04 01:55:15'),
(40, 2, 8014, 'PAID', '2022-12-04 01:55:15'),
(41, 2, 7821, 'PAID', '2022-12-04 01:55:15'),
(42, 2, 9657, 'VERIFIED', '2022-12-04 01:55:15'),
(43, 3, 8903, 'VERIFIED', '2022-12-04 01:55:15'),
(44, 2, 9687, 'PAID', '2022-12-04 01:55:15'),
(45, 3, 9406, 'UNPAID', '2022-12-04 01:55:15'),
(46, 3, 8410, 'UNPAID', '2022-12-04 01:55:15'),
(47, 3, 7335, 'PAID', '2022-12-04 01:55:15'),
(48, 3, 8076, 'UNPAID', '2022-12-04 01:55:15'),
(49, 3, 7521, 'UNPAID', '2022-12-04 01:55:15'),
(50, 2, 7420, 'RESERVE', '2022-12-04 01:55:15'),
(51, 3, 9816, 'UNPAID', '2022-12-04 01:55:15'),
(52, 3, 9671, 'UNPAID', '2022-12-04 01:55:15'),
(53, 3, 8588, 'UNPAID', '2022-12-04 01:55:15'),
(54, 3, 8238, 'UNPAID', '2022-12-04 01:55:15'),
(55, 3, 7626, 'UNPAID', '2022-12-04 01:55:15'),
(56, 2, 8383, 'UNPAID', '2022-12-04 01:55:15'),
(57, 3, 8715, 'UNPAID', '2022-12-04 01:55:15'),
(58, 2, 7632, 'UNPAID', '2022-12-04 01:55:15'),
(59, 2, 9764, 'PAID', '2022-12-04 01:55:15'),
(60, 3, 6689, 'PAID', '2022-12-04 01:55:15'),
(61, 2, 7930, 'PAID', '2022-12-04 01:55:15'),
(62, 2, 8779, 'UNPAID', '2022-12-04 01:55:15'),
(63, 3, 8246, 'UNPAID', '2022-12-04 01:55:15'),
(64, 2, 6934, 'PAID', '2022-12-04 01:55:15'),
(65, 3, 7594, 'PAID', '2022-12-04 01:55:15'),
(66, 3, 9632, 'PAID', '2022-12-04 01:55:15'),
(67, 2, 8814, 'PAID', '2022-12-04 01:56:17'),
(68, 2, 9323, 'VERIFIED', '2022-12-04 01:56:17'),
(69, 2, 7829, 'CANCELLED', '2022-12-04 01:56:17'),
(70, 2, 7235, 'PAID', '2022-12-04 01:56:17'),
(71, 2, 7627, 'PAID', '2022-12-04 01:56:17'),
(72, 2, 6833, 'PAID', '2022-12-04 01:56:17'),
(73, 2, 8014, 'PAID', '2022-12-04 01:56:17'),
(74, 2, 7821, 'PAID', '2022-12-04 01:56:17'),
(75, 2, 9657, 'VERIFIED', '2022-12-04 01:56:17'),
(76, 3, 8903, 'VERIFIED', '2022-12-04 01:56:17'),
(77, 2, 9687, 'PAID', '2022-12-04 01:56:17'),
(78, 3, 9406, 'UNPAID', '2022-12-04 01:56:17'),
(79, 3, 8410, 'UNPAID', '2022-12-04 01:56:17'),
(80, 3, 7335, 'PAID', '2022-12-04 01:56:17'),
(81, 3, 8076, 'UNPAID', '2022-12-04 01:56:17'),
(82, 3, 7521, 'UNPAID', '2022-12-04 01:56:17'),
(83, 2, 7420, 'RESERVE', '2022-12-04 01:56:17'),
(84, 3, 9816, 'UNPAID', '2022-12-04 01:56:17'),
(85, 3, 9671, 'UNPAID', '2022-12-04 01:56:17'),
(86, 3, 8588, 'UNPAID', '2022-12-04 01:56:17'),
(87, 3, 8238, 'UNPAID', '2022-12-04 01:56:17'),
(88, 3, 7626, 'UNPAID', '2022-12-04 01:56:17'),
(89, 2, 8383, 'UNPAID', '2022-12-04 01:56:17'),
(90, 3, 8715, 'UNPAID', '2022-12-04 01:56:17'),
(91, 2, 7632, 'UNPAID', '2022-12-04 01:56:17'),
(92, 2, 9764, 'PAID', '2022-12-04 01:56:17'),
(93, 3, 6689, 'PAID', '2022-12-04 01:56:17'),
(94, 2, 7930, 'PAID', '2022-12-04 01:56:17'),
(95, 2, 8779, 'UNPAID', '2022-12-04 01:56:17'),
(96, 3, 8246, 'UNPAID', '2022-12-04 01:56:17'),
(97, 2, 6934, 'PAID', '2022-12-04 01:56:17'),
(98, 3, 7594, 'PAID', '2022-12-04 01:56:17'),
(99, 3, 9632, 'PAID', '2022-12-04 01:56:17'),
(100, 2, 8814, 'PAID', '2022-12-04 01:57:39'),
(101, 2, 9323, 'VERIFIED', '2022-12-04 01:57:39'),
(102, 2, 7829, 'CANCELLED', '2022-12-04 01:57:39'),
(103, 2, 7235, 'PAID', '2022-12-04 01:57:39'),
(104, 2, 7627, 'PAID', '2022-12-04 01:57:39'),
(105, 2, 6833, 'PAID', '2022-12-04 01:57:39'),
(106, 2, 8014, 'PAID', '2022-12-04 01:57:39'),
(107, 2, 7821, 'PAID', '2022-12-04 01:57:39'),
(108, 2, 9657, 'VERIFIED', '2022-12-04 01:57:39'),
(109, 3, 8903, 'VERIFIED', '2022-12-04 01:57:39'),
(110, 2, 9687, 'PAID', '2022-12-04 01:57:39'),
(111, 3, 9406, 'UNPAID', '2022-12-04 01:57:39'),
(112, 3, 8410, 'UNPAID', '2022-12-04 01:57:39'),
(113, 3, 7335, 'PAID', '2022-12-04 01:57:39'),
(114, 3, 8076, 'UNPAID', '2022-12-04 01:57:39'),
(115, 3, 7521, 'UNPAID', '2022-12-04 01:57:39'),
(116, 2, 7420, 'RESERVE', '2022-12-04 01:57:39'),
(117, 3, 9816, 'UNPAID', '2022-12-04 01:57:39'),
(118, 3, 9671, 'UNPAID', '2022-12-04 01:57:39'),
(119, 3, 8588, 'UNPAID', '2022-12-04 01:57:39'),
(120, 3, 8238, 'UNPAID', '2022-12-04 01:57:39'),
(121, 3, 7626, 'UNPAID', '2022-12-04 01:57:39'),
(122, 2, 8383, 'UNPAID', '2022-12-04 01:57:39'),
(123, 3, 8715, 'UNPAID', '2022-12-04 01:57:39'),
(124, 2, 7632, 'UNPAID', '2022-12-04 01:57:39'),
(125, 2, 9764, 'PAID', '2022-12-04 01:57:39'),
(126, 3, 6689, 'PAID', '2022-12-04 01:57:39'),
(127, 2, 7930, 'PAID', '2022-12-04 01:57:39'),
(128, 2, 8779, 'UNPAID', '2022-12-04 01:57:39'),
(129, 3, 8246, 'UNPAID', '2022-12-04 01:57:39'),
(130, 2, 6934, 'PAID', '2022-12-04 01:57:39'),
(131, 3, 7594, 'PAID', '2022-12-04 01:57:39'),
(132, 3, 9632, 'PAID', '2022-12-04 01:57:39'),
(133, 2, 8814, 'PAID', '2022-12-04 02:02:47'),
(134, 2, 9323, 'VERIFIED', '2022-12-04 02:02:47'),
(135, 2, 7829, 'CANCELLED', '2022-12-04 02:02:47'),
(136, 2, 7235, 'PAID', '2022-12-04 02:02:47'),
(137, 2, 7627, 'PAID', '2022-12-04 02:02:47'),
(138, 2, 6833, 'PAID', '2022-12-04 02:02:47'),
(139, 2, 8014, 'PAID', '2022-12-04 02:02:47'),
(140, 2, 7821, 'PAID', '2022-12-04 02:02:47'),
(141, 2, 9657, 'VERIFIED', '2022-12-04 02:02:47'),
(142, 3, 8903, 'VERIFIED', '2022-12-04 02:02:47'),
(143, 2, 9687, 'PAID', '2022-12-04 02:02:47'),
(144, 3, 9406, 'UNPAID', '2022-12-04 02:02:47'),
(145, 3, 8410, 'UNPAID', '2022-12-04 02:02:47'),
(146, 3, 7335, 'PAID', '2022-12-04 02:02:47'),
(147, 3, 8076, 'UNPAID', '2022-12-04 02:02:47'),
(148, 3, 7521, 'UNPAID', '2022-12-04 02:02:47'),
(149, 2, 7420, 'RESERVE', '2022-12-04 02:02:47'),
(150, 3, 9816, 'UNPAID', '2022-12-04 02:02:47'),
(151, 3, 9671, 'UNPAID', '2022-12-04 02:02:47'),
(152, 3, 8588, 'UNPAID', '2022-12-04 02:02:47'),
(153, 3, 8238, 'UNPAID', '2022-12-04 02:02:47'),
(154, 3, 7626, 'UNPAID', '2022-12-04 02:02:47'),
(155, 2, 8383, 'UNPAID', '2022-12-04 02:02:47'),
(156, 3, 8715, 'UNPAID', '2022-12-04 02:02:47'),
(157, 2, 7632, 'UNPAID', '2022-12-04 02:02:47'),
(158, 2, 9764, 'PAID', '2022-12-04 02:02:47'),
(159, 3, 6689, 'PAID', '2022-12-04 02:02:47'),
(160, 2, 7930, 'PAID', '2022-12-04 02:02:47'),
(161, 2, 8779, 'UNPAID', '2022-12-04 02:02:47'),
(162, 3, 8246, 'UNPAID', '2022-12-04 02:02:47'),
(163, 2, 6934, 'PAID', '2022-12-04 02:02:47'),
(164, 3, 7594, 'PAID', '2022-12-04 02:02:47'),
(165, 3, 9632, 'PAID', '2022-12-04 02:02:47'),
(166, 2, 8814, 'PAID', '2022-12-04 02:05:26'),
(167, 2, 9323, 'VERIFIED', '2022-12-04 02:05:26'),
(168, 2, 7829, 'CANCELLED', '2022-12-04 02:05:26'),
(169, 2, 7235, 'PAID', '2022-12-04 02:05:26'),
(170, 2, 7627, 'PAID', '2022-12-04 02:05:26'),
(171, 2, 6833, 'PAID', '2022-12-04 02:05:26'),
(172, 2, 8014, 'PAID', '2022-12-04 02:05:26'),
(173, 2, 7821, 'PAID', '2022-12-04 02:05:26'),
(174, 2, 9657, 'VERIFIED', '2022-12-04 02:05:26'),
(175, 3, 8903, 'VERIFIED', '2022-12-04 02:05:26'),
(176, 2, 9687, 'PAID', '2022-12-04 02:05:26'),
(177, 3, 9406, 'UNPAID', '2022-12-04 02:05:26'),
(178, 3, 8410, 'UNPAID', '2022-12-04 02:05:26'),
(179, 3, 7335, 'PAID', '2022-12-04 02:05:26'),
(180, 3, 8076, 'UNPAID', '2022-12-04 02:05:26'),
(181, 3, 7521, 'UNPAID', '2022-12-04 02:05:26'),
(182, 2, 7420, 'RESERVE', '2022-12-04 02:05:26'),
(183, 3, 9816, 'UNPAID', '2022-12-04 02:05:26'),
(184, 3, 9671, 'UNPAID', '2022-12-04 02:05:26'),
(185, 3, 8588, 'UNPAID', '2022-12-04 02:05:26'),
(186, 3, 8238, 'UNPAID', '2022-12-04 02:05:26'),
(187, 3, 7626, 'UNPAID', '2022-12-04 02:05:26'),
(188, 2, 8383, 'UNPAID', '2022-12-04 02:05:26'),
(189, 3, 8715, 'UNPAID', '2022-12-04 02:05:26'),
(190, 2, 7632, 'UNPAID', '2022-12-04 02:05:26'),
(191, 2, 9764, 'PAID', '2022-12-04 02:05:26'),
(192, 3, 6689, 'PAID', '2022-12-04 02:05:26'),
(193, 2, 7930, 'PAID', '2022-12-04 02:05:26'),
(194, 2, 8779, 'UNPAID', '2022-12-04 02:05:26'),
(195, 3, 8246, 'UNPAID', '2022-12-04 02:05:26'),
(196, 2, 6934, 'PAID', '2022-12-04 02:05:26'),
(197, 3, 7594, 'PAID', '2022-12-04 02:05:26'),
(198, 3, 9632, 'PAID', '2022-12-04 02:05:26'),
(199, 2, 8814, 'PAID', '2022-12-04 02:07:36'),
(200, 2, 9323, 'VERIFIED', '2022-12-04 02:07:36'),
(201, 2, 7829, 'CANCELLED', '2022-12-04 02:07:36'),
(202, 2, 7235, 'PAID', '2022-12-04 02:07:36'),
(203, 2, 7627, 'PAID', '2022-12-04 02:07:36'),
(204, 2, 6833, 'PAID', '2022-12-04 02:07:36'),
(205, 2, 8014, 'PAID', '2022-12-04 02:07:36'),
(206, 2, 7821, 'PAID', '2022-12-04 02:07:36'),
(207, 2, 9657, 'VERIFIED', '2022-12-04 02:07:36'),
(208, 3, 8903, 'VERIFIED', '2022-12-04 02:07:36'),
(209, 2, 9687, 'PAID', '2022-12-04 02:07:36'),
(210, 3, 9406, 'UNPAID', '2022-12-04 02:07:36'),
(211, 3, 8410, 'UNPAID', '2022-12-04 02:07:36'),
(212, 3, 7335, 'PAID', '2022-12-04 02:07:36'),
(213, 3, 8076, 'UNPAID', '2022-12-04 02:07:36'),
(214, 3, 7521, 'UNPAID', '2022-12-04 02:07:36'),
(215, 2, 7420, 'RESERVE', '2022-12-04 02:07:36'),
(216, 3, 9816, 'UNPAID', '2022-12-04 02:07:36'),
(217, 3, 9671, 'UNPAID', '2022-12-04 02:07:36'),
(218, 3, 8588, 'UNPAID', '2022-12-04 02:07:36'),
(219, 3, 8238, 'UNPAID', '2022-12-04 02:07:36'),
(220, 3, 7626, 'UNPAID', '2022-12-04 02:07:36'),
(221, 2, 8383, 'UNPAID', '2022-12-04 02:07:36'),
(222, 3, 8715, 'UNPAID', '2022-12-04 02:07:36'),
(223, 2, 7632, 'UNPAID', '2022-12-04 02:07:36'),
(224, 2, 9764, 'PAID', '2022-12-04 02:07:36'),
(225, 3, 6689, 'PAID', '2022-12-04 02:07:36'),
(226, 2, 7930, 'PAID', '2022-12-04 02:07:36'),
(227, 2, 8779, 'UNPAID', '2022-12-04 02:07:36'),
(228, 3, 8246, 'UNPAID', '2022-12-04 02:07:36'),
(229, 2, 6934, 'PAID', '2022-12-04 02:07:36'),
(230, 3, 7594, 'PAID', '2022-12-04 02:07:36'),
(231, 3, 9632, 'PAID', '2022-12-04 02:07:36'),
(232, 2, 8814, 'PAID', '2022-12-04 02:11:10'),
(233, 2, 9323, 'VERIFIED', '2022-12-04 02:11:10'),
(234, 2, 7829, 'CANCELLED', '2022-12-04 02:11:10'),
(235, 2, 7235, 'PAID', '2022-12-04 02:11:10'),
(236, 2, 7627, 'PAID', '2022-12-04 02:11:10'),
(237, 2, 6833, 'PAID', '2022-12-04 02:11:10'),
(238, 2, 8014, 'PAID', '2022-12-04 02:11:10'),
(239, 2, 7821, 'PAID', '2022-12-04 02:11:10'),
(240, 2, 9657, 'VERIFIED', '2022-12-04 02:11:10'),
(241, 3, 8903, 'VERIFIED', '2022-12-04 02:11:10'),
(242, 2, 9687, 'PAID', '2022-12-04 02:11:10'),
(243, 3, 9406, 'UNPAID', '2022-12-04 02:11:10'),
(244, 3, 8410, 'UNPAID', '2022-12-04 02:11:10'),
(245, 3, 7335, 'PAID', '2022-12-04 02:11:10'),
(246, 3, 8076, 'UNPAID', '2022-12-04 02:11:10'),
(247, 3, 7521, 'UNPAID', '2022-12-04 02:11:10'),
(248, 2, 7420, 'RESERVE', '2022-12-04 02:11:10'),
(249, 3, 9816, 'UNPAID', '2022-12-04 02:11:10'),
(250, 3, 9671, 'UNPAID', '2022-12-04 02:11:10'),
(251, 3, 8588, 'UNPAID', '2022-12-04 02:11:10'),
(252, 3, 8238, 'UNPAID', '2022-12-04 02:11:10'),
(253, 3, 7626, 'UNPAID', '2022-12-04 02:11:10'),
(254, 2, 8383, 'UNPAID', '2022-12-04 02:11:10'),
(255, 3, 8715, 'UNPAID', '2022-12-04 02:11:10'),
(256, 2, 7632, 'UNPAID', '2022-12-04 02:11:10'),
(257, 2, 9764, 'PAID', '2022-12-04 02:11:10'),
(258, 3, 6689, 'PAID', '2022-12-04 02:11:10'),
(259, 2, 7930, 'PAID', '2022-12-04 02:11:10'),
(260, 2, 8779, 'UNPAID', '2022-12-04 02:11:10'),
(261, 3, 8246, 'UNPAID', '2022-12-04 02:11:10'),
(262, 2, 6934, 'PAID', '2022-12-04 02:11:10'),
(263, 3, 7594, 'PAID', '2022-12-04 02:11:10'),
(264, 3, 9632, 'PAID', '2022-12-04 02:11:10'),
(265, 2, 8814, 'PAID', '2022-12-04 02:22:02'),
(266, 2, 9323, 'VERIFIED', '2022-12-04 02:22:02'),
(267, 2, 7829, 'CANCELLED', '2022-12-04 02:22:02'),
(268, 2, 7235, 'PAID', '2022-12-04 02:22:02'),
(269, 2, 7627, 'PAID', '2022-12-04 02:22:02'),
(270, 2, 6833, 'PAID', '2022-12-04 02:22:02'),
(271, 2, 8014, 'PAID', '2022-12-04 02:22:02'),
(272, 2, 7821, 'PAID', '2022-12-04 02:22:02'),
(273, 2, 9657, 'VERIFIED', '2022-12-04 02:22:02'),
(274, 3, 8903, 'VERIFIED', '2022-12-04 02:22:02'),
(275, 2, 9687, 'PAID', '2022-12-04 02:22:02'),
(276, 3, 9406, 'UNPAID', '2022-12-04 02:22:02'),
(277, 3, 8410, 'UNPAID', '2022-12-04 02:22:02'),
(278, 3, 7335, 'PAID', '2022-12-04 02:22:02'),
(279, 3, 8076, 'UNPAID', '2022-12-04 02:22:02'),
(280, 3, 7521, 'UNPAID', '2022-12-04 02:22:02'),
(281, 2, 7420, 'RESERVE', '2022-12-04 02:22:02'),
(282, 3, 9816, 'UNPAID', '2022-12-04 02:22:02'),
(283, 3, 9671, 'UNPAID', '2022-12-04 02:22:02'),
(284, 3, 8588, 'UNPAID', '2022-12-04 02:22:02'),
(285, 3, 8238, 'UNPAID', '2022-12-04 02:22:02'),
(286, 3, 7626, 'UNPAID', '2022-12-04 02:22:02'),
(287, 2, 8383, 'UNPAID', '2022-12-04 02:22:02'),
(288, 3, 8715, 'UNPAID', '2022-12-04 02:22:02'),
(289, 2, 7632, 'UNPAID', '2022-12-04 02:22:02'),
(290, 2, 9764, 'PAID', '2022-12-04 02:22:02'),
(291, 3, 6689, 'PAID', '2022-12-04 02:22:02'),
(292, 2, 7930, 'PAID', '2022-12-04 02:22:02'),
(293, 2, 8779, 'UNPAID', '2022-12-04 02:22:02'),
(294, 3, 8246, 'UNPAID', '2022-12-04 02:22:02'),
(295, 2, 6934, 'PAID', '2022-12-04 02:22:02'),
(296, 3, 7594, 'PAID', '2022-12-04 02:22:02'),
(297, 3, 9632, 'PAID', '2022-12-04 02:22:02'),
(298, 2, 8814, 'PAID', '2022-12-08 11:55:12'),
(299, 2, 9323, 'VERIFIED', '2022-12-08 11:55:12'),
(300, 2, 7829, 'CANCELLED', '2022-12-08 11:55:12'),
(301, 2, 7235, 'PAID', '2022-12-08 11:55:12'),
(302, 2, 7627, 'PAID', '2022-12-08 11:55:12'),
(303, 2, 6833, 'PAID', '2022-12-08 11:55:12'),
(304, 2, 8014, 'PAID', '2022-12-08 11:55:12'),
(305, 2, 7821, 'PAID', '2022-12-08 11:55:12'),
(306, 2, 9657, 'VERIFIED', '2022-12-08 11:55:12'),
(307, 3, 8903, 'VERIFIED', '2022-12-08 11:55:12'),
(308, 2, 9687, 'PAID', '2022-12-08 11:55:12'),
(309, 3, 9406, 'UNPAID', '2022-12-08 11:55:12'),
(310, 3, 8410, 'UNPAID', '2022-12-08 11:55:12'),
(311, 3, 7335, 'PAID', '2022-12-08 11:55:12'),
(312, 3, 8076, 'UNPAID', '2022-12-08 11:55:12'),
(313, 3, 7521, 'UNPAID', '2022-12-08 11:55:12'),
(314, 2, 7420, 'RESERVE', '2022-12-08 11:55:12'),
(315, 3, 9816, 'UNPAID', '2022-12-08 11:55:12'),
(316, 3, 9671, 'UNPAID', '2022-12-08 11:55:12'),
(317, 3, 8588, 'UNPAID', '2022-12-08 11:55:12'),
(318, 3, 8238, 'UNPAID', '2022-12-08 11:55:12'),
(319, 3, 7626, 'UNPAID', '2022-12-08 11:55:12'),
(320, 2, 8383, 'UNPAID', '2022-12-08 11:55:12'),
(321, 3, 8715, 'UNPAID', '2022-12-08 11:55:12'),
(322, 2, 7632, 'UNPAID', '2022-12-08 11:55:12'),
(323, 2, 9764, 'PAID', '2022-12-08 11:55:12'),
(324, 3, 6689, 'PAID', '2022-12-08 11:55:12'),
(325, 2, 7930, 'PAID', '2022-12-08 11:55:12'),
(326, 2, 8779, 'UNPAID', '2022-12-08 11:55:12'),
(327, 3, 8246, 'UNPAID', '2022-12-08 11:55:12'),
(328, 2, 6934, 'PAID', '2022-12-08 11:55:12'),
(329, 3, 7594, 'PAID', '2022-12-08 11:55:12'),
(330, 3, 9632, 'PAID', '2022-12-08 11:55:12'),
(331, 3, 9730, 'PAID', '2022-12-08 11:55:12'),
(332, 3, 7228, 'PAID', '2022-12-08 11:55:12'),
(333, 3, 8950, 'UNPAID', '2022-12-08 11:55:12'),
(334, 3, 9328, 'PAID', '2022-12-08 11:55:12'),
(335, 2, 8350, 'PAID', '2022-12-08 11:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `code` int(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`user_id`, `email`, `phone`, `fullname`, `password`, `status`, `code`, `date_created`) VALUES
(1, 'tricore012@gmail.com', '09166513189', 'Gerald Mico Mico devcore', '21232f297a57a5a743894a0e4a801fc3', 'VALID', 987298, '2022-11-11'),
(2, 'obgesilva31@gmail.com', '09271419154', 'Ob Geesilva', 'e10adc3949ba59abbe56e057f20f883e', 'INVALID', 922474, '2023-01-16'),
(3, 'obgesilva31@gmail.com', '09271419154', 'Ob Geesilva', 'e10adc3949ba59abbe56e057f20f883e', 'INVALID', 953764, '2023-01-16'),
(4, 'demonyita02022@gmail.com', '09489448691', 'de monya', '21232f297a57a5a743894a0e4a801fc3', 'VALID', 717592, '2023-01-18'),
(5, 'gekat62914@quamox.com', '2456677', 'haayyy nakkuuu', '827ccb0eea8a706c4c34a16891f84e7b', 'VALID', 756346, '2023-01-19'),
(6, 'vivider233@nevyxus.com', '1123123342', 'VIVIDER23333', '827ccb0eea8a706c4c34a16891f84e7b', 'VALID', 670914, '2023-01-19'),
(7, 'nicowydo@ema-sofia.eu', '1123123342', 'VIVIDER23333', '827ccb0eea8a706c4c34a16891f84e7b', 'VALID', 926398, '2023-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `email_security`
--

CREATE TABLE `email_security` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_attemp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_security`
--

INSERT INTO `email_security` (`id`, `user_id`, `code`, `status`, `date_attemp`) VALUES
(1, 2, 756713, 'USED', '2022-10-21'),
(2, 2, 690306, 'UNUSED', '2022-10-21'),
(3, 4, 972656, 'UNUSED', '2022-10-21'),
(4, 4, 811777, 'USED', '2022-10-21'),
(5, 4, 832102, 'USED', '2022-10-21'),
(6, 4, 903289, 'USED', '2022-10-21'),
(7, 4, 970296, 'USED', '2022-10-21'),
(8, 2, 931579, 'USED', '2022-10-21'),
(9, 4, 764942, 'USED', '2022-10-21'),
(10, 2, 672474, 'USED', '2022-10-21'),
(11, 2, 991882, 'USED', '2022-11-06'),
(12, 4, 912668, 'USED', '2022-11-10'),
(13, 1, 809641, 'USED', '2022-11-11'),
(14, 1, 770324, 'USED', '2022-11-22'),
(15, 1, 963846, 'USED', '2022-12-03'),
(16, 2, 812774, 'USED', '2022-12-03'),
(17, 2, 963602, 'USED', '2022-12-03'),
(18, 2, 837056, 'USED', '2022-12-03'),
(19, 2, 956634, 'USED', '2022-12-04'),
(20, 1, 751515, 'USED', '2022-12-04'),
(21, 2, 787210, 'USED', '2022-12-08'),
(22, 1, 744170, 'USED', '2022-12-08'),
(23, 1, 726155, 'USED', '2022-12-08'),
(24, 1, 828735, 'USED', '2022-12-08'),
(25, 1, 813262, 'USED', '2022-12-08'),
(26, 1, 683389, 'USED', '2022-12-08'),
(27, 2, 885955, 'USED', '2022-12-08'),
(28, 1, 972250, 'USED', '2023-01-16'),
(29, 2, 793380, 'UNUSED', '2023-01-18'),
(30, 4, 722225, 'UNUSED', '2023-01-18'),
(31, 4, 926377, 'UNUSED', '2023-01-18'),
(32, 4, 828617, 'UNUSED', '2023-01-18'),
(33, 4, 907323, 'UNUSED', '2023-01-18'),
(34, 6, 981897, 'UNUSED', '2023-01-18'),
(35, 2, 697068, 'UNUSED', '2023-01-18'),
(36, 4, 958406, 'UNUSED', '2023-01-18'),
(37, 4, 982255, 'UNUSED', '2023-01-18'),
(38, 2, 788087, 'UNUSED', '2023-01-18'),
(39, 4, 981412, 'UNUSED', '2023-01-18'),
(40, 4, 707045, 'UNUSED', '2023-01-18'),
(41, 5, 944363, 'UNUSED', '2023-01-18'),
(42, 5, 755728, 'UNUSED', '2023-01-18'),
(43, 5, 764126, 'UNUSED', '2023-01-18'),
(44, 5, 929240, 'UNUSED', '2023-01-19'),
(45, 5, 967496, 'UNUSED', '2023-01-19'),
(46, 2, 978983, 'UNUSED', '2023-01-19'),
(47, 5, 995294, 'UNUSED', '2023-01-19'),
(48, 1, 781615, 'UNUSED', '2023-01-19'),
(49, 5, 709589, 'UNUSED', '2023-01-19'),
(50, 2, 770683, 'USED', '2023-01-19'),
(51, 2, 800196, 'UNUSED', '2023-01-19'),
(52, 2, 999286, 'UNUSED', '2023-01-19'),
(53, 5, 877842, 'UNUSED', '2023-01-19'),
(54, 2, 788696, 'UNUSED', '2023-01-19'),
(55, 2, 955371, 'UNUSED', '2023-01-19'),
(56, 5, 798525, 'UNUSED', '2023-01-19'),
(57, 2, 788011, 'UNUSED', '2023-01-19'),
(58, 4, 899263, 'USED', '2023-01-19'),
(59, 5, 964113, 'UNUSED', '2023-01-19'),
(60, 4, 829071, 'UNUSED', '2023-01-19'),
(61, 6, 909574, 'USED', '2023-01-19'),
(62, 4, 991863, 'UNUSED', '2023-01-19'),
(63, 4, 769897, 'UNUSED', '2023-01-19'),
(64, 4, 913000, 'UNUSED', '2023-01-19'),
(65, 4, 983361, 'USED', '2023-01-19'),
(66, 6, 874800, 'USED', '2023-01-19'),
(67, 6, 837059, 'UNUSED', '2023-01-19'),
(68, 4, 707377, 'UNUSED', '2023-01-19'),
(69, 7, 781815, 'USED', '2023-01-19'),
(70, 7, 750730, 'UNUSED', '2023-01-19'),
(71, 7, 710876, 'USED', '2023-01-19'),
(72, 4, 726157, 'UNUSED', '2023-01-19'),
(73, 4, 831639, 'UNUSED', '2023-01-19'),
(74, 7, 752091, 'USED', '2023-01-19'),
(75, 4, 836124, 'UNUSED', '2023-01-19'),
(76, 7, 775685, 'UNUSED', '2023-01-20'),
(77, 7, 823937, 'USED', '2023-01-20'),
(78, 2, 917499, 'USED', '2023-01-20'),
(79, 2, 678836, 'UNUSED', '2023-01-20'),
(80, 4, 849493, 'UNUSED', '2023-01-20'),
(81, 6, 922184, 'UNUSED', '2023-01-20'),
(82, 6, 896929, 'UNUSED', '2023-01-20'),
(83, 6, 958011, 'UNUSED', '2023-01-20'),
(84, 4, 768173, 'UNUSED', '2023-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `photo`) VALUES
(1, 'Do you offer private tour package?', 'Yes, we offer private tour package for a minimum of 8 person and maximum of 12 person per van.', 'upload/1674128863.png'),
(2, 'What is the average group type of your tour?', ' We accept solo joiners, couple, and group tour and maximum of 12 person.', 'upload/1674128925.png'),
(3, 'How can i book a tour.', 'Simply go to the homepage www.jomerventure.com and choose a tour package \r\nthat interest you.', 'upload/1674128952.png'),
(4, 'What are your payment options?', 'We accept credit/debit, paypal and gcash payment.', 'upload/1674128977.png'),
(5, 'What tours do you have?', 'We have different kind of land tours, hiking and beach tour.', 'upload/1674129000.png'),
(6, 'What is your cancellation policy?', ' You can cancel your booking within 24 hours of making the reservation.', 'upload/1674129193.png'),
(7, ' What is your refund policy?', 'Cancellation within 24 hours of making the reservation will be fully refunded, \r\nwhile cancellation within the travel dates is non-refundable but is transferrable \r\nto another person.', 'upload/1674129259.png'),
(8, 'What is included in the tour cost?', 'You can find the inclusions of the tour when you click on book now or reserve on selected tour offer.\r\n', 'upload/1674129303.png');

-- --------------------------------------------------------

--
-- Table structure for table `my_post`
--

CREATE TABLE `my_post` (
  `id` int(11) NOT NULL,
  `promo_name` varchar(250) NOT NULL,
  `promo_start` date NOT NULL,
  `promo_end` date NOT NULL,
  `promo_price` int(100) NOT NULL,
  `min_pax` int(50) NOT NULL,
  `max_pax` int(50) NOT NULL,
  `destination_province` varchar(200) NOT NULL,
  `destination_city` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_post`
--

INSERT INTO `my_post` (`id`, `promo_name`, `promo_start`, `promo_end`, `promo_price`, `min_pax`, `max_pax`, `destination_province`, `destination_city`, `description`, `photo`, `date_created`) VALUES
(2, 'TEST PROMO', '2022-10-21', '2022-10-24', 10, 2, 5, 'Bataan', 'Dinalupihan', 'THIS IS THE PROMO', 'upload/1666288396.png', '2022-10-21'),
(3, 'TEST PROMO', '2023-03-01', '2023-04-05', 10, 2, 5, 'Aklan', 'Banga', 'THIS IS THE PROMO', 'upload/1666288594.png', '2022-10-21'),
(4, 'BURIAS GROUP OF ISLAND', '2023-01-22', '2023-02-01', 1, 1, 14, 'Sorsogon', 'Pilar', '<p>2D1N <span class=\"x193iq5w xeuugli x13faqbe x1vvkbs x1xmvt09 x1lliihq x1s928wv xhkezso x1gmr53x x1cpjm7i x1fgarty x1943h6x xudqn12 x3x7a5m x6prxxf xvq8zen xo1l8bm xzsf02u x1yc453h\" dir=\"auto\">With 4 hosted meals </span></p>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">Inclusions</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/td8/1.5/16/2714.png\" alt=\"??\" width=\"16\" height=\"16\"></span>Drivers meal, gas &amp; toll</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/td8/1.5/16/2714.png\" alt=\"??\" width=\"16\" height=\"16\"></span>Parking fee</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbe/1.5/16/1f690.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Roundtrip van transter</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t3/1.5/16/26f5.png\" alt=\"??\" width=\"16\" height=\"16\"></span>Roundtrip boat transfer &amp; Island hopping</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t3e/1.5/16/1f371.png\" alt=\"?\" width=\"16\" height=\"16\"></span> 4 hosted meals (lunch,dinner,breakfast,lunch)</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2f/1.5/16/26fa.png\" alt=\"??\" width=\"16\" height=\"16\"></span>Tent accomodation</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1.5/16/1f4f7.png\" alt=\"?\" width=\"16\" height=\"16\"></span> Drone shots</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"?\" width=\"16\" height=\"16\"></span> Souvenir Bag tag</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"?\" width=\"16\" height=\"16\"></span>3 bote alfonso para I<span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1.5/16/2764.png\" alt=\"??\" width=\"16\" height=\"16\"></span>U for whole group</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Taga picture <span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb0/1.5/16/1f609.png\" alt=\"?\" width=\"16\" height=\"16\"></span></div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tba/1.5/16/2705.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Ref magnet</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">Exlusions</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t64/1.5/16/274c.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Personal Expenses</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t64/1.5/16/274c.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Tourism entrance/island entrance</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">Place to visit</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Sombrero Island</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Tinalisayan Island</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Dapa Island</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Animasola Island</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Temple island</div>\r\n<div dir=\"auto\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t86/1.5/16/1f4cd.png\" alt=\"?\" width=\"16\" height=\"16\"></span>Verga island</div>\r\n</div>', 'upload/1674022757.png', '2023-01-18'),
(5, 'Vista de Puente Beach + Infinity Pool', '2023-02-01', '2023-03-01', 1, 1, 12, 'Batangas', 'Malvar', '<p><span class=\"x193iq5w xeuugli x13faqbe x1vvkbs x1xmvt09 x1lliihq x1s928wv xhkezso x1gmr53x x1cpjm7i x1fgarty x1943h6x xudqn12 x3x7a5m x6prxxf xvq8zen xo1l8bm xzsf02u x1yc453h\" dir=\"auto\">We also offer private /exclusive tour on weekdays min of 10-12pax per van </span></p>', 'upload/1674033618.png', '2023-01-18'),
(6, ' BAGUIO CITY TOUR with free breakfast', '2023-03-01', '2023-04-01', 2, 1, 12, 'Benguet', 'Baguio', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">INCLUSIONS:</div>\r\n<div dir=\"auto\">AC Van Transfer (MNL - BAGUIO - MNL)</div>\r\n<div dir=\"auto\">All Transportation Fee</div>\r\n<div dir=\"auto\">Baguio City Tour</div>\r\n<div dir=\"auto\">Tour Coordinator on Board</div>\r\n<div dir=\"auto\">Room Accommodation (for 2D1N only)</div>\r\n<div dir=\"auto\">Free Breakfast (for 2D1N / 3D2N only)</div>\r\n</div>', 'upload/1674050613.jpg', '2023-01-18'),
(7, 'PINAGBENGA FLOWER FESTIVAL', '2023-04-01', '2023-05-01', 10, 1, 12, 'Benguet', 'Baguio', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><strong>Sites to Visits</strong></div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Northern Blossom Farm(Baguio Pure Tour not included)</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Mirador EcoPark</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Bamboo Sanctuary</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Burnham Park</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>The Mansion</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Botanical Garden</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Minesview Park</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Wright Park</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Diplomat Hotel</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Strawberry Farm</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Colorful Houses</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Lourdes Grotto</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Bell Church</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Session Road</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Camp John Hay</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Baguio Cathedral</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Night Market</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>SM Baguio</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Good Taste Restaurant</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Optional</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Vanilla Cafe</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Tam Awan Village</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><strong>Inclusions</strong></div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Roundtrip Van Transfer(MNL-BGUIO-MNL)</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Room Accomodation(transient type)</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Toll/Gas</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Environmental fees</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Parking Fees</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Drivers Meals</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>Coordinator</li>\r\n</ul>\r\n</div>\r\n</div>', 'upload/1674064825.png', '2023-01-19'),
(8, '2D1N LA UNION TOUR', '2023-04-01', '2023-05-31', 10, 1, 12, 'La Union', 'San Juan', '<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><strong>DESTINATIONS:</strong></div>\r\n<div dir=\"auto\">&gt;Tangadan Falls</div>\r\n<div dir=\"auto\">&gt;San Juan Beach</div>\r\n<div dir=\"auto\">&gt;Flotsam and Jetsam</div>\r\n<div dir=\"auto\">&gt;Kabsat</div>\r\n<div dir=\"auto\">&gt;Fatwave Surf Resort</div>\r\n<div dir=\"auto\">&gt;Grapes Farm</div>\r\n<div dir=\"auto\">&gt;Bahay na Bato</div>\r\n<div dir=\"auto\">&gt;Baluarte Watch Tower</div>\r\n<div dir=\"auto\">&gt;Pebble Beach</div>\r\n<div dir=\"auto\">&gt;Paloair Balaoan (Bohol- like Forest)</div>\r\n<div dir=\"auto\">&gt;Macho- Temple</div>\r\n<div dir=\"auto\">&gt;Halo Halo De Iloko Balay</div>\r\n<div dir=\"auto\">&gt;Namacpacan Church</div>\r\n<div dir=\"auto\">&gt;Thunderbird Resort (optional)</div>\r\n<div dir=\"auto\">&gt;Pasalubong Store</div>\r\n<div dir=\"auto\">&gt;Nightlife @Surf Town; El Union Coffee &amp; Food Parks (free time)</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\"><strong>INCLUSIONS</strong></div>\r\n<div dir=\"auto\">-Roundtrip Van Transfer (Manila- LU- Manila)</div>\r\n<div dir=\"auto\">*Diesel, Toll Fees, Driver&rsquo;s Fee, Driver&rsquo;s Meal, Parking Fees</div>\r\n<div dir=\"auto\">-Complete La Union Tour</div>\r\n<div dir=\"auto\">-Air- Conditioned Accommodation in San Juan</div>\r\n<div dir=\"auto\">-Tour Coordinator/ Photographer</div>\r\n<div dir=\"auto\">-Assistance on your Travel Requirements</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">**EXCLUSIONS**</div>\r\n<div dir=\"auto\">&gt;Meals</div>\r\n<div dir=\"auto\">&gt;Minimal Fees/ Bahay na Bato *40</div>\r\n<div dir=\"auto\">&gt;San Juan Envi Fee *50 (new policy)</div>\r\n<div dir=\"auto\">&gt;Tangadan Falls fees (optional)</div>\r\n<div dir=\"auto\">&gt;Thunderbird Resort (optional)</div>\r\n</div>', 'upload/1674128367.png', '2023-01-19'),
(9, 'BORACAY ISLAND HOPPING', '2023-04-01', '2023-04-30', 5, 1, 12, 'Aklan', 'Malay', '<div dir=\"auto\"><strong>ISLAND HOPPING DESTINATIONS ATTRACTIONS&nbsp;</strong></div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>PUKA BEACH</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>BALINGHAI BEACH</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>CORAL GARDEN</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>CRYSTAL COVE</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>MAGIC ISLAND</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>CROCODILE ISLAND</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>ILIG-ILIGIN BEACH</li>\r\n</ul>\r\n<p><strong>INCLUSIONS</strong></p>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>SNORKELING GEAR&nbsp;</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>LIFE JACKET&nbsp;</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>HAM &amp; CHEESE / COCKTAILS&nbsp;</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>PHOTOSHOOT</li>\r\n</ul>\r\n</div>\r\n</div>\r\n<div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\">\r\n<div dir=\"auto\">&bull; <strong>NOT INCLUDED </strong>&bull;</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>BEACH TOWEL</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>TIP</li>\r\n</ul>\r\n</div>\r\n<div dir=\"auto\">\r\n<ul>\r\n<li>PERSONAL ITEM</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', 'upload/1674135234.jpg', '2023-01-19'),
(10, 'TEST PROMO asdadsa', '2023-01-25', '2023-01-30', 1, 2, 3, 'Bohol', 'Candijay', '', 'upload/1674155618.png', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `proceed_to_pay`
--

CREATE TABLE `proceed_to_pay` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` date NOT NULL,
  `price` int(100) NOT NULL,
  `pax` int(100) NOT NULL,
  `price_to_pay` int(100) NOT NULL,
  `pickup` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(250) NOT NULL,
  `promo_id` int(11) NOT NULL,
  `status` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proceed_to_pay`
--

INSERT INTO `proceed_to_pay` (`id`, `email`, `ref`, `phone`, `fullname`, `booking_date`, `price`, `pax`, `price_to_pay`, `pickup`, `code`, `promo_id`, `status`, `mode`, `date_created`) VALUES
(1, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 20, 10000, 'GREENFIELD', 8814, 2, 'PAID', '', '2022-10-21'),
(2, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 2, 1000, 'MOA', 9323, 2, 'VERIFIED', 'PAYPAL', '2022-10-21'),
(3, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 20, 10000, 'CENTRIS', 7829, 2, 'CANCELLED', '', '2022-10-21'),
(4, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 5, 2500, 'GREENFIELD', 7235, 2, 'PAID', '', '2022-10-21'),
(5, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 2, 1000, 'CENTRIS', 7627, 2, 'PAID', 'PAYPAL', '2022-10-21'),
(6, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-23', 500, 2, 1000, 'GREENFIELD', 6833, 2, 'PAID', 'GCASH', '2022-10-21'),
(7, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-23', 500, 10, 5000, 'GREENFIELD', 8014, 2, 'PAID', 'GCASH', '2022-10-21'),
(8, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-22', 500, 10, 5000, 'GREENFIELD', 7821, 2, 'PAID', 'GCASH', '2022-10-21'),
(9, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '0000-00-00', 500, 10, 5000, 'MOA', 9657, 2, 'VERIFIED', '', '2022-11-22'),
(10, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '0000-00-00', 300, 10, 3000, 'GREENFIELD', 8903, 3, 'VERIFIED', 'PAYPAL', '2022-11-22'),
(11, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '0000-00-00', 500, 10, 5000, 'GREENFIELD', 9687, 2, 'PAID', 'GCASH', '2022-11-22'),
(12, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 20, 6000, 'MOA', 9406, 3, 'UNPAID', 'GCASH', '2022-12-01'),
(13, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 20, 6000, 'MOA', 8410, 3, 'UNPAID', 'GCASH', '2022-12-01'),
(14, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 20, 6000, 'MOA', 7335, 3, 'PAID', 'GCASH', '2022-12-01'),
(15, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'GREENFIELD', 8076, 3, 'UNPAID', 'GCASH', '2022-12-01'),
(16, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'GREENFIELD', 7521, 3, 'UNPAID', 'GCASH', '2022-12-01'),
(17, '', '', '', '', '0000-00-00', 500, 7, 3500, 'MOA', 7420, 2, 'RESERVE', '', '2022-12-03'),
(18, '', '', '', '', '0000-00-00', 300, 2, 600, 'MOA', 9816, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(19, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 500, 150000, 'MOA', 9671, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(20, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 500, 150000, 'GREENFIELD', 8588, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(21, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'GREENFIELD', 8238, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(22, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'MOA', 7626, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(23, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 10, 5000, 'GREENFIELD', 8383, 2, 'UNPAID', 'GCASH', '2022-12-03'),
(24, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'MOA', 8715, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(25, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 10, 5000, 'GREENFIELD', 7632, 2, 'UNPAID', 'PAYPAL', '2022-12-03'),
(26, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 10, 5000, 'MOA', 9764, 2, 'PAID', 'PAYPAL', '2022-12-03'),
(27, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 250, 75000, 'MOA', 6689, 3, 'PAID', 'STRIPE', '2022-12-03'),
(28, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 10, 5000, 'MOA', 7930, 2, 'PAID', 'STRIPE', '2022-12-03'),
(29, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 5, 2500, 'MOA', 8779, 2, 'UNPAID', 'PAYPAL', '2022-12-03'),
(30, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-23', 300, 5, 1500, 'MOA', 8246, 3, 'UNPAID', 'PAYPAL', '2022-12-03'),
(31, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 5, 2500, 'MOA', 6934, 2, 'PAID', 'PAYPAL', '2022-12-03'),
(32, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 250, 75000, 'GREENFIELD', 7594, 3, 'PAID', 'PAYPAL', '2022-12-03'),
(33, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 5, 1500, 'GREENFIELD', 9632, 3, 'PAID', 'STRIPE', '2022-12-03'),
(34, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'MOA', 9730, 3, 'PAID', 'PAYPAL', '2022-12-04'),
(35, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 300, 10, 3000, 'MOA', 7228, 3, 'PAID', 'PAYPAL', '2022-12-04'),
(36, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 300, 10, 3000, 'MOA', 8950, 3, 'UNPAID', 'PAYPAL', '2022-12-08'),
(37, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-09', 300, 5, 1500, 'GREENFIELD', 9328, 3, 'PAID', 'PAYPAL', '2022-12-08'),
(38, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 5, 2500, 'GREENFIELD', 8350, 2, 'PAID', 'PAYPAL', '2022-12-08'),
(39, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 300, 5, 1500, 'GREENFIELD', 9785, 3, 'UNPAID', 'PAYPAL', '2022-12-08'),
(40, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-16', 300, 2, 600, 'GREENFIELD', 8049, 3, 'PAID', 'STRIPE', '2022-12-08'),
(41, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 500, 2, 1000, 'MOA', 6673, 2, 'UNPAID', 'GCASH', '2022-12-08'),
(42, 'tricore012@gmail.com', '#51823414621324', '09166513189', 'Gerald Mico Mico devcore', '2023-03-13', 300, 2, 600, 'GREENFIELD', 9879, 3, 'UNPAID', 'GCASH', '2022-12-08'),
(43, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-15', 300, 5, 1500, 'GREENFIELD', 8495, 3, 'UNPAID', 'GCASH', '2022-12-08'),
(44, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 300, 20, 6000, 'GREENFIELD', 7329, 3, 'UNPAID', 'PAYPAL', '2022-12-08'),
(45, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-21', 300, 10, 3000, 'GREENFIELD', 9342, 3, 'PAID', 'PAYPAL', '2022-12-08'),
(46, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-09', 300, 10, 3000, 'GREENFIELD', 7936, 3, 'UNPAID', 'PAYPAL', '2022-12-09'),
(47, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 300, 10, 3000, 'MOA', 9917, 3, 'UNPAID', 'PAYPAL', '2022-12-09'),
(48, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-23', 10, 10, 100, 'MOA', 8792, 2, 'PAID', 'PAYPAL', '2022-12-09'),
(49, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 10, 10, 100, 'MOA', 7493, 3, 'VERIFIED', 'PAYPAL', '2022-12-09'),
(50, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 10, 5, 50, 'GREENFIELD', 7092, 2, 'UNPAID', 'PAYPAL', '2022-12-09'),
(51, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-16', 10, 10, 100, 'MOA', 7022, 3, 'UNPAID', 'PAYPAL', '2022-12-11'),
(52, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-09', 10, 10, 100, 'CENTRIS', 6856, 3, 'UNPAID', 'STRIPE', '2022-12-11'),
(53, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 10, 10, 100, 'MOA', 9136, 3, 'UNPAID', 'PAYPAL', '2022-12-11'),
(54, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 10, 10, 100, 'GREENFIELD', 8496, 2, 'UNPAID', 'PAYPAL', '2022-12-11'),
(55, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-22', 10, 10, 100, 'GREENFIELD', 7392, 3, 'VERIFIED', 'PAYPAL', '2022-12-11'),
(56, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 10, 10, 100, 'GREENFIELD', 7893, 3, 'VERIFIED', 'PAYPAL', '2022-12-11'),
(57, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2023-03-01', 10, 10, 100, 'GREENFIELD', 8291, 3, 'VERIFIED', 'PAYPAL', '2022-12-11'),
(58, 'tricore012@gmail.com', '5245', '09166513189', 'Gerald Mico Mico devcore', '2023-03-08', 10, 10, 100, 'GREENFIELD', 6854, 3, 'PAID', 'GCASH', '2022-12-11'),
(59, 'tricore012@gmail.com', '45531223452', '09166513189', 'Gerald Mico Mico devcore', '2023-03-15', 10, 10, 100, 'GREENFIELD', 7526, 3, 'PAID', 'GCASH', '2022-12-11'),
(60, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-22', 10, 10, 100, 'GREENFIELD', 9581, 3, 'VERIFIED', 'STRIPE', '2022-12-11'),
(61, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 10, 10, 100, 'MOA', 8003, 2, 'VERIFIED', 'PAYPAL', '2023-01-12'),
(62, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2022-10-23', 10, 2, 20, 'GREENFIELD', 7249, 2, 'VERIFIED', 'PAYPAL', '2023-01-12'),
(63, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2023-03-02', 10, 2, 20, 'GREENFIELD', 9979, 3, 'VERIFIED', 'GCASH', '2023-01-12'),
(64, 'obgesilva31@gmail.com', '', '09271419154', 'ob gesilva', '2022-10-24', 10, 4, 40, 'GREENFIELD', 6781, 2, 'UNPAID', 'PAYPAL', '2023-01-16'),
(65, 'obgesilva31@gmail.com', '', '09271419154', 'ob gesilva', '2022-10-24', 10, 4, 40, 'GREENFIELD', 7009, 2, 'UNPAID', 'PAYPAL', '2023-01-16'),
(66, 'obgesilva31@gmail.com', '', '09271419154', 'ob gesilva', '2022-10-24', 10, 4, 40, 'GREENFIELD', 9233, 2, 'UNPAID', 'PAYPAL', '2023-01-16'),
(67, 'obgesilva31@gmail.com', '', '09271419154', 'ob gee', '2023-03-31', 10, 5, 50, 'MOA', 9916, 3, 'UNPAID', 'PAYPAL', '2023-01-16'),
(68, 'obgesilva31@gmail.com', '', '09271419154', 'ob geess', '2022-10-22', 10, 2, 20, 'MOA', 8884, 2, 'UNPAID', 'PAYPAL', '2023-01-16'),
(69, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2022-10-24', 10, 2, 20, 'GREENFIELD', 8426, 2, 'UNPAID', 'PAYPAL', '2023-01-16'),
(70, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2022-10-24', 10, 2, 20, 'GREENFIELD', 8121, 2, 'VERIFIED', 'PAYPAL', '2023-01-16'),
(71, 'tricore012@gmail.com', '', '09983032537', 'Toggle MiniMap Minimap', '2023-03-16', 10, 2, 20, 'GREENFIELD', 9103, 3, 'VERIFIED', 'PAYPAL', '2023-01-16'),
(72, 'obgesilva31@gmail.com', '', '09271419154', 'ob geesil', '2022-10-24', 10, 4, 40, 'MOA', 8049, 2, 'UNPAID', 'PAYPAL', '2023-01-17'),
(73, 'obgesilva31@gmail.com', '', '09271419154', 'Ob geeee', '2022-10-24', 10, 2, 20, 'MOA', 7769, 2, 'VERIFIED', 'PAYPAL', '2023-01-18'),
(74, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2022-10-24', 10, 1, 10, 'GREENFIELD', 9378, 2, 'VERIFIED', 'PAYPAL', '2023-01-18'),
(75, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-22', 10, 1, 10, 'GREENFIELD', 8828, 3, 'VERIFIED', 'PAYPAL', '2023-01-18'),
(76, 'obgesilva31@gmail.com', '', '09271419154', 'ob geesa', '2023-02-28', 1, 4, 4, 'MOA', 6909, 5, 'VERIFIED', 'PAYPAL', '2023-01-18'),
(77, 'demonyita02022@gmail.com', '', '09489448691', 'de monya', '2023-01-28', 1, 12, 12, 'GREENFIELD', 8912, 4, 'CANCELLED', 'PAYPAL', '2023-01-18'),
(78, 'demonyita02022@gmail.com', '', '09489448691', 'de monya', '2023-01-28', 1, 12, 12, 'MOA', 8470, 4, 'CANCELLED', 'PAYPAL', '2023-01-18'),
(79, 'demonyita02022@gmail.com', '', '09054280862', 'de monya', '2023-02-04', 1, 12, 12, 'MOA', 7766, 5, 'UNPAID', 'PAYPAL', '2023-01-18'),
(80, 'obgesilva31@gmail.com', '', '09271419154', 'ob gesa', '2022-10-24', 10, 18, 180, 'MOA', 7352, 2, 'VERIFIED', 'PAYPAL', '2023-01-18'),
(81, 'demonyita02022@gmail.com', '', '09054280862', 'de monya', '2023-01-28', 1, 12, 12, 'GREENFIELD', 8952, 4, 'UNPAID', 'GCASH', '2023-01-19'),
(82, 'demonyita02022@gmail.com', '', '09489448691', 'de monya', '2023-02-14', 1, 2, 2, 'GREENFIELD', 8850, 5, 'PAID', 'GCASH', '2023-01-19'),
(83, 'demonyita02022@gmail.com', '', '09489448691', 'de monya', '0000-00-00', 1, 3, 3, 'CENTRIS', 8332, 5, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(84, 'demonyita02022@gmail.com', '', '09489448691', 'de monya', '2023-03-14', 2, 4, 8, 'GREENFIELD', 6760, 6, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(85, 'obgesilva31@gmail.com', '', '09271419154', 'ob gesilvas', '2023-03-29', 10, 4, 40, 'GREENFIELD', 7562, 3, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(86, 'obgesilva31@gmail.com', '', '09271419154', 'ob geeeee', '2023-03-30', 10, 2, 20, 'MOA', 9289, 3, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(87, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-21', 10, 10, 100, 'GREENFIELD', 9941, 3, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(88, 'lalagunaz20100@gmail.com', '', '09054280862', 'de monya', '2023-03-12', 2, 5, 10, 'CENTRIS', 7976, 6, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(89, 'obgesilva31@gmail.com', '', '09271419154', 'ob gessse', '2023-01-31', 1, 5, 5, 'MOA', 9440, 4, 'VERIFIED', 'GCASH', '2023-01-19'),
(90, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-03-17', 10, 10, 100, 'GREENFIELD', 8849, 3, 'VERIFIED', 'GCASH', '2023-01-19'),
(91, 'tricore012@gmail.com', '', '09166513189', 'Gerald Mico Mico devcore', '2023-01-23', 1, 1, 1, 'GREENFIELD', 7156, 4, 'VERIFIED', 'GCASH', '2023-01-19'),
(92, 'zyrelllalaguna@gmail.com', '', '09054280862', 'Zy rell', '2023-04-01', 10, 12, 120, 'GREENFIELD', 7779, 7, 'UNPAID', 'GCASH', '2023-01-19'),
(93, 'gekat62914@quamox.com', '', '09054280862', 'de monyita', '2023-04-02', 10, 12, 120, 'CENTRIS', 8616, 7, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(94, 'gekat62914@quamox.com', '', '09048278243', 'geee kaaattt', '2023-04-08', 10, 5, 50, 'GREENFIELD', 7148, 7, 'UNPAID', 'PAYPAL', '2023-01-19'),
(95, 'gekat62914@quamox.com', '', '12345', 'quuaaaa moxxxx', '2023-03-11', 2, 10, 20, 'GREENFIELD', 9297, 6, 'VERIFIED', 'GCASH', '2023-01-19'),
(96, 'gekat62914@quamox.com', '', '234421', 'quuaaaa moxxxx', '2023-01-29', 1, 20, 20, 'GREENFIELD', 9335, 4, 'UNPAID', 'PAYPAL', '2023-01-19'),
(97, 'gekat62914@quamox.com', '', '234421', 'quuaaaa moxxxx', '2023-01-29', 1, 20, 20, 'MOA', 6946, 4, 'UNPAID', 'PAYPAL', '2023-01-19'),
(98, 'zyrelllalaguna@gmail.com', '', '1123123342', 'Zy rell', '2023-02-01', 1, 4, 4, 'CENTRIS', 9672, 4, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(99, 'gekat62914@quamox.com', '', '1123123342', 'Zy rell', '2023-02-09', 1, 1000, 1000, 'GREENFIELD', 8059, 5, 'VERIFIED', 'GCASH', '2023-01-19'),
(100, 'zyrelllalaguna@gmail.com', '', '224353677', 'haayyy nakuuuu', '2023-04-08', 10, 6, 60, 'GREENFIELD', 7135, 7, 'UNPAID', 'PAYPAL', '2023-01-19'),
(101, 'vivider233@nevyxus.com', '', '123344256', 'VIVIDER23333', '2023-01-28', 1, 10, 10, 'GREENFIELD', 8474, 4, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(102, 'vivider233@nevyxus.com', '', '1123123342', 'VIVIDER23333', '2023-01-29', 1, 10, 10, 'GREENFIELD', 7995, 4, 'RESERVE', '', '2023-01-19'),
(103, 'vivider233@nevyxus.com', '', '1123123342', 'VIVIDER23333', '2023-03-04', 2, 5, 10, 'CENTRIS', 7827, 6, 'UNPAID', 'GCASH', '2023-01-19'),
(104, 'vivider233@nevyxus.com', '', '1123123342', 'VIVIDER23333', '2023-04-30', 10, 5, 50, 'GREENFIELD', 9313, 7, 'UNPAID', 'GCASH', '2023-01-19'),
(105, 'nicowydo@ema-sofia.eu', '', '1123123342', 'nicow dyyy', '2023-04-30', 5, 5, 25, 'GREENFIELD', 7177, 9, 'UNPAID', 'PAYPAL', '2023-01-19'),
(106, 'nicowydo@ema-sofia.eu', '', '1123123342', 'nicow dyyy', '2023-04-15', 5, 5, 25, 'CENTRIS', 9102, 9, 'UNPAID', 'GCASH', '2023-01-19'),
(107, 'nicowydo@ema-sofia.eu', '', '1123123342', 'nicow dyyy', '2023-04-22', 5, 5, 25, 'GREENFIELD', 7409, 9, 'UNPAID', 'GCASH', '2023-01-19'),
(108, 'nicowydo@ema-sofia.eu', '', '1123123342', 'VIVIDER23333', '2023-04-05', 5, 5, 25, 'MOA', 7529, 9, 'RESERVE', '', '2023-01-19'),
(109, 'nicowydo@ema-sofia.eu', '', '1123123342', 'VIVIDER23333', '2023-04-03', 5, 7, 35, 'GREENFIELD', 7839, 9, 'RESERVE', '', '2023-01-19'),
(110, 'nicowydo@ema-sofia.eu', '', '1123123342', 'ammmm boottt', '2023-03-23', 10, 3, 30, 'MOA', 8382, 3, 'UNPAID', 'GCASH', '2023-01-19'),
(111, 'nicowydo@ema-sofia.eu', '', '1123123342', 'fisssss teeeeehhh', '2023-04-22', 5, 4, 20, 'GREENFIELD', 7769, 9, 'UNPAID', 'GCASH', '2023-01-19'),
(112, 'nicowydo@ema-sofia.eu', '', '1', 'fisssss teeeeehhh', '2023-04-07', 5, 6, 30, 'CENTRIS', 9374, 9, 'UNPAID', 'PAYPAL', '2023-01-19'),
(113, 'nicowydo@ema-sofia.eu', '', '1123123342', 'fisssss teeeeehhh', '2023-04-20', 5, 3, 15, 'CENTRIS', 8462, 9, 'VERIFIED', 'GCASH', '2023-01-19'),
(114, 'nicowydo@ema-sofia.eu', '', '1123123342', 'fisssss teeeeehhh', '2023-04-19', 10, 8, 80, 'MOA', 9004, 8, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(115, 'nicowydo@ema-sofia.eu', '', '1123123342', 'ammmm boottt', '2023-04-30', 5, 4, 20, 'GREENFIELD', 7791, 9, 'UNPAID', 'PAYPAL', '2023-01-19'),
(116, 'obgesilva31@gmail.com', '', '09271419154', 'ob geees', '2023-03-31', 10, 5, 50, 'GREENFIELD', 7259, 3, 'VERIFIED', 'PAYPAL', '2023-01-19'),
(117, 'nicowydo@ema-sofia.eu', '', '1123123342', 'VIVIDER23333', '0000-00-00', 10, 3, 30, 'GREENFIELD', 7586, 2, 'RESERVE', '', '2023-01-20'),
(118, 'icaonapo12345@gmail.com', '', '020202020202', 'sad', '2022-10-21', 10, 7, 70, 'MOA', 7844, 2, 'UNPAID', 'PAYPAL', '2023-01-20'),
(119, 'xafofev805@moneyzon.com', '', '09489448691', 'CHRIS TOPHER', '2023-03-11', 2, 12, 24, 'GREENFIELD', 8288, 6, 'UNPAID', 'PAYPAL', '2023-01-21'),
(120, 'xafofev805@moneyzon.com', '', '09489448691', 'nooaaaa', '2023-03-31', 10, 12, 120, 'GREENFIELD', 6943, 3, 'UNPAID', 'PAYPAL', '2023-01-21'),
(121, 'xafofev805@moneyzon.com', '', '09489448691', 'laaahh laahhhh', '2023-01-31', 1, 12, 12, 'MOA', 9058, 4, 'VERIFIED', 'PAYPAL', '2023-01-21'),
(122, 'xafofev805@moneyzon.com', '', '09489448691', 'XXXXXXX', '2023-01-30', 1, 12, 12, 'CENTRIS', 8913, 4, 'VERIFIED', 'STRIPE', '2023-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `fullname`, `code`, `status`, `date_created`) VALUES
(2, 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Gerald Mico Facistol', 990254, 'VALID', '2022-10-21'),
(4, 'zyrell210@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Zyrell Lalaguna', 0, 'VALID', '2023-01-17'),
(5, 'obgesilva31@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Ob Gesilva', 0, 'VALID', '2023-01-17'),
(6, 'zyrelllalaguna@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Zy rell', 68180, 'VALID', '2023-01-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto_mail_history`
--
ALTER TABLE `auto_mail_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `email_security`
--
ALTER TABLE `email_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_post`
--
ALTER TABLE `my_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proceed_to_pay`
--
ALTER TABLE `proceed_to_pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto_mail_history`
--
ALTER TABLE `auto_mail_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_security`
--
ALTER TABLE `email_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `my_post`
--
ALTER TABLE `my_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proceed_to_pay`
--
ALTER TABLE `proceed_to_pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
