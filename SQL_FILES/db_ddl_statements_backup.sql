-- HONOURIFIC TABLE
CREATE TABLE `honourific` (
 `title` varchar(30) NOT NULL,
 CONSTRAINT `PK_HONOURIFIC` PRIMARY KEY (`title`)
);

-- DEPARTMENTS TABLE

CREATE TABLE `departments` (
 `dept_id` int(11) NOT NULL AUTO_INCREMENT,
 `dept_name` varchar(255) NOT NULL,
 CONSTRAINT `PK_DEPARTMENTS` PRIMARY KEY (`dept_id`)
);

-- TENURE TABLE
CREATE TABLE `tenure` (
 `tenure_id` int(11) NOT NULL AUTO_INCREMENT,
 `tenure_start_date` date NOT NULL,
 `tenure_end_date` date DEFAULT NULL,
 CONSTRAINT `PK_TENURE` PRIMARY KEY (`tenure_id`)
);

-- COLLEGE_PERSONNEL_TABLE
CREATE TABLE college_personnel(
    cp_id int(11) not null AUTO_INCREMENT,
    cp_name varchar(255) not null,   
    cp_personal_website_link varchar(1000) default null,
    cp_image_path varchar(1000) default null,
    cp_honourific varchar(30) not null,
    cp_dept_id int(11) not null,
    Constraint `PK_COLLEGE_PERSONNEL` primary key (cp_id),
    CONSTRAINT `FK_CP_HONOURIFIC` FOREIGN KEY (cp_honourific) references honourific(title) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `FK_CP_DEPARTMENT` FOREIGN KEY (cp_dept_id) references departments(dept_id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- CP_DESGINATION TABLE
CREATE TABLE cp_designation(
    cp_id int(11) not null,
    cp_designation varchar(255) not null,
    CONSTRAINT `FK_CP_DESIGNATION_ID` FOREIGN KEY (cp_id) references college_personnel(cp_id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- COMMITTEES AND ACTIVITY GROUPS TABLE
CREATE TABLE committee_and_activity_groups(
    committee_id int(11) not null AUTO_INCREMENT,
    committtee_name varchar(1000) not null,
   CONSTRAINT `PK_COMMITTEE` PRIMARY KEY (committee_id)
);

--NOTICES TABLE
CREATE TABLE notices(
    all_pdf_id int(11) not null AUTO_INCREMENT,
    all_pdf_title varchar(1000) not null,
    all_pdf_pdf_link varchar(2000) not null,
    all_pdf_upload_date date not null,
    notice_expiry_date date not null,
    notice_type varchar(2) not null,
   CONSTRAINT `PK_NOTICE` PRIMARY KEY (all_pdf_id),
    CONSTRAINT `CHK_NOTICE_TYPE` CHECK (notice_type in ('e','re','tt','rc','g','p'))
);


-- 
CREATE TABLE faculty(
    faculty_sec_name varchar(1) not null,
    CONSTRAINT `PK_FACULTY` PRIMARY KEY (faculty_sec_name),
    CONSTRAINT `CHK_FACULTY_SEC_NAME` CHECK (faculty_sec_name in ('a','c','s'))
);

-- 
CREATE TABLE achievement_types(
    achievement_type varchar(3) not null ,
    CONSTRAINT `PK_ACHIEVEMENT_TYPE` PRIMARY KEY (achievement_type),
    CONSTRAINT `CHK_ACHIEVEMENT_TYPE` CHECK (achievement_type in ('a','r','s','arl'))
);

--
CREATE TABLE achievements(
    achievement_id int(11) not null AUTO_INCREMENT ,
    achievement_name varchar(255) not null,
    achievement_prize varchar(255) not null,
    achievement_description varchar(1000) null,
    achievement_achiever_names varchar(1000) not null,
    achievement_date varchar(20) not null, 
    achievement_event varchar(255) not null,
    achievement_event_location varchar(255) not null,
    achievement_achieved_by_type varchar(1) not null,
    achievement_type varchar(3) not null,
    achievement_dept_id int(11) null, 
    achievement_committee_id int(11) null,
    CONSTRAINT `PK_ACHIEVEMENTS` PRIMARY KEY (achievement_id),
    CONSTRAINT `CHK_ACHIEVED_BY_TYPE` CHECK (achievement_achieved_by_type in ('a','f''s')),
    CONSTRAINT `FK_ACHIEVEMENT_TYPE` FOREIGN KEY (achievement_type) references achievement_types(achievement_type) ON DELETE CASCADE ON UPDATE CASCADE ,
    CONSTRAINT `FK_ACHIEVEMENT_DEPT_ID` FOREIGN KEY (achievement_dept_id) references departments(dept_id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `FK_ACHIEVEMENT_COMMITTEE_ID` FOREIGN KEY (achievement_committee_id) references committee_and_activity_groups(committee_id) ON DELETE CASCADE ON UPDATE CASCADE
    
);

--
CREATE TABLE departmental_activities(
dept_act_id int(11) not null AUTO_INCREMENT,
dept_act_name varchar(1000) not null,
CONSTRAINT `PK_DEPARTMENTAL_ACTIVITIES` PRIMARY KEY(dept_act_id)
);

--
CREATE TABLE college_sections(
    college_sec_name varchar(2) not null,
    CONSTRAINT `PK_COLLEGE_SECTIONS` PRIMARY KEY(college_sec_name),
    CONSTRAINT `CHK_COLLEGE_SEC_NAME` CHECK (college_sec_name in ('j','d','s','m','nt'))
);

--
CREATE TABLE programmes(
    prog_id int(11) not null AUTO_INCREMENT,
    prog_name varchar(255) not null,
    prog_overview varchar(4000) not null,
    prog_eligibility varchar(500) not null,
    prog_intake_capacity int(3) not null,
    prog_duration varchar(50) not null,
    prog_type varchar(3) not null,
    prog_dept_id int(11) not null,
    CONSTRAINT `PK_PROGRAMMES` PRIMARY KEY (prog_id),
    CONSTRAINT `CHK_PROG_TYPE` CHECK (prog_type in ('ug','pg','phd','gd')),
    CONSTRAINT 	`FK_PROG_DEPT_ID` FOREIGN KEY (prog_dept_id) REFERENCES departments(dept_id) ON UPDATE CASCADE ON DELETE CASCADE
    );

--
CREATE TABLE photos(
    photo_id int(11) not null AUTO_INCREMENT,
    photo_caption varchar(500) not null,
    photo_link varchar(1000) not null,
    photo_upload_date date not null,
    CONSTRAINT `PK_PHOTOS` PRIMARY KEY(photo_id)
    );

--
CREATE TABLE academic_years(
    academic_year varchar(10) not null,
    CONSTRAINT  `PK_ACADEMIC_YEARS` PRIMARY KEY (academic_year)
);

CREATE TABLE class(
    class_name varchar(10) not null,
    CONSTRAINT `PK_CLASS` PRIMARY KEY (class_name)
);


CREATE TABLE other_pdf_types(
    other_pdf_type_name varchar(20) not null,
    CONSTRAINT `PK_OTHER_PDF_TYPES` PRIMARY KEY (other_pdf_type_name) 
);


CREATE TABLE other_pdfs(
   all_pdf_id int(11) not null AUTO_INCREMENT,
    all_pdf_title varchar(1000) not null,
    all_pdf_pdf_link varchar(2000) not null,
    all_pdf_upload_date date not null,
    other_pdfs_should_it_be_visible varchar(1) not null,
    other_pdfs_type_name varchar(20) not null,
    CONSTRAINT `PK_OTHER_PDFS` PRIMARY KEY (all_pdf_id),
    CONSTRAINT `CHK_OTHER_PDFS_SHOULD_IT_BE_VISIBLE` CHECK (other_pdfs_should_it_be_visible in ('v','nv')) ,
    CONSTRAINT `FK_OTHER_PDFS_TYPE_NAME` FOREIGN KEY(other_pdfs_type_name) REFERENCES other_pdf_types(other_pdf_type_name) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE clg_events(
    event_id int(11) not null AUTO_INCREMENT,
    event_name varchar(255) not null,
    event_start_date date not null,
    event_end_date date not null,
    event_dept_id int(11) null,
    event_committee_id int(11) null,
    CONSTRAINT `PK_EVENTS` PRIMARY KEY(event_id),
    CONSTRAINT `FK_EVENT_DEPT_ID` FOREIGN KEY (event_dept_id) REFERENCES departments(dept_id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT `FK_EVENT_COMMITTEE_ID` FOREIGN KEY (event_committee_id) REFERENCES committee_and_activity_groups(committee_id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE avishkar_categories(
    avishkar_cat_id int(11) not null AUTO_INCREMENT,
    avishkar_cat_name varchar(255) not null,
    CONSTRAINT `PK_EVENTS` PRIMARY KEY(avishkar_cat_id)
);


CREATE TABLE reports(
    all_pdf_id int(11) not null AUTO_INCREMENT,
    all_pdf_title varchar(1000) not null,
    all_pdf_pdf_link varchar(2000) not null,
    all_pdf_upload_date date not null,
    reports_should_it_be_visible varchar(1) not null,
    reports_type varchar(4) not null,
    reports_academic_year varchar(10) not null,
    CONSTRAINT `PK_REPORTS` PRIMARY KEY(all_pdf_id),
    CONSTRAINT `CHK_REPORTS_SHOULD_IT_BE_VISIBLE` CHECK (reports_should_it_be_visible in ('v','nv')) ,
    CONSTRAINT `CHK_REPORTS_TYPE` CHECK (reports_type in ('a','n','s','i','ai','csad')),
    CONSTRAINT `FK_REPORTS_ACADEMIC_YEAR` FOREIGN KEY(reports_academic_year) REFERENCES academic_years(academic_year) ON UPDATE CASCADE
    ON DELETE CASCADE

);

CREATE TABLE aqar_criteria(
    aqar_criteria_number int(2) not null AUTO_INCREMENT,
    CONSTRAINT `PK_AQAR_CRITERIA` PRIMARY KEY(aqar_criteria_number)
);

CREATE TABLE scholarships(
	scholarship_id int(11) not null AUTO_INCREMENT,
    scholarship_name varchar(255) not null,
    scholarship_type varchar(2) not null,
    scholarship_eligibility varchar(100) not null,
    scholarship_students_awarded int(3) not null,
    CONSTRAINT `PK_SCHOLARSHIPS` PRIMARY KEY(scholarship_id),
    CONSTRAINT `CHK_SCHOLARSHIP_TYPE` CHECK (scholarship_type in ('g','e'))
);
CREATE TABLE college_users(
	college_user_id int(11) not null AUTO_INCREMENT,
    college_user_name varchar(255) not null,
    college_user_email varchar(255) not null,
    college_user_password varchar(50) not null,
    college_user_role varchar(1) not null,
    CONSTRAINT `PK_COLLEGE_USRES` PRIMARY KEY(college_user_id),
    CONSTRAINT `CHK_COLLEGE_USER_ROLE` CHECK (college_user_role in ('r','a','i','o'))
);


CREATE TABLE feedback(
	feedback_id int(11) not null AUTO_INCREMENT,
    feedback_giver_email varchar(255) not null,
    feedback_giver_name varchar(100) not null,
    feedback_content varchar(2000) not null,
    CONSTRAINT `PK_FEEDBACK` PRIMARY KEY (feedback_id)
);


CREATE TABLE research_consultancy(
	rsc_id int(11) not null AUTO_INCREMENT,
    rsc_given varchar(2000) not null,
    CONSTRAINT `PK_RESEARCH_CONSULTANCY` PRIMARY KEY (rsc_id)
);




CREATE TABLE research_activities(
	rsa_id int(11) not null AUTO_INCREMENT,
    rsa_name varchar(100) not null,
    rsa_number int(3) not null,
    CONSTRAINT `PK_RESEARCH_ACTIVITIES` PRIMARY KEY (rsa_id)
);

CREATE TABLE research_projects(
	rsp_id int(11) not null AUTO_INCREMENT,
    rsp_name varchar(100) not null,
    rsa_amount_spent varchar(100) not null,
    CONSTRAINT `PK_RESEARCH_PROJECTS` PRIMARY KEY (rsp_id)
);


CREATE TABLE research_books_authored(
	rs_book_id int(11) not null AUTO_INCREMENT,
    rs_book_author varchar(100) not null,
    rs_book_title varchar(255) not null,
    rs_book_description varchar(1000) not null,
    rs_book_year_of_publication varchar(4) not null,
    rs_book_page_numbers varchar(10) not null,
    CONSTRAINT `PK_RESEARCH_BOOKS_AUTHORED` PRIMARY KEY (rs_book_id)
);

CREATE TABLE research_books_publishers(
	rs_book_id int(11) not null,
    rs_book_publisher varchar(255) not null,
    CONSTRAINT `FK_PUBLISHERS_RS_BOOK_ID` FOREIGN KEY (rs_book_id) REFERENCES research_books_authored(rs_book_id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE research_books_coauthors(
	rs_book_id int(11) not null,
    rs_book_co_author varchar(255) not null,
    CONSTRAINT `FK_COAUTHORS_RS_BOOK_ID` FOREIGN KEY (rs_book_id) REFERENCES research_books_authored(rs_book_id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE patents(
    patent_id int(11) not null AUTO_INCREMENT,
    patent_title varchar(255) not null,
    patent_type varchar(3) not null,
    patent_applicant varchar(255) not null,
    patent_application_number varchar(100) not null,
    patent_date_of_filing date not null, 
    patent_number bigint(15) not null,
    CONSTRAINT `PK_PATENTS` PRIMARY KEY(patent_id),
    CONSTRAINT `CHK_PATENT_TYPE` CHECK (patent_type in ('g','arl'))
);

CREATE TABLE cp_has_tenure(
	cp_id int(11) not null,
    tenure_id int(11) not null,
    role varchar(3) not null,
    CONSTRAINT `FK_CP_HAS_TENURE_CP_ID`  FOREIGN KEY (cp_id) REFERENCES college_personnel(cp_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_CP_HAS_TENURE_TENURE_ID` FOREIGN KEY (tenure_id) REFERENCES tenure(tenure_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `CHK_ROLE` CHECK (role in('p','vpd','vpj'))
);

CREATE TABLE cp_is_part_of_committee(
	cp_id int(11) not null,
    committee_id int(11) not null,
    role varchar(50) not null,
    CONSTRAINT `FK_CP_IS_PART_OF_COMMITTEE_CP_ID`  FOREIGN KEY (cp_id) REFERENCES college_personnel(cp_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_CP_IS_PART_OF_COMMITTEE_COMMITTEE_ID` FOREIGN KEY (committee_id) REFERENCES committee_and_activity_groups(committee_id) ON
    UPDATE CASCADE ON DELETE CASCADE
);



CREATE TABLE dept_has_dept_activities(
	dept_id int(11) not null,
    dept_act_id int(11) not null,
    CONSTRAINT `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ID` FOREIGN KEY (dept_id) REFERENCES departments(dept_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_DEPT_HAS_DEPT_ACTIVITIES_DEPT_ACT_ID` FOREIGN KEY (dept_act_id) REFERENCES departmental_activities(dept_act_id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE dept_belongs_to_clg_section(
	dept_id int(11) not null,
    college_sec_name varchar(2) not null,
  
    CONSTRAINT `FK_DEPT_BELONGS_TO_CLG_SECTION_DEPT_ID` FOREIGN KEY (dept_id) REFERENCES departments(dept_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_DEPT_BELONGS_TO_CLG_SECTION_CLG_SECTION` FOREIGN KEY (college_sec_name) REFERENCES college_sections(college_sec_name) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE committee_belongs_to_clg_section(
	committee_id int(11) not null,
    college_sec_name varchar(2) not null,
    CONSTRAINT `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_DEPT_ID` FOREIGN KEY (committee_id) REFERENCES committee_and_activity_groups(committee_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_COMMITTEE_BELONGS_TO_CLG_SECTION_CLG_SECTION` FOREIGN KEY (college_sec_name) REFERENCES college_sections(college_sec_name) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE photos_are_for_committees_in_academic_year(
	committee_id int(11) not null,
    photo_id int(11) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_PHOTOS_ARE_FOR_COMMITTEES_IN_ACADEMIC_YEAR_COMMITTEE_ID` FOREIGN KEY(committee_id) REFERENCES committee_and_activity_groups(committee_id) ON UPDATE CASCADE ON DELETE
    CASCADE,
    CONSTRAINT `FK_PHOTOS_ARE_FOR_COMMITTEES_IN_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY(photo_id) REFERENCES photos(photo_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_ARE_FOR_COMMITTEES_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) ON UPDATE CASCADE ON DELETE CASCADE
    
);



CREATE TABLE photos_of_faculty_academic_year(
	college_sec_name varchar(2) not null,
    photo_id int(11) not null,
    academic_year varchar(10) not null,
    faculty_sec_name varchar(1) not null,
    CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_COLLEGE_SEC_NAME` FOREIGN KEY(college_sec_name) REFERENCES college_sections(college_sec_name) ON UPDATE CASCADE ON DELETE
    CASCADE,
    CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY(photo_id) REFERENCES photos(photo_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_OF_FACULTY_ACADEMIC_YEAR_FACULTY_SEC_NAME` FOREIGN KEY(faculty_sec_name) REFERENCES faculty(faculty_sec_name) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE photos_for_achievements_in_academic_year(
	achievement_id int(11) not null,
    photo_id int(11) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR` FOREIGN KEY(achievement_id) REFERENCES achievements(achievement_id) ON UPDATE 
    CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY(photo_id) REFERENCES photos(photo_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_FOR_ACHIEVEMENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE photos_for_events_in_academic_year(
	event_id int(11) not null,
    photo_id int(11) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR` FOREIGN KEY(event_id) REFERENCES clg_events(event_id) ON UPDATE 
    CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_PHOTO_ID` FOREIGN KEY(photo_id) REFERENCES photos(photo_id) ON UPDATE CASCADE ON DELETE 
    CASCADE,
    CONSTRAINT `FK_PHOTOS_FOR_EVENTS_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) ON 
    UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE notices_are_for_clg_section_in_academic_year(
	notice_id int(11) not null,
    college_sec_name varchar(2) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_NOTICE_ID` FOREIGN KEY(notice_id) REFERENCES notices(all_pdf_id) ON UPDATE 
    CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` FOREIGN KEY(college_sec_name) REFERENCES 
    college_sections(college_sec_name) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_NOTICES_ARE_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES 
    academic_years(academic_year) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE other_pdf_is_for_clg_section_in_academic_year(
	other_pdf_id int(11) not null,
    college_sec_name varchar(2) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_OTHER_PDF_ID` FOREIGN KEY(other_pdf_id) REFERENCES other_pdfs(all_pdf_id) ON 
    UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_CLG_SEC_NAME` FOREIGN KEY(college_sec_name) REFERENCES 
    college_sections(college_sec_name) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_OTHER_PDF_IS_FOR_CLG_SECTION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES 
    academic_years(academic_year) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE syllabus_belongs_to_programmes_for_class(
	other_pdf_id int(11) not null,
    prog_id int(11) not null,
    class_name varchar(10) not null,
    CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PDF_ID` FOREIGN KEY(other_pdf_id) REFERENCES other_pdfs(all_pdf_id) ON 
    UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_PROG_ID` FOREIGN KEY(prog_id) REFERENCES 
    programmes(prog_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_SYLLABUS_BELONGS_TO_PROGRAMMES_FOR_CLASS_OTHER_CLASS_NAME` FOREIGN KEY(class_name) REFERENCES 
    class(class_name) ON UPDATE CASCADE ON DELETE CASCADE
);




CREATE TABLE other_pdf_belongs_to_programme(
	other_pdf_id int(11) not null,
    prog_id int(11) not null,
    CONSTRAINT `FK_OTHER_PDF_BELONGS_TO_PROGRAMME_OTHER_PDF_ID` FOREIGN KEY(other_pdf_id) REFERENCES other_pdfs(all_pdf_id) ON 
    UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_OTHER_PDF_BELONGS_TO_PROGRAMME_PROG_ID` FOREIGN KEY(prog_id) REFERENCES 
    programmes(prog_id) ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE departmental_activities_in_academic_year(
	dept_act_id int(11) not null,
    academic_year varchar(10) not null,
    CONSTRAINT `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_DEPT_ACT_ID` FOREIGN KEY(dept_act_id) REFERENCES 
    departmental_activities(dept_act_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_DEPARTMENTAL_ACTIVITIES_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) 
    ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE avishkar_participation_in_academic_year(
	avishkar_cat_id int(11) not null,
    academic_year varchar(10) not null,
    avishkar_level_reached varchar(50) not null,
    avishkar_participants_number int(4) not null,
    CONSTRAINT `FK_AVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_AVISHKAR_CAT_ID` FOREIGN KEY(avishkar_cat_id) REFERENCES 
    avishkar_categories(avishkar_cat_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_AVISHKAR_PARTICIPATION_IN_ACADEMIC_YEAR_ACADEMIC_YEAR` FOREIGN KEY(academic_year) REFERENCES academic_years(academic_year) 
    ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE reports_belong_to_aqar_criteria(
	report_id int(11) not null,
    aqar_criteria_number int(2) not null,
    aqar_sub_criteria varchar(10) not null,
    avishkar_participants_number int(4) not null,
    CONSTRAINT `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_REPORT_ID` FOREIGN KEY(report_id) REFERENCES 
    reports(all_pdf_id) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT `FK_REPORTS_BELONG_TO_AQAR_CRITERIA_AQAR_CRITERIA` FOREIGN KEY(aqar_criteria_number) REFERENCES 
    aqar_criteria(aqar_criteria_number) ON UPDATE CASCADE ON DELETE CASCADE
);

