<?php
//$json_url="./AJAX/fetch_specific_course_info.php"
include("../../../config/connect.php");

include("./AJAX/fetch_specific_course_info.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE|<?php echo $data["prog_name"];?></title>
    <?php include('../../../library/library.php'); ?>
</head>

<body class="bg-white dark:bg-black">
    <!--
    /***************
    NAVBAR 
    ****************/
    -->
    <?php include('../../Layouts/header2.php');
    ?>

    <!--
    /***************
    HEADING SECTION
    ****************/
    -->
    <div class="relative isolate flex flex-col justify-end overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">

        <img src=<?php echo $data["prog_bg_image_link"]; ?> alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />

        <div class="absolute inset-0 -z-10 h-full w-full object-cover"></div>
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]"> <?php echo $data["prog_name"]; ?></h1>
        </div>
        <!--
        <div class="text-center z-1" data-aos="fade-up">
            <p class="mt-6 text-3xl leading-8 text-white "> Browse through our extensive course catalog and find which fuels your passion </p>
        </div>
        -->
    </div>

    <!--
    /***************
     BREADCRUMBS - to show where the user is currently
    ****************/
    -->
    <nav aria-label="Breadcrumb" class="pl-2 mt-2" id="Breadcrumb">
        <ol class="flex items-stretch gap-2 list-none">
            <li class="flex items-center gap-2">
                <a href="../index.php" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                        <title id="title-01">Home</title>
                        <desc id="description-01"> Home button indicating the homepage of the website. </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:block">Home</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li>
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-400 hover:text-emerald-500">Academics</a>
            </li>
            <!-- Arrow 2-->
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>

            <li>
                <a href="./course_catalog.php" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-400 hover:text-emerald-500">Course Catalog</a>
            </li>

            <!-- Arrow 3-->
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>

            <li>
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-400 hover:text-emerald-500"><?php echo $data["prog_name"];?></a>
            </li>

        </ol>
    </nav>
    <!--
    /***************
    MAIN CONTENTS 
    ****************/
    -->

    <!-- Overview section-->


    <section class="pt-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Overview </h2>
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Brief Information about the course</p>
            </div>
        </div>
    </section>

    <!--Overview body-->
    <div class=" flex flex-wrap mt-4 px-20">
        <!--<p class="text-xl dark:text-white text-justify px-40">Bachelor of Science in Information Technology (BSc IT) is an undergraduate degree program typically spanning three to four years, focusing on various aspects of computer science and information technology. The curriculum covers subjects like programming, database management, networking, cybersecurity, web development, and systems analysis. Graduates of BSc IT programs have diverse career opportunities, including roles as software developers, systems analysts, network administrators, cybersecurity specialists, and IT consultants. Throughout the program, students develop technical skills in programming languages like Java, Python, or C++, along with problem-solving, critical thinking, communication, and project management abilities. With a curriculum tailored to industry demands and opportunities for internships or practical projects, BSc IT equips students with the knowledge and skills necessary for success in the dynamic field of information technology.</p>
        -->

        <div class="divide-y space-y-8 flex flex-col items-center divide-gray-300 dark:divide-gray-800">

            <div class="mt-8 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-indigo-500 dark:text-indigo-400">
                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assests/webp/laptop_with_degree.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-indigo-300">What will you learn?</h4>
                    <p class="text-gray-500 dark:text-gray-400"><?php echo $data["prog_overview_learning_section"]; ?><span class="text-blue-500">See the syllabus section to know more</span></p>
                </div>
            </div>


            <div class="pt-4 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assests/webp/career_webp.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-blue-500"> Career Opportunities</h4>
                    <p class="text-gray-500 dark:text-gray-400"><?php echo $data["prog_overview_career_section"]?></p>
                </div>
            </div>


            <div class="pt-4 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assests/webp/skills_webp.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-yellow-500">Skills Development</h3>
                        <p class="text-gray-500 dark:text-gray-400"><?php echo $data["prog_overview_skills_section"]?></p>
                </div>
            </div>
            <div class="pt-4 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assests/webp/learning_by_doing_webp.webp" class="h-fit" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-red-500">What's more?</h4>
                    <p class="text-gray-500 dark:text-gray-400"> <?php echo $data["prog_overview_other_section"];  ?></p>
                </div>
            </div>

        </div>

    </div>

    <!--Take me to admissions div-->
    <div class="flex justify-center mt-8">
        <button class="p-4  font-bold rounded-full bg-blue-500 text-white  shadow-2xl  sm:text-[1.5rem] hover:scale-[1.02] transition-transform duration-500  shadow-gray-400 dark:shadow-none border border-gray-500" id="take_to_admissions_button">
            Take me to Admissions
        </button>
    </div>

    <!-- More Information about the course-->
    <section class="pt-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Additional Information </h2>
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Know more about the course </p>
            </div>
        </div>
    </section>

    <div class=" mx-12 flex flex-col lg:flex-row h-fit p-12 justify-between rounded-2xl shadow-2xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 shadow-2xl shadow-gray-300">
        <div class="flex flex-col justify-around items-center flex-2">
            <p class="text-[2rem] md:text-[4rem] flex-2 dark:text-white font-bold">
                <?php
                 switch($data["prog_type"]){
                    case "ug":
                      echo "UG";
                      break;
                    case "pg":
                      echo "PG";
                      break;
                    case "phd":
                      echo "PhD";
                      break;
             
                  }
                ?>
            </p>
            <p class="dark:text-white flex-1 font-bold">Level</p>
        </div>

        <div class="hidden flex-1 lg:flex justify-center">
            <div class="bg-gray-400 border-0 w-px">
            </div>
        </div>


        <div class="flex flex-col mt-8 lg:mt-0 flex-wrap items-center justify-around flex-2">
            <a href=<?php echo "./Department.php?dept_sec_id=".base64_encode($data["prog_dept_sec_id"]);?> class="text-[1.5rem] text-center font-bold sm:text-[2rem] hover:text-[2.05rem] transition-font duration-500 hover:underline transition-text-decoration dark:text-white">
                <?php echo $data["dept_name"];?>
                <span class="material-symbols-outlined">
                    open_in_new
                </span>
            </a>
            <p class="dark:text-white text-center mt-1 md:mt-0 font-bold">Overlooking Department</p>
        </div>

        <div class="hidden flex-1 lg:flex justify-center">
            <div class="bg-gray-400 border-0 w-px">
            </div>
        </div>

        <div class="flex mt-8 lg:mt-0 flex-col justify-around items-center flex-2">
            <p class="text-[2rem] md:text-[3rem] lg:text-[4rem] dark:text-white font-bold">
                <?php echo $data["prog_intake_capacity"]; ?>
            </p>
            <p class="dark:text-white font-bold">Intake Capacity</p>
        </div>


        <div class="hidden flex-1 md:flex justify-center">
            <div class="bg-gray-400 border-0 w-px">
            </div>
        </div>

        <div class="flex flex-col mt-8 md:mt-0 flex-wrap justify-around items-center flex-2">
            <p class="text-[2rem] md:text-[3rem] lg:text-[4rem] dark:text-white font-bold">
                <?php
                echo $data["prog_duration"];
                ?>
            </p>
            <p class="dark:text-white font-bold">Duration</p>
        </div>

    </div>


    <!-- Eligibilty about the course-->
    <section class="pt-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Eligibilty</h2>
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Requirements for enrolling in the course </p>
            </div>
        </div>
    </section>

    <div class="dark:text-white px-20 text-center">
        <p class="text-2xl dark:text-white">
            <?php 
            if(str_contains(strtolower($data["prog_eligibility"]),"as per mumbai university")){
                echo 'Please refer the Mumbai University website for further details <a href="#" class="transition-font hover:text-[1.6rem] duration-500 ease-in-out text-blue-500 dark:text-emerald-500">Click here</a> ';
            }
            else{
                echo $data["prog_eligibility"];

            }
            ?>
        </p>

    </div>


    <!-- Fees structure about the course-->
    <section class="pt-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Fees structure</h2>
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">How does your investment look like </p>
            </div>
        </div>
    </section>


    <div class="dark:text-white px-20 text-center">
        <p class="text-2xl dark:text-white">Please refer the College prospectus for the latest updates <a href="#" class="transition-font hover:text-[1.6rem] duration-500 ease-in-out text-blue-500 dark:text-emerald-500">Take me to the prospectus</a> </p>

    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>

    <script>
        $("#take_to_admissions_button").click(function(){
            window.location.href="../admissions_tab/admissions.html";
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    
</body>
<?php include('../../../library/AOS.php'); ?>

</html>