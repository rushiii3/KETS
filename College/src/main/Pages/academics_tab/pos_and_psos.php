<?php
include("../../../config/connect.php");

$fetch_pos_and_psos_stmt = "SELECT * FROM other_pdfs WHERE other_pdfs_type_name='POs_and_PSOs' ORDER BY all_pdf_title ASC";
$fetch_pos_and_psos_query = $conn->prepare($fetch_pos_and_psos_stmt);
$fetch_pos_and_psos_query->execute();
$fetch_pos_and_psos_query_result = $fetch_pos_and_psos_query->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | POs and PSOs</title>
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
    MAIN CONTENTS 
    ****************/
    -->

    <div class="flex flex-col mt-32 mb-8 dark:text-white w-[100vw] px-8">
        <p class="font-medium text-[4rem] text-center" data-aos="fade-up">POs and PSOs</p>
        <p class="text-sm text-slate-600 text-center" data-aos="fade-up">POs - Program Objectives | PSOs - Program Specific Objectives</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-12">

            <?php
            if ($fetch_pos_and_psos_query_result) {
                while ($row = $fetch_pos_and_psos_query_result->fetch_assoc()) {

            ?>
                    <div class="pdf_card_wrapper">
                        <div class="flex p-2 items-center rounded-xl dark:bg-gray-800 dark:shadow-none shadow-2xl bg-white hover:scale-105 transition-transform duration-500  hover:cursor-pointer pdf_card">
                            <img src="../../../assets/webp/pdf.webp" alt="pos_and_psos_pdf" class="aspect-square w-[20%]">
                            <a href="<?php echo $row["all_pdf_pdf_link"] ?>" class="flex-1"><?php echo $row["all_pdf_title"] ?></a>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>
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
                delay += 150
            })
        })

        document.querySelectorAll(".pdf_card_wrapper").forEach((card) => observer.observe(card))


        $(".pdf_card_wrapper").each(function() {
            $(this).click(function() {
                window.location.href = $(this).find("a")[0].href;
            })
        })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>