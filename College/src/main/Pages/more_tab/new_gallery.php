<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <style>
        .top_card,
        .card {
            transition: transform 1s ease-in-out;

        }
    </style>
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

    <!--Breadcrumbs-->

    <!--Main content-->
    <div class="flex flex-col mt-32">

        <div class="flex flex-col w-full">
            <p class="font-medium  text-center text-[4rem]" data-aos="fade-up">Gallery</p>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2  lg:grid-cols-4  gap-8 px-16 mt-12 mb-8">

            <!--HISTORY-->
            <div class="relative flex justify-center">
                <!--top most card-->
                <div class=" group flex flex-col relative top_card  overflow-clip ">

                    <div class="absolute z-[1] top-0 left-0  h-full w-full bg-gradient-to-b from-transparent to-gray-950 from-20% "></div>

                    <img class=" aspect-square group-hover:scale-110 transition-transform duration-500 object-cover " src="http://vazecollege.net/wp-content/uploads/2016/03/college.jpg" alt="gallery" />

                    <div class="px-2 flex flex-col  absolute bottom-2  left-0 w-full ">
                        <p class="z-10 font-medium  text-2xl "> Our History</p>

                        <div class="flex justify-end mt-4">

                            <a href="" class=" z-10 rounded-full bg-blue-800 w-6 h-6 sm:w-8 sm:h-8 sm:text-[2rem]  text-[1.25rem] flex items-center justify-center "> > </a>
                        </div>
                    </div>

                </div>

                <!-- <div class="-z-[1] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10-1.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[2] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[3] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-6.jpg" alt="gallery" />

                        
                    </div>
                </div>

                <div class="-z-[4] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-3.jpg" alt="gallery" />

                       
                    </div>
                </div> -->

            </div>

            <!--ACHIEVEMENTs-->
            <div class="relative flex justify-center">
                <!--top most card-->
                <div class=" group flex flex-col relative top_card  overflow-clip ">

                    <div class="absolute z-[1] top-0 left-0  h-full w-full bg-gradient-to-b from-transparent to-gray-950 from-20% "></div>

                    <img class=" aspect-square group-hover:scale-110 transition-transform duration-500 object-cover" src="http://vazecollege.net/wp-content/uploads/2020/08/Mayank-Chaphekar-alumnus-of-VAZE-bagged-6-gold-medals-and-1-bronze-medal-in-the-National-Games-2023-for-Modern-Pentathlon-570x856-400x400_c.jpg" alt="gallery" />

                    <div class="px-2 flex flex-col  absolute bottom-2  left-0 w-full ">
                        <p class="z-10 font-medium  text-2xl "> Our Achievements</p>

                        <div class="flex justify-end mt-4">

                            <a href="" class=" z-10 rounded-full bg-blue-800 w-6 h-6 sm:w-8 sm:h-8 sm:text-[2rem]  text-[1.25rem] flex items-center justify-center "> > </a>
                        </div>
                    </div>

                </div>

                <!-- <div class="-z-[1] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10-1.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[2] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[3] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-6.jpg" alt="gallery" />

                        
                    </div>
                </div>

                <div class="-z-[4] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-3.jpg" alt="gallery" />

                       
                    </div>
                </div> -->

            </div>


            <!--FACULTY-->
            <div class="relative flex justify-center">
                <!--top most card-->
                <div class=" group flex flex-col relative top_card  overflow-clip ">

                    <div class="absolute z-[1] top-0 left-0  h-full w-full bg-gradient-to-b from-transparent to-gray-950 from-20% "></div>

                    <img class=" aspect-square group-hover:scale-110 transition-transform duration-500 object-cover " src="http://vazecollege.net/wp-content/uploads/2022/04/Degree-SFC-1024x768.jpg" alt="gallery" />

                    <div class="px-2 flex flex-col  absolute bottom-2  left-0 w-full ">
                        <p class="z-10 font-medium  text-2xl "> Our Faculty</p>

                        <div class="flex justify-end mt-4">

                            <a href="" class=" z-10 rounded-full bg-blue-800 w-6 h-6 sm:w-8 sm:h-8 sm:text-[2rem]  text-[1.25rem] flex items-center justify-center "> > </a>
                        </div>
                    </div>

                </div>

                <!-- <div class="-z-[1] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10-1.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[2] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[3] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-6.jpg" alt="gallery" />

                        
                    </div>
                </div>

                <div class="-z-[4] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-3.jpg" alt="gallery" />

                       
                    </div>
                </div> -->

            </div>


            <!--EVENTS-->
            <div class="relative flex justify-center">
                <!--top most card-->
                <div class=" group flex flex-col relative top_card  overflow-clip ">

                    <div class="absolute z-[1] top-0 left-0  h-full w-full bg-gradient-to-b from-transparent to-gray-950 from-20% "></div>

                    <img class=" aspect-square group-hover:scale-110 transition-transform duration-500 object-cover " src="http://vazecollege.net/wp-content/uploads/2020/08/%e0%a4%97%e0%a5%8d%e0%a4%b0%e0%a4%82%e0%a4%a5%e0%a4%a6%e0%a4%bf%e0%a4%82%e0%a4%a1%e0%a5%80-%e0%a4%ae%e0%a4%be%e0%a4%af%e0%a4%ac%e0%a5%8b%e0%a4%b2%e0%a5%80%e0%a4%9a%e0%a5%80...-%e0%a4%b8%e0%a4%b9%e0%a4%ad%e0%a4%be%e0%a4%97-%e0%a4%b5%e0%a4%bf%e0%a4%a6%e0%a5%8d%e0%a4%af%e0%a4%be%e0%a4%b0%e0%a5%8d%e0%a4%a5%e0%a5%80-%e0%a4%b6%e0%a4%bf%e0%a4%95%e0%a5%8d%e0%a4%b7%e0%a4%95-%e0%a4%b5-%e0%a4%b6%e0%a4%bf%e0%a4%95%e0%a5%8d%e0%a4%b7%e0%a4%95%e0%a5%87%e0%a4%a4%e0%a4%b0-%e0%a4%95%e0%a4%b0%e0%a5%8d%e0%a4%ae%e0%a4%9a%e0%a4%be%e0%a4%b0%e0%a5%80-1024x468.jpeg" alt="gallery" />

                    <div class="px-2 flex flex-col  absolute bottom-2  left-0 w-full ">
                        <p class="z-10 font-medium  text-2xl "> Events Gallery</p>

                        <div class="flex justify-end mt-4">

                            <a href="" class=" z-10 rounded-full bg-blue-800 w-6 h-6 sm:w-8 sm:h-8 sm:text-[2rem]  text-[1.25rem] flex items-center justify-center "> > </a>
                        </div>
                    </div>

                </div>

                <!-- <div class="-z-[1] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10-1.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[2] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/clg10.jpg" alt="gallery" />

                       
                    </div>
                </div>

                <div class="-z-[3] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-6.jpg" alt="gallery" />

                        
                    </div>
                </div>

                <div class="-z-[4] absolute top-0 left-0  w-72 h-72  card">
                    <div class=" flex flex-col relative">
                        <div class="absolute z-[1] top-0 left-0 h-full bg-gradient-to-b from-transparent to-gray-950 from-20%"></div>

                        <img class="h-full w-full aspect-square" src="http://vazecollege.net/wp-content/uploads/2016/03/college-3.jpg" alt="gallery" />

                       
                    </div>
                </div> -->

            </div>



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
        // $(".top_card").on("mouseenter", function() {
        //     //let translate_x = 0;
        //     let translate_y = 0
        //     //$(this)[0].style.transform = `translate(${translate_x}px)`;

        //     $(this).siblings().each(function() {
        //        // translate_x += 10;
        //         translate_y += 100

        //         //$(this)[0].style.transform = `translate(${translate_x}%, ${translate_y}%)`;
        //           $(this)[0].style.transform = `translateY(${translate_y}%)`;
        //     })

        // })


        // $(".top_card").on("mouseleave", function() {
        //     // $(this)[0].style.transform = `translate(0px)`;;
        //     $(this).siblings().each(function() {

        //         $(this)[0].style.transform = `translateY(0px)`;
        //     })
        // })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>