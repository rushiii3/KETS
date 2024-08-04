<?php include('../../../config/connect.php');
if (isset($_GET['dept_sec_id']) || !empty($_GET['dept_sec_id'])) {

    $dept_sect_id = base64_decode($_GET['dept_sec_id']);
    $dept_name = "";
    $dept_link = "";
    $latest_ay = "";
    assert($dept_sect_id != null || $dept_sect_id != "");

    //FETCH CURRENT DEPARTMENT DETAILS
    $fetch_current_department_stmt = "SELECT d.dept_name,ds.dept_link FROM `departments` as d inner join dept_belongs_to_clg_section as ds on ds.dept_id=d.dept_id where ds.dept_sect_id=?";

    $fetch_current_department_query = $conn->prepare($fetch_current_department_stmt);
    $fetch_current_department_query->bind_param("s", $dept_sect_id);
    $fetch_current_department_query->execute();
    $fetch_current_department_query_result = $fetch_current_department_query->get_result();
    if ($fetch_current_department_query_result) {
        if ($fetch_current_department_query_result->num_rows > 0) {

            $row = $fetch_current_department_query_result->fetch_assoc();
            $dept_name = $row['dept_name'];
            $dept_link = $row['dept_link'];
        }
    }


    ///FETCH FACULTY

    $fetch_faculty_stmt = "SELECT *,GROUP_CONCAT(cp_designation SEPARATOR ' | ') as cp_desig FROM `college_personnel` JOIN cp_designation on cp_designation.cp_id=college_personnel.cp_id 
    JOIN cp_belongs_to_dept_sect ON cp_belongs_to_dept_sect.cp_id=college_personnel.cp_id
    WHERE cp_belongs_to_dept_sect.dept_sect_id=? GROUP BY college_personnel.cp_id ORDER BY college_personnel.cp_name ASC";
    $fetch_faculty_query = $conn->prepare($fetch_faculty_stmt);
    //print_r("here");
    $fetch_faculty_query->bind_param("s", $dept_sect_id);
    $fetch_faculty_query->execute();
    $fetch_faculty_query_result = $fetch_faculty_query->get_result();

    //faculty_array
    $faculty_array = [];
    if ($fetch_faculty_query_result && $fetch_current_department_query_result->num_rows > 0) {
        $i = 1;
        while ($row = $fetch_faculty_query_result->fetch_assoc()) {
            if (str_contains(strtolower($row["cp_desig"]), "head of department") || str_contains(strtolower($row["cp_desig"]), "in-charge") || str_contains(strtolower($row["cp_desig"]), "convener")) {
                //print_r("herer");
                $faculty_array[0] = $row;
            } else {
                $faculty_array[$i] = $row;
                $i++;
            }
        }
    }

    // print_r($faculty_array[1]);
    // exit;
   

//print_r("here");
    ////FETCH SYLLABUS
    $fetch_ug_syllabus_stmt = "SELECT * from other_pdfs WHERE all_pdf_id IN (SELECT sy.other_pdf_id FROM programmes as p INNER JOIN syllabus_belongs_to_programmes_for_class AS sy on p.prog_id=sy.prog_id WHERE sy.class_name NOT IN (SELECT class_name FROM class WHERE class_name LIKE 'msc%') AND p.prog_dept_sec_id=?) AND other_pdfs.other_pdfs_should_it_be_visible='y';";
    $fetch_ug_syllabus_query = $conn->prepare($fetch_ug_syllabus_stmt);
    $fetch_ug_syllabus_query->bind_param("s", $dept_sect_id);
    $fetch_ug_syllabus_query->execute();
    $fetch_ug_syllabus_query_result = $fetch_ug_syllabus_query->get_result();

    //FETCH MASTERS

    $fetch_pg_syllabus_stmt = "SELECT * from other_pdfs WHERE all_pdf_id IN (SELECT sy.other_pdf_id FROM programmes as p INNER JOIN syllabus_belongs_to_programmes_for_class AS sy on p.prog_id=sy.prog_id WHERE sy.class_name  IN (SELECT class_name FROM class WHERE class_name LIKE 'msc%') AND p.prog_dept_sec_id=?) AND other_pdfs.other_pdfs_should_it_be_visible='y';";
    $fetch_pg_syllabus_query = $conn->prepare($fetch_pg_syllabus_stmt);
    $fetch_pg_syllabus_query->bind_param("s", $dept_sect_id);
    $fetch_pg_syllabus_query->execute();
    $fetch_pg_syllabus_query_result = $fetch_pg_syllabus_query->get_result();



    //FETCH ACADEMIC YEARS for departmental activities
    $fetch_ay_stmt = "SELECT DISTINCT dy.dept_act_academic_year FROM dept_has_dept_activities as dc INNER JOIN departmental_activities as dy on dc.dept_act_id=dy.dept_act_id and dc.dept_sect_id=? ORDER by dy.dept_act_academic_year desc";
    $fetch_ay_query = $conn->prepare($fetch_ay_stmt);
    $fetch_ay_query->bind_param("s", $dept_sect_id);
    $fetch_ay_query->execute();
    $fetch_ay_query_result = $fetch_ay_query->get_result();
} else {
    echo "<script>document.location.href='../../Pages/academics_tab/Dept_Index.php';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.G. Vaze | <?php echo $dept_name
                        ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <link rel="stylesheet" href="../../../css/common/custom_aos_fade_right.css" />
    <style>
        .bg {
            background-color: whitesmoke !important;
        }

        .bg:hover {
            background-color: #3dbeff !important;
            color: #3d3d3d !important;

        }


        .custom_tiling_animation {
            /* //box-shadow:  0px 0px 5px 5px #5e5e5e; */
            animation: custom_tiling_animation 600ms linear;
            animation-fill-mode: both;
        }

        @keyframes custom_tiling_animation {
            0% {
                /* box-shadow: 0 25px 50px -12px #5e5e5e;
                background-color: #1d1d1d;

                transform: translateZ(10px); */
                transform: translateY(-10px);
                opacity: 0
            }

            100% {
                /* box-shadow: none;
                background-color: none; */
                transform: translateY(0);
                opacity: 1
            }
        }
    </style>
    <?php include('../../../library/library.php'); ?>
</head>

<body class="bg-gray-100 dark:bg-black dark:text-white overflow-x-hidden mx-auto ">
    <?php include('../../Layouts/header2.php'); ?>
    <div class="flex flex-col">
        <!--Header-->
        <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[20rem] h-[15rem] mx-auto w-full items-center justify-center">
            <img src="../../../assets/jpg/department.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
            <div class="text-center mt-4" data-aos="fade-up" id="heading">
                <h1 class="md:text-7xl text-5xl font-bold tracking-tight  text-white sm:text-6xl text-center px-[20px]">
                    <?php echo $dept_name; ?>
                </h1>
                <p class="hidden" disabled><?php echo $_GET["dept_sec_id"] ?></p>
            </div>

            <?php
            if ($dept_link != null && $dept_link != "") {
            ?>
                <a href="<?php echo $dept_link ?>" class=" flex hover:underline hover:text-emerald-500" data-aos="fade-up">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                        <path d="M440-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h160v80H280q-50 0-85 35t-35 85q0 50 35 85t85 35h160v80ZM320-440v-80h320v80H320Zm200 160v-80h160q50 0 85-35t35-85q0-50-35-85t-85-35H520v-80h160q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H520Z" />
                    </svg>
                    Know more</a>

            <?php

            }
            ?>

        </div>

        <!-- Component: Flat breadcrumb with text & leading icon -->
        <nav aria-label="Breadcrumb" class="pl-3 mt-10" id="Breadcrumb" data-aos="fade-right">
            <ol class="flex items-stretch gap-2 list-none">
                <li class="flex items-center gap-2">
                    <a href="../../Pages/index.php" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 hover:text-emerald-500  hover:scale-105 transition-all ease-linear">
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
                            Arrow icon that points to the next page in big screen resolution sizes
                            and previous page in small screen resolution sizes.
                        </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </li>
                <li class="flex items-center flex-1 gap-2">
                    <a href="../../Pages/academics_tab/Dept_Index.php" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-600 hover:text-emerald-500 hover:scale-105 scale- transition-all ease-linear">Departments</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                        <title id="title-02">Arrow</title>
                        <desc id="description-02">
                            Arrow icon that points to the next page in big screen resolution sizes
                            and previous page in small screen resolution sizes.
                        </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                    <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400 "><?php echo $dept_name; ?></a>

                </li>
            </ol>
        </nav>

        <!--Faculty SECTION-->

        <div class="flex flex-col mt-4">

            <h2 class="text-4xl font-bold md:text-5xl text-center" data-aos="fade-up" data-aos-delay="500">
                Faculty
            </h2>
            <p class="mt-2 text-gray-400 text-center" data-aos="fade-up" data-aos-delay="500">
                Our Guiding Force
            </p>


            <?php
            if (count($faculty_array) > 0) {
            ?>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 px-8 gap-8 mt-4">

                    <?php
                    for ($i = 0; $i < count($faculty_array); $i++) {
                        $faculty = $faculty_array[$i];

                        $bg_color = "";
                        $image_link = "";
                        $has_link = False;
                        $hover_card_status = "";
                        $underline_status = "";
                        if ($faculty["cp_image_path"] != null) {
                            $image_link = $faculty["cp_image_path"];
                        } else {
                            if ($faculty["cp_gender"] == "f") {
                                $image_link = "../../../assets/svg/female_dummy_dp_2_svg.svg";
                                $bg_color = "bg-green-100";
                            } else {
                                $image_link = "../../../assets/svg/male_dummy_dp_1_svg.svg";
                                $bg_color = "bg-blue-100";
                            }
                        }
                        if ($faculty["cp_personal_website_link"] != null) {

                            $has_link = True;
                            $hover_card_status = " hover:cursor-pointer ";
                            $underline_status = " group-hover:underline ";
                        }
                       
                        
                    ?>
                        <div class="bg-transparent flex flex-col p-4 group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
                            <div class="w-full rounded-full overflow-clip <?php echo $bg_color ?> ">
                                <img src="<?php echo $image_link ?>" alt="Vaze_College_Faculty" class="object-cover group-hover:scale-105 h-full w-full  aspect-square transition-all duration-500 " />
                            </div>

                            <div class="flex flex-col mt-4">
                                <?php
                                if ($has_link) {
                                    echo '<a href="' . $faculty["cp_personal_website_link"] . '" class="font-medium text-lg text-center ' . $underline_status . ' transition-all duration-500">' . $faculty["cp_honourific"] . ' ' . $faculty["cp_name"] . '</a>';
                                } else {
                                    echo '<p class="font-medium text-lg text-center  transition-all duration-500">' . $faculty["cp_honourific"] . ' ' . $faculty["cp_name"] . '</p>';
                                }
                                ?>

                                <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo $faculty["cp_desig"] ?></p>

                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
                <!--grid ends-->
            <?php
            } else {
                echo  "<div class='flex justify-center items-center mt-8' data-aos='fade-up'><p>No members present</p></div>";
            }
            ?>

        </div>

        <!--Syllabus SECTION-->

        <!--syllabus heading-->
        <div class="py-8 flex flex-col items-center">
            <div class=" text-center" data-aos="fade-up">
                <h2 class="text-4xl font-bold md:text-5xl ">
                    Syllabus
                </h2>
                <p class="mt-4  text-gray-400 text-center " data-aos="fade-up">
                    For all the Programme offered.
                </p>
            </div>

            <div class="flex gap-4 mt-4" data-aos="fade-up">
                <button class="rounded-full p-4 bg-blue-800 text-white transition-all duration-700" id="ug_syllabus_button">Undergraduate</button>
                <button class="rounded-full p-4 bg-gray-200 dark:bg-gray-800 transition-all duration-700" id="pg_syllabus_button">Postgraduate</button>

            </div>

        </div>

        <!--syllabus pdfs-->

        <section class="py-12 ">
            <!--UG syllabus Grid -->
            <?php

            if ($fetch_ug_syllabus_query_result && $fetch_ug_syllabus_query_result->num_rows > 0) {
            ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 px-8 " id="ug_syllabus_grid">
                    <?php
                    while ($row = $fetch_ug_syllabus_query_result->fetch_assoc()) {


                    ?>
                        <div class="pdf_card_wrapper">
                            <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105  hover:cursor-pointer pdf_card  transition-transform duration-500">
                                <img src="../../../assets/webp/pdf.webp" alt="syllabus_pdf" class="aspect-square w-[20%]">
                                <a href="<?php echo $row["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $row["all_pdf_title"] ?></a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>

            <?php
            } else {
                "<div class='flex justify-center items-center' data-aos='fade-up'><p> No syllabus present.</p></div>";
            }
            if ($fetch_pg_syllabus_query_result && $fetch_pg_syllabus_query_result->num_rows > 0) {

            ?>

                <!--Masters syllabus grid-->
                <div class="hidden grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3  px-8 " id="pg_syllabus_grid">

                    <?php
                    while ($row = $fetch_pg_syllabus_query_result->fetch_assoc()) {


                    ?>
                        <div class="pdf_card_wrapper">
                            <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105  hover:cursor-pointer pdf_card  transition-transform duration-500">
                                <img src="../../../assets/webp/pdf.webp" alt="syllabus_pdf" class="aspect-square w-[20%]">
                                <a href="<?php echo $row["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $row["all_pdf_title"] ?></a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>


                </div>
            <?php
            } else {
                echo "<div class='flex justify-center items-center' data-aos='fade-up'><p> No syllabus present.</p></div>";
            }
            ?>

        </section>

        <!-- Department activities-->

        <!--year selection-->
        <div class="mt-4" data-aos="fade-up">
            <h2 class="text-4xl font-bold md:text-5xl text-center  w-full ">
                Departmental Activities
            </h2>
            <p class=" text-gray-600 text-center w-full dark:text-gray-400" data-aos="fade-up">
                List of the activities Conducted
            </p>

            <!-- <div class="flex justify-center"> -->
            <div class=" mt-4 flex gap-4 px-2 sm:px-8 w-full overflow-x-auto " data-aos="fade-left">
                <?php
                if ($fetch_ay_query_result) {
                    $i = 0;
                    $latest_ay = "";


                    while ($row = $fetch_ay_query_result->fetch_assoc()) {

                        if ($i == 0) {
                            //first element
                            echo ' <button class="ml-auto rounded-full p-4 bg-blue-800 text-white transition-all duration-700 ay_btn selected" >' . $row['dept_act_academic_year'] . '</button>';
                            $latest_ay = $row['dept_act_academic_year'];
                        } else if ($i == $fetch_ay_query_result->num_rows - 1) {
                            //last element 
                ?>
                            <button class=" mr-auto rounded-full p-4 bg-gray-200 dark:bg-gray-800 transition-all duration-700 ay_btn"><?php echo $row['dept_act_academic_year'] ?></button>

                        <?php
                        } else {
                        ?>

                            <button class=" rounded-full p-4 bg-gray-200 dark:bg-gray-800 transition-all duration-700 ay_btn"><?php echo $row['dept_act_academic_year'] ?></button>
                <?php
                        }
                        $i++;
                    }
                }
                //print_r("here");

                ?>

                <!-- </div> -->
            </div>
        </div>

        <div class="hidden h-[50vh] w-[100vw]" id="loading_animation_div"></div>

        <!--Activities-->
        <?php

        if ($latest_ay != null && $latest_ay != "") {

            $query3 = "SELECT * FROM departmental_activities where dept_act_id in(SELECT dc.dept_act_id FROM dept_has_dept_activities as dc INNER JOIN departmental_activities as dy on dc.dept_act_id=dy.dept_act_id and dc.dept_sect_id=$dept_sect_id and dy.dept_act_academic_year='$latest_ay')";
            $result3 = $conn->query($query3);
            if ($result3->num_rows > 0) {

        ?>
                <div class="flex flex-col mt-12 gap-4 px-2 " id="dept_act_div">
                    <?php

                    if ($result3->num_rows > 0) {
                        $current_num_row = 1;
                        // $anim_delay = 0;
                        while ($row3 = $result3->fetch_assoc()) {
                            if ($current_num_row < $result3->num_rows) {

                    ?>

                                <div class=" flex flex-col items-center px-8 pb-8 dept_act rounded-2xl" >
                                    <p class="text-xl font-bold text-left w-full"><?php echo $row3['dept_act_title'] ?></p>
                                    <p class="dark:text-gray-400 w-full text-left"><?php echo $row3['dept_act_desc'] ?>
                                    </p>

                                    <hr class="w-full mt-2 border-gray-500 h-[1px]">
                                </div>

                            <?php
                            } else {
                            ?>
                                <div class=" flex flex-col items-center px-8 pb-8 dept_act" style="animation-delay:<?php echo $anim_delay ?>ms">
                                    <p class="text-xl font-bold text-left w-full"><?php echo $row3['dept_act_title'] ?></p>
                                    <p class="dark:text-gray-400 w-full text-left"><?php echo $row3['dept_act_desc'] ?>
                                    </p>


                                </div>

                        <?php
                            }
                            $current_num_row++;
                            $anim_delay += 500;
                        }
                        ?>


                </div>

    <?php
                    }
                } else {
                    echo "<div class='flex justify-center items-center' data-aos='fade-up'><p> No activites present.</p></div>";
                }
            } else {
                echo "<div class='flex justify-center items-center' data-aos='fade-up'><p> No activities present.</p></div>";
            }

    ?>

    </div>
    <?php include('../../Layouts/footer.php'); ?>
    <?php include('../../../library/AOS.php'); ?>
    <script src="../../../js/showMoreItems.min.js"></script>
    <script src="../../../js/common/header_2.js"></script>
    <!--lottie animation player-->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <script src="../../../js/academics_tab/specific_department.js" type="module">

    </script>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>