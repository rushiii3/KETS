<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V. G. VAZE | Infrastructure</title>
    <?php include('../../../library/library.php'); ?>
    <link rel="stylesheet" href="../../../css/common/header_2.css" />
    <style>
        #take_a_look_btn:hover::after {
            z-index: -1;
            content: "";
            position: absolute;
            height: 150px;
            width: 150px;
            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);
            border-radius: 999px;
            background-image: conic-gradient(from 0deg, lightgreen, #55c2ee, #55c2ee, lightgreen);
            animation: spin 1s linear infinite;

        }

        #take_a_look_btn:hover::before {
            z-index: 2;
            content: "";
            position: absolute;
            inset: 5px;
            border-radius: inherit;
            background-color: white
        }

        #take_a_look_btn {
            overflow: hidden;
            z-index: 10;
            /* transition: all; */

        }

        #take_a_look_btn p {
            z-index: 3;
        }


        .up_and_down {
            animation: up_and_down_anim 1.5s linear infinite;

        }

        .zoom_and_fill_anim {
            animation: zoom_and_fill 1500ms cubic-bezier(1, 0, 0.25, 1);
            animation-fill-mode: both;
        }

        @keyframes up_and_down_anim {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(5px);
            }

            100% {
                transform: translateY();
            }
        }

        @keyframes spin {
            0% {
                background-position: 0% 0%;
                transform: translate(-50%, -50%) rotate(0deg);
            }



            100% {
                background-position: 0% 0%;
                transform: translate(-50%, -50%) rotate(360deg);
            }

        }

        @keyframes zoom_and_fill {

            from {
                z-index: 10;
            }

            to {

                height: 100vh;
                width: 100vw;
                z-index: 1;
                left: 0;
                bottom: 0;
                border: none;

                margin-bottom: 0;


            }

        }
    </style>
</head>

