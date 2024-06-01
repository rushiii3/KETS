<?php

$query = "SELECT * FROM `academic_years` ORDER BY academic_year DESC LIMIT 5";
$result = $con->query($query);

$academic_years = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $academic_years[] = $row['academic_year'];
    }
}

// Fetch notices for the latest academic year
$latest_year = $academic_years[0];
$notices_query_junior = "SELECT * FROM `notices_are_for_clg_section_in_academic_year` WHERE academic_year = '$latest_year' and college_sec_name = 'j' ";
$notices_query_degree = "SELECT * FROM `notices_are_for_clg_section_in_academic_year` WHERE academic_year = '$latest_year' and college_sec_name = 'd' ";
$notices_query_sfc = "SELECT * FROM `notices_are_for_clg_section_in_academic_year` WHERE academic_year = '$latest_year' and college_sec_name = 's' ";

$notices_result_junior = $con->query($notices_query_junior);
$notices_result_degree = $con->query($notices_query_degree);
$notices_result_sfc = $con->query($notices_query_sfc);

$notices_junior = [];
$notices_degree = [];
$notices_sfc = [];
if ($notices_result_junior->num_rows > 0) {
    while ($row = $notices_result_junior->fetch_assoc()) {
        $notices_junior[] = $row;
    }
}


?>




