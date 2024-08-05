<?php
include("../../../config/connect.php");
include("../../Components/vaze_kelkar_logo_base64.php");

$fetch_college_committees_stmt = "SELECT * FROM college_personnel 
join cp_is_part_of_committee on college_personnel.cp_id=cp_is_part_of_committee.cp_id
join committee_belongs_to_clg_section on committee_belongs_to_clg_section.committee_clg_section_id=cp_is_part_of_committee.committee_sec_id
join committee_and_activity_groups on committee_and_activity_groups.committee_id=committee_belongs_to_clg_section.committee_id
where committee_belongs_to_clg_section.college_sec_name='m';";

$fetch_college_committees_query = $conn->prepare($fetch_college_committees_stmt);
$fetch_college_committees_query->execute();
$fetch_college_committees_query_result = $fetch_college_committees_query->get_result();

$cm = [];
$cec = [];
$ca = [];
$cdc = [];
$sc = [];
if ($fetch_college_committees_query_result) {
    while ($row = $fetch_college_committees_query_result->fetch_assoc()) {
        switch (strtolower(trim($row["committee_name"]))) {
            case "college administration":
                array_push($ca, $row);
                break;

            case "college development committee":
                array_push($cdc, $row);
                break;
            case "college executive committee":
                array_push($cec, $row);
                break;
            case "school committee":
                array_push($sc, $row);
                break;

            case "college management":
                array_push($cm, $row);
                break;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | College Administration</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />

    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <link rel="stylesheet" href="../../../css/common/custom_aos_fade_right.css" />
    <style>
        .vaze_logo_div::before {
            content: "";
            position: absolute;
            inset: -0.1rem;
            filter: blur(1rem);
            z-index: -1;
            background-color: #05d2fb;
        }
    </style>
</head>

<body class="bg-white dark:bg-black">
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

    <div class="flex flex-col">
        <!--greetings heading div-->
        <div class="flex bg-gradient-to-r from-black to-blue-800  from-25%  h-[100vh] w-[100vw] px-12" id="main_heading_div">
            <div class="flex-1 flex items-center justify-center">
                <p class="text-[2rem] sm:text-[4.5rem] text-white font-bold" data-aos="fade-right">College Management
                </p>
            </div>
            <div class=" flex-1 flex items-center justify-center">
                <div class="h-fit z-10 vaze_logo_div relative">

                    <img src="<?php echo $vaze_logo ?>" class=" rounded-3xl h-1/2 m-auto aspect-square" alt="vaze logo" />
                </div>
            </div>
        </div>


        <!--main contents-->
        <div class="flex flex-col dark:bg-black  dark:text-white py-8 ">

            <!--
                /***************
                BREADCRUMBS - to show where the user is currently
                ****************/
                -->
            <nav aria-label="Breadcrumb" class="pl-2 mt-2" id="Breadcrumb">
                <ol class="flex items-stretch gap-2 list-none">
                    <!--Home li-->
                    <li class="flex items-center gap-2">
                        <a href="/Vaze_College_Website/College/src/main/Pages" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                            <!--Home icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">

                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>

                            <span class="hidden md:block">Home</span>
                        </a>

                        <!--Arrow Icon.  svg is used because we can modify it colors and add css classes to it -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                            <title id="title-02">Arrow</title>
                            <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </li>

                    <!--No path item-->
                    <li class="flex items-center gap-2">
                        <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">About Us</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </li>

                    <!--No path item-->
                    <li class="flex items-center gap-2">
                        <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">Governance</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </li>

                    <!--Last item-->
                    <li class="flex items-center gap-2">
                        <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">College Management</a>
                    </li>
                </ol>
            </nav>

            <!--College Management selector div-->
            <div class="flex flex-col md:flex-row px-8 py-12 justify-between gap-8 " id="cm_selector_div">
                <div class="flex-1 flex flex-col">
                    <p class="text-xl font-medium" data-aos="fade-right">The College Managament</p>
                    <p class="" data-aos="fade-right">The various committees that are responsible for the management of the college
                    </p>
                </div>

                <div class="flex-1">
                    <ul class="list-none">

                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="cm_li" data-aos="fade-right" data-aos-delay="100">College Management</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="cec_li" data-aos="fade-right" data-aos-delay="200">College Executive Committee</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="ca_li" data-aos="fade-right" data-aos-delay="300">College Administration</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="cdc_li" data-aos="fade-right" data-aos-delay="400">College Development Committee</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="sc_li" data-aos="fade-right" data-aos-delay="500">School Committee</li>
                    </ul>
                </div>
            </div>


            <!--College Management -->
            <div class="mt-12 flex flex-col px-8" id="cm_div">
                <p class="text-center font-medium text-[2rem] sm:text-[3rem] w-full" data-aos="fade-up">College Management</p>


                <?php
                if (count($cm) > 0) {
                ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5  gap-8 mt-4" data-aos="fade-up">

                        <?php
                        for ($i = 0; $i < count($cm); $i++) {
                            $faculty = $cm[$i];

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
                            <div class="bg-transparent flex flex-col  group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
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

                                    <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo strtoupper(substr($faculty["role"], 0, 1)) . substr($faculty["role"], 1) ?></p>

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

            <!--College Executive Committee -->
            <div class="mt-24 flex flex-col px-8" id="cec_div">
                <p class="text-center font-medium text-[2rem] sm:text-[3rem] w-full" data-aos="fade-up">College Executive Committee</p>

                <?php
                if (count($cec) > 0) {
                ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5  gap-8 mt-4" data-aos="fade-up">

                        <?php
                        for ($i = 0; $i < count($cec); $i++) {
                            $faculty = $cec[$i];

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
                            <div class="bg-transparent flex flex-col  group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
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

                                    <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo strtoupper(substr($faculty["role"], 0, 1)) . substr($faculty["role"], 1) ?></p>

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


            <!--college administration -->
            <div class="mt-24 flex flex-col px-8" id="ca_div">
                <p class="text-center font-medium text-[2rem] sm:text-[3rem] w-full" data-aos="fade-up">College Administration</p>

               <?php
                if (count($ca) > 0) {
                ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5  gap-8 mt-4" data-aos="fade-up">

                        <?php
                        for ($i = 0; $i < count($ca); $i++) {
                            $faculty = $ca[$i];

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
                            <div class="bg-transparent flex flex-col  group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
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

                                    <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo strtoupper(substr($faculty["role"], 0, 1)) . substr($faculty["role"], 1) ?></p>

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

            <!--College Development Committee-->

            <div class="mt-24 flex flex-col px-8" id="cdc_div">
                <p class="text-center font-medium text-[2rem] sm:text-[3rem] w-full" data-aos="fade-up">College Development Committee</p>

                <?php
                if (count($cdc) > 0) {
                ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-4" data-aos="fade-up">

                        <?php
                        for ($i = 0; $i < count($cdc); $i++) {
                            $faculty = $cdc[$i];

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
                            <div class="bg-transparent flex flex-col  group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
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

                                    <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo strtoupper(substr($faculty["role"], 0, 1)) . substr($faculty["role"], 1) ?></p>

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


            <!--School Committee -->

            <div class="mt-24 flex flex-col px-8" id="sc_div">
                <p class="text-center font-medium text-[2rem] sm:text-[3rem] w-full" data-aos="fade-up">School Committee </p>

               <?php
                if (count($sc) > 0) {
                ?>
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-4" data-aos="fade-up">

                        <?php
                        for ($i = 0; $i < count($sc); $i++) {
                            $faculty = $sc[$i];

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
                            <div class="bg-transparent flex flex-col  group rounded-2xl items-center faculty_card <?php echo $hover_card_status ?>">
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

                                    <p class="text-blue-800 dark:text-emerald-500 text-sm text-center"><?php echo strtoupper(substr($faculty["role"], 0, 1)) . substr($faculty["role"], 1) ?></p>

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
        </div>

        <!--Scroll to top-->
        <button class="fixed bottom-4 right-4 rounded-full h-10 w-10 z-10 sm:h-12 sm:w-12 lg:w-20 lg:h-20  invisible text-center bg-black dark:bg-white dark:text-black  shadow-2xl dark:shadow-none" id="scroll_to_top_btn">
            <svg class="w-full h-8 sm:h-10 lg:h-12 fill_upward_arrow dark:fill_upward_arrow" xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px">
                <path d="M446.67-160v-513l-240 240L160-480l320-320 320 320-46.67 47-240-240v513h-66.66Z" />
            </svg>
        </button>

    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>
    <script src="../../../js/common/header_2.js"></script>
    <script>
        let scroll_by_to_reach_cm = document.getElementById("main_heading_div").scrollHeight + document.getElementById("cm_selector_div").scrollHeight - 60;

        let scroll_by_to_reach_cec = scroll_by_to_reach_cm + document.getElementById("cm_div").scrollHeight;

        let scroll_by_to_reach_ca = scroll_by_to_reach_cec + document.getElementById("cec_div").scrollHeight;

        let scroll_by_to_reach_cdc = scroll_by_to_reach_ca + document.getElementById("ca_div").scrollHeight;

        let scroll_by_to_reach_sc = scroll_by_to_reach_cdc + document.getElementById("cdc_div").scrollHeight;




        $("#cm_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_cm,
                behavior: "smooth"
            })
        })

        $("#cec_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_cec,
                behavior: "smooth"
            })
        })

        $("#ca_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_ca,
                behavior: "smooth"
            })
        })

        $("#cdc_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_cdc,
                behavior: "smooth"
            })
        })

        $("#sc_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_sc,
                behavior: "smooth"
            })
        })


        $("#scroll_to_top_btn").click(function() {
            window.scrollTo({
                top: document.getElementById("main_heading_div").scrollHeight - 60,
                behavior: "smooth"
            })
        })

        window.addEventListener("scroll", function() {
            if (window.scrollY > scroll_by_to_reach_cm) {
                if ($("#scroll_to_top_btn").hasClass("invisible")) {
                    $("#scroll_to_top_btn").removeClass("invisible")
                }

            } else if (!$("#scroll_to_top_btn").hasClass("invisible")) {
                $("#scroll_to_top_btn").addClass("invisible")
            }

        })

        function animateOnScroll() {
            const observer = new IntersectionObserver((entries) => {
                let delay = 0;
                let times = 1;
                entries.forEach((entry) => {
                    if (entry.isIntersecting && times == 1) {
                        entry.target.classList.add("custom_aos_fade_right");
                        entry.target.style.animationDelay = `${delay}ms`;
                        delay += 150;
                    }
                });

                delay = 0;
                times++;

            });

            document
                .querySelectorAll(".faculty_card")
                .forEach((card) => observer.observe(card));


        }

        animateOnScroll();
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>