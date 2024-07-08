<?php
include("../../../config/connect.php");
include("../../../php/common_functions.php");

$fetch_all_stmt = "SELECT * FROM cp_has_tenure, college_personnel,tenure WHERE cp_has_tenure.cp_id=college_personnel.cp_id AND cp_has_tenure.tenure_id=tenure.tenure_id ORDER BY tenure.tenure_start_date ASC, tenure.tenure_end_date DESC;";
$fetch_query = $conn->prepare($fetch_all_stmt);
$fetch_query->execute();
$result = $fetch_query->get_result();

// $all_members = [];
$principals_array = [];
$vice_principals_degree_array = [];
$vice_principals_junior_array = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        //echo $row["role"];
        switch ($row["role"]) {
            case "p":
                //array_push($principals_array, $row);

                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('F Y');

                $principals_array[$year1] ??= array();

                $row["role_fullform"] = "Principal";
                $row["bg_color"] = "bg-gradient-to-br from-blue-100 to-blue-50 ";
                $row["title_color"] = "text-blue-800";
                $row["card_type"] = "p_card";
                //$role_shortform="p";
                array_push($principals_array[$year1], $row);

                break;
            case "vpd":
                //array_push($all_members, $row);
                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('F Y');

                $vice_principals_degree_array[$year1] ??= array();

                $row["role_fullform"] = "Vice Principal (Degree College)";
                $row["bg_color"] = "bg-gradient-to-br from-indigo-100 to-indigo-50 dark:bg-gray-800 ";
                $row["title_color"] =  "text-indigo-800";
                $row["card_type"] = "vpd_card";
                //$role_shortform = "vpd";
                array_push($vice_principals_degree_array[$year1], $row);
                break;
            case "vpj":
                //array_push($all_members, $row);
                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('F Y');

                $vice_principals_junior_array[$year1] ??= array();

                $row["role_fullform"] = "Vice Principal (Junior College)";
                $row["bg_color"] =  "bg-gradient-to-br from-sky-100 to-sky-50 ";
                $row["title_color"] = "text-sky-500";
                $row["card_type"] = "vpj_card";
                array_push($vice_principals_junior_array[$year1], $row);
                //$role_shortform = "vpj";
                break;


            default:
                // $role = "";
                // $role_shortform = "";
                // $bg_color = "";
                // $title_color = "";
                // $card_type = "";
                break;
        }
    }
}

// if ($result) {
//     while ($row = $result->fetch_assoc()) {

//         //array_push($all_members, $row);
//         $start_date = new DateTime($row["tenure_start_date"]);
//         $year1 = $start_date->format('F Y');

//         $all_members[$year1] ??= array();
//         array_push($all_members[$year1], $row);
//     }
//     // print_r($all_members);

