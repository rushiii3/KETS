-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2024 at 11:52 AM
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
-- Database: `test`
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
  `cp_department_section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `college_personnel`
--

INSERT INTO `college_personnel` (`cp_id`, `cp_name`, `cp_personal_website_link`, `cp_image_path`, `cp_honourific`, `cp_department_section`) VALUES
(61, 'Pournima P. Bhangale', 'https://sites.google.com/view/pournimabhangale/home', NULL, 'Mrs.', 1),
(62, 'Vandana Kadam\r\n', 'https://sites.google.com/view/vandana-kadam/home', NULL, 'Mrs.', 1),
(63, 'Dinesh Kumar', 'https://sites.google.com/view/dineshnair/home', NULL, 'Dr.', 4),
(64, 'Vineeta Radhakrishnan', NULL, NULL, 'Ms.', 4),
(65, 'Shrishankar Jadhav', NULL, NULL, 'Mr.', 3),
(66, 'Himmat C.Patil', NULL, NULL, 'Mr.', 3),
(67, 'S.S.Sanap', NULL, NULL, 'Mr.', 3),
(68, 'Chetan V. Mohandule', NULL, NULL, 'Mr.', 3),
(69, 'Ramesh H.Patil', NULL, NULL, 'Mr.', 3),
(70, 'Shubhada Brahme', NULL, NULL, 'Ms.', 3);

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
  `committtee_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee_and_activity_groups`
--

INSERT INTO `committee_and_activity_groups` (`committee_id`, `committtee_name`) VALUES
(1, 'Unfair Means'),
(2, 'Internal Complaints'),
(3, 'National Service Scheme'),
(4, 'Special Cell'),
(5, 'Student Council'),
(6, 'Academic Calendar and Prospectus'),
(7, 'Alumni Association'),
(8, 'Attendance including I-Card'),
(9, 'Staff Common Room and Canteen'),
(10, 'Digital Content Development and ICT Enabling'),
(11, 'Feedback'),
(12, 'Human Resource Development'),
(13, 'Internal Finance'),
(14, 'Institutional Social Responsibility'),
(15, 'Maintenance'),
(16, 'Purchase'),
(17, 'Research Promotion'),
(18, 'Support Staff Planning and Co-ordination'),
(19, 'Web-Designing and Uploading'),
(20, 'Women Development Cell'),
(21, 'Dimensions'),
(22, 'Green Initiative/ Hiker\'s Club/Environment Club/ Nature Club'),
(23, 'Literary Association and Mayur'),
(24, 'Sanskruti'),
(25, 'Science Association'),
(26, 'Counselling Cell'),
(27, 'Gymkhana'),
(28, 'Steering'),
(29, 'Discipline'),
(30, 'Examination and Results'),
(31, 'G.D. Kelkar Skill and Finishing School'),
(32, 'Career Guidance,Training and Placement Cell'),
(33, 'Library'),
(34, 'Student Support, Welfare and Remedial Coaching'),
(35, 'Development Programs'),
(36, 'Anti-Ragging'),
(37, 'Film and Photography Club'),
(38, 'Prize Distribution, Degree Distribution and G.D. Kelkar-R.A.Kulkarni Memorial Lecture Series'),
(39, 'Internal Quality Assessment and Control'),
(40, 'Support to Administration'),
(41, 'Swayam Shreyas and Life Long Learning'),
(42, 'College Executive Committee'),
(43, 'College Administration'),
(44, 'College Development Committee'),
(45, 'School Committee');

-- --------------------------------------------------------

--
-- Table structure for table `committee_belongs_to_clg_section`
--

CREATE TABLE `committee_belongs_to_clg_section` (
  `committee_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `committee_belongs_to_clg_section`
--

INSERT INTO `committee_belongs_to_clg_section` (`committee_id`, `college_sec_name`) VALUES
(6, 'd'),
(6, 'j'),
(7, 'd'),
(7, 'j'),
(36, 'j'),
(36, 'd'),
(8, 'd'),
(8, 'j'),
(32, 'd'),
(43, 'm'),
(44, 'm'),
(42, 'm'),
(26, 'd'),
(26, 'j'),
(35, 'd'),
(10, 'd'),
(10, 'j'),
(21, 'd'),
(21, 'j'),
(29, 'd'),
(29, 'j'),
(29, 'd'),
(29, 'j'),
(11, 'd'),
(36, 'd'),
(37, 'j'),
(31, 'd'),
(31, 'j'),
(22, 'd'),
(22, 'j'),
(27, 'd'),
(27, 'j'),
(12, 'd'),
(14, 'd'),
(14, 'j'),
(2, 'd'),
(13, 'd'),
(39, 'd'),
(32, 'd'),
(32, 'j'),
(23, 'd'),
(23, 'j'),
(15, 'd'),
(3, 'd'),
(3, 'j'),
(38, 'd'),
(38, 'j'),
(16, 'd'),
(17, 'd'),
(17, 'd'),
(24, 'd'),
(24, 'j'),
(34, 'd'),
(44, 'm'),
(25, 'd'),
(25, 'j'),
(4, 'd'),
(4, 'j'),
(9, 'd'),
(9, 'j'),
(28, 'd'),
(5, 'd'),
(5, 'j'),
(18, 'd'),
(40, 'd'),
(41, 'd'),
(1, 'd'),
(19, 'd'),
(20, 'd'),
(20, 'j');

-- --------------------------------------------------------

--
-- Table structure for table `cp_designation`
--

