-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2024 at 06:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaze_college_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`academic_year`) VALUES
('2018-2019'),
('2019-2020'),
('2020-2021'),
('2021-2022'),
('2022-2023'),
('2023-2024'),
('2024-2025');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `achievement_id` int(11) NOT NULL,
  `achievement_name` varchar(255) NOT NULL,
  `achievement_prize` varchar(255) NOT NULL,
  `achievement_description` varchar(1000) DEFAULT NULL,
  `achievement_achiever_names` varchar(1000) NOT NULL,
  `achievement_date` varchar(50) NOT NULL,
  `achievement_event` varchar(255) NOT NULL,
  `achievement_event_location` varchar(255) NOT NULL,
  `achievement_achieved_by_type` varchar(1) NOT NULL,
  `achievement_type` varchar(3) NOT NULL,
  `achievement_dept_id` int(11) DEFAULT NULL,
  `achievement_committee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievement_id`, `achievement_name`, `achievement_prize`, `achievement_description`, `achievement_achiever_names`, `achievement_date`, `achievement_event`, `achievement_event_location`, `achievement_achieved_by_type`, `achievement_type`, `achievement_dept_id`, `achievement_committee_id`) VALUES
(1, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 15th-17th Feb. 2007 held at RTM University, Nagpur', 'Dr. S. A. Singh', '15th-17th February 2007', 'Interuniversity Research Festival AVISHKAR', 'RTM University, Nagpur', 's', 'arl', NULL, NULL),
(2, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. V. Menon won Gold medal in Interuniversity Research Festival AVISHKAR, Jan. 2010 held at Solapur.', 'Dr. V. Menon', 'January 2010', 'Interuniversity Research Festival AVISHKAR', 'Solapur', 's', 'arl', NULL, NULL),
(3, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 10th-12h Jan. 2008 held at SNDT University, Mumbai.', 'Dr. S. A. Singh', '10th-12th January 2008', 'Interuniversity Research Festival AVISHKAR', 'SNDT University, Mumbai', 's', 'arl', NULL, NULL),
(4, 'Gold Medal at Aveshan', 'Gold Medal', '', 'Dr. S. A. Singh', '14th-16th March 2008', 'Interuniversity Research Festival ANVESHAN', 'RTM University, Nagpur.', 's', 'arl', NULL, NULL),
(5, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 10th-12h Jan. 2009 held at University of Pune', 'Dr. S. A. Singh', '10th-12th January 2009', 'Interuniversity Research Festival AVISHKAR', 'University of Pune,Pune', 's', 'arl', NULL, NULL),
(6, '1st prize in National symposium in Emerging Trends in Life and Material Sciences', '1st Prize', 'Dr. G. More won 1st prize in National symposium in Emerging Trends in Life and Material Sciences, 25th Jan, 2012. held at V. G. Vaze College, Mulund .', 'Dr. G. More', '25th January, 2012', 'National symposium in Emerging Trends in Life and Material Sciences', 'V. G. Vaze College, Mulund,Mumbai', 's', 'arl', NULL, NULL),
(7, 'Silver Medal at Avishkar', 'Silver Medal', 'Dr. S. Vasudevan won Silver medal in Interuniversity Research Festival AVISHKAR, Jan. 2011 held at Nasik', 'Dr. S. Vasudevan', 'January 2011', 'Interuniversity Research Festival AVISHKAR', 'Nashik', 's', 'arl', NULL, NULL),
(8, 'Silver Medal at Avishkar and Young Scientist Award', 'Silver Medal and Young Scientist Award', 'Dr. Rohan Pawar Won Silver medal in Interuniversity Research Festival AVISHKAR Jan. 2014 and Young Scientist Award, Indian Chemical Society, held at Chandigarh.', 'Dr. Rohan Pawar', 'January 2014', 'Avishkar', 'Indian Chemical Society, held at Chandigarh.', 's', 'arl', NULL, NULL),
(9, 'Best Paper presentation award', 'Best Paper presentation award', 'Ms Manisha Gupta, Best Paper presentation award, National Women Science Conference, 2019 held in Mysore.', 'Ms Manisha Gupta', '2019', 'National Women Science Conference', 'Mysore', 's', 'arl', NULL, NULL),
(10, 'Silver medal in Maharashtra state classic powerlifting competition', 'Silver Medal', 'Ms Priti Chaudhari won Silver medal in Maharashtra state classic powerlifting competition held at Karjat on 16th March 2024', 'Ms Priti Chaudhari', '16th March 2024', 'Maharashtra state classic powerlifting competition', 'Karjat', 'f', 's', 1, NULL),
(11, '6 gold medals and 1 bronze medal ', '6 gold medals and 1 bronze medal ', 'Mayank Chaphekar , alumnus of VAZE bagged 6 gold medals and 1 bronze medal in the National Games 2023 for Modern Pentathlon 1', 'Mayank Chaphekar', '2023', 'National Games 2023', 'Goa', 'a', 's', NULL, NULL),
(12, 'Shri Shiv Chatrapati Shivaji Award', 'Shri Shiv Chatrapati Shivaji Award', 'MR.PRANAV PRASHANT DESAI,Junior College 2017-2018 batch Awarded the Shri Shiv Chatrapati Shivaji Award for the year of 2021-2022', 'Mr. Pranav Prashant Desai', '2021-2022', '-', '-', 's', 's', NULL, NULL),
(13, 'Silver Medal in Khelo India Open Kickboxing Championship', 'Silver Medal', 'Ms. Pooja Ilkar, TYBA Political Science, won Silver medal in Khelo India\'s open kickboxing championship', 'Ms. Pooja Ilkar', '-', 'Khelo India Open Kickboxing Championship', '-', 's', 's', 10, NULL),
(14, 'World Book Trophy', 'World Book Trophy', 'Vaze College (Autonomous) is the proud recipient of the World Book Trophy 2022-23 awarded in August 2023', 'Vaze College', 'August 2023', '-', '-', 's', 'a', NULL, NULL),
(15, '4 gold medals , 1 silver medal , 1 all round medal in 66th National school games', '4 gold medals , 1 silver medal , 1 all round medal', 'Ashmi Badade (12 Arts), has won 4 gold medals , 1 silver medal , 1 all round medal in 66th National school games ( gymnastics)', 'Ms. Ashmi Badade', 'June,2023', 'National School Games ', 'Bhopal', 's', 's', NULL, NULL),
(16, '2nd Place at 49th ward(T) level Science Exhibition Competition', '2nd Place', 'SYJC Science Division F Student Aryan Nigudkar bags the 2nd Place at 49th ward(T) level Science Exhibition Competition', 'Aryan Nigudkar', '-', '-', '-', 's', 'a', NULL, NULL),
(17, 'Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Mrs. Supriya Kambli receiving Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Mrs. Supriya Kambli', '-', '-', '-', 'f', 'a', NULL, NULL),
(18, 'University level zone II second place- TABLE TENNIS Boys', 'University level zone II second place- TABLE TENNIS Boys', 'University level zone II second place- TABLE TENNIS Boys', 'Arya Rane,', '-', '-', '-', 's', 's', NULL, NULL),
(19, 'University level zone II CHESS second place boys', 'University level zone II CHESS second place boys', 'University level zone II CHESS second place boys', '-', '-', '-', '-', 's', 's', NULL, NULL),
(20, 'University level Zone II winners TABLE TENNIS Girls', 'University level Zone II winners TABLE TENNIS Girls', 'University level Zone II winners TABLE TENNIS Girls', '-', '-', '-', '-', 's', 's', NULL, NULL),
(21, '1st Prize in State Level KAVYALEKHAN Competition held by Pragati Mandal Bhandup', '1st Prize', 'Kaustubh Gosavi(SYBA) secured 1st Prize in State Level KAVYALEKHAN Competition held by Pragati Mandal Bhandup', 'Kaustubh Gosavi', '-', 'State Level KAVYALEKHAN Competition ', 'Pragati Mandal,Bhandup', 's', 'a', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achievement_types`
--

CREATE TABLE `achievement_types` (
  `achievement_type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievement_types`
--

INSERT INTO `achievement_types` (`achievement_type`) VALUES
('a'),
('arl'),
('r'),
('s');

-- --------------------------------------------------------

--
-- Table structure for table `aqar_criteria`
--

CREATE TABLE `aqar_criteria` (
  `aqar_criteria_number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aqar_criteria`
--

INSERT INTO `aqar_criteria` (`aqar_criteria_number`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Table structure for table `avishkar_categories`
--

CREATE TABLE `avishkar_categories` (
  `avishkar_cat_id` int(11) NOT NULL,
  `avishkar_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avishkar_categories`
--

INSERT INTO `avishkar_categories` (`avishkar_cat_id`, `avishkar_cat_name`) VALUES
(1, 'Humanities,Languages and Fine Arts'),
(2, 'Commerce,Management and Law'),
(3, 'Pure Sciences'),
(4, 'Agriculture and Animal Husbandry'),
(5, 'Engineering and Technology'),
(6, 'Medicine and Pharmacy');

-- --------------------------------------------------------

--
-- Table structure for table `avishkar_participation_in_academic_year`
--

CREATE TABLE `avishkar_participation_in_academic_year` (
  `avishkar_cat_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `avishkar_level_reached` varchar(50) NOT NULL,
  `avishkar_participants_number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `avishkar_participation_in_academic_year`
--

INSERT INTO `avishkar_participation_in_academic_year` (`avishkar_cat_id`, `academic_year`, `avishkar_level_reached`, `avishkar_participants_number`) VALUES
(1, '2022-2023', 'Zonal round', 10),
(2, '2022-2023', 'Zonal round', 4),
(3, '2022-2023', 'Zonal round', 8),
(4, '2022-2023', 'Zonal round', 2),
(5, '2022-2023', 'Zonal round', 5),
(6, '2022-2023', 'Zonal round', 8);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_name`) VALUES
('FY'),
('FY NEP'),
('Part-1'),
('Part-2'),
('SY'),
('SY NEP'),
('TY'),
('TY NEP');

-- --------------------------------------------------------

--
-- Table structure for table `clg_events`
--

CREATE TABLE `clg_events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  `event_dept_id` int(11) DEFAULT NULL,
  `event_committee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_personnel`
--

CREATE TABLE `college_personnel` (
  `cp_id` int(11) NOT NULL,
  `cp_name` varchar(255) NOT NULL,
  `cp_personal_website_link` varchar(1000) DEFAULT NULL,
  `cp_image_path` varchar(1000) DEFAULT NULL,
  `cp_honourific` varchar(30) NOT NULL,
  `cp_department_section` int(11) DEFAULT NULL,
  `cp_gender` enum('m','f','o') NOT NULL DEFAULT 'f'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_personnel`
--

INSERT INTO `college_personnel` (`cp_id`, `cp_name`, `cp_personal_website_link`, `cp_image_path`, `cp_honourific`, `cp_department_section`, `cp_gender`) VALUES
(61, 'Pournima P. Bhangale', 'https://sites.google.com/view/pournimabhangale/home', NULL, 'Mrs.', 1, 'f'),
(62, 'Vandana Kadam\r\n', 'https://sites.google.com/view/vandana-kadam/home', NULL, 'Mrs.', 1, 'f'),
(63, 'Dinesh Kumar', 'https://sites.google.com/view/dineshnair/home', NULL, 'Dr.', 4, 'm'),
(64, 'Vineeta Radhakrishnan', NULL, NULL, 'Ms.', 4, 'f'),
(65, 'Shrishankar Jadhav', NULL, NULL, 'Mr.', 3, 'm'),
(66, 'Himmat C.Patil', NULL, NULL, 'Mr.', 3, 'm'),
(67, 'S.S.Sanap', NULL, NULL, 'Mr.', 3, 'm'),
(68, 'Chetan V. Mohandule', NULL, NULL, 'Mr.', 3, 'm'),
(69, 'Ramesh H.Patil', NULL, NULL, 'Mr.', 3, 'm'),
(70, 'Shubhada Brahme', NULL, NULL, 'Ms.', 3, 'f'),
(71, 'M.R. Kurup', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/Dr-M-R-Kurup.png', 'Dr.', NULL, 'm'),
(72, 'G.T. Paratkar', NULL, 'http://vazecollege.net/wp-content/uploads/2022/06/Dr.-G.-T.-Paradkar-225x300.jpeg', 'Dr.', NULL, 'm'),
(73, 'B.B.Sharma', NULL, 'https://vazecollege.net/wp-content/uploads/2016/01/principle.jpg', 'Dr.', NULL, 'm'),
(74, 'Preeta Nilesh', 'https://sites.google.com/view/profpreetanilesh/home', 'https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh.jpeg', 'Prof (Dr.)', 9, 'f'),
(75, 'R.T. Laul', NULL, NULL, 'Dr.', NULL, 'm'),
(76, 'S. R. Ghantwal', NULL, NULL, 'Dr.', NULL, 'm'),
(77, 'K. G. Bhole', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/Dr.-K.-G.-Bhole-768x1062.jpeg', 'Dr.', NULL, 'm'),
(78, 'Mrudula D. Dewasthale', NULL, NULL, 'Mrs.', NULL, 'f'),
(79, 'P. N. Pabrekar', NULL, NULL, 'Dr.', NULL, 'f'),
(80, 'Shubhangi P. Bhave', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/Dr.-S.-P.-Bhave.jpeg', 'Dr.', NULL, 'f'),
(81, 'Susmita B. Dey', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/Dr.-S-Dey.png', 'Dr.', NULL, 'f'),
(83, 'Vivienne Chaudhary', NULL, NULL, 'Ms.', NULL, 'f'),
(84, 'Meenaxi A. Gokhale', NULL, NULL, 'Ms.', NULL, 'f'),
(85, 'Madhuri Bajpai', NULL, NULL, 'Ms.', NULL, 'f'),
(86, 'Vidyadhar Joshi', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/CA-Vidyadhar-Joshi.jpeg', 'CA', NULL, 'm'),
(87, 'Madhuri Nagarkar', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/MS.-Madhuri-Nagarkar.jpeg', 'Ms.', 13, 'f'),
(88, 'Rakhee Rane', 'https://sites.google.com/view/rakhee-d-rane/home', NULL, 'Mrs.', 1, 'f'),
(89, 'Nanda Rupnar', 'https://sites.google.com/view/nandarupnar/home', NULL, 'Mrs.', 1, 'f'),
(90, 'Mohini Bhole', 'https://sites.google.com/view/mohiniitdept/home', NULL, 'Mrs.', 1, 'f'),
(91, 'Pranali Pawar', 'https://sites.google.com/view/pranali-itdept/home', NULL, 'Mrs.', 1, 'f'),
(92, 'Deepali Karkhanis', 'https://sites.google.com/view/drdeepalikarkhanis/home', NULL, 'Dr.', 2, 'f'),
(93, 'Amit Breed', 'https://sites.google.com/view/dramitbreed/home', NULL, 'Dr.', 2, 'm'),
(94, 'Charushila Sonkamble', NULL, NULL, 'Ms.', 2, 'f'),
(95, 'Seema Pawar', 'https://sites.google.com/view/drseema-pawar', NULL, 'Ms.', 28, 'f'),
(96, 'Ambadas Shinde', 'https://sites.google.com/view/mr-ambadas-shinge/home', NULL, 'Mr.', 28, 'm'),
(97, 'Sunanda Pandita', 'https://sites.google.com/view/sunanda-pandita/home', NULL, 'Ms.', 28, 'f'),
(98, 'Anita Yakkali', 'https://sites.google.com/view/yakkalianita/home', NULL, 'Ms.', 26, 'f'),
(99, 'Naranag Lalveen Kaur', NULL, NULL, 'Ms.', 26, 'f'),
(100, 'Rajesh Mane', 'https://sites.google.com/view/mr-rajesh-mane/', NULL, 'Mr.', 26, 'm'),
(101, 'Anu Singh', 'https://sites.google.com/view/annuswebsite/home', NULL, 'Ms.', 26, 'f'),
(102, 'Niti Shirke', 'https://sites.google.com/view/ms-niti-shirke/home', NULL, 'Ms.', 26, 'f'),
(103, 'Shyam Choithani', 'https://sites.google.com/view/dr-shyam-choithani/home', NULL, 'Mr.', 32, 'm'),
(104, 'Ashwathi Anilkumar', 'https://sites.google.com/view/ashwathi-anilkumar', NULL, 'Ms.', 32, 'f'),
(105, 'Khursheed Shaikh', 'https://sites.google.com/view/bms-department', NULL, 'Ms.', 30, 'f'),
(106, 'Amruta Khannolkar', 'https://sites.google.com/view/amrutakhanolkar/home', NULL, 'Ms.', 30, 'f'),
(107, 'Arti Shah', 'https://sites.google.com/view/amrutakhanolkar/home', NULL, 'Ms.', 30, 'f'),
(108, 'Aditya Dawane', '', NULL, 'Mr.', 30, 'm'),
(109, 'Mayura Ranade', 'https://sites.google.com/view/ms-mayura-ranade/home', NULL, 'Ms.', 30, 'f'),
(110, 'Preeti Chaudhari', NULL, NULL, 'Ms.', 14, 'f'),
(111, 'Amruta Bhandge', NULL, NULL, 'Ms.', 14, 'f'),
(113, 'Prajakta Ahirrao', NULL, NULL, 'Ms.', 4, 'f'),
(114, 'Gajanan Lokhande', NULL, NULL, 'Mr.', 3, 'm'),
(115, 'Vaishali Dhammapathee', 'https://sites.google.com/view/vazecollege-dept-ecorocks//introduction', NULL, 'Ms.', 16, 'f'),
(116, 'Madhura Todewale', 'https://sites.google.com/view/profilemadhuratodewale/home', NULL, 'Ms.', 16, 'f'),
(117, 'Hemlata Sudade', NULL, NULL, 'Ms.', 17, 'f'),
(118, 'Deepali Kalkotwar', NULL, NULL, 'Ms.', 17, 'f'),
(119, 'Jubin Godfrey', NULL, NULL, 'Ms.', 17, 'f'),
(120, 'Archana Dubey', 'https://sites.google.com/view/dr-archana-dubey/home', NULL, 'Dr.', 5, 'f'),
(121, 'Bharat Bhere', NULL, NULL, 'Mr.', 6, 'm'),
(122, 'Ajit Raut', NULL, NULL, 'Mr.', 6, 'm'),
(123, 'Gopinath.B. Jadhav', NULL, NULL, 'Mr.', 6, 'm'),
(124, 'Dattatraya Gaikwad', NULL, NULL, 'Mr.', 19, 'm'),
(125, 'Sanjiv Sonawane', NULL, NULL, 'Mrs.', 19, 'f'),
(126, 'Arvind Jadhav', NULL, NULL, 'Mr.', 18, 'm'),
(127, 'Nikita Vichare', 'https://sites.google.com/view/nikitavichare/home', NULL, 'Ms.', 18, 'f'),
(128, 'Sonali Pendnekar', NULL, NULL, 'Dr.', 9, 'f'),
(129, 'Chandupatla Ravikumar', NULL, NULL, 'Mr.', 10, 'm'),
(130, 'Sangeeta Aher', NULL, NULL, 'Ms.', 23, 'f'),
(131, 'Shilpa Suryawanshi', 'https://sites.google.com/view/ms-shilpa-suryawanshi/home', NULL, 'Dr.', 22, 'f'),
(132, 'Vishaka Patil', 'https://sites.google.com/view/vishakhapatilvaze/home', NULL, 'Ms.', 22, 'f'),
(133, 'Neeta Mehta', NULL, NULL, 'Dr.', 20, 'f'),
(134, 'Reeta Kamble', NULL, NULL, 'Ms.', 20, 'f'),
(135, 'Renuka Gune', NULL, NULL, 'Ms.', 20, 'f'),
(136, 'Geeta Kale', NULL, NULL, 'Ms.', 21, 'f'),
(137, 'Deepa Shirsat', 'https://sites.google.com/view/deepashirsat/home', NULL, 'Ms.', 24, 'f'),
(138, 'Hadley Quadros', NULL, NULL, 'Mr.', 24, 'm'),
(139, 'Trupti Vaity', NULL, NULL, 'Ms.', 25, 'f'),
(140, 'Aasavari Bhide', NULL, NULL, 'Ms.', 25, 'f'),
(141, 'Bhagyashree Tendulkar', NULL, NULL, 'Ms.', 69, 'f'),
(142, 'Arun Bansod', NULL, NULL, 'Mr.', 69, 'm'),
(143, 'Snehal Gaidhane', NULL, NULL, 'Mrs.', 69, 'f'),
(144, 'Neelam Sarathe', NULL, NULL, 'Ms.', 69, 'f'),
(145, 'Pooja Shah', NULL, NULL, 'Ms.', 69, 'f'),
(146, 'Adhir Ambavane', 'https://sites.google.com/view/adhirambavane/home', NULL, 'Dr.', 68, 'm'),
(147, 'Manoj Sangare', 'https://sites.google.com/view/manojsangare/home', NULL, 'Mr.', 68, 'm'),
(148, 'Shirisha Gupte', NULL, NULL, 'Ms.', 66, 'f'),
(149, 'Prasannjeet Bhave', 'https://sites.google.com/view/prasannajeet/home', NULL, 'Mr.', 64, 'm'),
(150, 'Neha Satoliya', 'https://sites.google.com/view/satoliya-neha/home', NULL, 'Ms.', 64, 'f'),
(151, 'Reena Pillai', 'https://sites.google.com/view/assistant-prof-reenapillai/home', NULL, 'Mrs.', 43, 'f'),
(152, 'Veena Puthran', NULL, NULL, 'Ms.', 74, 'f'),
(153, 'Ambika Kaimal', NULL, NULL, 'Ms.', 72, 'f'),
(154, 'Aditi Madhavan', NULL, NULL, 'Ms.', 75, 'f'),
(155, 'Ajit Kengar', 'https://sites.google.com/view/dr-ajit-kengar/home', NULL, 'Dr.', 70, 'm'),
(156, 'Supriya Thale', 'https://sites.google.com/view/departmentofbotanypersonalsite/home', NULL, 'Dr.', 70, 'f'),
(157, 'Jatin Vaity', 'https://sites.google.com/view/jatinvaity/home', NULL, 'Mr.', 70, 'm'),
(158, 'Rajni Shirsat', NULL, NULL, 'Dr.', 70, 'f'),
(159, 'Siddhi Baskaware', 'https://sites.google.com/view/siddhibaskaware/home', NULL, 'Ms.', 70, 'f'),
(160, 'Suresh Shendage', NULL, NULL, 'Prof (Dr.)', 12, 'm'),
(161, 'Ashok Awale', NULL, NULL, 'Dr.', 12, 'm'),
(162, 'Alka Kolhatkar', NULL, NULL, 'Dr.', 12, 'f'),
(163, 'Paresh More', 'https://sites.google.com/view/paresh-more/home', NULL, 'Dr.', 12, 'm'),
(164, 'Khalida Shaikh', NULL, NULL, 'Ms.', 12, 'f'),
(165, 'Preeti Dwivedi', NULL, NULL, 'Dr.', 12, 'f'),
(166, 'Sangeeta Radhakrishnan', NULL, NULL, 'Dr.', 13, 'f'),
(167, 'Sheela Kalpesh', NULL, NULL, 'Ms.', 13, 'f'),
(168, 'Sanjay Zambare', NULL, NULL, 'Mr.', 13, 'm'),
(169, 'Vidya Menon', NULL, NULL, 'Dr.', 13, 'f'),
(170, 'Sunita Garje', NULL, NULL, 'Ms.', 13, 'f'),
(171, 'Prabhakar Suslade', NULL, NULL, 'Mr.', 13, 'm'),
(172, 'Shilpa Shirodkar', NULL, NULL, 'Ms.', 13, 'f'),
(173, 'Prashant Patil', NULL, NULL, 'Mr.', 13, 'm'),
(174, 'Lata Poojari', NULL, NULL, 'Dr.', 73, 'f'),
(175, 'Manasi Khedekar', NULL, NULL, 'Ms.', 73, 'f'),
(176, 'Suryakant Khusape', NULL, NULL, 'Mr.', 73, 'm'),
(177, 'Shivani Gaikwad', NULL, NULL, 'Ms.', 73, 'f'),
(178, 'Vaishali Gite', NULL, NULL, 'Ms.', 73, 'f'),
(179, 'Rajeshri Jugnake', NULL, NULL, 'Ms.', 73, 'f'),
(180, 'Deepali Bhandkoli', NULL, NULL, 'Ms.', 73, 'f'),
(181, 'Ritu Sharma', NULL, NULL, 'Ms.', 73, 'f'),
(182, 'Pradeep Bhavsar', NULL, NULL, 'Mr.', 58, 'm'),
(183, 'Rajendra Dushman', NULL, NULL, 'Mr.', 58, 'm'),
(184, 'Nanda Patil', NULL, NULL, 'Ms.', 58, 'f'),
(185, 'Chhaya Ahire', NULL, NULL, 'Ms.', 58, 'f'),
(186, 'Ishwari Joshi', NULL, NULL, 'Ms.', 58, 'f'),
(187, 'Azharuddin Pirjade', NULL, NULL, 'Mr.', 58, 'm'),
(188, 'Preeti Singh', NULL, NULL, 'Ms.', 58, 'f'),
(189, 'Pranjal Sawant', NULL, NULL, 'Ms.', 58, 'f'),
(190, 'Sandip Kamble', NULL, NULL, 'Mr.', 8, 'm'),
(191, 'Kishor Gawade', 'https://sites.google.com/view/kishorgawade/home', NULL, 'Mr.', 8, 'm'),
(192, 'Naresh Wagh', 'https://sites.google.com/view/nareshwagh/home', NULL, 'Mr.', 8, 'm'),
(193, 'Ranjeet Singh', 'https://sites.google.com/view/ranjeet9616', NULL, 'Mr.', 8, 'm'),
(194, 'Suresh Kadam', 'https://sites.google.com/view/dr-suresh-kadam/home', NULL, 'Dr.', 55, 'm'),
(195, 'Manoj Mahajan', 'https://sites.google.com/view/drmanojpmahajan/home', NULL, 'Dr.', 55, 'm'),
(196, 'Mahesh Kedare', '', NULL, 'Mr.', 55, 'm'),
(197, 'Shweta Jamble', 'https://sites.google.com/view/shwetaphysicsdept/home?authuser=0%22%22', NULL, 'Dr.', 55, 'f'),
(198, 'Vinod Ragade', 'https://sites.google.com/view/drvinodragade/home?authuser=0', NULL, 'Dr.', 38, 'm'),
(199, 'Kiran Kharat', 'https://sites.google.com/view/the-kirans-lab/home?authuser=0', NULL, 'Dr.', 38, 'm'),
(200, 'Preetha Acharya', 'https://sites.google.com/view/scientiacosmos/home?authuser=0', NULL, 'Dr.', 38, 'f'),
(201, 'Veena Menon', 'https://sites.google.com/view/veenamenon/home', NULL, 'Ms.', 38, 'f'),
(202, 'Akshay Bagwe', 'https://sites.google.com/view/mrakshaybagwe/home', NULL, 'Mr.', 38, 'm'),
(207, 'Satwant Balse', NULL, NULL, 'Dr.', NULL, 'm'),
(208, 'Arpita Joshi', NULL, NULL, 'Ms.', NULL, 'f'),
(209, 'Anuya Sane', NULL, NULL, 'Ms.', NULL, 'f'),
(210, 'Pranali Salanke', NULL, NULL, 'Ms.', NULL, 'f'),
(211, 'Harshana Nikam', 'https://sites.google.com/view/harshananikam/home', NULL, 'Ms.', 9, 'f'),
(212, 'Ravindra Gore', NULL, NULL, 'Mr.', 56, 'm'),
(213, 'Upendra Joshi', NULL, NULL, 'Mr.', 56, 'm'),
(214, 'H.R. Choudhari', NULL, NULL, 'Mr.', 56, 'm'),
(215, 'Arunsing Rajput', NULL, NULL, 'Mr.', 56, 'm'),
(216, 'Madhavi Choudhary', NULL, NULL, 'Dr.', 56, 'f'),
(217, 'Sujata Patil', NULL, NULL, 'Mrs.', 56, 'f'),
(218, 'Ravindra Kamble', NULL, NULL, 'Mr.', 56, 'm'),
(219, 'Prachi Jadhav', NULL, NULL, 'Ms.', 56, 'f'),
(220, 'Sarika Nipane', NULL, NULL, 'Ms.', 56, 'f'),
(221, 'Mudita Sonawane', 'https://sites.google.com/view/muditass/', NULL, 'Ms.', 55, 'f'),
(222, 'Anil Naik', 'https://sites.google.com/view/ca-anil-naik/home', 'https://vazecollege.net/wp-content/uploads/2022/06/CA-Anil-Naik-570x516.jpeg', 'CA', 60, 'm'),
(223, 'Yogesh Sant', 'https://sites.google.com/view/yogesh-sant/home', NULL, 'CA', 60, 'm'),
(224, 'Shilpa Palande', 'https://sites.google.com/view/shilpa-palande/home', NULL, 'Dr.', 60, 'f'),
(225, 'Swapna Jagtap', 'https://sites.google.com/view/asstprofessormsswapnajagtap/home', NULL, 'Ms.', 60, 'f'),
(226, 'Suchitra Poojari', 'https://sites.google.com/view/suchitrapoojari/home', NULL, 'Ms.', 60, 'f'),
(227, 'Gayatri Vaity', 'https://sites.google.com/view/ms-gayatri-vaity08/home', NULL, 'Ms.', 60, 'f'),
(228, 'Vaishnavi Joshi', 'https://sites.google.com/view/vaishnavijoshi/bio?authuser=1', NULL, 'Ms.', 28, 'f'),
(230, 'Sandeep Kamble', NULL, NULL, 'Mr.', NULL, 'm'),
(231, 'Tanuja Tirodkar', NULL, NULL, 'Ms.', NULL, 'f'),
(232, 'Shruti Kakodkar', NULL, NULL, 'Dr.', NULL, 'f'),
(233, 'Sundari Johnson', NULL, NULL, 'Ms.', NULL, 'f'),
(234, 'Paritosh Pawar', NULL, NULL, 'Mr.', NULL, 'm'),
(235, 'Tushar Bhuwad', NULL, NULL, 'Mr.', NULL, 'm'),
(236, 'Monica Saroha', NULL, NULL, 'Ms.', NULL, 'f'),
(237, 'Rohit Kumar Upadhyay', NULL, NULL, 'Mr.', NULL, 'm'),
(238, 'Neha Joglekar', NULL, NULL, 'Ms.', NULL, 'f'),
(239, 'Aarti Shah', NULL, NULL, 'Ms.', NULL, 'f'),
(240, 'Tanvi Joshi', NULL, NULL, 'Ms.', NULL, 'f'),
(241, 'Ankita Rane', NULL, NULL, 'Ms.', NULL, 'f'),
(242, 'Ashitosh Trigune', NULL, NULL, 'Mr.', NULL, 'm'),
(246, 'Santosh Dagle', NULL, NULL, 'Mr.', NULL, 'm'),
(247, 'Tambe', NULL, NULL, 'Mr.', NULL, 'm'),
(248, 'Bhaskar Chaudhary', NULL, NULL, 'Mr.', NULL, 'm'),
(249, 'Anuya Joshi', NULL, NULL, 'Ms.', NULL, 'f'),
(250, 'Mahull', NULL, NULL, 'Mrs.', NULL, 'f'),
(253, 'Veena Radhakrishnan', NULL, NULL, 'Ms.', NULL, 'f'),
(254, 'Chitra Subramanian', NULL, NULL, 'Ms.', NULL, 'f'),
(255, 'Lavaleen Narang', NULL, NULL, 'Ms.', NULL, 'f'),
(256, 'Hitesh Thakkar', NULL, NULL, 'Mr.', NULL, 'm'),
(257, 'Santosh Nikam', NULL, NULL, 'Mr.', NULL, 'm'),
(258, 'Raju Gaikwad', NULL, NULL, 'Mr.', NULL, 'm'),
(259, 'Sasmita', NULL, NULL, 'Ms.', NULL, 'f'),
(260, 'Hemant Chaudhari', NULL, NULL, 'Mr.', NULL, 'm'),
(261, 'Hema Sudade', NULL, NULL, 'Ms.', NULL, 'f'),
(262, 'Minal Dhas', NULL, NULL, 'Ms.', NULL, 'f'),
(263, 'B.K. Giri', NULL, NULL, 'Mr.', NULL, 'm'),
(272, 'Ramesh Vaze', NULL, NULL, 'Mr.', NULL, 'm'),
(273, 'Jyoti Bhadkamkar', NULL, NULL, 'Ms.', NULL, 'f'),
(274, 'Dhananjay Sathaye', NULL, NULL, 'Mr.', NULL, 'm'),
(275, 'Arvind Bhorkar', NULL, NULL, 'CA', NULL, 'm'),
(276, 'Gaurav Sathaye', NULL, NULL, 'Mr.', NULL, 'm'),
(277, 'S.S. Barve', NULL, NULL, 'Dr.', NULL, 'm'),
(278, 'Mihir Bhadkamkar', NULL, NULL, 'Mr.', NULL, 'm'),
(279, 'Jaysing Naik', NULL, NULL, 'Mr.', NULL, 'm');

-- --------------------------------------------------------

--
-- Table structure for table `college_sections`
--

CREATE TABLE `college_sections` (
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_sections`
--

INSERT INTO `college_sections` (`college_sec_name`) VALUES
('d'),
('j'),
('m'),
('nt'),
('s');

-- --------------------------------------------------------

--
-- Table structure for table `college_users`
--

CREATE TABLE `college_users` (
  `college_user_id` int(11) NOT NULL,
  `college_user_name` varchar(255) NOT NULL,
  `college_user_email` varchar(255) NOT NULL,
  `college_user_password` varchar(50) NOT NULL,
  `college_user_role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_users`
--

INSERT INTO `college_users` (`college_user_id`, `college_user_name`, `college_user_email`, `college_user_password`, `college_user_role`) VALUES
(1, 'admin', 'admin@example.com', 'admin', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `committee_and_activity_groups`
--

CREATE TABLE `committee_and_activity_groups` (
  `committee_id` int(11) NOT NULL,
  `committee_name` varchar(255) NOT NULL,
  `committee_symbol_file_name` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee_and_activity_groups`
--

INSERT INTO `committee_and_activity_groups` (`committee_id`, `committee_name`, `committee_symbol_file_name`) VALUES
(2, 'Internal Complaints', 'icc_svg.svg'),
(3, 'National Service Scheme', 'nss_svg.svg'),
(4, 'Special Cell', 'special_cell_svg.svg'),
(5, 'Student Council', 'stuco_svg.svg'),
(6, 'Academic Calendar and Prospectus', 'calendar_svg.svg'),
(7, 'Alumni Association', 'alumni_svg.svg'),
(8, 'Attendance including I-Card', 'id_card_svg.svg'),
(9, 'Staff Common Room and Canteen', 'canteen_svg.svg'),
(10, 'Digital Content Development and ICT Enabling', 'digital_content_svg.svg'),
(11, 'Feedback', 'feedback_svg.svg'),
(12, 'Human Resource Development', 'hrd_svg.svg'),
(13, 'Internal Finance', 'finance_svg.svg'),
(14, 'Institutional Social Responsibility', 'isr_svg.svg'),
(15, 'Maintenance', 'maintenance_svg.svg'),
(16, 'Purchase', 'purchase_svg.svg'),
(17, 'Research Promotion', 'research_svg.svg'),
(18, 'Support Staff Planning and Co-ordination', 'support_staff_svg.svg'),
(19, 'Web-Designing and Uploading', 'web_design_svg.svg'),
(20, 'Women Development Cell', 'women_svg.svg'),
(21, 'Dimensions', 'dimensions_svg.svg'),
(22, 'Green Initiative/ Hiker\'s Club/ Environment Club/ Nature Club', 'hiking_svg.svg'),
(23, 'Literary Association and Mayur', 'mayur_magazine_svg.svg'),
(24, 'Vaze Sanskruti', 'vaze_sanskruti_svg.svg'),
(25, 'Science Association', 'science_svg.svg'),
(26, 'Counselling Cell', 'counselling_svg.svg'),
(27, 'Gymkhana', 'gymkhana_svg.svg'),
(28, 'Steering', 'steering_committee_svg.svg'),
(29, 'Discipline', 'discipline_svg.svg'),
(30, 'Examination and Results', 'exam_svg.svg'),
(31, 'G.D. Kelkar Skill and Finishing School', NULL),
(32, 'Career Guidance, Training and Placement Cell', 'cgtpc_svg.svg'),
(33, 'Library', 'vaze_library_png.png'),
(34, 'Student Support, Welfare and Remedial Coaching', 'student_support_svg.svg'),
(35, 'Development Programs', 'development_programs_svg.svg'),
(36, 'Anti-Ragging', 'anti_ragging_svg.svg'),
(37, 'Film and Photography Club', 'camera_svg.svg'),
(38, 'Prize Distribution, Degree Distribution and G.D. Kelkar-R.A.Kulkarni Memorial Lecture Series', 'prize_svg.svg'),
(39, 'Internal Quality Assessment and Control', 'iqac_svg.svg'),
(40, 'Support to Administration', 'admin_support_svg.svg'),
(41, 'Swayam Shreyas and Life Long Learning', 'swayam_svg.svg'),
(42, 'College Executive Committee', NULL),
(43, 'College Administration', NULL),
(44, 'College Development Committee', NULL),
(45, 'School Committee', NULL),
(46, 'College Management', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `committee_belongs_to_clg_section`
--

CREATE TABLE `committee_belongs_to_clg_section` (
  `committee_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL,
  `committee_clg_section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee_belongs_to_clg_section`
--

INSERT INTO `committee_belongs_to_clg_section` (`committee_id`, `college_sec_name`, `committee_clg_section_id`) VALUES
(6, 'd', 1),
(6, 'j', 2),
(7, 'd', 3),
(7, 'j', 4),
(36, 'j', 5),
(36, 'd', 6),
(8, 'd', 7),
(8, 'j', 8),
(32, 'd', 9),
(43, 'm', 10),
(44, 'm', 11),
(42, 'm', 12),
(26, 'd', 13),
(26, 'j', 14),
(35, 'd', 15),
(10, 'd', 16),
(10, 'j', 17),
(21, 'd', 18),
(21, 'j', 19),
(29, 'd', 20),
(29, 'j', 21),
(30, 'd', 22),
(30, 'j', 23),
(11, 'd', 24),
(37, 'd', 25),
(37, 'j', 26),
(31, 'd', 27),
(31, 'j', 28),
(22, 'd', 29),
(22, 'j', 30),
(27, 'd', 31),
(27, 'j', 32),
(12, 'd', 33),
(14, 'd', 34),
(14, 'j', 35),
(2, 'd', 36),
(13, 'd', 37),
(39, 'd', 38),
(32, 'j', 40),
(23, 'd', 41),
(23, 'j', 42),
(15, 'd', 43),
(3, 'd', 44),
(3, 'j', 45),
(38, 'd', 46),
(38, 'j', 47),
(16, 'd', 48),
(17, 'j', 49),
(17, 'j', 50),
(24, 'd', 51),
(24, 'j', 52),
(34, 'd', 53),
(25, 'd', 55),
(25, 'j', 56),
(4, 'd', 57),
(4, 'j', 58),
(9, 'd', 59),
(9, 'j', 60),
(28, 'd', 61),
(5, 'd', 62),
(5, 'j', 63),
(18, 'd', 64),
(40, 'd', 65),
(41, 'd', 66),
(19, 'd', 68),
(20, 'd', 69),
(20, 'j', 70),
(33, 'd', 71),
(33, 'j', 72),
(45, 'm', 73),
(46, 'm', 74);

-- --------------------------------------------------------

--
-- Table structure for table `cp_designation`
--

CREATE TABLE `cp_designation` (
  `cp_id` int(11) NOT NULL,
  `cp_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cp_designation`
--

INSERT INTO `cp_designation` (`cp_id`, `cp_designation`) VALUES
(74, 'Principal'),
(62, 'Assistant Professor'),
(88, 'Assistant Professor'),
(89, 'Assistant Professor'),
(90, 'Assistant Professor'),
(91, 'Assistant Professor'),
(94, 'Assistant Professor'),
(65, 'Associate Professor'),
(66, 'Associate Professor'),
(67, 'Associate Professor'),
(68, 'Associate Professor'),
(69, 'Associate Professor'),
(70, 'Associate Professor'),
(64, 'Assistant Professor'),
(113, 'Assistant Professor'),
(122, 'Associate Professor'),
(123, 'Associate Professor'),
(191, 'Assistant Professor'),
(192, 'Assistant Professor'),
(193, 'Assistant Professor'),
(128, 'Assistant Professor'),
(211, 'Assistant Professor'),
(160, 'Dean of Science'),
(160, 'Nodal Officer of NEP and ABC'),
(161, 'Coordinator of STAR Scheme,UGC and FIST'),
(162, 'Controller of Examination'),
(163, 'Director of Research and Development'),
(164, 'Assistant Professor'),
(165, 'Assistant Professor'),
(166, 'Supervisor of Junior College'),
(167, 'Associate Professor'),
(168, 'Associate Professor'),
(169, 'Associate Professor'),
(170, 'Associate Professor'),
(171, 'Associate Professor'),
(172, 'Associate Professor'),
(173, 'Associate Professor'),
(111, 'Associate Professor'),
(115, 'Dean of Humanities and Social Sciences'),
(116, 'Assistant Professor'),
(118, 'Associate Professor'),
(119, 'Associate Professor (adhoc)'),
(127, 'Assistant Professor'),
(125, 'Associate Professor'),
(133, 'Coordinator of IQAC'),
(133, 'Dean of Quality'),
(134, 'Assistant Professor'),
(135, 'Assistant Professor'),
(132, 'Assistant Professor'),
(138, 'Assistant Professor'),
(140, 'Associate Professor(PT-adhoc)'),
(98, 'Assistant Professor'),
(99, 'Assistant Professor'),
(100, 'Assistant Professor'),
(101, 'Assistant Professor'),
(102, 'Assistant Professor'),
(96, 'Assistant Professor'),
(97, 'Assistant Professor'),
(228, 'Assistant Professor'),
(105, 'Assistant Professor'),
(106, 'Assistant Professor'),
(107, 'Assistant Professor'),
(108, 'Assistant Professor'),
(109, 'Assistant Professor'),
(104, 'Assistant Professor'),
(198, 'Convenor of Special Cell'),
(199, 'Assistant Professor'),
(200, 'Assistant Professor'),
(201, 'Assistant Professor'),
(202, 'Assistant Professor'),
(151, 'Assistant Professor'),
(195, 'Assistant Professor'),
(196, 'Assistant Professor'),
(197, 'Assistant Professor'),
(221, 'Assistant Professor'),
(213, 'Associate Professor'),
(214, 'Associate Professor'),
(215, 'Associate Professor'),
(216, 'Associate Professor'),
(217, 'Associate Professor'),
(219, 'Associate Professor'),
(220, 'Associate Professor'),
(183, 'Associate Professor'),
(184, 'Associate Professor'),
(185, 'Associate Professor'),
(186, 'Associate Professor'),
(187, 'Associate Professor'),
(188, 'Associate Professor'),
(189, 'Associate Professor'),
(222, 'Vice Principal (Degree College)'),
(223, 'Assistant Professor'),
(224, 'Assistant Professor'),
(225, 'Assistant Professor'),
(226, 'Assistant Professor'),
(227, 'Assistant Professor'),
(150, 'Assistant Professor'),
(148, 'Dean of Human Resources'),
(148, 'Coordinator of RUSA, Autonomy Grants and CSR'),
(146, 'Dean of Commerce'),
(147, 'Assistant Professor'),
(142, 'Associate Professor'),
(143, 'Associate Professor'),
(144, 'Associate Professor'),
(145, 'Associate Professor'),
(156, 'Assistant Professor'),
(157, 'Assistant Professor'),
(158, 'Assistant Professor'),
(159, 'Assistant Professor'),
(175, 'Associate Professor'),
(176, 'Associate Professor'),
(177, 'Associate Professor'),
(178, 'Associate Professor'),
(179, 'Associate Professor'),
(180, 'Associate Professor'),
(181, 'Associate Professor'),
(87, 'Vice Principal(Junior College)'),
(93, 'Director of Entrepreneurship Cell'),
(63, 'Dean of Research'),
(63, 'Director of PhD Centers'),
(63, 'Convenor of Steering Committee'),
(92, 'Dean of Self-Financing Courses'),
(61, 'Head of Department'),
(190, 'Head of Department'),
(74, 'Head of Department'),
(160, 'Head of Department'),
(115, 'Head of Department'),
(126, 'Head of Department'),
(133, 'Head of Department'),
(131, 'Head of Department'),
(137, 'Head of Department'),
(95, 'Head of Department'),
(103, 'Head of Department'),
(198, 'Head of Department'),
(194, 'Head of Department'),
(222, 'Head of Department'),
(149, 'Head of Department'),
(148, 'Head of Department'),
(146, 'Head of Department'),
(155, 'Head of Department'),
(63, 'Head of Department'),
(92, 'Head of Department'),
(120, 'Head of Department'),
(121, 'In-charge'),
(129, 'In-charge'),
(117, 'In-charge'),
(124, 'In-charge'),
(110, 'In-charge'),
(136, 'In-charge'),
(130, 'In-charge'),
(139, 'In-charge'),
(212, 'In-charge'),
(182, 'In-charge'),
(141, 'In-charge'),
(153, 'In-charge'),
(174, 'In-charge'),
(152, 'In-charge'),
(154, 'In-charge'),
(87, 'In-charge'),
(114, 'In-charge');

-- --------------------------------------------------------

--
-- Table structure for table `cp_has_tenure`
--

CREATE TABLE `cp_has_tenure` (
  `cp_id` int(11) NOT NULL,
  `tenure_id` int(11) NOT NULL,
  `role` enum('p','vpd','vpj') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cp_has_tenure`
--

INSERT INTO `cp_has_tenure` (`cp_id`, `tenure_id`, `role`) VALUES
(73, 7, 'p'),
(74, 33, 'p'),
(75, 24, 'vpd'),
(77, 26, 'vpd'),
(76, 25, 'vpd'),
(73, 27, 'vpd'),
(78, 28, 'vpd'),
(79, 29, 'vpd'),
(80, 30, 'vpd'),
(81, 31, 'vpd'),
(74, 32, 'vpd'),
(83, 34, 'vpj'),
(84, 35, 'vpj'),
(85, 36, 'vpj'),
(86, 37, 'vpj'),
(87, 38, 'vpj'),
(72, 6, 'p'),
(71, 5, 'p'),
(222, 33, 'vpd');

-- --------------------------------------------------------

--
-- Table structure for table `cp_is_part_of_committee`
--

CREATE TABLE `cp_is_part_of_committee` (
  `cp_id` int(11) NOT NULL,
  `committee_sec_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cp_is_part_of_committee`
--

INSERT INTO `cp_is_part_of_committee` (`cp_id`, `committee_sec_id`, `role`) VALUES
(162, 22, 'Controller'),
(88, 22, 'member'),
(115, 22, 'member'),
(160, 22, 'member'),
(103, 22, 'member'),
(98, 22, 'member'),
(105, 22, 'member'),
(208, 22, 'member'),
(137, 22, 'member'),
(147, 22, 'member'),
(230, 22, 'member'),
(92, 29, 'member'),
(148, 29, 'member'),
(156, 29, 'member'),
(231, 29, 'member'),
(210, 27, 'member'),
(74, 27, 'member'),
(132, 27, 'member'),
(150, 27, 'member'),
(232, 27, 'member'),
(210, 69, 'member'),
(133, 69, 'member'),
(232, 69, 'member'),
(116, 69, 'member'),
(108, 69, 'member'),
(91, 16, 'member'),
(88, 16, 'member'),
(207, 16, 'member'),
(62, 16, 'member'),
(97, 16, 'member'),
(196, 16, 'member'),
(233, 16, 'member'),
(234, 16, 'member'),
(235, 16, 'member'),
(236, 16, 'member'),
(234, 7, 'member'),
(91, 7, 'member'),
(63, 7, 'member'),
(200, 7, 'member'),
(149, 7, 'member'),
(89, 9, 'member'),
(163, 9, 'member'),
(137, 9, 'member'),
(102, 9, 'member'),
(96, 9, 'member'),
(97, 9, 'member'),
(151, 9, 'member'),
(225, 9, 'member'),
(147, 9, 'member'),
(237, 9, 'member'),
(149, 44, 'member'),
(161, 44, 'member'),
(104, 44, 'member'),
(225, 44, 'member'),
(108, 44, 'member'),
(147, 44, 'member'),
(147, 18, 'member'),
(211, 18, 'member'),
(150, 18, 'member'),
(156, 18, 'member'),
(237, 18, 'member'),
(238, 18, 'member'),
(234, 71, 'member'),
(106, 71, 'member'),
(116, 51, 'member'),
(108, 51, 'member'),
(231, 51, 'member'),
(236, 51, 'member'),
(96, 51, 'member'),
(239, 51, 'member'),
(191, 51, 'member'),
(100, 62, 'member'),
(208, 62, 'member'),
(233, 62, 'member'),
(132, 62, 'member'),
(195, 62, 'member'),
(240, 62, 'member'),
(61, 68, 'member'),
(88, 68, 'member'),
(234, 68, 'member'),
(104, 68, 'member'),
(241, 68, 'member'),
(134, 53, 'member'),
(126, 53, 'member'),
(151, 53, 'member'),
(196, 53, 'member'),
(207, 53, 'member'),
(90, 53, 'member'),
(62, 53, 'member'),
(200, 53, 'member'),
(201, 53, 'member'),
(157, 53, 'member'),
(109, 53, 'member'),
(235, 53, 'member'),
(211, 53, 'member'),
(242, 53, 'member'),
(198, 43, 'member'),
(92, 43, 'member'),
(222, 43, 'member'),
(61, 43, 'member'),
(209, 43, 'member'),
(131, 43, 'member'),
(101, 43, 'member'),
(246, 43, 'member'),
(247, 43, 'member'),
(248, 43, 'member'),
(146, 48, 'member'),
(234, 48, 'member'),
(93, 48, 'member'),
(155, 48, 'member'),
(106, 48, 'member'),
(246, 48, 'member'),
(89, 48, 'member'),
(249, 48, 'member'),
(222, 37, 'member'),
(146, 37, 'member'),
(95, 37, 'member'),
(161, 37, 'member'),
(157, 37, 'member'),
(230, 37, 'member'),
(199, 37, 'member'),
(224, 37, 'member'),
(102, 37, 'member'),
(96, 37, 'member'),
(250, 37, 'member'),
(199, 15, 'member'),
(109, 15, 'member'),
(110, 6, 'member'),
(63, 6, 'member'),
(115, 6, 'member'),
(249, 6, 'member'),
(151, 6, 'member'),
(195, 6, 'member'),
(240, 6, 'member'),
(132, 6, 'member'),
(227, 6, 'member'),
(253, 6, 'member'),
(254, 6, 'member'),
(63, 49, 'member'),
(163, 49, 'member'),
(231, 49, 'member'),
(249, 49, 'member'),
(224, 49, 'member'),
(148, 49, 'member'),
(240, 49, 'member'),
(62, 49, 'member'),
(200, 49, 'member'),
(199, 49, 'member'),
(255, 49, 'member'),
(148, 46, 'member'),
(160, 34, 'member'),
(225, 34, 'member'),
(133, 13, 'member'),
(155, 57, 'member'),
(134, 57, 'member'),
(194, 25, 'member'),
(239, 46, 'member'),
(98, 46, 'member'),
(255, 46, 'member'),
(100, 46, 'member'),
(105, 46, 'member'),
(156, 46, 'member'),
(240, 46, 'member'),
(120, 46, 'member'),
(224, 46, 'member'),
(210, 46, 'member'),
(236, 46, 'member'),
(194, 55, 'member'),
(88, 55, 'member'),
(93, 55, 'member'),
(162, 55, 'member'),
(191, 55, 'member'),
(201, 55, 'member'),
(222, 3, 'member'),
(93, 3, 'member'),
(102, 3, 'member'),
(211, 3, 'member'),
(127, 3, 'member'),
(157, 3, 'member'),
(249, 3, 'member'),
(256, 3, 'member'),
(257, 3, 'member'),
(254, 1, 'member'),
(198, 1, 'member'),
(194, 1, 'member'),
(230, 1, 'member'),
(98, 1, 'member'),
(255, 1, 'member'),
(208, 1, 'member'),
(120, 1, 'member'),
(126, 1, 'member'),
(90, 1, 'member'),
(146, 31, 'member'),
(237, 31, 'member'),
(191, 31, 'member'),
(95, 59, 'member'),
(106, 59, 'member'),
(103, 41, 'member'),
(233, 41, 'member'),
(101, 41, 'member'),
(120, 41, 'member'),
(127, 41, 'member'),
(104, 41, 'member'),
(109, 41, 'member'),
(196, 41, 'member'),
(133, 38, 'member'),
(131, 38, 'member'),
(89, 38, 'member'),
(161, 38, 'member'),
(95, 38, 'member'),
(149, 38, 'member'),
(101, 38, 'member'),
(116, 38, 'member'),
(92, 38, 'member'),
(195, 38, 'member'),
(63, 61, 'member'),
(115, 61, 'member'),
(234, 61, 'member'),
(198, 61, 'member'),
(100, 61, 'member'),
(137, 61, 'member'),
(232, 61, 'member'),
(239, 61, 'member'),
(90, 61, 'member'),
(97, 61, 'member'),
(254, 36, 'member'),
(63, 36, 'member'),
(115, 36, 'member'),
(209, 36, 'member'),
(155, 33, 'member'),
(160, 33, 'member'),
(254, 33, 'member'),
(134, 33, 'member'),
(163, 33, 'member'),
(127, 33, 'member'),
(258, 33, 'member'),
(259, 33, 'member'),
(91, 65, 'member'),
(132, 65, 'member'),
(150, 65, 'member'),
(151, 65, 'member'),
(131, 66, 'member'),
(103, 66, 'member'),
(209, 66, 'member'),
(235, 66, 'member'),
(238, 66, 'member'),
(201, 66, 'member'),
(105, 66, 'member'),
(207, 66, 'member'),
(126, 66, 'member'),
(115, 20, 'member'),
(63, 20, 'member'),
(146, 20, 'member'),
(155, 20, 'member'),
(161, 20, 'member'),
(133, 20, 'member'),
(92, 20, 'member'),
(100, 20, 'member'),
(149, 20, 'member'),
(163, 20, 'member'),
(127, 20, 'member'),
(213, 23, 'member'),
(87, 23, 'member'),
(178, 23, 'member'),
(169, 23, 'member'),
(139, 23, 'member'),
(110, 23, 'member'),
(69, 30, 'member'),
(181, 30, 'member'),
(70, 28, 'member'),
(189, 28, 'member'),
(153, 70, 'member'),
(217, 70, 'member'),
(65, 17, 'member'),
(111, 17, 'member'),
(185, 17, 'member'),
(260, 17, 'member'),
(66, 8, 'member'),
(215, 8, 'member'),
(142, 8, 'member'),
(181, 8, 'member'),
(175, 40, 'member'),
(166, 40, 'member'),
(122, 40, 'member'),
(188, 40, 'member'),
(173, 45, 'member'),
(183, 45, 'member'),
(187, 45, 'member'),
(220, 45, 'member'),
(180, 45, 'member'),
(262, 45, 'member'),
(130, 19, 'member'),
(185, 19, 'member'),
(171, 19, 'member'),
(67, 19, 'member'),
(189, 19, 'member'),
(212, 72, 'member'),
(87, 72, 'member'),
(114, 72, 'member'),
(129, 72, 'member'),
(176, 72, 'member'),
(170, 52, 'member'),
(124, 52, 'member'),
(66, 52, 'member'),
(121, 52, 'member'),
(180, 52, 'member'),
(184, 52, 'member'),
(144, 52, 'member'),
(186, 52, 'member'),
(179, 52, 'member'),
(177, 63, 'member'),
(65, 63, 'member'),
(173, 63, 'member'),
(177, 5, 'member'),
(65, 5, 'member'),
(173, 5, 'member'),
(216, 49, 'member'),
(125, 26, 'member'),
(172, 26, 'member'),
(129, 35, 'member'),
(187, 35, 'member'),
(136, 14, 'member'),
(142, 58, 'member'),
(218, 58, 'member'),
(141, 47, 'member'),
(174, 47, 'member'),
(175, 47, 'member'),
(217, 47, 'member'),
(260, 47, 'member'),
(118, 47, 'member'),
(68, 47, 'member'),
(166, 56, 'member'),
(216, 56, 'member'),
(218, 56, 'member'),
(172, 56, 'member'),
(168, 4, 'member'),
(183, 4, 'member'),
(130, 4, 'member'),
(143, 4, 'member'),
(174, 2, 'member'),
(141, 2, 'member'),
(117, 2, 'member'),
(67, 2, 'member'),
(184, 2, 'member'),
(219, 2, 'member'),
(188, 2, 'member'),
(262, 32, 'member'),
(68, 32, 'member'),
(114, 32, 'member'),
(186, 32, 'member'),
(263, 32, 'member'),
(139, 60, 'member'),
(123, 60, 'member'),
(154, 42, 'member'),
(153, 42, 'member'),
(69, 42, 'member'),
(70, 42, 'member'),
(122, 42, 'member'),
(123, 42, 'member'),
(125, 42, 'member'),
(141, 21, 'member'),
(130, 21, 'member'),
(174, 21, 'member'),
(176, 21, 'member'),
(117, 8, 'member'),
(272, 74, 'Founder Trustee'),
(273, 74, 'trustee'),
(274, 74, 'trustee'),
(71, 74, 'secretary'),
(74, 12, 'secretary'),
(73, 12, 'advisor'),
(222, 12, 'member'),
(273, 12, 'member'),
(71, 12, 'member'),
(275, 12, 'member'),
(276, 12, 'member'),
(74, 10, 'Principal'),
(222, 10, 'Vice-Principal (Degree College)'),
(87, 10, 'Vice-Principal (Junior College)'),
(273, 11, 'chairperson'),
(276, 11, 'member Industry'),
(71, 11, 'member'),
(275, 11, 'member Education'),
(74, 11, 'member Secretary'),
(222, 11, 'member'),
(133, 11, 'member'),
(256, 11, 'member Social Service'),
(146, 11, 'teaching Staff Member'),
(155, 11, 'teaching Staff Member'),
(254, 11, 'teaching Staff Member'),
(246, 11, 'non-teaching Staff Member'),
(277, 11, 'member'),
(273, 73, 'chairperson'),
(71, 73, 'Secretary KET'),
(275, 73, 'Management Nominee'),
(74, 73, 'Secretary'),
(87, 73, 'Vice-Principal (Junior College)'),
(166, 73, ' Supervisor (Junior College)'),
(260, 73, 'Teacher Member'),
(278, 73, 'member'),
(279, 73, 'Non-Teaching Staff Representative'),
(166, 10, 'Supervisor (Junior College)');

-- --------------------------------------------------------

--
-- Table structure for table `departmental_activities`
--

CREATE TABLE `departmental_activities` (
  `dept_act_id` int(11) NOT NULL,
  `dept_act_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departmental_activities`
--

INSERT INTO `departmental_activities` (`dept_act_id`, `dept_act_name`) VALUES
(1, 'accontancy1 2023-2024'),
(2, 'accontancy2 2023-2024'),
(3, 'accontancy1 2024-2025'),
(4, 'accountancy2 2024-2025'),
(5, 'ok1'),
(6, 'ok2'),
(7, 'ok3'),
(8, 'ok4\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `departmental_activities_in_academic_year`
--

CREATE TABLE `departmental_activities_in_academic_year` (
  `dept_act_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departmental_activities_in_academic_year`
--

INSERT INTO `departmental_activities_in_academic_year` (`dept_act_id`, `academic_year`) VALUES
(1, '2023-2024'),
(2, '2023-2024'),
(3, '2024-2025'),
(4, '2024-2025'),
(5, '2018-2019'),
(6, '2018-2019'),
(7, '2019-2020'),
(8, '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`, `dept_link`) VALUES
(1, 'Information Technology', NULL),
(2, 'Biotechnology', NULL),
(3, 'English', NULL),
(4, 'Research', NULL),
(5, 'Economics', NULL),
(6, 'Hindi', NULL),
(7, 'History', NULL),
(8, 'Marathi', NULL),
(9, 'Psychology', NULL),
(10, 'Political Science', NULL),
(11, 'Sociology', NULL),
(12, 'Accounting and Finance', NULL),
(13, 'Banking Insurance', NULL),
(14, 'Management Studies', NULL),
(15, 'Mass Media', NULL),
(16, 'Business Administration', NULL),
(17, 'Physics', NULL),
(18, 'Chemistry', NULL),
(19, 'Mathematics', NULL),
(20, 'Zoology', NULL),
(21, 'Accountancy', NULL),
(22, 'Business Law', NULL),
(23, 'Business Economics', NULL),
(24, 'EVS', NULL),
(25, 'Commerce', NULL),
(26, 'Botany', NULL),
(27, 'French', NULL),
(28, 'Biology', NULL),
(29, 'Environmental Education', NULL),
(30, 'Sanskrit', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_belongs_to_clg_section`
--

CREATE TABLE `dept_belongs_to_clg_section` (
  `dept_sect_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL,
  `dept_faculty_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_belongs_to_clg_section`
--

INSERT INTO `dept_belongs_to_clg_section` (`dept_sect_id`, `dept_id`, `college_sec_name`, `dept_faculty_name`) VALUES
(1, 1, 's', 's'),
(2, 2, 's', 's'),
(3, 3, 'j', 'a'),
(4, 3, 'd', 'a'),
(5, 6, 'd', 'a'),
(6, 6, 'j', 'a'),
(8, 19, 'd', 's'),
(9, 7, 'd', 'a'),
(10, 7, 'j', 'a'),
(12, 18, 'd', 's'),
(13, 18, 'j', 's'),
(14, 1, 'j', 's'),
(16, 5, 'd', 'c'),
(17, 5, 'j', 'c'),
(18, 8, 'd', 'a'),
(19, 8, 'j', 'a'),
(20, 9, 'd', 'a'),
(21, 9, 'j', 'a'),
(22, 10, 'd', 'a'),
(23, 10, 'j', 'a'),
(24, 11, 'd', 'a'),
(25, 11, 'j', 'a'),
(26, 12, 's', 'c'),
(28, 13, 's', 'c'),
(30, 14, 's', 'c'),
(32, 15, 's', 'a'),
(34, 16, 's', 'c'),
(38, 20, 'd', 's'),
(43, 22, 'd', 'c'),
(53, 16, 'd', 'c'),
(54, 16, 'j', 'c'),
(55, 17, 'd', 's'),
(56, 17, 'j', 's'),
(58, 19, 'j', 's'),
(60, 21, 'd', 'c'),
(64, 23, 'd', 'c'),
(66, 24, 'd', 'c'),
(68, 25, 'd', 'c'),
(69, 25, 'j', 'c'),
(70, 26, 'd', 's'),
(72, 27, 'j', 'a'),
(73, 28, 'j', 's'),
(74, 29, 'j', 'c'),
(75, 30, 'j', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `dept_has_dept_activities`
--

CREATE TABLE `dept_has_dept_activities` (
  `dept_sect_id` int(11) NOT NULL,
  `dept_act_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_has_dept_activities`
--

INSERT INTO `dept_has_dept_activities` (`dept_sect_id`, `dept_act_id`) VALUES
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(4, 1),
(4, 2),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_sec_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_sec_name`) VALUES
('a'),
('c'),
('s');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_giver_email` varchar(255) NOT NULL,
  `feedback_giver_name` varchar(100) NOT NULL,
  `feedback_content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honourific`
--

CREATE TABLE `honourific` (
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `honourific`
--

INSERT INTO `honourific` (`title`) VALUES
('CA'),
('Dr.'),
('Mr.'),
('Mrs.'),
('Ms.'),
('Prof (Dr.)');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `all_pdf_id` int(11) NOT NULL,
  `all_pdf_title` varchar(1000) NOT NULL,
  `all_pdf_pdf_link` varchar(2000) NOT NULL,
  `all_pdf_upload_date` date NOT NULL,
  `notice_expiry_date` date NOT NULL,
  `notice_type` enum('e','re','tt','rc','g','p') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`all_pdf_id`, `all_pdf_title`, `all_pdf_pdf_link`, `all_pdf_upload_date`, `notice_expiry_date`, `notice_type`) VALUES
(1, 'ok1_degree', 'https://www.google.com', '2024-06-01', '2024-06-29', 'e'),
(2, 'ok2_degree', 'https://www.google.com', '2024-06-02', '2024-06-29', 'e'),
(3, 'ok3_degree', 'https://www.google.com', '2024-06-03', '2024-06-28', 'e'),
(4, 'ok4_degree', 'https://www.google.com', '2024-06-06', '2024-06-28', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `notices_are_for_clg_section_in_academic_year`
--

CREATE TABLE `notices_are_for_clg_section_in_academic_year` (
  `notice_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices_are_for_clg_section_in_academic_year`
--

INSERT INTO `notices_are_for_clg_section_in_academic_year` (`notice_id`, `college_sec_name`, `academic_year`) VALUES
(1, 'd', '2024-2025'),
(2, 'd', '2024-2025'),
(3, 'd', '2023-2024'),
(4, 'd', '2023-2024');

-- --------------------------------------------------------

--
-- Table structure for table `other_pdfs`
--

CREATE TABLE `other_pdfs` (
  `all_pdf_id` int(11) NOT NULL,
  `all_pdf_title` varchar(1000) NOT NULL,
  `all_pdf_pdf_link` varchar(2000) NOT NULL,
  `all_pdf_upload_date` date NOT NULL,
  `other_pdfs_should_it_be_visible` varchar(1) NOT NULL,
  `other_pdfs_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_pdfs`
--

INSERT INTO `other_pdfs` (`all_pdf_id`, `all_pdf_title`, `all_pdf_pdf_link`, `all_pdf_upload_date`, `other_pdfs_should_it_be_visible`, `other_pdfs_type_name`) VALUES
(1, 'FYBSCIT NEP 2024-2025', 'https://vazecollege.net/wp-content/uploads/2023/Syllabus/Open%20Eletive%20Offered%20to%20other%20Departments%202023-2024%20NEP.pdf', '2024-06-01', '', 'syllabus'),
(2, 'SYBSCIT NEP 2024 2025', 'http://vazecollege.net/wp-content/uploads/2024/syllabus/SYBScIT%20NEP%202024%202025.pdf', '2024-06-01', '', 'syllabus'),
(3, 'TYBSCIT NEP 2024-2025', 'http://vazecollege.net/wp-content/uploads/2024/syllabus/TYIT_2024_2025.pdf', '2024-06-01', '', 'syllabus'),
(4, 'FYBSCIT 2022-2021', 'http://vazecollege.net/wp-content/uploads/2020/10/FYBScIT.pdf', '0000-00-00', '', 'syllabus'),
(5, 'SYBSCIT 2022-2021', 'http://vazecollege.net/wp-content/uploads/2020/10/SYBSc.pdf', '0000-00-00', '', 'syllabus'),
(6, 'TYBSCIT 2022-2021', 'http://vazecollege.net/wp-content/uploads/2020/10/TYBSc-IT.pdf', '0000-00-00', '', 'syllabus'),
(7, 'MSCIT PART-I 2020-2021', 'http://vazecollege.net/wp-content/uploads/2020/10/M.Sc-IT_Part_1_sem_I_SemII.pdf', '0000-00-00', '', 'syllabus'),
(8, 'MSCIT PART-II 2020-2021', 'http://vazecollege.net/wp-content/uploads/2020/10/M.Sc-IT_Part_2_sem_III_Sem_IV.pdf', '0000-00-00', '', 'syllabus');

-- --------------------------------------------------------

--
-- Table structure for table `other_pdf_belongs_to_programme`
--

CREATE TABLE `other_pdf_belongs_to_programme` (
  `other_pdf_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_pdf_is_for_clg_section_in_academic_year`
--

CREATE TABLE `other_pdf_is_for_clg_section_in_academic_year` (
  `other_pdf_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_pdf_types`
--

CREATE TABLE `other_pdf_types` (
  `other_pdf_type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_pdf_types`
--

INSERT INTO `other_pdf_types` (`other_pdf_type_name`) VALUES
('syllabus');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `patent_id` int(11) NOT NULL,
  `patent_title` varchar(255) NOT NULL,
  `patent_type` varchar(3) NOT NULL,
  `patent_applicant` varchar(255) NOT NULL,
  `patent_application_number` varchar(100) NOT NULL,
  `patent_date_of_filing` date NOT NULL,
  `patent_number` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(500) NOT NULL,
  `photo_link` varchar(1000) NOT NULL,
  `photo_upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos_are_for_committees_in_academic_year`
--

CREATE TABLE `photos_are_for_committees_in_academic_year` (
  `committee_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos_for_achievements_in_academic_year`
--

CREATE TABLE `photos_for_achievements_in_academic_year` (
  `achievement_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos_for_events_in_academic_year`
--

CREATE TABLE `photos_for_events_in_academic_year` (
  `event_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos_of_faculty_academic_year`
--

CREATE TABLE `photos_of_faculty_academic_year` (
  `college_sec_name` varchar(2) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL,
  `faculty_sec_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `prog_id` int(11) NOT NULL,
  `prog_name` varchar(255) NOT NULL,
  `prog_eligibility` varchar(500) NOT NULL,
  `prog_intake_capacity` int(3) NOT NULL,
  `prog_duration` varchar(50) NOT NULL,
  `prog_dept_sec_id` int(11) DEFAULT NULL,
  `faculty_sec_name` varchar(1) DEFAULT NULL,
  `prog_bg_image_link` varchar(500) NOT NULL,
  `prog_type` enum('ug','pg','phd','gd') NOT NULL,
  `prog_overview_learning_section` varchar(1000) DEFAULT NULL,
  `prog_overview_career_section` varchar(1000) DEFAULT NULL,
  `prog_overview_skills_section` varchar(1000) DEFAULT NULL,
  `prog_overview_other_section` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`prog_id`, `prog_name`, `prog_eligibility`, `prog_intake_capacity`, `prog_duration`, `prog_dept_sec_id`, `faculty_sec_name`, `prog_bg_image_link`, `prog_type`, `prog_overview_learning_section`, `prog_overview_career_section`, `prog_overview_skills_section`, `prog_overview_other_section`) VALUES
(1, 'Bachelor of Science in Information Technology (BSc-IT)', '1.Candidates must have passed their 10+2 level of education from a recognised educational Board.\n2.They must have Physics, Chemistry, and Mathematics as the main subjects, and score a minimum of 50% marks.', 60, '3 years', 1, 's', 'https://images.unsplash.com/photo-1560264418-c4445382edbc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'A BScIT program covers fundamental topics like Information Technology basics, programming languages (Java, Python, C++), database management systems, web development (HTML, CSS, JavaScript), networking, operating systems, software engineering, and cybersecurity. Students also learn about mobile app development and project management methodologies.', ' BScIT graduates have various career paths, including Software Developer, Web Developer, Database Administrator, Network Administrator, Systems Analyst, IT Consultant, Cybersecurity Analyst, Mobile Application Developer, Project Manager, and IT Support Specialist.', 'Throughout the course of their studies, students develop a range of technical and soft skills. These include programming skills in languages like Java, Python, C++, or others, problem-solving abilities, critical thinking skills, communication skills, teamwork, and project management skills.', 'Many BSc IT programs includes practical projects as part of the curriculum. These experiences allow students to apply their theoretical knowledge in real-world settings, gain hands-on experience, and build professional networks.'),
(2, 'Bachelor of Science in Biotechnology (BSc-BT)', 'As per Mumbai University', 60, '3 years', 2, 's', 'https://plus.unsplash.com/premium_photo-1661306499492-297866c7f2a0?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'A BSc Biotech program typically covers a range of subjects related to biotechnology, including molecular biology, genetics, biochemistry, microbiology, cell biology, immunology, and bioprocess engineering. Students may also study topics such as bioinformatics, plant and animal biotechnology, environmental biotechnology, pharmaceutical biotechnology, and industrial biotechnology. Laboratory work is often a significant component of the curriculum, allowing students to gain hands-on experience with techniques such as DNA manipulation, protein expression, and cell culture.', 'Graduates of a BSc Biotech program have various career opportunities in industries such as pharmaceuticals, healthcare, agriculture, food processing, environmental conservation, and research. They can work as research assistants, laboratory technicians, quality control analysts, bioprocess engineers, bioinformatics specialists, regulatory affairs associates, or sales representatives for biotech companies. Additionally, they may pursue further education or advanced degrees in fields like biotechnology, biochemistry, molecular biology, or related disciplines.', 'Throughout the BSc Biotech program, students develop a diverse set of technical and transferable skills. They gain proficiency in laboratory techniques and instrumentation, including PCR, gel electrophoresis, chromatography, and spectrophotometry. They also acquire analytical and problem-solving skills, critical thinking abilities, and attention to detail through experimental design and data analysis. Communication and teamwork skills are honed through group projects and presentations, while an understanding of ethical and regulatory issues in biotechnology prepares students for responsible and ethical practice in the field. Overall, a BSc Biotech program equips students with the knowledge and skills needed to contribute to the advancement of biotechnology and address global challenges in health, agriculture, and the environment.', 'Biotechnology has led to breakthroughs like recombinant DNA technology for producing therapeutic proteins, CRISPR-Cas9 for gene editing, GM crops for agriculture, bioremediation for environmental cleanup, and personalized medicine. These innovations address global challenges and improve human well-being.'),
(3, 'Master of Science in Information Technology(MSc-IT)', 'As per Mumbai University', 20, '2 years', 1, 's', 'https://plus.unsplash.com/premium_photo-1683121716061-3faddf4dc504?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'pg', 'An MScIT program typically offers an advanced curriculum covering specialized areas within Information Technology. Courses may include Advanced Database Management Systems, Cloud Computing, Big Data Analytics, Artificial Intelligence, Machine Learning, Internet of Things (IoT), Cybersecurity, Software Engineering, and Advanced Networking. Additionally, students may engage in research projects or thesis work to delve deeper into specific topics of interest.', 'Graduates of an MScIT program are well-positioned for advanced roles in the IT industry. They can pursue careers such as Data Scientist, Cloud Solutions Architect, AI/Machine Learning Engineer, Cybersecurity Analyst/Consultant, Big Data Engineer, IoT Solutions Architect, Software Development Manager, IT Project Manager, Research Scientist, or IT Consultant. These roles often involve leading-edge technology implementation, strategic planning, research, and innovation.', 'Throughout the MScIT program, students acquire advanced technical skills and expertise in specialized areas of Information Technology. They develop proficiency in cutting-edge technologies such as Cloud Computing, Big Data Analytics, AI, and IoT. Additionally, they enhance their research, analytical, and problem-solving abilities through coursework and research projects. Communication, leadership, and project management skills are also emphasized to prepare students for leadership roles in the IT industry. Overall, MScIT graduates possess a unique blend of technical expertise, research capabilities, and managerial skills, making them valuable assets in various sectors, including technology, healthcare, finance, and government.', 'The field of Information Technology has witnessed remarkable projects and inventions, including self-driving cars revolutionizing transportation, VR and AR technologies transforming gaming and education, blockchain revolutionizing finance and supply chain management, deep learning and neural networks advancing AI capabilities, quantum computing promising exponential computational power, and IoT connecting everyday objects to the internet for data exchange. These innovations represent just a fraction of the groundbreaking work happening in IT, with endless possibilities for future advancements.'),
(4, 'Bachelor of Commerce (BCom)', 'As per Mumbai University', 240, '3 years', 68, 'c', 'https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'The syllabus for a BCom program typically includes core subjects such as Accounting, Economics, Business Law, Management, Marketing, Finance, and Business Communication. Students also have the opportunity to choose elective courses based on their interests or career goals, which may include subjects like Taxation, Auditing, International Business, Human Resource Management, Entrepreneurship, and Information Systems. Additionally, practical training through internships or projects may be part of the curriculum to provide real-world experience and enhance employability.', 'Graduates of a BCom program have a wide range of career opportunities across various industries. They can pursue roles such as Accountant, Financial Analyst, Investment Banker, Management Consultant, Marketing Executive, Human Resource Manager, Business Development Manager, Tax Consultant, Auditor, Entrepreneur, and Corporate Lawyer. The versatile skill set acquired during the program prepares students for positions in both the private and public sectors, as well as in nonprofit organizations.', 'Throughout the BCom program, students develop a diverse set of skills essential for success in the business world. They gain proficiency in financial analysis, budgeting, and financial reporting through accounting and finance courses. Economic principles and market analysis skills enable them to understand and respond to changes in the business environment. Communication, negotiation, and interpersonal skills are honed through business communication and management courses, preparing students to interact effectively with clients, colleagues, and stakeholders. Critical thinking, problem-solving, and decision-making skills are cultivated through case studies, group projects, and simulations, equipping students to analyze complex business situations and formulate strategic solutions.', 'The field of commerce is constantly evolving, with emerging trends such as digitalization, globalization, and sustainability shaping business practices. E-commerce and digital marketing have revolutionized the way companies conduct business and reach customers, creating new opportunities for entrepreneurs and businesses to expand their reach globally. Sustainable business practices, including corporate social responsibility and environmental sustainability, are becoming increasingly important considerations for businesses to maintain competitiveness and long-term viability. Moreover, advancements in technology, such as artificial intelligence and big data analytics, are transforming how businesses operate, offering insights for decision-making and enhancing efficiency and productivity. Keeping abreast of these trends and acquiring relevant skills will be crucial for future business professionals to thrive in the dynamic and competitive business landscape.'),
(5, 'Bachelor of Science', 'as per Mumbai University', 120, '3 years', 8, 's', 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'A BSc Maths program typically covers a comprehensive range of mathematical topics, including Calculus, Algebra, Differential Equations, Linear Algebra, Discrete Mathematics, Probability Theory, Statistics, and Numerical Analysis. Students may also study specialized areas such as Real Analysis, Complex Analysis, Topology, Graph Theory, Mathematical Modeling, and Cryptography. The curriculum emphasizes both theoretical foundations and practical applications of mathematics, with opportunities for independent research or projects to explore advanced topics or interdisciplinary connections.', ' Graduates of a BSc Maths program have diverse career opportunities across various sectors. They can pursue roles such as Actuary, Data Analyst, Statistician, Operations Research Analyst, Financial Analyst, Software Developer, Mathematician, Teacher, Researcher, or Consultant. Industries such as finance, insurance, healthcare, technology, government, education, and research institutions actively seek individuals with strong analytical and problem-solving skills. Additionally, advanced degrees in mathematics or related fields open up further career pathways in academia, research, or specialized industries.', 'Throughout the BSc Maths program, students develop a robust set of analytical, problem-solving, and quantitative skills. They learn to analyze complex problems, formulate mathematical models, and derive solutions using logical reasoning and mathematical techniques. Proficiency in mathematical software and programming languages enhances their ability to implement algorithms, conduct simulations, and analyze data. Communication and presentation skills are honed through explaining mathematical concepts and findings effectively to both technical and non-technical audiences. Moreover, the rigorous training in abstract thinking and logical reasoning nurtures intellectual agility and adaptability, preparing students for a wide range of career paths and lifelong learning opportunities.', 'Mathematics is the foundation of many scientific and technological advancements, playing a vital role in fields such as physics, engineering, computer science, and economics. Emerging interdisciplinary areas such as data science, machine learning, and cryptography rely heavily on mathematical principles and techniques. The growing importance of data-driven decision-making in various industries underscores the relevance of mathematical skills in today\'s digital age. Furthermore, mathematics offers insights into fundamental questions about the nature of the universe, driving research in areas like theoretical physics, cosmology, and mathematical biology. The versatility and applicability of mathematics make it an indispensable tool for solving real-world problems and advancing human knowledge and innovation.'),
(6, 'Acting and Audition Workshop', 'Open for everyone', 100, '3 months', NULL, NULL, '', 'gd', '', '', '', ''),
(7, 'Bachelor of Commerce in Accounting and Finance(BAF)', 'As per Mumbai University', 120, '3 years', 26, 'c', 'https://plus.unsplash.com/premium_photo-1679785709480-8fe39794eb06?q=80&w=1930&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'Our BAF program offers a comprehensive curriculum covering Financial Accounting, Cost Accounting, Auditing, Taxation, Business Law, Financial Management, and Economics. Students will also learn Business Communication, Information Technology in Accounting, and Environmental Studies. This rigorous syllabus is designed to equip students with the essential knowledge and skills to excel in the fields of accounting and finance.', 'Graduates of our BAF program can pursue diverse career paths such as Chartered Accountants, Financial Analysts, Auditors, and Tax Consultants. Additionally, they can explore roles in Investment Banking, Financial Planning, and Corporate Financial Advisory. Our alumni are well-placed in esteemed organizations across banking, finance, corporate sectors, government bodies, and consultancy firms.', 'Through our BAF program, students will develop strong analytical and numerical skills, critical thinking, and problem-solving capabilities. They will gain expertise in financial reporting, budgeting, auditing, and taxation. The course also enhances communication skills, ethical decision-making, and proficiency in using accounting software and financial analysis tools.', 'Our BAF program includes internships and industry projects, offering students hands-on experience and exposure to real-world financial scenarios. We provide opportunities to participate in seminars, workshops, and networking events with industry professionals. This practical approach, combined with academic excellence, prepares our students to thrive in the dynamic financial sector.\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(8, 'Bachelor of Commerce in Banking Insurance (BBI)', 'As per Mumbai Univesity', 60, '3 years', 28, 'c', 'https://plus.unsplash.com/premium_photo-1661776260388-f5d1b14ce8a2?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'Our BBI program offers a well-rounded curriculum covering subjects such as Principles of Banking, Insurance Management, Financial Accounting, Business Law, Taxation, Financial Markets, and Risk Management. Students will also delve into Economics, Business Communication, and Information Technology in Banking and Insurance. This comprehensive syllabus is designed to provide students with the knowledge and skills essential for the banking and insurance sectors.', 'Graduates of our BBI program can pursue various career opportunities including roles as Banking Officers, Insurance Analysts, Risk Managers, Financial Analysts, and Investment Bankers. They can also explore positions in Asset Management, Insurance Underwriting, and Compliance. Our alumni find employment in banking institutions, insurance companies, financial consulting firms, and corporate finance departments.', 'Students will develop a strong foundation in analytical and numerical skills, critical thinking, and risk assessment. They will gain expertise in financial analysis, banking operations, insurance management, and regulatory compliance. The program also enhances communication skills, problem-solving abilities, and proficiency in using banking and insurance software.', 'Our BBI program includes internships and industry projects, providing students with practical experience and exposure to the banking and insurance industries. We offer opportunities to attend seminars, workshops, and networking events with industry experts. This hands-on approach, combined with academic rigor, ensures that our students are well-prepared for successful careers in the dynamic fields of banking and insurance.'),
(9, 'Bachelor in Management Studies', 'As per Mumbai University', 120, '3 years', 30, 'c', 'https://images.unsplash.com/photo-1512758017271-d7b84c2113f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'Our BMS program covers a diverse range of subjects including Principles of Management, Organizational Behavior, Marketing Management, Financial Management, Business Communication, Human Resource Management, and Business Law. Students will also explore Strategic Management, Operations Management, and Entrepreneurship. This comprehensive curriculum is designed to equip students with the foundational knowledge and practical skills necessary for effective business management.\r\n\r\n', 'Graduates of our BMS program can pursue a wide array of career opportunities such as Business Analysts, Marketing Managers, Human Resource Managers, Operations Managers, and Financial Analysts. They can also explore roles in Consultancy, Entrepreneurship, and Corporate Strategy. Our alumni are well-positioned in top corporations, consulting firms, start-ups, and various other sectors.', 'Students will develop critical thinking, problem-solving, and decision-making skills. They will gain expertise in business strategy, marketing, finance, and human resources. The program also enhances leadership, communication, and teamwork abilities, along with proficiency in using business management tools and software.', 'Our BMS program includes internships and industry projects, offering students practical experience and real-world business insights. We provide opportunities to participate in seminars, workshops, and networking events with industry professionals. This hands-on approach, combined with academic rigor, ensures that our students are well-prepared for dynamic careers in business management and entrepreneurship.'),
(10, 'Bachelors in Mass Media (BAMMC)', 'As per Mumbai University', 60, '3 years', 32, 'a', 'https://images.unsplash.com/photo-1503095396549-807759245b35?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'Our BAMMC program offers an extensive curriculum covering subjects like Introduction to Journalism, Advertising, Media Research, Public Relations, Media Planning, Film Studies, and Communication Theories. Students will also study Creative Writing, Digital Media, Photography, and Media Ethics. This comprehensive syllabus is designed to equip students with a deep understanding of various media forms and their societal impacts.', 'Graduates of our BAMMC program can explore diverse career opportunities such as Journalists, Advertising Executives, Public Relations Specialists, Content Writers, Media Planners, and Digital Marketing Professionals. They can also pursue careers as Television Producers, Radio Jockeys, Film Directors, and Social Media Managers. Our alumni are successfully employed in media houses, advertising agencies, PR firms, film production companies, and digital media platforms.\r\n\r\n', 'Students will develop strong communication and storytelling skills, critical thinking, and creativity. They will gain expertise in media production, advertising strategies, journalism practices, and public relations techniques. The program also enhances research skills, digital media proficiency, and ethical decision-making, preparing students for various roles in the media industry.\r\n\r\n', 'Our BMM program includes internships and practical projects, providing students with hands-on experience and exposure to the media industry. We offer opportunities to participate in media workshops, film festivals, and networking events with industry experts. This practical approach, combined with academic rigor, ensures that our students are well-prepared to excel in the dynamic and ever-evolving field of mass media.'),
(11, 'Bachelors in Business Administration(BBA)', 'As per Mumbai University', 999, '3 years', 34, 'c', 'https://images.unsplash.com/39/lIZrwvbeRuuzqOoWJUEn_Photoaday_CSD%20%281%20of%201%29-5.jpg?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'ug', 'Our BBA program offers a comprehensive curriculum covering core subjects such as Business Economics, Organizational Behavior, Marketing Management, Financial Accounting, Operations Management, and Business Law. Students will also study Strategic Management, Entrepreneurship, Human Resource Management, and International Business. This holistic syllabus is designed to provide students with a solid foundation in business principles and practices.', 'Graduates of our BBA program have a wide range of career opportunities including roles as Business Analysts, Marketing Managers, Financial Advisors, Operations Managers, and Human Resource Specialists. They can also pursue careers in Consulting, Entrepreneurship, and Supply Chain Management. Our alumni are employed in leading corporations, consulting firms, start-ups, and multinational companies across various industries.', 'Students will develop strong analytical, problem-solving, and decision-making skills. They will gain expertise in business strategy development, market analysis, financial management, and leadership. The program also enhances communication, teamwork, and interpersonal skills, along with proficiency in using business analytics tools and technology.', 'Our BBA program emphasizes experiential learning through internships, industry projects, and case studies, providing students with practical insights into real-world business challenges. We offer opportunities for students to participate in workshops, seminars, and guest lectures conducted by industry experts. This practical exposure, combined with academic rigor, prepares our students to thrive in competitive global business environments.\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `all_pdf_id` int(11) NOT NULL,
  `all_pdf_title` varchar(1000) NOT NULL,
  `all_pdf_pdf_link` varchar(2000) NOT NULL,
  `all_pdf_upload_date` date NOT NULL,
  `reports_should_it_be_visible` varchar(1) NOT NULL,
  `reports_type` varchar(4) NOT NULL,
  `reports_academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports_belong_to_aqar_criteria`
--

CREATE TABLE `reports_belong_to_aqar_criteria` (
  `report_id` int(11) NOT NULL,
  `aqar_criteria_number` int(2) NOT NULL,
  `aqar_sub_criteria` varchar(10) NOT NULL,
  `avishkar_participants_number` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_activities`
--

CREATE TABLE `research_activities` (
  `rsa_id` int(11) NOT NULL,
  `rsa_name` varchar(100) NOT NULL,
  `rsa_number` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_books_authored`
--

CREATE TABLE `research_books_authored` (
  `rs_book_id` int(11) NOT NULL,
  `rs_book_author` varchar(100) NOT NULL,
  `rs_book_title` varchar(255) NOT NULL,
  `rs_book_description` varchar(1000) NOT NULL,
  `rs_book_year_of_publication` varchar(4) NOT NULL,
  `rs_book_page_numbers` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_books_coauthors`
--

CREATE TABLE `research_books_coauthors` (
  `rs_book_id` int(11) NOT NULL,
  `rs_book_co_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_books_publishers`
--

CREATE TABLE `research_books_publishers` (
  `rs_book_id` int(11) NOT NULL,
  `rs_book_publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_consultancy`
--

CREATE TABLE `research_consultancy` (
  `rsc_id` int(11) NOT NULL,
  `rsc_given` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_projects`
--

CREATE TABLE `research_projects` (
  `rsp_id` int(11) NOT NULL,
  `rsp_name` varchar(100) NOT NULL,
  `rsa_amount_spent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `scholarship_id` int(11) NOT NULL,
  `scholarship_name` varchar(255) NOT NULL,
  `scholarship_type` varchar(2) NOT NULL,
  `scholarship_eligibility` varchar(100) NOT NULL,
  `scholarship_students_awarded` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_belongs_to_programmes_for_class`
--

CREATE TABLE `syllabus_belongs_to_programmes_for_class` (
  `other_pdf_id` int(11) NOT NULL,
  `prog_id` int(11) NOT NULL,
  `class_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syllabus_belongs_to_programmes_for_class`
--

INSERT INTO `syllabus_belongs_to_programmes_for_class` (`other_pdf_id`, `prog_id`, `class_name`) VALUES
(1, 1, 'FY NEP'),
(2, 1, 'SY NEP'),
(3, 1, 'TY NEP'),
(4, 1, 'FY'),
(5, 1, 'SY'),
(6, 1, 'TY'),
(7, 1, 'Part-1'),
(8, 1, 'Part-2');

-- --------------------------------------------------------

--
-- Table structure for table `tenure`
--

CREATE TABLE `tenure` (
  `tenure_id` int(11) NOT NULL,
  `tenure_start_date` date NOT NULL,
  `tenure_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tenure`
--

INSERT INTO `tenure` (`tenure_id`, `tenure_start_date`, `tenure_end_date`) VALUES
(5, '1984-06-20', '2003-04-30'),
(6, '2003-05-06', '2009-10-05'),
(7, '2010-02-02', '2021-10-31'),
(24, '1984-06-20', '2000-07-31'),
(25, '2000-08-01', '2003-05-05'),
(26, '2003-05-06', '2006-05-05'),
(27, '2006-05-06', '2009-05-05'),
(28, '2009-05-06', '2012-05-05'),
(29, '2012-05-20', '2015-05-19'),
(30, '2015-06-22', '2018-06-21'),
(31, '2018-06-22', '2020-03-31'),
(32, '2020-04-01', '2021-10-30'),
(33, '2021-11-01', NULL),
(34, '1997-09-02', '2004-08-31'),
(35, '2004-09-01', '2011-09-30'),
(36, '2011-10-01', '2012-06-30'),
(37, '2012-08-01', '2022-04-30'),
(38, '2022-05-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`academic_year`);

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`achievement_id`),
  ADD KEY `FK_ACHIEVEMENT_TYPE` (`achievement_type`),
  ADD KEY `FK_ACHIEVEMENT_DEPT_ID` (`achievement_dept_id`),
  ADD KEY `FK_ACHIEVEMENT_COMMITTEE_ID` (`achievement_committee_id`);

--
-- Indexes for table `achievement_types`
--
ALTER TABLE `achievement_types`
  ADD PRIMARY KEY (`achievement_type`);

--
-- Indexes for table `aqar_criteria`
--
ALTER TABLE `aqar_criteria`
  ADD PRIMARY KEY (`aqar_criteria_number`);

--
-- Indexes for table `avishkar_categories`
--
ALTER TABLE `avishkar_categories`
  ADD PRIMARY KEY (`avishkar_cat_id`);

--
-- Indexes for table `avishkar_participation_in_academic_year`
--
ALTER TABLE `avishkar_participation_in_academic_year`
  ADD KEY `FK_AVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_AVISHKAR_CAT_ID` (`avishkar_cat_id`),
  ADD KEY `FK_DAVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_name`);

--
-- Indexes for table `clg_events`
--
ALTER TABLE `clg_events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `FK_EVENT_DEPT_ID` (`event_dept_id`),
  ADD KEY `FK_EVENT_COMMITTEE_ID` (`event_committee_id`);

--
-- Indexes for table `college_personnel`
--
ALTER TABLE `college_personnel`
  ADD PRIMARY KEY (`cp_id`),
  ADD KEY `FK_CP_HONOURIFIC` (`cp_honourific`),
  ADD KEY `FK_CP_DEPARTMENT_SECTION` (`cp_department_section`);

--
-- Indexes for table `college_sections`
--
ALTER TABLE `college_sections`
  ADD PRIMARY KEY (`college_sec_name`);

--
-- Indexes for table `college_users`
--
ALTER TABLE `college_users`
  ADD PRIMARY KEY (`college_user_id`);

--
-- Indexes for table `committee_and_activity_groups`
--
ALTER TABLE `committee_and_activity_groups`
  ADD PRIMARY KEY (`committee_id`);

--
-- Indexes for table `committee_belongs_to_clg_section`
--
ALTER TABLE `committee_belongs_to_clg_section`
  ADD PRIMARY KEY (`committee_clg_section_id`),
  ADD KEY `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_DEPT_ID` (`committee_id`),
  ADD KEY `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_CLG_SECTION` (`college_sec_name`);

--
-- Indexes for table `cp_designation`
--
ALTER TABLE `cp_designation`
  ADD KEY `FK_CP_DESIGNATION_ID` (`cp_id`);

--
-- Indexes for table `cp_has_tenure`
--
ALTER TABLE `cp_has_tenure`
  ADD KEY `FK_CP_HAS_TENURE_CP_ID` (`cp_id`),
  ADD KEY `FK_CP_HAS_TENURE_TENURE_ID` (`tenure_id`);

--
-- Indexes for table `cp_is_part_of_committee`
--
ALTER TABLE `cp_is_part_of_committee`
  ADD KEY `FK_CP_IS_PART_OF_COMMITTEE_CP_ID` (`cp_id`),
  ADD KEY `FK_CP_IS_PART_OF_COMMITTEE_COMMITTEE_ID` (`committee_sec_id`);

--
-- Indexes for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  ADD PRIMARY KEY (`dept_act_id`);

--
-- Indexes for table `departmental_activities_in_academic_year`
--
ALTER TABLE `departmental_activities_in_academic_year`
  ADD KEY `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_DEPT_ACT_ID` (`dept_act_id`),
  ADD KEY `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `dept_belongs_to_clg_section`
--
ALTER TABLE `dept_belongs_to_clg_section`
  ADD PRIMARY KEY (`dept_sect_id`),
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_ID` (`dept_id`),
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_CLG_SECTION` (`college_sec_name`),
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_FACULTY_NAME` (`dept_faculty_name`);

--
-- Indexes for table `dept_has_dept_activities`
--
ALTER TABLE `dept_has_dept_activities`
  ADD KEY `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ID` (`dept_sect_id`),
  ADD KEY `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ACT_ID` (`dept_act_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_sec_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `honourific`
--
ALTER TABLE `honourific`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`all_pdf_id`);

--
-- Indexes for table `notices_are_for_clg_section_in_academic_year`
--
ALTER TABLE `notices_are_for_clg_section_in_academic_year`
  ADD KEY `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_NOTICE_ID` (`notice_id`),
  ADD KEY `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` (`college_sec_name`),
  ADD KEY `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `other_pdfs`
--
ALTER TABLE `other_pdfs`
  ADD PRIMARY KEY (`all_pdf_id`),
  ADD KEY `FK_OTHER_PDFS_TYPE_NAME` (`other_pdfs_type_name`);

--
-- Indexes for table `other_pdf_belongs_to_programme`
--
ALTER TABLE `other_pdf_belongs_to_programme`
  ADD KEY `FK_OTHER_PDF_BELONGS_TO_PROGRAMME_OTHER_PDF_ID` (`other_pdf_id`),
  ADD KEY `FK_SOTHER_PDF_BELONGS_TO_PROGRAMME_PROG_ID` (`prog_id`);

--
-- Indexes for table `other_pdf_is_for_clg_section_in_academic_year`
--
ALTER TABLE `other_pdf_is_for_clg_section_in_academic_year`
  ADD KEY `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_NOTICE_ID` (`other_pdf_id`),
  ADD KEY `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` (`college_sec_name`),
  ADD KEY `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `other_pdf_types`
--
ALTER TABLE `other_pdf_types`
  ADD PRIMARY KEY (`other_pdf_type_name`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`patent_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `photos_are_for_committees_in_academic_year`
--
ALTER TABLE `photos_are_for_committees_in_academic_year`
  ADD KEY `FK_COMMITTEE_ID` (`committee_id`),
  ADD KEY `FK_PHOTO_ID` (`photo_id`),
  ADD KEY `FK_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `photos_for_achievements_in_academic_year`
--
ALTER TABLE `photos_for_achievements_in_academic_year`
  ADD KEY `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR` (`achievement_id`),
  ADD KEY `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_PHOTO_ID` (`photo_id`),
  ADD KEY `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `photos_for_events_in_academic_year`
--
ALTER TABLE `photos_for_events_in_academic_year`
  ADD KEY `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR` (`event_id`),
  ADD KEY `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_PHOTO_ID` (`photo_id`),
  ADD KEY `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`);

--
-- Indexes for table `photos_of_faculty_academic_year`
--
ALTER TABLE `photos_of_faculty_academic_year`
  ADD KEY `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_COLLEGE_SEC_NAME` (`college_sec_name`),
  ADD KEY `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_PHOTO_ID` (`photo_id`),
  ADD KEY `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_ACADEMIC_YEAR` (`academic_year`),
  ADD KEY `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_FACULTY_SEC_NAME` (`faculty_sec_name`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`prog_id`),
  ADD KEY `FK_PROG_DEPT_ID` (`prog_dept_sec_id`),
  ADD KEY `FK_PROG_FACULTY_NAME` (`faculty_sec_name`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`all_pdf_id`),
  ADD KEY `FK_REPORTS_ACADEMIC_YEAR` (`reports_academic_year`);

--
-- Indexes for table `reports_belong_to_aqar_criteria`
--
ALTER TABLE `reports_belong_to_aqar_criteria`
  ADD KEY `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_REPORT_ID` (`report_id`),
  ADD KEY `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_AQAR_CRITERIA` (`aqar_criteria_number`);

--
-- Indexes for table `research_activities`
--
ALTER TABLE `research_activities`
  ADD PRIMARY KEY (`rsa_id`);

--
-- Indexes for table `research_books_authored`
--
ALTER TABLE `research_books_authored`
  ADD PRIMARY KEY (`rs_book_id`);

--
-- Indexes for table `research_books_coauthors`
--
ALTER TABLE `research_books_coauthors`
  ADD KEY `FK_COAUTHORS_RS_BOOK_ID` (`rs_book_id`);

--
-- Indexes for table `research_books_publishers`
--
ALTER TABLE `research_books_publishers`
  ADD KEY `FK_PUBLISHERS_RS_BOOK_ID` (`rs_book_id`);

--
-- Indexes for table `research_consultancy`
--
ALTER TABLE `research_consultancy`
  ADD PRIMARY KEY (`rsc_id`);

--
-- Indexes for table `research_projects`
--
ALTER TABLE `research_projects`
  ADD PRIMARY KEY (`rsp_id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`scholarship_id`);

--
-- Indexes for table `syllabus_belongs_to_programmes_for_class`
--
ALTER TABLE `syllabus_belongs_to_programmes_for_class`
  ADD KEY `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PDF_ID` (`other_pdf_id`),
  ADD KEY `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PROG_ID` (`prog_id`),
  ADD KEY `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_CLASS_NAME` (`class_name`);

--
-- Indexes for table `tenure`
--
ALTER TABLE `tenure`
  ADD PRIMARY KEY (`tenure_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `aqar_criteria`
--
ALTER TABLE `aqar_criteria`
  MODIFY `aqar_criteria_number` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `avishkar_categories`
--
ALTER TABLE `avishkar_categories`
  MODIFY `avishkar_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clg_events`
--
ALTER TABLE `clg_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_personnel`
--
ALTER TABLE `college_personnel`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;

--
-- AUTO_INCREMENT for table `college_users`
--
ALTER TABLE `college_users`
  MODIFY `college_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committee_and_activity_groups`
--
ALTER TABLE `committee_and_activity_groups`
  MODIFY `committee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `committee_belongs_to_clg_section`
--
ALTER TABLE `committee_belongs_to_clg_section`
  MODIFY `committee_clg_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  MODIFY `dept_act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `dept_belongs_to_clg_section`
--
ALTER TABLE `dept_belongs_to_clg_section`
  MODIFY `dept_sect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `all_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `other_pdfs`
--
ALTER TABLE `other_pdfs`
  MODIFY `all_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `patent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `all_pdf_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_activities`
--
ALTER TABLE `research_activities`
  MODIFY `rsa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_books_authored`
--
ALTER TABLE `research_books_authored`
  MODIFY `rs_book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_consultancy`
--
ALTER TABLE `research_consultancy`
  MODIFY `rsc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `research_projects`
--
ALTER TABLE `research_projects`
  MODIFY `rsp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `scholarship_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenure`
--
ALTER TABLE `tenure`
  MODIFY `tenure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `achievements`
--
ALTER TABLE `achievements`
  ADD CONSTRAINT `FK_ACHIEVEMENT_COMMITTEE_ID` FOREIGN KEY (`achievement_committee_id`) REFERENCES `committee_and_activity_groups` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ACHIEVEMENT_DEPT_ID` FOREIGN KEY (`achievement_dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ACHIEVEMENT_TYPE` FOREIGN KEY (`achievement_type`) REFERENCES `achievement_types` (`achievement_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `avishkar_participation_in_academic_year`
--
ALTER TABLE `avishkar_participation_in_academic_year`
  ADD CONSTRAINT `FK_AVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_AVISHKAR_CAT_ID` FOREIGN KEY (`avishkar_cat_id`) REFERENCES `avishkar_categories` (`avishkar_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DAVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clg_events`
--
ALTER TABLE `clg_events`
  ADD CONSTRAINT `FK_EVENT_COMMITTEE_ID` FOREIGN KEY (`event_committee_id`) REFERENCES `committee_and_activity_groups` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_EVENT_DEPT_ID` FOREIGN KEY (`event_dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `college_personnel`
--
ALTER TABLE `college_personnel`
  ADD CONSTRAINT `FK_CP_DEPARTMENT_SECTION` FOREIGN KEY (`cp_department_section`) REFERENCES `dept_belongs_to_clg_section` (`dept_sect_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CP_HONOURIFIC` FOREIGN KEY (`cp_honourific`) REFERENCES `honourific` (`title`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `committee_belongs_to_clg_section`
--
ALTER TABLE `committee_belongs_to_clg_section`
  ADD CONSTRAINT `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_CLG_SECTION` FOREIGN KEY (`college_sec_name`) REFERENCES `college_sections` (`college_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_DEPT_ID` FOREIGN KEY (`committee_id`) REFERENCES `committee_and_activity_groups` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_designation`
--
ALTER TABLE `cp_designation`
  ADD CONSTRAINT `FK_CP_DESIGNATION_ID` FOREIGN KEY (`cp_id`) REFERENCES `college_personnel` (`cp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_has_tenure`
--
ALTER TABLE `cp_has_tenure`
  ADD CONSTRAINT `FK_CP_HAS_TENURE_CP_ID` FOREIGN KEY (`cp_id`) REFERENCES `college_personnel` (`cp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CP_HAS_TENURE_TENURE_ID` FOREIGN KEY (`tenure_id`) REFERENCES `tenure` (`tenure_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cp_is_part_of_committee`
--
ALTER TABLE `cp_is_part_of_committee`
  ADD CONSTRAINT `FK_CP_IS_PART_OF_COMMITTEE_COMMITTEE_SEC_ID` FOREIGN KEY (`committee_sec_id`) REFERENCES `committee_belongs_to_clg_section` (`committee_clg_section_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CP_IS_PART_OF_COMMITTEE_CP_ID` FOREIGN KEY (`cp_id`) REFERENCES `college_personnel` (`cp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `departmental_activities_in_academic_year`
--
ALTER TABLE `departmental_activities_in_academic_year`
  ADD CONSTRAINT `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_DEPT_ACT_ID` FOREIGN KEY (`dept_act_id`) REFERENCES `departmental_activities` (`dept_act_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dept_belongs_to_clg_section`
--
ALTER TABLE `dept_belongs_to_clg_section`
  ADD CONSTRAINT `FK_DEPT_BELONGS_TO_CLG_SECTION_CLG_SECTION` FOREIGN KEY (`college_sec_name`) REFERENCES `college_sections` (`college_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_FACULTY_NAME` FOREIGN KEY (`dept_faculty_name`) REFERENCES `faculty` (`faculty_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_ID` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dept_has_dept_activities`
--
ALTER TABLE `dept_has_dept_activities`
  ADD CONSTRAINT `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ACT_ID` FOREIGN KEY (`dept_act_id`) REFERENCES `departmental_activities` (`dept_act_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ID` FOREIGN KEY (`dept_sect_id`) REFERENCES `dept_belongs_to_clg_section` (`dept_sect_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notices_are_for_clg_section_in_academic_year`
--
ALTER TABLE `notices_are_for_clg_section_in_academic_year`
  ADD CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` FOREIGN KEY (`college_sec_name`) REFERENCES `college_sections` (`college_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_NOTICE_ID` FOREIGN KEY (`notice_id`) REFERENCES `notices` (`all_pdf_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_pdfs`
--
ALTER TABLE `other_pdfs`
  ADD CONSTRAINT `FK_OTHER_PDFS_TYPE_NAME` FOREIGN KEY (`other_pdfs_type_name`) REFERENCES `other_pdf_types` (`other_pdf_type_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_pdf_belongs_to_programme`
--
ALTER TABLE `other_pdf_belongs_to_programme`
  ADD CONSTRAINT `FK_OTHER_PDF_BELONGS_TO_PROGRAMME_OTHER_PDF_ID` FOREIGN KEY (`other_pdf_id`) REFERENCES `other_pdfs` (`all_pdf_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SOTHER_PDF_BELONGS_TO_PROGRAMME_PROG_ID` FOREIGN KEY (`prog_id`) REFERENCES `programmes` (`prog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `other_pdf_is_for_clg_section_in_academic_year`
--
ALTER TABLE `other_pdf_is_for_clg_section_in_academic_year`
  ADD CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` FOREIGN KEY (`college_sec_name`) REFERENCES `college_sections` (`college_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_NOTICE_ID` FOREIGN KEY (`other_pdf_id`) REFERENCES `other_pdfs` (`all_pdf_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos_are_for_committees_in_academic_year`
--
ALTER TABLE `photos_are_for_committees_in_academic_year`
  ADD CONSTRAINT `FK_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_COMMITTEE_ID` FOREIGN KEY (`committee_id`) REFERENCES `committee_and_activity_groups` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTO_ID` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos_for_achievements_in_academic_year`
--
ALTER TABLE `photos_for_achievements_in_academic_year`
  ADD CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR` FOREIGN KEY (`achievement_id`) REFERENCES `achievements` (`achievement_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos_for_events_in_academic_year`
--
ALTER TABLE `photos_for_events_in_academic_year`
  ADD CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR` FOREIGN KEY (`event_id`) REFERENCES `clg_events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `photos_of_faculty_academic_year`
--
ALTER TABLE `photos_of_faculty_academic_year`
  ADD CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY (`academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_COLLEGE_SEC_NAME` FOREIGN KEY (`college_sec_name`) REFERENCES `college_sections` (`college_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_FACULTY_SEC_NAME` FOREIGN KEY (`faculty_sec_name`) REFERENCES `faculty` (`faculty_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`photo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_REPORTS_ACADEMIC_YEAR` FOREIGN KEY (`reports_academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
