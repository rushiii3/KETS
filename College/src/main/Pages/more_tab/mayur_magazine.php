<?php
include("../../../config/connect.php");

$fetch_magazines_stmt = "SELECT * FROM other_pdfs JOIN other_pdf_cover_page_links on other_pdf_cover_page_links.other_pdf_id= other_pdfs.all_pdf_id WHERE other_pdfs_type_name='magazine' AND other_pdfs.other_pdfs_should_it_be_visible='y' ORDER BY all_pdf_title ASC";

$fetch_magazines_query = $conn->prepare($fetch_magazines_stmt);
$fetch_magazines_query->execute();
$fetch_magazines_query_result = $fetch_magazines_query->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | Mayur Magazine</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <link rel="stylesheet" href="../../../css/common/custom_aos_fade_right.css" />
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
                <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">More</p>

                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>

            <!--No path item-->
            <li class="flex items-center gap-2">
                <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">Magazine</p>

                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>

            <!--Last item-->
            <li class="flex items-center gap-2">
                <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">Mayur Magazine</a>
            </li>
        </ol>
    </nav>

    <!--
    /***************
    MAIN CONTENTS 
    ****************/
    -->

    <div class="flex flex-col mt-12 mb-8 dark:text-white w-[100vw] px-8">


        <p class="font-medium text-[4rem] text-center" data-aos="fade-up">Mayur Magazine</p>
        <p class="text-sm text-slate-600 text-center" data-aos="fade-up"></p>


        <?php
        if ($fetch_magazines_query_result && $fetch_magazines_query_result->num_rows > 0) {
        ?>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-4 mt-12 w-full">
                <?php
                while ($row = $fetch_magazines_query_result->fetch_assoc()) {
                    //for ($i = 0; $i < 10; $i++) {

                ?>
                    <div class="pdf_card_wrapper">
                        <div class="flex flex-col group hover:cursor-pointer pdf_card items-center">
                            <div class=" overflow-clip h-[95%] max-w-[75%] rounded-2xl">
                                <img src="<?php echo "../../../assets/pdf_cover_pages/" . $row["other_pdf_cover_page_link"] ?>" alt="mayur_magazine_cover_page" class="  group-hover:scale-105  transition-transform duration-500 ">
                            </div>
                            <a href="<?php echo $row["all_pdf_pdf_link"] ?>" class="flex-1 group-hover:underline transition-all duration-500"><?php echo $row["all_pdf_title"] ?></a>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

        <?php
        } else {
            echo "<div class='mt-12 flex justify-center items-center' data-aos='fade-up'> <p> Sorry ! No magazines found</p></div>";
        }
        //}
        ?>
    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>
    <script src="../../../js/common/header_2.js"></script>
    <script>
        const observer = new IntersectionObserver((entries) => {
            let delay = 0;
            entries.forEach((entry) => {
                entry.target.classList.add("custom_aos_fade_right");
                entry.target.style.animationDelay = `${delay}ms`;
                delay += 150;
            })
        })

        document.querySelectorAll(".pdf_card_wrapper").forEach((card) => observer.observe(card))

        $(".pdf_card").click(function() {
            window.location.href = $(this).find("a")[0].href
        })
    </script>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>