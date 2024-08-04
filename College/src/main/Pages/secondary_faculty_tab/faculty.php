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
$fetch_faculty_stmt = "SELECT *,GROUP_CONCAT(DISTINCT cp_designation.cp_designation SEPARATOR ' | ') as cp_desig,GROUP_CONCAT(DISTINCT departments.dept_name  ORDER BY departments.dept_name ASC SEPARATOR ' , ') as cp_multi_dept,GROUP_CONCAT(DISTINCT dept_belongs_to_clg_section.dept_sect_id ORDER BY departments.dept_name ASC  SEPARATOR ',') as cp_multi_dept_sec_id FROM college_personnel
JOIN cp_belongs_to_dept_sect ON college_personnel.cp_id = cp_belongs_to_dept_sect.cp_id 
JOIN dept_belongs_to_clg_section ON cp_belongs_to_dept_sect.dept_sect_id=dept_belongs_to_clg_section.dept_sect_id 
JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
JOIN cp_designation ON cp_designation.cp_id = college_personnel.cp_id 
WHERE LOWER(college_personnel.cp_name) LIKE ('a%')
GROUP BY college_personnel.cp_id 
ORDER BY college_personnel.cp_name ASC;";

$fetch_faculty_query = $conn->prepare($fetch_faculty_stmt);
$fetch_faculty_query->execute();
$fetch_faculty_query_result = $fetch_faculty_query->get_result();


//get the count
//fetch the faculty
$fetch_faculty_count_stmt = "SELECT COUNT(*) AS count FROM (SELECT college_personnel.cp_id,GROUP_CONCAT(DISTINCT cp_designation.cp_designation SEPARATOR ' | ') as cp_desig,GROUP_CONCAT(DISTINCT departments.dept_name  SEPARATOR ' , ') as cp_multi_dept ,GROUP_CONCAT(DISTINCT dept_belongs_to_clg_section.dept_sect_id SEPARATOR ',') as cp_multi_dept_sec_id FROM college_personnel
JOIN cp_belongs_to_dept_sect ON college_personnel.cp_id = cp_belongs_to_dept_sect.cp_id 
JOIN dept_belongs_to_clg_section ON cp_belongs_to_dept_sect.dept_sect_id=dept_belongs_to_clg_section.dept_sect_id 
JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
JOIN cp_designation ON cp_designation.cp_id = college_personnel.cp_id 
WHERE LOWER(college_personnel.cp_name) LIKE ('a%')
GROUP BY college_personnel.cp_id 
) as count_subquery";

$fetch_faculty_count_query = $conn->prepare($fetch_faculty_count_stmt);
$fetch_faculty_count_query->execute();
$fetch_faculty_count_query_result = $fetch_faculty_count_query->get_result();
//print_r("here");

if ($fetch_faculty_count_query_result) {
  while ($row = $fetch_faculty_count_query_result->fetch_assoc()) {
    $total_count = $row["count"];
  }
}





