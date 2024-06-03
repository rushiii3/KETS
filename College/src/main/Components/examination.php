<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="../../css/hide-scroll-bar.css" />
</head>

<div class="bg-gray-100 overflow-x-hidden mx-auto dark:bg-black" style="transition: all 2s ease">
    <div>
        <div class="bg-gray-100 overflow-x-hidden mx-auto dark:bg-black" style="transition: all 2s ease">
            <div class="relative isolate flex flex-col  overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center"> <img src="../../../assests/college.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
                <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
                <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
                <div class="text-center z-1" data-aos="fade-up">
                    <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">Examination and Results </h1>
                </div>

            </div>

        </div>

        <!-- Component: Flat breadcrumb with text & leading icon -->
        <nav aria-label="Breadcrumb" class="pl-16 mt-10" id="Breadcrumb">
            <ol class="flex items-stretch gap-2 list-none">
                <li class="flex items-center gap-2">
                    <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                            <title id="title-01">Home</title>
                            <desc id="description-01">
                                Home button indicating the homepage of the website.
                            </desc>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="hidden md:block">Home</span>
                    </a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                        <title id="title-02">Arrow</title>
                        <desc id="description-02">
                            Arrow icon that points to the next page in big screen resolution
                            sizes and previous page in small screen resolution sizes.
                        </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </li>
                <li class="flex items-center flex-1 gap-2">
                    <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">Examination</a>
                </li>
            </ol>
        </nav>
        <section class="py-12">
            <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="">
                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabs-example" role="tablist">
                        <li class="me-2" role="presentation">
                            <a href="#" class="inline-block p-4 text-white bg-blue-700 rounded-lg  dark:bg-gray-800 dark:text-blue-500" id="profile-tab-example" type="button" role="tab" aria-controls="profile-example" aria-selected="false">Degree College
                            </a>
                        </li>
                        <li class="me-2" role="presentation">
                            <a href="#" id="dashboard-tab-example" type="button" role="tab" aria-controls="dashboard-example" aria-selected="false" class="inline-block p-4 rounded-lg">Junior College</a>
                        </li>
                    </ul>
                    <div id="tabContentExample" class="w-full">
                        <div class="mt-10 hidden bg-gray-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                            <div>
                                <div class="mb-12 space-y-2 text-center">
                                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                                        Degree Examination Notices
                                    </h2>
                                    <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                        Seamlessly apply online for our programs and take the first
                                        step towards a rewarding experience.
                                    </p>
                                </div>

                                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                                Degree Aided
                                            </button>
                                        </li>
                                        <li class="me-2" role="presentation">
                                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                                Degree SFC
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <div id="default-tab-content">
                                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="mb-12 mt-5 space-y-2 text-center">
                                            <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                                Degree Aided Examination Notices
                                            </h2>
                                            <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                                Stay informed with the latest updates and important information on junior
                                                college admissions.
                                            </p>
                                        </div>
                                        <div class="flex hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto">

                                            <?php

                                            $query = "SELECT * FROM `academic_years` ORDER BY academic_year  DESC LIMIT 5";
                                            $result = $con->query($query);
                                            $first = true;

                                            if ($result->num_rows > 0) {

                                                while ($row = $result->fetch_assoc()) {
                                                    // $buttonClass = $first ? 'bg-blue-500 text-blue-100' : 'bg-gray-50';
                                                    // echo '<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600" onclick="fetchNotices(\'' . $row['academic_year'] . '\', \'d\')">' . $row['academic_year'] . '</button>';

                                                    echo '<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600" onclick="fetchNotices1(\'' . $row['academic_year'] . '\', \'d\');fetchNotices(\'' . $row['academic_year'] . '\', \'d\')">' . $row['academic_year'] . '</button>';

                                                    if ($first) {
                                                        $default_year = $row['academic_year'];
                                                        $first = false;
                                                    }
                                                }
                                            }
                                            ?>


                                        </div>




                                        <div class="grid gap-8 sm:grid-cols-2  lg:grid-cols-2 md:px-10 mt-10">
                                            <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                                <div class="p-4 md:p-5">
                                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                        Examination Notices
                                                    </h3>
                                                    <div class="w-full bg-gray-50 flex-col overflow-hidden overflow-y-hidden h-80 mt-5 text-left" id="d_exam">
                                                        <div class="flex w-full bg-gray-50 flex-col marquee overflow-hidden overflow-y-hidden h-96 text-left p-4 space-y-2 gap-4 " id="d_exam">
                                                            <!-- examination notices of latest year -->
                                                            <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<a href="#">
                                                                    <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2 p-3 ">
                                                                        <p class="text-base  px-2 my-5  cursor-pointer">
                                                                            <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ': </span>' . $title . '</a>
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                                ';
                                                                }
                                                            }

                                                            ?>



                                                        </div>




                                                    </div>
                                                    <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                        View
                                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m9 18 6-6-6-6"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>





                                            <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 overflow-hidden">
                                                <div class="p-4 md:p-5">
                                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                        Result Notices
                                                    </h3>
                                                    <div class="w-full bg-gray-50 flex-col overflow-hidden overflow-y-hidden h-80 mt-5 text-left" id="d_result">
                                                        <div class="flex w-full bg-gray-50 flex-col marquee overflow-hidden overflow-y-hidden h-96 text-left p-4 space-y-2 gap-4 " id="d_result">

                                                            <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<a href="#">
                                                                    <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2 p-3 ">
                                                                        <p class="text-base  px-2 my-5  cursor-pointer">
                                                                            <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ': </span>' . $title . '</a>
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                                ';
                                                                }
                                                            }

                                                            ?>



                                                        </div>
                                                    </div>
                                                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                            View
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                            <div class="mb-12 mt-5 space-y-2 text-center">
                                                <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                                    Degree SFC Examination Notices
                                                </h2>
                                                <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                                    Get the latest updates and essential information on admissions to our degree
                                                    programs.
                                                </p>
                                            </div>

                                            <div class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5">
                                                <button class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider text-white rounded-full hover:shadow-2xl hover:bg-blue-600">
                                                    2023-2024
                                                </button>
                                                <button class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                                    2022-2023
                                                </button>
                                            </div>

                                            <div class="grid gap-8 sm:grid-cols-2  lg:grid-cols-2 md:px-10 mt-10">
                                                <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                                    <div class="p-4 md:p-5">
                                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                            Examination Notices
                                                        </h3>
                                                        <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                            With supporting text below as a natural lead-in to additional
                                                            content.
                                                        </p>
                                                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                            View
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                                    <div class="p-4 md:p-5">
                                                        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                            Result Notices
                                                        </h3>
                                                        <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                            With supporting text below as a natural lead-in to additional
                                                            content.
                                                        </p>
                                                        <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                            View
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                                This is some placeholder content the
                                                <strong class="font-medium text-gray-800 dark:text-white">Settings tab's
                                                    associated content</strong>. Clicking another tab will toggle the visibility
                                                of this
                                                one for the next. The tab JavaScript swaps classes to
                                                control the content visibility and styling.
                                            </p>
                                        </div>
                                        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                                This is some placeholder content the
                                                <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's
                                                    associated content</strong>. Clicking another tab will toggle the visibility
                                                of this
                                                one for the next. The tab JavaScript swaps classes to
                                                control the content visibility and styling.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 hidden bg-gray-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                                <div class="mb-12 space-y-2 text-center">
                                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                                        Junior College Examination Information
                                    </h2>

                                </div>
                                <div class="grid gap-8 sm:grid-cols-2  lg:grid-cols-2 md:px-10 mt-10">
                                    <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                IMPORTANT INFORMATION ABOUT EXAMINATION &ASSESSMENT : – (FOR FYJC)
                                            </h3>
                                            <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                With supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                Students will be evaluated for a total of 200 marks per subject (Except for EVE and Health & PE)
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                The minimum passing marks are as follows: 70 / 200 (Average of all 4 Theory Examinations + Internal Assessment / Project / Practicals / Orals )
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                In the Final Marksheet (After the Result of Annual Examination is declared), Marks out of 200 will be converted into Marks out of 100 by using the formula : 200 / 2/
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                Report cards will be issued after every Examination; Dates of Report cards distribution will be notified on the college website.
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                Parents – Teacher Meeting will be conducted in the Month of December to analyse results of I Unit Test & I Terminal Examination. Parents of only those students who score ≤ 40% Marks in any subject will be called for this Meeting.
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">

                                                Re-Examination will be conducted for students who fail to appear for Ist Terminal and / or Annual Examination either due to ill health or if they represent college for Sports / Cultural / Academic Events. Please note Re-Examination Will Not Be Held for I & II Unit Test.
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">

                                                Action, as per rules, will be taken, if a student is found using unfair means during an Examination.
                                            </p>
                                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                                SCORING MINIMUM PASSING GRADES IN EVE AND HEALTH & PE IS COMPULSORY FOR PASSING FYJC & SYJC EXAMS.
                                            </p>
                                            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                View
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Result Notices
                                            </h3>
                                            <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                With supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" href="#">
                                                View
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <!-- <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="Intake-tab"
                                data-tabs-toggle="#Intake-tab-content" role="tablist">
                                <li class="me-2" role="presentation">
                                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="juniorIntake"
                                        data-tabs-target="#juniorIntake" type="button" role="tab"
                                        aria-controls="juniorIntake" aria-selected="false">
                                        Junior College
                                    </button>
                                </li>
                                <li class="me-2" role="presentation">
                                    <button
                                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                        id="DegreeIntake-tab" data-tabs-target="#DegreeIntake" type="button" role="tab"
                                        aria-controls="DegreeIntake" aria-selected="false">
                                        Degree College
                                    </button>
                                </li>
                            </ul>
                        </div> -->
                                <!-- <div id="Intake-tab-content">
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="juniorIntake"
                                role="tabpanel" aria-labelledby="juniorIntake-tab">
                                <div class="mb-12 mt-5 space-y-2 text-center">
                                    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                        Junior College Admission Notices
                                    </h2>
                                    <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                        Stay informed with the latest updates and important information on junior
                                        college admissions.
                                    </p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="bg-blue-500 ml-auto text-nowrap px-5 py-3 w-80 text-sm shadow-sm font-bold tracking-wider text-blue-100 rounded-lg hover:shadow-2xl hover:bg-blue-600 flex items-center justify-center gap-4">
                                        <span class="material-symbols-outlined"> school </span>
                                        Online Admission
                                    </a>
                                </div>
                                <div
                                    class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-10">
                                    <button
                                        class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider text-white rounded-full hover:shadow-2xl hover:bg-blue-600">
                                        First Year Junior College
                                    </button>
                                    <button
                                        class="bg-gray-200 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Second Year Junior College
                                    </button>
                                </div>

                                <div
                                    class="min-h-60 mt-10 flex flex-col bg-gray-50 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                    <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                                        <svg class="size-10 text-gray-500 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="22" x2="2" y1="12" y2="12"></line>
                                            <path
                                                d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                            <line x1="6" x2="6.01" y1="16" y2="16"></line>
                                            <line x1="10" x2="10.01" y1="16" y2="16"></line>
                                        </svg>
                                        <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                                            No data to show
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="DegreeIntake"
                                role="tabpanel" aria-labelledby="DegreeIntake-tab">
                                <div class="mb-12 mt-5 space-y-2 text-center">
                                    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                        Degree College Admission Notices
                                    </h2>
                                    <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                        Get the latest updates and essential information on admissions to our degree
                                        programs.
                                    </p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="bg-blue-500 ml-auto text-nowrap px-5 py-3 w-80 text-sm shadow-sm font-bold tracking-wider text-blue-100 rounded-lg hover:shadow-2xl hover:bg-blue-600 flex items-center justify-center gap-4">
                                        <span class="material-symbols-outlined"> school </span>
                                        Online Admission
                                    </a>
                                </div>
                                <div
                                    class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-10">
                                    <button
                                        class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider text-white rounded-full hover:shadow-2xl hover:bg-blue-600">
                                        Degree Aided
                                    </button>
                                    <button
                                        class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Degree SFC
                                    </button>
                                </div>
                                <div
                                    class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-10">
                                    <button
                                        class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider text-white rounded-full hover:shadow-2xl hover:bg-blue-600">
                                        First Year
                                    </button>
                                    <button
                                        class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Second Year
                                    </button>
                                    <button
                                        class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Third Year
                                    </button>
                                    <button
                                        class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Post Gradudation
                                    </button>
                                </div>
                                <div class="grid gap-8 sm:grid-cols-2  lg:grid-cols-3 md:px-10 mt-10">
                                    <div
                                        class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>
                                            <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                With supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                                                href="#">
                                                View
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div
                                        class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>
                                            <p class="mt-2 text-gray-500 dark:text-neutral-400">
                                                With supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <a class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400"
                                                href="#">
                                                View
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    This is some placeholder content the
                                    <strong class="font-medium text-gray-800 dark:text-white">Settings tab's
                                        associated content</strong>. Clicking another tab will toggle the visibility
                                    of this
                                    one for the next. The tab JavaScript swaps classes to
                                    control the content visibility and styling.
                                </p>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel"
                                aria-labelledby="contacts-tab">
                                <p class="text-sm text-gray-500 dark:text-gray-400">
                                    This is some placeholder content the
                                    <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's
                                        associated content</strong>. Clicking another tab will toggle the visibility
                                    of this
                                    one for the next. The tab JavaScript swaps classes to
                                    control the content visibility and styling.
                                </p>
                            </div>
                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>
        </section>




        <script>
            const tabsElement = document.getElementById("tabs-example");
            const tabElements = [{
                    id: "profile",
                    triggerEl: document.querySelector("#profile-tab-example"),
                    targetEl: document.querySelector("#profile-example"),
                },
                {
                    id: "dashboard",
                    triggerEl: document.querySelector("#dashboard-tab-example"),
                    targetEl: document.querySelector("#dashboard-example"),
                },
            ];
            // options with default values
            const options = {
                defaultTabId: "profile",
                activeClasses: "text-white bg-blue-700 hover:text-blue-100 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
                inactiveClasses: "text-gray-500 bg-white hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
                onShow: () => {
                    console.log("tab is shown");
                },
            };

            // instance options with default values
            const instanceOptions = {
                id: "tabs-example",
                override: true,
            };
            const tabs = new Tabs(tabsElement, tabElements, options, instanceOptions);
            tabs.show("profile");

            console.log(options);
        </script>
        </body>

        </html>