<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | Event Calendar</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <!-- <link rel="stylesheet" href="../../../css/common/custom_aos_fade_right.css" /> -->
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

    <div class="flex flex-col mt-32 mb-8 dark:text-white w-[100vw] px-8 items-center">
        <p class="font-medium text-[4rem] text-center" data-aos="fade-up">Event Calendar</p>

        <iframe src="https://calendar.google.com/calendar/embed?wkst=1&ctz=Asia%2FKolkata&bgcolor=%234285F4&src=c050f4a072376d2b86bc002f3bd3305629339f7f7381c79f0413a4ee11711995@group.calendar.google.com&color=%237CB342&showPrint=0" class="h-[100vh] w-[90vw] mt-12"></iframe>
        

    </div>


    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>
    <script src="../../../js/common/header_2.js"></script>
    <script>
        // const observer = new IntersectionObserver((entries) => {
        //     let delay = 0;
        //     entries.forEach((entry) => {
        //         entry.target.classList.add("custom_aos_fade_right");
        //         entry.target.style.animationDelay = `${delay}ms`;
        //         delay += 150
        //     })
        // })

        // document.querySelectorAll(".pdf_card_wrapper").forEach((card) => observer.observe(card))


        // $(".pdf_card_wrapper").each(function() {
        //     $(this).click(function() {
        //         window.location.href = $(this).find("a")[0].href;
        //     })
        // })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>