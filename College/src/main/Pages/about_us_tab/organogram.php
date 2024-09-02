<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | ORGANOGRAM</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
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
    MAIN CONTENTS
    ****************/
    -->


    <div class="px-8" id="image_div">
        <img src="https://vazecollege.net/wp-content/uploads/2022/03/Organogram-2.jpg" alt="organogram_image" class="mt-32 h-full w-full rounded-md" id="org_img" />
    </div>
    <div id="fixed_image_div" class=" overflow-auto hidden bg-white fixed top-0 w-[100vw] h-[100vh] z-[1000] left-0">
        <div class="w-full h-full bg-transparent relative">
            <div class="fixed top-4 right-8">
                <svg xmlns="http://www.w3.org/2000/svg" id="close_btn" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000">
                    <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                </svg>


            </div>

            <img src="https://vazecollege.net/wp-content/uploads/2022/03/Organogram-2.jpg" alt="organogram_image" class="w-full h-ful max-w-none z-10" />
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
        $("#org_img").click(function() {
            if ($("#fixed_image_div").hasClass("hidden")) {
                $("#fixed_image_div").removeClass("hidden");
            }




        })

        $("#close_btn").click(function() {
            if (!$("#fixed_image_div").hasClass("hidden")) {
                $("#fixed_image_div").addClass("hidden");
            }
        })
    </script>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>