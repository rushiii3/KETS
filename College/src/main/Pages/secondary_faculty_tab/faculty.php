<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE| Faculty</title>
  <?php include('../../../library/library.php'); ?>
  
  <style>
    .button_gradient_border {
      border: none;
      position: relative;
      transition: all .5s ease-in-out;
    }

    .button_gradient_border:hover::before {
      content: '';
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      height: 100%;
      scale: 1.05 1.15;
      border-radius: 9999px;
      background: linear-gradient(45deg, #1e40af, #10b981, #3b82f6, #16a34a);
      z-index: -1;
      animation: movegradient .5s ease-in-out infinite
    }

    @keyframes movegradient {
      0% {
        background: linear-gradient(0deg, #1e40af, #3b82f6);
      }

      5% {
        background: linear-gradient(18deg, #1e40af, #3b82f6);
      }


      10% {
        background: linear-gradient(36deg, #1e40af, #3b82f6);
      }

      15% {
        background: linear-gradient(54deg, #1e40af, #3b82f6);
      }

      20% {
        background: linear-gradient(72deg, #1e40af, #3b82f6);
      }


      25% {
        background: linear-gradient(90deg, #1e40af, #3b82f6);
      }

      30% {
        background: linear-gradient(108deg, #1e40af, #3b82f6);
      }

      35% {
        background: linear-gradient(126deg, #1e40af, #3b82f6);
      }


      40% {
        background: linear-gradient(144deg, #1e40af, #3b82f6);
      }


      45% {
        background: linear-gradient(162deg, #1e40af, #3b82f6);
      }



      50% {
        background: linear-gradient(180deg, #1e40af, #3b82f6);
      }


      55% {
        background: linear-gradient(198deg, #1e40af, #3b82f6);
      }


      60% {
        background: linear-gradient(216deg, #1e40af, #3b82f6);
      }


      65% {
        background: linear-gradient(234deg, #1e40af, #3b82f6);
      }


      70% {
        background: linear-gradient(252deg, #1e40af, #3b82f6);
      }

      75% {
        background: linear-gradient(270deg, #1e40af, #3b82f6);
      }

      80% {
        background: linear-gradient(288deg, #1e40af, #3b82f6);
      }

      85% {
        background: linear-gradient(306deg, #1e40af, #3b82f6);
      }

      90% {
        background: linear-gradient(324deg, #1e40af, #3b82f6);
      }

      95% {
        background: repeating-linear-gradient(342deg, #1e40af, #3b82f6);
      }

      100% {
        background: linear-gradient(360deg, #1e40af, #3b82f6);
      }
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
  <div>

    <!-- Background-->
    <div class="h-[100vh] w-[100vw] -z-10 fixed top-0 left-0">
      <img class="w-full h-full opacity-80 brightness-50 blur-sm" src="../../../assests/webp/Vaze_College_Auditorium.webp" alt="Vaze College Faculty" />
    </div>

    <div class="flex flex-col">

      <!--title text and button-->
      <div class="flex h-[100vh] flex-col sm:flex-row items-center px-8">
        <div class="flex-1 text-white font-bold  text-[2rem] sm:text-[3rem] lg:text-[4rem] xl:text-[4.2rem]">EXPLORE OUR TALENTED FACULTY WHICH NUTURES THE NEXT GENERATION</div>
        <div class="flex-1 flex items-center justify-center">
          <button class="button_gradient_border rounded-full  shadow-2xl px-16 py-4 font-bold text-xl bg-black  text-white">Take a look</button>
        </div>
      </div>
      <!--title and text end-->

      <!-- search bar onwards contents div -->
      <div class="flex flex-col bg-white dark:bg-black ">
        <!--search bar-->
        <div class='flex items-center justify-center w-full my-4'>
          <button class="self-center flex p-1 cursor-pointer dark:text-white" id="filter_toggle_btn">
            <span class="material-symbols-outlined">
              filter_list
            </span>
          </button>



          <form class=" bg-transparent w-3/4 flex items-center border p-2 rounded-full dark:ring-white focus-within:ring " id="search_form">
            <input type="text" id="search_input_field" class="w-full bg-transparent border-0 focus:border-transparent  focus:ring-0  pl-2 text-[#001b53] dark:text-white dark:placeholder:text-white placeholder:text-blue-800" placeholder="Search Programs" />

            <button type="reset" id="btn_clear_search" class="cursor-pointer mr-2">
              <span class="material-symbols-outlined dark:text-white">
                close
              </span>
            </button>

          </form>


          <!--search button-->
          <button type="button" class="relative mx-2 p-2 custom_bg_blue rounded-full sm:rounded-xl text-white cursor-pointer dark:bg-white dark:text-[#001b53]" id="search_button">
            <p class=" hidden sm:block font-bold  font-2xl p-2">Search</p>
            <span class="material-symbols-outlined sm:hidden">
              search
            </span>

          </button>

        </div>

        <!-- FACULTY CONTENTS-->
        <div class=" flex sm:p-4 w-full justify-between">

          <!-- Filter section-->
          <div class=" -bottom-[100rem] sm:top-0 z-10 fixed sm:flex sm:relative sm:w-1/5 transition-transform transition-width duration-[750ms] ease-in-out" id="filter_div">

            <!--Sticky inner filter section-->
            <div class="sm:sticky h-fit flex flex-col items-end p-4 w-full rounded-t-3xl sm:rounded-3xl bg-white border border-gray-100 shadow-2xl shadow-gray-600/10  dark:shadow-none dark:border-gray-700 dark:bg-gray-800  text-black top-2">

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

                <!--"Department" subheading div -->
                <div class="flex-col ">
                  <h4 class="font-bold text-lg dark:text-white">Department</h4>

                  <div class="flex  mt-2">
                    <input type="checkbox" id="ug_chkbox" name="level" value="ug" />
                    <label for="ug_chkbox" class=" mx-2 dark:text-white ">
                      From DB
                    </label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="pg_chkbox" name="level" value="pg" />
                    <label for="pg_chkbox" class=" mx-2 dark:text-white ">From DB</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="phd_chkbox" name="level" value="phd" />
                    <label for="phd_chkbox" class=" mx-2 dark:text-white">From DB</label>

                  </div>

                </div>
                <!--"Level" subheading end-->

                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

               

                <!--"Faculty" subheading div -->
                <div class="flex-col mt-2">
                  <h4 class="font-bold text-lg dark:text-white">Faculty</h4>

                  <div class="flex mt-2">
                    <input type="checkbox" id="arts_chkbox" name="faculty" value="a" />
                    <label for="arts_chkbox" class=" mx-2 dark:text-white">Arts</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id=commerce_chkbox" name="faculty" value="c" />
                    <label for="commerce_chkbox" class=" mx-2 dark:text-white">Commerce</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="science_chkbox" name="faculty" value="s" />
                    <label for="science_chkbox" class=" mx-2 dark:text-white">Science</label>
                  </div>

                </div>
                <!--"Faculty" section Ends here-->

                 <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

                 <!--"Designation" subheading div -->
                <div class="flex-col mt-2">
                  <h4 class="font-bold text-lg dark:text-white">Desgination</h4>

                  <div class="flex mt-2">
                    <input type="checkbox" id="sfc_chkbox" name="section" value="s" />
                    <label for="sfc_chkbox" class=" mx-2 dark:text-white">From DB</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id=regular_chkbox" name="section" value="d" />
                    <label for="regular_chkbox" class=" mx-2 dark:text-white">From Db </label>
                  </div>

                </div>
                <!--"Designation" subheading end-->

              
                <!--Show results and clear-->
                <div class="flex justify-between items-center flex-wrap mt-8">

                  <button id="apply_filter_button" class="text-[#001b53] p-1 flex-1 rounded-lg mx-1 font-bold  bg-white" type="button">Apply</button>


                  <button id="filter_clear_button" class="text-white rounded-lg p-1 mt-1 mx-1 flex-1 font-bold bg-red-700" type="reset">Clear</button>
                </div>
              </form>
            </div>
            <!--sticky inner section end-->


          </div>
          <!--Filter section end-->

          <!-- Main contents-->
          <div class="flex-1 flex flex-col relative mx-4 sm:ml-4">

            <!-- No of courses-->
            <p class="text-2xl text-black font-bold dark:text-white" id="no_of_courses_para">
              <?php //echo count($programmes_array)." courses available";
              ?>
            </p>

            <!--Div to show loading animation and not found-->
            <div class="hidden flex-1" id="degree_loading_animation_div"></div>

            <!-- Courses-->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 w-full" id="course_cards_grid_div">

              <!--Card 1 start-->

              <?php
              //foreach ($programmes_array as $programme) {
              ?>


              <!--
            <div class="group flex-col rounded-3xl bg-white border border-gray-100 dark:shadow-none dark:border-gray-700 dark:bg-gray-800 bg-opacity-50 shadow-2xl shadow-gray-600/10 cursor-pointer course_card">
              <p class="p_hidden" hidden><?php //echo "course_" . $programme["prog_id"]; 
                                          ?></p>
              <div class="relative flex-1 overflow-hidden rounded-t-xl">
                <img src=<?php //echo $programme["prog_bg_image_link"] 
                          ?> alt="art cover" loading="lazy" width="1000" height="667" class="h-64 w-full object-cover object-top transition duration-500 group-hover:scale-105" />
              </div>
              <div class=" flex-1 relative px-4 py-4">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-white">
                  <?php //echo $programme["prog_name"] 
                  ?>
                </h3>

                <p class="text-slate-500 dark:text-white">
                  <?php
                  /*
                  switch($programme["prog_type"]){
                    case "ug":
                      echo "Undergraduate Course";
                      break;
                    case "pg":
                      echo "Postgraduate Course";
                      break;
                    case "phd":
                      echo "PhD course";
                      break;
                    case "gd":
                      echo "G.D. Kelkar Skill Developement and Finishing School Course";
                      break;
                    
                  }
                  */
                  ?>
                </p>

                <ul class="list-none mt-4">
                  <li>
                    <p class="font-bold dark:text-white">Duration</p>
                  </li>
                  <li>
                    <p class="text-slate-500 dark:text-white"><?php //echo $programme["prog_duration"] 
                                                              ?></p>
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
                -->
              <!--Card 1 end-->

              <?php
              // }
              ?>
            </div>
            <!--Courses Grid end-->

          </div>
          <!--Main contents end-->

        </div>
        <!--FACULTY CONTENTS END-->


      </div>
      <!-- search bar and other contents div end -->


    </div>
    <!--title and search bar and other contents div end-->

  </div>


  <!--
    /***************
    FOOTER
    ****************/
    -->
  <?php include('../../Layouts/footer.php'); ?>
  <script src="../../../js/secondary_faculty_tab/faculty.js" type="module"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>