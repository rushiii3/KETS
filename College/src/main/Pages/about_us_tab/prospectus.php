<?php
include("../../../config/connect.php");

$fetch_prospectus_stmt = "SELECT * FROM other_pdfs join `other_pdf_is_for_clg_section_in_academic_year` on other_pdfs.all_pdf_id=other_pdf_is_for_clg_section_in_academic_year.other_pdf_id WHERE other_pdfs.other_pdfs_type_name='prospectus' AND other_pdf_is_for_clg_section_in_academic_year.academic_year =(SELECT academic_year from academic_years ORDER BY academic_year DESC LIMIT 1) AND other_pdfs.other_pdfs_should_it_be_visible='y';";

$fetch_prospectus_query = $conn->prepare($fetch_prospectus_stmt);
$fetch_prospectus_query->execute();
$fetch_prospectus_query_result = $fetch_prospectus_query->get_result();

$fetch_ay_stmt = "SELECT DISTINCT academic_year from other_pdf_is_for_clg_section_in_academic_year JOIN other_pdfs on other_pdfs.all_pdf_id=other_pdf_is_for_clg_section_in_academic_year.other_pdf_id WHERE other_pdfs.other_pdfs_type_name='prospectus' AND other_pdfs.other_pdfs_should_it_be_visible='y' ORDER BY other_pdf_is_for_clg_section_in_academic_year.academic_year  DESC;";
$fetch_ay_query = $conn->prepare($fetch_ay_stmt);
//print_r("here");
$fetch_ay_query->execute();
$fetch_ay_query_result = $fetch_ay_query->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | Prospectus</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <link rel="stylesheet" href="../../../css/common/custom_aos_fade_right.css" />
</head>

