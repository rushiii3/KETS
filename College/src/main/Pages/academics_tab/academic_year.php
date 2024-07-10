<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />-->

</head>
<?php include('../../../library/library.php'); ?>
<?php //include('../../../config/connect.php'); 
?>

<body class="bg-gray-100 overflow-x-hidden mx-auto " style="transition: all 2s ease">
    <?php include('../../Layouts/header2.php'); ?>
    <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[25rem] h-[15rem] mx-auto w-full items-center justify-center">
        <img src="../../../assests\/department.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                Academic Calender
            </h1>
        </div>

    </div>


    <!-- Component: Flat breadcrumb with text & leading icon -->
    <nav aria-label="Breadcrumb" class="pl-3 mt-10" id="Breadcrumb" data-aos="fade-right">
        <ol class="flex items-stretch gap-2 list-none">
            <li class="flex items-center gap-2">
                <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                        <title id="title-01">Home</title>
                        <desc id="description-01">
                            Home button indicating the homepage of the website.
                        </desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:block">Home</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02">
                        Arrow icon that points to the next page in big screen resolution sizes
                        and previous page in small screen resolution sizes.
                    </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li class="flex items-center flex-1 gap-2">
                <a href="../../Pages/academics_tab/Dept_Index.php" data-aos-duration="1000" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-600 hover:text-emerald-500 hover:scale-105 scale- transition-all ease-linear" data-aos="fade-right">Academics</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02">
                        Arrow icon that points to the next page in big screen resolution sizes
                        and previous page in small screen resolution sizes.
                    </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                <a href="#" data-aos="fade-right" data-aos-duration="1300" aria-current=" page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400 ">Academic Calender</a>

            </li>
        </ol>
    </nav>



    <section class="py-4 mt-5 border-b max-w-[95dvw] rounded-2xl  mx-auto">
        <div class=" xl:container  m-auto text-gray-600 overflow-hidden rounded-2xl bg-white" data-aos="zoom-out-up" data-aos-offset="100">
            <div class=" list1 grid gap-4  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border-b  p-5" data-aos="fade-left" data-aos-duration="2000">

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="../../../assests" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

                <a href="#" class="flex flex-row items-center bg-white border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300 hover:border-cyan-300 border-2 hover:shadow-lg">
                    <img class=" w-full rounded-t-lg max-h-32 lg:max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">Academic Calendar</h5>
                        <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                        <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </div>
                </a>

            </div>
        </div>
    </section>



















    <?php include('../../Layouts/footer.php'); ?>
    <?php include('../../../library/AOS.php'); ?>
    <script src="../../../js/showMoreItems.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function() {

        $('.list1').showMoreItems({
            startNum: 6,
            afterNum: 3,
            moreText: 'View All',
            original: true,
        });
    })
</script>