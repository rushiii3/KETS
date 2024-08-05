<?php
include("../../../config/connect.php");
include("../../Components/vaze_kelkar_logo_base64.php");

$fetch_scholarships_stmt = "SELECT * FROM scholarships ORDER BY scholarship_students_awarded DESC,scholarship_eligibility DESC";
$fetch_scholarships_query = $conn->prepare($fetch_scholarships_stmt);
$fetch_scholarships_query->execute();
$fetch_scholarships_query_result = $fetch_scholarships_query->get_result();

//Government Scholarships
$gs = [];

//Government Freeships
$gf = [];

//Collegiate Scholarship, Free-ship & Awards
$csaf = [];

//Endownment Scholarships
$es = [];

//Merit Scholarships
$ms = [];

if ($fetch_scholarships_query_result) {
    while ($row = $fetch_scholarships_query_result->fetch_assoc()) {
        switch ($row["scholarship_type"]) {
            case "gs":
                array_push($gs, $row);
                break;

            case "gf":
                array_push($gf, $row);
                break;
            case "csaf":
                array_push($csaf, $row);
                break;
            case "es":
                array_push($es, $row);
                break;
            case "merit":
                array_push($ms, $row);
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
    <title>V. G. VAZE | Scholarships</title>
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
                <p class="text-[2rem] sm:text-[4.5rem] text-white font-bold" data-aos="fade-right">Scholarships and Freeships
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
                        <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">Student Corner</p>

                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </li>

                    <!--Last item-->
                    <li class="flex items-center gap-2">
                        <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">Scholarships</a>
                    </li>
                </ol>
            </nav>

            <!--Scholarships selector div-->
            <div class="flex flex-col md:flex-row px-8 py-12 justify-between gap-8 " id="scholarship_selector_div">
                <div class="flex-1 flex flex-col">
                    <p class="text-xl font-medium" data-aos="fade-right">Scholarship, Awards and Freeships</p>
                    <p class="" data-aos="fade-right">Students of Vaze College are entitled to receive Freeships and Scholarships under the various schemes of the Government for the weaker sections of society.
                        Besides the Government Schemes, we have Student Mutual Aid Fund in the College that caters to the needs of economically challenged students by lending them textbooks as well as Tuition Fee concessions.
                        A large number of Endowments and Memorial Awards as well as prizes for academic and extracurricular achievements have been instituted to encourage meritorious students.
                    </p>
                </div>

                <div class="flex-1">
                    <ul class="list-none">

                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="gs_li" data-aos="fade-right" data-aos-delay="100">Government Scholarships</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="gf_li" data-aos="fade-right" data-aos-delay="200">Government Freeships</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="pmm_li" data-aos="fade-right" data-aos-delay="300">Post-Matric Scholarship for Minority Communities</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="csaf_li" data-aos="fade-right" data-aos-delay="400">Collegiate Scholarship, Free-ship & Awards</li>
                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="es_li" data-aos="fade-right" data-aos-delay="500">Endowment Scholarships</li>

                        <li class="hover:cursor-pointer py-4 border-b border-slate-600" id="ms_li" data-aos="fade-right" data-aos-delay="500">Merit Awards and Scholarships</li>
                        <li class="hover:cursor-pointer py-4" id="faq_li" data-aos="fade-right" data-aos-delay="600">How to avail? </li>

                    </ul>
                </div>
            </div>


            <!--Goverment Scholarships -->
            <div class="mt-12 flex flex-col px-8" id="gs_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Government Scholarships</p>

                <!--Table start-->
                <div class="relative overflow-x-auto mt-8" data-aos="fade-up">
                    <table class="w-full text-sm text-left  ">
                        <thead class="text-xs  uppercase bg-blue-100 dark:bg-gray-700">
                            <tr class="border border-gray-500 ">
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[5%]">
                                    Sr.No
                                </th>
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[70%]">
                                    Scholarship Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center w-[25%]">
                                    Eligibility
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($gs) > 0) {
                                foreach ($gs as $index => $g) {


                            ?>
                                    <tr class="bg-white border border-gray-500  dark:bg-gray-800 ">
                                        <td class="px-2 py-4 text-center border-r border-gray-500"><?php echo $index + 1 ?>
                                        </td>
                                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  dark:text-white border-r border-gray-500 text-center">
                                            <?php echo $g["scholarship_name"] ?>
                                        </th>
                                        <td class="px-2 py-4 text-center">
                                            <?php echo $g["scholarship_eligibility"] != null ? $g["scholarship_eligibility"] : " - " ?>
                                        </td>

                                    </tr>

                        </tbody>

                <?php
                                }
                            }
                ?>
                    </table>
                </div>
                <!--Table end-->

            </div>

            <!--Goverment Freeship -->
            <div class="mt-24 flex flex-col px-8" id="gf_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Government Freeships</p>

                <!--Table start-->
                <div class="relative overflow-x-auto mt-8" data-aos="fade-up">
                    <table class="w-full text-sm text-left  ">
                        <thead class="text-xs  uppercase bg-blue-100 dark:bg-gray-700">
                            <tr class="border border-gray-500 ">
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[5%]">
                                    Sr.No
                                </th>
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[70%]">
                                    Scholarship Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center w-[25%]">
                                    Eligibility
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($gf) > 0) {
                                foreach ($gf as $index => $g) {


                            ?>
                                    <tr class="bg-white border border-gray-500  dark:bg-gray-800 ">
                                        <td class="px-2 py-4 text-center border-r border-gray-500"><?php echo $index + 1 ?>
                                        </td>
                                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  dark:text-white border-r border-gray-500 text-center">
                                            <?php echo $g["scholarship_name"] ?>
                                        </th>
                                        <td class="px-2 py-4 text-center">
                                            <?php echo $g["scholarship_eligibility"] != null ? $g["scholarship_eligibility"] : " - " ?>
                                        </td>

                                    </tr>

                        </tbody>

                <?php
                                }
                            }
                ?>
                    </table>
                </div>

                <!--Table end-->

            </div>


            <!--Post Matric Scholarship for Minor Communities -->
            <div class="mt-24 flex flex-col px-8" id="pmm_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Post Matric Scholarship for Minor Communities</p>

                <p class="mt-8" data-aos="fade-up">Students belonging to Muslim, Parsi, Christian, and Boudha communities are eligible for this scholarship.</p>

            </div>


            <!--Collegiate Scholarship, Freeship and Awards (CSAF) -->
            <div class="mt-24 flex flex-col px-8" id="csaf_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Collegiate Scholarship, Freeship and Awards</p>

                <!--Table start-->
                <div class="relative overflow-x-auto mt-8" data-aos="fade-up">
                    <table class="w-full text-sm text-left  ">
                        <thead class="text-xs  uppercase bg-blue-100 dark:bg-gray-700">
                            <tr class="border border-gray-500 ">
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[5%]">
                                    Sr.No
                                </th>
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[70%]">
                                    Scholarship Name
                                </th>

                                <th scope="col" class="px-6 py-3 text-center w-[25%]">
                                    Number of Students
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($csaf) > 0) {
                                foreach ($csaf as $index => $c) {


                            ?>
                                    <tr class="bg-white border border-gray-500  dark:bg-gray-800 ">
                                        <td class="px-2 py-4 text-center border-r border-gray-500"><?php echo $index + 1 ?>
                                        </td>
                                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  dark:text-white border-r border-gray-500 text-center">
                                            <?php echo $c["scholarship_name"] ?>
                                        </th>

                                        <td class="px-2 py-4 text-center">
                                            <?php echo $c["scholarship_students_awarded"] != null ? $c["scholarship_students_awarded"] : " - " ?>
                                        </td>

                                    </tr>

                        </tbody>

                <?php
                                }
                            }
                ?>
                    </table>
                </div>

                <!--Table end-->

            </div>


            <!--Endowment Scholarships (ES) -->
            <div class="mt-24 flex flex-col px-8" id="es_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Endowment Scholarships</p>

                <!--Table start-->
                <div class="relative overflow-x-auto mt-8" data-aos="fade-up">
                    <table class="w-full text-sm text-left  ">
                        <thead class="text-xs  uppercase bg-blue-100 dark:bg-gray-700">
                            <tr class="border border-gray-500 ">
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[5%]">
                                    Sr.No
                                </th>
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[50%]">
                                    Scholarship Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center  border-r border-gray-500  w-[25%]">
                                    Eligibility
                                </th>
                                <th scope="col" class="px-6 py-3 text-center w-[20%]">
                                    Number of Students
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($es) > 0) {
                                foreach ($es as $index => $e) {


                            ?>
                                    <tr class="bg-white border border-gray-500  dark:bg-gray-800 ">
                                        <td class="px-2 py-4 text-center border-r border-gray-500"><?php echo $index + 1 ?>
                                        </td>
                                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  dark:text-white border-r border-gray-500 text-center">
                                            <?php echo $e["scholarship_name"] ?>
                                        </th>
                                        <td class="px-2 py-4 text-center  border-r border-gray-500 ">
                                            <?php echo $e["scholarship_eligibility"] != null ? $e["scholarship_eligibility"] : " - " ?>
                                        </td>
                                        <td class="px-2 py-4 text-center">
                                            <?php echo $e["scholarship_students_awarded"] != null ? $e["scholarship_students_awarded"] : " - " ?>
                                        </td>

                                    </tr>

                        </tbody>

                <?php
                                }
                            }
                ?>
                    </table>
                </div>

                <!--Table end-->

            </div>

            <!--Merit Scholarships (MS) -->
            <div class="mt-24 flex flex-col px-8" id="ms_div">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">Merit Awards and Scholarships</p>

                <!--Table start-->
                <div class="relative overflow-x-auto mt-8" data-aos="fade-up">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs  uppercase bg-blue-100 dark:bg-gray-700">
                            <tr class="border border-gray-500 ">
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[5%]">
                                    Sr.No
                                </th>
                                <th scope="col" class="px-6 py-3 border-r border-gray-500 text-center w-[50%]">
                                    Scholarship Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center  border-r border-gray-500  w-[25%]">
                                    Eligibility
                                </th>
                                <th scope="col" class="px-6 py-3 text-center w-[20%]">
                                    Number of Students
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (count($ms) > 0) {
                                foreach ($ms as $index => $m) {


                            ?>
                                    <tr class="bg-white border border-gray-500  dark:bg-gray-800 ">
                                        <td class="px-2 py-4 text-center border-r border-gray-500"><?php echo $index + 1 ?>
                                        </td>
                                        <th scope="row" class="px-2 py-4 font-medium text-gray-900  dark:text-white border-r border-gray-500 text-center">
                                            <?php echo $m["scholarship_name"] ?>
                                        </th>
                                        <td class="px-2 py-4 text-center  border-r border-gray-500 ">
                                            <?php echo $m["scholarship_eligibility"] != null ? $m["scholarship_eligibility"] : " - " ?>
                                        </td>
                                        <td class="px-2 py-4 text-center">
                                            <?php echo $m["scholarship_students_awarded"] != null ? $m["scholarship_students_awarded"] : " - " ?>
                                        </td>

                                    </tr>

                        </tbody>

                <?php
                                }
                            }
                ?>
                    </table>
                </div>

                <!--Table end-->

            </div>


            <!--FAQ-->
            <div class="mt-24 flex flex-col  items-start lg:items-center px-8">
                <p class="text-center font-medium text-2xl w-full" data-aos="fade-up">How to Avail?</p>
                <p class="text-center text-sm text-slate-500 w-full" data-aos="fade-up">General FAQ
                </p>
                <ul class="mt-4 flex flex-col list-disc">
                    <li data-aos="fade-right">Students, who are in financial distress, may avail freeship from the college
                        by applying in writing to the Principal, with details of financial condition. The above mentioned Scholarships/Free-ships offered by the college for the needy and deserving students will be awarded to students at the discretion of the Principal and Management.
                    </li>
                    <li data-aos="fade-right" data-aos-delay="100">Students/parents may contact the designated counter in the college office or the Chairperson of the Scholarship Committee for further information.
                    </li>
                    <li data-aos="fade-right" data-aos-delay="200"> Awards and Merit Scholarships will be handed out by the college during the prize distribution ceremony.</li>
                </ul>
                <p class="mt-12 text-center"></p>

                <!-- <div class="flex mt-4  justify-between max-w-[100vw] overflow-x-auto gap-8 text-white">
                    <div class="rounded-full px-8 py-2 bg-blue-800">2023</div>

                </div> -->


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
        let scroll_by_to_reach_gs = document.getElementById("main_heading_div").scrollHeight + document.getElementById("scholarship_selector_div").scrollHeight - 60;

        let scroll_by_to_reach_gf = scroll_by_to_reach_gs + document.getElementById("gs_div").scrollHeight;

        let scroll_by_to_reach_pmm = scroll_by_to_reach_gf + document.getElementById("gf_div").scrollHeight;

        let scroll_by_to_reach_csaf = scroll_by_to_reach_pmm + document.getElementById("pmm_div").scrollHeight;

        let scroll_by_to_reach_es = scroll_by_to_reach_csaf + document.getElementById("csaf_div").scrollHeight;

        let scroll_by_to_reach_ms = scroll_by_to_reach_es + document.getElementById("es_div").scrollHeight;

        let scroll_by_to_reach_faq = scroll_by_to_reach_ms + document.getElementById("ms_div").scrollHeight;


        $("#gs_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_gs,
                behavior: "smooth"
            })
        })

        $("#gs_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_gs,
                behavior: "smooth"
            })
        })

        $("#gf_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_gf,
                behavior: "smooth"
            })
        })

        $("#pmm_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_pmm,
                behavior: "smooth"
            })
        })

        $("#csaf_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_csaf,
                behavior: "smooth"
            })
        })

        $("#es_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_es,
                behavior: "smooth"
            })
        })

        $("#ms_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_ms,
                behavior: "smooth"
            })
        })

        $("#faq_li").click(function() {
            window.scrollTo({
                top: scroll_by_to_reach_faq,
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
            if (window.scrollY > scroll_by_to_reach_gs) {
                if ($("#scroll_to_top_btn").hasClass("invisible")) {
                    $("#scroll_to_top_btn").removeClass("invisible")
                }

            } else if (!$("#scroll_to_top_btn").hasClass("invisible")) {
                $("#scroll_to_top_btn").addClass("invisible")
            }

        })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>