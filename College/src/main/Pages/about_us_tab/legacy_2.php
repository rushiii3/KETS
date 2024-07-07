<?php
include("../../../config/connect.php");
//include("../../../php/common_functions.php");

$fetch_all_stmt = "SELECT * FROM cp_has_tenure, college_personnel,tenure WHERE cp_has_tenure.cp_id=college_personnel.cp_id AND cp_has_tenure.tenure_id=tenure.tenure_id ORDER BY tenure.tenure_start_date ASC, tenure.tenure_end_date DESC;";


$fetch_query = $conn->prepare($fetch_all_stmt);
$fetch_query->execute();
$result = $fetch_query->get_result();

$all_members = [];

$all_members_tenure_years = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {

        //array_push($all_members, $row);
        $start_date = new DateTime($row["tenure_start_date"]);
        $year1 = $start_date->format('F Y');

        $all_members[$year1] ??= array();
        array_push($all_members[$year1], $row);
    }
    // print_r($all_members);

    //echo count($all_members);
} else {
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
        }

        @media (min-width: 648px) {}
    </style>
</head>

<body class="bg-white dark:bg-black ">
    <!--
    /***************
    NAVBAR 
    ****************/
    -->
    <?php include('../../Layouts/header2.php'); ?>

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
        <!-- https://images.unsplash.com/photo-1543438407-2a26e00f178e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTF8fHdoaXRlJTIwYmFja2dyb3VuZCUyMHdpdGglMjBsb2dvfGVufDB8MHwwfHx8MA%3D%3D -->

        <!--MAIN CONTENTS DIV-->
        <div class="flex flex-col w-full h-full">

            <div class="font-['Playfair_Display'] px-8 sm:text-[2rem] md:text-[4rem] lg:text-[5rem] max-w-[60%] text-white h-[100vh] div_before_timeline">
                A TIMELINE OF OUR COLLEGE LEADERSHIP HISTORY AND LEGACY
            </div>

            <!--Breadcrumbs-->

            <!--Display options-->
            <!--DISPLAY OPTIONS SELECTOR DIV start-->
            <div class="flex sm:flex-row flex-col space-y-4 sm:space-y-0 bg-white dark:bg-black p-8 div_before_timeline">
                <div class="flex-col flex-1">
                    <div class=" font-['Playfair_Display'] dark:text-white lg:text-[2rem]">IMPARTING EDUCATION FOR NEARLY 40 YEARS AND BEYOND</div>
                    <div class="dark:text-white mt-4 lg:text-lg">Did you know? We were the first college in entire Maharashtra to be accredited by NAAC with an "A" grade in the First Cycle. Here are the leaders that have been monumental in many more such achievements </div>
                </div>
                <div class="flex-1">
                    <ul class="list-none w-inherit sm:w-full dark:text-white " id="display_options_ul">
                        <li class=" sm:text-[1.5rem]  transition-[font]" id="opt_1">All our Leaders</li>
                        <hr class="border-gray-600 " />
                        <li id="opt_2" class=" sm:text-[1.5rem] transition-[font] mt-4">Principals</li>
                        <hr class="border-gray-600 " />
                        <li id="opt_3" class=" sm:text-[1.5rem] transition-[font] mt-4">Vice-principals (Junior College)</li>
                        <hr class="border-gray-600 " />
                        <li id="opt_4" class=" sm:text-[1.5rem] transition-[font] mt-4">Vice-principals (Degree College )</li>
                        <hr class="border-gray-600 " />
                    </ul>
                </div>


                <!--DISPLAY OPTIONS SELECTOR DIV end-->
            </div>

            <div class="flex w-full  bg-white dark:bg-black">
                <!--ALL MEMBERS DIV start-->
                <div class="flex flex-1 flex-col items-center relative" id="all_members_div">

                    <?php
                    for ($index = 0; $index < count($all_members); $index++) {
                        $year_month_key = (array_keys($all_members))[$index];

                        if ($index % 2 == 0) {
                            $arrangement_flex_direction = "flex-row";
                            $arrangement_justify_contents = "items-start";
                            $data_aos_animation = "fade-left";
                        } else {
                            $arrangement_flex_direction = "flex-row-reverse";
                            $arrangement_justify_contents = "items-end";
                            $data_aos_animation = "fade-right";
                        }
                        if ($index == 0) {
                    ?>
                            <div class="flex w-full px-4 pt-4 gap-4 <?php echo $arrangement_flex_direction ?>">
                                <div class="-mt-4 font-['Playfair_Display'] flex-1 text-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] year_text_div  transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>

                                <!-- timeline element-->
                                <div class="flex flex-col items-center  ">
                                    <div class="rounded-full w-8 h-8  bg-black dark:bg-white flex justify-center items-center timeline_circle ">
                                        <div class="rounded-full w-6 h-6 bg-white"></div>
                                    </div>

                                    <div class="flex-1  relative">
                                        <div class=" h-[100%] w-2 opacity-30 bg-black dark:bg-white ease-linear transition-all "></div>
                                        <div class="-z-10 absolute max-h-[100%] top-0 left-0 h-[0%] timeline_line  w-2"></div>
                                    </div>
                                </div>

                                <!--card container div-->
                                <div class="flex flex-col flex-1 flex-wrap gap-8 mb-12 card_container_div transition-opacity duration-500 <?php echo $arrangement_justify_contents;?>">
                                    <?php

                                    foreach ($all_members[$year_month_key] as $member) {

                                        $role = "";
                                        $bg_color = "";
                                        $title_color = "";
                                        switch ($member["role"]) {
                                            case "p":
                                                $role = "Principal";
                                                $bg_color = "bg-gradient-to-br from-blue-100 to-blue-50 ";
                                                $title_color = "text-blue-800";
                                                break;
                                            case "vpd":
                                                $role = "Vice Principal (Degree)";
                                                $bg_color = "bg-gradient-to-br from-indigo-100 to-indigo-50 dark:bg-gray-800 ";
                                                $title_color = "text-indigo-800";
                                                break;
                                            case "vpj":
                                                $role = "Vice Principal (Junior)";
                                                $bg_color = "bg-gradient-to-br from-sky-100 to-sky-50 ";
                                                $title_color = "text-sky-500";
                                                break;
                                        }

                                    ?>
                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border shadow-2xl  dark:shadow-none dark:bg-gray-800  dark:bg-none dark:border-none <?php echo $bg_color ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $title_color; ?>"><?php echo $role; ?>
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

                                <!--
                                <div class=" flex-1"></div>
                                -->
                            </div>

                        <?php
                        } else if ($index == count($all_members) - 1) {

                        ?>

                            <div class="flex w-full px-4 gap-4 <?php echo $arrangement_flex_direction ?> ">
                                <!--w-[33%]-->
                                <div class="-mt-4 font-['Playfair_Display'] flex-1 ext-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] year_text_div opacity-30 transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>
                                <!--ending timeline element-->
                                <div class="flex flex-col items-center ">
                                    <div class="h-10 relative">
                                        <div class="h-[100%] w-2 opacity-30  bg-black  dark:bg-white transition-all"></div>
                                        <div class="absolute top-0 left-0 h-[0%] timeline_line w-2"></div>
                                    </div>
                                    <div class="rounded-full w-8 h-8  bg-black dark:bg-white flex justify-center items-center timeline_circle opacity-30 transition-opacity ">
                                        <div class="rounded-full w-6 h-6  bg-white ">
                                        </div>
                                    </div>
                                </div>

                                <!--card container div-->
                                <div class="flex flex-1  flex-col space-y-4 sm:space-y-0 mb-16 flex-wrap gap-8 card_container_div opacity-30 transition-opacity duration-500 <?php echo $arrangement_justify_contents;?>">
                                    <?php

                                    foreach ($all_members[$year_month_key] as $member) {

                                        $role = "";
                                        $bg_color = "";
                                        $title_color = "";
                                        switch ($member["role"]) {
                                            case "p":
                                                $role = "Principal";
                                                $bg_color = "bg-gradient-to-br from-blue-100 to-blue-50 ";
                                                $title_color = "text-blue-800";
                                                break;
                                            case "vpd":
                                                $role = "Vice Principal (Degree)";
                                                $bg_color = "bg-gradient-to-br from-indigo-100 to-indigo-50 ";
                                                $title_color = "text-indigo-800";
                                                break;
                                            case "vpj":
                                                $role = "Vice Principal (Junior)";
                                                $bg_color = "bg-gradient-to-br from-sky-100 to-sky-50 ";
                                                $title_color = "text-sky-500";
                                                break;
                                        }

                                    ?>
                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border bg-white shadow-2xl  dark:shadow-none dark:bg-gray-800 dark:border-none dark:bg-none <?php echo $bg_color ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $title_color; ?>"><?php echo $role; ?>
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
                                <!--
                                <div class=" flex-1"></div>
                                -->
                            </div>

                        <?php

                        } else {
                            //middle element
                        ?>
                            <div class="flex w-full px-4 gap-4 relative <?php echo $arrangement_flex_direction ?>">

                                <div class=" -mt-4 font-['Playfair_Display'] flex-1 text-[1.1rem]  md:text-[2.5rem] lg:text-[5rem] year_text_div opacity-30 transition-all duration-500 dark:text-white"><?php echo $year_month_key; ?></div>

                                <!--middle timeline element-->
                                <div class="flex flex-col h-full items-center ">
                                    <!-- <div class="h-10  relative">
                                        <div class=" w-2 opacity-30 transition-all bg-black h-[100%] dark:bg-white"></div>
                                        <div class="absolute top-0 left-0 h-[0%] timeline_line w-2 "></div>
                                    </div> -->
                                    <div class="rounded-full opacity-30 transition-opacity timeline_circle w-8 h-8 bg-black dark:bg-white flex justify-center items-center">
                                        <div class="rounded-full w-6 h-6 bg-white ">
                                        </div>
                                    </div>
                                    <div class="flex-1 relative">
                                        <div class="h-[100%] w-2 opacity-30 bg-black dark:bg-white transition-all "></div>
                                        <div class="absolute top-0 left-0 h-[0%] timeline_line  w-2"></div>
                                    </div>
                                </div>

                                <!--card container div-->
                                <div class="flex flex-1 flex-col  space-y-4 sm:space-y-0 flex-wrap mb-16 gap-8 card_container_div opacity-30 transition-opacity duration-500 <?php echo $arrangement_justify_contents;?>">
                                    <?php

                                    foreach ($all_members[$year_month_key] as $member) {

                                        $role = "";
                                        $bg_color = "";
                                        $title_color = "";
                                        switch ($member["role"]) {
                                            case "p":
                                                $role = "Principal";
                                                $bg_color = "bg-gradient-to-br from-blue-100 to-blue-50 ";
                                                $title_color = "text-blue-800";
                                                break;
                                            case "vpd":
                                                $role = "Vice Principal (Degree)";
                                                $bg_color = "bg-gradient-to-br from-indigo-100 to-indigo-50 ";
                                                $title_color = "text-indigo-800";
                                                break;
                                            case "vpj":
                                                $role = "Vice Principal (Junior)";
                                                $bg_color = "bg-gradient-to-br from-sky-100 to-sky-50 ";
                                                $title_color = "text-sky-500";
                                                break;
                                        }

                                    ?>

                                        <!--card element-->
                                        <div class="flex flex-col sm:flex-row p-4 w-fit gap-4 rounded-2xl border bg-white shadow-2xl  dark:shadow-none dark:bg-gray-800 dark:border-none dark:bg-none <?php echo $bg_color ?>" data-aos="<?php echo $data_aos_animation ?>">

                                            <img class="aspect-square rounded-2xl sm:w-[40%] sm:max-w-[16rem] -z-10 " src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class="flex w-fit flex-col mt-0 sm:mt-4">
                                                <div class="text-sm font-bold sm:text-xl dark:text-white text-center sm:text-left"><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?>
                                                </div>
                                                <div class="text-blue-500 text-xs text-center sm:text-base sm:text-left dark:text-emerald-500 <?php echo $title_color; ?>"><?php echo $role; ?>
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

                                        <!-- <div class="sm:max-w-[18rem]  flex sm:flex-1 flex-col items-center relative shadow-2xl rounded-xl overflow-clip" data-aos="fade-left">
                                            <img class="mx-auto aspect-[3/4] -z-10 h-full object-fit" src="<?php echo $member["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740"; ?>" loading="lazy" />

                                            <div class=" bg-black flex flex-col w-full  p-4 text-center">
                                                <h4 class=" text-[1rem] sm:text-2xl text-white  "><?php echo $member["cp_honourific"] . " " . $member["cp_name"]; ?></h4>
                                                <span class="block text-[0.8rem] sm:text-lg text-white"><?php echo $role; ?></span>
                                                <span class="block text-[0.6rem] sm:text-lg text-white">
                                                    <?php
                                                    echo (new DateTime($member["tenure_start_date"]))->format('F j, Y') . " - ";
                                                    if ($member["tenure_end_date"]) {
                                                        echo (new DateTime($member["tenure_end_date"]))->format('F j, Y');
                                                    } else {
                                                        echo "today";
                                                    }

                                                    ?>
                                                </span>
                                            </div>

                                        </div> -->

                                    <?php
                                    }
                                    ?>

                                </div>
                                <!--
                                <div class=" flex-1"></div>
                                -->
                            </div>

                    <?php
                        }
                    }
                    ?>

                </div>
                <!-- ALL MEMBERS DIV end-->



            </div>
            <!--
            /***************
            FOOTER
            ****************/
            -->
            <?php include('../../Layouts/footer.php'); ?>
        </div>

    </div>


    <script src="../../../js/about_us_tab/legacy.js"></script>
    <script type="text/javascript">
        //let first_line = document.getElementById("first_line");
        //animate timeline on scroll
        let previous_percent_scrolled_map = {}
        let number_of_timeline_lines = $(".timeline_line").length
        $(".timeline_line").each((index, value) => {
            previous_percent_scrolled_map[index] = 0;

        })
        let number_of_timeline_circles = $(".timeline_circle").length


        let bg_fixed_image_height = document.getElementById("bg_fixed_image_div").offsetHeight;
        let height_of_divs_before_timeline = 0

        document.querySelectorAll(".div_before_timeline").forEach((div) => {
            height_of_divs_before_timeline += div.offsetHeight;
        })

        let all_members_div = document.getElementById("all_members_div");
        //console.log(`height of divs before timeline is:${height_of_divs_before_timeline} `)


        window.onscroll = function() {
            let percent_scrolled = ((window.scrollY - height_of_divs_before_timeline) / all_members_div.scrollHeight) * 100
            //window.scrollY - height_of_divs_before_timeline
            //console.log(`Document scroll height: ${document.body.scrollHeight}`)
            console.log(`percent scrolled is:${percent_scrolled}`)

            if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight) {
                percent_scrolled = Math.round(percent_scrolled + 50)
            }



            redrawTimeline(percent_scrolled > 0 ? percent_scrolled : 0)


            /* $(".timeline_circle").each((index, circle) => {
            //console.log("here"+line
            circle.classList.replace(`opacity-0`, `opacity-100`)
            //console.log("after 2 seconds waiting")


        })
        */
        }

        function redrawTimeline(percent_scrolled) {
            //1024-40
            //1440-36
            //mobile-70
            //tab-44
            let amount_scrolled_to_fill_a_timeline_line = 6
            let number_of_lines_hundred_percent = Math.floor(percent_scrolled / amount_scrolled_to_fill_a_timeline_line);
            let max_permissible_scroll_percent = number_of_timeline_lines * amount_scrolled_to_fill_a_timeline_line;

            //let max_scroll_extent=

            if (percent_scrolled > max_permissible_scroll_percent) {
                percent_scrolled = max_permissible_scroll_percent
            }
            //else if(percent_scrolled==)
            if (number_of_lines_hundred_percent > number_of_timeline_lines) {
                number_of_lines_hundred_percent = number_of_timeline_lines
            }

            //console.log("Number of lines hundred percent: " + number_of_lines_hundred_percent + " \npercent scrolled: " + percent_scrolled)

            for (let i = 0; i < number_of_lines_hundred_percent; i++) {
                previous_percent_scrolled_map[i] = 100;

                //console.log("hundred index:" + i)

                if ((i + 1) < number_of_timeline_circles) {
                    $(".timeline_circle")[i + 1].classList.replace("opacity-30", "opacity-100")
                    $(".card_container_div")[i + 1].classList.replace("opacity-30", "opacity-100")
                    $(".year_text_div")[i + 1].classList.replace("opacity-30", "opacity-100")
                }
                if (i != number_of_timeline_lines - 1) {
                    $(".year_text_div")[i].classList.replace("lg:text-[6rem]", "lg:text-[5rem]")
                    $(".year_text_div")[i].classList.replace("text-[1.5rem]", "text-[1.1rem]")
                    $(".year_text_div")[i].classList.replace("md:text-[3rem]", "md:text-[2.5rem]")

                }



                // if ((i + 1) % 2 == 0) {
                //     //console.log("hi")
                //     $(".timeline_circle")[(i + 1) / 2].classList.replace("opacity-30", "opacity-100")
                // } else if (i < number_of_timeline_circles) {
                //     if (i == 0) {
                //         $(".timeline_circle")[1].classList.replace("opacity-100", "opacity-30")
                //     } else {
                //         $(".timeline_circle")[i].classList.replace("opacity-100", "opacity-30")

                //     }
                // }
            }

            if (number_of_lines_hundred_percent < number_of_timeline_lines) {
                previous_percent_scrolled_map[number_of_lines_hundred_percent] = ((percent_scrolled - (number_of_lines_hundred_percent * amount_scrolled_to_fill_a_timeline_line)) / amount_scrolled_to_fill_a_timeline_line) * 100
                $(".year_text_div")[number_of_lines_hundred_percent].classList.replace("lg:text-[5rem]", "lg:text-[6rem]")
                $(".year_text_div")[number_of_lines_hundred_percent].classList.replace("text-[1.1rem]", "text-[1.5rem]")
                $(".year_text_div")[number_of_lines_hundred_percent].classList.replace("md:text-[2.5rem]", "md:text-[3rem]")
            }

            for (let i = number_of_lines_hundred_percent + 1; i < number_of_timeline_lines; i++) {
                //console.log("here")
                //console.log((number_of_lines_hundred_percent+1 ) < number_of_timeline_lines)
                previous_percent_scrolled_map[i] = 0;

                if ((i) < number_of_timeline_circles) {
                    $(".timeline_circle")[i].classList.replace("opacity-100", "opacity-30")
                    $(".card_container_div")[i].classList.replace("opacity-100", "opacity-30")
                    $(".year_text_div")[i].classList.replace("opacity-100", "opacity-30")
                    $(".year_text_div")[i].classList.replace("lg:text-[6rem]", "lg:text-[5rem]")
                    $(".year_text_div")[i].classList.replace("text-[1.5rem]", "text-[1.1rem]")
                    $(".year_text_div")[i].classList.replace("md:text-[3rem]", "md:text-[2.5rem]")
                }


            }

            //console.log(previous_percent_scrolled_map)


            //console.log(previous_percent_scrolled_map)
            $(".timeline_line").each((index, value) => {

                let div = document.createElement("div");
                //console.log(index)

                if (index < number_of_timeline_lines - 1 && previous_percent_scrolled_map[index + 1] != 0) {
                    div.classList.add("absolute", "top-0", "left-0", `h-[${previous_percent_scrolled_map[index]}%]`, "timeline_line", "w-2", "bg-blue-800")
                } else if (previous_percent_scrolled_map[index] <= 100) {
                    div.classList.add("absolute", "top-0", "left-0", `h-[${previous_percent_scrolled_map[index]}%]`, "timeline_line", "bg-gradient-to-b", "w-2", "from-blue-800", "to-emerald-500", "via-blue-500", "via-60%")
                }
                /*
                else{
                    div.classList.add("absolute", "top-0", "left-0", `h-[${previous_percent_scrolled_map[index]}%]`, "timeline_line", "bg-blue-800")

                }
                */

                let parentNode = value.parentNode;
                parentNode.removeChild(value)
                parentNode.appendChild(div)

            })

        }

        bg_images_array = [, "https://vazecollege.net/wp-content/uploads/2016/03/independance-day-370x296.jpg", "https://vazecollege.net/wp-content/uploads/2016/03/college-4-370x296.jpg", "https://vazecollege.net/wp-content/uploads/2016/03/college-7-370x296.jpg", "https://vazecollege.net/wp-content/uploads/2016/03/clg10-1-370x296.jpg", "https://vazecollege.net/wp-content/uploads/2016/03/clg10-370x296.jpg", "https://vazecollege.net/wp-content/uploads/2016/03/clg8-370x296.jpg"];



        // $("#display_options_ul li").each((index, value) => {

        //     value.addEventListener("click", function() {

        //         //text-blue-500  sm:text-xl font-bold
        //         value.classList.add("font-bold", "text-blue-500", "sm:text-xl")

        //         $("#display_options_ul li").each((index2, value2) => {
        //             if (value2 != value && value.classList.contains("font-bold") && value.classList.contains("text-blue-500") && value.classList.contains("sm:text-xl")) {
        //                 value2.classList.remove("font-bold", "text-blue-500", "sm:text-xl")

        //             }
        //         })

        //     })
        // })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>