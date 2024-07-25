<?php

$stream = $_GET["stream"] ?? "";
if($stream==""){
    echo "<script>window.location.href='./course_catalog.php'</script>";
    exit;
}
assert($stream != "");



if (strtolower($stream) == "science") {
    $bg_image_link = "https://plus.unsplash.com/premium_vector-1682303874205-6048309c3d7e?bg=FFFFFF&q=80&w=1800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";

    $learning_overview_section = "Our program offers a dynamic blend of theoretical insights and hands-on experimentation across disciplines like physics, chemistry, biology, and mathematics. Through engaging coursework and practical laboratory sessions, students develop a profound understanding of core scientific principles while sharpening critical thinking and analytical skills vital for future academic and professional success. Our emphasis on research empowers students to explore cutting-edge advancements, fostering innovation and creativity. By completing the HSC in Science, students not only lay a solid foundation for higher education but also emerge with a profound appreciation for the transformative power of scientific inquiry.";


    $course_outcomes = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li><span class="font-bold">Comprehensive Understanding:</span> Develop a comprehensive understanding of core scientific disciplines such as physics, chemistry, mathematics, and biology.
    </li>
    <li><span class="font-bold">Application of Scientific Knowledge:</span> Apply scientific principles to real-world situations, analyze problems, and propose solutions based on scientific reasoning.
    </li>
    <li><span class="font-bold">Critical Thinking and Problem-Solving Skills:</span> Cultivate critical thinking skills by evaluating scientific information, identifying patterns, and drawing logical conclusions. Proficiency in solving complex problems using scientific methodologies is emphasized.
    </li>
    <li><span class="font-bold">Laboratory Skills:</span> Acquire skills in experimental design, data collection, analysis, and interpretation through practical laboratory sessions. Learn to use laboratory equipment safely and effectively.
    </li>
    <li><span class="font-bold">Critical Evaluation of Scientific Literature:</span> Learn to critically evaluate scientific literature, including research papers, articles, and publications, to assess the validity of scientific claims and findings.
    </li> 
    <span class="text-blue-500">and much more</span>
    </ul>
    </div>';


    $option_for_higher_studies = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li >Bachelor of Engineering/Bachelor of Technology</li>
	<li>Bachelor of Medicine, Bachelor of Surgery (MBBS)</li>
	<li>Bachelor of Ayurvedic medicine and Surgery (BAMS)</li>
	<li>Bachelor of Homeopathic Medicine and Surgery (BHMS)</li>
	<li>Bachelor of Pharmacy (B.Pharma)</li>
    <li>Bachelor of Science with various Specializations</li>
    </ul>

    <ul class="ms-20 text-gray-500 dark:text-gray-400 list-disc">
    
	<li>Bachelor of Science (Information Technology/Computer Science)</li>
	<li>Bachelor of Science (Pure Sciences)</li>
	<li>Bachelor of Science (BioTechnology)</li>
	<li>Bachelor of Science (Artificial Intelligence and Machine learning)</li>
	<li>Bachelor of Science (Statistics/Data Science/Data Analytics)</li>
     <span class="text-blue-500">and much more</span>
    </ul>
    
    </div>';


    //$other_overview_section = "";

    $intake_capacity = 240;
    $second_language = "Marathi/ Hindi/ Sanskrit/ French / Information Technology(IT)";
    $subject_1 = "Physics";
    $subject_2 = "Chemistry";
    $subject_3 = "Mathematics";
    $subject_4 = "Biology";
} else if (strtolower($stream) == "commerce") {
    $bg_image_link = "https://plus.unsplash.com/premium_vector-1713364407288-bdef037b212c?bg=FFFFFF&q=80&w=1800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";

    $learning_overview_section = " Our program offers a comprehensive exploration of key subjects such as accounting, economics, business studies, and mathematics. Through a blend of theoretical understanding and practical applications, students delve into the intricacies of financial systems, business operations, and economic principles. Our curriculum not only equips students with essential knowledge but also hones critical thinking and problem-solving abilities crucial for navigating the complexities of the commercial world. With an emphasis on practical skills and real-world scenarios, our HSC Commerce program prepares students for diverse career paths in fields such as finance, entrepreneurship, and management. By completing the HSC in Commerce, students emerge with a solid foundation in commerce and a readiness to excel in the ever-evolving global marketplace.";


    $course_outcomes = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li><span class="font-bold">Comprehensive Understanding:</span> Students develop a comprehensive understanding of core subjects such as accounting, economics, business studies, and mathematics, enabling them to grasp the fundamental principles and theories underpinning commerce
    </li>
    <li><span class="font-bold">Analytical Skills:</span> Through rigorous coursework and problem-solving exercises, students hone their analytical skills, enabling them to dissect complex business scenarios, interpret financial data, and make informed decisions.
    </li>
    <li><span class="font-bold">Financial Literacy:</span> Students gain proficiency in financial concepts and practices, including budgeting, financial reporting, taxation, and investment analysis, preparing them for roles in accounting, finance, and related fields.
    </li>
    <li><span class="font-bold">Business Acumen:</span> The program cultivates students\' business acumen, fostering an understanding of market dynamics, consumer behavior, marketing strategies, and organizational management principles essential for entrepreneurship and corporate leadership roles.
    </li>
    <li><span class="font-bold">Technology Proficiency:</span> Students are introduced to relevant technology tools and software used in commerce and business operations, enhancing their technological proficiency and adaptability in a digital business environment.
    </li> 
    <span class="text-blue-500">and much more</span>
    </ul>
    </div>';


    $option_for_higher_studies = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li >Bachelor of Commerce</li>
	<li>Bachelor of Commerce(Accounting and finance)</li>
	<li>Bachelor of Commerce(Banking insurance)</li>
	<li>Bachelor of Management Studies (BMS)</li>
	<li>Bachelor of Business Administration (BBA)</li>
	<li>Bachelor of Business Management (BBM)</li>
    </ul>

    <ul class="ms-20 text-gray-500 dark:text-gray-400 list-disc">
    <li>Chartered Accountancy (CA)</li>
	<li>Cost and Management Accountancy (CMA)</li>
	<li>Company Secretary (CS)</li>
	<li>Chartered Financial Analyst (CFA)</li>
	<li>Certified Public Accountant (CPA)</li>
     <span class="text-blue-500">and much more</span>
    </ul>
    
    </div>';

    $intake_capacity = 240;

    $second_language = "Marathi/ Hindi/ Sanskrit/ French / Information Technology(IT)";
    $subject_1 = "Economics";
    $subject_2 = "Book Keeping (BK)";
    $subject_3 = "Secretarial Practice(SP)/ Mathematics";
    $subject_4 = "Organization of Commerce and Management (OCM)";
} else if (strtolower($stream) == "arts") {
    $bg_image_link = "https://plus.unsplash.com/premium_vector-1683121884518-2e8290ff0dee?bg=FFFFFF&q=80&w=1800&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D";

    $learning_overview_section = " Our program offers students a rich and diverse educational experience encompassing the humanities, social sciences, and liberal arts. Through a carefully crafted curriculum, students delve into a wide array of subjects including literature, history, sociology, psychology, philosophy, and more. Our program emphasizes the development of critical thinking skills, effective communication abilities, and cultural competence. Students engage in rigorous analysis of texts, artifacts, and societal structures, gaining insights into human experiences across time and cultures. They also hone their research and writing skills through projects and presentations, preparing them for future academic pursuits or careers in fields such as education, law, journalism, public administration, and beyond.";


    $course_outcomes = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li><span class="font-bold">Comprehensive Understanding:</span> Students gain a deeper understanding in Literature and Language, History and Civilization, Philosophy and ethics, Social Sciences, Psychology and much more.
    </li>
    <li><span class="font-bold">Creative Expression:</span> Explore and engage in creative expression through various forms of artistic and cultural production, fostering imagination, innovation, and aesthetic appreciation.
    </li>
    <li><span class="font-bold">Global and Historical Perspectives:</span> Understand global issues, historical contexts, and cultural diversity, recognizing the interconnectedness of societies and the significance of historical events and movements.
    </li>
    <li><span class="font-bold">Ethical and Social Responsibility:</span> Recognize ethical dilemmas, demonstrate ethical reasoning, and engage responsibly as informed citizens in local, national, and global communities.
    </li>
    <li><span class="font-bold">Cultural Awareness and Sensitivity:</span> Demonstrate awareness of diverse perspectives, traditions, and values, fostering cultural competence and empathy in personal and professional interactions.
    </li> 
    <span class="text-blue-500">and much more</span>
    </ul>
    </div>';


    $option_for_higher_studies = '
    <div class="flex ms-4">
    <ul class="text-gray-500 dark:text-gray-400 list-disc">
	<li>Bachelor of Arts</li>
	<li>Bachelor of Arts(Psychology)</li>
	<li>Bachelor of Arts(Literature)</li>
    <li>Bachelor of Arts(History)</li>
    <li>Bachelor of Arts(Sociology)</li>
    <li>Bachelor of Arts(Political Science)</li>
	
    </ul>

    <ul class="ms-20 text-gray-500 dark:text-gray-400 list-disc">
   <li>Bachelor of Fine Arts</li>
   <li>Bachelor of Social Work</li> 
   <li>Bachelor of Fashion Design</li>
   <li>Bachelor of Design</li>
   <li>Bachelor of Business Administration</li>
     <span class="text-blue-500">and much more</span>
    </ul>
    
    </div>';

    $intake_capacity = 240;

    $second_language = "Marathi / Hindi/ Sanskrit/ French";
    $subject_1 = "Economics";
    $subject_2 = "Political Science";
    $subject_3 = "History/ Psychology";
    $subject_4 = "Sociology";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE| HSC <?php echo $stream ?> </title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
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
    MAIN CONTENTS 
    ****************/
    -->
    <!--
    /***************
    HEADING SECTION
    ****************/
    -->
    <div class="relative isolate flex flex-col justify-end overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">

        <img src=<?php echo $bg_image_link; ?> alt="" class="absolute opacity-60 inset-0 -z-10 h-full w-full object-cover" />

        <div class="absolute inset-0 -z-10 h-full w-full object-cover"></div>
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>

        <div class="text-center z-1 " data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]"> HSC <?php echo $stream; ?></h1>
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
                <a href="../index.php" class="flex max-w-[20ch] items-center gap-1 truncate  text-slate-700 transition-colors hover:text-emerald-500">
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
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate  text-slate-400 hover:text-emerald-500">Academics</a>
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
                <a href="./course_catalog.php" aria-current="page" class=" max-w-[20ch] truncate  text-slate-400 hover:text-emerald-500">Course Catalog</a>
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
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate  text-slate-400 hover:text-emerald-500">HSC <?php echo $stream; ?></a>
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
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Brief information about the course</p>
            </div>
        </div>
    </section>

    <!--Overview Body-->
    <div class=" flex flex-wrap mt-4 px-20">

        <div class="divide-y space-y-8 flex flex-col items-start divide-gray-300 dark:divide-gray-800">

            <div class="mt-8 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-indigo-500 dark:text-indigo-400">
                        <path fill-rule="evenodd" d="M4.848 2.771A49.144 49.144 0 0112 2.25c2.43 0 4.817.178 7.152.52 1.978.292 3.348 2.024 3.348 3.97v6.02c0 1.946-1.37 3.678-3.348 3.97a48.901 48.901 0 01-3.476.383.39.39 0 00-.297.17l-2.755 4.133a.75.75 0 01-1.248 0l-2.755-4.133a.39.39 0 00-.297-.17 48.9 48.9 0 01-3.476-.384c-1.978-.29-3.348-2.024-3.348-3.97V6.741c0-1.946 1.37-3.68 3.348-3.97zM6.75 8.25a.75.75 0 01.75-.75h9a.75.75 0 010 1.5h-9a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H7.5z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assets/webp/laptop_with_degree.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-indigo-300">What will you learn?</h4>
                    <p class="text-gray-500 dark:text-gray-400"><?php echo $learning_overview_section; ?> </p>
                </div>
            </div>


            <div class="pt-4 flex gap-4  w-full md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assets/webp/career_webp.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-blue-500"> Options for higher studies</h4>
                    <div class="">
                        <?php echo $option_for_higher_studies; ?>
                    </div>
                </div>
            </div>


            <div class="pt-4 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assets/webp/skills_webp.webp" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-yellow-500">Course Outcomes</h4>
                    <div>
                        <?php echo $course_outcomes; ?>
                        <!--Throughout the course of their studies, students develop a range of technical and soft skills. These include programming skills in languages like Java, Python, C++, or others, problem-solving abilities, critical thinking skills, communication skills, teamwork, and project management skills.
                        -->
                    </div>
                </div>
            </div>

            <?php /*
            <div class="pt-4 flex gap-4 md:items-center">
                <div class="w-20 h-20 flex gap-4 rounded-full bg-teal-100 dark:bg-teal-900/20">
                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 m-auto text-teal-600 dark:text-teal-400">
                        <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                    </svg>-->
                    <img src="../../../assets/webp/learning_by_doing_webp.webp" class="h-fit" />
                </div>
                <div class="w-5/6">
                    <h4 class="font-semibold text-lg text-gray-700 dark:text-red-500">Learn by doing</h4>
                    <p class="text-gray-500 dark:text-gray-400">Many BSc IT programs includes practical projects as part of the curriculum. These experiences allow students to apply their theoretical knowledge in real-world settings, gain hands-on experience, and build professional networks.</p>
                </div>
            </div>
            */ ?>


        </div>

    </div>

    <!--Take me to admissions div-->
    <div class="flex justify-center mt-8">
        <button class="p-4  font-bold rounded-full bg-blue-500 text-white  shadow-2xl  sm:text-[1.5rem] hover:scale-[1.02] transition-transform duration-500  shadow-gray-400 dark:shadow-none border border-gray-500" id="take_me_to_admissions_button">
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
            <p class="text-[2rem] md:text-[4rem] flex-2 text-center dark:text-white font-bold">Junior College</p>
            <p class="dark:text-white flex-1 font-bold">Level</p>
        </div>

        <div class="hidden flex-1 lg:flex justify-center">
            <div class="bg-gray-400 border-0 w-px">
            </div>
        </div>


        <div class="flex mt-8 lg:mt-0 flex-col justify-around items-center flex-2">
            <p class="text-[2rem] md:text-[3rem] lg:text-[4rem] dark:text-white font-bold"><?php echo $intake_capacity; ?></p>
            <p class="dark:text-white font-bold">Intake Capacity</p>
        </div>


        <div class="hidden flex-1 md:flex justify-center">
            <div class="bg-gray-400 border-0 w-px">
            </div>
        </div>

        <div class="flex flex-col mt-8 md:mt-0 flex-wrap justify-around items-center flex-2">
            <p class="text-[2rem] md:text-[3rem] lg:text-[4rem] dark:text-white font-bold">2 years</p>
            <p class="dark:text-white font-bold">Duration</p>
        </div>

    </div>
    <!--More information div ends-->



    <!-- Subject Combinations about the course-->
    <section class="pt-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="mb-12 space-y-2 text-center">
                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Subject Combinations</h2>
                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Take a look at the various subjects that you can choose from </p>
            </div>
        </div>
    </section>

    <!--Subject Combinations Offered-->
    <!--
    <div class="flex hide-scroll-bar justify-center gap-6 flex-nowrap overflow-x-auto mx-auto" id="subject_combinations_buttons_div">
        <button class="bg-blue-500 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider  text-blue-100 rounded-full hover:shadow-2xl hover:bg-blue-600">FYJC</button>
        <button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100">SYJC</button>

    </div>
    -->


    <div id="fyjc_subject_combinations" class="w-full justify-center flex sm:px-12 px-8 mx-auto rounded-2xl mb-12  mt-12 " style="transition: all 2s ease">
        '<!-- all content come inside this -->
        <table class="w-2/3 text-sm bordertext-lefttext-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 border dark:border-gray-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="border-e dark:border-gray-500 w-1/2 px-6 py-3">
                        Curriculum
                    </th>
                    <!--
                    <th scope="col" class="w-1/2 px-6 py-3">
                        Information Technology(Bifocal)
                    </th>
                    -->

                </tr>
            </thead>

            <tbody>

                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-500">
                    <td scope="row" class=" px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900 sm: dark:text-white">
                        English
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 sm: dark:text-white">
                        English
                    </td>
                    -->

                </tr>

                <tr class="bg-white  dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4  font-medium border-e dark:border-gray-500 text-gray-900 sm: dark:text-white">
                        <?php echo $second_language ?>
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 sm: dark:text-white">
                        Information Technology(IT)
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        <?php echo $subject_1 ?>
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Economics
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        <?php echo $subject_2 ?>
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Book Keeping (BK)
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        <?php echo $subject_3 ?>
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                         Secretarial Practice(SP)/ Mathematics
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        <?php echo $subject_4 ?>
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Organization of Commerce and Management (OCM)
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        EVE
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        EVE
                    </td>
                    -->
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Health and Physical Education
                    </td>
                    <!--
                    <td scope="row" class="px-6 py-4 dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Health and Physical Education
                    </td>
                    -->
                </tr>

            </tbody>

        </table>
        ?>
    </div>

    <?php /*
    <div id="syjc_subject_combinations" class="hidden sm:px-12 px-8 mx-auto rounded-2xl mb-12  mt-12" style="transition: all 2s ease">
        <!-- all content come inside this -->
        <table class="w-full text-sm bordertext-lefttext-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 border dark:border-gray-500 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="border-e dark:border-gray-500 w-1/2 px-6 py-3">
                        Regular
                    </th>
                    <th scope="col" class="w-1/2 px-6 py-3">
                        Information Technology(SYJC-Bifocal)
                    </th>

                </tr>
            </thead>

            <tbody>

                <tr class="bg-white border dark:bg-gray-800 dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900 sm: dark:text-white">
                        English
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 sm: dark:text-white">
                        English
                    </td>

                </tr>

                <tr class="bg-white  dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4  font-medium border-e dark:border-gray-500 text-gray-900 sm: dark:text-white">
                        Marathi / Hindi/ Sanskrit/ French
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 sm: dark:text-white">
                        Information Technology(IT)
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Physics
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Physics
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Chemistry
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Chemistry
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Mathematics
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Mathematics
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Biology
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                        Biology
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        EVE
                    </td>
                    <td scope="row" class="px-6 py-4 dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        EVE
                    </td>
                </tr>

                <tr class="bg-white border dark:bg-gray-800 border dark:border-gray-500">
                    <td scope="row" class="px-6 py-4 border-e dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Health and Physical Education
                    </td>
                    <td scope="row" class="px-6 py-4 dark:border-gray-500 font-medium text-gray-900  dark:text-white">
                        Health and Physical Education
                    </td>
                </tr>

            </tbody>

        </table>
    </div>
    */
    ?>

    <!--
    /***************
    FOOTER
    ****************/
    -->

    <!--<script src="../../../js/academics_tab/specific_jc_stream_js.js"></script>-->
    <script>
        $("#take_me_to_admissions_button").click(function() {
            window.location.href = "../admissions_tab/admissions.html";
        });
    </script>
    <?php include('../../Layouts/footer.php'); ?>
    <script src="../../../js/common/header_2.js"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>