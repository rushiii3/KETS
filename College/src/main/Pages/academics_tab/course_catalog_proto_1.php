<?php
define("BG_BLUE_COLOR", "#001b53");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-7">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE| Course Catalog</title>
  <?php include('../../../library/library.php'); ?>
  <style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    @layer components {
      .degree_filter_mobile {
        @apply -bottom-fit fixed
      }

      .degree_filter_sm {
        @apply sm:flex sm:relative sm:w-1/5
      }
    }

    @layer utitlities {
      .custom_bg_blue {
        background: #001b53;
      }

      .custom_font_blue {
        color: #001b53;
      }


    }
  </style>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
    HEADING SECTION
    ****************/
    -->
  <div class="relative isolate flex flex-col justify-end overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">
    <!--
    <img src="../../assests/nss.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
  -->

    <div class="absolute inset-0 -z-10 h-full w-full object-cover custom_bg_blue"></div>
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
    <div class="text-center z-1" data-aos="fade-up">
      <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]"> Find the right programme for you</h1>
    </div>
    <div class="text-center z-1" data-aos="fade-up">
      <p class="mt-6 text-3xl leading-8 text-white "> Browse through our extensive course catalog and find which fuels your passion </p>
    </div>
  </div>

  <!--
    /***************
     BREADCRUMBS - to show where the user is currently
    ****************/
    -->
  <nav aria-label="Breadcrumb" class="pl-2 mt-2" id="Breadcrumb">
    <ol class="flex items-stretch gap-2 list-none">
      <li class="flex items-center gap-2"> <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
            <title id="title-01">Home</title>
            <desc id="description-01"> Home button indicating the homepage of the website. </desc>
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span class="hidden md:block">Home</span>
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
          <title id="title-02">Arrow</title>
          <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </li>
      <li> <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-400 hover:text-emerald-500">Academics</a> </li>
      <!-- Arrow 2-->
      <li> <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
          <title id="title-02">Arrow</title>
          <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg> </li>

      <li> <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-400 hover:text-emerald-500">Course Catalog</a> </li>

    </ol>
  </nav>
  <!--
    /***************
    MAIN CONTENTS 
    ****************/
    -->
  <!-- Search bar-->

  <div class='flex items-center justify-center w-full my-4'>
    <button class="self-center flex p-1 cursor-pointer dark:text-white" id="filter_toggle_btn">
      <span class="material-symbols-outlined">
        filter_list
      </span>
    </button>



    <form class=" bg-transparent w-3/4 flex items-center border p-2 rounded-full dark:ring-white focus-within:ring ">
      <input type="text" class=<?php echo '"w-full bg-transparent border-0 focus:border-transparent  focus:ring-0  pl-2 text-[#001b53] dark:text-white dark:placeholder:text-white placeholder:text-[' . BG_BLUE_COLOR . ']"'; ?> placeholder="Search programs" />

      <button type="reset" id="btn_clear_search" class="cursor-pointer mr-2">
        <span class="material-symbols-outlined dark:text-white">
          close
        </span>
      </button>

    </form>


    <!--search button-->
    <button type="submit" class="relative mx-2 p-2 custom_bg_blue rounded-full sm:rounded-xl text-white cursor-pointer dark:bg-white dark:text-[#001b53]">
      <p class=" hidden sm:block font-bold  font-2xl p-2">Search</p>
      <span class="material-symbols-outlined sm:hidden">
        search
      </span>

    </button>

  </div>


  <!-- Degree,Junior Tabs-->

  <div class="mx-4 mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
      <li class="me-2" role="presentation">
        <button class="inline-block p-4 border-b-2 rounded-t-lg text-xl font-bold" id="degree_tab" data-tabs-target="#degree_tab_contents" type="button" role="tab" aria-controls="degree" aria-selected="false">Degree</button>
      </li>
      <li class="me-2" role="presentation">
        <button class="inline-block p-4 border-b-2 rounded-t-lg text-xl font-bold  hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="junior_tab" data-tabs-target="#junior_tab_contents" type="button" role="tab" aria-controls="junior" aria-selected="false">Junior</button>
      </li>
    </ul>
  </div>


  <!--Degree and Junior tab contents-->
  <div id="default-tab-content">

    <!--DEGREE TAB CONTENTS-->
    <div class="hidden flex sm:p-4 w-full justify-between" id="degree_tab_contents" role="tabpanel" aria-labelledby="degree_tab">

      <!-- Filter section-->
      <div class=" -bottom-[100rem] sm:top-0 z-10 fixed sm:flex sm:relative sm:w-1/5 transition-transform transition-width duration-[750ms] ease-in-out" id="filter_div">

        <!--Sticky inner filter section-->
        <div class="sm:sticky h-fit flex flex-col items-end p-4 w-full rounded-t-3xl sm:rounded-3xl bg-white border border-gray-100 shadow-2xl shadow-gray-600/10  dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 text-black top-2">
          <button class="sm:hidden" id="filter_mobile_close_btn">
            <span class="material-symbols-outlined dark:text-white">
              close
            </span>
          </button>


          <form id="filter_form" class="w-full">
            <!-- Filter heading-->
            <div class="flex justify-between">
              <h2 class="font-bold text-2xl dark:text-white">Filter</h2>
              
            </div>

            <!--"Level" subheading div -->
            <div class="flex-col ">
              <h4 class="font-bold text-lg dark:text-white">Level</h4>

              <div class="flex  mt-2">
                <input type="checkbox" id="ug_chkbox" name="level" />
                <label for="ug_chkbox" class=" mx-2 dark:text-white ">Under-Graduate</label>
              </div>

              <div class="flex">
                <input type="checkbox" id="pg_chkbox" name="level" />
                <label for="pg_chkbox" class=" mx-2 dark:text-white ">Post-Graduate</label>
              </div>

              <div class="flex">
                <input type="checkbox" id="phd_chkbox" name="level" />
                <label for="phd_chkbox" class=" mx-2 dark:text-white">PhD</label>
              </div>


              <div class="flex">
                <input type="checkbox" id="certificate_chkbox" name="level" />
                <label for="certificate_chkbox" class=" mx-2 dark:text-white">Certificate courses</label>
              </div>

            </div>
            <!--"Level" subheading end-->


            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
            <!--"Section" subheading div -->
            <div class="flex-col mt-2">
              <h4 class="font-bold text-lg dark:text-white">Section</h4>

              <div class="flex mt-2">
                <input type="checkbox" id="sfc_chkbox" name="section" />
                <label for="sfc_chkbox" class=" mx-2 dark:text-white">Self-Financing Courses (SFC)</label>
              </div>

              <div class="flex">
                <input type="checkbox" id=regular_chkbox" name="section" />
                <label for="regular_chkbox" class=" mx-2 dark:text-white">Regular </label>
              </div>

            </div>
            <!--"Section" subheading end-->

            <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">


            <!--"Faculty" subheading div -->
            <div class="flex-col mt-2">
              <h4 class="font-bold text-lg dark:text-white">Faculty</h4>

              <div class="flex mt-2">
                <input type="checkbox" id="arts_chkbox" name="faculty" />
                <label for="arts_chkbox" class=" mx-2 dark:text-white">Arts</label>
              </div>

              <div class="flex">
                <input type="checkbox" id=commerce_chkbox" name="faculty" />
                <label for="commerce_chkbox" class=" mx-2 dark:text-white">Commerce</label>
              </div>

              <div class="flex">
                <input type="checkbox" id="science_chkbox" name="faculty" />
                <label for="science_chkbox" class=" mx-2 dark:text-white">Science</label>
              </div>

            </div>
            <!--"Faculty" section Ends here-->

            <!--Show results and clear-->
            <div class="flex justify-between items-center flex-wrap mt-8">

            <button class="text-[#001b53] p-1 flex-1 rounded-lg mx-1 font-bold  bg-white" type="button">Apply</button>

           
            <button class="text-white rounded-lg p-1 mt-1 mx-1 flex-1 font-bold bg-red-700" type="reset">Clear</button>
            </div>
          </form>
        </div>
        <!--sticky inner section end-->


      </div>
      <!--Filter section end-->


      <!-- Main contents-->
      <div class="flex-1 relative mx-4 sm:ml-4">

        <!-- No of courses-->
        <p class="text-2xl text-black font-bold dark:text-white">
          50 courses available
        </p>

        <!-- Courses-->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-2  w-full">

          <!--Card 1 start-->
          <?php
          for ($i = 1; $i <= 9; $i++) {
          ?>

            <div class="group flex-col rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10 cursor-pointer">
              <div class="relative flex-1 overflow-hidden rounded-t-xl">
                <img src="https://images.unsplash.com/photo-1560264418-c4445382edbc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
              </div>
              <div class=" flex-1 relative px-4 py-4">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                  Bachelor of Science (Information Technology)
                </h3>

                <p class="text-slate-500 dark:text-white">Undergraduate course</p>

                <ul class="list-none mt-4">
                  <li>
                    <p class="font-bold dark:text-white">Duration</p>
                  </li>
                  <li>
                    <p class="text-slate-500 dark:text-white">3 years</p>
                  </li>

                  <li class="mt-2">
                    <p class="font-bold dark:text-white">Falls under</p>
                  </li>
                  <li>
                    <p class="text-slate-500 dark:text-white truncate">Self-financing courses section</p>
                  </li>

                </ul>
              </div>
            </div>
            <!--Card 1 end-->

          <?php
          }
          ?>
        </div>
        <!--Courses Grid end-->

      </div>
      <!--Main contents end-->

    </div>
    <!--DEGREE TAB CONTENTS END-->

    <!--JUNIOR TABS CONTENTS START-->

    <div class="hidden p-4" id="junior_tab_contents" role="tabpanel" aria-labelledby="junior_tab">
      <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <!--JUNIOR TABS CONTENTS END-->


  </div>
  <!--DEFAULT TAB CONTENTS END-->





  <!--
    /***************
    FOOTER
    ****************/
    -->
  <?php include('../../Layouts/footer.php'); ?>
  <script src="../../../js/academics_tab/course_catalog.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>