<?php
include("../../../config/connect.php");
include("../../../php/common_functions.php");
include("../../Components/vaze_kelkar_logo_base64.php");

//fetch departments
$fetch_query_stmt = "SELECT * FROM departments ORDER BY dept_name ASC";
$fetch_departments_query = $conn->prepare($fetch_query_stmt);
$fetch_departments_query->execute();
$fetch_departments_query_result = $fetch_departments_query->get_result();

$all_departments = [];
if ($fetch_departments_query_result) {
  while ($row = $fetch_departments_query_result->fetch_assoc()) {
    array_push($all_departments, $row["dept_name"]);
  }
}

//fetch designations
$fetch_query_stmt2 = "SELECT DISTINCT(cp_designation.cp_designation) FROM cp_designation, college_personnel WHERE college_personnel.cp_id = cp_designation.cp_id ORDER BY cp_designation.cp_designation ASC ";

$fetch_designations_query = $conn->prepare($fetch_query_stmt2);
$fetch_designations_query->execute();
$fetch_designations_query_result = $fetch_designations_query->get_result();

$all_designations = [];
if ($fetch_designations_query_result) {
  //$output_file = fopen("../../../php/output.txt", "w") or print_r("unable to open");
  while ($row = $fetch_designations_query_result->fetch_assoc()) {
    $designation = $row["cp_designation"];
    $final_designation = "";

    $index_of_comma = 0;
    $index_of_word_of = 0;

    // if(str_contains($designation,",")&& str_contains($designation," of ")){
    $index_of_comma = strpos($designation, ",") ? strpos($designation, ",") : 0;
    $index_of_word_of = strpos($designation, " of ") ? strpos($designation, " of ") : 0;
    //}

    // if(!is_writeable("../../../php")){
    //   print_r("not writable");
    // }

    // $text = "$index_of_comma,$index_of_word_of,$designation\n";
    // fwrite($output_file, $text);


    if (str_contains($designation, ",") && ($index_of_word_of == 0 ? $index_of_comma >= $index_of_word_of : $index_of_comma <= $index_of_word_of)) {
      if (!in_array(trim(explode(",", $designation)[0]), $all_designations)) {
        $final_designation = trim(explode(",", $designation)[0]);
        //fwrite($output_file,"here\n");
      }
    } else if (str_contains($designation, " of ") && ($index_of_comma == 0 ? $index_of_word_of >= $index_of_word_of : $index_of_word_of <= $index_of_comma)) {
      if (!in_array(explode(" of ", $designation)[0], $all_designations)) {
        $final_designation = trim(explode(" of ", $designation)[0]);
        //print_r($final_designation.$designation);
      }
    } else if (str_contains($designation, "(")) {
      if (!in_array(trim(explode("(", $designation)[0]), $all_designations)) {
        $final_designation = trim(explode("(", $designation)[0]);
      }
    } else if (!in_array($designation, $all_designations)) {
      $final_designation = trim($designation);
    }

    // if (count($designation_array) > 0 && implode("", $designation_array) != $designation) {
    //   //print_r("here {$designation_array}");
    // } else {

    //   if (count($designation_array) > 0 && implode("", $designation_array) != $designation) {
    //     $final_designation = $designation_array[0];
    //   } else {
    //     $designation_array = explode("(", $designation);
    //     if (count($designation_array) > 0 && implode("", $designation_array) != $designation) {
    //       $final_designation = $designation_array[0];
    //     } else {
    //       $final_designation = $designation_array;
    //     }
    //   }
    // }

    // print_r($final_designation);
    // print_r($designation);
    // print_r("\n"); 

    if ($final_designation != "") {
      array_push($all_designations, $final_designation);
    }
  }
  //fclose($output_file);
}


//fetch the faculty
$fetch_faculty_stmt = "SELECT *,GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ' | ') as cp_desig FROM college_personnel 
JOIN dept_belongs_to_clg_section ON college_personnel.cp_department_section=dept_belongs_to_clg_section.dept_sect_id 
JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
JOIN cp_designation ON cp_designation.cp_id = college_personnel.cp_id 
WHERE LOWER(college_personnel.cp_name) LIKE ('a%')
GROUP BY college_personnel.cp_id 
ORDER BY college_personnel.cp_name ASC";

$fetch_faculty_query = $conn->prepare($fetch_faculty_stmt);
$fetch_faculty_query->execute();
$fetch_faculty_query_result = $fetch_faculty_query->get_result();




