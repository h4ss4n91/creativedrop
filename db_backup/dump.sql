-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 10:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdweb_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(350) DEFAULT NULL,
  `title` varchar(350) DEFAULT NULL,
  `short_description` varchar(350) DEFAULT NULL,
  `link` varchar(350) DEFAULT NULL,
  `service` varchar(150) DEFAULT NULL,
  `sub_category` varchar(150) DEFAULT NULL,
  `industry` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `name`, `page_id`, `image`, `title`, `short_description`, `link`, `service`, `sub_category`, `industry`, `created_at`, `updated_at`) VALUES
(9, 'slider1234', NULL, 'No-image-png-1.png', 'asdfasd12344321', 'fasdfasdf122343321', 'button link', '1', '3', '2', '2021-12-27 04:48:15', '2021-12-27 04:48:15'),
(10, 'slider 1', 18, 'image3.jpg', 'sdfaf', 'asdfads', NULL, '1', '1', '3', '2021-12-27 04:48:15', '2021-12-27 04:48:15'),
(15, 'First', NULL, 'portfolio-1.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '1', '2022-01-07 11:37:29', '2022-01-07 11:37:29'),
(16, 'case-study', NULL, 'portfolio-1.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '2', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(17, 'case-study', NULL, 'portfolio-2.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '1', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(18, 'case-study', NULL, 'portfolio-3.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '3', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(19, 'case-study', NULL, 'portfolio-4.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '2', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(20, 'case-study', NULL, 'portfolio-1.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '2', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(21, 'case-study', NULL, 'portfolio-2.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '3', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(22, 'case-study', NULL, 'portfolio-3.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '1', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(23, 'case-study', NULL, 'portfolio-4.jpg', 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1', '1', '2', '2022-01-18 13:05:19', '2022-01-18 13:05:19'),
(24, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:22:31', '2022-02-11 05:22:31'),
(25, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:25:30', '2022-02-11 05:25:30'),
(26, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:26:49', '2022-02-11 05:26:49'),
(27, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:27:47', '2022-02-11 05:27:47'),
(28, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:30:14', '2022-02-11 05:30:14'),
(29, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:31:34', '2022-02-11 05:31:34'),
(30, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:32:04', '2022-02-11 05:32:04'),
(31, 'new', NULL, 'image.jpg', 'new', 'testing case study', NULL, NULL, NULL, NULL, '2022-02-11 05:32:38', '2022-02-11 05:32:38'),
(32, 'newone', NULL, 'cs-00.jpg', 'Case Study Title', 'testing description, testing description, testing description, testing description, testing description, testing description, testing description, testing description,', NULL, NULL, NULL, NULL, '2022-02-11 05:35:52', '2022-02-11 05:35:52'),
(33, 'newone', NULL, 'cs-00.jpg', 'Case Study Title', 'testing description, testing description, testing description, testing description, testing description, testing description, testing description, testing description,', NULL, NULL, NULL, NULL, '2022-02-11 05:36:41', '2022-02-11 05:36:41'),
(34, 'newone', NULL, 'cs-00.jpg', 'Case Study Title', 'testing description, testing description, testing description, testing description, testing description, testing description, testing description, testing description,', NULL, NULL, NULL, NULL, '2022-02-11 05:37:34', '2022-02-11 05:37:34'),
(35, 'testing', NULL, 'cs-00.jpg', 'testing', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(36, 'case study 1', NULL, 'cs-00.jpg', 'case study 1', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-14 09:45:09', '2022-02-14 09:45:09'),
(38, 'case study 1', NULL, 'cs-01.jpg', 'title 2', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-14 10:09:34', '2022-02-14 10:09:34'),
(40, 'case study 1', NULL, 'cs-02.jpg', 'Title 3', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(41, 'case study 1', NULL, 'image.jpg', 'title 4', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(42, 'Testing Section Name', NULL, 'cs-00.jpg', 'testing Case Study title', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 16:08:05', '2022-02-15 16:08:05'),
(43, 'Testing Section Name', NULL, 'cs-00.jpg', 'testing Case Study title', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 16:09:15', '2022-02-15 16:09:15'),
(44, 'Section Name 3', NULL, 'cs-00.jpg', 'Title', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(45, 'asdfas', NULL, 'cs-04.jpg', 'asdfasdf', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 19:04:20', '2022-02-15 19:04:20'),
(46, 'asdfas', NULL, 'cs-04.jpg', 'asdfasdf', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(47, 'asdfasdfasd', NULL, 'cs-00.jpg', 'asdfasdfs', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 20:55:30', '2022-02-15 20:55:30'),
(48, 'asdfasdfasd', NULL, 'cs-00.jpg', 'asdfasdfs', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 20:56:23', '2022-02-15 20:56:23'),
(49, 'asdfasdfasd', NULL, 'cs-00.jpg', 'asdfasdfs', 'Infographics, Company Profile & Video', NULL, NULL, NULL, NULL, '2022-02-15 20:57:11', '2022-02-15 20:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_content`
--

CREATE TABLE `case_study_content` (
  `id` int(11) NOT NULL,
  `case_study_id` int(11) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `type` varchar(150) DEFAULT NULL,
  `video_link` varchar(150) DEFAULT NULL,
  `image_style` varchar(150) DEFAULT NULL,
  `video_style` varchar(150) DEFAULT NULL,
  `video_background` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study_content`
--

INSERT INTO `case_study_content` (`id`, `case_study_id`, `image`, `type`, `video_link`, `image_style`, `video_style`, `video_background`, `created_at`, `updated_at`) VALUES
(29, 35, 'cs-00.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(30, 35, 'cs-01.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(31, 35, 'cs-02.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(32, 35, 'cs-03.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(33, 35, 'cs-04.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(34, 35, 'cs-05.jpg', 'image', NULL, NULL, NULL, NULL, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(35, 44, NULL, 'image1', NULL, NULL, NULL, NULL, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(36, 44, NULL, 'video2', 'https://youtu.be/xLhNP0qp38Q', NULL, NULL, NULL, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(37, 44, NULL, 'image3', NULL, NULL, NULL, NULL, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(38, 44, NULL, 'video4', 'https://youtu.be/xLhNP0qp38Q', NULL, NULL, NULL, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(39, 46, NULL, 'image1', NULL, NULL, NULL, NULL, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(40, 46, NULL, 'video2', 'https://youtu.be/xLhNP0qp38Q', NULL, NULL, NULL, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(41, 46, NULL, 'video3', 'https://youtu.be/xLhNP0qp38Q', NULL, NULL, NULL, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(42, 49, NULL, 'image1', NULL, NULL, NULL, NULL, '2022-02-15 20:57:11', '2022-02-15 20:57:11'),
(43, 49, NULL, 'video2', 'https://youtu.be/xLhNP0qp38Q', NULL, 'cs-yt-video2', 'C:\\xamppNew\\tmp\\php7A02.tmp', '2022-02-15 20:57:11', '2022-02-15 20:57:11'),
(44, 49, NULL, 'image3', NULL, NULL, NULL, NULL, '2022-02-15 20:57:11', '2022-02-15 20:57:11'),
(45, 49, NULL, 'video4', 'https://youtu.be/xLhNP0qp38Q', NULL, 'cs-yt-video4', 'C:\\xamppNew\\tmp\\php7A61.tmp', '2022-02-15 20:57:11', '2022-02-15 20:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_industries`
--

CREATE TABLE `case_study_industries` (
  `id` int(11) NOT NULL,
  `case_study_id` int(11) NOT NULL,
  `industry_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study_industries`
--

INSERT INTO `case_study_industries` (`id`, `case_study_id`, `industry_id`, `created_at`, `updated_at`) VALUES
(8, 35, 6, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(9, 35, 7, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(10, 35, 8, '2022-02-11 06:19:44', '2022-02-11 06:19:44'),
(11, 35, 9, '2022-02-11 06:19:44', '2022-02-11 06:19:44'),
(12, 37, 6, '2022-02-14 09:45:45', '2022-02-14 09:45:45'),
(13, 39, 6, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(14, 39, 8, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(15, 39, 11, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(16, 40, 7, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(17, 40, 6, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(18, 40, 11, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(19, 41, 37, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(20, 41, 12, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(21, 41, 11, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(22, 44, 6, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(23, 44, 7, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(24, 44, 8, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(25, 46, 6, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(26, 46, 7, '2022-02-15 19:11:32', '2022-02-15 19:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `case_study_services`
--

CREATE TABLE `case_study_services` (
  `id` int(11) NOT NULL,
  `case_study_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sub_service_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study_services`
--

INSERT INTO `case_study_services` (`id`, `case_study_id`, `service_id`, `sub_service_id`, `created_at`, `updated_at`) VALUES
(16, 35, 1, 1, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(17, 35, 2, 2, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(18, 35, 3, 17, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(19, 35, 4, 15, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(20, 35, 5, 14, '2022-02-11 06:19:43', '2022-02-11 06:19:43'),
(21, 37, 1, 1, '2022-02-14 09:45:45', '2022-02-14 09:45:45'),
(22, 37, 1, 3, '2022-02-14 09:45:45', '2022-02-14 09:45:45'),
(23, 37, 2, 6, '2022-02-14 09:45:45', '2022-02-14 09:45:45'),
(24, 37, 2, 7, '2022-02-14 09:45:45', '2022-02-14 09:45:45'),
(25, 39, 3, 10, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(26, 39, 3, 11, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(27, 39, 4, 14, '2022-02-14 10:10:24', '2022-02-14 10:10:24'),
(28, 40, 1, 3, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(29, 40, 5, 18, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(30, 40, 3, 11, '2022-02-14 10:24:54', '2022-02-14 10:24:54'),
(31, 41, 3, 9, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(32, 41, 4, 1, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(33, 41, 2, 6, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(34, 41, 4, 14, '2022-02-14 10:26:13', '2022-02-14 10:26:13'),
(35, 44, 1, 1, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(36, 44, 1, 2, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(37, 44, 1, 3, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(38, 44, 1, 4, '2022-02-15 16:14:45', '2022-02-15 16:14:45'),
(39, 46, 1, 2, '2022-02-15 19:11:32', '2022-02-15 19:11:32'),
(40, 46, 1, 2, '2022-02-15 19:11:32', '2022-02-15 19:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `child_menus`
--

CREATE TABLE `child_menus` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(255) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `featured_service` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_menus`
--

INSERT INTO `child_menus` (`id`, `menu_id`, `item_name`, `item_link`, `sorting`, `featured_service`, `created_at`, `updated_at`) VALUES
(1, '1', 'Logo Design', 'logo-design', 1, NULL, '2021-07-24 16:19:15', '2021-07-24 16:19:15'),
(2, '1', 'Graphic Design', 'graphic-design', 2, NULL, '2021-07-24 16:19:24', '2021-07-24 16:19:24'),
(3, '1', 'Brochures', 'brouchers', NULL, 'No', '2021-07-24 16:19:32', '2021-07-24 16:19:32'),
(4, '1', 'Presentations', 'presentations', NULL, NULL, '2021-07-24 16:19:42', '2021-07-24 16:19:42'),
(5, '2', 'Product Design', 'product-design', NULL, NULL, '2021-07-24 16:20:15', '2021-07-24 16:20:15'),
(6, '2', 'Websites', 'websites', NULL, NULL, '2021-07-24 16:20:22', '2021-07-24 16:20:22'),
(7, '2', 'Mobile Apps', 'mobile-apps', NULL, NULL, '2021-07-24 16:20:29', '2021-07-24 16:20:29'),
(8, '2', 'Support', 'support', NULL, NULL, '2021-07-24 16:20:36', '2021-07-24 16:20:36'),
(9, '3', 'Videography', 'videography', NULL, NULL, '2021-07-24 16:20:50', '2021-07-24 16:20:50'),
(10, '3', 'Photography', 'photography', NULL, NULL, '2021-07-24 16:20:58', '2021-07-24 16:20:58'),
(11, '3', '3D Animation\r\n', '3d-animation', NULL, NULL, '2021-07-24 16:21:06', '2021-07-24 16:21:06'),
(12, '3', '2D Animation\r\n', '2d-animation', NULL, NULL, '2021-07-24 16:21:14', '2021-07-24 16:21:14'),
(13, '4', 'Digital Marketing', 'digital-marketing', NULL, NULL, '2021-07-24 16:21:29', '2021-07-24 16:21:29'),
(14, '4', 'Social Media Marketing', 'social-media-marketing', NULL, NULL, '2021-07-24 16:21:35', '2021-07-24 16:21:35'),
(15, '4', 'Consultancy', 'consultancy', NULL, NULL, '2021-07-24 16:21:42', '2021-07-24 16:21:42'),
(16, '5', 'Design Services', 'design-services', NULL, NULL, '2021-07-24 16:23:52', '2021-07-24 16:23:52'),
(17, '5', 'Website & Mobile Apps', 'website-and-mobile-apps', NULL, NULL, '2021-07-24 16:23:57', '2021-07-24 16:23:57'),
(18, '5', 'Videos & Photography', NULL, NULL, NULL, '2021-07-24 16:24:03', '2021-07-24 16:24:03'),
(19, '5', '3D & 2D Animation', '3D-2D-Animation', NULL, 'No', '2021-07-24 16:24:10', '2021-07-24 16:24:10'),
(20, '5', 'Consultancy Services', NULL, NULL, NULL, '2021-07-24 16:24:15', '2021-07-24 16:24:15'),
(21, '5', 'Digital Marketing\r\n', NULL, NULL, NULL, '2021-07-24 16:24:23', '2021-07-24 16:24:23'),
(22, '6', 'Agency', NULL, NULL, NULL, '2021-07-24 16:24:51', '2021-07-24 16:24:51'),
(23, '6', 'Services', NULL, NULL, NULL, '2021-07-24 16:24:57', '2021-07-24 16:24:57'),
(24, '6', 'Industries', NULL, NULL, NULL, '2021-07-24 16:25:09', '2021-07-24 16:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `clientandparterimage`
--

CREATE TABLE `clientandparterimage` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientandparterimage`
--

INSERT INTO `clientandparterimage` (`id`, `page_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(9, 18, 'Home Section 1', 'team-1.jpg', '2021-12-28 12:44:53', '2021-12-28 12:44:53'),
(10, NULL, 'Home Section 1', 'No-image-png-1.png', '2021-12-28 12:44:53', '2021-12-28 12:44:53'),
(12, NULL, 'client group 8', 'image1.jpg', '2021-12-30 15:07:21', '2021-12-30 15:07:21'),
(13, NULL, 'client group 8', 'imaeg2.jpg', '2021-12-30 15:07:21', '2021-12-30 15:07:21'),
(14, NULL, 'clients and partners', 'client-1.png', '2022-01-08 09:43:42', '2022-01-08 09:43:42'),
(15, NULL, 'clients and partners', 'client-2.png', '2022-01-08 09:43:42', '2022-01-08 09:43:42'),
(16, NULL, 'clients and partners', 'client-3.png', '2022-01-08 09:43:42', '2022-01-08 09:43:42'),
(17, NULL, 'clients and partners', 'client-1.png', '2022-01-08 09:43:42', '2022-01-08 09:43:42'),
(18, NULL, 'clients and partners', 'client-2.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(19, NULL, 'clients and partners', 'client-3.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(20, NULL, 'clients and partners', 'client-1.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(21, NULL, 'clients and partners', 'client-2.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(22, NULL, 'clients and partners', 'client-3.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(23, NULL, 'clients and partners', 'client-1.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(24, NULL, 'clients and partners', 'client-2.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43'),
(25, NULL, 'clients and partners', 'client-3.png', '2022-01-08 09:43:43', '2022-01-08 09:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE `components` (
  `id` int(11) NOT NULL,
  `component_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `image3` text DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `video` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `components`
--

INSERT INTO `components` (`id`, `component_id`, `title`, `body`, `link`, `image1`, `image2`, `image3`, `button_text`, `button_link`, `video`, `created_at`, `updated_at`) VALUES
(7, 10, 'Shapoorji Pollonji', '<p>Infographics, Company Profile &amp; Video</p>', NULL, '1627061156m.jpg', '1627061156l.jpg', NULL, 'Construction', 'branding-sevices', NULL, '2021-07-23 12:25:56', '2021-07-24 16:58:14'),
(8, 10, 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1627072636m.jpg', '1627072636l.jpg', NULL, 'Construction', 'test', NULL, '2021-07-23 15:37:16', '2021-07-23 15:37:16'),
(9, 10, 'Shapoorji Pollonji', 'Infographics, Company Profile & Video', NULL, '1627072798m.jpg', '1627072798l.jpg', NULL, 'Construction', 'Test', NULL, '2021-07-23 15:39:58', '2021-07-23 15:39:58'),
(10, 10, 'Test', 'This is a testing mesage', NULL, '1627076190m.jpg', '1627076190l.jpg', NULL, 'tes', 'stes', NULL, '2021-07-23 16:36:30', '2021-07-23 16:36:30'),
(11, 14, '-', '-', NULL, '1627117442m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:02', '2021-07-24 04:04:02'),
(12, 14, '-', '-', NULL, '1627117460m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:20', '2021-07-24 04:04:20'),
(13, 14, '-', '-', NULL, '1627117471m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:04:31', '2021-07-24 04:04:31'),
(14, 14, '-', '-', NULL, '1627118082m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:14:42', '2021-07-24 04:14:42'),
(15, 14, '-', '-', NULL, '1627118094m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:14:54', '2021-07-24 04:14:54'),
(16, 14, '-', '-', NULL, '1627118144m.png', '', NULL, '-', '-', NULL, '2021-07-24 04:15:44', '2021-07-24 04:15:44'),
(17, 6, 'FMCG', '-', NULL, '1627118375m.jpg', '', NULL, '-', 'work', NULL, '2021-07-24 04:19:35', '2021-07-24 04:25:23'),
(18, 6, 'Construction', '-', NULL, '1627118396m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:19:56', '2021-07-24 04:19:56'),
(19, 6, 'Gold Trading', '-', NULL, '1627118419m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:20:19', '2021-07-24 04:20:19'),
(20, 6, 'Interior', '-', NULL, '1627118440m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:20:40', '2021-07-24 04:20:40'),
(21, 6, 'FMCG', '-', NULL, '1627118478m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:21:18', '2021-07-24 04:21:18'),
(22, 6, 'FMCG', '-', NULL, '1627118502m.jpg', '', NULL, '-', '#', NULL, '2021-07-24 04:21:42', '2021-07-24 04:21:42'),
(23, 15, 'Hello this is a testing message', '<p>-</p>', NULL, '1627120496m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:54:56', '2021-07-24 05:08:01'),
(24, 15, 'Rebranding of Alhamad Switchgear by Creat...', '<p>-</p>', NULL, '1627120529m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:55:29', '2021-07-24 04:55:29'),
(25, 15, 'Rebranding of Alhamad Switchgear by Creat...', '<p>-</p>', NULL, '1627120557m.png', '', NULL, 'Design & Branding', '#', NULL, '2021-07-24 04:55:57', '2021-07-24 04:55:57'),
(26, 12, 'CreativeDrop Agency', '<p>Designing, Branding &amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:42:14', '2021-07-26 05:26:12'),
(27, 12, 'Creative Agency', '<p>Designing, Branding &amp;amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:43:42', '2021-07-26 04:43:42'),
(28, 12, 'Creative Agency', '<p>Designing, Branding &amp;amp; Marketing Services</p>', NULL, '', '', NULL, 'Learn more', '#', NULL, '2021-07-26 04:44:10', '2021-07-26 04:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `phone` varchar(150) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `message` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(28, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, 'testing message', '2022-01-08 22:09:50', '2022-01-08 22:09:50'),
(27, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, NULL, '2022-01-08 12:55:04', '2022-01-08 12:55:04'),
(26, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, 'testing message', '2022-01-08 08:46:05', '2022-01-08 08:46:05'),
(25, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, 'Testing Message', '2022-01-08 08:31:31', '2022-01-08 08:31:31'),
(24, 'Faiz', 'Awan', 'admin@gmail.com', '3123762039', NULL, 'testing message', '2022-01-08 07:09:59', '2022-01-08 07:09:59'),
(23, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, 'asdfasdf asfd', '2022-01-08 07:08:11', '2022-01-08 07:08:11'),
(22, 'Ahmed', 'Ali', 'ahmed@gmail.com', '123456789', NULL, 'jhk gjhg kjgh kjhj', '2022-01-08 07:04:55', '2022-01-08 07:04:55'),
(29, 'Faiz', 'Awan', 'admin@gmail.com', '1232313', NULL, 'testing testing', '2022-02-05 04:14:04', '2022-02-05 04:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobsold`
--

CREATE TABLE `failed_jobsold` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_bottoms`
--

CREATE TABLE `footer_bottoms` (
  `id` int(11) NOT NULL,
  `city` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `copyright` varchar(260) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_bottoms`
--

INSERT INTO `footer_bottoms` (`id`, `city`, `address`, `copyright`, `created_at`, `updated_at`) VALUES
(4, 'Dubai', 'Fortune Tower, Cluster C, <br/> Jumeirah Lake Towers,\r\nDubai - United Arab Emirates', 'Creative Drop is a leading Creative Agency based in Dubai & New York. <br/> Copyright 2020 Creative Drop DMCC. All rights reserved.', '2022-02-07 06:04:57', '2022-02-07 06:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `footer_sections`
--

CREATE TABLE `footer_sections` (
  `id` int(11) NOT NULL,
  `section_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `menu` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_sections`
--

INSERT INTO `footer_sections` (`id`, `section_id`, `name`, `menu`, `link`, `created_at`, `updated_at`) VALUES
(10, 1, 'Agency', 'Leadership', 'leadership', '2022-01-07 10:53:05', '2022-01-07 10:53:05'),
(11, 1, 'Agency', 'Overview', 'overview', '2022-01-07 11:24:48', '2022-01-07 11:24:48'),
(12, 1, 'Agency', 'Services', 'services', '2022-01-07 11:29:02', '2022-01-07 11:29:02'),
(13, 3, 'Industries', 'FMCG', 'FMCG', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(14, 3, 'Industries', 'F&B', 'F&B', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(15, 3, 'Industries', 'Industrial', 'Industrial', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(16, 3, 'Industries', 'Technology', 'Technology', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(17, 3, 'Industries', 'Government', 'Government', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(18, 3, 'Industries', 'Aviation', 'Aviation', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(19, 3, 'Industries', 'Finance', 'Finance', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(20, 3, 'Industries', 'Trading', 'Trading', '2022-01-07 11:30:53', '2022-01-07 11:30:53'),
(22, 2, 'Services', 'Design Services', 'design-services', '2022-01-07 13:02:00', '2022-01-07 13:02:00'),
(23, 2, 'Services', 'Websites & mobile Apps', 'websites-mobile-apps', '2022-01-07 13:02:00', '2022-01-07 13:02:00'),
(24, 2, 'Services', 'Videos & photography', 'videos-photography', '2022-01-07 13:02:00', '2022-01-07 13:02:00'),
(25, 2, 'Services', '3D & 2D Animation', '3d-2d-animation', '2022-01-07 13:02:00', '2022-01-07 13:02:00'),
(26, 2, 'Services', 'Digital Marketing', 'digital-marketing', '2022-01-07 13:02:00', '2022-01-07 13:02:00'),
(27, 2, 'Services', 'Consultancy Services', 'consultancy-services', '2022-01-07 13:02:00', '2022-01-07 13:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `header_menu`
--

CREATE TABLE `header_menu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` enum('Active','Inactive') DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header_menu`
--

INSERT INTO `header_menu` (`id`, `item_name`, `item_link`, `created_at`, `updated_at`) VALUES
(1, 'Work', 'Active', '2021-07-17 02:35:39', '2021-07-17 02:35:39'),
(2, 'Designs', 'Active', '2021-07-17 02:35:46', '2021-07-17 02:35:46'),
(3, 'Web & App', 'Active', '2021-07-17 02:36:00', '2021-07-17 02:36:00'),
(4, 'Videos', 'Active', '2021-07-17 02:36:08', '2021-07-17 02:36:08'),
(5, 'Marketing', 'Active', '2021-07-17 02:36:17', '2021-07-17 02:36:17'),
(6, 'Contact Us', 'Active', '2021-07-17 02:36:28', '2021-07-17 02:36:28'),
(7, 'Agency', 'Active', '2021-07-17 02:36:37', '2021-07-17 02:36:37'),
(8, 'Insight', 'Active', '2021-07-17 02:36:50', '2021-07-17 02:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `page_id`, `service_id`, `sub_category_id`, `name`, `title`, `link`, `image`, `created_at`, `updated_at`) VALUES
(6, NULL, NULL, NULL, 'one', 'FMCG', NULL, 'creativebox-1.jpg', '2022-01-08 09:53:45', '2022-01-08 09:53:45'),
(7, NULL, NULL, NULL, 'one', 'Construction', NULL, 'creativebox-2.jpg', '2022-01-08 09:53:45', '2022-01-08 09:53:45'),
(8, NULL, NULL, NULL, 'one', 'Gold Trading', NULL, 'creativebox-3.jpg', '2022-01-08 09:53:45', '2022-01-08 09:53:45'),
(9, NULL, NULL, NULL, 'one', 'Fintech', NULL, 'creativebox-4.jpg', '2022-01-08 09:53:45', '2022-01-08 09:53:45'),
(10, NULL, NULL, NULL, 'one', 'FMCG', NULL, 'creativebox-1.jpg', '2022-01-18 13:34:17', '2022-01-18 13:34:17'),
(11, NULL, NULL, NULL, 'one', 'Construction', NULL, 'creativebox-2.jpg', '2022-01-18 13:34:18', '2022-01-18 13:34:18'),
(12, NULL, NULL, NULL, 'one', 'Gold Trading', NULL, 'creativebox-3.jpg', '2022-01-18 13:34:18', '2022-01-18 13:34:18'),
(37, NULL, NULL, NULL, 'testing987', 'IT industry', NULL, 'image.jpg', '2022-02-12 12:56:10', '2022-02-12 12:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `industry_services`
--

CREATE TABLE `industry_services` (
  `id` int(11) NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `sub_service_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry_services`
--

INSERT INTO `industry_services` (`id`, `industry_id`, `service_id`, `sub_service_id`, `created_at`, `updated_at`) VALUES
(1, 35, 1, 1, '2022-02-11 13:54:50', '2022-02-11 13:54:50'),
(2, 35, 1, 2, '2022-02-11 13:54:50', '2022-02-11 13:54:50'),
(3, 35, 1, 3, '2022-02-11 13:54:50', '2022-02-11 13:54:50'),
(4, 35, 1, 4, '2022-02-11 13:54:50', '2022-02-11 13:54:50'),
(5, 36, 1, 2, '2022-02-12 05:59:48', '2022-02-12 05:59:48'),
(6, 36, 1, 3, '2022-02-12 05:59:48', '2022-02-12 05:59:48'),
(7, 36, 3, 10, '2022-02-12 05:59:48', '2022-02-12 05:59:48'),
(8, 36, 2, 6, '2022-02-12 05:59:48', '2022-02-12 05:59:48'),
(9, 36, 1, 3, '2022-02-12 05:59:48', '2022-02-12 05:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'logo.png', '2022-01-03 05:55:16', '2022-01-03 05:55:16');

-- --------------------------------------------------------

--
-- Table structure for table `master_component`
--

CREATE TABLE `master_component` (
  `id` int(11) NOT NULL,
  `component_name` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_component`
--

INSERT INTO `master_component` (`id`, `component_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Header', '2021-07-23 15:24:39', NULL, NULL),
(2, 'Header Menu', '2021-07-23 15:24:44', NULL, NULL),
(3, 'Footer', '2021-07-23 15:25:08', NULL, NULL),
(4, 'Full-Footer', '2021-07-23 15:25:18', NULL, '2021-07-26 10:31:28'),
(5, 'Center-Black-Box', '2021-07-23 15:26:16', NULL, NULL),
(6, 'Creative-Slider', '2021-07-23 15:26:43', NULL, NULL),
(7, 'Discuss-Block', '2021-07-23 15:27:03', NULL, NULL),
(8, 'Get-A-Quote-Block', '2021-07-23 15:27:32', NULL, '2021-07-26 10:31:57'),
(9, 'Meet-Creative-Block', '2021-07-23 15:28:09', NULL, NULL),
(10, 'Portfolio-Block', '2021-07-23 15:28:35', NULL, NULL),
(11, 'Service-Block', '2021-07-23 15:28:51', NULL, NULL),
(12, 'Slider', '2021-07-23 15:29:04', NULL, NULL),
(13, 'Tile-Block', '2021-07-23 15:29:23', NULL, NULL),
(14, 'Partners', '2021-07-23 15:29:48', NULL, NULL),
(15, 'News & Opinions', '2021-07-24 09:48:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_link`, `sorting`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Designs', 'designs', 1, NULL, '2021-07-24 16:17:30', '2021-07-24 16:17:30'),
(2, 'Web & Apps', 'webapps', 2, NULL, '2021-07-24 16:17:38', '2021-07-24 16:17:38'),
(3, 'Videos', 'videos', 3, NULL, '2021-07-24 16:17:48', '2021-07-24 16:17:48'),
(4, 'Marketing', 'marketing', 4, NULL, '2021-07-24 16:17:58', '2021-07-24 16:17:58'),
(5, 'Services', 'servicesblock', 5, NULL, '2021-07-24 16:18:21', '2021-07-24 16:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrationsold`
--

CREATE TABLE `migrationsold` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrationsold`
--

INSERT INTO `migrationsold` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_and_opinions`
--

CREATE TABLE `news_and_opinions` (
  `id` int(11) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_and_opinions`
--

INSERT INTO `news_and_opinions` (`id`, `image`, `page_id`, `name`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'news.png', NULL, 'section 1', 'Design & Branding', 'Rebranding of Alhamad Switchgear by Creat...', 'link123', '2021-12-18 12:34:33', '2021-12-18 12:34:33'),
(2, 'news.png', NULL, 'section 1', 'Design', 'Rebranding of Alhamad Switchgear by Creat...', '#', '2021-12-18 12:36:53', '2021-12-18 12:36:53'),
(4, 'news.png', NULL, 'section 1', 'Design & Branding', 'Rebranding of Alhamad Switchgear by Creat...', '#', '2021-12-30 15:07:34', '2021-12-30 15:07:34'),
(5, 'news.png', NULL, NULL, 'Insight', 'News & Opinions', '#', '2022-01-08 09:56:25', '2022-01-08 09:56:25'),
(6, 'news.png', NULL, NULL, 'Insight', 'News & Opinions', '#', '2022-01-08 09:56:37', '2022-01-08 09:56:37'),
(7, 'news.png', NULL, NULL, 'Insight123', 'News & Opinions123', '#123', '2022-01-08 09:57:28', '2022-01-08 09:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(100) DEFAULT NULL,
  `sub_menu_id` varchar(100) DEFAULT NULL,
  `child_menu_id` varchar(100) DEFAULT NULL,
  `title` varchar(500) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `slug` varchar(1000) DEFAULT NULL,
  `status` enum('Published','Unpublished','Deleted') DEFAULT 'Unpublished',
  `meta_keyword` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `design_menu` enum('N','Y') DEFAULT 'N',
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `menu_id`, `sub_menu_id`, `child_menu_id`, `title`, `body`, `image`, `slug`, `status`, `meta_keyword`, `meta_desc`, `design_menu`, `user_id`, `created_at`, `updated_at`) VALUES
(33, '1', '1', '1', 'logo-design', NULL, NULL, 'logo-design', 'Published', 'logo design for meta keyword', 'Logo Design Meta Descriptions', 'N', NULL, '2022-01-04 10:20:23', '2022-01-04 10:20:23'),
(38, '#', NULL, NULL, 'Home', NULL, NULL, 'home', 'Published', 'home page meta keyword', 'meta description for home page', 'N', NULL, '2022-01-05 07:37:58', '2022-01-05 07:37:58'),
(39, '5', '19', '111', '3D-Architecture-Videos', NULL, NULL, '3D-Architecture-Videos', 'Published', '3D-Architecture-Videos', '3D 2D Animation', 'N', NULL, '2022-01-06 16:02:27', '2022-01-06 16:02:27'),
(40, '1', '1', '2', 'corporate-branding', NULL, NULL, 'corporat-branding', 'Published', 'Meta keywrod for corporate designing', 'Meta Description for Corporate Branding', 'N', NULL, '2022-01-07 10:37:12', '2022-01-07 10:37:12'),
(41, '#', NULL, NULL, 'work', NULL, NULL, 'work', 'Published', 'meta keyword for work', 'meta description for work', 'N', NULL, '2022-01-07 11:41:13', '2022-01-07 11:41:13'),
(44, '#', NULL, NULL, 'agency', NULL, NULL, 'agency', 'Published', 'agency meta keywords', 'agency meta description', 'N', NULL, '2022-01-07 13:35:18', '2022-01-07 13:35:18'),
(46, '1', '1', '3', 'brand-guildeline-book', NULL, NULL, 'brand-guildeline-book', 'Published', 'Brand Guide Line Book Meta Keywords', 'Brand Guide Line Book Meta Description', 'N', NULL, '2022-01-08 08:13:21', '2022-01-08 08:13:21'),
(47, '1', '1', '6', 'vehicle-branding', NULL, NULL, 'vehicle-branding', 'Published', 'vehicle branding design', 'vehicle branding design', 'N', NULL, '2022-01-08 08:28:02', '2022-01-08 08:28:02'),
(48, '1', '2', '8', 'Testing', NULL, NULL, 'testing', 'Published', 'testing meta keywords', 'testing meta description', 'N', NULL, '2022-01-13 03:15:32', '2022-01-13 03:15:32'),
(49, '1', '1', NULL, 'uniform-branding', NULL, NULL, 'uniform-branding', 'Published', 'Meta Keywords for uniform branding', 'Meta Descriptions for uniform branding', 'N', NULL, '2022-01-21 11:36:50', '2022-01-21 11:36:50'),
(50, '1', '1', NULL, 'packaging-design', NULL, NULL, 'packaging-design', 'Published', 'Meta Keywords for packaging-design', 'Meta Descriptions for packaging-design', 'N', NULL, '2022-01-21 13:07:53', '2022-01-21 13:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `page_detail`
--

CREATE TABLE `page_detail` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `section_no` int(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `section_type` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_detail`
--

INSERT INTO `page_detail` (`id`, `page_id`, `section_no`, `section`, `section_type`, `created_at`, `updated_at`) VALUES
(14, 34, 1, 1, 'slider 1', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(15, 34, 2, 2, 'testing title', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(16, 34, 3, 4, 'case study 1', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(17, 34, 4, 14, 'Section 1', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(18, 34, 5, 8, 'section 1', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(19, 34, 6, 14, 'Section 1', '2022-01-04 11:33:06', '2022-01-04 11:33:06'),
(20, 35, 1, 1, 'slider 2', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(21, 35, 2, 2, 'testing title', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(22, 35, 3, 4, 'case study 2', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(23, 35, 4, 14, 'section 9', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(24, 35, 5, 16, 'section 2', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(25, 35, 6, 14, 'section 9', '2022-01-04 14:51:09', '2022-01-04 14:51:09'),
(26, 36, 1, 19, 'PaddingTOP70_Bottom50', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(27, 36, 2, 1, 'slider 2', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(28, 36, 3, 19, 'padding100', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(29, 36, 4, 2, 'testing title', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(30, 36, 5, 19, 'PaddingTOP70_Bottom50', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(31, 36, 6, 4, 'slider 1', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(32, 36, 7, 19, 'PaddingTOP70_Bottom50', '2022-01-04 14:59:08', '2022-01-04 14:59:08'),
(33, 37, 1, 12, 'section 1', '2022-01-04 21:23:52', '2022-01-04 21:23:52'),
(34, 37, 2, 1, 'slider 3', '2022-01-04 21:23:52', '2022-01-04 21:23:52'),
(35, 37, 3, 19, 'PaddingTOP70_Bottom50', '2022-01-04 21:23:52', '2022-01-04 21:23:52'),
(36, 37, 4, 3, 'team group 2', '2022-01-04 21:23:52', '2022-01-04 21:23:52'),
(37, 37, 5, 9, 'section 1', '2022-01-04 21:23:52', '2022-01-04 21:23:52'),
(77, 39, 1, 1, 'slider 1', '2022-01-06 16:03:28', '2022-01-06 16:03:28'),
(78, 39, 2, 2, 'testing title', '2022-01-06 16:03:28', '2022-01-06 16:03:28'),
(108, 43, 1, 4, 'slider 1', '2022-01-07 13:32:48', '2022-01-07 13:32:48'),
(399, 48, 1, 2, 'testing title', '2022-01-13 03:22:16', '2022-01-13 03:22:16'),
(400, 48, 2, 5, 'white-bg-services', '2022-01-13 03:22:16', '2022-01-13 03:22:16'),
(401, 48, 4, 12, 'section 1', '2022-01-13 03:22:16', '2022-01-13 03:22:16'),
(404, 48, 3, 10, 'section 8', '2022-01-13 03:22:16', '2022-01-13 03:22:16'),
(1385, 44, 1, 20, 'Section 1', '2022-02-04 09:44:08', '2022-02-04 09:44:08'),
(1386, 44, 2, 14, 'For Agency page', '2022-02-04 09:44:08', '2022-02-04 09:44:08'),
(1387, 44, 3, 10, 'For Agency page', '2022-02-04 09:44:08', '2022-02-04 09:44:08'),
(1388, 44, 4, 3, 'team-section-01', '2022-02-04 09:44:08', '2022-02-04 09:44:08'),
(1389, 44, 5, 9, 'meeting', '2022-02-04 09:44:08', '2022-02-04 09:44:08'),
(1399, 33, NULL, 22, 'logo-design3', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1400, 33, 1, 19, 'padding-y-50', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1401, 33, 2, 22, 'Logo Design section 1', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1402, 33, 4, 12, 'logo-design-04', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1403, 33, 5, 17, 'logo-expertise', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1404, 33, 6, 19, 'padding-y-50', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1405, 33, 7, 18, 'work-samples', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1406, 33, 8, 18, 'work-samples', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1407, 33, 9, 18, 'work-samples', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1408, 33, 10, 9, 'logo-help', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1409, 33, 11, 16, 'logo-design-section-12', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1410, 33, 12, 19, 'padding-y-50', '2022-02-04 09:47:15', '2022-02-04 09:47:15'),
(1411, 33, 13, 7, 'one', '2022-02-04 09:47:16', '2022-02-04 09:47:16'),
(1412, 33, 14, 19, 'padding-y-50', '2022-02-04 09:47:16', '2022-02-04 09:47:16'),
(1413, 33, 15, 5, 'white-bg-services', '2022-02-04 09:47:16', '2022-02-04 09:47:16'),
(1414, 33, 16, 9, 'meeting', '2022-02-04 09:47:16', '2022-02-04 09:47:16'),
(1415, 33, 3, 22, 'Heading', '2022-02-04 09:47:16', '2022-02-04 09:47:16'),
(1425, 46, 1, 19, 'padding-y-50', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1426, 46, 2, 22, 'brand-guildeline-book', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1427, 46, 3, 13, 'brand-book-page', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1428, 46, 4, 15, 'brand-book-page', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1429, 46, 5, 19, 'padding-y-50', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1430, 46, 6, 7, 'one', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1431, 46, 7, 9, 'project-disc', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1432, 46, 8, 5, 'Section 1', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1433, 46, 9, 9, 'meeting', '2022-02-04 09:55:17', '2022-02-04 09:55:17'),
(1492, 50, 1, 19, 'padding-y-50', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1493, 50, 2, 22, 'packaging-design', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1494, 50, 3, 14, 'packaging-design', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1495, 50, 4, 17, 'packaging-design', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1496, 50, 5, 4, 'case-study', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1497, 50, 6, 19, 'padding-y-50', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1498, 50, 7, 7, 'one', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1499, 50, 8, 9, 'project-disc', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1500, 50, 9, 5, 'Section 1', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1501, 50, 11, 9, 'meeting', '2022-02-04 11:43:00', '2022-02-04 11:43:00'),
(1562, 41, 1, 19, 'padding-y-50', '2022-02-05 10:26:04', '2022-02-05 10:26:04'),
(1563, 41, 2, 4, 'case-study', '2022-02-05 10:26:04', '2022-02-05 10:26:04'),
(1564, 41, 3, 5, 'white-bg-services', '2022-02-05 10:26:04', '2022-02-05 10:26:04'),
(1565, 41, 4, 9, 'meeting', '2022-02-05 10:26:04', '2022-02-05 10:26:04'),
(1566, 40, 1, 19, 'padding-y-50', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1567, 40, 2, 22, 'corporate-identity-banner', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1568, 40, 3, 12, 'corporate-page', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1569, 40, 4, 17, 'corporate-page', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1570, 40, 5, 4, 'case-study', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1571, 40, 6, 13, 'corporate-branding', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1572, 40, 7, 11, 'corporate-branding', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1573, 40, 8, 9, 'corporate-identity', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1574, 40, 9, 7, 'one', '2022-02-05 10:46:41', '2022-02-05 10:46:41'),
(1575, 40, 10, 9, 'project-disc', '2022-02-05 10:46:42', '2022-02-05 10:46:42'),
(1576, 40, 11, 5, 'Section 1', '2022-02-05 10:46:42', '2022-02-05 10:46:42'),
(1577, 40, 12, 9, 'meeting', '2022-02-05 10:46:42', '2022-02-05 10:46:42'),
(1578, 47, 1, 19, 'padding-y-50', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1579, 47, 2, 22, 'vehicle-page', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1580, 47, 3, 15, 'vehicle-page', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1581, 47, 4, 9, 'vehicle-branding', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1582, 47, 6, 7, 'one', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1583, 47, 7, 9, 'project-disc', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1584, 47, 8, 5, 'Section 1', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1585, 47, 9, 9, 'meeting', '2022-02-05 11:47:21', '2022-02-05 11:47:21'),
(1610, 49, 1, 19, 'padding-y-50', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1611, 49, 2, 22, 'uniform-branding', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1612, 49, 3, 15, 'uniform-branding', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1613, 49, 4, 9, 'section 1', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1614, 49, 5, 7, 'one', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1615, 49, 6, 9, 'project-disc', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1616, 49, 7, 5, 'Section 1', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1617, 49, 8, 9, 'meeting', '2022-02-05 12:20:22', '2022-02-05 12:20:22'),
(1636, 38, 1, 21, 'for home page', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1637, 38, 2, 5, 'Section 1', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1638, 38, 3, 9, 'custom-proposal', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1639, 38, 4, 4, 'case study 1', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1640, 38, 5, 6, 'clients and partners', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1641, 38, 6, 7, 'one', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1642, 38, 7, 9, 'project-disc', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1643, 38, 8, 8, 'section 1', '2022-02-14 11:22:37', '2022-02-14 11:22:37'),
(1644, 38, 9, 9, 'meeting', '2022-02-14 11:22:37', '2022-02-14 11:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `page_section`
--

CREATE TABLE `page_section` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_section`
--

INSERT INTO `page_section` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Slider', '<section class=\"home-slider section-bg-black creative-banner\">\n                <!-- Images slider - Start -->\n                <div class=\"web-container\">\n                    <div class=\"row\">\n                        <div class=\"col-12\">\n                            <div id=\"carouselExampleIndicators\" class=\"position-relative scrollto-section carousel slide\" data-ride=\"carousel\">\n                                <a href=\"#section-2\" id=\"sectionTwo\" class=\"mouse\" aria-hidden=\"true\">\n                                <span class=\"mouse__wheel\"></span>\n                                <span class=\"mouse__text\">SCROLL TO EXPLORE</span>\n                                </a>\n                                <ol class=\"carousel-indicators\">\n                                    @php $num = 0; @endphp\n                                        @foreach($sliders as $row_slider)\n                                            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{$num++}}\" class=\"{{$row_slider->status}}\"></li>\n                                        @endforeach\n                                </ol>\n                                <div class=\"carousel-inner\">\n\n                                    @foreach($sliders as $row_slider)\n                                        <div class=\"carousel-item {{$row_slider->status}}\" style=\"background: url(\'{{asset(\'slider/\'.$row_slider->image)}}\') no-repeat center right;\">\n                                            <div class=\"slider-flex-wrap\">\n                                                <div class=\"homepage-banner-content\">\n                                                    <p class=\"web-h5 text-white mb-0\">{{$row_slider->text1}}</p>\n                                                    <h2 class=\"web-h2 text-white mb-4\">{{$row_slider->text2}}</h2>\n                                                    <ul class=\"list-inline\">\n                                                        <li class=\"list-inline-item\"><a href=\"#\" class=\"btn web-btn web-btn-white\" data-toggle=\"modal\" data-target=\"#creativeModal\">Contact Now</a></li>\n                                                        <li class=\"list-inline-item\"><a href=\"#\" class=\"blue-link\">Learn more <i class=\"fas fa-chevron-right pl-1\"></i></a></li>\n                                                    </ul>\n                                                    \n                                                </div>\n                                                <div class=\"banner-img-mob\">\n                                                    <img class=\"img-fluid\" src=\"{{asset(\'slider/\'.$row_slider->image)}}\" alt=\"\">\n                                                </div>\n                                            </div>\n                                        </div>\n                                    @endforeach\n                    \n                                </div>\n                            </div>\n                        </div>\n                    </div>\n                </div>\n                <!-- Images slider - End -->\n            </section>', NULL, NULL),
(2, 'Video', '<section class=\"section-bg-white section-padbottom-100 home-video-with-banner\">\n            <div class=\"web-container\">\n                <div class=\"row\">\n                    <div class=\"col-md-12\">\n                        <div style=\"margin-top:0px !important;\" class=\"home-video-content text-center\">\n                            <h3 class=\"web-h3 text-black text-left\">{{$row_video->video_title}}</h3>\n                            <iframe class=\"w-100 web-border-radius-5\" width=\"560\" height=\"315\" src=\"{{$row_video->video_link}}\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n                            <a href=\"#\" class=\"btn web-btn web-btn-white\" data-toggle=\"modal\" data-target=\"#creativeModal\">Contact Now</a>\n                        </div>\n                    </div>\n                </div>\n            </div>', NULL, NULL),
(3, 'Team', NULL, NULL, NULL),
(4, 'Case Study', NULL, NULL, NULL),
(5, 'Services', NULL, NULL, NULL),
(6, 'Clients', NULL, NULL, NULL),
(7, 'Industries', NULL, NULL, NULL),
(8, 'News and Opinions', NULL, NULL, NULL),
(9, 'Meeting Sections', NULL, NULL, NULL),
(10, 'Para Style 1', NULL, NULL, NULL),
(11, 'Para Style 2', NULL, NULL, NULL),
(12, 'Para Style 3', NULL, NULL, NULL),
(13, 'Para Style 4', NULL, NULL, NULL),
(14, 'Para Style 5', NULL, NULL, NULL),
(15, 'Section 15', NULL, NULL, NULL),
(16, 'Section 16', NULL, NULL, NULL),
(17, 'Section 17', NULL, NULL, NULL),
(18, 'Section 18', NULL, NULL, NULL),
(19, 'Padding', NULL, NULL, NULL),
(20, 'Background Image with Heading', NULL, NULL, NULL),
(21, 'Slider with Video', NULL, NULL, NULL),
(22, 'Two_headings_withVideoOrImage', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `para_style_1`
--

CREATE TABLE `para_style_1` (
  `id` int(11) NOT NULL,
  `page_id` text DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_1`
--

INSERT INTO `para_style_1` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(6, '11', 'section 1', 'imaeg2.jpg', 'asdfasd', 'fasdfasdf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(7, '11', 'section 1', 'image3.jpg', 'asdfasdf', 'asdffas', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(8, '11', 'section 1', 'image1.jpg', 'dfsdfsdf', 'asdfadf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(9, '11', 'section 1', 'image4.jpg', 'afasdfasd', 'sdfasf', NULL, '2021-12-28 15:05:28', '2021-12-28 15:05:28'),
(10, NULL, 'section 8', 'image3.jpg', 'asdfasd', 'fasdfasdfasdfasdfas', NULL, '2021-12-30 15:11:32', '2021-12-30 15:11:32'),
(11, NULL, 'section 8', 'image4.jpg', 'asdfasf', 'asfdaf', NULL, '2021-12-30 15:11:32', '2021-12-30 15:11:32'),
(12, NULL, 'For Agency page', 'creative-art.svg', 'Branding? We build trust & customer loyalty', 'To achieve a disciplined process in your brand awareness campaign to extend your customer loyalty; it requires a mandate from the top to readiness to invest in future. Our expert team will help you to seize every opportunity; why people choose your brand over your competitor.', NULL, '2022-01-08 02:59:33', '2022-01-08 02:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_2`
--

CREATE TABLE `para_style_2` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `title` text DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `flex_row_reverse` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_2`
--

INSERT INTO `para_style_2` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `flex_row_reverse`, `created_at`, `updated_at`) VALUES
(4, 18, 'section 1', 'imaeg2.jpg', 'adfa', 'sasdfasdfa', NULL, 'flex_row_reverse', '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(5, 18, 'section 1', 'image1.jpg', 'sfdafsd', 'afsdf', NULL, NULL, '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(6, 18, 'section 1', 'image3.jpg', 'afadf', 'safasdf', NULL, 'flex_row_reverse', '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(7, 18, 'section 1', 'image4.jpg', 'asdfasd', 'fasff', NULL, NULL, '2021-12-28 15:59:25', '2021-12-28 15:59:25'),
(8, NULL, 'section 8', 'image1.jpg', 'asdfasdf', 'd sfasf asfasdf', NULL, 'flex_row_reverse', '2021-12-30 15:12:03', '2021-12-30 15:12:03'),
(9, NULL, 'section 8', 'image4.jpg', 'asfa sfas', 'fasfasf', NULL, NULL, '2021-12-30 15:12:03', '2021-12-30 15:12:03'),
(10, NULL, 'corporate-branding', 'corporate-tile-1.jpg', 'Pride –', 'A professionally designed logo and Brand / Identity system will show that you are committed to presenting your company as a major contender in your market.', NULL, NULL, '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(11, NULL, 'corporate-branding', 'corporate-tile-2.jpg', 'Visibility –', 'Most prospective consumers / clients look for highly visible, well-defined businesses, and the “look and feel” of your identity plays a major role in their decision making process.', NULL, 'flex_row_reverse', '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(12, NULL, 'corporate-branding', 'corporate-tile-3.jpg', 'Pride –', 'A professionally designed logo and Brand / Identity system will show that you are committed to presenting your company as a major contender in your market.', NULL, NULL, '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(13, NULL, 'corporate-branding', 'corporate-tile-4.jpg', 'Visibility –', 'Most prospective consumers / clients look for highly visible, well-defined businesses, and the “look and feel” of your identity plays a major role in their decision making process.', NULL, 'flex_row_reverse', '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(14, NULL, 'corporate-branding', 'corporate-tile-5.jpg', 'Pride –', 'A professionally designed logo and Brand / Identity system will show that you are committed to presenting your company as a major contender in your market.', NULL, NULL, '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(15, NULL, 'corporate-branding', 'corporate-tile-6.jpg', 'Visibility –', 'Most prospective consumers / clients look for highly visible, well-defined businesses, and the “look and feel” of your identity plays a major role in their decision making process.', NULL, 'flex_row_reverse', '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(16, NULL, 'corporate-branding', 'corporate-tile-7.jpg', 'Pride –', 'A professionally designed logo and Brand / Identity system will show that you are committed to presenting your company as a major contender in your market.', NULL, NULL, '2022-01-21 12:41:28', '2022-01-21 12:41:28'),
(17, NULL, 'corporate-branding', 'corporate-tile-8.jpg', 'Visibility –', 'Most prospective consumers / clients look for highly visible, well-defined businesses, and the “look and feel” of your identity plays a major role in their decision making process.', NULL, 'flex_row_reverse', '2022-01-21 12:41:28', '2022-01-21 12:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_3`
--

CREATE TABLE `para_style_3` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(550) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_3`
--

INSERT INTO `para_style_3` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(5, 18, 'section 1', 'imaeg2.jpg', 'asdfasdf', 'safasf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(6, 18, 'section 1', 'image1.jpg', 'asdfasfa', 'sdfasfas', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(7, 18, 'section 1', 'image3.jpg', 'fasfas', 'fdasfdf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(8, 18, 'section 1', 'image4.jpg', 'dfdasff', 'asdfasdf', NULL, '2021-12-28 16:29:58', '2021-12-28 16:29:58'),
(9, NULL, 'section 8', 'image4.jpg', 'asdfa sdfas dfas', 'f asfasdff', NULL, '2021-12-30 15:12:28', '2021-12-30 15:12:28'),
(10, NULL, 'section 8', 'image1.jpg', 'as dfasdf', 'f asdf', NULL, '2021-12-30 15:12:28', '2021-12-30 15:12:28'),
(11, NULL, 'logo-design-04', 'design-detail-1.jpg', 'A Good Logo is a reflection of your values', 'Company logo or brand logo can create an impressive impact on every business. As it is said that every book is judged by its cover. Same thing goes with businesses and brands. If your cover (logo) says, “I’m so cheap that I got my friend to design my logo for my brand.” Then guess what, that’s how you and your brand will be perceived.. Cheap logo! Is that really how you want to promote your brand?', NULL, '2022-01-08 08:12:37', '2022-01-08 08:12:37'),
(12, NULL, 'logo-design-04', 'design-detail-2.jpg', 'Corporate & Brand Logo Designing', 'All big and small organizations are intended to gain attention and stand out in the crowd. A great logo design will just do that itself. A strong logo can help set your brand apart. Imagine your logo appearing beside tons of others. You may not have to, since it happens all the time. Lots of companies agree to sponsor a portion of an event. In return they get their dime-sized logo inscribed on the back of each program. The question is would your logo attract attention in the same situation?', NULL, '2022-01-08 08:12:37', '2022-01-08 08:12:37'),
(13, NULL, 'corporate-page', 'corporate-img-1.jpg', 'Benefits of Corporate Identity', 'Corporate Identity benefits an organization in myriad ways. An organization that invests in developing a solid corporate identity says to its customer “we are here to stay.” It’s a sign of longevity, which is not only attractive to customers, but also is desirable to potential investors. It’s an indicator that an is serious about being successful, that it is reliable in the industry.', NULL, '2022-01-18 11:48:38', '2022-01-18 11:48:38'),
(14, NULL, 'corporate-page', 'corporate-img-2.jpg', 'The Importance of Corporate Identity', 'Basically, corporate and brand identities are an expression and reflection of an organizations’s culture, character, personality, and its products and services – inspiring trust with consumers, employees, suppliers, partners and investors. In the middle of the 20th century, the development of visual identity systems became mainstay in almost all branding initiatives.', NULL, '2022-01-18 11:48:38', '2022-01-18 11:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_4`
--

CREATE TABLE `para_style_4` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_4`
--

INSERT INTO `para_style_4` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(5, 18, 'section 1', NULL, 'asdfasdf1234', 'asdfasdf', NULL, '2021-12-28 16:48:10', '2021-12-28 16:48:10'),
(6, 18, 'section 1', NULL, 'sadfasdfa', 'sadfasdfa', NULL, '2021-12-28 16:48:10', '2021-12-28 16:48:10'),
(7, NULL, 'section 8', NULL, 'asdfsda fsdfsf', NULL, NULL, '2021-12-30 15:12:47', '2021-12-30 15:12:47'),
(8, NULL, 'section 8', NULL, 'as fsf asfasdf', NULL, NULL, '2021-12-30 15:12:47', '2021-12-30 15:12:47'),
(9, NULL, 'section for logo design', NULL, 'A creative logo gets your brand or business noticed', NULL, NULL, '2022-01-08 07:54:48', '2022-01-08 07:54:48'),
(10, NULL, 'vehicle-page', NULL, 'We have more than 10 years experience in designing corporate identity', NULL, NULL, '2022-01-18 10:44:51', '2022-01-18 10:44:51'),
(11, NULL, 'brand-book-page', NULL, 'Branding is important. To put it simply, your brand illustrates your promise to the customer. It conveys what can be expected from your product or service, and sets you apart from your competitors. Your brand is not only who you are, but who you strive to become and who people perceive you to be. More importantly, this should be based to some extent on who your target customers want and need you to be.', NULL, NULL, '2022-01-18 11:32:45', '2022-01-18 11:32:45'),
(12, NULL, 'logo-design-rough', NULL, 'We also provide Express Service', NULL, NULL, '2022-01-18 14:48:21', '2022-01-18 14:48:21'),
(13, NULL, 'corporate-identity', NULL, 'Brand Identity Design is the creation of the visual identity, “The Branding”, for a company and/or its clients. As Brand Identity Designers we create everything from logos and marketing collateral, to promotional materials, and even advertising campaigns that establish a recognizable corporate identity.', NULL, NULL, '2022-01-18 14:58:58', '2022-01-18 14:58:58'),
(14, NULL, 'corporate-branding', NULL, 'Brand Identity Design is the creation of the visual identity, “The Branding”, for a company and/or its clients. As Brand Identity Designers we create everything from logos and marketing collateral, to promotional materials, and even advertising campaigns that establish a recognizable corporate identity.', NULL, NULL, '2022-01-21 12:34:03', '2022-01-21 12:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `para_style_5`
--

CREATE TABLE `para_style_5` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `style` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `para_left` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `heading` text DEFAULT NULL,
  `heading_size` varchar(50) DEFAULT NULL,
  `text_left` text DEFAULT NULL,
  `text_right` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `para_style_5`
--

INSERT INTO `para_style_5` (`id`, `page_id`, `name`, `style`, `image`, `title`, `paragraph`, `para_left`, `link`, `created_at`, `updated_at`, `heading`, `heading_size`, `text_left`, `text_right`) VALUES
(11, NULL, 'For Agency page', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-08 02:44:10', '2022-01-08 02:44:10', 'We Design brands and re-engineer brand experiences for growth and positive social impact.', NULL, 'as competition creates infinite choices, companies look for ways to connect emotionally with customers', 'Become irreplaceable, and create lifelong relationships. A strong brand stands out in a densely crowded marketplace'),
(12, NULL, 'packaging-design', 'style2', NULL, NULL, NULL, NULL, NULL, '2022-02-04 04:58:38', '2022-02-04 04:58:38', NULL, 'h4', 'Design that motivates buyer to believe and buy your brand. We create successful packaging for brands in progress. We work with Brand vendor to craft a brand vision that improves awareness and presentation in the market.', 'Creative Drop solves branding issues for regional and global consumer goods brands in electronics, technology, healthcare, food, snack food, beverage, personal care and home care. We deliver concepts that break through the clutter to: Launch a new brand; Evolve your brand; Influence at shelf. <br><br>  We help you connect with and motivate shoppers at point-of-sale, with design that integrates the brand, the consumer’s personal life, and market trends.'),
(13, NULL, 'testing', 'style1', NULL, NULL, NULL, NULL, NULL, '2022-02-04 05:00:44', '2022-02-04 05:00:44', NULL, NULL, 'Design that motivates buyer to believe and buy your brand. We create successful packaging for brands in progress. We work with Brand vendor to craft a brand vision that improves awareness and presentation in the market.', 'Become irreplaceable, and create lifelong relationships. A strong brand stands out in a densely crowded marketplace. People fall in love with brands, trust them, and believe in their superiority. How a brand is perceived affects its success, regardless of whether it’s a start-up, a nonprofit, or a product.'),
(14, NULL, 'testingtwo', 'style2', NULL, NULL, NULL, NULL, NULL, '2022-02-04 07:53:20', '2022-02-04 07:53:20', NULL, NULL, 'As competition creates infinite choices, companies look for ways to connect emotionally with customers.', 'Become irreplaceable, and create lifelong relationships. A strong brand stands out in a densely crowded marketplace. People fall in love with brands, trust them, and believe in their superiority. How a brand is perceived affects its success, regardless of whether it’s a start-up, a nonprofit, or a product.');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `style` varchar(150) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `btn_label` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `style`, `page_id`, `title`, `btn_label`, `link`, `created_at`, `updated_at`) VALUES
(4, 'section 1', 'style4', NULL, 'asdfasdfasd', 'Contact us', NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(5, 'section 1', '', 18, 'fasdfasd', NULL, NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(6, 'section 1', '', 18, 'asdfasdfa', NULL, NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(7, 'section 1', '', 18, 'sdfasdfasdfas', NULL, NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(8, 'section 1', '', 18, 'dfadsfsdf', NULL, NULL, '2021-12-28 13:51:48', '2021-12-28 13:51:48'),
(9, 'request group 8', '', NULL, 'asdfa sdfasdf', NULL, NULL, '2021-12-30 15:08:04', '2021-12-30 15:08:04'),
(10, 'request group 8', '', NULL, 'safsaf', NULL, NULL, '2021-12-30 15:08:04', '2021-12-30 15:08:04'),
(11, 'agency page', 'style1', NULL, 'We have more than 10 years experience in designing corporate identity', 'Request for Meeting', NULL, '2022-01-07 09:33:06', '2022-01-07 09:33:06'),
(12, 'For agency page', '', NULL, 'Meet our creative and expert team to assist you.', NULL, NULL, '2022-01-08 03:01:58', '2022-01-08 03:01:58'),
(13, 'custom-proposal', 'style1', NULL, 'Are you looking for a customize proposal?', 'Request for a meeting', NULL, '2022-01-18 07:16:06', '2022-01-18 07:16:06'),
(14, 'logo-expertise', '', NULL, 'We are logo design agency in Dubai with special expertise in logo designing.', NULL, NULL, '2022-01-18 07:31:57', '2022-01-18 07:31:57'),
(15, 'corporate-page', '', NULL, 'We have more than 10 years experience in designing corporate identity', NULL, NULL, '2022-01-18 11:50:17', '2022-01-18 11:50:17'),
(16, 'uniform-branding', '', NULL, 'Meet our creative and expert team to assist you.', NULL, NULL, '2022-01-21 11:59:17', '2022-01-21 11:59:17'),
(17, 'logo-design', '', NULL, 'Meet our creative and expert team to assist you.', NULL, NULL, '2022-01-21 12:27:35', '2022-01-21 12:27:35'),
(18, 'meet', '', NULL, 'Meet our creative and expert team to assist you.', NULL, NULL, '2022-01-21 12:45:52', '2022-01-21 12:45:52'),
(19, 'newone', 'style1', NULL, 'title new one', 'request a meet', NULL, '2022-02-04 07:19:35', '2022-02-04 07:19:35'),
(20, 'logo-help', 'style4', NULL, 'Want help to decide the best style of logo?', 'Contact Now', NULL, '2022-02-04 09:27:10', '2022-02-04 09:27:10'),
(21, 'meeting', 'style2', NULL, 'Meet our creative and expert team to assist you.', 'Let\'s meet now', NULL, '2022-02-04 09:40:17', '2022-02-04 09:40:17'),
(22, 'project-disc', 'style3', NULL, 'Let\'s discuss your project', 'Get in touch', NULL, '2022-02-04 09:48:43', '2022-02-04 09:48:43'),
(23, 'corporate-identity', 'style4', NULL, 'Connect with our team to get expert advise and custom quote', 'Get Started', NULL, '2022-02-05 10:38:30', '2022-02-05 10:38:30'),
(24, 'vehicle-branding', 'style4', NULL, 'We have more than 10 years experience in designing corporate identity', 'Request for a meeting', NULL, '2022-02-05 11:46:54', '2022-02-05 11:46:54'),
(25, 'uniform-branding', 'style4', NULL, 'We have more than 10 years experience in designing corporate identity', 'Request for a meeting', NULL, '2022-02-05 12:06:28', '2022-02-05 12:06:28'),
(26, 'uniform-branding', 'style4', NULL, 'We have more than 10 years experience in designing corporate identity', 'Request for a meeting', NULL, '2022-02-05 12:10:32', '2022-02-05 12:10:32');

-- --------------------------------------------------------

--
-- Table structure for table `section_15`
--

CREATE TABLE `section_15` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `style` varchar(150) DEFAULT NULL,
  `heading1` varchar(150) DEFAULT NULL,
  `heading2` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `flex_row_reverse` varchar(160) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_15`
--

INSERT INTO `section_15` (`id`, `page_id`, `name`, `style`, `heading1`, `heading2`, `image`, `text`, `flex_row_reverse`, `created_at`, `updated_at`) VALUES
(7, NULL, 'Vehicle Branding Design', 'style2', 'Vehicle Branding Design', 'Corporate Identity is actually the corporate image for every business', 'No-image-found.jpg', 'Make a Brand Manual for your organization', 'flex_row_reverse', '2021-12-31 08:07:06', '2021-12-31 08:07:06'),
(10, NULL, 'Vehicle Branding Design', 'style2', 'Make a Brand Manual for your organization', NULL, 'spinner.gif', NULL, NULL, '2022-01-16 20:00:53', '2022-01-16 20:00:53'),
(11, NULL, 'Vehicle Branding Design', NULL, 'Retail & Customer Facing Staff Uniform Branding', NULL, 'guideline-book-2.jpg', NULL, 'flex_row_reverse', '2022-01-16 20:02:09', '2022-01-16 20:02:09'),
(12, NULL, 'vehicle-page', 'style2', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'vehicle-box-1.jpg', NULL, NULL, '2022-01-18 09:55:57', '2022-01-18 09:55:57'),
(15, NULL, 'brand-book-page', 'style1', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'guideline-book-1.jpg', NULL, NULL, '2022-01-18 11:38:14', '2022-01-18 11:38:14'),
(16, NULL, 'brand-book-page', 'style1', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'guideline-book-2.jpg', NULL, 'flex_row_reverse', '2022-01-18 11:38:14', '2022-01-18 11:38:14'),
(17, NULL, 'brand-book-page', 'style1', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'guideline-book-3.jpg', NULL, NULL, '2022-01-18 11:38:14', '2022-01-18 11:38:14'),
(18, NULL, 'uniform-branding', 'style3', 'Retail & Customer Facing Staff Uniform Branding ONE', NULL, 'uniform-box-1.jpg', NULL, NULL, '2022-02-03 14:07:49', '2022-02-03 14:07:49'),
(19, NULL, 'uniform-branding', 'style3', 'Retail & Customer Facing Staff Uniform Branding TWO', NULL, 'uniform-box-1.jpg', NULL, 'flex_row_reverse', '2022-02-03 14:07:49', '2022-02-03 14:07:49'),
(20, NULL, 'uniform-branding', 'style3', 'Retail & Customer Facing Staff Uniform Branding THREE', NULL, 'uniform-box-1.jpg', NULL, NULL, '2022-02-03 14:07:49', '2022-02-03 14:07:49'),
(22, NULL, 'vehicle-page', 'style2', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'vehicle-box-2.jpg', NULL, 'flex_row_reverse', '2022-02-05 11:50:10', '2022-02-05 11:50:10'),
(23, NULL, 'vehicle-page', 'style2', 'Retail & Customer Facing Staff Uniform Branding', NULL, 'vehicle-box-1.jpg', NULL, NULL, '2022-02-05 11:52:52', '2022-02-05 11:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `section_16`
--

CREATE TABLE `section_16` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `heading1` varchar(150) DEFAULT NULL,
  `heading2` varchar(150) DEFAULT NULL,
  `heading` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_16`
--

INSERT INTO `section_16` (`id`, `page_id`, `image`, `name`, `text`, `heading1`, `heading2`, `heading`, `created_at`, `updated_at`) VALUES
(2, 18, 'image1.jpg', 'section 1', 'asdfas', NULL, NULL, NULL, '2021-12-28 21:39:24', '2021-12-28 21:39:24'),
(3, 18, 'image4.jpg', 'section 1', 'asfdasfafsd', NULL, NULL, NULL, '2021-12-28 21:39:24', '2021-12-28 21:39:24'),
(4, 18, 'No-image-found.jpg', 'section 1', 'asdfasdf', NULL, NULL, 'sadfasdf', '2021-12-28 21:45:09', '2021-12-28 21:45:09'),
(6, 18, 'No-image-found.jpg', 'section 2', 'dfasfd', NULL, NULL, 'sdfasdfa', '2021-12-28 21:45:09', '2021-12-28 21:45:09'),
(7, NULL, 'image1.jpg', 'section 9', 'asdf asdfas', NULL, NULL, 'dfas fsdf', '2021-12-30 15:14:05', '2021-12-30 15:14:05'),
(8, NULL, 'imaeg2.jpg', 'section 9', 'adsfasfs', NULL, NULL, 'f asfsfdasdf', '2021-12-30 15:14:05', '2021-12-30 15:14:05'),
(9, NULL, 'image4.jpg', 'section 9', 'asfddfs', NULL, NULL, 'fasfsf a', '2021-12-30 15:14:05', '2021-12-30 15:14:05'),
(10, NULL, 'logo-box-1.svg', 'logo-design-section-12', 'We collect a brief about your company, products, services, business activity, clients and Target Industry. Then we start creative content writing with the perspective of sales and marketing. The best professional content writing can help and motivate the buyer, client or customer to take an action. It builds trust between you and your clients.', NULL, NULL, '1. Provide Your Logo Brief', '2022-01-08 09:34:06', '2022-01-08 09:34:06'),
(11, NULL, 'logo-box-2.svg', 'logo-design-section-12', 'We do a short online survey about your competitors and clients. Then we start designing the logo. We provide 12 to 15 different design options to the client. Client can select any 3 option. Client can ask for Modification, Editing or even merging of any selected options. After changes and modification client will received revised 6 to 8 logo design form the selected options.', NULL, NULL, '2. Design Process', '2022-01-08 09:34:06', '2022-01-08 09:34:06'),
(12, NULL, 'logo-box-3.svg', 'logo-design-section-12', 'Once you receive 2nd round logo design options. Just select your final logo. After Approval we will send you your logo original file including all guidelines and pantone codes. We will include black and white option too. We have express charges for over night logo deign.', NULL, NULL, '3. Design Changes & Modifications', '2022-01-08 09:34:06', '2022-01-08 09:34:06'),
(13, NULL, 'logo-box-4.svg', 'logo-design-section-12', 'You will get your logo in multi formats such as: PDF, Illustrator, JPG and EPS including basic color and font guideline.', NULL, NULL, '4. Final Delivery of Logo', '2022-01-08 09:34:07', '2022-01-08 09:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `section_17`
--

CREATE TABLE `section_17` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` text DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_17`
--

INSERT INTO `section_17` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'One', NULL, NULL, 'testing paragraph', NULL, '2021-12-31 06:13:38', '2021-12-31 06:13:38'),
(2, NULL, 'logo-expertise', NULL, NULL, 'We are logo design agency in Dubai with special expertise in logo designing.', NULL, '2022-01-18 07:34:44', '2022-01-18 07:34:44'),
(3, NULL, 'corporate-page', NULL, NULL, 'We have more than 10 years experience in designing corporate identity', NULL, '2022-01-18 11:52:54', '2022-01-18 11:52:54'),
(4, NULL, 'packaging-design', NULL, NULL, 'We have more than 10 years experience in designing corporate identity', NULL, '2022-01-21 13:05:57', '2022-01-21 13:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `section_18`
--

CREATE TABLE `section_18` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `headingone` varchar(150) DEFAULT NULL,
  `headingtwo` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_18`
--

INSERT INTO `section_18` (`id`, `page_id`, `name`, `image`, `title`, `paragraph`, `headingone`, `headingtwo`, `link`, `created_at`, `updated_at`) VALUES
(5, NULL, 'Logo Design 2', 'No-image-found.jpg', NULL, NULL, 'Logo Design 2', 'Corporate Design', NULL, '2021-12-31 12:06:26', '2021-12-31 12:06:26'),
(7, NULL, 'corporate 2', 'No-image-found.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(8, NULL, 'corporate 2', 'imaeg2.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(9, NULL, 'corporate 2', 'image3.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(10, NULL, 'corporate 2', 'spinner.gif', NULL, NULL, 'heading one', 'heading two', NULL, '2021-12-31 12:29:29', '2021-12-31 12:29:29'),
(11, NULL, 'work-samples', 'logo-design-1.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2022-01-18 08:04:39', '2022-01-18 08:04:39'),
(12, NULL, 'work-samples', 'logo-design-2.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2022-01-18 08:04:39', '2022-01-18 08:04:39'),
(13, NULL, 'work-samples', 'logo-design-3.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2022-01-18 08:04:39', '2022-01-18 08:04:39'),
(14, NULL, 'work-samples', 'logo-design-4.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2022-01-18 08:04:39', '2022-01-18 08:04:39'),
(15, NULL, 'work-samples', 'logo-design-5.jpg', NULL, NULL, 'Logo Design', 'Corporate Logo Design', NULL, '2022-01-18 08:04:39', '2022-01-18 08:04:39');

-- --------------------------------------------------------

--
-- Table structure for table `section_19`
--

CREATE TABLE `section_19` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `padding_bottom` varchar(100) DEFAULT NULL,
  `padding_top` varchar(100) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `paragraph` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_19`
--

INSERT INTO `section_19` (`id`, `page_id`, `name`, `padding_bottom`, `padding_top`, `image`, `title`, `paragraph`, `link`, `created_at`, `updated_at`) VALUES
(1, NULL, 'one', '70', '70', NULL, NULL, NULL, NULL, '2022-01-04 12:35:46', '2022-01-04 12:35:46'),
(2, NULL, 'two234', '30', '60', NULL, NULL, NULL, NULL, '2022-01-04 12:36:44', '2022-01-04 12:36:44'),
(3, NULL, 'padding100', '100', '100', NULL, NULL, NULL, NULL, '2022-01-04 14:52:38', '2022-01-04 14:52:38'),
(4, NULL, 'PaddingTOP70_Bottom50', '50', '70', NULL, NULL, NULL, NULL, '2022-01-04 14:57:26', '2022-01-04 14:57:26'),
(5, NULL, 'padding-y-50', '50', '50', NULL, NULL, NULL, NULL, '2022-01-18 07:07:55', '2022-01-18 07:07:55'),
(6, NULL, 'padding-bottom', '50', '0', NULL, NULL, NULL, NULL, '2022-02-05 12:24:03', '2022-02-05 12:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `section_20`
--

CREATE TABLE `section_20` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `heading_1` varchar(150) DEFAULT NULL,
  `heading_2` varchar(150) DEFAULT NULL,
  `btn_label` varchar(150) DEFAULT NULL,
  `btn_class` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_20`
--

INSERT INTO `section_20` (`id`, `name`, `heading_1`, `heading_2`, `btn_label`, `btn_class`, `created_at`, `updated_at`) VALUES
(1, 'Section 1', 'Creative Agency', 'We are a team of experts, experienced and energetic people2', 'Meet us', 'btn web-btn web-btn-white', '2022-01-08 02:01:35', '2022-01-08 02:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_21`
--

CREATE TABLE `section_21` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `slider_name` varchar(150) DEFAULT NULL,
  `video_name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_21`
--

INSERT INTO `section_21` (`id`, `name`, `slider_name`, `video_name`, `created_at`, `updated_at`) VALUES
(1, 'for home page', 'home-slider', 'video 2', '2022-01-08 04:16:31', '2022-01-08 04:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `section_22`
--

CREATE TABLE `section_22` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `style` varchar(150) DEFAULT NULL,
  `heading_1` varchar(150) DEFAULT NULL,
  `heading_2` varchar(150) DEFAULT NULL,
  `btn_label` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `video` varchar(250) DEFAULT NULL,
  `heading` varchar(150) DEFAULT NULL,
  `btn_label_2` varchar(150) DEFAULT NULL,
  `text` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_22`
--

INSERT INTO `section_22` (`id`, `name`, `style`, `heading_1`, `heading_2`, `btn_label`, `image`, `video`, `heading`, `btn_label_2`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Logo Design section 1', NULL, 'Logo Design Experts', 'A creative logo gets your brand or business noticed', NULL, '', 'https://www.youtube.com/embed/K1QICrgxTjA?rel=0', NULL, NULL, 'Do you need a new logo modify your existing logo?', '2022-01-08 10:49:20', '2022-01-08 10:49:20'),
(2, 'corporate-identity-banner', NULL, 'Corporate Identity', 'Corporate Identity is actually the corporate image of every business', NULL, 'corporate-identity-banner.png', NULL, NULL, NULL, 'Get a Corporate Identity for your organization', '2022-01-08 11:55:32', '2022-01-08 11:55:32'),
(3, 'vehicle-page', NULL, 'Vehicle Branding Design', 'Corporate Identity is actually the corporate image of every business', NULL, 'vehicle-banner.jpg', NULL, NULL, NULL, 'Make a Brand Manual for your Organization.', '2022-01-18 09:39:35', '2022-01-18 09:39:35'),
(4, 'brand-guildeline-book', NULL, 'Brand Guideline Book', 'Corporate Identity is actually the corporate image of every business', NULL, 'brand-guideline-banner.jpg', NULL, NULL, NULL, 'Make a Brand Manual for your Organization.', '2022-01-18 11:25:35', '2022-01-18 11:25:35'),
(5, 'uniform-branding', NULL, 'Uniform Branding', 'Corporate Identity is actually the corporate image of every business', NULL, 'uniform-banner.jpg', NULL, NULL, NULL, 'Make a Brand Manual for your Organization.', '2022-01-21 11:42:04', '2022-01-21 11:42:04'),
(6, 'packaging-design', NULL, 'Brand Packaging Design', 'Innovative & Creative Branding & Packaging services delivered with a personal touch', NULL, 'packaging-banner.jpg', NULL, NULL, NULL, 'Get a Corporate Identity for your organization', '2022-01-21 13:01:48', '2022-01-21 13:01:48'),
(7, 'logo-design3', NULL, NULL, 'We also provide Express Service', NULL, '', NULL, NULL, NULL, NULL, '2022-02-01 07:56:34', '2022-02-01 07:56:34'),
(8, 'Heading', NULL, 'Creative Samples', NULL, NULL, '', NULL, NULL, NULL, NULL, '2022-02-04 09:45:37', '2022-02-04 09:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `section_23`
--

CREATE TABLE `section_23` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `heading` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `padding_top` int(11) DEFAULT NULL,
  `padding_bottom` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `meta_title` varchar(1000) DEFAULT NULL,
  `slug` varchar(120) DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `google_tag_manager` text DEFAULT NULL,
  `facebook_pixel` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `meta_title`, `slug`, `meta_desc`, `meta_keyword`, `google_tag_manager`, `facebook_pixel`, `created_at`, `updated_at`) VALUES
(1, 'school management system AQS School Software - School Management System - School Management ERP', NULL, 'school management system AQS is an online multipurpose School Management that has spent over a decade working to improve Educational institutions performance and has greatly been successful to establish absolute credibility All-in-One School/ College/ University Management Software Automate every task, Generate incisive reports, Take real time decisions having key data at your fingertips free trial free demo', 'school management system School Management Software, School Management System, School ERP software, school ERP system, School Management System Software, School ERP system software eschools eschool aqsschool coaching software college software', '<!-- Global site tag (gtag.js) - Google Analytics -->\r\n		<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-48410382-1\"></script>\r\n		<script>\r\n		  window.dataLayer = window.dataLayer || [];\r\n		  function gtag(){dataLayer.push(arguments);}\r\n		  gtag(\'js\', new Date());\r\n\r\n		  gtag(\'config\', \'UA-48410382-1\');\r\n		</script>', '<!-- Facebook Pixel Code -->\r\n    <script>\r\n    !function(f,b,e,v,n,t,s)\r\n    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?\r\n    n.callMethod.apply(n,arguments):n.queue.push(arguments)};\r\n    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';\r\n    n.queue=[];t=b.createElement(e);t.async=!0;\r\n    t.src=v;s=b.getElementsByTagName(e)[0];\r\n    s.parentNode.insertBefore(t,s)}(window, document,\'script\',\r\n    \'https://connect.facebook.net/en_US/fbevents.js\');\r\n    fbq(\'init\', \'1941241149368816\');\r\n    fbq(\'track\', \'PageView\');\r\n    </script>\r\n    <noscript><img height=\"1\" width=\"1\" style=\"display:none\"\r\n    src=\"https://www.facebook.com/tr?id=1941241149368816&ev=PageView&noscript=1\"\r\n    /></noscript>\r\n    <!-- End Facebook Pixel Code -->', '2021-07-26 05:47:32', '2021-07-26 00:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `main_service` varchar(150) DEFAULT NULL,
  `sub_service` varchar(150) DEFAULT NULL,
  `sub_service_link` varchar(160) DEFAULT NULL,
  `bootstra_class_name` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `main_service`, `sub_service`, `sub_service_link`, `bootstra_class_name`, `created_at`, `updated_at`) VALUES
(1, 'Section 1', 'Design Services', 'Logo & Branding', 'logo_and_branding', 'section-bg-grey-grad', '2022-01-06 06:11:18', '2022-01-06 06:11:18'),
(2, 'Section 1', 'Design Services', 'Graphic Design', 'graphic_design', NULL, '2022-01-06 06:11:18', '2022-01-06 06:11:18'),
(3, 'Section 1', 'Design Services', 'Creative Ads', 'creative_ads', NULL, '2022-01-06 06:11:18', '2022-01-06 06:11:18'),
(4, 'Section 1', 'Design Services', 'Brouchers', 'brouchers', NULL, '2022-01-06 06:11:18', '2022-01-06 06:11:18'),
(5, 'Section 1', 'Website & Mobile Apps', 'Website Design', 'website_design', NULL, '2022-01-06 06:27:17', '2022-01-06 06:27:17'),
(6, 'Section 1', 'Website & Mobile Apps', 'UI / UX Design', 'ui_ux_design', NULL, '2022-01-06 06:27:17', '2022-01-06 06:27:17'),
(7, 'Section 1', 'Website & Mobile Apps', 'Mobile Apps', 'mobile_apps', NULL, '2022-01-06 06:27:17', '2022-01-06 06:27:17'),
(8, 'Section 1', 'Website & Mobile Apps', 'Cloud Software', 'cloud_software', NULL, '2022-01-06 06:27:17', '2022-01-06 06:27:17'),
(9, 'Section 1', 'Website & Mobile Apps', 'eCommerce Expert', 'ecommmerce_expert', NULL, '2022-01-06 06:27:17', '2022-01-06 06:27:17'),
(19, 'Section 1', 'Videos & Photography', 'Food Photography', 'food-photography', NULL, '2022-01-06 12:00:23', '2022-01-06 12:00:23'),
(18, 'Section 1', 'Videos & Photography', 'Products Photography', 'products-photography', NULL, '2022-01-06 12:00:23', '2022-01-06 12:00:23'),
(16, 'Section 1', 'Videos & Photography', 'Corporate Videos', 'corporate-videos', NULL, '2022-01-06 12:00:23', '2022-01-06 12:00:23'),
(17, 'Section 1', 'Videos & Photography', 'Presentation Videos', 'presentation-videos', NULL, '2022-01-06 12:00:23', '2022-01-06 12:00:23'),
(20, 'Section 1', 'Videos & Photography', 'Marketing Videos', 'marketing-videos', NULL, '2022-01-06 12:00:23', '2022-01-06 12:00:23'),
(21, 'Section 1', '3D & 2D Animation', '3D Architecture Videos', '3D-architecture-videos', NULL, '2022-01-06 12:05:08', '2022-01-06 12:05:08'),
(22, 'Section 1', '3D & 2D Animation', '3D Modelling & Animation', '3D-modelling-animation', NULL, '2022-01-06 12:05:08', '2022-01-06 12:05:08'),
(23, 'Section 1', '3D & 2D Animation', 'Explainer Videos', 'explainer-videos', NULL, '2022-01-06 12:05:08', '2022-01-06 12:05:08'),
(24, 'Section 1', '3D & 2D Animation', 'Products Modelling', 'products-modelling', NULL, '2022-01-06 12:05:08', '2022-01-06 12:05:08'),
(25, 'Section 1', '3D & 2D Animation', 'Safety Induction Videos', 'safety-induction-videos', NULL, '2022-01-06 12:05:08', '2022-01-06 12:05:08'),
(26, 'Section 1', 'Consultancy Services', 'Marketing Strategies', 'marketing-strategies', NULL, '2022-01-06 12:13:19', '2022-01-06 12:13:19'),
(27, 'Section 1', 'Consultancy Services', 'Business Plans', 'business-plans', 'section-bg-white', '2022-01-06 12:13:19', '2022-01-06 12:13:19'),
(28, 'Section 1', 'Consultancy Services', 'eCommerce Consultancy', 'ecommerce-consultancy', NULL, '2022-01-06 12:13:19', '2022-01-06 12:13:19'),
(29, 'Section 1', 'Consultancy Services', 'Marketing Consultancy', 'marketing-consultancy', NULL, '2022-01-06 12:13:19', '2022-01-06 12:13:19'),
(30, 'Section 1', 'Consultancy Services', 'Creative Consultancy', 'creative-consultancy', NULL, '2022-01-06 12:13:19', '2022-01-06 12:13:19'),
(31, 'Section 1', 'Digital Marketing', 'Social Media Marketing', 'social-media-marketing', NULL, '2022-01-06 12:15:52', '2022-01-06 12:15:52'),
(32, 'Section 1', 'Digital Marketing', 'Google Ads', 'google-ads', NULL, '2022-01-06 12:15:52', '2022-01-06 12:15:52'),
(33, 'Section 1', 'Digital Marketing', 'Google SEO', 'google-seo', NULL, '2022-01-06 12:15:52', '2022-01-06 12:15:52'),
(34, 'Section 1', 'Digital Marketing', 'Video Marketing', 'video-marketing', NULL, '2022-01-06 12:15:52', '2022-01-06 12:15:52'),
(35, 'Section 1', 'Digital Marketing', 'PPC Management', 'ppc-management', NULL, '2022-01-06 12:15:52', '2022-01-06 12:15:52'),
(37, 'white-bg-services', 'Design Services', 'Logo & Branding', 'logo-branding', 'section-bg-white', '2022-01-08 07:27:23', '2022-01-08 07:27:23'),
(38, 'white-bg-services', 'Design Services', 'Graphic Design', 'graphic-design', 'section-bg-white', '2022-01-08 07:27:23', '2022-01-08 07:27:23'),
(39, 'white-bg-services', 'Design Services', 'Creative Ads', 'creative-ads', 'section-bg-white', '2022-01-08 07:27:23', '2022-01-08 07:27:23'),
(40, 'white-bg-services', 'Design Services', 'Brochures', 'brochures', NULL, '2022-01-08 07:27:23', '2022-01-08 07:27:23'),
(41, 'white-bg-services', 'Design Services', 'Presentations', 'presentations', 'section-bg-white', '2022-01-08 07:27:23', '2022-01-08 07:27:23'),
(42, 'section 3', '1', '1', 'p', 'section-bg-white', '2022-02-15 13:36:52', '2022-02-15 13:36:52'),
(43, 'section 3', '1', '2', 'r', 'section-bg-white', '2022-02-15 13:36:52', '2022-02-15 13:36:52'),
(44, 'section 3', '1', '3', 'e', 'section-bg-white', '2022-02-15 13:36:52', '2022-02-15 13:36:52'),
(45, 'section 3', '1', '4', 's', 'section-bg-white', '2022-02-15 13:36:52', '2022-02-15 13:36:52'),
(46, 'Section 5', '1', '1', 'logo-design', 'section-bg-white', '2022-02-15 13:40:49', '2022-02-15 13:40:49'),
(47, 'Section 5', '1', '2', 'graphic-design', 'section-bg-white', '2022-02-15 13:40:49', '2022-02-15 13:40:49'),
(48, 'Section 5', '1', '3', 'brouchers', 'section-bg-white', '2022-02-15 13:40:49', '2022-02-15 13:40:49'),
(49, 'Section 5', '1', '4', 'presentations', 'section-bg-white', '2022-02-15 13:40:49', '2022-02-15 13:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `page_url`, `page_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'STMP', 'Email Setting', NULL, '2021-07-26 05:05:22', NULL),
(2, NULL, 'File Manager', NULL, '2021-07-26 05:05:44', NULL),
(3, NULL, 'Logo & Images', NULL, '2021-07-26 05:05:46', NULL),
(4, 'SOCIAL', 'Social Links', NULL, '2021-07-26 05:05:56', NULL),
(5, 'SEO', 'SEO Setting', NULL, '2021-07-26 05:06:04', NULL),
(6, NULL, 'Languages', NULL, '2021-07-26 05:06:11', NULL),
(7, NULL, 'Plugins', NULL, '2021-07-26 05:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `page_id` varchar(11) DEFAULT NULL,
  `name` varchar(120) DEFAULT NULL,
  `padingTop` int(11) DEFAULT NULL,
  `paddingBottom` int(11) DEFAULT NULL,
  `image` varchar(260) DEFAULT NULL,
  `text1` varchar(250) DEFAULT NULL,
  `text2` varchar(260) DEFAULT NULL,
  `contact_button_link` varchar(125) DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `page_id`, `name`, `padingTop`, `paddingBottom`, `image`, `text1`, `text2`, `contact_button_link`, `status`, `created_at`, `updated_at`) VALUES
(17, NULL, 'slider 1', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Designing', 'Designing, Branding and Marketing Services', 'test', 'active', '2021-12-27 04:06:40', '2021-12-27 04:06:40'),
(23, NULL, 'slider 1', NULL, NULL, 'No-image-found.jpg', 'creative Agency', 'Web and Apps', 'asdfa', NULL, '2021-12-30 11:03:09', '2021-12-30 11:03:09'),
(24, NULL, 'Slider 2', NULL, NULL, 'No-image-found.jpg', 'Corporate Branding', 'Designing, Branding and Marketing Services', NULL, 'active', '2022-01-07 10:34:18', '2022-01-07 10:34:18'),
(26, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Designing, Branding & Marketing Services', '#', NULL, '2022-01-08 10:14:17', '2022-01-08 10:14:17'),
(27, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Web and Apps UI/UX Design Services', '#', NULL, '2022-01-08 10:14:17', '2022-01-08 10:14:17'),
(28, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Designing, Branding & Marketing Services', '#', 'active', '2022-01-08 10:14:38', '2022-01-08 10:14:38'),
(29, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Web and Apps UI/UX Design Services', '#', NULL, '2022-01-08 10:14:38', '2022-01-08 10:14:38'),
(30, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Videography, Photogrpahy, 2D & 3D Animations Services', '#', NULL, '2022-01-08 10:14:38', '2022-01-08 10:14:38'),
(31, NULL, 'home-slider', NULL, NULL, 'homepage-banner-image.jpg', 'Creative Agency', 'Digital & Social Media Marketing Services', '#', NULL, '2022-01-08 10:14:38', '2022-01-08 10:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `fb` text DEFAULT NULL,
  `insta` text DEFAULT NULL,
  `linedin` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `fb`, `insta`, `linedin`, `twitter`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'https://web.facebook.com/aqsschoolsoft?_rdc=1&_rdr', 'https://www.instagram.com/aqsschoolsoft/', 'https://www.linkedin.com/company/73985845', 'https://twitter.com/aqsschoolsoft', 'Dubai', 'Fortune Tower, Cluster C, Jumeirah Lake Towers,\r\nDubai - United Arab Emirates', '2021-07-26 06:41:37', '2021-07-26 01:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `name`, `link`, `created_at`, `updated_at`) VALUES
(2, 'instagram.png', 'instagram', 'https://instagram.com', '2022-01-03 03:51:40', '2022-01-03 03:51:40'),
(3, 'linkedin.png', 'linkedin-in', 'https://linkedin.com', '2022-01-03 03:51:40', '2022-01-03 03:51:40'),
(4, 'fb_icon.png', 'facebook-f', 'https://facebook.com', '2022-01-03 04:05:38', '2022-01-03 04:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `stmp`
--

CREATE TABLE `stmp` (
  `id` int(11) NOT NULL,
  `host` text DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `port` varchar(255) DEFAULT NULL,
  `encpt` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stmp`
--

INSERT INTO `stmp` (`id`, `host`, `username`, `password`, `port`, `encpt`, `created_at`, `updated_at`) VALUES
(1, 'mail.aqsschoolsoft.com', 'support@aqsschoolsoft.com', 'TH(_f-$7?=}~', '465', 'SSL', '2021-07-26 06:29:33', '2021-07-26 01:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_menus`
--

CREATE TABLE `sub_child_menus` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `child_menu_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `item_link` varchar(255) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_child_menus`
--

INSERT INTO `sub_child_menus` (`id`, `menu_id`, `child_menu_id`, `item_name`, `item_link`, `sorting`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Logo Design', 'logo-design', NULL, '2021-07-24 12:07:43', '2021-07-24 12:07:43'),
(2, NULL, 1, 'Corporate Branding', 'corporate-branding', NULL, '2021-07-24 12:08:29', '2021-07-24 12:08:29'),
(3, NULL, 1, 'Brand Guideline Book', 'brand-guildeline-book', NULL, '2021-07-24 12:08:38', '2021-07-24 12:08:38'),
(4, NULL, 1, 'Brand Packaging Design', 'packaging-design', NULL, '2021-07-24 12:08:56', '2021-07-24 12:08:56'),
(5, NULL, 1, 'Uniform Branding', 'uniform-branding', NULL, '2021-07-24 12:09:04', '2021-07-24 12:09:04'),
(6, NULL, 1, 'Vehicle Branding', 'vehicle-branding', NULL, '2021-07-24 12:09:17', '2021-07-24 12:09:17'),
(7, NULL, 2, 'Creative Ads Design', '#', NULL, '2021-07-24 12:20:03', '2021-07-24 12:20:03'),
(8, NULL, 2, 'Magazine Ads', '#', NULL, '2021-07-24 12:25:57', '2021-07-24 12:25:57'),
(9, NULL, 2, 'Banner Design', '#', NULL, '2021-07-24 12:26:06', '2021-07-24 12:26:06'),
(10, NULL, 2, 'Animated Banner', '#', NULL, '2021-07-24 12:26:16', '2021-07-24 12:26:16'),
(11, NULL, 2, 'Billboard Design', '#', NULL, '2021-07-24 12:26:29', '2021-07-24 12:26:29'),
(12, NULL, 2, 'Signage Design', '#', NULL, '2021-07-24 12:26:40', '2021-07-24 12:26:40'),
(13, NULL, 2, 'Menu Design', '#', NULL, '2021-07-24 12:26:48', '2021-07-24 12:26:48'),
(14, NULL, 2, 'Infographics Design', '#', NULL, '2021-07-24 12:26:58', '2021-07-24 12:26:58'),
(15, NULL, 2, 'Stand Design', '#', NULL, '2021-07-24 12:27:07', '2021-07-24 12:27:07'),
(16, NULL, 3, 'Company Profile Design', NULL, NULL, '2021-07-24 14:23:01', '2021-07-24 14:23:01'),
(17, NULL, 3, 'Brochure Design', NULL, NULL, '2021-07-24 14:23:12', '2021-07-24 14:23:12'),
(18, NULL, 3, 'Catague Design', NULL, NULL, '2021-07-24 14:23:23', '2021-07-24 14:23:23'),
(19, NULL, 3, 'Menu Booklet', NULL, NULL, '2021-07-24 14:23:33', '2021-07-24 14:23:33'),
(20, NULL, 3, 'Pre-Qualification Design', NULL, NULL, '2021-07-24 14:23:44', '2021-07-24 14:23:44'),
(21, NULL, 3, 'Folder Design', NULL, NULL, '2021-07-24 14:23:53', '2021-07-24 14:23:53'),
(22, NULL, 3, 'Flyer Design', NULL, NULL, '2021-07-24 14:24:04', '2021-07-24 14:24:04'),
(23, NULL, 4, 'Business Presentation', NULL, NULL, '2021-07-24 14:24:54', '2021-07-24 14:24:54'),
(24, NULL, 4, 'Sales Presentation', NULL, NULL, '2021-07-24 14:25:03', '2021-07-24 14:25:03'),
(25, NULL, 4, 'Conference Presentation', NULL, NULL, '2021-07-24 14:25:13', '2021-07-24 14:25:13'),
(26, NULL, 4, 'Investment Presentation', NULL, NULL, '2021-07-24 14:25:23', '2021-07-24 14:25:23'),
(27, NULL, 4, 'Seminar Presentation', NULL, NULL, '2021-07-24 14:25:33', '2021-07-24 14:25:33'),
(28, NULL, 4, 'Creative Presentation', NULL, NULL, '2021-07-24 14:25:43', '2021-07-24 14:25:43'),
(29, NULL, 4, 'Product Presentation', NULL, NULL, '2021-07-24 14:25:53', '2021-07-24 14:25:53'),
(30, NULL, 5, 'Product Strategy', NULL, NULL, '2021-07-24 14:29:27', '2021-07-24 14:29:27'),
(31, NULL, 5, 'UI and UX Design', NULL, NULL, '2021-07-24 14:29:37', '2021-07-24 14:29:37'),
(32, NULL, 5, 'Front-end Development', NULL, NULL, '2021-07-24 14:29:46', '2021-07-24 14:29:46'),
(33, NULL, 5, 'Back-end Development', NULL, NULL, '2021-07-24 14:29:56', '2021-07-24 14:29:56'),
(34, NULL, 5, 'QA', NULL, NULL, '2021-07-24 14:30:02', '2021-07-24 14:30:02'),
(35, NULL, 6, 'Corporate Website', NULL, NULL, '2021-07-24 14:30:16', '2021-07-24 14:30:16'),
(36, NULL, 6, 'Product Website', NULL, NULL, '2021-07-24 14:30:26', '2021-07-24 14:30:26'),
(37, NULL, 6, 'Promot Website', NULL, NULL, '2021-07-24 14:30:36', '2021-07-24 14:30:36'),
(38, NULL, 6, 'Landing Pages', NULL, NULL, '2021-07-24 14:30:45', '2021-07-24 14:30:45'),
(39, NULL, 6, 'eCommerce Website', NULL, NULL, '2021-07-24 14:30:55', '2021-07-24 14:30:55'),
(40, NULL, 6, 'eCommerce Marketplace', NULL, NULL, '2021-07-24 14:31:04', '2021-07-24 14:31:04'),
(41, NULL, 6, 'Cloud Softwares', NULL, NULL, '2021-07-24 14:31:14', '2021-07-24 14:31:14'),
(42, NULL, 6, 'Online Portals', NULL, NULL, '2021-07-24 14:31:25', '2021-07-24 14:31:25'),
(43, NULL, 7, 'Android Apps', NULL, NULL, '2021-07-24 14:31:40', '2021-07-24 14:31:40'),
(44, NULL, 7, 'iOS Apps', NULL, NULL, '2021-07-24 14:31:49', '2021-07-24 14:31:49'),
(45, NULL, 7, 'Flutter Apps', NULL, NULL, '2021-07-24 14:31:58', '2021-07-24 14:31:58'),
(46, NULL, 7, 'Native Apps', NULL, NULL, '2021-07-24 14:32:09', '2021-07-24 14:32:09'),
(47, NULL, 8, 'Web Hosting', NULL, NULL, '2021-07-24 14:32:22', '2021-07-24 14:32:22'),
(48, NULL, 8, 'Email Service', NULL, NULL, '2021-07-24 14:32:30', '2021-07-24 14:32:30'),
(49, NULL, 8, 'Technical Support', NULL, NULL, '2021-07-24 14:32:41', '2021-07-24 14:32:41'),
(50, NULL, 8, 'Web & App Maintenance', NULL, NULL, '2021-07-24 14:32:50', '2021-07-24 14:32:50'),
(51, NULL, 8, 'Server Maintenance', NULL, NULL, '2021-07-24 14:33:00', '2021-07-24 14:33:00'),
(52, NULL, 9, 'Corporate Videos', NULL, NULL, '2021-07-24 14:34:32', '2021-07-24 14:34:32'),
(53, NULL, 9, 'Presentation Videos', NULL, NULL, '2021-07-24 14:34:43', '2021-07-24 14:34:43'),
(54, NULL, 9, 'Process Videos', NULL, NULL, '2021-07-24 14:34:52', '2021-07-24 14:34:52'),
(55, NULL, 9, 'Project Videos', NULL, NULL, '2021-07-24 14:35:02', '2021-07-24 14:35:02'),
(56, NULL, 9, 'Social Media Videos', NULL, NULL, '2021-07-24 14:35:11', '2021-07-24 14:35:11'),
(57, NULL, 9, 'Marketing Videos', NULL, NULL, '2021-07-24 14:35:21', '2021-07-24 14:35:21'),
(58, NULL, 10, 'Corporate Photography', 'corporate-photography', NULL, '2021-07-24 14:35:35', '2021-07-24 14:35:35'),
(59, NULL, 10, 'Products Photography', NULL, NULL, '2021-07-24 14:35:45', '2021-07-24 14:35:45'),
(60, NULL, 10, 'Location Photography', NULL, NULL, '2021-07-24 14:35:54', '2021-07-24 14:35:54'),
(61, NULL, 10, 'Menu or Food Photography', NULL, NULL, '2021-07-24 14:36:03', '2021-07-24 14:36:03'),
(62, NULL, 10, 'Restaurant Photography', NULL, NULL, '2021-07-24 14:36:20', '2021-07-24 14:36:20'),
(63, NULL, 10, 'Team Photography', NULL, NULL, '2021-07-24 14:36:29', '2021-07-24 14:36:29'),
(64, NULL, 10, 'Creative Photography', NULL, NULL, '2021-07-24 14:36:38', '2021-07-24 14:36:38'),
(65, NULL, 11, 'Architecture Animation', NULL, NULL, '2021-07-24 14:37:07', '2021-07-24 14:37:07'),
(66, NULL, 11, 'Products 3D Videos', NULL, NULL, '2021-07-24 14:37:17', '2021-07-24 14:37:17'),
(67, NULL, 11, '3D Safety Induction Videos', NULL, NULL, '2021-07-24 14:37:26', '2021-07-24 14:37:26'),
(68, NULL, 11, '3D Animated Videos', NULL, NULL, '2021-07-24 14:37:35', '2021-07-24 14:37:35'),
(69, NULL, 11, 'Project 3D Videos', NULL, NULL, '2021-07-24 14:37:44', '2021-07-24 14:37:44'),
(70, NULL, 11, '3D Character Animation Videos', NULL, NULL, '2021-07-24 14:37:54', '2021-07-24 14:37:54'),
(71, NULL, 11, '3D Interior Modelling', NULL, NULL, '2021-07-24 14:38:03', '2021-07-24 14:38:03'),
(72, NULL, 12, 'Motion Graphics Videos', 'Motion Graphics Videos', NULL, '2021-07-24 14:38:17', '2021-07-24 14:38:17'),
(73, NULL, 12, 'Explainer Videos', NULL, NULL, '2021-07-24 14:38:27', '2021-07-24 14:38:27'),
(74, NULL, 12, 'Cartoon Animated Videos', NULL, NULL, '2021-07-24 14:38:36', '2021-07-24 14:38:36'),
(75, NULL, 12, '2D Presentation Videos', NULL, NULL, '2021-07-24 14:38:45', '2021-07-24 14:38:45'),
(76, NULL, 12, 'Animated Marketing Videos', NULL, NULL, '2021-07-24 14:38:53', '2021-07-24 14:38:53'),
(77, NULL, 13, 'Content Markeing', NULL, NULL, '2021-07-24 14:40:43', '2021-07-24 14:40:43'),
(78, NULL, 13, 'Search Engine Optimization (SEO)', NULL, NULL, '2021-07-24 14:41:00', '2021-07-24 14:41:00'),
(79, NULL, 13, 'Search Engine Markeing (SEM)', NULL, NULL, '2021-07-24 14:41:10', '2021-07-24 14:41:10'),
(80, NULL, 13, 'Google AdWords', NULL, NULL, '2021-07-24 14:41:20', '2021-07-24 14:41:20'),
(81, NULL, 13, 'Email Marketing', NULL, NULL, '2021-07-24 14:41:29', '2021-07-24 14:41:29'),
(82, NULL, 13, 'Landing Pages', NULL, NULL, '2021-07-24 14:41:37', '2021-07-24 14:41:37'),
(83, NULL, 13, 'Lead Generation', NULL, NULL, '2021-07-24 14:41:48', '2021-07-24 14:41:48'),
(84, NULL, 14, 'Social Media Management', NULL, NULL, '2021-07-24 14:42:02', '2021-07-24 14:42:02'),
(85, NULL, 14, 'Video Marketing', NULL, NULL, '2021-07-24 14:42:12', '2021-07-24 14:42:12'),
(86, NULL, 14, 'Pay-Per-Click Advertising (PPC)', NULL, NULL, '2021-07-24 14:42:22', '2021-07-24 14:42:22'),
(87, NULL, 14, 'YouTube Marketing', NULL, NULL, '2021-07-24 14:42:32', '2021-07-24 14:42:32'),
(88, NULL, 14, 'Personal Promotion', NULL, NULL, '2021-07-24 14:42:40', '2021-07-24 14:42:40'),
(89, NULL, 14, 'F&B Marketing', NULL, NULL, '2021-07-24 14:42:49', '2021-07-24 14:42:49'),
(90, NULL, 15, 'Marketing Plans & Strategy', NULL, NULL, '2021-07-24 14:43:04', '2021-07-24 14:43:04'),
(91, NULL, 15, 'Digital Marketing Strategy', NULL, NULL, '2021-07-24 14:43:15', '2021-07-24 14:43:15'),
(92, NULL, 15, 'eCommerce Consultancy', NULL, NULL, '2021-07-24 14:43:24', '2021-07-24 14:43:24'),
(93, NULL, 15, 'Marketing Consultancy', NULL, NULL, '2021-07-24 14:43:33', '2021-07-24 14:43:33'),
(94, NULL, 15, 'Creative Consultancy', NULL, NULL, '2021-07-24 14:43:42', '2021-07-24 14:43:42'),
(95, NULL, 15, 'Business Plans', NULL, NULL, '2021-07-24 14:43:51', '2021-07-24 14:43:51'),
(96, NULL, 16, 'Logo & Branding', NULL, NULL, '2021-07-24 14:48:08', '2021-07-24 14:48:08'),
(97, NULL, 16, 'Graphic Design', NULL, NULL, '2021-07-24 14:48:16', '2021-07-24 14:48:16'),
(98, NULL, 16, 'Creative Ads', NULL, NULL, '2021-07-24 14:48:24', '2021-07-24 14:48:24'),
(99, NULL, 16, 'Brochures', NULL, NULL, '2021-07-24 14:48:32', '2021-07-24 14:48:32'),
(100, NULL, 16, 'Presentations', NULL, NULL, '2021-07-24 14:48:38', '2021-07-24 14:48:38'),
(101, NULL, 17, 'Website Design', NULL, NULL, '2021-07-24 14:48:49', '2021-07-24 14:48:49'),
(102, NULL, 17, 'UI / UX Desgin', NULL, NULL, '2021-07-24 14:48:59', '2021-07-24 14:48:59'),
(103, NULL, 17, 'Mobile Apps', NULL, NULL, '2021-07-24 14:49:09', '2021-07-24 14:49:09'),
(104, NULL, 17, 'Cloud Softwares', NULL, NULL, '2021-07-24 14:49:19', '2021-07-24 14:49:19'),
(105, NULL, 17, 'eCommerce Experts', NULL, NULL, '2021-07-24 14:49:25', '2021-07-24 14:49:25'),
(106, NULL, 18, 'Corporate Videos', NULL, NULL, '2021-07-24 14:49:39', '2021-07-24 14:49:39'),
(107, NULL, 18, 'Presentation Videos', NULL, NULL, '2021-07-24 14:49:47', '2021-07-24 14:49:47'),
(108, NULL, 18, 'Products Photography', NULL, NULL, '2021-07-24 14:49:53', '2021-07-24 14:49:53'),
(109, NULL, 18, 'Food Photography', NULL, NULL, '2021-07-24 14:50:00', '2021-07-24 14:50:00'),
(110, NULL, 18, 'Marketing Videos', NULL, NULL, '2021-07-24 14:50:08', '2021-07-24 14:50:08'),
(111, NULL, 19, '3D Architecture Videos', '3D-Architecture-Videos', NULL, '2021-07-24 14:50:21', '2021-07-24 14:50:21'),
(112, NULL, 19, '3D Modelling & Animation', NULL, NULL, '2021-07-24 14:50:29', '2021-07-24 14:50:29'),
(113, NULL, 19, 'Explainer Videos', NULL, NULL, '2021-07-24 14:50:35', '2021-07-24 14:50:35'),
(114, NULL, 19, 'Products Modelling', NULL, NULL, '2021-07-24 14:50:41', '2021-07-24 14:50:41'),
(115, NULL, 19, 'Safety Induction Videos', NULL, NULL, '2021-07-24 14:50:48', '2021-07-24 14:50:48'),
(116, NULL, 20, 'Marketing Strategies', NULL, NULL, '2021-07-24 14:50:59', '2021-07-24 14:50:59'),
(117, NULL, 20, 'Business Plans', NULL, NULL, '2021-07-24 14:51:06', '2021-07-24 14:51:06'),
(118, NULL, 20, 'eCommerce Consultancy', NULL, NULL, '2021-07-24 14:51:13', '2021-07-24 14:51:13'),
(119, NULL, 20, 'Marketing Consultancy', NULL, NULL, '2021-07-24 14:51:20', '2021-07-24 14:51:20'),
(120, NULL, 20, 'Creative Consultancy', NULL, NULL, '2021-07-24 14:51:27', '2021-07-24 14:51:27'),
(121, NULL, 21, 'Social Media Marketing', NULL, NULL, '2021-07-24 14:51:50', '2021-07-24 14:51:50'),
(122, NULL, 21, 'Google Ads', NULL, NULL, '2021-07-24 14:51:52', '2021-07-24 14:51:52'),
(123, NULL, 21, 'Google SEO', NULL, NULL, '2021-07-24 14:51:58', '2021-07-24 14:51:58'),
(124, NULL, 21, 'Video Marketing', NULL, NULL, '2021-07-24 14:52:04', '2021-07-24 14:52:04'),
(125, NULL, 21, 'PPC Management', NULL, NULL, '2021-07-24 14:52:13', '2021-07-24 14:52:13'),
(126, NULL, 22, 'Leadership', NULL, NULL, '2021-07-24 15:00:57', '2021-07-24 15:00:57'),
(127, NULL, 22, 'Overview', NULL, NULL, '2021-07-24 15:01:04', '2021-07-24 15:01:04'),
(128, NULL, 22, 'Services', NULL, NULL, '2021-07-24 15:01:09', '2021-07-24 15:01:09'),
(129, NULL, 23, 'Design Services', NULL, NULL, '2021-07-24 15:01:21', '2021-07-24 15:01:21'),
(130, NULL, 23, 'Websites & mobile Apps', NULL, NULL, '2021-07-24 15:01:28', '2021-07-24 15:01:28'),
(131, NULL, 23, 'Videos & photography', NULL, NULL, '2021-07-24 15:01:35', '2021-07-24 15:01:35'),
(132, NULL, 23, '3D & 2D Animation', NULL, NULL, '2021-07-24 15:01:41', '2021-07-24 15:01:41'),
(133, NULL, 23, 'Digital Marketing', NULL, NULL, '2021-07-24 15:01:47', '2021-07-24 15:01:47'),
(134, NULL, 23, 'Consultancy Services', NULL, NULL, '2021-07-24 15:01:54', '2021-07-24 15:01:54'),
(135, NULL, 24, 'FMCG', NULL, NULL, '2021-07-24 15:02:06', '2021-07-24 15:02:06'),
(136, NULL, 24, 'F&B', NULL, NULL, '2021-07-24 15:02:13', '2021-07-24 15:02:13'),
(137, NULL, 24, 'Industrial', NULL, NULL, '2021-07-24 15:02:19', '2021-07-24 15:02:19'),
(138, NULL, 24, 'Technology', NULL, NULL, '2021-07-24 15:02:26', '2021-07-24 15:02:26'),
(139, NULL, 24, 'Government', NULL, NULL, '2021-07-24 15:02:33', '2021-07-24 15:02:33'),
(140, NULL, 24, 'Aviation', NULL, NULL, '2021-07-24 15:02:38', '2021-07-24 15:02:38'),
(141, NULL, 24, 'Finance', NULL, NULL, '2021-07-24 15:02:44', '2021-07-24 15:02:44'),
(142, NULL, 24, 'Trading', NULL, NULL, '2021-07-24 15:02:49', '2021-07-24 15:02:49'),
(146, 5, 23, 'services1', 'services1', NULL, '2021-12-11 12:10:58', NULL),
(147, 1, 1, 'testing_logo_design1', 'testing_logo_design1', NULL, '2021-12-11 12:13:28', NULL),
(148, 1, 1, 'newSubChildNav', 'newSubChildNav', NULL, '2021-12-11 15:49:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `section_name` varchar(160) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `section_name`, `page_id`, `image`, `designation`, `name`, `created_at`, `updated_at`) VALUES
(9, 'team group 8', NULL, 'No-image-png-1.png', 'fasf asfd1234', 'asdf asdf asdfasf as1234', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(10, 'team group 8', NULL, 'image3.jpg', 'asdsad', 'asfdafd fas d', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(11, 'team group 8', NULL, 'image1.jpg', 'asd fasdf', 'saf sdff', '2021-12-30 15:05:55', '2021-12-30 15:05:55'),
(12, 'team group 2', NULL, 'team-1.jpg', 'Manger', 'Hassan', '2021-12-30 20:15:06', '2021-12-30 20:15:06'),
(13, 'team group 2', NULL, 'image3.jpg', 'asfasfdsa', 'sdfsdfasf asf', '2021-12-30 20:15:06', '2021-12-30 20:15:06'),
(14, 'team group 2', NULL, 'imaeg2.jpg', 'asfasfdsa', 'asdfasdfas', '2021-12-30 20:15:06', '2021-12-30 20:15:06'),
(15, 'team-section-01', NULL, 'profile-pic-1.jpg', 'CEO, Founder & Creative Director', 'Hamid Shah', '2022-01-08 06:57:00', '2022-01-08 06:57:00'),
(16, 'team-section-01', NULL, 'team-1.jpg', 'CEO, Founder & Creative Director', 'Hamid Shah', '2022-01-08 06:57:00', '2022-01-08 06:57:00'),
(17, 'team-section-01', NULL, 'profile-pic-1.jpg', 'CEO, Founder & Creative Director', 'CEO, Founder & Creative Director', '2022-01-08 06:57:00', '2022-01-08 06:57:00'),
(18, 'team-section-01', NULL, 'team-1.jpg', 'CEO, Founder & Creative Director', 'CEO, Founder & Creative Director', '2022-01-08 06:57:01', '2022-01-08 06:57:01'),
(19, 'team-section-01', NULL, 'profile-pic-1.jpg', 'CEO, Founder & Creative Director', 'CEO, Founder & Creative Director', '2022-01-08 06:57:01', '2022-01-08 06:57:01'),
(20, 'team-section-01', NULL, 'team-1.jpg', 'CEO, Founder & Creative Director', 'CEO, Founder & Creative Director', '2022-01-08 06:57:01', '2022-01-08 06:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 1, NULL, '$2y$10$W3lra9WWzZ2VtSyf8Vxbh.gapGUu7ohikPMMka7pTtX8x6wfhJs06', 'IrGZ1jrway5PKKtPcSWjUaWmWlEEXtLjOjXj8Hh0njGHW6qHXh5CGODseJsP', '2021-12-08 11:38:44', '2021-12-08 11:38:44'),
(2, 'testing', 'testing@test.com', 1, NULL, '$2y$10$iRR8Juuu5BGvgxLl5o/GQ.sCme7plQd4Hd3ZLvyia.dBnUNB2CXl6', NULL, '2021-12-09 00:36:40', '2021-12-09 00:36:40'),
(6, 'Faiz', 'faiz@faiz.com', 3, NULL, '$2y$10$QpU5GDUVv9b9AOxWiB.eXuzXVXkoOxjxd7BZcBTuUcH7DEMJh758a', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usersold`
--

CREATE TABLE `usersold` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usersold`
--

INSERT INTO `usersold` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AQ', 'jqsystech@gmail.com', NULL, '$2y$10$hAlPi8yWt4LOD1NVJ3INcuIBvIfqTYqIv2zyyashoKzvxu.JWN3Ra', NULL, '2021-07-08 00:49:35', '2021-07-08 00:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `video_title` varchar(120) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `video_link` varchar(150) DEFAULT NULL,
  `contact_button_link` varchar(150) DEFAULT NULL,
  `button_label` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video_title`, `page_id`, `video_link`, `contact_button_link`, `button_label`, `created_at`, `updated_at`) VALUES
(1, 'video 2', 'Know more about us', NULL, 'https://www.youtube.com/embed/8AwIJZj07s8', 'https://youtu.be/nLbC1Y-nmqs', 'Contact us', '2021-12-13 05:32:05', '2021-12-13 05:32:05'),
(2, 'video 1234', 'checking1234', NULL, 'https://www.youtube.com/embed/8AwIJZj07s8', 'button1234', 'meeting1233', '2021-12-13 12:26:03', '2021-12-13 12:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_content`
--
ALTER TABLE `case_study_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_industries`
--
ALTER TABLE `case_study_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study_services`
--
ALTER TABLE `case_study_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_menus`
--
ALTER TABLE `child_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientandparterimage`
--
ALTER TABLE `clientandparterimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobsold`
--
ALTER TABLE `failed_jobsold`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_bottoms`
--
ALTER TABLE `footer_bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_sections`
--
ALTER TABLE `footer_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_menu`
--
ALTER TABLE `header_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry_services`
--
ALTER TABLE `industry_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_component`
--
ALTER TABLE `master_component`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrationsold`
--
ALTER TABLE `migrationsold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_opinions`
--
ALTER TABLE `news_and_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_detail`
--
ALTER TABLE `page_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_section`
--
ALTER TABLE `page_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_1`
--
ALTER TABLE `para_style_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_2`
--
ALTER TABLE `para_style_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_3`
--
ALTER TABLE `para_style_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_4`
--
ALTER TABLE `para_style_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `para_style_5`
--
ALTER TABLE `para_style_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_15`
--
ALTER TABLE `section_15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_16`
--
ALTER TABLE `section_16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_17`
--
ALTER TABLE `section_17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_18`
--
ALTER TABLE `section_18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_19`
--
ALTER TABLE `section_19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_20`
--
ALTER TABLE `section_20`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_21`
--
ALTER TABLE `section_21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_22`
--
ALTER TABLE `section_22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_23`
--
ALTER TABLE `section_23`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stmp`
--
ALTER TABLE `stmp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_child_menus`
--
ALTER TABLE `sub_child_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersold`
--
ALTER TABLE `usersold`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `case_study_content`
--
ALTER TABLE `case_study_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `case_study_industries`
--
ALTER TABLE `case_study_industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `case_study_services`
--
ALTER TABLE `case_study_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `child_menus`
--
ALTER TABLE `child_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `clientandparterimage`
--
ALTER TABLE `clientandparterimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobsold`
--
ALTER TABLE `failed_jobsold`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_bottoms`
--
ALTER TABLE `footer_bottoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_sections`
--
ALTER TABLE `footer_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `header_menu`
--
ALTER TABLE `header_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `industry_services`
--
ALTER TABLE `industry_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_component`
--
ALTER TABLE `master_component`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrationsold`
--
ALTER TABLE `migrationsold`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_and_opinions`
--
ALTER TABLE `news_and_opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `page_detail`
--
ALTER TABLE `page_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1645;

--
-- AUTO_INCREMENT for table `page_section`
--
ALTER TABLE `page_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `para_style_1`
--
ALTER TABLE `para_style_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `para_style_2`
--
ALTER TABLE `para_style_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `para_style_3`
--
ALTER TABLE `para_style_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `para_style_4`
--
ALTER TABLE `para_style_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `para_style_5`
--
ALTER TABLE `para_style_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `section_15`
--
ALTER TABLE `section_15`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `section_16`
--
ALTER TABLE `section_16`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `section_17`
--
ALTER TABLE `section_17`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_18`
--
ALTER TABLE `section_18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section_19`
--
ALTER TABLE `section_19`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_20`
--
ALTER TABLE `section_20`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_21`
--
ALTER TABLE `section_21`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_22`
--
ALTER TABLE `section_22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section_23`
--
ALTER TABLE `section_23`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stmp`
--
ALTER TABLE `stmp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_child_menus`
--
ALTER TABLE `sub_child_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersold`
--
ALTER TABLE `usersold`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