//print_r($all_designations);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE| Faculty</title>
  <link rel="stylesheet" href="../../../css/common/header_2.css" />
  <link rel="stylesheet" href="../../../css/secondary_faculty_tab/faculty.css" />
  <?php include('../../../library/library.php'); ?>
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
      <img class="w-full h-full opacity-80 brightness-50 blur-sm" src="../../../assets/webp/Vaze_College_Auditorium.webp" alt="Vaze College Faculty" />
    </div>

    <div class="flex flex-col">

      <!--title text and button-->
      <div class="flex h-[100vh] flex-col sm:flex-row items-center px-8">
        <div class="flex-1 text-white font-bold  text-[2rem] sm:text-[3rem] lg:text-[4rem] xl:text-[4.2rem]">EXPLORE OUR TALENTED FACULTY WHICH NUTURES THE NEXT GENERATION</div>
        <div class="flex-1 flex items-center justify-center">
          <button class="button_gradient_border rounded-full  shadow-2xl px-16 py-4 font-bold text-xl bg-slate-900 text-white" id="take_a_look_btn">Take a look</button>
        </div>
      </div>
      <!--title and text end-->

      <!-- search bar onwards contents div -->
      <div class="flex flex-col bg-slate-100 dark:bg-black ">

        <!--
        /***************
        BREADCRUMBS - to show where the user is currently
        ****************/
        -->
        <nav aria-label="Breadcrumb" class="pl-2 mt-2" id="Breadcrumb">
          <ol class="flex items-stretch gap-2 list-none">
            <!--Home li-->
            <li class="flex items-center gap-2">
              <a href="/Vaze_College_Website/College/src/main/Pages" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                <!--Home icon-->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>

                <span class="hidden md:block">Home</span>
              </a>

              <!--Arrow Icon.  svg is used because we can modify it colors and add css classes to it -->
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                <title id="title-02">Arrow</title>
                <desc id="description-02"> Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes. </desc>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
              </svg>
            </li>

            <!--Last item-->
            <li class="flex items-center gap-2">
              <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">Faculty</a>
            </li>
          </ol>
        </nav>

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
          <button type="button" class="relative mx-2 p-2 bg-blue-900 rounded-full sm:rounded-xl text-white cursor-pointer dark:bg-white dark:text-blue-900" id="search_button">
            <p class=" hidden sm:block font-bold  font-2xl p-2">Search</p>
            <span class="material-symbols-outlined sm:hidden">
              search
            </span>

          </button>

        </div>

        <!--Filter by name div-->
        <div class="w-full flex overflow-x-auto sm:justify-center" id="filter_by_name_div">
          <?php
          for ($ascii = 65; $ascii < 91; $ascii++) {

            if ($ascii == 65) {
              echo '<span class="px-2 lg:text-lg  hover:cursor-pointer hover:text-blue-900 dark:hover:text-emerald-500 sort_selector selected_sort_letter dark:selected_sort_letter transition-all duration-500  "> ' . chr($ascii) . '</span>';
            } else {
              echo '<span class="px-2 lg:text-lg hover:cursor-pointer text-slate-500 dark:text-white hover:text-blue-900 dark:hover:text-emerald-500 sort_selector transition-all duration-500">' . chr($ascii) . '</span>';
            }
          }
          ?>
        </div>

        <!-- FACULTY CONTENTS-->
        <div class=" flex sm:p-4 w-full justify-between">

          <!-- Filter section-->
          <div class=" -bottom-[100rem] sm:top-0 z-10 fixed sm:flex sm:relative sm:w-1/4 transition-transform transition-width duration-[750ms] ease-in-out" id="filter_div">

            <!--Sticky inner filter section-->
            <div class="h-[85vh] lg:h-[80vh] sticky top-32 overflow-y-scroll flex flex-col items-start pt-4 w-full rounded-t-3xl sm:rounded-xl bg-white border border-gray-100 shadow-2xl shadow-gray-600 dark:shadow-none dark:border-gray-700 dark:bg-gray-800  text-black   backdrop-blur-sm sm:backdrop-blur-none" id="div_inside_filter_div">

              <div class="flex flex-col items-start px-8">

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


                    <div class="flex">
                      <input type="checkbox" id="other_chkbox" name="faculty" value="o" />
                      <label for="other_chkbox" class=" mx-2 dark:text-white">Other</label>
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

                <button id="apply_filter_button" class="text-blue-900 dark:text-emerald-500 p-1 flex-1 rounded-lg mx-1 font-bold  bg-white">Apply</button>


                <button id="filter_clear_button" class="text-white rounded-lg p-1 mt-1 mx-1 flex-1 font-bold bg-red-700">Clear</button>
              </div>
            </div>


          </div>
          <!--Filter section end-->

          <!-- Main contents-->
          <div class="flex-1 flex flex-col relative mx-4 sm:ml-4">

            <!-- No of courses-->
            <p class="text-2xl text-black font-bold dark:text-white" id="no_of_faculty_para">
              <?php echo "Showing 1 - " . $fetch_faculty_query_result->num_rows . " of " . $total_count . " results";
              ?>
            </p>

            <!--next and previous button-->
            <div class="flex justify-between mb-4 mt-2">
              <button class="bg-blue-900 dark:bg-emerald-500 text-white rounded-lg p-2 flex items-center text-center   invisible previous_button">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                    <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                  </svg>
                </span>
                <span class="text-center">Prev</span>
              </button>
              <button class="bg-blue-900 dark:bg-emerald-500 text-white rounded-lg p-2 flex items-center next_button">
                <span class="text-center">Next</span>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                    <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                  </svg>
                </span>
              </button>
            </div>

            <!--Div to show loading animation and not found-->
            <div class=" hidden  flex-1" id="loading_animation_div"></div>

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
                    case "o":
                      $faculty_type = "Other";
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

                      <?php
                      if ($faculty_row["cp_personal_website_link"] != "") {
                        echo '<a target="_blank" href="' . $faculty_row["cp_personal_website_link"] . '" class="font-bold text-[1.5rem] hover:cursor-pointer hover:text-blue-900 dark:hover:text-emerald-500 hover:underline">' . $faculty_row["cp_honourific"] . " " . $faculty_row["cp_name"] . '</a>';
                      } else {
                        echo '<p class="font-bold text-[1.5rem]">' . $faculty_row["cp_honourific"] . " " . $faculty_row["cp_name"] . '</p>';
                      }
                      ?>



                      <p class="text-sm  text-blue-800 dark:text-emerald-500">
                        <?php echo $faculty_row["cp_desig"] ?>
                      </p>

                      <p class="mt-4 font-medium dark:text-white  ">Department</p>

                      <?php
                      $dept_array = explode(" , ", $faculty_row["cp_multi_dept"]); //the space in " , " is important
                      $dept_sect_id_array=explode(",",$faculty_row["cp_multi_dept_sec_id"]);
                      //$i=0;
                      for($i=0;$i<count($dept_array);$i++){
                      ?>

                        <a target="_blank" href="<?php echo "../academics_tab/specific_department.php?dept_sec_id=" . base64_encode($dept_sect_id_array[$i]); ?>" class=" text-sm hover:cursor-pointer text-slate-600 dark:text-slate-400 hover:text-black  dark:hover:text-emerald-500 hover:underline">
                          Department of <?php echo $dept_array[$i]?>
                        </a>
                      <?php
                    
                      }
                      ?>

                      <p class="mt-4 font-medium ">Faculty Type</p>
                      <p class="text-sm text-slate-600 dark:text-slate-400 ">
                        <?php echo $faculty_type ?>
                      </p>

                      <p class="mt-4 font-medium">College Section</p>
                      <p class="text-sm text-slate-600 dark:text-slate-400">
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

            <!--just a spacer div-->
            <div class="flex-1"></div>

            <!--next and previous button-->
            <div class="flex justify-between mt-4 ">
              <button class="bg-blue-900 dark:bg-emerald-500 text-white rounded-lg p-2  items-center text-center invisible flex previous_button">

                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffffff">
                    <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                  </svg>
                </span>
                <span class="text-center">Prev</span>
              </button>
              <button class="bg-blue-900 dark:bg-emerald-500 text-white rounded-lg p-2 flex items-center next_button">
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