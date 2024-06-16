<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE|Legacy</title>
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
    <div class="flex flex-col items-center  ">

        <!--starting timeline element-->
        <div class="flex flex-col items-center w-full">
            <div class="flex justify-center w-full">
                <div class="flex-1 flex justify-end ">
                    <p class="bg-blue-500  text-white">2021-today</p>
                </div>
                <div class="flex-1 flex justify-center">
                    <div class="rounded-full w-8 h-8 -z-10 bg-black flex justify-center items-center">
                        <div class="rounded-full w-6 h-6  bg-white ">
                        </div>
                    </div>
                </div>

                <div class="flex-1 flex ">
                </div>
            </div>
            <div class="border-l-2 border-black h-48"></div>
        </div>

        <!--in between timeline elements-->
        <div class="flex flex-col items-center">
            <div class="border-l-2 border-black h-24"></div>
            <div class="rounded-full w-8 h-8 -z-10 bg-black flex justify-center items-center">
                <div class="rounded-full w-6 h-6  bg-white ">
                </div>
            </div>
            <div class="border-l-2 border-black h-24"></div>
        </div>

        <!--ending timeline element-->

        <div class="flex flex-col items-center">
            <div class="border-l-2 border-black h-48"></div>
            <div class="rounded-full w-8 h-8 -z-10 bg-black flex justify-center items-center">
                <div class="rounded-full w-6 h-6  bg-white ">
                </div>
            </div>
        </div>




    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); ?>

    <script src="../../../js/about_us_tab/legacy.js"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>