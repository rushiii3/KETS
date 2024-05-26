-- date: 17th May,2024

-- academic years
INSERT INTO `academic_years` (`academic_year`) VALUES ('2024-2025'), ('2023-2024'), ('2022-2023'), ('2021-2022'), ('2020-2021'), ('2019-2020'), ('2018-2019');

--achievement types
INSERT INTO `achievement_types` (`achievement_type`) VALUES ('a'), ('r'), ('s'), ('arl');

--departments
INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES (NULL, 'Information Technology'), (NULL, 'Biotechnology'), (NULL, 'English'), (NULL, 'Research'), (NULL, 'Economics'), (NULL, 'Hindi'), (NULL, 'History'), (NULL, 'Marathi'), (NULL, 'Psychology'), (NULL, 'Political Science'), (NULL, 'Sociology'), (NULL, 'Accounting and Finance'), (NULL, 'Banking Insurance'), (NULL, 'Management Studies'), (NULL, 'Mass Media'), (NULL, 'Business Administration'), (NULL, 'Physics'), (NULL, 'Chemistry'), (NULL, 'Mathematics'), (NULL, 'Zoology'), (NULL, 'Accountancy'), (NULL, 'Business Law'), (NULL, 'Business Economics'), (NULL, 'EVS'), (NULL, 'Commerce'),(NULL, 'Botany');

--committees and activity groups
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
(36, 'Student Support, Welfare and Remedial Coaching'),
(37, 'Development Programs'),
(38, 'Anti-Ragging'),
(39, 'Film and Photography Club'),
(40, 'Prize Distribution, Degree Distribution and G.D. Kelkar-R.A.Kulkarni Memorial Lecture Series'),
(41, 'Internal Quality Assessment and Control'),
(42, 'Support to Administration'),
(43, 'Swayam Shreyas and Life Long Learning'), (NULL, 'College Executive Committee'), (NULL, 'College Administration'), (NULL, 'College Development Committee'), (NULL, 'School Committee');


