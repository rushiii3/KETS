
<!-- <div class="relative top-1 grid h-40  w-full max-w-full flex-col items-end justify-center overflow-hidden rounded-xl bg-white bg-clip-border text-center text-gray-700">

    <div class="absolute inset-0 m-0 h-full w-full overflow-hidden rounded-none bg-transparent bg-[url('../../assests/research.jpg')] bg-cover bg-clip-border bg-center text-gray-700 shadow-none">
        <div class="absolute inset-0 w-full h-full to-bg-black-10 bg-gradient-to-t from-black/80 via-black/50"></div>
    </div>
    <div class="relative p-6 px-6 py-14 md:px-12">
        <h1 class="mb-6 block font-sans text-4xl font-medium leading-[1.5] tracking-normal text-white antialiased">
            RESEARCH CONFERENCE
        </h1>


    </div>
<div class="bg-gray-100 min-h-fit  flex items-center  justify-end relative right-2 top-2">
    <div class="relative inline-block text-left z-50">
        <button id="dropdown-button" class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500">
            <div id="a_year">Academic Year</div>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6.293 9.293a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
        <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
            <div class="py-2 p-2" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-button">
                <a id="2023" class=" block rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem">
                    2023-24
                </a>
                <a id="2022" class=" block rounded-md px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 active:bg-blue-100 cursor-pointer" role="menuitem">
                    2022-23
                </a>-->
                <!-- Add more options for other years if needed -->
           <!--  </div>
        </div>
    </div>
</div>-->
<script>
    $(document).ready(function() {
        $(".year-content").hide(); // Hide all content divs initially
        $("#2023-24").show();
        $("#dropdown-menu").hide();
        $("#dropdown-button").on("click", function() {
            $("#dropdown-menu").toggle();
        });
        $("#2023").on("click", function() {
            $(".year-content").hide(); // Hide all content divs
            $("#2023-24").show(); // Show content for 2019-2020
            $("#dropdown-menu").toggle();
            $("#a_year").text("2023-24");
        });

        $("#2022").on("click", function() {
            $(".year-content").hide(); // Hide all content divs
            $("#2022-23").show(); // Show content for 2020-2021
            $("#dropdown-menu").toggle();
            $("#a_year").text("2022-23");
        });

        // Add more event handlers for other years if needed
    });
</script>

