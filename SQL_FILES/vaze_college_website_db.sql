-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2024 at 01:34 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `achievement_types`
--

CREATE TABLE `achievement_types` (
  `achievement_type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aqar_criteria`
--

CREATE TABLE `aqar_criteria` (
  `aqar_criteria_number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `avishkar_categories`
--

CREATE TABLE `avishkar_categories` (
  `avishkar_cat_id` int(11) NOT NULL,
  `avishkar_cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `cp_dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `college_sections`
--

CREATE TABLE `college_sections` (
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `committee_and_activity_groups`
--

CREATE TABLE `committee_and_activity_groups` (
  `committee_id` int(11) NOT NULL,
  `committtee_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committee_belongs_to_clg_section`
--

CREATE TABLE `committee_belongs_to_clg_section` (
  `committee_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `departmental_activities_in_academic_year`
--

CREATE TABLE `departmental_activities_in_academic_year` (
  `dept_act_id` int(11) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dept_belongs_to_clg_section`
--

CREATE TABLE `dept_belongs_to_clg_section` (
  `dept_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dept_has_dept_activities`
--

CREATE TABLE `dept_has_dept_activities` (
  `dept_id` int(11) NOT NULL,
  `dept_act_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_sec_name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `notice_type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices_are_for_clg_section_in_academic_year`
--

CREATE TABLE `notices_are_for_clg_section_in_academic_year` (
  `notice_id` int(11) NOT NULL,
  `college_sec_name` varchar(2) NOT NULL,
  `academic_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `prog_dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD KEY `FK_CP_DEPARTMENT` (`cp_dept_id`);

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
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_ID` (`dept_id`),
  ADD KEY `FK_DEPT_BELONGS_TO_CLG_SECTION_CLG_SECTION` (`college_sec_name`);

--
-- Indexes for table `dept_has_dept_activities`
--
ALTER TABLE `dept_has_dept_activities`
  ADD KEY `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ID` (`dept_id`),
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
  ADD KEY `FK_PROG_DEPT_ID` (`prog_dept_id`);

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
  MODIFY `achievement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aqar_criteria`
--
ALTER TABLE `aqar_criteria`
  MODIFY `aqar_criteria_number` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `avishkar_categories`
--
ALTER TABLE `avishkar_categories`
  MODIFY `avishkar_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clg_events`
--
ALTER TABLE `clg_events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_personnel`
--
ALTER TABLE `college_personnel`
  MODIFY `cp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_users`
--
ALTER TABLE `college_users`
  MODIFY `college_user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committee_and_activity_groups`
--
ALTER TABLE `committee_and_activity_groups`
  MODIFY `committee_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departmental_activities`
--
ALTER TABLE `departmental_activities`
  MODIFY `dept_act_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_pdfs`
--
ALTER TABLE `other_pdfs`
  MODIFY `all_pdf_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `FK_CP_DEPARTMENT` FOREIGN KEY (`cp_dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ID` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_PROG_DEPT_ID` FOREIGN KEY (`prog_dept_id`) REFERENCES `departments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
