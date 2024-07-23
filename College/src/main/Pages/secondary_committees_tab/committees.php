<?php
include("../../../config/connect.php");
include("../../../php/common_functions.php");
include("../../../php/encrypt_query_params.php");
include("../../Components/vaze_kelkar_logo_base64.php");

//0C186E -hex for blue-900


$fetch_committees_stmt = "SELECT * FROM committee_and_activity_groups ORDER BY committee_name ASC";
//print_r("here");
$fetch_committees_query = $conn->prepare($fetch_committees_stmt);
$fetch_committees_query->execute();
$fetch_committees_query_result = $fetch_committees_query->get_result();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | Committees</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <style>
        @media screen and (min-width:768px) {
            .fixed_side_div {
                top: 0;
                right: 0;
            }

        }

        @media screen and (min-width:100px) {
            .fixed_side_div {
                left: 0;
                bottom: 0;
            }

        }

        /* .card:hover::before,
        .card:hover::after {
           background-image: linear-gradient(skyblue,lightgreen);
             content: '';
            position: absolute;
             z-index: -1;
            inset: -0.25rem;
            border-radius: inherit;
            
        } */

        /* .card_inner:hover::before{
            content:"";
        z-index: -1; 
            position: absolute;
            bottom: -1px;
            left: -1px;
            height: 1px;
            width:1px;
           
            background-color: rgb(147 197 253);
            border-radius: inherit;
            animation:scale 500ms linear forwards
        }

        @keyframes scale {
            0%{
            }
            100%{
                height: 120%;
               width: 120%;
             
            }
            
        } */
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
    <div class="-z-10" id="main_contents">
        <div class="fixed flex overflow-clip h-[100vh] -z-10 w-[300vw]" id="carousel_container_div">
            <img src="http://vazecollege.net/wp-content/uploads/2020/08/%e0%a4%97%e0%a5%8d%e0%a4%b0%e0%a4%82%e0%a4%a5%e0%a4%a6%e0%a4%bf%e0%a4%82%e0%a4%a1%e0%a5%80-%e0%a4%ae%e0%a4%be%e0%a4%af%e0%a4%ac%e0%a5%8b%e0%a4%b2%e0%a5%80%e0%a4%9a%e0%a5%80...-%e0%a4%ae%e0%a4%b0%e0%a4%be%e0%a4%a0%e0%a5%80%e0%a4%9a%e0%a4%be-%e0%a4%97%e0%a4%9c%e0%a4%b0-%e0%a4%95%e0%a4%b0%e0%a5%80%e0%a4%a4-%e0%a4%aa%e0%a4%a6%e0%a4%aa%e0%a4%a5%e0%a4%be%e0%a4%b5%e0%a4%b0-770x416.jpeg" class="h-[100vh] w-[100vw] brightness-50 transition-transform duration-1000 ease-in-out carousel_img" alt="Vaze College Committees" />
            <img src="http://vazecollege.net/wp-content/uploads/2020/08/%E0%A4%97%E0%A5%8D%E0%A4%B0%E0%A4%82%E0%A4%A5%E0%A4%A6%E0%A4%BF%E0%A4%82%E0%A4%A1%E0%A5%80%E0%A4%9A%E0%A5%8D%E0%A4%AF%E0%A4%BE-%E0%A4%AE%E0%A5%81%E0%A4%B2%E0%A4%BE%E0%A4%82%E0%A4%A8%E0%A5%80-%E0%A4%A4%E0%A4%AF%E0%A4%BE%E0%A4%B0-%E0%A4%95%E0%A5%87%E0%A4%B2%E0%A5%87%E0%A4%B2%E0%A4%BE-%E0%A4%AE-%E0%A4%AE%E0%A4%B0%E0%A4%BE%E0%A4%A0%E0%A5%80%E0%A4%9A%E0%A4%BE.jpeg" class="h-[100vh] w-[100vw] brightness-50 transition-transform duration-1000 ease-in-out carousel_img" alt="Vaze College Committees" />

            <img src="https://vazecollege.net/wp-content/uploads/2016/03/clg8-370x296.jpg" class="h-[100vh] w-[100vw] brightness-50 transition-transform duration-1000 ease-in-out carousel_img" alt="Vaze College Committees" />


        </div>

        <div class="flex flex-col">

            <div class="h-[100vh] text-3xl sm:text-[4rem] sm:leading-normal text-white font-bold">
                <p class="mt-32 px-8 w-[60%] ">
                    EXPLORE THE VARIOUS COMMITTEES THAT KEEP THE CULTURAL TRADITION ALIVE
                </p>
            </div>
            <div class="dark:bg-black bg-slate-100 pb-8">
                <div class="flex flex-col sm:flex-row p-8 sm:gap-4">
                    <div class=" w-full flex flex-col">
                        <p class="text-2xl dark:text-white">
                            A BRIEF ABOUT THE VARIOUS COMMITTEES IN THE COLLEGE.
                        </p>
                        <p class="text-sm dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus praesentium corporis illum earum autem? Repudiandae laudantium fugit delectus fugiat at velit atque? Aliquid dicta deleniti consequuntur nemo quod in id?</p>
                    </div>
                    <!-- <div class="sm:w-[40%] w-full">
                        <ul class="list-none dark:text-white">
                            <li class="border-b hover:cursor-pointer">Statutory committees</li>
                            <li class="border-b hover:cursor-pointer mt-4">Non-Statutory committees</li>
                            <li class="border-b hover:cursor-pointer mt-4">Activity Groups</li>
                        </ul>
                    </div> -->
                </div>


                <div class="flex flex-col mt-12 px-8">
                    <h4 class="font-bold text-[2rem] text-center dark:text-white">All Committees</h4>
                    <p class="text-slate-500 text-sm text-center">Includes all the committees and activity groups</p>

                    <div class="mt-4 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6  2xl:grid-cols-8 gap-4 sm:gap-8">
                        <?php

                        if ($fetch_committees_query_result) {
                            while ($row = $fetch_committees_query_result->fetch_assoc()) {

                        ?>
                                <!--card start-->
                                <div class="z-10 rounded-2xl cursor-pointer  relative  hover:-translate-y-2 h-full flex flex-col  bg-slate-100 hover:bg-white dark:bg-gray-800 dark:hover:bg-blue-300 transition-all duration-500  hover:shadow-2xl card">
                                    <!-- <div class="  "> -->
                                    <img src="<?php echo $row["committee_symbol_file_name"] != null ?  "../../../assests/committee_icons/{$row['committee_symbol_file_name']}" : $vaze_logo ?>" class="z-10 rounded-[inherit] aspect-square h-[75%]" alt="Vaze College Committees" />
                                    <p class="z-10 font-bold dark:text-white text-blue-800 text-center mt-2 mb-4"><?php echo $row["committee_name"] ?></p>
                                    <p class="hidden text-transparent"><?php echo encryptId($row["committee_id"], "../../../config/openssl_encrypt_decrypt_credentials.php"); ?></p>
                                    <!-- </div> -->
                                </div>
                                <!--card end-->

                        <?php

                            }
                        }
                        ?>
                    </div>
                </div>


            </div>
            <!--
                /***************
                FOOTER
                ****************/
                -->
            <?php include('../../Layouts/footer.php'); ?>
        </div>
    </div>

    <!--Side div-->
    <div class="flex flex-col h-[90vh] md:h-[83vh] w-[100vw] md:translate-x-[100rem] md:translate-y-0 translate-y-[100rem] translate-x-0 md:w-2/3 z-[1000] fixed right-0 bottom-0 bg-white transition-transform duration-700 overflow-y-scroll pb-8 rounded-t-2xl md:rounded-none" id="side_div">

        <!--Close button-->
        <span class="pr-4 py-4">
            <svg id="close_btn" class="float-right hover:cursor-pointer" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
            </svg>
        </span>

        <!--Committee Name heading-->
        <div class="px-8  font-bold text-xl sm:text-[3rem] sm:leading-none text-center" id="committee_name_heading"></div>

        <!--Loading animation div-->
        <div class="h-[100%]  w-[100%] -z-10 hidden " id="side_div_loading_animation_div"></div>

        <!--degree members heading-->
        <div class="px-8 mt-8 font-medium text-blue-900 text-lg hidden" id="degree_members_heading">Degree College Members</div>

        <!--degree members list-->
        <ul class="list-none px-8 mt-2" id="degree_committee_members_ul"></ul>

        <!--Junior members heading-->
        <div class="px-8 mt-8 font-medium text-blue-900 text-lg hidden" id="jc_members_heading">Junior College Members</div>

        <!--Junior Members list-->
        <ul class="list-none px-8 mt-2 hidden" id="jc_committee_members_ul"></ul>
    </div>
    <!--Side div end-->

</body>
<script src="../../../js/common/header_2.js"></script>
<script src="../../../js/secondary_committees_tab/committees.js" type="module"></script>
<!--lottie animation player-->
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
<?php include('../../../library/AOS.php'); ?>

</html>