<body class="bg-white dark:bg-black dark:text-white">
    <!--
    /***************
    NAVBAR 
    ****************/
    -->
    <?php include('../../Layouts/header2.php'); ?>
    <!--
    /***************
     BREADCRUMBS - to show where the user is currently
    ****************/
    -->
    <nav aria-label="Breadcrumb" class="pl-2 mt-32" id="Breadcrumb">
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

            <!--Last item-->
            <li class="flex items-center gap-2">
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">Prospectus</a>
            </li>
        </ol>
    </nav>

    <!--
    /***************
    MAIN CONTENTS 
    ****************/
    -->

    <div class="flex flex-col mt-12 mb-8 dark:text-white w-[100vw] px-8">


        <p class="font-medium text-[4rem] text-center" data-aos="fade-up">Prospectus</p>
        <p class="text-sm text-slate-600 text-center" data-aos="fade-up"></p>

        <div class="flex max-h-[100vw] oveflow-x-auto gap-4 <?php echo $fetch_ay_query_result->num_rows == 1 ? "justify-center" : "" ?>" data-aos="fade-up">

            <?php
            if ($fetch_ay_query_result && $fetch_ay_query_result->num_rows > 0) {
                $i = 1;
                while ($row = $fetch_ay_query_result->fetch_assoc()) {
                    if ($i == 1 && $i != $fetch_ay_query_result->num_rows) {
                        echo '  <button class="ml-auto rounded-full p-4 bg-blue-800 text-white transition-all duration-700 ay_btn selected">' . $row["academic_year"] . '</button>';
                    } else if ($i == 1 && $i == $fetch_ay_query_result->num_rows) {
                        echo '  <button class=" rounded-full p-4 bg-blue-800 text-white transition-all duration-700 ay_btn selected">' . $row["academic_year"] . '</button>';
                    } else if ($i == $fetch_ay_query_result->num_rows) {
                        echo '  <button class=" mr-auto rounded-full p-4 bg-gray-200 dark:bg-gray-800 transition-all duration-700 ay_btn ">' . $row["academic_year"] . '</button>';
                    } else {
                        echo '  <button class=" rounded-full p-4 bg-gray-200 dark:bg-gray-800 transition-all duration-700 ay_btn ">' . $row["academic_year"] . '</button>';
                    }
                    $i++;
                }
            } else {
                // echo "<div class='flex justify-center items-center><p></p></div>'";

            }

            ?>
        </div>

        <div class="h-[50vw] w-full hidden" id="loading_animation_div"></div>


        <?php
        if ($fetch_prospectus_query_result && $fetch_prospectus_query_result->num_rows > 0) {
        ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-12 w-full" id="pdf_grid">
                <?php
                while ($row = $fetch_prospectus_query_result->fetch_assoc()) {
                    //for ($i = 0; $i < 10; $i++) {

                ?>
                    <a class="pdf_card_wrapper" href="<?php echo $row["all_pdf_pdf_link"] ?>" target="_blank">
                        <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105  hover:cursor-pointer pdf_card  transition-transform duration-500">
                            <img src="../../../assets/webp/pdf.webp" alt="prospectus_pdf" class="aspect-square w-[20%]">
                            <p class="flex-1"><?php echo $row["all_pdf_title"] ?></p>
                        </div>
                    </a>

                <?php
                }
                ?>
            </div>
        <?php
        } else {
            echo  "<div class='mt-12 flex justify-center items-center'><p>Sorry! No Brochures present</p></div>";
        }

        ?>

    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>
    <script src="../../../js/common/header_2.js"></script>
    <!--lottie animation player-->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

    <script type="module">
        import {
            loading_animation
        } from "../../../js/common/lottie_loading_animation.js";
        import {
            makeAJAXRequest
        } from "../../../js/common/make_ajax_request.js"
        const observer = new IntersectionObserver((entries) => {
             let delay = 0;
            let times = 1;
            entries.forEach((entry) => {
                if (entry.isIntersecting && times == 1) {
                    entry.target.classList.add("custom_aos_fade_right");
                    entry.target.style.animationDelay = `${delay}ms`;
                    delay += 150;
                }
            })

            delay = 0
            times++
        })

        document.querySelectorAll(".pdf_card_wrapper").forEach((card) => observer.observe(card))

        $(".pdf_card").click(function() {
            window.location.href = $(this).find("a")[0].href
        })


        //year btn click
        $(".ay_btn:not(.selected)").each(function() {
            $(this).click(function() {
                $(".ay_btn.selected").addClass(["bg-gray-200", "dark:bg-gray-800"]);
                $(".ay_btn.selected").removeClass([
                    "selected",
                    " bg-blue-800",
                    "text-white",
                ]);
                $(this).addClass(["selected", " bg-blue-800", "text-white"]);
                $(this).removeClass(["bg-gray-200", "dark:bg-gray-800"]);

                let ay = $(this).text().trim();


                $("#loading_animation_div").html(loading_animation);

                if ($("#loading_animation_div").hasClass("hidden")) {
                    $("#loading_animation_div").removeClass("hidden");
                }

                if (!$("#pdf_grid").hasClass("hidden")) {
                    $("#pdf_grid").addClass("hidden");
                }
                let ajax_url = "";
                if (ay != "") {
                    ajax_url = `./AJAX/fetch_prospectus.php?ay=${ay}`;
                    //console.log(ajax_url);
                } else {
                    $("#loading_animation_div").html(
                        "<div class='flex justify-center items-center><p>Sorry! Some Error occured.Please bear with us</p></div>'"
                    );
                }

                setTimeout(() => {
                    makeAJAXRequest(
                        ajax_url,
                        "GET",
                        "json",
                        null,
                        function(success_response) {
                            if (success_response.length > 0) {
                                console.log("here");
                                //let anim_delay = 0;
                                $("#pdf_grid").html("");
                                success_response.forEach((pdf) => {
                                    $("#pdf_grid").append(
                                        constructPDFCard(
                                            //anim_delay,
                                            pdf.all_pdf_pdf_link,
                                            pdf.all_pdf_title
                                        )
                                    );
                                    // anim_delay += 100;
                                });

                                //reattachAYClickListeners();


                                if (!$("#loading_animation_div").hasClass("hidden")) {
                                    $("#loading_animation_div").addClass("hidden");
                                }
                                if ($("#pdf_grid").hasClass("hidden")) {
                                    $("#pdf_grid").removeClass("hidden");
                                }
                            } else {
                                $("#loading_animation_div").html(
                                    "<div class='flex justify-center items-center><p>Sorry! Some Error occured</p></div>'"
                                );
                            }
                        },
                        function(xhr, status, error) {
                            $("#loading_animation_div").html(
                                "<div class='flex justify-center items-center><p>Sorry! Some Error occured</p></div>'"
                            );
                        }
                    );
                }, 2000);
            });
        });


        function constructPDFCard(link, title) {
            return `<a href='${link}' class="pdf_card_wrapper">
                        <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105  hover:cursor-pointer pdf_card  transition-transform duration-500">
                            <img src="../../../assets/webp/pdf.webp" alt="syllabus_pdf" class="aspect-square w-[20%]">
                            <p class="flex-1">${title}</p>
                        </div>
                    </a>`;


        }

        // function reattachAYClickListeners() {
        //     $(".pdf_card").click(function() {
        //         window.location.assign($(this).find("a")[0].href)
        //     })


        // }
    </script>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>