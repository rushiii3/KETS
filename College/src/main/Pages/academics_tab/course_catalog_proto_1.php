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
    .custom_bg_blue {
      background: #001b53;
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
  <nav aria-label="Breadcrumb" class="pl-16 mt-10" id="Breadcrumb">
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
    <button class="self-center flex p-1 cursor-pointer "> <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

        <g id="SVGRepo_bgCarrier" stroke-width="0" />

        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

        <g id="SVGRepo_iconCarrier">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.567 9.8895C12.2495 8.90124 12.114 7.5637 11.247 6.7325C10.3679 5.88806 9.02339 5.75928 7.99998 6.4215C7.57983 6.69308 7.25013 7.0837 7.05298 7.5435C6.85867 7.99881 6.80774 8.50252 6.90698 8.9875C7.00665 9.47472 7.25054 9.92071 7.60698 10.2675C7.97021 10.6186 8.42786 10.8563 8.92398 10.9515C9.42353 11.049 9.94062 11.0001 10.413 10.8105C10.8798 10.6237 11.2812 10.3033 11.567 9.8895Z" stroke="#001b53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.433 17.8895C11.7504 16.9012 11.886 15.5637 12.753 14.7325C13.6321 13.8881 14.9766 13.7593 16 14.4215C16.4202 14.6931 16.7498 15.0837 16.947 15.5435C17.1413 15.9988 17.1922 16.5025 17.093 16.9875C16.9933 17.4747 16.7494 17.9207 16.393 18.2675C16.0298 18.6186 15.5721 18.8563 15.076 18.9515C14.5773 19.0481 14.0614 18.9988 13.59 18.8095C13.1222 18.6234 12.7197 18.3034 12.433 17.8895V17.8895Z" stroke="#001b53" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M12 7.75049C11.5858 7.75049 11.25 8.08627 11.25 8.50049C11.25 8.9147 11.5858 9.25049 12 9.25049V7.75049ZM19 9.25049C19.4142 9.25049 19.75 8.9147 19.75 8.50049C19.75 8.08627 19.4142 7.75049 19 7.75049V9.25049ZM6.857 9.25049C7.27121 9.25049 7.607 8.9147 7.607 8.50049C7.607 8.08627 7.27121 7.75049 6.857 7.75049V9.25049ZM5 7.75049C4.58579 7.75049 4.25 8.08627 4.25 8.50049C4.25 8.9147 4.58579 9.25049 5 9.25049V7.75049ZM12 17.2505C12.4142 17.2505 12.75 16.9147 12.75 16.5005C12.75 16.0863 12.4142 15.7505 12 15.7505V17.2505ZM5 15.7505C4.58579 15.7505 4.25 16.0863 4.25 16.5005C4.25 16.9147 4.58579 17.2505 5 17.2505V15.7505ZM17.143 15.7505C16.7288 15.7505 16.393 16.0863 16.393 16.5005C16.393 16.9147 16.7288 17.2505 17.143 17.2505V15.7505ZM19 17.2505C19.4142 17.2505 19.75 16.9147 19.75 16.5005C19.75 16.0863 19.4142 15.7505 19 15.7505V17.2505ZM12 9.25049H19V7.75049H12V9.25049ZM6.857 7.75049H5V9.25049H6.857V7.75049ZM12 15.7505H5V17.2505H12V15.7505ZM17.143 17.2505H19V15.7505H17.143V17.2505Z" fill="#001b53" />
        </g>

      </svg></button>



    <div class=" bg-transparent w-full flex items-center border rounded-full focus-within:ring ">

      <input type="text" class=<?php echo '"w-full bg-transparent border-0 focus:border-transparent focus:ring-0  pl-2 text-[#001b53] dark:text-white placeholder:text-[' . BG_BLUE_COLOR . ']"'; ?> placeholder="Search programs" />

      <button type="reset" id="btn_clear_search" class="cursor-pointer"> <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill=<?php echo BG_BLUE_COLOR; ?>>
          <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
        </svg> </button>

    </div>

    <!--search button-->
    <button type="submit" class="relative  mx-2 p-2 custom_bg_blue rounded-full text-white cursor-pointer">
      <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

        <g id="SVGRepo_bgCarrier" stroke-width="0" />

        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

        <g id="SVGRepo_iconCarrier">
          <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </g>

      </svg>
    </button>

  </div>


  <!-- Degree,Junior Tabs-->



<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
        <li class="me-2">
            <a href="#" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Degree</a>
        </li>
        <li class="me-2">
            <a href="#" class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500" aria-current="page">Junior</a>
        </li>
       
    </ul>
</div>





  <!--
    /***************
    FOOTER
    ****************/
    -->
  <?php include('../../Layouts/footer.php'); ?>
</body>
<?php include('../../../library/AOS.php'); ?>

</html>