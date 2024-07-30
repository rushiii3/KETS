<?php
include("../../Components/vaze_kelkar_logo_base64.php");
include("../../../config/connect.php");

$fetch_pdfs_stmt = "SELECT * FROM reports WHERE reports_type in ('aqar','caqar','iqac','ssr') AND reports_should_it_be_visible='y' ORDER BY reports_academic_year DESC";
//print_r("here");
$fetch_pdfs_query = $conn->prepare($fetch_pdfs_stmt);
$fetch_pdfs_query->execute();
$fetch_pdfs_query_result = $fetch_pdfs_query->get_result();




$aqar = [];
$aqar_academic_years = [];

$iqac = [];
$iqac_academic_years = [];

$ssr = [];
$ssr_academic_years = [];

$caqar_arrays = [1 => [], 2 => [], 3 => [], 4 => [], 5 => [], 6 => [], 7 => []]; //criteria specific aqar
$caqar_academic_years = [];

if ($fetch_pdfs_query_result) {
    while ($row = $fetch_pdfs_query_result->fetch_assoc()) {
        switch ($row["reports_type"]) {
            case "aqar":
                //print_r("here");
                array_push($aqar, $row);

                if (!in_array(trim($row["reports_academic_year"]), $aqar_academic_years)) {
                    array_push($aqar_academic_years, trim($row["reports_academic_year"]));
                }
                break;
            case "caqar":
                //array_push($caqar, $row);
                if (!in_array(trim($row["reports_academic_year"]), $caqar_academic_years)) {
                    array_push($caqar_academic_years, trim($row["reports_academic_year"]));
                }
                break;
            case "iqac":
                array_push($iqac, $row);
                if (!in_array(trim($row["reports_academic_year"]), $iqac_academic_years)) {
                    array_push($iqac_academic_years, trim($row["reports_academic_year"]));
                }
                break;
            case "ssr":
                array_push($ssr, $row);
                if (!in_array(trim($row["reports_academic_year"]), $ssr_academic_years)) {
                    array_push($ssr_academic_years, trim($row["reports_academic_year"]));
                }

                break;
        }
    }
}

$fetch_caqar_pdfs_stmt = "SELECT * FROM reports JOIN reports_belong_to_aqar_criteria ON reports_belong_to_aqar_criteria.report_id=reports.all_pdf_id WHERE reports.reports_should_it_be_visible='y' AND reports.reports_academic_year LIKE ('%$caqar_academic_years[0]%') ORDER BY reports_belong_to_aqar_criteria.aqar_criteria_number ASC,reports_belong_to_aqar_criteria.aqar_sub_criteria ASC";
//print_r("here");
$fetch_caqar_pdfs_query = $conn->prepare($fetch_caqar_pdfs_stmt);
$fetch_caqar_pdfs_query->execute();
$fetch_caqar_pdfs_query_result = $fetch_caqar_pdfs_query->get_result();