//     //echo count($all_members);
// } 
else {
    echo "<script>console.log('fetch error'" . $conn->error . ")";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE|Legacy</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <?php include('../../../library/library.php'); ?>

    <style>
        .inactive_year {
            -webkit-text-stroke: 2px black;
            color: transparent;
            opacity: 0.75;
        }

        @media (prefers-color-scheme: dark) {
            .dark\:inactive_year {
                -webkit-text-stroke: 2px white;
                color: transparent;
                opacity: 0.75;
            }

            .dark\:fill_upward_arrow {
                fill: black !important;
            }
        }

        .fill_upward_arrow {
            fill: white;
        }
    </style>
</head>

<body class="bg-white dark:bg-black dark:text-white ">
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


    <div>
        <!--BACKGROUND IMAGE DIV-->
        <div class="h-[100vh] w-[100vw] fixed top-0 left-0 -z-10" id="bg_fixed_image_div">
            <img src="https://vazecollege.net/wp-content/uploads/2016/03/independance-day-370x296.jpg" loading="lazy" class="w-full h-full  opacity-80 brightness-50">
        </div>

        <button class="fixed bottom-4 right-4 rounded-full h-10 w-10 z-10 sm:h-12 sm:w-12 lg:w-20 lg:h-20  invisible text-center bg-black dark:bg-white dark:text-black  shadow-2xl dark:shadow-none" id="scroll_to_top_btn">
            <svg class="w-full h-8 sm:h-10 lg:h-12 fill_upward_arrow dark:fill_upward_arrow" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px">
                <path d="M446.67-160v-513l-240 240L160-480l320-320 320 320-46.67 47-240-240v513h-66.66Z" />
            </svg>
        </button>
    </div>


    <!--MAIN CONTENTS DIV-->
    <div class="flex flex-col w-full h-full">

        <div class="font-['Playfair_Display'] px-8 text-[2rem] md:text-[4rem] lg:text-[5rem] max-w-[60%] text-white h-[100vh] div_before_p_timeline">
            A TIMELINE OF OUR COLLEGE LEADERSHIP HISTORY AND LEGACY
        </div>

        <!--Breadcrumbs-->

        <!--Display options-->
        <!--DISPLAY OPTIONS SELECTOR DIV start-->
        
        <div class="flex sm:flex-row sm:flex-wrap flex-col space-y-4 sm:space-y-0 bg-white dark:bg-black p-8 div_before_p_timeline">
            <div class="flex-col flex-1">
                <div class=" font-['Playfair_Display'] dark:text-white lg:text-[2rem]">IMPARTING EDUCATION FOR NEARLY 40 YEARS AND BEYOND</div>
                <div class="dark:text-white mt-4 lg:text-lg">Did you know? We were the first college in entire Maharashtra to be accredited by NAAC with an "A" grade in the First Cycle. Here are the leaders that have been monumental in many more such achievements </div>
            </div>
            <div class="flex-1">
                <ul class="list-none w-inherit sm:w-full dark:text-white " id="display_options_ul">
                    <!-- <li class=" sm:text-[1.5rem]  transition-[font] cursor-pointer" id="opt_1">All our Leaders</li>
                        <hr class="border-gray-600 " /> -->
                    <li id="opt_2" class=" sm:text-[1.5rem] transition-[font] mt-4 cursor-pointer">Principals</li>
                    <hr class="border-gray-600 " />
                    <li id="opt_3" class=" sm:text-[1.5rem] transition-[font] mt-4 cursor-pointer">Vice-principals (Degree College )</li>
                    <hr class="border-gray-600 " />
                    <li id="opt_4" class=" sm:text-[1.5rem] transition-[font] mt-4 cursor-pointer">Vice-principals (Junior College)</li>
                    <hr class="border-gray-600 " />
                </ul>
            </div>
            
            

        </div>
        
        <!--DISPLAY OPTIONS SELECTOR DIV end-->

        <?php
        $all_members_array = array($principals_array, $vice_principals_degree_array, $vice_principals_junior_array);

        foreach ($all_members_array as $index => $current_member_array) {
            if ($index == 0) {
                $section_name = "Principals";
                $member_div_id = "p";
                $next_member_div_id = "vpd";
            } else if ($index == 1) {
                $section_name = "Vice Principals (Degree College)";
                $member_div_id = "vpd";
                $next_member_div_id = "vpj";
            } else {
                $section_name = "Vice Principals (Junior College)";
                $member_div_id = "vpj";
                $next_member_div_id = "";
            }

        ?>
            <!--div to add space-->
            <div class=" w-full h-[10vh] lg:h-[20vh] bg-white dark:bg-black <?php echo "div_before_" . $member_div_id . "_timeline" ?>"></div>


            <div class="flex  items-center flex-col w-full  bg-white dark:bg-black <?php echo "div_before_" . $next_member_div_id . "_timeline" ?>">
                <!--div to add space-->
                <!-- <div class="h-[10vh] lg:h-[20vh]"></div> -->

                <div class="w-[75%] font-['Playfair_Display'] text-[2rem] lg:text-[4rem] border-y-4 dark:border-white border-black dark:text-white text-center"><?php echo $section_name ?></div>
                <!--ALL MEMBERS DIV start-->
                <div class="flex flex-1 flex-col mt-16 lg:mt-24 items-center relative" id="<?php echo $member_div_id . "_members_div"; ?>">

                    <?php
                    for ($index = 0; $index < count($current_member_array); $index++) {
                        $year_month_key = (array_keys($current_member_array))[$index];
                        $role = $current_member_array[$year_month_key][0]["role"];

                        if ($index % 2 == 0) {
                            $arrangement_flex_direction = "flex-row";
                            $arrangement_justify_contents = "items-start";
                            $data_aos_animation = "fade-up";
                        } else {
                            $arrangement_flex_direction = "flex-row-reverse";
                            $arrangement_justify_contents = "items-end";
                            $data_aos_animation = "fade-up";
                        }
                        if ($index == 0) {

                    ?>
                            <div class="flex w-full px-4 pt-4 gap-4 <?php echo $arrangement_flex_direction ?>">
                                <div class="-mt-4 font-['Playfair_Display'] flex-1 text-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] <?php echo $role . "_year_text_div" ?>  transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>

                                <!-- timeline element-->
                                <div class="flex flex-col items-center  ">
                                    <div class="rounded-full w-8 h-8  bg-black dark:bg-white flex justify-center items-center <?php echo $role . "_timeline_circle" ?> ">

                                        <div class="rounded-full w-6 h-6 bg-white"></div>
                                    </div>

                                    <div class="flex-1  relative">
                                        <div class=" h-[100%] w-2 opacity-30 bg-black dark:bg-white ease-linear transition-all "></div>
                                        <div class="-z-10 absolute max-h-[100%] top-0 left-0 h-[0%] w-2 <?php echo $role . "_timeline_line" ?>"></div>
                                    </div>
                                </div>

                                <!--card container div-->


                                <div class="flex flex-col flex-1 gap-8 mb-12 <?php echo $role . "_card_container_div" ?>  transition-opacity duration-500 <?php echo $arrangement_justify_contents; ?>">

                                    <?php

                                    foreach ($current_member_array[$year_month_key] as $member) {

                                    ?>


                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border shadow-2xl  dark:shadow-none dark:bg-gray-800  dark:bg-none dark:border-none <?php echo $member["bg_color"];echo $member["card_type"]; ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $member["title_color"]; ?>"><?php echo $member["role_fullform"]; ?>
                                                </div>

                                                <div class="text-sm  mt-3  sm:mt-8 font-bold dark:text-white">Tenure</div>
                                                <div class="text-slate-700 text-xs sm:text-sm dark:text-white">
                                                    <?php
                                                    echo (new DateTime($member["tenure_start_date"]))->format('F j, Y') . " - ";
                                                    if ($member["tenure_end_date"]) {
                                                        echo (new DateTime($member["tenure_end_date"]))->format('F j, Y');
                                                    } else {
                                                        echo "today";
                                                    }

                                                    ?>
                                                </div>
                                            </div>

                                        </div>

                                    <?php
                                    }
                                    ?>
                                </div>


                            </div>

                        <?php

                        } else if ($index == count($current_member_array) - 1) {

                        ?>

                            <div class="flex w-full px-4 gap-4 <?php echo $arrangement_flex_direction ?> ">
                                <!--w-[33%]-->
                                <div class="-mt-4 font-['Playfair_Display'] flex-1 ext-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] <?php echo $role . "_year_text_div" ?> opacity-30 transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>
                                <!--ending timeline element-->
                                <div class="flex flex-col items-center ">
                                    <div class="h-10 relative">
                                        <div class="h-[100%] w-2 opacity-30  bg-black  dark:bg-white transition-all"></div>
                                        <div class="absolute top-0 left-0 h-[0%] <?php echo $role . "_timeline_line" ?> w-2"></div>
                                    </div>
                                    <div class="rounded-full w-8 h-8  bg-black dark:bg-white flex justify-center items-center <?php echo $role . "_timeline_circle" ?>  opacity-30 transition-opacity ">
                                        <div class="rounded-full w-6 h-6  bg-white ">
                                        </div>
                                    </div>
                                </div>

                                <!--card container div-->
                                <div class="flex flex-1  flex-col space-y-4 sm:space-y-0 mb-16 flex-wrap gap-8 <?php echo $role . "_card_container_div" ?> opacity-30 transition-opacity duration-500 <?php echo $arrangement_justify_contents; ?>">
                                    <?php

                                    foreach ($current_member_array[$year_month_key] as $member) {

                                    ?>
                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border bg-white shadow-2xl  dark:shadow-none dark:bg-gray-800 dark:border-none dark:bg-none <?php echo $member["bg_color"];echo $member["card_type"]; ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $member["title_color"]; ?>"><?php echo $member["role_fullform"]; ?>
                                                </div>

                                                <div class="text-sm  mt-3  sm:mt-8 font-bold dark:text-white">Tenure</div>
                                                <div class="text-slate-700 text-xs sm:text-sm dark:text-white">
                                                    <?php
                                                    echo (new DateTime($member["tenure_start_date"]))->format('F j, Y') . " - ";
                                                    if ($member["tenure_end_date"]) {
                                                        echo (new DateTime($member["tenure_end_date"]))->format('F j, Y');
                                                    } else {
                                                        echo "today";
                                                    }

                                                    ?>
                                                </div>
                                            </div>

                                        </div>



                                    <?php
                                    }
                                    ?>

                                </div>

                            </div>

                        <?php

                        } else {
                            //middle element
                        ?>
                            <div class="flex w-full px-4 gap-4 relative <?php echo $arrangement_flex_direction ?>">

                                <div class=" -mt-4 font-['Playfair_Display'] flex-1 text-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] <?php echo $role . "_year_text_div" ?> opacity-30 transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>

                                <!--middle timeline element-->
                                <div class="flex flex-col items-center ">
                                    <!-- <div class="h-10  relative">
                                        <div class=" w-2 opacity-30 transition-all bg-black h-[100%] dark:bg-white"></div>
                                        <div class="absolute top-0 left-0 h-[0%] timeline_line w-2 "></div>
                                    </div> -->
                                    <div class="rounded-full opacity-30 transition-opacity <?php echo $role . "_timeline_circle" ?>  w-8 h-8 bg-black dark:bg-white flex justify-center items-center">
                                        <div class="rounded-full w-6 h-6 bg-white ">
                                        </div>
                                    </div>
                                    <div class="flex-1  relative">
                                        <div class="h-[100%] w-2 opacity-30 bg-black dark:bg-white transition-all "></div>
                                        <div class="absolute top-0 left-0 h-[0%] <?php echo $role . "_timeline_line" ?>  w-2"></div>
                                    </div>
                                </div>

                                <!--card container div-->
                                <div class="flex flex-1 flex-col  space-y-4 sm:space-y-0 flex-wrap mb-16 gap-8 <?php echo $role . "_card_container_div" ?> opacity-30 transition-opacity duration-500 <?php echo $arrangement_justify_contents; ?>">
                                    <?php

                                    foreach ($current_member_array[$year_month_key] as $member) {

                                    ?>

                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border bg-white shadow-2xl  dark:shadow-none dark:bg-gray-800 dark:border-none dark:bg-none <?php echo $member["bg_color"];echo $member["card_type"]; ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $member["title_color"]; ?>"><?php echo $member["role_fullform"]; ?>
                                                </div>

                                                <div class="text-sm  mt-3  sm:mt-8 font-bold dark:text-white">Tenure</div>
                                                <div class="text-slate-700 text-xs sm:text-sm dark:text-white">
                                                    <?php
                                                    echo (new DateTime($member["tenure_start_date"]))->format('F j, Y') . " - ";
                                                    if ($member["tenure_end_date"]) {
                                                        echo (new DateTime($member["tenure_end_date"]))->format('F j, Y');
                                                    } else {
                                                        echo "today";
                                                    }

                                                    ?>
                                                </div>
                                            </div>

                                        </div>

                                    <?php
                                    }

                                    ?>

                                </div>

                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
            <!-- ALL MEMBERS DIV end-->

        <?php
        }
        ?>



        <!--
            /***************
            FOOTER
            ****************/
            -->
        <?php include('../../Layouts/footer.php'); 
        ?>
    </div>
    </div>

    <script src="../../../js/about_us_tab/legacy.js"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>