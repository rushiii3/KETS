 <div>
     <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[20rem] h-[15rem] mx-auto w-full items-center justify-center">
         <img src="../../../assests/college.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
         <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
         <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
         <div class="text-center z-1" data-aos="fade-up">
             <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                 Departments
             </h1>
         </div>

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
             <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">Departments</a>

         </li>
     </ol>
 </nav>


 <div class=" mx-auto">
     <div class="mb-2 border-b border-gray-200  mt-4 bg-slate-300 overflow-hidden p-1" data-aos="fade-left">
         <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content">
             <li class="me-2" role="presentation">
                 <button class="inline-block p-4 bg border-b-2 rounded-t-lg hover:bg-blue-700 hover:translate-y-[-0.1rem] hover:scale-105 transition-all ease-linear" id="test1" data-tabs-target="#junior" type="button" role="tab" aria-controls="profile" aria-selected="false">Junior</button>
             </li>
             <li class="me-2" role="presentation">
                 <button class="inline-block p-4 bg border-b-2 rounded-t-lg hover:bg-blue-700  hover:border-b-2 hover:translate-y-[-0.1rem] hover:scale-105 transition-all ease-linear" id="test2" data-tabs-target="#degree" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Degree</button>
             </li>
             <li class="me-2" role="presentation">
                 <button class="inline-block p-4 bg border-b-2 rounded-t-lg hover:bg-blue-700 hover:border-blue-950 hover:translate-y-[-0.1rem] hover:scale-105 transition-all ease-linear" id="test3" data-tabs-target="#sfc" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Self Finance</button>
             </li>
         </ul>
     </div>


     <div class=" mx-auto min-w-full" data-aos="zoom-in">
         <div id="ok1">
             <div class="list1 py-12 px-14 grid mx-auto gap-5 grid-cols-1 md:grid-cols-3  justify-center" id="junior" role="tabpanel" aria-labelledby="profile-tab">
                 <?php
                    $query1 = "SELECT d.dept_name,d.dept_id,ds.dept_sect_id FROM `departments` as d ,dept_belongs_to_clg_section as ds  WHERE d.dept_id=ds.dept_id and ds.college_sec_name='j'";
                    $result1 = $conn->query($query1);
                    if ($result1->num_rows > 0) {
                        while ($row1 = $result1->fetch_assoc()) {
                            $dept_id = $row1['dept_id'];
                            $dept_name = $row1['dept_name'];
                            $dept_sect_id = base64_encode($row1['dept_sect_id']);
                            $encoded_id = base64_encode($row1['dept_id']);
                            echo '
                            <div class="min-w-fit sm:min-w-xs p-6 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 text-center border-t-4 border-t-blue-600 hover:translate-y-[-0.5rem] transition-all duration-300 shadow-neutral-800/70 hover:shadow-xl " >
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> Department of ' . $dept_name . '</h5>
                     </a>
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>
                            
                            ';
                        }
                    } else {
                        echo '<H1>NO DEPARTMENT FOUND!!</H1>';
                    }
                    ?>
                 <!-- section 1-->

                 <!-- <div class="min-w-fit sm:min-w-xs p-6 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 text-center border-t-4 border-t-blue-600 hover:translate-y-[-0.5rem] transition-all duration-300 shadow-neutral-800/70">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>

                 
                 <div class="min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


                
                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div> -->


                 <!-- section 2-->

                 <!-- <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


                
                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>

               
                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


                 
                 <div class=" min-w-xl md:min-w-xs bg-white p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>-->




             </div>
         </div>

         <div id="ok2">
             <div class="list1 py-12 px-14 grid mx-auto gap-5 grid-cols-1 md:grid-cols-3  justify-center" id="degree" role="tabpanel" aria-labelledby="profile-tab">

                 <!-- section 1-->
                 <?php
                    $query2 = "SELECT d.dept_name,d.dept_id,ds.dept_sect_id FROM `departments` as d ,dept_belongs_to_clg_section as ds  WHERE d.dept_id=ds.dept_id and ds.college_sec_name='d'";
                    $result2 = $conn->query($query2);
                    if ($result2->num_rows > 0) {
                        while ($row2 = $result2->fetch_assoc()) {
                            $dept_id = $row2['dept_id'];
                            $dept_name = $row2['dept_name'];
                            $dept_sect_id = base64_encode($row2['dept_sect_id']);
                            $encoded_id = base64_encode($row2['dept_id']);
                            echo '
                            <div class=" min-w-fit sm:min-w-xs p-6 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 text-center border-t-4 border-t-blue-600 hover:translate-y-[-0.5rem] transition-all duration-300 shadow-neutral-800/70 hover:shadow-xl " >
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> Department of ' . $dept_name . '</h5>
                     </a>
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>
                            
                            ';
                        }
                    } else {
                        echo '<H1>NO DEPARTMENT FOUND!!</H1>';
                    }
                    ?>



                 <!-- section 2-->

                 <!-- <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


        
                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>

      
                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


         
                 <div class=" min-w-xl md:min-w-xs bg-white p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div> -->



             </div>
         </div>

         <div id="ok3">
             <div class="list1 py-12 px-14 grid mx-auto gap-5 grid-cols-1 md:grid-cols-3  justify-center" id="sfc" role="tabpanel" aria-labelledby="profile-tab">

                 <!-- section 1-->
                 <!-- Card1 -->
                 <?php
                    $query3 = "SELECT d.dept_name,d.dept_id,ds.dept_sect_id FROM `departments` as d ,dept_belongs_to_clg_section as ds  WHERE d.dept_id=ds.dept_id and ds.college_sec_name='s'";
                    $result3 = $conn->query($query3);
                    if ($result3->num_rows > 0) {
                        while ($row3 = $result3->fetch_assoc()) {
                            $dept_id = $row3['dept_id'];
                            $dept_name = $row3['dept_name'];
                            $dept_sect_id = base64_encode($row3['dept_sect_id']);
                            $encoded_id = base64_encode($row3['dept_id']);
                            echo '
                            <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 text-center border-t-4 border-t-blue-600 hover:translate-y-[-0.5rem] transition-all duration-300 shadow-neutral-800/70 hover:shadow-xl ">
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center"> Department of ' . $dept_name . '</h5>
                     </a>
                     <a href="../../Pages/academics_tab/Department.php?d_id=' . $encoded_id . '&dept_sec_id=' . $dept_sect_id . '" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>
                            
                            ';
                        }
                    } else {
                        echo '<H1>NO DEPARTMENT FOUND!!</H1>';
                    }
                    ?>



                 <!-- section 2-->
                 <!-- <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70"> -->
                 <!-- 
                 <div class="min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 text-center border-t-4 border-t-blue-600 hover:translate-y-[-0.5rem] transition-all duration-300 shadow-neutral-800/70">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>



                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


                 <div class=" min-w-xl md:min-w-xs p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>



                 <div class=" min-w-xl md:min-w-xs bg-white p-6 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  text-center">
                     <a href="#">
                         <h5 class=" py-3 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-center">Department of IT</h5>
                     </a>
                     <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                         Read more
                         <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </a>
                 </div>


 -->



             </div>
         </div>


     </div>

 </div>
 <div class=" py-5">
 </div>