CREATE TABLE `cp_designation` (
  `cp_id` int(11) NOT NULL,
  `cp_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_has_tenure`
--

CREATE TABLE `cp_has_tenure` (
  `cp_id` int(11) NOT NULL,
  `tenure_id` int(11) NOT NULL,
  `role` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_is_part_of_committee`
--

CREATE TABLE `cp_is_part_of_committee` (
  `cp_id` int(11) NOT NULL,
  `committee_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
(1, 'Information Technology'),
(2, 'Biotechnology'),
(3, 'English'),
(4, 'Research'),
(5, 'Economics'),
(6, 'Hindi'),
(7, 'History'),
(8, 'Marathi'),
(9, 'Psychology'),
(10, 'Political Science'),
(11, 'Sociology'),
(12, 'Accounting and Finance'),
(13, 'Banking Insurance'),
(14, 'Management Studies'),
(15, 'Mass Media'),
(16, 'Business Administration'),
(17, 'Physics'),
(18, 'Chemistry'),
(19, 'Mathematics'),
(20, 'Zoology'),
(21, 'Accountancy'),
(22, 'Business Law'),
(23, 'Business Economics'),
(24, 'EVS'),
(25, 'Commerce'),
(26, 'Botany');

-- --------------------------------------------------------

--
-- Table structure for table `dept_belongs_to_clg_section`
--

CREATE TABLE `dept_belongs_to_clg_section` (
  `dept_sect_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dept_belongs_to_clg_section`
--

INSERT INTO `dept_belongs_to_clg_section` (`dept_sect_id`, `dept_id`, `college_sec_name`) VALUES
(1, 1, 's'),
(2, 2, 's'),
(3, 3, 'j'),
(4, 3, 'd'),
(5, 6, 'd'),
(6, 6, 'j');

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
  `prog_overview` varchar(4000) NOT NULL,
  `prog_eligibility` varchar(500) NOT NULL,
  `prog_intake_capacity` int(3) NOT NULL,
  `prog_duration` varchar(50) NOT NULL,
  `prog_type` varchar(3) NOT NULL,
  `prog_dept_id` int(11) NOT NULL,
  `faculty_sec_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`prog_id`, `prog_name`, `prog_overview`, `prog_eligibility`, `prog_intake_capacity`, `prog_duration`, `prog_type`, `prog_dept_id`, `faculty_sec_name`) VALUES
(1, 'BSCIT', 'BSc IT full form is Bachelor of Science in IT. BSc in IT is related to storage, processing, securing, and managing information. This course primarily focuses on subjects such as databases, software and networking.', '1.Candidates must have passed their 10+2 level of education from a recognised educational Board.\n2.They must have Physics, Chemistry, and Mathematics as the main subjects, and score a minimum of 50% marks.', 60, '3 years', 'UG', 1, 's');

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
  ADD KEY `FK_CP_IS_PART_OF_COMMITTEE_COMMITTEE_ID` (`committee_id`);

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
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_CLG_SECTION` (`college_sec_name`);

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
  ADD KEY `FK_PROG_DEPT_ID` (`prog_dept_id`),
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
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `college_users`
--
ALTER TABLE `college_users`
  MODIFY `college_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committee_and_activity_groups`
--
ALTER TABLE `committee_and_activity_groups`
  MODIFY `committee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  MODIFY `dept_act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dept_belongs_to_clg_section`
--
ALTER TABLE `dept_belongs_to_clg_section`
  MODIFY `dept_sect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `tenure_id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_CP_IS_PART_OF_COMMITTEE_COMMITTEE_ID` FOREIGN KEY (`committee_id`) REFERENCES `committee_and_activity_groups` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
-- Constraints for table `programmes`
--
ALTER TABLE `programmes`
  ADD CONSTRAINT `FK_PROG_DEPT_ID` FOREIGN KEY (`prog_dept_id`) REFERENCES `dept_belongs_to_clg_section` (`dept_sect_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PROG_FACULTY_NAME` FOREIGN KEY (`faculty_sec_name`) REFERENCES `faculty` (`faculty_sec_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_REPORTS_ACADEMIC_YEAR` FOREIGN KEY (`reports_academic_year`) REFERENCES `academic_years` (`academic_year`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports_belong_to_aqar_criteria`
--
ALTER TABLE `reports_belong_to_aqar_criteria`
  ADD CONSTRAINT `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_AQAR_CRITERIA` FOREIGN KEY (`aqar_criteria_number`) REFERENCES `aqar_criteria` (`aqar_criteria_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_REPORT_ID` FOREIGN KEY (`report_id`) REFERENCES `reports` (`all_pdf_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `research_books_coauthors`
--
ALTER TABLE `research_books_coauthors`
  ADD CONSTRAINT `FK_COAUTHORS_RS_BOOK_ID` FOREIGN KEY (`rs_book_id`) REFERENCES `research_books_authored` (`rs_book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `research_books_publishers`
--
ALTER TABLE `research_books_publishers`
  ADD CONSTRAINT `FK_PUBLISHERS_RS_BOOK_ID` FOREIGN KEY (`rs_book_id`) REFERENCES `research_books_authored` (`rs_book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `syllabus_belongs_to_programmes_for_class`
--
ALTER TABLE `syllabus_belongs_to_programmes_for_class`
  ADD CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_CLASS_NAME` FOREIGN KEY (`class_name`) REFERENCES `class` (`class_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PDF_ID` FOREIGN KEY (`other_pdf_id`) REFERENCES `other_pdfs` (`all_pdf_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PROG_ID` FOREIGN KEY (`prog_id`) REFERENCES `programmes` (`prog_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

