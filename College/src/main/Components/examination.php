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

                                                    echo '<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600" onclick="fetchNotices(\'' . $row['academic_year'] . '\', \'d\')">' . $row['academic_year'] . '</button>';

                                                    if ($first) {
                                                        $default_year = $row['academic_year'];
                                                        $first = false;
                                                    }
                                                }
                                            }
                                            ?>


                                        </div>
                                        <div class="grid gap-8 sm:grid-cols-1  lg:grid-cols-2 md:px-10 mt-10">
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
                                                    <div class=" flex  mt-2 ">
                                                        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" type="button">
                                                            View More
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </button>

                                                        <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full    ">
                                                            <div class="relative w-full max-w-7xl max-h-full   flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 overflow-hidden">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700   ">
                                                                    <!-- Modal header -->
                                                                    <div class="w-full flex items-center mt-4">
                                                                        <h3 class="text-4xl ml-4  font-bold text-gray-800 dark:text-white">
                                                                            Result Notices
                                                                        </h3>
                                                                        <button type="button" class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white mr-6" data-modal-hide="extralarge-modal">
                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">

                                                                    <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                    <p class="text-base  px-2 my-5  cursor-pointer">
                                                                        <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ':' . $title . ' </span>.</a>
                                                                    </p>
                                                                    </Link>
                                                                </div>
                                                                   
                                                                ';
                                                                }
                                                            }

                                                            ?>


                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 5,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 3,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
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
                                                    <div class=" flex  mt-2 ">
                                                        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" type="button">
                                                            View More
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </button>

                                                        <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full    ">
                                                            <div class="relative w-full max-w-7xl max-h-full   flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 overflow-hidden">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700   ">
                                                                    <!-- Modal header -->
                                                                    <div class="w-full flex items-center mt-4">
                                                                        <h3 class="text-4xl ml-4  font-bold text-gray-800 dark:text-white">
                                                                            Result Notices
                                                                        </h3>
                                                                        <button type="button" class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white mr-6" data-modal-hide="extralarge-modal">
                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">

                                                                    <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                    <p class="text-base  px-2 my-5  cursor-pointer">
                                                                        <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ':' . $title . ' </span>.</a>
                                                                    </p>
                                                                    </Link>
                                                                </div>
                                                                   
                                                                ';
                                                                }
                                                            }

                                                            ?>


                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 5,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 3,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
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

                                        <div class="flex hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto">

                                            <?php

                                            $query = "SELECT * FROM `academic_years` ORDER BY academic_year  DESC LIMIT 5";
                                            $result = $con->query($query);
                                            $first = true;

                                            if ($result->num_rows > 0) {

                                                while ($row = $result->fetch_assoc()) {
                                                    // $buttonClass = $first ? 'bg-blue-500 text-blue-100' : 'bg-gray-50';
                                                    // echo '<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600" onclick="fetchNotices(\'' . $row['academic_year'] . '\', \'d\')">' . $row['academic_year'] . '</button>';

                                                    echo '<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600" onclick="fetchNotices(\'' . $row['academic_year'] . '\', \'s\')">' . $row['academic_year'] . '</button>';

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
                                                    <div class=" flex  mt-2 ">
                                                        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" type="button">
                                                            View More
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </button>

                                                        <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full    ">
                                                            <div class="relative w-full max-w-7xl max-h-full   flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 overflow-hidden">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700   ">
                                                                    <!-- Modal header -->
                                                                    <div class="w-full flex items-center mt-4">
                                                                        <h3 class="text-4xl ml-4  font-bold text-gray-800 dark:text-white">
                                                                            Examination Notices
                                                                        </h3>
                                                                        <button type="button" class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white mr-6" data-modal-hide="extralarge-modal">
                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">

                                                                    <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                    <p class="text-base  px-2 my-5  cursor-pointer">
                                                                        <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ':' . $title . ' </span>.</a>
                                                                    </p>
                                                                    </Link>
                                                                </div>
                                                                   
                                                                ';
                                                                }
                                                            }

                                                            ?>


                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 5,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 3,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
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

                                                    <div class=" flex  mt-2 ">
                                                        <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal" class="mt-3 inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400" type="button">
                                                            View More
                                                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m9 18 6-6-6-6"></path>
                                                            </svg>
                                                        </button>

                                                        <div id="extralarge-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full    ">
                                                            <div class="relative w-full max-w-7xl max-h-full   flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 overflow-hidden">
                                                                <!-- Modal content -->
                                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700   ">
                                                                    <!-- Modal header -->
                                                                    <div class="w-full flex items-center mt-4">
                                                                        <h3 class="text-4xl ml-4  font-bold text-gray-800 dark:text-white">
                                                                            Result Notices
                                                                        </h3>
                                                                        <button type="button" class="text-gray-800 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white mr-6" data-modal-hide="extralarge-modal">
                                                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                            </svg>
                                                                            <span class="sr-only">Close modal</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Modal body -->
                                                                    <div class="p-4 md:p-5 space-y-4">

                                                                    <?php
                                                            echo $default_year;
                                                            echo 'sndjnd';
                                                            $query = "SELECT n.all_pdf_title,n.all_pdf_upload_date FROM `notices` as n INNER JOIN notices_are_for_clg_section_in_academic_year as ny on n.all_pdf_id=ny.notice_id where ny.academic_year='$default_year' and ny.college_sec_name='d' ORDER BY all_pdf_upload_date DESC ";
                                                            $result = $con->query($query);
                                                            if ($result->num_rows > 0) {

                                                                while ($row = $result->fetch_assoc()) {
                                                                    $date = $row['all_pdf_upload_date'];
                                                                    $title = $row['all_pdf_title'];
                                                                    echo '<div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                    <p class="text-base  px-2 my-5  cursor-pointer">
                                                                        <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">' . $date . ':' . $title . ' </span>.</a>
                                                                    </p>
                                                                    </Link>
                                                                </div>
                                                                   
                                                                ';
                                                                }
                                                            }

                                                            ?>


                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 1,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 5,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                        <div class="bg-white dark:bg-gray-500 rounded-lg shadow-sm group hover:shadow-lg hover:translate-y-[-0.25rem] transition-all duration-300  mb-2   ">

                                                                            <p class="text-base  px-2 my-5  cursor-pointer">
                                                                                <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank"><span class=" font-semibold  ">May 3,2024 : </span>KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                                                                            </p>
                                                                            </Link>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
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



                            <a href="#" class="flex flex-col w-full items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:max-w-60  md:rounded-none md:rounded-s-lg md:m-4" src="../../../assests/exam_prep.jpg" alt="">
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">IMPORTANT INFORMATION ABOUT EXAMINATION &ASSESSMENT : – (FOR FYJC)
                                    </h5>
                                    <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">Students will be evaluated for a total of 200 marks per subject (Except for EVE and Health & PE)</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">The minimum passing marks are as follows: 70 / 200 (Average of all 4 Theory Examinations + Internal Assessment / Project / Practicals / Orals )</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">In the Final Marksheet (After the Result of Annual Examination is declared), Marks out of 200 will be converted into Marks out of 100 by using the formula : 200 / 2/</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">Report cards will be issued after every Examination; Dates of Report cards distribution will be notified on the college website.</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">Parents – Teacher Meeting will be conducted in the Month of December to analyse results of I Unit Test & I Terminal Examination. Parents of only those students who score ≤ 40% Marks in any subject will be called for this Meeting.</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight"> Re-Examination will be conducted for students who fail to appear for Ist Terminal and / or Annual Examination either due to ill health or if they represent college for Sports / Cultural / Academic Events. Please note Re-Examination Will Not Be Held for I & II Unit Test.</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">Action, as per rules, will be taken, if a student is found using unfair means during an Examination.</span>
                                        </li>
                                        <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                            </svg>
                                            <span class="leading-tight">SCORING MINIMUM PASSING GRADES IN EVE AND HEALTH & PE IS COMPULSORY FOR PASSING FYJC & SYJC EXAMS.</span>
                                        </li>

                                    </ul>




                                </div>

                            </a>



                            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-4">
                                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                                    <li class="me-2">
                                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Terminal Examination</button>
                                    </li>
                                    <li class="me-2">
                                        <button id="services-tab" data-tabs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Preliminary Examination</button>
                                    </li>
                                    <li class="me-2">
                                        <button id="statistics-tab" data-tabs-target="#statistics" type="button" role="tab" aria-controls="statistics" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Annual Examination</button>
                                    </li>
                                </ul>
                                <div id="defaultTabContent">
                                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                                        <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Terminal Examination</h2>
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">At the end of the I term or at the beginning of the II term</p>
                                        <!-- component -->



                                        <div class="flex flex-col justify-center  h-fit">
                                            <div class="relative flex max-w-[500px] h-fit w-fit flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                                        Examination Calender
                                                    </h4>

                                                </div>
                                                <div class="w-fit overflow-hidden px-4 md:overflow-x-hidden">
                                                    <table role="table" class="w-fit p-4  overflow-hidden">
                                                        <thead>
                                                            <tr role="row">
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Exam
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Expected Date
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Class
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody role="rowgroup" class="px-4">
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2 px-4">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                                            I Unit Test
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        Aug / Sept of the Academic Year
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        FYJC
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            I Term Examination
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        2nd / 3rd week of October.
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        FYJC & SYJC
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            II Unit Test
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        1st week of January.
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        FYJC
                                                                    </p>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
                                        <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Preliminary Examination</h2>
                                        <!-- content-->
                                        <p class="mb-3 text-gray-500 dark:text-gray-400">In the First week of January as per the Board Pattern.</p>
                                        <div class="flex flex-col justify-center  h-fit">
                                            <div class="relative flex max-w-[500px] h-fit w-fit flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                                        Examination Calender
                                                    </h4>

                                                </div>
                                                <div class="w-fit overflow-hidden px-4 md:overflow-x-hidden">
                                                    <table role="table" class="w-fit p-4  overflow-hidden">
                                                        <thead>
                                                            <tr role="row">
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Exam
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Expected Date
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Class
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody role="rowgroup" class="px-4">
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            Preliminary Examination
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        1st Week of January
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        SYJC
                                                                    </p>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="statistics" role="tabpanel" aria-labelledby="statistics-tab">
                                        <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white">Annual Examination</h2>

                                        <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
                                            <li>
                                                <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                    </svg>
                                                    <span class="leading-tight">Theory Examination will be conducted by the State Education Board starting in the third week of February as follows :
                                                    </span>
                                                </div>

                                                <ol class="ml-5">
                                                    <li>Physics, Chemistry & Biology = 70 Marks</li>
                                                    <li>All other subjects ( Arts, Science & Commerce ) = 80 Marks.</li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div class="flex space-x-2 rtl:space-x-reverse items-center">
                                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                    </svg>
                                                    <span class="leading-tight">Projects / Practicals / Orals will be conducted in the college on behalf of the State Education Board as follows :

                                                    </span>
                                                </div>

                                                <ol class="ml-5">
                                                    <li>Physics, Chemistry & Biology = 30 Marks</li>
                                                    <li>All other subjects ( Arts, Science & Commerce) = 20 Marks</li>
                                                </ol>
                                            </li>
                                            <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                </svg>
                                                <span class="leading-tight">Health & Physical Education : 25 Marks Theory & 25 Marks Practical Examination will be conducted in the college on behalf of the State Education Board. Marks scored will be converted into grades</span>
                                            </li>
                                            <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                </svg>
                                                <span class="leading-tight">EVE : Projects, Journal, Orals totaling to 50 Marks (internal 30 marks & external 20 marks) will be conducted in the college on behalf of the State Education Board. Marks scored will be converted into grade</span>
                                            </li>
                                            <li class="flex space-x-2 rtl:space-x-reverse items-center">
                                                <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                                </svg>
                                                <span class="leading-tight">Passing in all the subjects Including EVE and Health & Physical Education is necessary for clearing HSC Examination.
                                                </span>
                                            </li>
                                        </ul>
                                        <div class="flex flex-col justify-center  h-fit">
                                            <div class="relative flex max-w-[500px] h-fit w-fit flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                                        Examination Calender
                                                    </h4>

                                                </div>
                                                <div class="w-fit overflow-hidden px-4 md:overflow-x-hidden">
                                                    <table role="table" class="w-fit p-4  overflow-hidden">
                                                        <thead>
                                                            <tr role="row">
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Exam
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Expected Date
                                                                    </div>
                                                                </th>
                                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs px-4">
                                                                        Class
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody role="rowgroup" class="px-4">
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            Annual Examination
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        3rd / 4th week of March
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        FYJC
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row" class="col-span-3 ">
                                                                <td class="py-3 text-sm col-span-3" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-bold text-navy-700 dark:text-white px-4">
                                                                            Internal Assessment –
                                                                        </p>
                                                                    </div>
                                                                </td>

                                                            </tr>
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium  text-navy-700 dark:text-white px-4">
                                                                            Arts & Commerce Subject
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        1st / 2nd Week of February
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        -
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            Practical & Orals
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        Jan / Feb / beginning
                                                                    </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        FYJC
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr role="row">
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <div class="flex items-center gap-2">

                                                                        <p class="text-sm font-medium text-navy-700 dark:text-white px-4">
                                                                            Practical & Orals
                                                                        </p>
                                                                    </div>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        as per HSC Board timetable (Mostly in January) </p>
                                                                </td>
                                                                <td class="py-3 text-sm" role="cell">
                                                                    <p class="text-md font-medium text-gray-600 dark:text-white px-4">
                                                                        SYJC
                                                                    </p>
                                                                </td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
                                        <div class="flex flex-col">
                                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                                            <dd class="text-gray-500 dark:text-gray-400">Developers</dd>
                                        </div>
                                        <div class="flex flex-col">
                                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                                            <dd class="text-gray-500 dark:text-gray-400">Public repositories</dd>
                                        </div>
                                        <div class="flex flex-col">
                                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                                            <dd class="text-gray-500 dark:text-gray-400">Open source projects</dd>
                                        </div>
                                    </dl> -->
                                    </div>
                                </div>




                            </div>



                            <div class="mb-12 space-y-2 text-center bg-white mt-10 w-full rounded-xl p-4">
                                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Examination Pattern </h2>
                                <div class="grid gap-8 sm:grid-cols-1  lg:grid-cols-2 mt-10 p-4">
                                    <div class="max-w-full flex flex-col items-center justify-center bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <img class="h-auto  rounded-lg shadow-xl dark:shadow-gray-800" src="../../../assests/fyjc-table1.jpg" alt="image description">
                                    </div>
                                    <div class="max-w-full flex flex-col items-center justify-center bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 p-4 ">
                                        <img class="h-auto  rounded-lg shadow-xl dark:shadow-gray-800" src="../../../assests/arts-table2.jpg" alt="image description">
                                    </div>
                                </div>
                            </div>




                        </div>
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