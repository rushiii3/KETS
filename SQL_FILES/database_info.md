# DATABASE DDL AND DML STATEMENTS
Order in which tables were created.This order is important as the foreign keys are required and hence the tables are arranged in such a manner so that no foreign key issue occurs. 
STRICTLY DO NOT CHANGE THIS ORDER IN THE SQL FILE AS WELL OR HERE!!!!

To get the database on your local machine just import the sql file. As new dummy data is added on during the development process, separate SQL files containing only INSERT statements will be uploaded in this directory itself.Just import them and you will be up-to-date.!!


tenure
Honourific
Department
College_personnel
Cp_designation
Committee

Notices
    Additional Info:- notice_type values
    e - examination
    re - result
    tt - timetable
    rc - roll-call
    g - general
    p - PRN

Faculty
    Additional Info:- faculty_sec_name values
    a - arts
    c - commerce
    s - science

Achievement_type
    Additional Info:- achievement_type values
    a - arts
    r - research
    s - science
    arl - advance research laboratory  

Achievements
    Additional Info - achieved_by_type values
    a - alumunus achievement
    f - faculty achievement
    s - student achievement

Departmental_acitivities

College_section
    Additional Info:-college_sec_names
    j - junior college
    d - regular degree college
    s - self-financing courses (SFC) section
    m - management
    nt - non-teaching

Programmes
    Additional Info:-prog_type values
    ug - undergraduate courses
    pg - postgraduate courses
    phd - phd courses
    gd - G.D. Kelkar Skill Development and Finishing School Courses

Photos
Academic_year
Class
Other_pdf_types
other_pdfs
Events
Avishkar_categories
Reports
Aqar_criteria

Scholarships
    Additional Info:-scholarship_type
    g - government
    e - endowment

College_users
    Additional Info:-college_user_role
    r - research
    a - admin
    i - iqac
    o - office

Feedback
Research_consultancy
Research_activity
Research_projects
Research_books_authored
Research_books_publishers
Research_books_co_authors
Patents
    Additional Info:-patents_type
    g - general
    arl - advanced research laboratory

Cp_has_tenure
    Additional Info:-role
    p- prinicipal
    vpd- vice-prinicipal degree
    vpj - vice principal junior

Cp_is_part_of_committee
dept _has_dept_acitivities
Dept_belongs_to_clg_section
Committees_belong_to_clg_section
Photos_are_for_committees_in_academic_year
Photos_of_faculty_in_academic_year
Photos_for_achievements_in_academic_year
Photos_are_for_events_in_academic_year
Notices_are_for_clg_section_in_academic_year
Other_pdf_is_for_clg_section_in_academic_year(prospectus, etc)
syllabus_belongs_to_programme_for_class(syllabus)
other_pdf_belongs_to_programme(GD Kelkar Skill)
Departmental_activities_in_academic_year
Avishkar_participation_in_academic_year
reports _belong_to_aqar_criteria


