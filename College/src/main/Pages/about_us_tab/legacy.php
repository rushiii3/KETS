<?php

//echo "here";
include("../../../config/connect.php");

$fetch_all_stmt = "SELECT * FROM cp_has_tenure, college_personnel,tenure WHERE cp_has_tenure.cp_id=college_personnel.cp_id AND cp_has_tenure.tenure_id=tenure.tenure_id ORDER BY tenure.tenure_start_date, tenure.tenure_end_date ASC;";


$fetch_query = $conn->prepare($fetch_all_stmt);
$fetch_query->execute();
$result = $fetch_query->get_result();

$principals_array = [];
$vice_principals_degree_array = [];
$vice_principals_junior_array = [];
$principal_tenure_years = [];

$vice_principal_junior_tenure_years = [];
$vice_principal_degree_tenure_years = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        //echo $row["role"];
        switch ($row["role"]) {
            case "p":
                array_push($principals_array, $row);
                // Create a DateTime object
                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('Y');
                if ($row["tenure_end_date"]) {
                    $end_date = new DateTime($row["tenure_end_date"]);
                    // Extract the year using format
                    $year2 = $end_date->format('Y');
                } else {
                    $year2 = "today";
                }
                $final_year = $year1 . "-" . $year2;
                array_push($principal_tenure_years, $final_year);

                break;
            case "vpd":
                array_push($vice_principals_degree_array, $row);

                // Create a DateTime object
                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('Y');
                if ($row["tenure_end_date"]) {
                    $end_date = new DateTime($row["tenure_end_date"]);
                    // Extract the year using format
                    $year2 = $end_date->format('Y');
                } else {
                    $year2 = "today";
                }
                $final_year = $year1 . "-" . $year2;
                array_push($vice_principal_degree_tenure_years, $final_year);

                break;
            case "vpj":
                array_push($vice_principals_junior_array, $row);
                // Create a DateTime object
                $start_date = new DateTime($row["tenure_start_date"]);
                $year1 = $start_date->format('Y');
                if ($row["tenure_end_date"]) {
                    $end_date = new DateTime($row["tenure_end_date"]);
                    // Extract the year using format
                    $year2 = $end_date->format('Y');
                } else {
                    $year2 = "today";
                }
                $final_year = $year1 . "-" . $year2;
                array_push($vice_principal_junior_tenure_years, $final_year);

                break;
        }

        
    }

    //echo count($principals_array);
} else {
    echo "<script>console.log('fetch error'" . $conn->error . ")";
}
?>

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

        @media (min-width: 648px){

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


    <!--PRINCIPALS-->

    <div class="flex flex-col items-center">

        <!--TITLE -->
        <section class="py-8">
            <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Our Pillars of Excellence</h2>
                    <p class="lg:mx-auto  text-gray-600 dark:text-gray-300"> Our Principals throughout the years </p>
                </div>
            </div>
        </section>

        <!--Year slider div-->
        <div class="flex w-full">
            <ul class="list-none flex h-[4.3rem] justify-between items-center w-full dark:text-white  overflow-clip" id="year_ul_principals">

                <li class="w-1/3 flex-none "></li>

                <li class="text-xl flex-none sm:text-4xl md:text-[3rem] lg:text-[3.7rem] text-center w-1/3 font-black transition-all duration-500 "><?php echo $principal_tenure_years[0] ?></li>
                <?php
                for ($i = 1; $i < count($principal_tenure_years); $i++) {
                    echo '
                <li class="text-sm flex-none sm:text-2xl md:text-4xl font-bold lg:text-5xl text-center  w-1/3 inactive_year  dark:inactive_year transition-all duration-500">' . $principal_tenure_years[$i] . ' </li>';
                }

                ?>


            </ul>
        </div>



        <!--Principal Info div-->
        <div class="flex mt-12 w-full relative">

            <!--Previous button-->
            <button class="bg-white w-fit p-4 absolute left-0 top-[50%] opacity-60 z-10 hover:opacity-100 dark:text-black" id="prev_button_principals">
                <span class="material-symbols-outlined">
                    arrow_back_ios
                </span>
            </button>

            <div class="flex overflow-x-clip">
                <?php
                
                foreach ($principals_array as $principal) {
                    
                ?>

                    <!-- card 1-->
                    <div class="flex-none  w-[100vw]  px-16 dark:text-white principal_info_card transition-all duration-500">
                        <div class="flex justify-between lg:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400 ">
                            <div class="w-[100%] flex-1 lg:flex-none lg:w-2/5 ">
                                <img src="<?php echo $principal["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740" ?>" class="w-full h-full object-fill aspect-video lg:rounded-l-xl lg:rounded-tr-none rounded-t-xl"   />
                            </div>
                            <div class="lg:w-3/5 flex-1 lg:flex-none p-2 sm:p-4">
                                <p class="text-center mt-2  text-2xl sm:text-4xl font-black"><?php echo $principal["cp_honourific"] . " " . $principal["cp_name"]; ?></p>
                                <p class="text-sm sm:text-xl mt-4 font-bold italic text-center">
                                    <?php 
                                    echo (new DateTime($principal["tenure_start_date"]))->format('F j, Y') ." - " ;
                                    if( $principal["tenure_end_date"]){
                                        echo (new DateTime($principal["tenure_end_date"]))->format('F j, Y'); 
                                    }
                                    else{
                                        echo "today";
                                    }
                                    
                                    ?>
                                </p>
                                <p class=" lg:mt-2 line-clamp-4 md:line-clamp-none lg:text-justify  p-2 lg:p-8 ">
                                    <?php
                                    echo $principal["cp_about"];
                                    ?>

                                </p>
                            </div>

                        </div>
                    </div>
                <?php
                }
                
                ?>

                <?php /*
                <!--card 2-->
                <div class="flex-none  w-[100vw]  px-16 dark:text-white principal_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img srcset="https://vazecollege.net/wp-content/uploads/2022/06/Dr-M-R-Kurup.png" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">G.T Paratkar </p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>
                
                <!--card 3-->
                <div class="flex-none w-[100vw]  px-16 py-4 dark:text-white principal_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">B.B. Sharma</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>

                <!--card 4-->
                <div class="flex-none w-[100vw] dark:text-white px-16 principal_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">Prof. (Dr.) Preeta Nilesh</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>
                
                */ ?>

            </div>

            <!--Next button-->
            <button class="bg-white w-fit p-4 absolute right-0 top-[50%] opacity-60 hover:opacity-100 dark:text-black" id="next_button_principals"><span class="material-symbols-outlined">
                    arrow_forward_ios
                </span>
            </button>


            <!--END OF PRINCIPAL INFO DIV-->
        </div>
    </div>


    <hr class="h-px  mx-auto w-[90%] my-8 bg-gray-200 border-0 dark:bg-gray-700">

    <!--VICE PRINCIPALS DEGREE-->
    <div class="flex flex-col items-center">

        <!--TITLE -->
        <section class="py-8">
            <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Our Strategic Leaders of Degree College </h2>
                    <p class="lg:mx-auto  text-gray-600 dark:text-gray-300"> Our Degree-College Vice-Principals throughout the years </p>
                </div>
            </div>
        </section>

        <!--Year slider div-->
        <div class="flex w-full">
            <ul class="list-none flex h-[4.3rem] justify-between items-center w-full dark:text-white  overflow-clip" id="year_ul_vp_degree">
                <li class="w-1/3 flex-none "></li>
                <li class="text-xl  flex-none sm:text-4xl md:text-[3rem] lg:text-[3.7rem] text-center w-1/3 font-black transition-all duration-500 "><?php echo $vice_principal_degree_tenure_years[0] ?></li>

                <?php
                for ($i = 1; $i < count($vice_principal_degree_tenure_years); $i++) {
                    echo '
                <li class="text-sm flex-none sm:text-2xl md:text-4xl font-bold lg:text-5xl text-center  w-1/3 inactive_year  dark:inactive_year transition-all duration-500">' . $vice_principal_degree_tenure_years[$i] . '</li>';
                }
                ?>


            </ul>
        </div>



        <!--Vice Principal Info div-->
        <div class="flex mt-12 w-full relative">

            <!--Previous button-->
            <button class="bg-white w-fit p-4 absolute left-0 top-[50%] opacity-60 z-10 hover:opacity-100 dark:text-black" id="prev_button_vp_degree">
                <span class="material-symbols-outlined">
                    arrow_back_ios
                </span>
            </button>

            <div class="flex overflow-x-clip">
                <?php
                foreach ($vice_principals_degree_array as $vpd) {
                ?>

                    <!-- card 1-->
                    <div class="flex-none  w-[100vw]  px-16 dark:text-white vp_degree_info_card transition-all duration-500">
                        <div class="flex justify-between lg:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                            <div class="w-[100%] flex-1 lg:flex-none lg:w-2/5">
                                <img src="<?php echo $vpd["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740" ?>" class="w-full h-full object-fill aspect-video lg:rounded-l-xl lg:rounded-tr-none rounded-t-xl" />
                            </div>
                            <div class="lg:w-3/5 flex-1 lg:flex-none p-2 sm:p-4">
                                <p class="text-center mt-2  text-2xl sm:text-4xl font-black"><?php echo $vpd["cp_honourific"] . " " . $vpd["cp_name"]; ?></p>
                                <p class="text-xl mt-4 italic text-center">
                                    <?php 
                                    echo (new DateTime($vpd["tenure_start_date"]))->format('F j, Y') ." - " ;
                                    if( $vpd["tenure_end_date"]){
                                        echo (new DateTime($vpd["tenure_end_date"]))->format('F j, Y'); 
                                    }
                                    else{
                                        echo "today";
                                    }
                                    
                                    ?>
                                </p>
                                <p class="mt-2 text-justify p-2 lg:p-8 ">
                                    <?php
                                    echo $vpd["cp_about"];

                                    ?>

                                </p>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>

                <?php
                /*
                <!--card 2-->
                <div class="flex-none  w-[100vw]  px-16 dark:text-white vp_degree_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">G.T Paratkar </p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>

                <!--card 3-->
                <div class="flex-none w-[100vw]  px-16 py-4 dark:text-white vp_degree_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">B.B. Sharma</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>

                <!--card 4-->
                <div class="flex-none w-[100vw] dark:text-white px-16 vp_degree_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">Prof. (Dr.) Preeta Nilesh</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>
                */
                ?>
            </div>

            <!--Next button-->
            <button class="bg-white w-fit p-4 absolute right-0 top-[50%] opacity-60 hover:opacity-100 dark:text-black" id="next_button_vp_degree">
                <span class="material-symbols-outlined">
                    arrow_forward_ios
                </span>
            </button>


            <!--END OF PRINCIPAL INFO DIV-->
        </div>
    </div>

    <hr class="h-px  mx-auto w-[90%] my-8 bg-gray-200 border-0 dark:bg-gray-700">


    <!--VICE PRINCIPALS JUNIOR-->
    <div class="flex flex-col items-center">


        <!--TITLE -->
        <section class="py-8">
            <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white"> Our Strategic Leaders of Junior College </h2>
                    <p class="lg:mx-auto  text-gray-600 dark:text-gray-300"> Our Junior-College Vice-Principals throughout the years </p>
                </div>
            </div>
        </section>

        <!--Year slider div-->
        <div class="flex w-full">
            <ul class="list-none flex h-[4.3rem] justify-between items-center w-full dark:text-white  overflow-clip" id="year_ul_vp_junior">
                <li class="w-1/3 flex-none "></li>
                <li class="text-xl  flex-none sm:text-4xl md:text-[3rem] lg:text-[3.7rem] text-center w-1/3 font-black transition-all duration-500 "><?php echo $vice_principal_junior_tenure_years[0] ?></li>
                <?php
                for ($i = 1; $i < count($vice_principal_junior_tenure_years); $i++) {
                    echo '
                <li class="text-sm  flex-none sm:text-2xl md:text-4xl font-bold lg:text-5xl text-center  w-1/3 inactive_year  dark:inactive_year transition-all duration-500">' . $vice_principal_junior_tenure_years[$i] . '</li>';
                }
                ?>


            </ul>
        </div>



        <!--Vice Principal Info div-->
        <div class="flex mt-12 w-full relative">

            <!--Previous button-->
            <button class="bg-white w-fit p-4 absolute left-0 top-[50%] opacity-60 z-10 hover:opacity-100 dark:text-black" id="prev_button_vp_junior">
                <span class="material-symbols-outlined">
                    arrow_back_ios
                </span>
            </button>

            <div class="flex overflow-x-clip">
                <?php
                foreach ($vice_principals_junior_array as $vpj) {
                ?>

                    <!-- card 1-->
                    <div class="flex-none  w-[100vw]  px-16 dark:text-white vp_junior_info_card transition-all duration-500">
                        <div class="flex justify-between lg:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400 ">
                            <div class="w-[100%] flex-1 lg:flex-none lg:w-2/5">
                                <img src="<?php echo $vpj["cp_image_path"] ?? "https://img.freepik.com/free-vector/isolated-young-handsome-man-different-poses-white-background-illustration_632498-856.jpg?t=st=1718476592~exp=1718480192~hmac=1fd0511e34f2bf15333d89d91a629f75c1fc9d751943a2e0c7eab388a2019c11&w=740" ?>" class="w-full h-full object-fill aspect-video lg:rounded-l-xl lg:rounded-tr-none rounded-t-xl" />
                            </div>
                            <div class="lg:w-3/5 flex-1 lg:flex-none p-2 sm:p-4">
                                <p class="text-center mt-2  text-2xl sm:text-4xl font-black"><?php echo $vpj["cp_honourific"] . " " . $vpj["cp_name"]; ?></p>
                                <p class="text-sm sm:text-xl mt-4 font-bold italic text-center"> 
                                    <?php 
                                    echo (new DateTime($vpj["tenure_start_date"]))->format('F j, Y') ." - " ;
                                    if( $vpj["tenure_end_date"]){
                                        echo (new DateTime($vpj["tenure_end_date"]))->format('F j, Y'); 
                                    }
                                    else{
                                        echo "today";
                                    }
                                    
                                    ?>
                                    </p>
                                <p class="lg:mt-2 text-justify p-2 lg:p-8 ">
                                    <?php
                                    echo $vpj["cp_about"];

                                    ?>

                                </p>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>

                <?php
                /*
                <!--card 2-->
                <div class="flex-none  w-[100vw]  px-16 dark:text-white vp_junior_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">G.T Paratkar </p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>

                <!--card 3-->
                <div class="flex-none w-[100vw]  px-16 py-4 dark:text-white vp_junior_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">B.B. Sharma</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>

                <!--card 4-->
                <div class="flex-none w-[100vw] dark:text-white px-16 vp_junior_info_card transition-all duration-500">
                    <div class="sm:flex sm:justify-between sm:flex-row flex-col dark:bg-gray-700 dark:shadow-none rounded-xl shadow-2xl shadow-gray-400">
                        <div class="w-full sm:w-2/5 ">
                            <img src="https://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="w-full h-full sm:rounded-l-xl sm:rounded-tr-none rounded-t-xl" />
                        </div>
                        <div class="sm:w-3/5 p-4">
                            <p class="text-center mt-2 text-4xl font-black">Prof. (Dr.) Preeta Nilesh</p>
                            <p class="text-xl mt-4 italic text-center">“Enfold Challenges and Emerge with Opportunities”</p>
                            <p class="mt-2 text-justify p-8 ">
                                Prof. (Dr.) Preeta Nilesh, Principal
                                Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
                        </div>

                    </div>
                </div>
                */
                ?>

            </div>

            <!--Next button-->
            <button class="bg-white w-fit p-4 absolute right-0 top-[50%] opacity-60 hover:opacity-100 dark:text-black" id="next_button_vp_junior">
                <span class="material-symbols-outlined">
                    arrow_forward_ios
                </span>
            </button>


            <!--END OF PRINCIPAL INFO DIV-->
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