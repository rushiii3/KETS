<?php
include("../../../config/connect.php");

$fetch_stmt = "SELECT * FROM `photos_for_achievements_in_academic_year` join achievements on achievements.achievement_id=photos_for_achievements_in_academic_year.achievement_id join photos on photos.photo_id = photos_for_achievements_in_academic_year.photo_id
      ORDER by achievements.achievement_date";
$fetch_photos_query = $conn->prepare($fetch_stmt);
$fetch_photos_query->execute();
$fetch_photos_query_result = $fetch_photos_query->get_result();

$fetch_academic_years_stmt = "SELECT * FROM academic_years ORDER BY academic_year DESC";
$fetch_academic_years_query = $conn->prepare($fetch_academic_years_stmt);
$fetch_academic_years_query->execute();
$fetch_academic_years_query_result = $fetch_academic_years_query->get_result();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>V. G. VAZE |Gallery</title>
  <?php include('../../../library/library.php'); ?>
  <link rel="stylesheet" href="../../../css/common/header_2.css" />
</head>

<body class="bg-white dark:bg-black dark:text-white ">
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
  <div class="relative mt-32 p-0">


    <!--
    /***************
     BREADCRUMBS - to show where the user is currently
    ****************/
    -->
    <nav aria-label="Breadcrumb" class="pl-2 mt-32" id="Breadcrumb">
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
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </li>

        <!--No path item-->
        <li class="flex items-center gap-2">
          <p aria-current="page" class="  max-w-[20ch]  truncate whitespace-nowrap text-slate-700">More</p>

          <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">

            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
          </svg>
        </li>

        

        <!--Last item-->
        <li class="flex items-center gap-2">
          <a href="#" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-700 hover:text-emerald-500">Gallery</a>
        </li>
      </ol>
    </nav>


    <!---REMAINING CONTENTS-->
    <h1 class="text-4xl font-bold tracking-tight sm:text-6xl text-center">Gallery</h1>
    <div class="overflow-x-scroll">

      <div class="flex sm:justify-center justify-start">
        <div class="flex gap-2 px-8 justify-start sm:justify-center mt-4 relative w-fit">
          <div class="absolute h-full rounded-full bg-blue-800 left-8 top-0 -z-10 transition-all duration-500" id="bg_slider"></div>
          <button class="rounded-full  p-2 filter_btn transition-all duration-500">Achievements</button>
          <button class="rounded-full dark:bg-gray-800 bg-slate-100 p-2 filter_btn transition-all duration-500">Events</button>
          <!-- <button class="rounded-full dark:bg-gray-800 bg-slate-100 p-2 filter_btn transition-all duration-500">History</button> -->
          <button class="rounded-full dark:bg-gray-800 bg-slate-100  p-2 filter_btn transition-all duration-500">Faculty</button>
          <button class="rounded-full dark:bg-gray-800 bg-slate-100  p-2 filter_btn transition-all duration-500">Committees</button>
        </div>
      </div>
    </div>

    <div class="flex justify-end sm:pe-20 pe-2 my-4 sm:my-0">
      <div class="flex flex-col">

        <label for="academic_year_selector" class="sm:block hidden text-sm">Academic Year</label>
        <select name="" id="academic_year_selector" class="rounded-lg dark:bg-gray-800 p-2">
          <option class="select_option" value="">All</option>
          <?php
          if ($fetch_academic_years_query_result) {
            while ($row = $fetch_academic_years_query_result->fetch_assoc()) {
              echo "<option class='select_option' value=\"" . $row['academic_year'] . "\">" . $row["academic_year"] . "</option>";
            }
          }

          ?>
        </select>
      </div>
    </div>

    <div class="p-0 sm:px-8 mt-4">
      <div class="w-full hidden h-[50vh]" id="loading_animation_div"></div>
      <div class="grid grid-cols-3 gap-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4" id="photos_grid">


        <?php
        if ($fetch_photos_query_result) {
          while ($row = $fetch_photos_query_result->fetch_assoc()) {
            //print_r("here");

        ?>

            <div class=" group relative h-fit overflow-clip img_card ">
              <img src="<?php echo $row["photo_link"]; ?>" class=" aspect-square object-cover sm:object-cover h-[20vh] sm:h-[50vh]" data-aos="fade-up" loading="lazy" id="grid_photo" />

              <div class="dark:bg-black bg-white h-0 p-4 text-sm opacity-0 w-full group-hover:h-full  group-hover:opacity-100  absolute bottom-0 transition-all duration-1000" id="grid_photo_caption"><?php echo $row["photo_caption"] ?></div>
            </div>

        <?php
          }
        }

        ?>
      </div>
    </div>

  </div>

  <!--slider div for showing fullscreen images-->
  <div class="opacity-0 fixed bottom-0  h-[100vh] w-[100vw] px-6 pb-6  z-[1000] transition-all duration-1000  translate-x-[100%] backdrop-blur-lg" id="modal_div">
    <div class="flex flex-col h-full w-full relative justify-center">

      <button class="absolute top-4 right-4 flex justify-end z-[20]" id="close_btn">
        <svg xmlns="http://www.w3.org/2000/svg" height="2.5rem" viewBox="0 -960 960 960" width="2.5rem" fill="#e8eaed">
          <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
        </svg>
      </button>

      <div class="h-full w-full absolute top-0 left-0 z-10 bg-gradient-to-b from-transparent to-black from-40%"></div>

      <img class="flex-1 object-contain max-h-[90vh] mt-4" alt="gallery photo" loading="lazy" id="modal_photo" />

      <p class="absolute bottom-10 w-full font-medium text-lg  z-[15] text-center" id="modal_photo_caption"></p>
    </div>

  </div>
  <!--slider div end-->


  <!--
  /***************
    FOOTER
  ****************/
  -->
  <?php include('../../Layouts/footer.php'); ?>

  <script src="../../../js/common/header_2.js"></script>
  <script src="../../../js/more_tab/gallery.js" type="module"></script>
  <!--lottie animation player-->
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>

</body>
<?php include('../../../library/AOS.php'); ?>

</html>