<body class="bg-white dark:bg-black relative">
    <!--
    /***************
    NAVBAR 
    ****************/
    -->
    <?php include('../../Layouts/header2.php'); ?>

    <!--
    /***************
     BREADCRUMBS - to show where the user is currently
    ****************/mt-8:
    -->


    <!--
    /***************
    MAIN CONTENTS 
    ****************/
    -->

    <div class="h-[100vh] w-[100vw] relative ">

        <img src="../../../assets/png/college.png" class="h-full w-full -z-10" alt="infrastructure_image" />
        <div class="absolute top-0 bg-gradient-to-br from-transparent to-black from-10% z-[11] h-full w-full"></div>
        <div class="p-2 z-[20] mt-32 absolute bottom-6  w-[60vw] right-0 ">
            <h1 class="text-[3rem] sm:text-[4rem] md:text-[5rem] lg:text-[6rem] text-white  font-bold">Over 1,80,000 Square ft.</h1>

            <p class="text-white text-xl">Spaciously designed classrooms, well-equipped laboratories and much more...</p>
            <button class="text-blue-800 mt-4 bg-white  py-4 px-4  rounded-full flex relative  " id="take_a_look_btn">
                <p class="">Take a look</p>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff" class="up_and_down absolute top-[22%] right-2">
                        <path d="M440-800v487L216-537l-56 57 320 320 320-320-56-57-224 224v-487h-80Z" />
                    </svg> </button> -->
        </div>



        <div class=" absolute bottom-0  left-0 w-[30vw] h-[30vh] z-10" id="carousel_div">

            <div class=" absolute bottom-0 left-4 -translate-x-[0rem] z-10 overflow-hidden mb-2  h-12 w-12 sm:w-28 sm:h-28 lg:h-36 lg:w-36 rounded-lg  carousel_image transition-all duration-500 border-4 border-white">
                <img src=" http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0029-1024x768.jpg" alt="infrastructure_img" class="object-fill  h-full w-full" />
            </div>




            <div class=" absolute bottom-0 left-4 -translate-x-[14rem] z-10  overflow-hidden mb-2  h-12 w-12 sm:w-28 sm:h-28 lg:h-36 lg:w-36 rounded-lg  carousel_image transition-all duration-500 border-4 border-white">
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0006-1-1024x768.jpg" alt="infrastructure_img" class="object-fill  h-full w-full" />
            </div>

            <div class=" absolute bottom-0  left-4 -translate-x-[28rem]  z-10  overflow-clip mb-2  h-12 w-12 sm:w-28 sm:h-28 lg:h-36 lg:w-36 rounded-lg  carousel_image  transition-all duration-500 border-4 border-white">
                <img src="../../../assets/png/college.png" alt="infrastructure_img" class="object-fill  h-full w-full " />
            </div>



        </div>


    </div>

    <div class=" flex flex-col dark:text-white px-8 mb-8">

        <div class="flex flex-col  mt-12 gap-4">
            <div class="h-[10%]">
                <p class="font-bold text-[3rem] lg:text-[5rem]">Laboratories</p>
                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, temporibus accusamus eaque autem id tempore quod ipsum rerum ratione saepe ab odit officiis tenetur iste numquam totam quos nostrum Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam cupiditate, aliquid ex voluptates placeat iste minima necessitatibus aut! Repellat ex a alias minus iure eum, consequatur deleniti eveniet maiores!</p>
            </div>

            <div class=" grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-3 gap-2 grid_div flex-1">
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture10.jpg" class="rounded-2xl  w-full h-full transition-all duration-500" alt="infrastructure_image" />
                <!-- col-span-3 row-span-2 -->
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture4.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture5-1024x768.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture6-1024x768.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture3-1024x768.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Laboratories-1024x718.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

                <img src="https://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0018.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

            </div>


        </div>


        <div class="flex flex-col sm:flex-row  mt-12 gap-4 sm:h-[50vh] ">
            <div class="flex-1 ">
                <p class="font-bold text-[3rem] lg:text-[5rem]">
                    Conference
                </p>
                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, temporibus accusamus eaque autem id tempore quod ipsum rerum ratione saepe ab odit officiis tenetur iste numquam totam quos nostrum Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam cupiditate, aliquid ex voluptates placeat iste minima necessitatibus aut! Repellat ex a alias minus iure eum, consequatur deleniti eveniet maiores!</p>
            </div>

            <div class="flex-1 grid grid-cols-2 grid-rows-2 gap-2 grid_div">
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/DSC_8833.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full  transition-all duration-500" alt="infrastructure_image" />

                <img src="http://vazecollege.net/wp-content/uploads/2016/04/DSC_8866.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full transition-all duration-500" alt="infrastructure_image" />

                <img src="http://vazecollege.net/wp-content/uploads/2016/04/DSC_8956.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full  transition-all duration-500" alt="infrastructure_image" />

                <img src="http://vazecollege.net/wp-content/uploads/2016/04/DSC_8959.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full transition-all duration-500" alt="infrastructure_image" />

            </div>


        </div>


        <div class="flex flex-col-reverse sm:flex-row  mt-36 gap-8">
            <div class="sm:w-[50%] w-full px-12">
                <div class="grid grid-cols-2 sm:grid-cols-1 gap-4">

                    <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture2.jpg" class="rounded-2xl h-full w-full " alt="infrastructure_image" />

                    <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture1.jpg" class="rounded-2xl h-full w-full " alt="infrastructure_image" />
                </div>
            </div>

            <div class="flex-1 sm:w-[40%]">
                <p class="font-bold text-[3rem] lg:text-[5rem]">Libraries</p>
                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, temporibus accusamus eaque autem id tempore quod ipsum rerum ratione saepe ab odit officiis tenetur iste numquam totam quos nostrum Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam cupiditate, aliquid ex voluptates placeat iste minima necessitatibus aut! Repellat ex a alias minus iure eum, consequatur deleniti eveniet maiores!</p>
            </div>
        </div>


        <div class="flex flex-col  mt-36 gap-4">
            <div class="h-[10%]">
                <p class="font-bold text-[3rem] lg:text-[5rem]">Cosmetology</p>
                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, temporibus accusamus eaque autem id tempore quod ipsum rerum ratione saepe ab odit officiis tenetur iste numquam totam quos nostrum Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam cupiditate, aliquid ex voluptates placeat iste minima necessitatibus aut! Repellat ex a alias minus iure eum, consequatur deleniti eveniet maiores!</p>
            </div>

            <div class=" grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-3 gap-2 grid_div flex-1">
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/cosmetology_0011.jpg" class="rounded-2xl  w-full h-full transition-all duration-500" alt="infrastructure_image" />
                <!-- col-span-3 row-span-2 -->
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/cosmetology_0014.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/cosmetology_0028.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/cosmetology_0030.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/vaze-college_0005.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/vaze-college_0006.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

                <img src="http://vazecollege.net/wp-content/uploads/2016/04/vaze-college_0008-2.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

            </div>


        </div>



        <div class="flex flex-col  mt-12 gap-4">
            <div class="h-[10%]">
                <p class="font-bold text-[3rem] lg:text-[5rem]">Research</p>
                <p class="mt-2 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, temporibus accusamus eaque autem id tempore quod ipsum rerum ratione saepe ab odit officiis tenetur iste numquam totam quos nostrum Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nam cupiditate, aliquid ex voluptates placeat iste minima necessitatibus aut! Repellat ex a alias minus iure eum, consequatur deleniti eveniet maiores!</p>
            </div>

            <div class=" grid grid-cols-2 sm:grid-cols-4 sm:grid-rows-3 gap-2 grid_div flex-1">
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0001-1024x768.jpg" class="rounded-2xl  w-full h-full transition-all duration-500" alt="infrastructure_image" />
                <!-- col-span-3 row-span-2 -->
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0007-300x250.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0008-300x250.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0013-300x250.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0026-300x250.jpg" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture11-300x250.png" class="rounded-2xl col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

                <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture13-300x250.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />
                  <img src="http://vazecollege.net/wp-content/uploads/2016/04/Picture12-300x250.jpg" class="rounded-2xl  col-span-1 row-span-1 w-full h-full apsect-video transition-all duration-500" alt="infrastructure_image" />

            </div>


        </div>





    </div>

    <!--
    /***************
    FOOTER
    ****************/
    -->
    <?php include('../../Layouts/footer.php'); 
    ?>
    <script src="../../../js/common/header_2.js"></script>
    <script>
        $("#take_a_look_btn").click(function() {
            window.scroll({
                top: window.innerHeight - 100,
                behavior: "smooth"

            })
        })

        function playCarousel() {
            let current_img_index = 0; //counting is from right to left
            let previous_img_index = 0

            let index_translated_by = {
                0: 0,
                1: 14,
                2: 28,
            }
            let total_images = $(".carousel_image").length

            //while (current_img_index < $(".carousel_image").length) {
            setInterval(() => {

                if (current_img_index < $(".carousel_image").length) {
                    $(".carousel_image")[current_img_index].classList.add("zoom_and_fill_anim")


                    setTimeout(() => {

                        if (previous_img_index != current_img_index) {
                            if (!$(".carousel_image")[previous_img_index].classList.contains(`hidden`)) {
                                $(".carousel_image")[previous_img_index].classList.add(`hidden`)
                            }

                            if (!$(".carousel_image")[previous_img_index].classList.contains(`delay-[100]`)) {
                                $(".carousel_image")[previous_img_index].classList.add(`delay-[100]`)
                            }

                            $(".carousel_image")[previous_img_index].classList.remove("zoom_and_fill_anim")

                            $(".carousel_image")[previous_img_index].classList.replace(`-translate-x-[0rem]`, `-translate-x-[28rem]`)
                            index_translated_by[previous_img_index] = 28
                        }

                        setTimeout(() => {
                            for (let i = 0; i < total_images; i++) {
                                if (i != current_img_index) {
                                    console.log(i)

                                    $(".carousel_image")[i].classList.replace(`-translate-x-[${index_translated_by[i]}rem]`, `-translate-x-[${index_translated_by[i]-14}rem]`)
                                    if ($(".carousel_image")[i].classList.contains(`hidden`)) {
                                        $(".carousel_image")[i].classList.remove(`hidden`)
                                    }

                                    if ($(".carousel_image")[previous_img_index].classList.contains(`delay-[100]`)) {
                                        $(".carousel_image")[previous_img_index].classList.remove(`delay-[100]`)
                                    }

                                    //  if (!$(".carousel_image")[previous_img_index].classList.contains(`z-[1]`)) {
                                    //     $(".carousel_image")[previous_img_index].classList.add(`z-[1]`)
                                    // }
                                    index_translated_by[i] -= 14
                                    //console.log(index_translated_by)
                                }
                            }

                            previous_img_index = current_img_index

                            if (current_img_index == $(".carousel_image").length - 1) {
                                current_img_index = 0;
                            } else {
                                current_img_index++
                            }

                        }, 100)

                    }, 1100);






                }


            }, 5000)
        }
        playCarousel();


        // $(".grid_div img").each(function() {
        //     $(this).on("mouseenter", function() {
        //         var hover_div = $(this)

        //         if (!$(this).hasClass("col-span-2")) {

        //             $(this).addClass(["col-span-2", "row-span-3"])
        //             if ($(this).hasClass("col-span-1")) {

        //                 $(this).removeClass(["col-span-1", "row-span-1"])


        //             }


        //         }
        //         $(".grid_div img").each(function() {
        //             if ($(this) != hover_div) {
        //                 if (!$(this).hasClass("col-span-1")) {
        //                     $(this).addClass(["col-span-1", " row-span-1"])
        //                 }
        //             }
        //         })
        //     })

        //     $(this).on("mouseleave", function() {
        //         if ($(this).hasClass("col-span-2")) {
        //             $(this).removeClass(["col-span-2", "row-span-3"])
        //         }

        //     })
        // })
    </script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>