<div class="year-content bg-gray-50 dark:bg-slate-900 w-fit h-fit pattern overflow-hidden p-4 overflow-x-hidden item-center mx-auto" id="2023-24">


    <!-- component -->

    <div class="flex flex-col items-center justify-center min-h-fit bg-gray-100">
        <!-- dark theme -->
        <div class="container  m-4">
            <div class=" w-fit mx-auto grid gap-4 grid-cols-1" data-aos="zoom-in">
                <!-- alert -->

                <!-- profile card -->
                <div class="flex flex-col ">
                    <div class="bg-white  border border-gray-800 shadow-lg  rounded-2xl p-4 top">

                        <div class="flex-none sm:flex">


                            <div class="flex-auto justify-evenly">
                                <div class="flex items-center justify-between sm:mt-2">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">

                                            <div class="w-full flex-none text-lg text-gray-200 font-bold text-center leading-none ">SFC DEPARTMENTS UNDER THE AEGIS OF IQAC ORGANISES ONE DAY INTERNATIONAL MULTIDISCIPLINARY CONFERENCE ON

                                                “SETTING BENCHMARKS : RESEARCH, INNOVATION, SUSTAINABILITY, ENTREPRENEURSHIP ”
                                                (ICMB-RISE-2024)
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inaugral speech -->
            <!-- component -->
            <div class="relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full flex justify-center">
                            <div class="relative">

                                <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />

                            </div>
                        </div>
                        <div class="w-full text-center mt-20">
                            <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                <div class="text-center mt-2">
                                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Prachi Jambhekar</h3>
                                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Director- Planning, BMC
                                    </div>

                                    <div class="text-xl mt-0 mb-2 text-blue-500 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Opening Address Presenter
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Featured Speakers
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <!-- INVITED TALKS BY -->
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-right">

                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Pratik Mungekar,</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Vice-Chancellor at Unified Theological Seminary,USA
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-right">

                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Ajit Gokhale</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Proprietor- Natural Solutio
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">

                    <div class="px-6" data-aos="fade-right">

                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr Aniket Magarkar</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Special Invited Session (Alumni)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Key Figures
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <!-- key fiagures  -->
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-left">

                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Mr. Shantanu Bhadkamkar</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Managing Director, ATS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-left">

                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Deepali Karkhanis</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>CONFERENCE CONVENOR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">

                    <div class="px-6" data-aos="fade-left">


                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Amit Breed</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>ORGANIZING SECRETARY
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Conference Overview
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">

                <!--confirm modal-->
                <div class="flex flex-col p-4 relative  bg-white border border-white shadow-lg  rounded-2xl text-slate-400 text-justify justify-center" data-aos="fade-right">

                    <!-- component -->
                    <h1 class="text-4xl font-bold text-center pb-4 text-blue-400">CATEGORIES</h1>
                    <p class="font-medium  text-lg  pb-3">1. Entrepreneurship </p>
                    <p class="font-medium  text-lg  pb-3">2. Biotechnology </p>
                    <p class="font-medium  text-lg  pb-3">3. Healthcare and Wellness </p>
                    <p class="font-medium  text-lg  pb-3">4. HR and Marketing </p>
                    <p class="font-medium  text-lg  pb-3">5. Finance </p>
                    <p class="font-medium  text-lg   pb-3">6. Information Technology </p>
                    <p class="font-medium  text-lg  pb-3">7. Pure Science </p>
                    <p class="font-medium  text-lg  pb-3">8. Humanities and Social Sciences </p>



                </div>
                <!--elements-->
                <div class="flex flex-col space-y-4" data-aos="fade-left">
                    <!-- elements 1 -->
                    <div class="flex flex-col p-4 bg-white border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">




                                <div class="flex flex-col ml-3">
                                    <div class="font-medium leading-none text-black">GUIDELINES FOR SUBMITTING ABSTRACT & FULL PAPER MANUSCRIPT</div>

                                    <p class="text-sm text-gray-500 leading-none mt-1">All the authors of the abstract are required to register, pay their registration fees, to avail certificate, upload their fee receipt and mandatory to join the whats app group.</p>
                                    <p class="text-sm text-gray-500 leading-none mt-1">Participants presenting must ensure that the abstract should be related to the conference theme.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!--elements 2-->
                    <div class="flex flex-col p-4 bg-white border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">



                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-black">Abstract Template</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate"><a href="https://docs.google.com/document/d/1WCC3HxmRhY135NM16WBVYULEo6sNtn4H/edit">Click here to see abstract template</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--elements 2-->
                    <div class="flex flex-col p-4 bg-white border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">


                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-black">Email for submitting Research Abstracts and full paper</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                                    <form action="mailto: imcb.rise@gmail.com">Click here to send the mail </form>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="flex flex-col p-4 bg-white border border-white shadow-md hover:text-green-500 text-gray-400 hover:shodow-lg rounded-2xl transition ease-in duration-500  transform hover:scale-105 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">


                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-black"> Registration Link </div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate"><a href="https://forms.gle/DkmtQNUMgcmTi7aJ9">Click here to register</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class='flex flex-col items-center justify-center min-h-fit bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-2   px-2 py-2.5 text-lg  leading-none font-medium uppercase bg-white text-blue-600 ">
                                PARTICIPATION & PRESENTATION FEES
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">
                <!-- component -->


                <div class="flex flex-col p-4 relative  border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800  rounded-2xl text-slate-400 text-justify " data-aos="fade-right">

                    <div class="flex pt-2  text-sm text-gray-500 w-full  ">
                        <div class="flex flex-col justify-center items-center h-fit  w-full">
                            <div class="relative flex max-w-fit h-fit w-full flex-col ">
                                <div class="flex h-fit w-fit rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        Indian Delegates
                                    </h4>

                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden bg-white">
                                    <table role="table" class="w-full min-w-full overflow-hidden">
                                        <thead>
                                            <tr role="row">
                                                <th colspan="1" role="columnheader" title="Indian Delegates" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Category
                                                    </div>
                                                </th>
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Registration
                                                        fee (Rs.)
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            UG/PG
                                                            Students
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        800/-
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Faculty/ Ph.D Research Scholors
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        1000/-
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Professionals/ Industry Delegates
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        1200/-
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Attendees
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        700/-
                                                    </p>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex flex-col p-4 relative  border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-left">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class=" flex max-w-fit h-fit w-fit flex-col ">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        Foreign Delegates
                                    </h4>

                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">
                                        <thead>
                                            <tr role="row">
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Category
                                                    </div>
                                                </th>
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Registration
                                                        fee ($)
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            UG/PG
                                                            Students
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        23$
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Faculty/ Ph.D Research Scholors
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        26$
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Professionals/ Industry Delegates
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        23$
                                                    </p>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Payment & Dates
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">
                <!-- component -->


                <div class="flex flex-col p-4 relative  border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-right">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class="relative flex max-w-fit h-fit w-full flex-col dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        PAYMENT
                                    </h4>

                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">

                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Beneficiary
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        Kelkar Vaze Alumni Association Bank of Maharashtra, Opp Kelkar College, Mithagar Road, Mulund East, Mumbai
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            IFSC Code
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        MAHB0000761
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Account Number
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        60402277866
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Remark
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        Registration fees paid once will not be refunded .<br>
                                                        Registration fees includes : Tea, Breakfast, Lunch, Conference Kit.
                                                    </p>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="flex flex-col p-4 relative  border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-left">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit "> 
                            <div class="relative flex max-w-full h-fit w-fit flex-col rounded-[10px]   bg-white dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        IMPORTANT DATES
                                    </h4>

                                </div>
                                <div class="w-fit overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">

                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Submission of abstract (Last Date)
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        10th February 2024
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Event Date
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        21st February 2024
                                                    </p>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->

                <div class="flex flex-col p-4 relative  border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-left">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col  h-fit ">
                            <div class="relative flex max-w-full w-full h-full flex-col rounded-[10px] bg-white dark:text-white dark:shadow-none">
                                <div class="flex w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        IMPORTANT DATES
                                    </h4>
                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">
                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">
                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Submission of abstract (Last Date)
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        10th February 2024
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">
                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Event Date
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        21st February 2024
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                PHOTO GALLERY
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full" data-aos="zoom-in">
                <div class=" p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl">
                    <div class="flex-none ">
                        <div class=" h-fit  w-fit  mb-3 ">
                            <div class="h-fit max-h- w-full overflow-hidden flex flex-nowrap text-center" id="slider">
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/15-August-2022.png">
                                </div>
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png">
                                </div>
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/15-August-2022.png">
                                </div>
                            </div>
                        </div>
                        <div class="flex-auto lg:ml-3 justify-evenly py-2">
                            <div class="flex flex-col ">
                                <div class="flex items-center mr-auto text-sm">
                                    <!-- component -->

                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const slider = document.querySelector('#slider');
                                            setTimeout(function moveSlide() {
                                                const max = slider.scrollWidth - slider.clientWidth;
                                                const left = slider.clientWidth;

                                                if (max === slider.scrollLeft) {
                                                    slider.scrollTo({
                                                        left: 0,
                                                        behavior: 'smooth'
                                                    })
                                                } else {
                                                    slider.scrollBy({
                                                        left,
                                                        behavior: 'smooth'
                                                    })
                                                }

                                                setTimeout(moveSlide, 2000)
                                            }, 2000)

                                        })
                                    </script>

                                </div>
                                <div class="flex items-center  justify-between min-w-0">
                                    <h2 class="mr-auto   text-base text-gray-100 font-medium truncate">Research Conference</h2>
                                    <div class="flex items-center font-medium text-gray-300 ">
                                        <button class="mb-2 md:mb-0 flex-no-shrink bg-green-400 hover:bg-green-500 px-5 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300" type="button" aria-label="like">View More</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="year-content bg-gray-50 dark:bg-slate-900 w-fit h-fit pattern overflow-hidden p-4 overflow-x-hidden item-center mx-auto" id="2022-23">


    <!-- component -->

    <div class="flex flex-col items-center justify-center min-h-fit bg-gray-100">
        <!-- dark theme -->
        <div class="container  m-4">
            <div class=" w-fit mx-auto grid gap-4 grid-cols-1" data-aos="zoom-in">
                <!-- alert -->

                <!-- profile card -->
                <div class="flex flex-col ">
                    <div class="bg-white  border border-gray-800 shadow-lg  rounded-2xl p-4 top">
                        <div class="flex-none sm:flex">


                            <div class="flex-auto justify-evenly">
                                <div class="flex items-center justify-between sm:mt-2">
                                    <div class="flex items-center">
                                        <div class="flex flex-col">
                                            <div class="w-full flex-none text-lg text-blue-600 font-bold text-center leading-none ">FACULTY OF SCIENCE UNDER THE AEGIS OF IQAC ORGANISES ONE DAY INTERNATIONAL CONFERENCE ON
                                                “RECENT ADVANCES IN SCIENCE, TECHNOLOGY, HUMANITIES AND MANAGEMENT ”
                                                (ICRASTHM-2023)
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inaugral speech -->
            <!-- component -->
            <div class="relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">
                <div class="px-6">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full flex justify-center">
                            <div class="relative">

                                <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />

                            </div>
                        </div>
                        <div class="w-full text-center mt-20">
                            <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                <div class="text-center mt-2">
                                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Prachi Jambhekar</h3>
                                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Director- Planning, BMC
                                    </div>
                                    <div class="text-xl mt-0 mb-2 text-blue-500 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Opening Address Presenter
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Featured Speakers
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <!-- INVITED TALKS BY -->
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-right">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Pratik Mungekar,</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Vice-Chancellor at Unified Theological Seminary,USA
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-right">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Ajit Gokhale</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Proprietor- Natural Solutio
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">
                    <div class="px-6" data-aos="fade-right">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr Aniket Magarkar</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Special Invited Session (Alumni)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Key Figures
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <!-- key fiagures  -->
            <div class="grid grid-cols-12 gap-4 ">
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-left">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Mr. Shantanu Bhadkamkar</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>Managing Director, ATS Group
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28" data-aos="fade-left">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Deepali Karkhanis</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>CONFERENCE CONVENOR
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-span-12 sm:col-span-4 relative  mx-auto max-w-sm  min-w-0 break-words md:max-w-xl bg-white w-full mb-6 shadow-lg rounded-xl mt-28">
                    <div class="px-6" data-aos="fade-left">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]" />
                                </div>
                            </div>
                            <div class="w-full text-center mt-20">
                                <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                                    <div class="text-center mt-2">
                                        <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">Dr. Amit Breed</h3>
                                        <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                                            <i class="fas fa-map-marker-alt mr-2 text-slate-400 opacity-75"></i>ORGANIZING SECRETARY
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Conference Overview
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">

                <!--confirm modal-->
                <div class="flex flex-col p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl text-slate-400 text-justify justify-center" data-aos="fade-right">

                    <!-- component -->
                    <h1 class="text-4xl font-bold text-center pb-4 text-white">CATEGORIES</h1>
                    <p class="font-medium  text-lg  pb-3">Science </p>
                    <p class="font-light    text-sm  pb-3">Material Chemistry, Polymer Chemistry, Green Chemistry, Medicinal Chemistry, Materials for Energy Applications, Emerging Trends in Sensing, Genomics & Bioinformatics, Toxicology & Environment, Advances in Plant Sciences, Biofertilizers and Organic Farming, Emerging Trends in Fisheries and Aquaculture, IT in Agriculture, Human Computer Interaction in healthcare, Cyber security and Ethical Hacking, Digital Education, Artificial Intelligence, Advanced Bioimaging techniques, Algebra, Fractional & Calculus, MEMS for Medical Applications, Differential Equations, Mathematical Modeling and Simulation, Synthesis and characterization of Nanostructured materials and biomaterials, Nano- magnetic materials, Nano-energy materials Fuel cell materials, Drug Delivery, Energy Storage Techniques and Materials, Nano-biotechnology in Medicine, Cancer Prevention, Diagnosis & Treatment, MultiFerroics-Multifunctional Materials, Pharmaceutical, Environmental, Agricultural Sciences, Nanophotonics, Nanobiosensors, Nanobiotheraputics, Wearable sensors, Nanomaterials Spectroscopy for biology, Optical Screening and Disease Detection, Biophotonics, Low level laser therapy, Recent Advances in Forensic Science, Plant and Animal Biotechnology, Any other area related to the theme. </p>
                    <p class="font-medium  text-lg  pb-3">Humanities & Management </p>
                    <p class="font-light  text-sm  pb-3">Strategies in Commerce , Production, Marketing, HR, Finance, Taxation, Insurance, Investment, Banking, CSR, E-Commerce, Transport, Print Media Practices in Supply chain management, Waste Management, Cyber Security, Capital Market, Law, Hospitality & Tourism, Healthcare Trends among new startups, Block Chain and Crypto Currency, Big data and analytics, Innovation due to Artificial Intelligence, Digital Transformation, Smart Phone, Business technologies of the future, Innovation in Higher Education Changes in National, Sexual, and Gender Identities, Strategies in Digital Humanities, Any other area related to the theme.</p>
                    <p class="font-light  text-sm  pb-3">Humanities: Towards Post Humanities–Arts, Literature and Social Sciences, Strategies to Enhance the Impact of Social Sciences, Aesthetic Innovations and New Literacy Genres, Innovations in Nanotechnology, Genomic Innovations & Environmental Science, Innovations & Entertainment Industry, Innovation in Agribusiness, Transport, Water & Sanitation Sector, Any other area related to the theme. </p>
                </div>
                <!--elements-->
                <div class="flex flex-col space-y-4" data-aos="fade-left">
                    <!-- elements 1 -->
                    <div class="flex flex-col p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">



                                <div class="flex flex-col ml-3">
                                    <div class="font-medium leading-none text-gray-100">GUIDELINES FOR SUBMITTING ABSTRACT & FULL PAPER MANUSCRIPT</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1"> A minimum one author of the abstract required to register, pay their registration fees, upload their fee receipt, and mandatory join the Telegram Channel.</p>
                                    <p class="text-sm text-gray-500 leading-none mt-1">Participants presenting must ensure that the abstract should be related to the conference theme.</p>
                                    <p class="text-sm text-gray-500 leading-none mt-1">Participants to ensure that the abstract is received by the conference mail (vazescienceconference@gmail.com) before the last date.</p>
                                    <p class="text-sm text-gray-500 leading-none mt-1">Selected full papers after peer reviewed process and having plagiarism less than 10% will be considered for publication as a chapter in edited book entitled “Recent Trends in Science, Technology, Humanities and Management” with ISBN number excluding publication charges.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--elements 2-->
                    <div class="flex flex-col p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">




                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-gray-100">Abstract Template</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate"><a href="http://abstract%20template_icrasthm-2023.docx/">Click here to see abstract template</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="flex flex-col p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">



                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-gray-100">Full Paper Manuscript</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate"><a href="http://conference%20paper%20template.docx/">Click here to see Full Paper Manuscript</a></p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <!--elements 2-->
                    <div class="flex flex-col p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">



                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-gray-100">Email for submitting Research Abstracts and full paper</div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate">
                                    <form action="mailto:  vazescienceconference@gmail.com">Click here to send the mail </form>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="flex flex-col p-4 bg-gray-800 border border-gray-800 shadow-md hover:text-green-500 text-gray-400 hover:shodow-lg rounded-2xl transition ease-in duration-500  transform hover:scale-105 cursor-pointer">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center mr-auto">


                                <div class="flex flex-col ml-3 min-w-0">
                                    <div class="font-medium leading-none text-gray-100"> Registration Link </div>
                                    <p class="text-sm text-gray-500 leading-none mt-1 truncate"><a href="https://forms.gle/aKoTTf24hMxcxNvRA">Click here to register</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class='flex flex-col items-center justify-center min-h-fit bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-2   px-2 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                PARTICIPATION & PRESENTATION FEES
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">
                <!-- component -->


                <div class="flex flex-col p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-right">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class="relative flex max-w-fit h-fit w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-fit items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        Indian Delegates
                                    </h4>

                                </div>
                                <div class="w-fit overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-fit min-w-fit overflow-hidden">
                                        <thead>
                                            <tr role="row">
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Category
                                                    </div>
                                                </th>
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Registration
                                                        fee (Rs.)
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Students / Scholars
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        INR 1000(10th January 2023)
                                                        <br>
                                                        INR 1500(After 10th to 25th January 2023)
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Staff / Scientist
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        INR 1500(10th January 2023)
                                                        <br>
                                                        INR 2000(After 10th to 25th January 2023)
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Scientist from Industry / Private Company
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        INR 2000(10th January 2023)
                                                        <br>
                                                        INR 2500(After 10th to 25th January 2023)
                                                    </p>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex flex-col p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-left">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class="relative flex max-w-fit h-fit w-fit flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        Foreign Delegates
                                    </h4>

                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">
                                        <thead>
                                            <tr role="row">
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Category
                                                    </div>
                                                </th>
                                                <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                                                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">
                                                        Registration
                                                        fee ($)
                                                    </div>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Foreign Delegates
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        USD 100(10th January 2023)
                                                        <br>
                                                        USD 150(After 10th to 25th January 2023)
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Foreign Students / Scholars / Accompany
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        USD 50(10th January 2023)
                                                        <br>
                                                        USD 100(After 10th to 25th January 2023)
                                                    </p>
                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                Payment & Dates
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>
            <div class="grid gap-4 grid-cols-1 md:grid-cols-2 ">
                <!-- component -->


                <div class="flex flex-col p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-right">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class="relative flex max-w-fit h-fit w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        PAYMENT
                                    </h4>

                                </div>
                                <div class="w-full overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">

                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Beneficiary
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        THE KET’s WELFARE FUND TRUST
                                                        Bank of Maharashtra, Mulund(E) (761)
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            IFSC Code
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        MAHB0000761
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            MICR Code
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        400014060
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Account Number
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        20112219802
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Remark
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        Registration fees paid once will not be refunded .<br>
                                                        Registration fees includes : Tea, Breakfast, Lunch, Conference Kit.
                                                    </p>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex flex-col p-4 relative  bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl text-slate-400 text-justify items-center justify-center" data-aos="fade-left">

                    <div class="flex pt-2  text-sm text-gray-500">
                        <div class="flex flex-col justify-center items-center h-fit">
                            <div class="relative flex max-w-full h-fit w-fit flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                                <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
                                    <h4 class="text-lg font-bold text-navy-700 dark:text-white">
                                        IMPORTANT DATES
                                    </h4>

                                </div>
                                <div class="w-fit overflow-x-hidden px-4 md:overflow-x-hidden">
                                    <table role="table" class="w-full min-w-fit overflow-hidden">

                                        <tbody role="rowgroup" class="px-4">
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Submission of abstract (Last Date)
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        08th December 2022 to 31st December 2022
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Event Date
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        February 10-11, 2023
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Notification for acceptance
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        05th January 2023
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Submission of the final paper
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        15th December 2022 to 15th January 2023
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr role="row">
                                                <td class="py-3 text-sm" role="cell">
                                                    <div class="flex items-center gap-2">

                                                        <p class="text-sm font-medium text-navy-700 dark:text-white">
                                                            Registration Ends
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="py-3 text-sm" role="cell">
                                                    <p class="text-md font-medium text-gray-600 dark:text-white">
                                                        15th January 2023
                                                    </p>
                                                </td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class='flex flex-col items-center justify-center min-h-full bg-gray-100 p-4'>
                <div class='w-full max-w-full px-10  mx-auto bg-white rounded-lg shadow-xl'>
                    <div class=' mx-auto space-y-6'>

                        <!-- Component starts here -->
                        <h2 class="flex flex-row flex-nowrap items-center my-8 w-full">
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                            <span class="flex-none block mx-4   px-4 py-2.5 text-xs leading-none font-medium uppercase bg-black text-white">
                                PHOTO GALLERY
                            </span>
                            <span class="flex-grow block border-t border-black" aria-hidden="true" role="presentation"></span>
                        </h2>
                        <!-- Component ends here -->

                    </div>
                </div>
            </div>

            <div class="flex flex-col w-full" data-aos="zoom-in">
                <div class=" p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl">
                    <div class="flex-none ">
                        <div class=" h-fit  w-fit  mb-3 ">
                            <div class="h-fit max-h- w-full overflow-hidden flex flex-nowrap text-center" id="slider">
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/15-August-2022.png">
                                </div>
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png">
                                </div>
                                <div class="bg-gray-800 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center ">
                                    <img src="../../assests/15-August-2022.png">
                                </div>
                            </div>

                        </div>
                        <div class="flex-auto lg:ml-3 justify-evenly py-2">
                            <div class="flex flex-col ">
                                <div class="flex items-center mr-auto text-sm">

                                    <!-- component -->

                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const slider = document.querySelector('#slider');
                                            setTimeout(function moveSlide() {
                                                const max = slider.scrollWidth - slider.clientWidth;
                                                const left = slider.clientWidth;

                                                if (max === slider.scrollLeft) {
                                                    slider.scrollTo({
                                                        left: 0,
                                                        behavior: 'smooth'
                                                    })
                                                } else {
                                                    slider.scrollBy({
                                                        left,
                                                        behavior: 'smooth'
                                                    })
                                                }

                                                setTimeout(moveSlide, 2000)
                                            }, 2000)

                                        })
                                    </script>

                                </div>
                                <div class="flex items-center  justify-between min-w-0">
                                    <h2 class="mr-auto   text-base text-gray-100 font-medium truncate">Research Conference</h2>
                                    <div class="flex items-center font-medium text-gray-300 ">
                                        <button class="mb-2 md:mb-0 flex-no-shrink bg-green-400 hover:bg-green-500 px-5 py-2 text-xs shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300" type="button" aria-label="like">View More</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>