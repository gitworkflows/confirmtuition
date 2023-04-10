-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 11:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reg_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incorrect_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correct_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `efemale` int(11) DEFAULT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `essc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deathhdate` date DEFAULT NULL,
  `deathplace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizen_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admit_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marksheet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssc_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `board_testimonial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_reg_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `death_reg_number` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_method` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `reg_number`, `incorrect_name`, `correct_name`, `efemale`, `father`, `mother`, `mobile`, `email`, `address`, `essc`, `birthdate`, `birthplace`, `deathhdate`, `deathplace`, `emale`, `app_photo`, `certificate_type`, `exam`, `exam_name`, `year`, `institute`, `board`, `country`, `group`, `result`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`, `sub12`, `birth_certificate`, `death_certificate`, `citizen_certificate`, `reg_card`, `admit_card`, `marksheet`, `ssc_certificate`, `board_testimonial`, `birth_reg_number`, `death_reg_number`, `delivery_method`, `status`, `created_at`, `updated_at`) VALUES
(15, 1, NULL, 'Meredith Cantrell', 'Reece Hendrix', NULL, 'Aliquam autem et qui', 'Nesciunt in accusam', '97', 'zorusasa@mailinator.com', 'Corporis sequi exped', NULL, '1998-10-03', 'Vel voluptatum tenet', NULL, NULL, '1', '/uploaded/product/1646152994_621e4d22804c9.png', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 10:43:14', '2022-03-01 10:43:14'),
(16, 3, NULL, 'Phelan Johns', 'Ocean Chase', NULL, 'Cumque eos do volupt', 'Et libero dolorem eo', '57', 'faresidyj@mailinator.com', 'Est dolorem voluptat', NULL, '1978-03-07', 'Quia est eum aperiam', NULL, NULL, '1', '/uploaded/product/1646153607_621e4f87e5744.png', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 10:53:28', '2022-03-01 10:53:28'),
(17, 3, NULL, 'Timon Tillman', 'Mason Wong', 1, 'Qui quia occaecat et', 'Omnis possimus et i', '39', 'besata@mailinator.com', 'Tempore suscipit id', NULL, '1988-11-09', 'Proident magna prov', NULL, NULL, NULL, 'uploaded/product/1646157608_621e5f28f3331.gif', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 12:00:09', '2022-03-01 12:00:09'),
(18, 3, NULL, 'Rachel Mcgowan', 'Wilma Collins', NULL, 'Elit ab laborum nob', 'Pariatur Dignissimo', '22', 'myriwuve@mailinator.com', 'Ratione quia molesti', NULL, '2020-11-22', 'Sint Nam itaque max', NULL, NULL, NULL, 'uploaded/product/1646157695_621e5f7f194d1.gif', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 12:01:35', '2022-03-01 12:01:35'),
(19, 3, NULL, 'Tatiana Sharpe', 'Cassidy Rhodes', NULL, 'Aut architecto dolor', 'Deserunt excepturi v', '2', 'zalacoqeh@mailinator.com', 'Qui ullamco quo mole', NULL, '2014-04-07', 'Enim officia dolorib', NULL, NULL, NULL, '/uploaded/product/1646157914_621e605a02900.jpg', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 12:05:14', '2022-03-01 12:05:14'),
(20, 3, NULL, 'Bree Tanner', 'Clare Crosby', 1, 'Quasi aliquip dolori', 'Dolores nostrum ipsa', '76', 'ryfaw@mailinator.com', 'Pariatur Quia fugia', NULL, '1984-03-21', 'Voluptatem Quo mole', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1646158136_621e6138833b1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 12:08:56', '2022-03-01 12:08:56'),
(21, 3, NULL, 'Chloe Small', 'Jenna Wilcox', 1, 'Irure voluptatem ea', 'Dolor aliqua Modi a', '99', 'wyxef@mailinator.com', 'Dignissimos deserunt', NULL, '2015-08-31', 'Dignissimos non quam', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1646158332_621e61fc897b2.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-01 12:12:12', '2022-03-01 12:12:12'),
(22, 3, NULL, 'Amal Whitney', 'Xander Walker', 1, 'Eum irure rem error', 'Aperiam nulla incidi', '49', 'zite@mailinator.com', 'Magnam et aut velit', NULL, '1991-10-03', 'Porro sunt velit co', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '145', NULL, NULL, 0, '2022-03-07 14:44:12', '2022-03-07 14:44:12'),
(23, 3, NULL, 'Ivor Cotton', 'Brynn Todd', 1, 'Nihil vel nihil cumq', 'Qui necessitatibus i', '40', 'wadyca@mailinator.com', 'Dolor doloremque ab', NULL, NULL, NULL, '1971-12-30', 'Et sunt qui porro om', NULL, NULL, 'death', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '77', NULL, NULL, 0, '2022-03-07 15:18:36', '2022-03-07 15:18:36'),
(24, 3, '144', 'Amy Hubbard', 'Wynter Nicholson', NULL, 'Proident exercitati', 'Sunt aspernatur sae', '32', 'hypujuhu@mailinator.com', 'Esse aut recusandae', '1', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-03-28 12:31:37', '2022-03-28 12:31:37'),
(25, 3, '334', 'Lionel Castro', 'Paloma Hawkins', 1, 'Dolor id est qui bea', 'In sed sapiente sit', '76', 'tabuvy@mailinator.com', 'Unde veniam recusan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registration', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-04-08 05:39:30', '2022-04-08 05:39:30'),
(26, 3, NULL, 'Alice Velez', 'Rafael Rosa', NULL, 'Vitae laudantium qu', 'Voluptatem blanditii', '56', 'nolosi@mailinator.com', 'Optio ea eligendi c', NULL, '2021-11-01', 'Et et et exercitatio', NULL, NULL, '1', '/uploaded/product/1649418540_6250212c1fa03.png', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '236', NULL, NULL, 0, '2022-04-08 05:49:00', '2022-04-08 05:49:00'),
(27, 3, NULL, 'Remedios Vance', 'Lamar Holcomb', 1, 'Incidunt esse velit', 'Et veniam ad accusa', '2', 'zadetykebo@mailinator.com', 'Iusto incidunt cumq', NULL, '1972-02-26', 'Dolor expedita amet', NULL, NULL, NULL, '/uploaded/product/1649418829_6250224d81afd.jpg', 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '446', NULL, NULL, 0, '2022-04-08 05:53:49', '2022-04-08 05:53:49'),
(28, 3, NULL, 'Amaya Wells', 'Henry Key', NULL, 'Necessitatibus ullam', 'Ipsa sit fugiat vol', '97', 'racyrydu@mailinator.com', 'Itaque suscipit dolo', NULL, '1985-04-24', 'Mollitia occaecat co', NULL, NULL, '1', NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649419069_6250233d57782.png', NULL, 'C:\\xampp\\tmp\\phpA401.tmp', NULL, NULL, NULL, NULL, NULL, '226', NULL, NULL, 0, '2022-04-08 05:57:49', '2022-04-08 05:57:49'),
(29, 3, NULL, 'Anthony Mooney', 'Dakota Jacobson', 1, 'Quas iste molestiae', 'Qui ratione cupidata', '12', 'dyka@mailinator.com', 'Repudiandae odit ali', NULL, '2010-02-19', 'Veniam dolores quia', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php398D.tmp', NULL, NULL, NULL, NULL, NULL, '482', NULL, NULL, 0, '2022-04-08 06:01:44', '2022-04-08 06:01:44'),
(30, 3, NULL, 'Zephania Palmer', 'Deborah Cook', NULL, 'Error sint nemo sed', 'Ipsam eligendi est', '9', 'nifetar@mailinator.com', 'Quis qui commodo inc', NULL, '1994-01-10', 'Voluptas est archite', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649419561_62502529087c3.png', '/uploaded/product/1649419561_625025290a166.png', 'C:\\xampp\\tmp\\php2306.tmp', NULL, NULL, NULL, NULL, NULL, '445', NULL, NULL, 0, '2022-04-08 06:06:01', '2022-04-08 06:06:01'),
(31, 3, NULL, 'Daria Fox', 'Knox Buchanan', 1, 'Consectetur sunt iru', 'Qui magni dolore et', '29', 'jyciki@mailinator.com', 'Numquam vel est et h', NULL, '1999-10-03', 'Nemo esse deleniti t', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649419647_6250257f0458a.png', NULL, NULL, NULL, NULL, NULL, '752', NULL, NULL, 0, '2022-04-08 06:07:27', '2022-04-08 06:07:27'),
(32, 3, '762', 'Gwendolyn Simmons', 'Debra Barnes', 1, 'Voluptatem Saepe no', 'Atque voluptas ad vo', '90', 'gevyw@mailinator.com', 'Fugiat itaque dolor', NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649491198_62513cfe28f50.jpg', 'certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649491198_62513cfe2afcd.png', '/uploaded/product/1649491198_62513cfe2a968.png', NULL, NULL, NULL, 0, '2022-04-09 01:59:58', '2022-04-09 01:59:58'),
(33, 3, '676', 'Vernon Rosario', 'Echo Rivas', NULL, 'Quaerat laudantium', 'Amet qui magnam aut', '18', 'jibavij@mailinator.com', 'Aliquam optio ut vo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-04-09 02:02:21', '2022-04-09 02:02:21'),
(34, 3, '223', 'Kenneth Schultz', 'Summer Riley', 1, 'Proident corporis f', 'Totam quod pariatur', '57', 'wogacelyxo@mailinator.com', 'Consectetur nulla ip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'certificate', 'msc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-04-09 02:13:19', '2022-04-09 02:13:19'),
(35, 3, '619', 'Dylan Hess', 'Alisa Solis', 1, 'Commodo temporibus e', 'Et dolore enim dolor', '62', 'nidus@mailinator.com', 'Nisi unde cupiditate', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'certificate', 'ssc', 'Vera Singleton', '2017', 'Cillum at iure exerc', 'Rerum reprehenderit', 'Reiciendis consequat', 'Eu exercitation enim', 'Sit consequuntur ver', 'Ut expedita sequi ex', 'Consequat Veritatis', 'Consectetur sit enim', 'Iste eum at ut offic', 'Voluptatem Fugit p', 'Ad quod suscipit qui', 'Eos nemo et dolorem', 'Quidem exercitation', 'Ad esse dicta dolor', 'Molestias dolor qui', 'Est adipisci irure a', 'Est ex repellendus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-04-09 03:00:21', '2022-08-27 03:28:22'),
(36, 3, '592', 'Levi Blevins', 'Patrick Diaz', NULL, 'Duis debitis nihil e', 'Corporis ad nesciunt', '50456', 'xevelir@mailinator.com', 'Velit ex quis at min', NULL, NULL, NULL, NULL, NULL, '1', NULL, 'certificate', 'msc', 'September Jennings', '1987', 'Est placeat consect', 'Ullamco cupidatat vo', 'Architecto ad eligen', 'Nemo sed aut laborio', 'Ex sed non temporibu', 'Sit perspiciatis at', 'Vel voluptate corpor', 'Sed non aut nulla es', 'Tempore perspiciati', 'Id voluptatum tempor', 'Sit tenetur eveniet', 'Dicta enim maxime qu', 'Et ut unde qui ut', 'Libero sit sed ad do', 'Delectus nisi corpo', 'Quas numquam eum exe', 'Molestias similique', NULL, NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649496328_625151088fdda.png', '/uploaded/product/1649496328_625151088e3d0.png', NULL, NULL, 2, 3, '2022-04-09 03:25:28', '2022-08-27 03:30:37'),
(37, 3, '539', 'Aileen Davenport', 'Aretha Marks', 1, 'Illum voluptas cons', 'Fugit fuga Provide', '66', 'dagytaxusa@mailinator.com', 'Placeat totam sint', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'number', 'hsc', 'Kitra Emerson', '1999', 'Qui inventore obcaec', 'Velit vel consequatu', 'Corrupti lorem ulla', 'Laudantium repudian', 'Aliquid aut omnis vo', 'Voluptate rerum exce', 'Pariatur Necessitat', 'Dolor et amet culpa', 'Nostrum cumque volup', 'Quia temporibus volu', 'Nesciunt nobis cupi', 'Veniam assumenda es', 'Sit excepturi animi', 'Rerum iusto proident', 'Voluptatibus ut veli', 'Illo cillum Nam qui', 'Dolorem officiis sed', NULL, NULL, NULL, NULL, NULL, '/uploaded/product/1649496660_62515254b6cd2.png', NULL, NULL, NULL, NULL, 1, 2, '2022-04-09 03:31:00', '2022-08-27 03:25:45'),
(38, NULL, NULL, 'Jeremy Berry', 'Hamilton Nixon', NULL, 'Ipsa sit in et nos', 'Labore deserunt moll', '01793478194', 'anasbinsabiet@gmail.com', 'Ea nobis dolor beata', NULL, '2013-12-02', 'Nihil dignissimos et', NULL, NULL, '1', NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '347', NULL, NULL, 0, '2022-04-09 04:44:14', '2022-04-09 04:44:14'),
(39, NULL, NULL, 'Idona Vega', 'Rahim Houston', 1, 'Aute tempor vel prae', 'Ex labore ab laborum', '12', 'kora@mailinator.com', 'Ut impedit explicab', NULL, '2002-06-18', 'Tempora numquam ulla', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '502', NULL, NULL, 0, '2022-06-18 14:25:36', '2022-06-18 14:25:36'),
(40, NULL, NULL, 'Illiana Reeves', 'Callum Barrett', 1, 'Omnis repudiandae si', 'Dolore minima ut sed', '73', 'jonef@mailinator.com', 'Enim aut optio magn', NULL, '2019-08-12', 'Sed numquam molestia', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '311', NULL, NULL, 0, '2022-06-18 14:31:59', '2022-06-18 14:31:59'),
(41, NULL, NULL, 'Kato Jenkins', 'Rosalyn Hendricks', 3, 'Dignissimos mollit i', 'Optio id et tempor', '95', 'pubyby@mailinator.com', 'Sed nostrum quisquam', NULL, '2010-01-23', 'Magnam mollitia dolo', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '398', NULL, NULL, 0, '2022-06-18 14:36:36', '2022-06-18 14:36:36'),
(42, NULL, NULL, 'Rana Nielsen', 'Katell Booker', 2, 'Eveniet autem aute', 'Vitae saepe ipsa si', '85', 'sibo@mailinator.com', 'Hic aliquip ut exped', NULL, '1980-05-26', 'Sed lorem corporis d', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL, 0, '2022-06-18 14:39:07', '2022-06-18 14:39:07'),
(43, NULL, NULL, 'Damon Lara', 'Merrill Oconnor', 1, 'Eum sit laborum Mag', 'Dignissimos quis dol', '99', 'zocih@mailinator.com', 'Sint exercitation fu', NULL, '1973-08-05', 'Et sit impedit offi', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '125', NULL, NULL, 0, '2022-06-18 14:39:34', '2022-06-18 14:39:34'),
(44, NULL, NULL, 'Graham Romero', 'Liberty Oneil', 1, 'Exercitationem sunt', 'Tempora aut beatae r', '01711111111', NULL, 'Tempora ipsam quisqu', NULL, '1980-07-13', 'Quod exercitation es', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '703', NULL, NULL, 0, '2022-06-18 14:58:01', '2022-06-18 14:58:01'),
(45, NULL, NULL, 'Graham Romero', 'Liberty Oneil', 1, 'Exercitationem sunt', 'Tempora aut beatae r', '01711111111', NULL, 'Tempora ipsam quisqu', NULL, '1980-07-13', 'Quod exercitation es', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '703', NULL, NULL, 2, '2022-06-18 15:02:27', '2022-06-18 15:39:14'),
(46, NULL, NULL, 'Hyatt Berger', 'Zephr Jacobs', 1, 'Animi rerum vel ali', 'Nostrum natus aute e', '81', 'dery@mailinator.com', 'Non eaque quia elit', NULL, NULL, NULL, '1981-12-27', 'Et occaecat veniam', NULL, NULL, 'death', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '66666666666666', NULL, 2, '2022-06-18 15:31:11', '2022-06-18 15:35:07'),
(47, NULL, NULL, 'Abel Solis', 'Holmes Hutchinson', 1, 'Quod tempora est Nam', 'Porro reiciendis non', '53', 'mofiz@gmail.com', 'In quis voluptas qui', NULL, '1980-03-02', 'Nobis deserunt dolor', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '678', NULL, NULL, 0, '2022-08-24 16:16:40', '2022-08-24 16:16:40'),
(48, 44, NULL, 'Julie Morrow', 'Plato Vaughan', 1, 'Adipisci tenetur do', 'Et est tempor consec', '88', 'test1@mailinator.com', 'Eligendi in tempora', NULL, '1980-02-16', 'Ut dolores harum ab', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '343', NULL, NULL, 0, '2022-08-24 16:35:44', '2022-08-24 16:35:44'),
(49, 46, NULL, 'Julie Morrow', 'Plato Vaughan', 1, 'Adipisci tenetur do', 'Et est tempor consec', '88', 'test5@mailinator.com', 'Eligendi in tempora', NULL, '1980-02-16', 'Ut dolores harum ab', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '343', NULL, NULL, 0, '2022-08-24 16:37:31', '2022-08-24 16:37:31'),
(50, 47, NULL, 'Forrest Nielsen', 'Neil Chambers', 1, 'Voluptas incidunt a', 'Quia enim magna eum', '54', 'vuquredebi@mailinator.com', 'Ea qui quis rem quia', NULL, '2009-12-06', 'Asperiores sit sit', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '549', NULL, NULL, 0, '2022-08-24 16:39:38', '2022-08-24 16:39:38'),
(51, 48, '782', 'Anthony Hernandez', 'Alea Justice', 3, NULL, NULL, '34', 'lodot@mailinator.com', 'Velit velit qui cul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registration', 'jsc', 'Dillon Chandler', '2012', 'In modi nulla et ani', 'Minim repellendus I', 'Voluptatum deleniti', 'Ipsum ipsum quia qu', 'Consectetur totam de', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-08-24 16:43:53', '2022-08-26 03:18:26'),
(52, 49, '731', 'Vincent Carey', 'Dante Mathis', 2, 'In tempore animi n', 'Sit iusto rerum nul', '01793478194', NULL, 'Laboriosam dolor qu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'number', 'msc', 'Eagan Mathews', '2008', 'Eiusmod facere conse', 'Expedita debitis min', 'Omnis dolores aut ha', 'Aut cupidatat autem', 'Vel nulla rerum erro', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-08-24 16:57:43', '2022-08-24 16:57:43'),
(53, 50, '416', 'Solomon Faulkner', 'Allegra Bartlett', 2, NULL, NULL, '01793478194', NULL, 'Asperiores laborum s', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'registration', 'msc', NULL, '1979', 'Ipsum dignissimos vo', 'Asperiores ducimus', 'Magni commodi laboru', 'Doloremque magna vol', 'Consequatur ipsum c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-08-24 17:09:59', '2022-08-24 17:09:59'),
(54, 51, NULL, 'Cody Reid', 'Robert Pitts', 1, 'Enim magni sit reici', 'Earum qui impedit d', '01793478194', NULL, 'Molestiae et dolore', NULL, '1994-07-01', 'Ipsa eveniet nulla', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '694', NULL, NULL, 2, '2022-08-24 17:15:17', '2022-08-24 17:15:35'),
(55, 52, NULL, 'Tyrone Rivas', 'Mollie Weaver', 1, 'Maiores culpa saepe', 'Voluptatem praesenti', '01793478194', 'admin@gmail.com', 'Qui tenetur facilis', NULL, '1983-08-23', 'Corporis asperiores', NULL, NULL, NULL, NULL, 'birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '911', NULL, NULL, 1, '2022-08-24 17:19:09', '2022-08-27 03:19:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_28_193709_create_applications_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '1 = admin, 2 = user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 1, 'zinia@gmail.com', 'zinia@gmail.com', NULL, '$2y$10$Ml.68uNNznPaPTGK1tEY6OXsZMH1LTITOw2iKeHXVCqK.c0nToOYK', '', NULL, NULL, '2021-11-26 19:14:10', '2021-11-26 19:14:10'),
(3, 1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$HhOL6rU5yeXjZ2x3kS4/fue4LFhvtppN7E05I6c63x7tfTxegef1W', '01793478194', 'Qui saepe eius esse', NULL, '2021-12-01 13:08:16', '2022-06-18 13:37:13'),
(4, 2, 'Lana Alexander', 'gywugi@mailinator.com', NULL, '$2y$10$VuCsh60Q/6jXNZImwdKBdOU.hbYPRjtNPUxNDe0oVw6DmS0/GjT2e', '41', 'Voluptatem sit haru', NULL, '2021-12-01 13:25:06', '2021-12-01 13:25:06'),
(5, 2, 'Serena Richards', 'sumekacysa@mailinator.com', NULL, '$2y$10$4VPbiLu4ODAGZkp6kl6QbushjT5gF1pdRhUke2r4A35OiiJ255TAu', '89', 'Ipsum et adipisicing', NULL, '2021-12-01 13:31:50', '2021-12-01 13:31:50'),
(6, 2, 'Janna Dixon', 'dasezypec@mailinator.com', NULL, '$2y$10$4.0Z5nsFfrWWGKaG1.JV7ekH6EgP3iUrqmFouuxIiG6K7kw6RgpXu', '36', 'Consequat Eiusmod t', NULL, '2021-12-01 13:33:56', '2021-12-01 13:33:56'),
(7, 2, 'Tamara Mcintyre', 'salyzuly@mailinator.com', NULL, '$2y$10$sPUIFoFsY8.GptqOZCXbDeu.0UND9KYm.nXma4YixGj46/RKzK6D.', '20', 'Sunt sunt et excepte', NULL, '2021-12-01 13:34:40', '2021-12-01 13:34:40'),
(8, 2, 'Oscar Knowles', 'cyhaguf@mailinator.com', NULL, '$2y$10$j9p1pBWKqSIKjt.43seH7OeR/CVlt/tUiyxwV8nd49Av1Z8rQBugi', '8', 'Consectetur eveniet', NULL, '2022-03-01 09:24:20', '2022-03-01 09:24:20'),
(12, 2, 'Reece Hendrix', 'zorusasa@mailinator.com', NULL, '$2y$10$EJbM39MIavP.mtxplw8elOBshx2TUbofBOidGeRFZGha7wutmsOX2', '97', 'Corporis sequi exped', NULL, '2022-03-01 10:43:14', '2022-03-01 10:43:14'),
(13, 2, 'Ocean Chase', 'faresidyj@mailinator.com', NULL, '$2y$10$06PuwglYFSN2BBee/0ctIejJCl/nAMh0kzNYevnt.wiMBivptD.6O', '57', 'Est dolorem voluptat', NULL, '2022-03-01 10:53:28', '2022-03-01 10:53:28'),
(14, 2, 'Mason Wong', 'besata@mailinator.com', NULL, '$2y$10$ps4Pou559EtYCqZcdlmnwe9Xg1n.Hq2SQcb80eiNgaRzXhvMsi.me', '39', 'Tempore suscipit id', NULL, '2022-03-01 12:00:09', '2022-03-01 12:00:09'),
(15, 2, 'Wilma Collins', 'myriwuve@mailinator.com', NULL, '$2y$10$Sgf.lgXjfLwvRnQHVygsV.M578EU052eFGsF15NuNzU0XhN.KMz5m', '22', 'Ratione quia molesti', NULL, '2022-03-01 12:01:35', '2022-03-01 12:01:35'),
(16, 2, 'Cassidy Rhodes', 'zalacoqeh@mailinator.com', NULL, '$2y$10$lCswmrcBSVHevLLPxlWqsOCytIb2epjjj5Nj7c0bpaRgeFZfArAJC', '2', 'Qui ullamco quo mole', NULL, '2022-03-01 12:05:14', '2022-03-01 12:05:14'),
(17, 2, 'Clare Crosby', 'ryfaw@mailinator.com', NULL, '$2y$10$Efehh6YxVSKzbFZaX3drSeZbw.p61KDLvIPJ5w2PrdaLbKDAoa3Sy', '76', 'Pariatur Quia fugia', NULL, '2022-03-01 12:08:56', '2022-03-01 12:08:56'),
(18, 2, 'Jenna Wilcox', 'wyxef@mailinator.com', NULL, '$2y$10$Po8jBsv3Czv6gyFW1P9bT.F7aLw2v8YmElcWZS7uA/i1F2e.D4Np2', '99', 'Dignissimos deserunt', NULL, '2022-03-01 12:12:12', '2022-03-01 12:12:12'),
(19, 2, 'Xander Walker', 'zite@mailinator.com', NULL, '$2y$10$lK8pSTDnY820oXQ58N0a/eIWSylYyqFvolowAEHByxpkLzd3aGEQe', '49', 'Magnam et aut velit', NULL, '2022-03-07 14:44:12', '2022-03-07 14:44:12'),
(20, 2, 'Brynn Todd', 'wadyca@mailinator.com', NULL, '$2y$10$pP7zNULFARFruDDdRTvISOQ4.0yio2WW5WiZ5BW.YzSAcXBr6JlKm', '40', 'Dolor doloremque ab', NULL, '2022-03-07 15:18:36', '2022-03-07 15:18:36'),
(21, 2, 'Wynter Nicholson', 'hypujuhu@mailinator.com', NULL, '$2y$10$eySWmG3u.WCZ2DCpTjFMDe6qj0NAYtxU92n.PK73r/R5n3sTEvlqu', '32', 'Esse aut recusandae', NULL, '2022-03-28 12:31:37', '2022-03-28 12:31:37'),
(22, 2, 'Paloma Hawkins', 'tabuvy@mailinator.com', NULL, '$2y$10$ATRvoOuNEB7oo45fH8Ko0u0kawo0foZRnE.uLrypiPzX7BBiqSZCi', '76', 'Unde veniam recusan', NULL, '2022-04-08 05:39:30', '2022-04-08 05:39:30'),
(23, 2, 'Rafael Rosa', 'nolosi@mailinator.com', NULL, '$2y$10$vTqdH4ddSl7ubxdhOERzBO.fDYL5JVgd04aMsYfw1n353GGvY0XMu', '56', 'Optio ea eligendi c', NULL, '2022-04-08 05:49:00', '2022-04-08 05:49:00'),
(24, 2, 'Lamar Holcomb', 'zadetykebo@mailinator.com', NULL, '$2y$10$IibID5amplB4QCNIHzfQ9ueQkfiLq57YAzap93LVoAt5FcqmfL9ji', '2', 'Iusto incidunt cumq', NULL, '2022-04-08 05:53:49', '2022-04-08 05:53:49'),
(25, 2, 'Henry Key', 'racyrydu@mailinator.com', NULL, '$2y$10$Vk5TBc3j5geRqXtLRLziZ.pRX.pXeNCCeBOlzGDGEmO4UCTMTzzI.', '97', 'Itaque suscipit dolo', NULL, '2022-04-08 05:57:49', '2022-04-08 05:57:49'),
(26, 2, 'Dakota Jacobson', 'dyka@mailinator.com', NULL, '$2y$10$qLbf5NM88SsdyDigVmZ5WOK5im1.yG.LtS4tRH/Is/hZg.FrsVvz6', '12', 'Repudiandae odit ali', NULL, '2022-04-08 06:01:44', '2022-04-08 06:01:44'),
(27, 2, 'Deborah Cook', 'nifetar@mailinator.com', NULL, '$2y$10$ZV/IHNX2QmzE6zfz3YxKB.xBxiIUYdyDctdjA8zo9Fm6oAKyXb6qi', '9', 'Quis qui commodo inc', NULL, '2022-04-08 06:06:01', '2022-04-08 06:06:01'),
(28, 2, 'Knox Buchanan', 'jyciki@mailinator.com', NULL, '$2y$10$y2sO18xdKOEnoE6v2.cphuT21.Aj9zCR3da5244AQ6hv1jXtE.Y3.', '29', 'Numquam vel est et h', NULL, '2022-04-08 06:07:27', '2022-04-08 06:07:27'),
(29, 2, 'Debra Barnes', 'gevyw@mailinator.com', NULL, '$2y$10$KGweqUYPKwU50bNGzCeD7.k3OOuEFiEJKRhX8vl16GmzpMVTNSQVu', '90', 'Fugiat itaque dolor', NULL, '2022-04-09 01:59:58', '2022-04-09 01:59:58'),
(30, 2, 'Echo Rivas', 'jibavij@mailinator.com', NULL, '$2y$10$wO65L0ytTeBYCj0E/tr8y.nBnkhsLu5NfrI5OgyWaYxOiFlAzY.a6', '18', 'Aliquam optio ut vo', NULL, '2022-04-09 02:02:21', '2022-04-09 02:02:21'),
(31, 2, 'Summer Riley', 'wogacelyxo@mailinator.com', NULL, '$2y$10$lDHr5n0oiJH9xsokgpU5QOdevas1BcvxsE/bjB0T9QBDx6ALP.Atu', '57', 'Consectetur nulla ip', NULL, '2022-04-09 02:13:19', '2022-04-09 02:13:19'),
(32, 2, 'Alisa Solis', 'nidus@mailinator.com', NULL, '$2y$10$zzEOhQRrw2aiYVGQy0lCaeFEVMFFitDomZWWPtU5d8.8nijxbxuPu', '62', 'Nisi unde cupiditate', NULL, '2022-04-09 03:00:21', '2022-04-09 03:00:21'),
(33, 2, 'Patrick Diaz', 'xevelir@mailinator.com', NULL, '$2y$10$Grbxk3FJl1bLEYNH6juASeUOnSqSXKXG7WnliSgh.FNP86bfYN3SK', '50456', 'Velit ex quis at min', NULL, '2022-04-09 03:25:28', '2022-04-09 03:25:28'),
(34, 2, 'Aretha Marks', 'dagytaxusa@mailinator.com', NULL, '$2y$10$MUe68AmX8O7pd23.2GIle.oA1AN4YzKb1ALA4zlEQuVdlPBmnttsm', '66', 'Placeat totam sint', NULL, '2022-04-09 03:31:00', '2022-04-09 03:31:00'),
(35, 2, 'Hamilton Nixon', 'anasbinsabiet@gmail.com', NULL, '$2y$10$1Q2YMROxrm/HGgCh9f.GqOZivy4CwNdcRhJx.HwwcKhLu6ku7JmGO', '01793478194', 'Ea nobis dolor beata', NULL, '2022-04-09 04:44:15', '2022-04-09 04:44:15'),
(36, 2, 'Rahim Houston', 'kora@mailinator.com', NULL, '$2y$10$7EpefRxv/4mO6jrlePz.XutUEt8dEZNewgDv6tFulkP3ZwZBu02Vi', '12', 'Ut impedit explicab', NULL, '2022-06-18 14:25:36', '2022-06-18 14:25:36'),
(37, 2, 'Callum Barrett', 'jonef@mailinator.com', NULL, '$2y$10$zuNrg9Y24u6olcxtBbk2luz9xKFuZYka6L1Tkx8GfFbnX8sFUtRH2', '73', 'Enim aut optio magn', NULL, '2022-06-18 14:32:00', '2022-06-18 14:32:00'),
(38, 2, 'Rosalyn Hendricks', 'pubyby@mailinator.com', NULL, '$2y$10$3dFx.Wsljw97XtgeGmSnCuF4Pv15/O54MzQaAI2HlWznv1.ZowFnS', '95', 'Sed nostrum quisquam', NULL, '2022-06-18 14:36:36', '2022-06-18 14:36:36'),
(39, 2, 'Katell Booker', 'sibo@mailinator.com', NULL, '$2y$10$YZRAxghTjA.f81meD.4y6etVW/9zIT6XDtc6wOtzTCTmO/j0s3yne', '85', 'Hic aliquip ut exped', NULL, '2022-06-18 14:39:08', '2022-06-18 14:39:08'),
(40, 2, 'Merrill Oconnor', 'zocih@mailinator.com', NULL, '$2y$10$74fu1aqJA2naAjs5xKkk3.siaoQ2PCXioQcR.dJd4yAYIrLo8hH6O', '99', 'Sint exercitation fu', NULL, '2022-06-18 14:39:34', '2022-06-18 14:39:34'),
(41, 2, 'Liberty Oneil', NULL, NULL, '$2y$10$6AlRrYWuSaTXz9gYi2SCTe.MXw73jUz8APyut.fdrL3jWrLsf0i12', '01711111111', 'Tempora ipsam quisqu', NULL, '2022-06-18 15:02:27', '2022-06-18 15:02:27'),
(42, 2, 'Zephr Jacobs', 'dery@mailinator.com', NULL, '$2y$10$99Iu6hjzAaU9BdruFBgwYumTFPgfnbceLtm15Yf.VMnRhb82B7CP2', '81', 'Non eaque quia elit', NULL, '2022-06-18 15:31:11', '2022-06-18 15:31:11'),
(43, 2, 'Holmes Hutchinson', 'mofiz@gmail.com', NULL, '$2y$10$MLTjh0U0o3btDp0LQAoX9eCrJIBGLFcVgfEMYi/GfXHBTKsGDGtZi', '53', 'In quis voluptas qui', NULL, '2022-08-24 16:16:41', '2022-08-24 16:16:41'),
(44, 2, 'Plato Vaughan', 'test1@mailinator.com', NULL, '$2y$10$/ztxfboQ8GjGAx5TnQMCf.ki.JCH2yx3bF8ExTDA4Qv6n4T/Ml5GG', '88', 'Eligendi in tempora', NULL, '2022-08-24 16:35:44', '2022-08-24 16:35:44'),
(46, 2, 'Plato Vaughan', 'test5@mailinator.com', NULL, '$2y$10$yIzeLro7zxuzqfYamn8Y4OR20buE53Ofgjyi95BNXilQhZ6I9sYKu', '88', 'Eligendi in tempora', NULL, '2022-08-24 16:37:31', '2022-08-24 16:37:31'),
(47, 2, 'Neil Chambers', 'vuquredebi@mailinator.com', NULL, '$2y$10$TI8Ln9EYklRWvLIda4GeZOqHwVdawUmKgBPxjMsn1NREXbWpzEMYS', '54', 'Ea qui quis rem quia', NULL, '2022-08-24 16:39:38', '2022-08-24 16:39:38'),
(48, 2, 'Alea Justice', 'lodot@mailinator.com', NULL, '$2y$10$hCSj60J42GgYvys4WBEaiOQdT9s.rD9cXR8f2UNF7sCKd2XQ50eDy', '34', 'Velit velit qui cul', NULL, '2022-08-24 16:43:53', '2022-08-24 16:43:53'),
(49, 2, 'Dante Mathis', NULL, NULL, '$2y$10$R8aF2TwNC1ipZ5CpfKhN4Ojhm0owawjFX8jXwZWh8Rwp5NxGYJkjW', '01793478194', 'Laboriosam dolor qu', NULL, '2022-08-24 16:57:43', '2022-08-24 16:57:43'),
(50, 2, 'Allegra Bartlett', NULL, NULL, '$2y$10$GoiqFSDHUrxzVWlIeUwwrOpUxjsmvBK5BuRSbaJSUNRhEOh71KtRK', '01793478194', 'Asperiores laborum s', NULL, '2022-08-24 17:09:59', '2022-08-24 17:09:59'),
(51, 2, 'Robert Pitts', NULL, NULL, '$2y$10$uBDrjMrAUSMUBXzEjc.NDufpDflFbzokoXxK9WBCGqWDE9fPofEfe', '01793478194', 'Molestiae et dolore', NULL, '2022-08-24 17:15:17', '2022-08-24 17:15:17'),
(52, 2, 'Mollie Weaver', NULL, NULL, '$2y$10$CsputE2TM3C3QjIARXebhOOnVhGQqI7A6QY./ww40krol.KXmpTQS', '01793478194', 'Qui tenetur facilis', NULL, '2022-08-24 17:19:09', '2022-08-24 17:19:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