-- achievements
INSERT INTO `achievements` (`achievement_id`, `achievement_name`, `achievement_prize`, `achievement_description`, `achievement_achiever_names`, `achievement_date`, `achievement_event`, `achievement_event_location`, `achievement_achieved_by_type`, `achievement_type`, `achievement_dept_id`, `achievement_committee_id`) VALUES
(1, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 15th-17th Feb. 2007 held at RTM University, Nagpur', 'Dr. S. A. Singh', '15th-17th February 2007', 'Interuniversity Research Festival AVISHKAR', 'RTM University, Nagpur', 's', 'arl', NULL, NULL),
(2, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. V. Menon won Gold medal in Interuniversity Research Festival AVISHKAR, Jan. 2010 held at Solapur.', 'Dr. V. Menon', 'January 2010', 'Interuniversity Research Festival AVISHKAR', 'Solapur', 's', 'arl', NULL, NULL),(NULL, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 10th-12h Jan. 2008 held at SNDT University, Mumbai.', 'Dr. S. A. Singh', '10th-12th January 2008', 'Interuniversity Research Festival AVISHKAR', 'SNDT University, Mumbai', 's', 'arl', NULL, NULL), (NULL, 'Gold Medal at Aveshan', 'Gold Medal', '', 'Dr. S. A. Singh', '14th-16th March 2008', 'Interuniversity Research Festival ANVESHAN', 'RTM University, Nagpur.', 's', 'arl', NULL, NULL), (NULL, 'Gold Medal at Avishkar', 'Gold Medal', 'Dr. S. A. Singh won Gold medal in Interuniversity Research Festival AVISHKAR, 10th-12h Jan. 2009 held at University of Pune', 'Dr. S. A. Singh', '10th-12th January 2009', 'Interuniversity Research Festival AVISHKAR', 'University of Pune,Pune', 's', 'arl', NULL, NULL), (NULL, '1st prize in National symposium in Emerging Trends in Life and Material Sciences', '1st Prize', 'Dr. G. More won 1st prize in National symposium in Emerging Trends in Life and Material Sciences, 25th Jan, 2012. held at V. G. Vaze College, Mulund .', 'Dr. G. More', '25th January, 2012', 'National symposium in Emerging Trends in Life and Material Sciences', 'V. G. Vaze College, Mulund,Mumbai', 's', 'arl', NULL, NULL), (NULL, 'Silver Medal at Avishkar', 'Silver Medal', 'Dr. S. Vasudevan won Silver medal in Interuniversity Research Festival AVISHKAR, Jan. 2011 held at Nasik', 'Dr. S. Vasudevan', 'January 2011', 'Interuniversity Research Festival AVISHKAR', 'Nashik', 's', 'arl', NULL, NULL), (NULL, 'Silver Medal at Avishkar and Young Scientist Award', 'Silver Medal and Young Scientist Award', 'Dr. Rohan Pawar Won Silver medal in Interuniversity Research Festival AVISHKAR Jan. 2014 and Young Scientist Award, Indian Chemical Society, held at Chandigarh.', 'Dr. Rohan Pawar', 'January 2014', 'Avishkar', 'Indian Chemical Society, held at Chandigarh.', 's', 'arl', NULL, NULL), (NULL, 'Best Paper presentation award', 'Best Paper presentation award', 'Ms Manisha Gupta, Best Paper presentation award, National Women Science Conference, 2019 held in Mysore.', 'Ms Manisha Gupta', '2019', 'National Women Science Conference', 'Mysore', 's', 'arl', NULL, NULL),(NULL, 'Silver medal in Maharashtra state classic powerlifting competition', 'Silver Medal', 'Ms Priti Chaudhari won Silver medal in Maharashtra state classic powerlifting competition held at Karjat on 16th March 2024', 'Ms Priti Chaudhari', '16th March 2024', 'Maharashtra state classic powerlifting competition', 'Karjat', 'f', 's', '1', NULL), (NULL, '6 gold medals and 1 bronze medal ', '6 gold medals and 1 bronze medal ', 'Mayank Chaphekar , alumnus of VAZE bagged 6 gold medals and 1 bronze medal in the National Games 2023 for Modern Pentathlon 1', 'Mayank Chaphekar', '2023', 'National Games 2023', 'Goa', 'a', 's', NULL, NULL),(NULL, 'Shri Shiv Chatrapati Shivaji Award', 'Shri Shiv Chatrapati Shivaji Award', 'MR.PRANAV PRASHANT DESAI,Junior College 2017-2018 batch Awarded the Shri Shiv Chatrapati Shivaji Award for the year of 2021-2022', 'Mr. Pranav Prashant Desai', '2021-2022', '-', '-', 's', 's', NULL, NULL), (NULL, 'Silver Medal in Khelo India Open Kickboxing Championship', 'Silver Medal', 'Ms. Pooja Ilkar, TYBA Political Science, won Silver medal in Khelo India\'s open kickboxing championship', 'Ms. Pooja Ilkar', '-', 'Khelo India Open Kickboxing Championship', '-', 's', 's', '10', NULL),(NULL, 'World Book Trophy', 'World Book Trophy', 'Vaze College (Autonomous) is the proud recipient of the World Book Trophy 2022-23 awarded in August 2023', 'Vaze College', 'August 2023', '-', '-', 's', 'a', NULL, NULL),(NULL, '4 gold medals , 1 silver medal , 1 all round medal in 66th National school games', '4 gold medals , 1 silver medal , 1 all round medal', 'Ashmi Badade (12 Arts), has won 4 gold medals , 1 silver medal , 1 all round medal in 66th National school games ( gymnastics)', 'Ms. Ashmi Badade', 'June,2023', 'National School Games ', 'Bhopal', 's', 's', NULL, NULL),(NULL, '2nd Place at 49th ward(T) level Science Exhibition Competition', '2nd Place', 'SYJC Science Division F Student Aryan Nigudkar bags the 2nd Place at 49th ward(T) level Science Exhibition Competition', 'Aryan Nigudkar', '-', '-', '-', 's', 'a', NULL, NULL),(NULL, 'Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Mrs. Supriya Kambli receiving Gunavant Shikshketar Karmachari Award by University of Mumbai AY 2020 2021', 'Mrs. Supriya Kambli', '-', '-', '-', 'f', 'a', NULL, NULL),(NULL, 'University level zone II second place- TABLE TENNIS Boys', 'University level zone II second place- TABLE TENNIS Boys', 'University level zone II second place- TABLE TENNIS Boys', 'Arya Rane,', '-', '-', '-', 's', 's', NULL, NULL),(NULL, 'University level zone II CHESS second place boys', 'University level zone II CHESS second place boys', 'University level zone II CHESS second place boys', '-', '-', '-', '-', 's', 's', NULL, NULL), (NULL, 'University level Zone II winners TABLE TENNIS Girls', 'University level Zone II winners TABLE TENNIS Girls', 'University level Zone II winners TABLE TENNIS Girls', '-', '-', '-', '-', 's', 's', NULL, NULL),(NULL, '1st Prize in State Level KAVYALEKHAN Competition held by Pragati Mandal Bhandup', '1st Prize', 'Kaustubh Gosavi(SYBA) secured 1st Prize in State Level KAVYALEKHAN Competition held by Pragati Mandal Bhandup', 'Kaustubh Gosavi', '-', 'State Level KAVYALEKHAN Competition ', 'Pragati Mandal,Bhandup', 's', 'a', NULL, NULL);

--aqar criteria
INSERT INTO `aqar_criteria` (`aqar_criteria_number`) VALUES ('1'), ('2'), ('3'), ('4'), ('5'), ('6'), ('7');

--avishkar categories
INSERT INTO `avishkar_categories` (`avishkar_cat_id`, `avishkar_cat_name`) VALUES (NULL, 'Humanities,Languages and Fine Arts'), (NULL, 'Commerce,Management and Law'), (NULL, 'Pure Sciences'), (NULL, 'Agriculture and Animal Husbandry'), (NULL, 'Engineering and Technology'), (NULL, 'Medicine and Pharmacy');


--avishkar participation in academic year
INSERT INTO `avishkar_participation_in_academic_year` (`avishkar_cat_id`, `academic_year`, `avishkar_level_reached`, `avishkar_participants_number`) VALUES ('1', '2022-2023', 'Zonal round', '10'), ('2', '2022-2023', 'Zonal round', '4'), ('3', '2022-2023', 'Zonal round', '8'), ('4', '2022-2023', 'Zonal round', '2'), ('5', '2022-2023', 'Zonal round', '5'), ('6', '2022-2023', 'Zonal round', '8');


--class
INSERT INTO `class` (`class_name`) VALUES ('FY'), ('SY'), ('TY'), ('FY NEP'), ('SY NEP'), ('TY NEP'), ('Part-1'), ('Part-2');


--clg events

--honourific
INSERT INTO `honourific` (`title`) VALUES ('Mr.'), ('Ms.'), ('Dr.'), ('CA'), ('Prof (Dr.)'), ('Mrs.');


--college personnel 
INSERT INTO `college_personnel` (`cp_id`, `cp_name`, `cp_personal_website_link`, `cp_image_path`, `cp_honourific`, `cp_dept_id`) VALUES (NULL, 'Ramesh Vaze', NULL, NULL, 'Mr.', NULL), (NULL, 'Jyoti Bhadkamkar', NULL, NULL, 'Ms.', NULL), (NULL, 'Dhananjay Sathaye', NULL, NULL, 'Mr.', NULL), (NULL, 'M. R. Kurup', NULL, 'http://vazecollege.net/wp-content/uploads/2022/06/Dr-M-R-Kurup-211x300.png', 'Dr.', NULL), (NULL, 'Arvind Bhorkar', NULL, NULL, 'CA', NULL), (NULL, 'Gaurav Sathaye', NULL, NULL, 'Mr.', NULL), (NULL, 'B. B. Sharma', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/Dr.-B.-B.-Sharma-224x300.jpeg', 'Dr.', NULL), (NULL, 'Anil Naik', 'https://sites.google.com/view/ca-anil-naik/home', 'https://vazecollege.net/wp-content/uploads/2022/06/CA-Anil-Naik-300x271.jpeg', 'CA', '22'), (NULL, 'Preeta Nilesh', 'https://sites.google.com/view/profpreetanilesh/home', 'https://vazecollege.net/wp-content/uploads/2022/06/Dr-Preeta-Nilesh-250x300.png', 'Prof (Dr.)', '7'), (NULL, 'Madhuri Nagarkar', NULL, 'https://vazecollege.net/wp-content/uploads/2022/06/MS.-Madhuri-Nagarkar-283x300.jpeg', 'Ms.', '18'), (NULL, 'Sangeeta Radhakrishnan', NULL, NULL, 'Dr.', '18'), (NULL, 'S. S. Barve', NULL, NULL, 'Dr.', NULL), (NULL, 'Neeta Mehta', NULL, NULL, 'Dr.', '9'), (NULL, 'Hitesh Thakkar', NULL, NULL, 'Mr.', NULL), (NULL, 'Adhir Ambavane', 'https://sites.google.com/view/adhirambavane/home', NULL, 'Dr.', '26'), (NULL, 'Ajit Kengar', 'https://sites.google.com/view/dr-ajit-kengar/home', NULL, 'Dr.', '20'), (NULL, 'Chitra Subramanian', NULL, NULL, 'Mrs.', NULL), (NULL, 'Santosh Dagle', NULL, NULL, 'Mr.', NULL), (NULL, 'Mihir Bhadkamkar', NULL, NULL, 'Mr.', NULL), (NULL, 'Hemant Chaudhary', NULL, NULL, 'Mr.', NULL), (NULL, 'Jaysing Naik', NULL, NULL, 'Mr.', NULL),(NULL, 'Dinesh Kumar', 'https://sites.google.com/view/dineshnair/home', NULL, 'Dr.', '3'), (NULL, 'Vineeta Radhakrishnan', NULL, NULL, 'Ms.', '3'), (NULL, 'Prajakta Ahirrao', NULL, NULL, 'Ms.', '3'), (NULL, 'Vaishali Dhammapathee', 'https://sites.google.com/view/vazecollege-dept-ecorocks//introduction', NULL, 'Ms.', '5'), (NULL, 'Madhura Todewale', 'https://sites.google.com/view/profilemadhuratodewale/home', NULL, 'Ms.', '5'), (NULL, 'Archana Dubey', 'https://sites.google.com/view/dr-archana-dubey/home', NULL, 'Dr.', '6'), (NULL, 'Harshana Nikam', 'https://sites.google.com/view/harshananikam/home', NULL, 'Ms.', '7'), (NULL, 'Sonali Pendnekar (on lien)', NULL, NULL, 'Dr.', '7'), (NULL, 'Arvind Jadhav', NULL, NULL, 'Mr.', '8'), (NULL, 'Nikita Sunil Vichare', 'https://sites.google.com/view/nikitavichare/home', NULL, 'Ms.', '8'), (NULL, 'Reeta Kamble', NULL, NULL, 'Ms.', '9'), (NULL, 'Renuka Gune', NULL, NULL, 'Ms.', '9'), (NULL, 'Deepa Sirsat', 'https://sites.google.com/view/deepashirsat/home', NULL, 'Ms.', '11'), (NULL, 'Hadley Quadros', NULL, NULL, 'Mr.', '11'), (NULL, 'Shilpa Suryawanshi', 'https://sites.google.com/view/ms-shilpa-suryawanshi/home', NULL, 'Dr.', '10'), (NULL, 'Vishakha Patil', 'https://sites.google.com/view/vishakhapatilvaze/home', NULL, 'Ms.', '10'),(NULL, 'Supriya Thale', 'https://sites.google.com/view/departmentofbotanypersonalsite/home', NULL, 'Dr.', '27'), (NULL, 'Jatin Vaity', 'https://sites.google.com/view/jatinvaity/home', NULL, 'Mr.', '27'), (NULL, 'Rajni Shirsat', '', NULL, 'Dr.', '27'), (NULL, 'Siddhi Baskaware', 'https://sites.google.com/view/siddhibaskaware/home', NULL, 'Ms.', '27'), (NULL, 'Suresh Shendage', '', NULL, 'Prof (Dr.)', '18'), (NULL, 'Alka Kolhatkar', '', NULL, 'Dr.', '18'), (NULL, 'Ashok Awale', '', NULL, 'Dr.', '18'), (NULL, 'Paresh More', 'https://sites.google.com/view/paresh-more/home', NULL, 'Dr.', '18'), (NULL, 'Khalida Shaikh', '', NULL, 'Ms.', '18'), (NULL, 'Preeti Dwivedi', '', NULL, 'Dr.', '27'), (NULL, 'Sandip Kamble', '', NULL, 'Mr.', '19'), (NULL, 'Kishor Gawade', 'https://sites.google.com/view/kishorgawade/home', NULL, 'Mr.', '19'), (NULL, 'Naresh Wagh', 'https://sites.google.com/view/nareshwagh/home', NULL, 'Mr.', '19'), (NULL, 'Ranjeet Singh', 'https://sites.google.com/view/ranjeet9616', NULL, 'Mr.', '19'), (NULL, 'Suresh Kadam', 'https://sites.google.com/view/dr-suresh-kadam/home', NULL, 'Dr.', '17'), (NULL, 'Manoj P.Mahajan', 'https://sites.google.com/view/drmanojpmahajan/home', NULL, 'Dr.', '17'), (NULL, 'Shweta Jamble', 'https://sites.google.com/view/shwetaphysicsdept/home', NULL, 'Dr.', '17'), (NULL, 'Mudita Suresh Sonawane', 'https://sites.google.com/view/muditass/', NULL, 'Ms.', '17'), (NULL, 'Vinod R. Ragade', 'https://sites.google.com/view/drvinodragade/home?authuser=0', NULL, 'Dr.', '21'), (NULL, 'Kiran Kharat', 'https://sites.google.com/view/the-kirans-lab/home?authuser=0', NULL, 'Dr.', '21'), (NULL, 'Preetha Acharya', 'https://sites.google.com/view/scientiacosmos/home?authuser=0', NULL, 'Dr.', '21'), (NULL, 'Veena Menon', 'https://sites.google.com/view/veenamenon/home', NULL, 'Ms.', '21'), (NULL, 'Akshay Bagwe', 'https://sites.google.com/view/mrakshaybagwe/home', NULL, 'Mr.', '21');


--college_sections
INSERT INTO `college_sections` (`college_sec_name`) VALUES ('j'), ('d'), ('s'), ('m'), ('nt');

--college_users
INSERT INTO `college_users` (`college_user_id`, `college_user_name`, `college_user_email`, `college_user_password`, `college_user_role`) VALUES (NULL, 'admin', 'admin@example.com', 'admin', 'a');


--committee belongs to college section
INSERT INTO `committee_belongs_to_clg_section` (`committee_id`, `college_sec_name`) VALUES
(6, 'd'),
(6, 'j'),
(7, 'd'),
(7, 'j'),
(38, 'j'),
(38, 'd'),
(8, 'd'),
(8, 'j'),
(33, 'd'),
(45, 'm'),
(46, 'm'),
(44, 'm'),
(27, 'd'),
(27, 'j'),
(37, 'd'),
(10, 'd'),
(10, 'j'),
(22, 'd'),
(22, 'j'),
(30, 'd'),
(30, 'j'),
(31, 'd'),
(31, 'j'),
(11, 'd'),
(39, 'd'),
(39, 'j'),
(32, 'd'),
(32, 'j'),
(23, 'd'),
(23, 'j'),
(28, 'd'),
(28, 'j'),
(12, 'd'),
(14, 'd'),
(14, 'j'),
(2, 'd'),
(13, 'd'),
(41, 'd'),
(34, 'd'),
(34, 'j'),
(24, 'd'),
(24, 'j'),
(15, 'd'),
(3, 'd'),
(3, 'j'),
(40, 'd'),
(40, 'j'),
(16, 'd'),
(17, 'd'),
(17, 'd'),
(25, 'd'),
(25, 'j'),
(36, 'd'),
(47, 'm'),
(26, 'd'),
(26, 'j'),
(4, 'd'),
(4, 'j'),
(9, 'd'),
(9, 'j'),
(29, 'd'),
(5, 'd'),
(5, 'j'),
(19, 'd'),
(42, 'd'),
(43, 'd'),
(1, 'd'),
(20, 'd'),
(21, 'd'),
(21, 'j');


--faculty
INSERT INTO `faculty` (`faculty_sec_name`) VALUES ('a'), ('c'), ('s');