<div class="bg-gray-100 overflow-x-hidden mx-auto dark:bg-black" style="transition: all 2s ease">
    <div class="relative isolate flex flex-col  overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center"> <img src="../../../assests/college.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">Notices and circular </h1>
        </div>

    </div>


    <!-- Breadcrumbs -->
    <nav aria-label="Breadcrumb" class="pl-16 mt-10" id="Breadcrumb">
        <ol class="flex items-stretch gap-2 list-none">
            <li class="flex items-center gap-2"> <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500"> <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                        <title id="title-01">Home</title>
                        <desc id="description-01"> Home button indicating the homepage of the website. </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg> <span class="hidden md:block">Home</span> </a> <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg> </li>
            <li class="flex items-center flex-1 gap-2"> <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">Notice and Circular</a> </li>
        </ol>
    </nav>
    <section class="py-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabs-example" role="tablist">
                    <li class="me-2" role="presentation">
                        <a href="#" class="inline-block p-4 text-white bg-blue-700 rounded-lg  dark:bg-gray-800 dark:text-blue-500" id="profile-tab-example" type="button" role="tab" aria-controls="profile-example" aria-selected="false">Academic Notices
                        </a>
                    </li>
                    <li class="me-2" role="presentation">
                        <a href="#" id="dashboard-tab-example" type="button" role="tab" aria-controls="dashboard-example" aria-selected="false" class="inline-block p-4 rounded-lg">PRN</a>
                    </li>
                </ul>
                <div id="tabContentExample" class="w-full">
                    <div class="mt-10 hidden bg-gray-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                        <div>
                            <div class="mb-12 space-y-2 text-center">
                                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                                    Academic Notices
                                </h2>
                                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                                    Stay informed with the latest updates by exploring our notices and circulars.
                                    Keep yourself updated and never miss out on important information.
                                </p>
                            </div>

                            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                            Junior College
                                        </button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">
                                            Degree College
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div id="default-tab-content">
                                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="mb-12 mt-5 space-y-2 text-center">
                                        <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                            Junior College Notices
                                        </h2>
                                        <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                            Stay ahead with the latest updates and vital information from our junior college. Explore our notices to ensure you never miss out on important news and events.
                                        </p>
                                    </div>

                                    <div class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5" id="academic-years">

                                        <?php
                                        $first = true;
                                        foreach ($academic_years as $year) {
                                            $buttonClass = $first ? 'bg-blue-500' : 'bg-gray-500';
                                            echo '<button class="academic-year-button ' . $buttonClass . ' text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600 text-white" onclick="fetchNotices(' . $year . ', this)">' . $year . '</button>';
                                            $first = false;
                                        }
                                        ?>

                                    </div>

                                    <div class="min-h-60 mt-10 flex flex-col bg-gray-50 border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">

                                            <?php
                                            echo '<div>  notice section </div>';
                                            foreach ($notices_junior as $notice) {
                                                echo '<div class="notice">' . $notice['content'] . '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="mb-12 mt-5 space-y-2 text-center">
                                    <h2 class="text-3xl font-bold text-gray-800 md:text-4xl dark:text-white">
                                        Degree College Notices
                                    </h2>
                                    <p class="lg:mx-auto lg:w-6/12 text-md text-gray-600 dark:text-gray-300">
                                        Get the latest updates and essential information for our degree programs. Stay informed with important notices and announcements from our degree college.
                                    </p>
                                </div>

                                <div class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5">
                                    <button class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider text-white rounded-full hover:shadow-2xl hover:bg-blue-600">
                                        Degree Aided
                                    </button>
                                    <button class="bg-gray-100 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">
                                        Degree SFC
                                    </button>
                                </div>
                                <div class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5" id="academic-years">

                                    <?php
                                    $first = true;
                                    foreach ($academic_years as $year) {
                                        $buttonClass = $first ? 'bg-blue-500' : 'bg-gray-500';
                                        echo '<button class="academic-year-button ' . $buttonClass . ' text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600 text-white" onclick="fetchNotices(' . $year . ', this)">' . $year . '</button>';
                                        $first = false;
                                    }
                                    ?>

                                </div>

                                <div class="grid gap-8  md:px-10 mt-10">
                                    <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div style="height: 60vh;" class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
                                            </h3>


                                            <div class="flex w-full   flex-col marquee overflow-hidden   mt-5 text-left p-4 space-y-2 gap-6 " id="notices">
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
                                                Card title
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
                            >
                        </div>
                    </div>
                </div>
                <!-- <div class="mt-10 hidden bg-gray-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                    <div class="mb-12 space-y-2 text-center">
                        <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">
                            Pre Registration Number
                        </h2>
                        <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">
                            Stay informed with the latest updates and essential information on pre-registration number notices. Ensure you don't miss any important announcements regarding your pre-registration process </p>
                    </div>
                    <div class="flex mt-10 hide-scroll-bar lg:justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5" id="academic-years">

                        <?php
                        $first = true;
                        foreach ($academic_years as $year) {
                            $buttonClass = $first ? 'bg-blue-500' : 'bg-gray-500';
                            echo '<button class="academic-year-button ' . $buttonClass . ' text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600 text-white" onclick="fetchNotices(' . $year . ', this)">' . $year . '</button>';
                            $first = false;
                        }
                        ?>

                    </div>
                    <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70">
                                        <div class="p-4 md:p-5">
                                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                                Card title
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

                </div> -->
                <style>
                    .marquee {
                        overflow: hidden;
                        white-space: nowrap;
                        animation: marquee 10s linear infinite;
                    }

                    @keyframes marquee {
                        0% {
                            transform: translateY(100%);
                        }

                        100% {
                            transform: translateY(-100%);
                        }
                    }
                </style>

                <?php
                

                // Fetch academic years
                $query = "SELECT DISTINCT academic_year FROM `academic_years` ORDER BY academic_year DESC LIMIT 5";
                $result = $con->query($query);

                $academic_years = [];
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $academic_years[] = $row['academic_year'];
                    }
                }

                // Fetch notices for the most recent academic year by default
                $default_year = $academic_years[0] ?? null;
                $default_notices = [];
                if ($default_year) {
                    $query = "SELECT * FROM `notices` WHERE `academic_year` = ? ORDER BY `date` DESC";
                    $stmt = $con->prepare($query);
                    $stmt->bind_param("s", $default_year);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $default_notices[] = $row;
                    }
                }
                ?>



                <div class="bg-gray-100 dark:bg-black">

                    <div class="container mx-auto py-12">
                        <div class="text-center">
                            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">Pre Registration Number</h2>
                            <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300 mt-4">Stay informed with the latest updates and essential information on pre-registration number notices. Ensure you don't miss any important announcements regarding your pre-registration process.</p>
                        </div>

                        <div class="flex justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto px-5 mt-10">
                            <?php
                            $first = true;
                            foreach ($academic_years as $year) {
                                $buttonClass = $first ? 'bg-blue-500' : 'bg-gray-500';
                                echo '<button class="academic-year-button ' . $buttonClass . ' text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider rounded-full hover:shadow-2xl hover:bg-blue-600 text-white" onclick="fetchNotices(\'' . $year . '\', this)">' . $year . '</button>';
                                $first = false;
                            }
                            ?>
                        </div>

                        <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70 mt-10">
                            <div class="p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-800 dark:text-white">Notices</h3>
                                <div class="marquee mt-2 text-gray-500 dark:text-neutral-400" id="notices">
                                    <?php
                                    foreach ($default_notices as $notice) {
                                        echo '<p>' . $notice['date'] . ': ' . $notice['content'] . '</p>';
                                    }
                                    ?>
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

                    <script>
                        function fetchNotices(year, button) {
                            document.querySelectorAll('.academic-year-button').forEach(btn => btn.classList.remove('bg-blue-500'));
                            button.classList.add('bg-blue-500');

                            fetch(`fetch_notices.php?year=${year}`)
                                .then(response => response.json())
                                .then(data => {
                                    const noticesContainer = document.getElementById('notices');
                                    noticesContainer.innerHTML = '';
                                    data.forEach(notice => {
                                        const noticeP = document.createElement('p');
                                        noticeP.textContent = `${notice.date}: ${notice.content}`;
                                        noticesContainer.appendChild(noticeP);
                                    });
                                });
                        }
                    </script>

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
</div>
<script>
    function fetchNotices(year, button) {
        console.log('fetchNotices function called...');
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "fetch_notices.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                document.getElementById('notices').innerHTML = xhr.responseText;

                // Update button styles
                var buttons = document.getElementsByClassName('academic-year-button');
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].classList.remove('bg-blue-500');
                    buttons[i].classList.add('bg-gray-50');
                }
                button.classList.add('bg-blue-500');
            }
        };
        xhr.send("academic_year=" + year);
    }
</script>