//print_r($all_designations);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE| Faculty</title>
  <link rel="stylesheet" href="../../../css/common/header_2.css" />
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

    .selected_sort_letter {

      color: rgb(59 130 246);
      font-weight: bold;
    }


    @media (prefers-color-scheme:dark) {
      .dark\:selected_sort_letter {
        color: rgb(16 185 129);
        font-weight: bold;
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
          <button class="button_gradient_border rounded-full  shadow-2xl px-16 py-4 font-bold text-xl bg-black  text-white" id="take_a_look_btn">Take a look</button>
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

        <!--Filter by name div-->
        <div class="w-full flex overflow-x-auto sm:justify-center">
          <?php
          for ($ascii = 65; $ascii < 91; $ascii++) {

            if ($ascii == 65) {
              echo '<span class="px-2 lg:text-lg  hover:cursor-pointer hover:text-blue-500 dark:hover:text-emerald-500 sort_selector selected_sort_letter transition-all duration-500  "> ' . chr($ascii) . '</span>';
            } else {
              echo '<span class="px-2 lg:text-lg hover:cursor-pointer dark:text-white hover:text-blue-500 dark:hover:text-emerald-500 sort_selector transition-all duration-500">' . chr($ascii) . '</span>';
            }
          }
          ?>
        </div>

        <!-- FACULTY CONTENTS-->
        <div class=" flex sm:p-4 w-full justify-between">

          <!-- Filter section-->
          <div class=" -bottom-[100rem] sm:top-0 z-10 fixed sm:flex sm:relative sm:w-1/4 transition-transform transition-width duration-[750ms] ease-in-out" id="filter_div">

            <!--Sticky inner filter section-->
            <div class="h-[85vh] sm:h-[100vh] overflow-y-scroll flex flex-col items-center pt-4 w-full rounded-t-3xl sm:rounded-3xl bg-white border border-gray-100 shadow-2xl shadow-gray-600/10  dark:shadow-none dark:border-gray-700 dark:bg-gray-800  text-black top-2 relative backdrop-blur-sm sm:backdrop-blur-none">

            <div class="flex flex-col items-start px-4">
              
              <!-- Filter heading-->
              <div class="flex justify-between w-full">
                <h2 class="font-bold text-2xl dark:text-white">Filter</h2>
                <button class="sm:hidden" id="filter_mobile_close_btn">
                <span class="material-symbols-outlined dark:text-white">
                  close
                </span>
              </button>

              </div>
              <form class="w-full">
                <!--"Department" subheading div -->
                <div class="flex-col h-fit ">
                  <h4 class="font-bold text-lg dark:text-white">Department</h4>

                  <?php
                  foreach ($all_departments as $dept) {

                    echo '
                    <div class="flex  mt-2">
                      <input type="checkbox" id="' . $dept . '_chkbox" name="department" value="' . $dept . '" />
                      <label for="' . $dept . '_chkbox" class=" mx-2 dark:text-white ">
                        ' . $dept . '
                      </label>
                    </div>';
                  }

                  ?>

                  <!-- <div class="flex">
                    <input type="checkbox" id="pg_chkbox" name="level" value="pg" />
                    <label for="pg_chkbox" class=" mx-2 dark:text-white ">From DB</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="phd_chkbox" name="level" value="phd" />
                    <label for="phd_chkbox" class=" mx-2 dark:text-white">From DB</label>

                  </div> -->

                </div>
                <!--"Level" subheading end-->

                <hr class="h-px my-4 border-gray-200 border w-full dark:border-gray-600">

                <!--"Faculty" subheading div -->
                <div class="flex-col mt-2 h-fit">
                  <h4 class="font-bold text-lg dark:text-white">Faculty</h4>

                  <div class="flex mt-2">
                    <input type="checkbox" id="arts_chkbox" name="faculty" value="a" />
                    <label for="arts_chkbox" class=" mx-2 dark:text-white">Arts</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="commerce_chkbox" name="faculty" value="c" />
                    <label for="commerce_chkbox" class=" mx-2 dark:text-white">Commerce</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="science_chkbox" name="faculty" value="s" />
                    <label for="science_chkbox" class=" mx-2 dark:text-white">Science</label>
                  </div>

                </div>
                <!--"Faculty" section Ends here-->

                <hr class="h-px my-4 border-gray-200 border w-full dark:border-gray-600">

                <!--"Designation" subheading div -->
                <div class="flex-col mt-2 h-fit">
                  <h4 class="font-bold text-lg dark:text-white">Designation</h4>

                  <?php
                  foreach ($all_designations as $post) {
                    if ($post == "Head") {
                      $post = "Head of Department";
                    }
                    echo '<div class="flex mt-2">
                    <input type="checkbox" id="' . $post . '_chkbox" name="designation" value="' . $post . '" />
                    <label for="' . $post . '_chkbox" class=" mx-2 dark:text-white">' . $post . '</label>
                  </div>';
                  }

                  ?>
                  <!-- <div class="flex">
                    <input type="checkbox" id=regular_chkbox" name="section" value="d" />
                    <label for="regular_chkbox" class=" mx-2 dark:text-white">From Db </label>
                  </div> -->

                </div>
                <!--"Designation" subheading end-->

                <hr class="h-px my-4 border-gray-200 border w-full dark:border-gray-600">

                <!--"college section" subheading div -->
                <div class="flex-col mt-2 h-fit">
                  <h4 class="font-bold text-lg dark:text-white">College Section</h4>

                  <div class="flex mt-1">
                    <input type="checkbox" id="junior_clg_chkbox" name="college_section" value="j" />
                    <label for="junior_clg_chkbox" class=" mx-2 dark:text-white">Junior College</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="degree_clg_chkbox" name="college_section" value="d" />
                    <label for="degree_clg_chkbox" class=" mx-2 dark:text-white">Degree College</label>
                  </div>

                  <div class="flex">
                    <input type="checkbox" id="sfc_section_chkbox" name="college_section" value="s" />
                    <label for="sfc_section_chkbox" class=" mx-2 dark:text-white">SFC section</label>
                  </div>
                </div>
                <!--College section div ends here-->
              </form>
            </div>

              <!--sticky inner section end-->

              <!--Show results and clear-->
              <div class="flex justify-between items-center w-full flex-wrap  sticky py-2 backdrop-blur-sm dark:bg-gray-800 bottom-0">

                <button id="apply_filter_button" class="text-[#001b53] p-1 flex-1 rounded-lg mx-1 font-bold  bg-white">Apply</button>


                <button id="filter_clear_button" class="text-white rounded-lg p-1 mt-1 mx-1 flex-1 font-bold bg-red-700">Clear</button>
              </div>
            </div>


          </div>
          <!--Filter section end-->

          <!-- Main contents-->
          <div class="flex-1 flex flex-col relative mx-4 sm:ml-4">

            <!-- No of courses-->
            <p class="text-2xl text-black font-bold dark:text-white" id="no_of_faculty_para">
              <?php echo "Showing " . $fetch_faculty_query_result->num_rows . " of " . $fetch_faculty_query_result->num_rows . " results";
              ?>
            </p>

            <!--next and previous button-->
            <div class="flex justify-between mb-4 mt-2">
              <button class="bg-blue-500 text-white rounded-lg p-2 flex items-center text-center   invisible previous_button">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                    <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                  </svg>
                </span>
                <span class="text-center">Prev</span>
              </button>
              <button class="bg-blue-500 text-white rounded-lg p-2 flex items-center next_button">
                <span class="text-center">Next</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                  </svg>
                </span>
              </button>
            </div>

            <!--Div to show loading animation and not found-->
            <div class=" hidden  flex-1" id="loading_animation_div" ></div>

            <!-- Courses-->
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 w-full" id="faculty_cards_grid_div">

              <!--Card 1 start-->

              <?php
              if ($fetch_faculty_query_result) {
                while ($faculty_row = $fetch_faculty_query_result->fetch_assoc()) {

                  switch ($faculty_row["dept_faculty_name"]) {
                    case "a":
                      $faculty_type = "Arts";
                      break;
                    case "s":
                      $faculty_type = "Science";
                      break;
                    case "c":
                      $faculty_type = "Commerce";
                      break;
                  }

                  switch ($faculty_row["college_sec_name"]) {
                    case "j":
                      $faculty_college_sec_name = "Junior College";
                      break;
                    case "s":
                      $faculty_college_sec_name = "Self-Financing Courses (SFC) section";
                      break;
                    case "d":
                      $faculty_college_sec_name = "Degree College";
                      break;
                  }
                  //print_r($faculty_row);

              ?>

                  <div class="flex flex-col gap-4 sm:flex-row p-4 rounded-2xl shadow-2xl dark:shadow-none bg-white group dark:bg-gray-800">

                    <div class="sm:w-[40%] rounded-2xl aspect-square overflow-hidden">
                      <img src="<?php echo $faculty_row["cp_image_path"] ?? $vaze_logo; ?>" alt="Vaze College Faculty Image" class="object-fit w-full h-full group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="flex-1 flex flex-col dark:text-white">
                      <a href="<?php echo $faculty_row["cp_personal_website_link"] ?? "" ?>" class="font-bold text-[1.5rem] <?php echo $faculty_row["cp_personal_website_link"] ? "hover:cursor-pointer hover:text-blue-500" : "hover:cursor-default" ?>">
                        <?php echo $faculty_row["cp_honourific"] . " " . $faculty_row["cp_name"] ?>
                      </a>

                      <p class="text-slate-600 text-sm  dark:text-emerald-500">
                        <?php echo $faculty_row["cp_desig"] ?>
                      </p>

                      <p class="mt-4 font-bold">Department</p>
                      <a href="" class=" text-sm hover:cursor-pointer hover:text-blue-500">
                        Department of <?php echo $faculty_row["dept_name"] ?>
                      </a>

                      <p class="mt-4 font-bold">Faculty Type</p>
                      <p class="text-sm dark:text-white">
                        <?php echo $faculty_type ?>
                      </p>

                      <p class="mt-4 font-bold">College Section</p>
                      <p class="text-sm dark:text-white">
                        <?php echo $faculty_college_sec_name ?>
                      </p>
                    </div>
                  </div>
                  <!--Card 1 end-->

              <?php
                }
              }
              ?>
            </div>
            <!--Courses Grid end-->

            <!--next and previous button-->
            <div class="flex justify-between mt-4 ">
              <button class="bg-blue-500 text-white rounded-lg p-2  items-center text-center invisible flex previous_button">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                    <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                  </svg>
                </span>
                <span class="text-center">Prev</span>
              </button>
              <button class="bg-blue-500 text-white rounded-lg p-2 flex items-center next_button">
                <span class="text-center">Next</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                  </svg>
                </span>
              </button>
            </div>

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
  <script src="../../../js/common/header_2.js"></script>

  <!--lottie animation player-->
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>