if ($fetch_caqar_pdfs_query_result) {
    // print_r("here");
    while ($row = $fetch_caqar_pdfs_query_result->fetch_assoc()) {
        array_push($caqar_arrays[$row["aqar_criteria_number"]], $row);
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE| NAAC</title>
    <?php include('../../../library/library.php'); ?>
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

        .selected_iqac_ay {
            background-color: rgb(30 64 175);
        }

        .not_selected_iqac_ay {
            background-color: rgb(31 41 55);
        }


        .selected_caqar_ay {
            background-color: rgb(30 64 175);
        }

        .not_selected_caqar_ay {
            background-color: rgb(31 41 55);
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
            <div class="   flex-1 flex items-center justify-center">
                <p class="text-[2rem] sm:text-[4.5rem] text-white font-bold" data-aos="fade-right">NAAC and Other related reports
                </p>
            </div>
            <div class=" flex-1 flex items-center justify-center">
                <div class="h-fit z-10 vaze_logo_div relative">

                    <img src="<?php echo $vaze_logo ?>" class=" rounded-3xl h-1/2 m-auto aspect-square" alt="vaze logo" />
                </div>
            </div>
        </div>


        <!--main contents-->
        <div class="flex flex-col dark:bg-black bg-slate-200 dark:text-white py-8 ">

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

                    <!--Last item-->
                    <li class="flex items-center gap-2">
                        <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">NAAC</a>
                    </li>
                </ol>
            </nav>

            <!--report selector div-->
            <div class="flex flex-col md:flex-row px-8 py-12 justify-between gap-8 " id="report_selector_div">
                <div class="flex-1 flex flex-col">
                    <p class="text-xl font-medium" data-aos="fade-right">Browse through all the NAAC related reports from a number of academic years </p>
                    <p class="" data-aos="fade-right">NAAC stands for National Assessment and Accrediation Council. Our College was the first college to bag the "A" grade in Maharashtra in the 1st cycle. We have maintained this standard for the next two cycles. </p>
                </div>

                <div class="flex-1">
                    <ul class="list-none">

                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="aqar_li" data-aos="fade-right" data-aos-delay="100">AQAR reports</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="caqar_li" data-aos="fade-right" data-aos-delay="200">Criteria-Specific AQAR reports</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="iqac_li" data-aos="fade-right" data-aos-delay="300">IQAC reports</li>
                        <li class="hover:cursor-pointer py-4" id="ssr_li" data-aos="fade-right" data-aos-delay="400">SSR reports</li>
                    </ul>
                </div>
            </div>

            <!--AQAR Reports-->
            <div class="mt-12 flex flex-col  items-start lg:items-center px-8" id="aqar_reports_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">AQAR reports</p>
                <p class="text-center text-sm text-slate-500 w-full" data-aos="fade-up">Annual Quality Assurance Reports
                </p>

                <!-- <div class="flex px-8 mt-4  justify-between max-w-[100vw] overflow-x-auto gap-8 text-white">
                    <?php
                    // $i = 0;
                    // foreach ($aqar_academic_years as $year) {
                    //     if ($i == 0) {
                    //         echo ' <div class="rounded-full px-8 py-2  hover:cursor-pointer selected_aqar_ay aqar_ay transition-[background-color] duration-500">' . $year . '</div>';
                    //         $i++;
                    //     }
                    // 
                    ?>
                      <div class="rounded-full px-8 py-2 hover:cursor-pointer not_selected_aqar_ay aqar_ay transition-[background-color] duration-500"><?php echo $year ?></div>
                     <?php
                        // }
                        ?>
                </div> -->

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-8 gap-4 ">
                    <?php
                    foreach ($aqar as $aq) {
                        //if ($aq["reports_academic_year"] == $aqar_academic_years[0]) {

                    ?>
                        <div class="pdf_card_wrapper">

                            <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105  hover:cursor-pointer pdf_card  transition-transform duration-500">
                                <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                <a href="<?php echo $aq["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $aq["all_pdf_title"] ?></a>
                            </div>
                        </div>


                    <?php
                        //}
                    }
                    ?>
                </div>
            </div>

            <!--Criteria-specific AQAR reports-->
            <div class="mt-12 flex flex-col  items-start lg:items-center" id="caqar_reports_div">
                <p class="px-8 text-center font-medium text-2xl w-full" data-aos="fade-up">Criteria-specific AQAR documents</p>
                <p class="px-8 text-center text-sm text-slate-500 w-full" data-aos="fade-up">Criteria-specific Annual Quality Assurance documents. These reports are also used for IQAC reports
                </p>

                <div class="flex px-8 mt-4 max-w-[100vw] overflow-x-auto gap-8 text-white">
                    <?php
                    $i = 0;
                    foreach ($caqar_academic_years as $year) {
                        if ($i == 0) {
                            echo ' <div class="rounded-full px-8 py-2  hover:cursor-pointer selected_caqar_ay caqar_ay transition-[background-color] duration-500">' . $year . '</div>';
                            $i++;
                        } else {

                    ?>
                            <div class="rounded-full px-8 py-2 hover:cursor-pointer not_selected_caqar_ay caqar_ay transition-[background-color] duration-500"><?php echo $year ?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class=" h-[40vh] w-[100vw] hidden" id="caqar_loading_animation_div"></div>

                <div class="px-8 flex flex-col w-full" id="caqar_grid_container">
                    <?php

                    foreach ($caqar_arrays as $caqar_criteria_number => $caqar_array) {
                    ?>

                        <p class="font-medium text-lg mt-8">Criteria <?php echo $caqar_criteria_number ?></p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-4  gap-4" id="<?php echo "caqar_grid_" . $caqar_criteria_number ?>">
                            <?php

                            if (count($caqar_arrays[$caqar_criteria_number]) > 0) {
                                foreach ($caqar_arrays[$caqar_criteria_number] as $caq) {
                                    if ($caq["reports_academic_year"] == $caqar_academic_years[0]) {

                            ?>
                                        <div class="pdf_card_wrapper">
                                            <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                                                <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                                <a href="<?php echo $caq["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo "<span class='font-bold '>" . $caq["aqar_sub_criteria"] . "</span>" . " " . $caq["all_pdf_title"] ?></a>
                                            </div>
                                        </div>


                            <?php
                                    }
                                }
                            } else {
                                echo "<p class='ms-4'>No reports</p>";
                            }
                            ?>
                        </div>

                    <?php
                    }

                    ?>

                </div>
            </div>

            <!--Other IQAC documents-->
            <div class="mt-12 flex flex-col  items-start lg:items-center" id="iqac_div">
                <p class="px-8 text-center font-medium text-2xl w-full" data-aos="fade-up">Other IQAC documents</p>
                <p class="px-8 text-center text-sm text-slate-500 w-full" data-aos="fade-up">Internal Quality Assessment Committee documents
                </p>

                <div class="flex mt-4 px-8 max-w-[100vw] overflow-x-auto gap-8 text-white">
                    <?php
                    $i = 0;
                    foreach ($iqac_academic_years as $year) {
                        if ($i == 0) {
                            echo ' <div class="rounded-full px-8 py-2  hover:cursor-pointer selected_iqac_ay iqac_ay transition-[background-color] duration-500">' . $year . '</div>';
                            $i++;
                        } else {

                    ?>
                            <div class="rounded-full px-8 py-2 hover:cursor-pointer not_selected_iqac_ay iqac_ay transition-[background-color] duration-500"><?php echo $year ?></div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class=" h-[40vh] w-[100vw] hidden" id="iqac_loading_animation_div"></div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-8  gap-4 px-8 " id="iqac_grid">
                    <?php
                    foreach ($iqac as $iq) {
                        if ($iq["reports_academic_year"] == $iqac_academic_years[0]) {

                    ?>
                            <div class="pdf_card_wrapper">
                                <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                                    <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                    <a href="<?php echo $iq["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $iq["all_pdf_title"] ?></a>
                                </div>
                            </div>


                    <?php
                        }
                    }
                    ?>
                </div>
            </div>


            <!--SSR reports-->
            <div class="mt-12 flex flex-col  items-start lg:items-center px-8" id="ssr_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">SSR Reports</p>
                <p class="text-center text-sm text-slate-500 w-full" data-aos="fade-up">Self-Study Reports
                </p>

                <!-- <div class="flex mt-4  justify-between max-w-[100vw] overflow-x-auto gap-8 text-white">
                    <div class="rounded-full px-8 py-2 bg-blue-800">2023</div>

                </div> -->

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-8  gap-4 ">
                    <?php
                    foreach ($ssr as $ss) {

                    ?>
                        <div class="pdf_card_wrapper">
                            <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                                <img src="../../../assets/webp/pdf.webp" alt="naac_pdf" class="aspect-square w-[20%]">
                                <a href="<?php echo $ss["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $ss["all_pdf_title"] ?></a>
                            </div>
                        </div>

                    <?php

                    }
                    ?>
                </div>
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
    <script src="../../../js/secondary_naac_tab/naac.js" type="module"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>