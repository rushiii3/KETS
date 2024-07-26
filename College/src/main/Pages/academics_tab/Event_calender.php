<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../../css/common/header_2.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <style>
    iframe {
      height: 90dvh;
      width: 85dvw;
      border: solid 2px #777;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: all 0.8s ease;
      z-index: 10;
    }

    iframe:hover {
      height: 100dvh;
      width: 95dvw;

    }

    .ok {

      clip-path: circle(60% at 0 0);
      transition: all 2s ease;


    }

    .b1 {
      z-index: -1;
    }


    .ifr:hover {
      .ok {
        clip-path: circle(100%);
      }
    }
  </style>
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
        Event Calendar
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
        <a href="#" data-aos="fade-right" data-aos-duration="1300" aria-current=" page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400 ">Event Calendar</a>

      </li>
    </ol>
  </nav>



  <section class="py-4 mt-5 border-b max-w-[95dvw] rounded-2xl  mx-auto">
    <div class=" relative xl:container  m-auto text-gray-600 overflow-hidden rounded-2xl bg-white" data-aos="zoom-out-up" data-aos-offset="100">

      <div class="mb-4 py-4 space-y-2 text-center ">
        <div class="ok  bg-gradient-to-tr from-purple-600 to-cyan-300 p-30 w-40 h-40 absolute left-0 top-0 b1"></div>
        <div class="ok  bg-gradient-to-tr from-blue-500 to-teal-400 p-30 w-40 h-40 absolute right-0 -top-3 rotate-90 b1"></div>

        <h2 class="text-4xl font-bold text-gray-800 md:text-5xl ">
          Calender
        </h2>
        <p class="lg:mx-auto lg:w-6/12 text-gray-600 py-2">
          List of all the Events for an Acedemic Year
        </p>
        <div class="ok  bg-gradient-to-tr from-purple-600 to-cyan-300 p-30 w-40 h-40 absolute -right-0 -bottom-0 rotate-180 b1"></div>
        <div class="ok bg-gradient-to-tr from-blue-500 to-teal-400 p-30 w-40 h-40 absolute -left-0 -bottom-0 -rotate-90 b1"></div>

      </div>
    </div>
  </section>

















  <div class=" relative  max-w-[95dvw] mx-auto  flex flex-col justify-centeralign-middle bg-no-repeat lg:h-auto items-center text-center p-12  lg:m-10 m-5 rounded-lg bg-white border-y-4 border-x-4 border-blue-800 border-double ifr md:shadow-[5px_17px_20px_4px_#bee3f8,0px_17px_14px_2px_#718096] shadow-[0px_10px_14px_2px_#718096]">
    <div class="ok  bg-gradient-to-tr from-purple-600 to-cyan-300 p-40 w-40 h-40 absolute left-0 top-0"></div>
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FKolkata&bgcolor=%234285F4&title=Kelkar%20College%20Event%20Calender&src=d2FsZnJhNTI3NzdAZ21haWwuY29t&src=ZW4tZ2IuaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4&color=%233F51B5" class="rounded-xl shadow-lg hover:translate-y-[-1rem] transition-all  duration-700 shadow-neutral-800/70 hover:shadow-2xl " style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>

    <div class=" ok  bg-gradient-to-tr from-purple-600 to-cyan-300 p-40 w-40 h-40 absolute -right-0 -bottom-0 rotate-180"></div>
  </div>


  <!-- <div class="dark:bg-gray-100 dark:text-gray-900 m-5">
    <div class="container flex  mx-auto bg-gray-200">
      <div class="flex basis-[60%] flex-col justify-center col-span-12 align-middle bg-no-repeat bg-cover lg:col-span-6 lg:h-auto items-center text-center">
          <iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=1&ctz=Asia%2FKolkata&bgcolor=%23ffffff&showCalendars=0&src=d2FsZnJhNTI3NzdAZ21haWwuY29t&src=ZW4tZ2IuaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%230B8043" style="border: solid 1px #777" width="500" height="500" frameborder="0" scrolling="no"></iframe>
      </div>
      <div class="flex  basis-[40%] flex-col col-span-12 p-6 divide-y lg:col-span-6 lg:p-10 dark:divide-gray-300">
        <img src="../../../assests/Events/undraw_my_current_location_re_whmt.svg" alt="" class=" h-96 w-96 bg-red-400 object-cover" />
      </div>
    </div>
  </div> -->



  <?php include('../../Layouts/footer.php'); ?>
  <?php include('../../../library/AOS.php'); ?>
  <script src="../../../js/showMoreItems.min.js"></script>
  <script src="../../../js/common/header_2.js"></script>
</body>


</html>