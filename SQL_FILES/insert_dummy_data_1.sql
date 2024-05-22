-- date: 17th May,2024

INSERT INTO `academic_years` (`academic_year`) VALUES ('2024-2025'), ('2023-2024'), ('2022-2023'), ('2021-2022'), ('2020-2021'), ('2019-2020'), ('2018-2019');

INSERT INTO `achievement_types` (`achievement_type`) VALUES ('a'), ('r'), ('s'), ('arl');

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES (NULL, 'Information Technology'), (NULL, 'BioTechnology'), (NULL, 'English'), (NULL, 'Research'), (NULL, 'Economics'), (NULL, 'Hindi'), (NULL, 'History'), (NULL, 'Marathi'), (NULL, 'Psychology'), (NULL, 'Political Science'), (NULL, 'Sociology'), (NULL, 'Accounting and Finance'), (NULL, 'Banking Insurance'), (NULL, 'Management Studies'), (NULL, 'Mass Media'), (NULL, 'Business Administration'), (NULL, 'Physics'), (NULL, 'Chemistry'), (NULL, 'Mathematics'), (NULL, 'Biology'), (NULL, 'Zoology'), (NULL, 'Accountancy'), (NULL, 'Business Law'), (NULL, 'Business Economics'), (NULL, 'EVS'), (NULL, 'Commerce');


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
(19, 'Support Staff Planning and Co-ordination'),
(20, 'Web-Designing and Uploading'),
(21, 'Women Development Cell'),
(22, 'Dimensions'),
(23, 'Green Initiative/ Hiker\'s Club/Environment Club/ Nature Club'),
(24, 'Literary Association and Mayur'),
(25, 'Sanskruti'),
(26, 'Science Association'),
(27, 'Counselling Cell'),
(28, 'Gymkhana'),
(29, 'Steering'),
(30, 'Discipline'),
(31, 'Examination and Results'),
(32, 'G.D. Kelkar Skill and Finishing School'),
(33, 'Career Guidance,Training and Placement Cell'),
(34, 'Library'),
(35, 'Vaze Sanskruti'),
(36, 'Student Support, Welfare and Remedial Coaching'),
(37, 'Development Programs'),
(38, 'Anti-Ragging'),
(39, 'Film and Photography Club'),
(40, 'Prize Distribution, Degree Distribution and G.D. Kelkar-R.A.Kulkarni Memorial Lecture Series'),
(41, 'Internal Quality Assessment and Control'),
(42, 'Support to Administration'),
(43, 'Swayam Shreyas and Life Long Learning');



INSERT INTO `achievements` (`achievement_id`, `achievement_name`, `achievement_prize`, `achievement_description`, `achievement_achiever_names`, `achievement_date`, `achievement_event`, `achievement_event_location`, `achievement_achieved_by_type`, `achievement_type`, `achievement_dept_id`, `achievement_committee_id`) VALUES
(1, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 15th-17th Feb. 2007 held at RTM University, Nagpur', 'Dr. S. A. Singh', '15th-17th February 2007', 'Interuniversity Research Festival AVISHKAR', 'RTM University, Nagpur', 'f', 'arl', NULL, NULL),
(2, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. V. Menon won Gold medal in Interuniversity Research Festival AVISHKAR, Jan. 2010 held at Solapur.', 'Dr. V. Menon', 'January 2010', 'Interuniversity Research Festival AVISHKAR', 'Solapur', 'f', 'arl', NULL, NULL);
