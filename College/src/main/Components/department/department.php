 <!--Header-->
 <div>
     <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[20rem] h-[15rem] mx-auto w-full items-center justify-center">
         <img src="../../../assests/department.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
         <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
         <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
         <div class="text-center z-1" data-aos="fade-up">
             <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                 <?php
                    if (isset($_GET['d_id']) || !empty($_GET['d_id']) || isset($_GET['dept_sec_id']) || !empty($_GET['dept_sec_id'])) {
                        $encoded_id = $_GET['d_id'];
                        $d_id = base64_decode($encoded_id);
                        $dept_sect_id = $_GET['dept_sec_id'];
                        $query = "SELECT dept_name FROM `departments` WHERE dept_id='$d_id'";
                        $result = $conn->query($query);
                        if ($result->num_rows > 0) {
                            // while ($row1 = $result1->fetch_assoc()) {
                            //     $dept_id = $row1['dept_id'];
                            //     $dept_name = $row1['dept_name'];
                            // }
                            $row = $result->fetch_assoc();
                            $d_name = $row['dept_name'];
                            echo $d_name;
                        }
                    } else {
                        //echo '<META HTTP-EQUIV="Refresh" Content="0.5;URL=../../Pages/department/Dept_Index.php">';
                        echo "
                     <script>
                     alert('Select A Department');
                     document.location.href='../../Pages/department/Dept_Index.php';
                     </script>
                        ";
                    }
                    ?>
             </h1>
         </div>

     </div>

 </div>

 <!-- Component: Flat breadcrumb with text & leading icon -->
 <nav aria-label="Breadcrumb" class="pl-3 mt-10" id="Breadcrumb" data-aos="fade-right">
     <ol class="flex items-stretch gap-2 list-none">
         <li class="flex items-center gap-2">
             <a href="../../Pages/index.php" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
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
             <a href="../../Pages/department/Dept_Index.php" aria-current="page" class=" max-w-[20ch] truncate whitespace-nowrap text-slate-600">Departments</a>
             <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                 <title id="title-02">Arrow</title>
                 <desc id="description-02">
                     Arrow icon that points to the next page in big screen resolution sizes
                     and previous page in small screen resolution sizes.
                 </desc>
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
             </svg>
             <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400"><?php echo $d_name; ?></a>

         </li>
     </ol>
 </nav>


 <!--Faculty-->
 <section class="py-8 mt-5 border-b max-w-[95dvw] rounded-2xl mb-12 bg-white mx-auto">
     <div class="xl:container mb-18 m-auto px-6 text-gray-600 md:px-12 xl:px-6" data-aos="zoom-out-up">
         <div class="mb-12 space-y-2 text-center">
             <h2 class="text-4xl font-bold text-gray-800 md:text-5xl ">
                 Faculty
             </h2>
             <p class="lg:mx-auto lg:w-6/12 text-gray-600 ">
                 Our Guiding Force
             </p>
         </div>
     </div>

     <?php
        error_reporting(0);

        function displayPersonnelCards(&$count, &$result2, $conn, $j)
        {
            for ($i = 0; $i < $j; $i = $i + 1) {
                $count = $count - 1;
                $row2 = $result2->fetch_assoc();
                $cp_name = $row2['cp_name'];
                $cp_id = $row2['cp_id'];
                $cp_web = $row2['cp_personal_website_link'];
                $cp_img = $row2['cp_image_path'];
                $cp_hon = $row2['cp_honourific'];

                if (!isset($cp_img) || empty($cp_img)) {
                    $cp_img = "../../../assests/profile.png";
                }
                if (!isset($cp_web) || empty($cp_web)) {
                    $cp_web = "https://www.google.com/";
                }

                //$cp_img = "../../../assests/department.jpg";


                //Designation Fetch
                $query3 = "SELECT cp_designation FROM `cp_designation` WHERE cp_id='$cp_id'";
                $result3 = $conn->query($query3);
                if ($row3 = $result3->fetch_assoc()) {
                    $cp_desig = $row3['cp_designation'];
                } else {
                    $cp_desig = "Teaching Staff";
                }

                //Card Population
                echo '
                   
                   <div class="group space-y-4 pb-9 text-center border-y-4 border-x-4 rounded-2xl" data-aos="fade-up">
                   <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                   <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="' . $cp_img . '" alt="woman" loading="lazy" width="640" height="805" />
                   </div>
                   <div class="pt-4">
                   <h4 class="text-2xl text-gray-700">' . $cp_hon . ' ' . $cp_name . '</h4>
                   ';
                if ($cp_desig == 'Head') {
                    echo '<span class="block text-xl text-gray-700 font-bold">' . $cp_desig . '</span>';
                    echo '<span class="block text-base text-purple-700 hover:underline p-1 font-medium"><a href="' . $cp_web . '">know more</a></span>
                         </div>
                         </div>';
                } else {
                    echo '<span class="block text-sm text-gray-500">' . $cp_desig . '</span>';
                    echo '<span class="block text-base text-purple-700 hover:underline p-2 font-medium""><a href="' . $cp_web . '">know more</a></span>
                           </div>
                         </div>';
                }
            }
        }

        $query2 = "SELECT * FROM `college_personnel` WHERE cp_department_section='$dept_sect_id'";
        $result2 = $conn->query($query2);
        $count = $result2->num_rows;
        if ($result2->num_rows) {

            while ($count > 0) {
                if ($count >= 3) {
                    echo ' <div class="grid gap-2 md:grid-cols-3  mx-auto p-3 " data-aos="fade-left">';
                    displayPersonnelCards($count, $result2, $conn, 3);
                    echo "</div>";
                } else if ($count == 2) {
                    echo ' <div class="grid gap-2 md:grid-cols-2  mx-auto p-3" data-aos="fade-right">';
                    displayPersonnelCards($count, $result2, $conn, 2);
                    echo "</div>";
                } else if ($count == 1) {
                    echo ' <div class="grid gap-2 md:grid-cols-1 justify-items-center  mx-auto p-3" data-aos="fade-left">';
                    displayPersonnelCards($count, $result2, $conn, 1);
                    echo "</div>";
                }
            }



            // $row2 = $result2->fetch_assoc();
            // for($i=1;$i<4;$i=$i+1) {
            //     $cp_name = $row2['cp_name'];
            //     $cp_id=$row2['cp_id'];
            //     $cp_web = $row2['cp_personal_website_link'];
            //     $cp_img = $row2['cp_image_path'];
            //     $cp_hon=$row2['cp_honourific'];

            //     //Designation Fetch
            //     $query3 = "SELECT cp_designation FROM `cp_designation` WHERE cp_id='$cp_id'";
            //     $result3 = $conn->query($query3);
            //     if($row3=$result3->fetch_assoc()){
            //         $cp_desig = $row3['cp_designation'];
            //     }
            //     else{
            //         $cp_desig ="Teaching Staff";
            //     }

            //     //Card Population
            //     echo '
            //        <div class="group space-y-4 pb-9 text-center border-y-4 border-x-4">
            //        <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
            //        <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww" alt="woman" loading="lazy" width="640" height="805" />
            //        </div>
            //        <div class="pt-4">
            //        <h4 class="text-2xl text-gray-700">' . $cp_hon . ' ' . $cp_name . '</h4>
            //        ';
            //     if($cp_desig=='Head'){
            //         echo'<span class="block text-xl text-gray-700 font-bold">'.$cp_desig.'</span>';
            //         echo'<span class="block text-base text-purple-700 hover:underline p-1 font-medium"><a href="#">know more</a></span>
            //              </div>
            //              </div>';
            //     }
            //     else{
            //         echo '<span class="block text-sm text-gray-500">'.$cp_desig.'</span>';
            //         echo '<span class="block text-base text-purple-700 hover:underline p-2 font-medium""><a href="#">know more</a></span>
            //                </div>
            //              </div>';
            //     }
            // }    
        } else {
            echo "<h1 class='text-2xl text-center col-span-3 font-semibold text-gray-800'>No Member</h1>";
        }

        ?>


     <!-- 
         <div class="group space-y-4 text-center">
             <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                 <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww" alt="man" loading="lazy" width="1000" height="667" />
             </div>
             <div class="pt-4">
                 <h4 class="text-2xl text-gray-700 ">Mr. Naresh Mehta</h4>
                 <span class="block text-sm text-gray-500">Assistant Officer</span>
             </div>
         </div>
         <div class="group space-y-4 text-center">
             <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                 <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww" alt="man" loading="lazy" width="1000" height="667" />
             </div>
             <div class="pt-4">
                 <h4 class="text-2xl text-gray-700 ">Mr. Naresh Mehta</h4>
                 <span class="block text-sm text-gray-500">Assistant Officer</span>
             </div>
         </div> -->

     <!-- </div> -->
 </section>

 <!--Syllabus-->
 <div class="py-8 border-b">
     <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6" data-aos="zoom-in-up">
         <div class="mb-6 space-y-2 text-center">
             <h2 class="text-5xl font-bold text-gray-800 md:text-6xl ">
                 Syllabus
             </h2>
             <p class="lg:mx-auto lg:w-6/12 text-gray-600 ">
                 For all the Programme offered.
             </p>
         </div>

     </div>
 </div>


 <div class="max-w-[95dvw] rounded-2xl mb-12 bg-white mx-auto" style="" data-aos="zoom-in" data-aos-duration="1000">
     <section class="py-12 border-b">
         <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
             <!--Undegrad syllabus-->
             <div class="mb-12 space-y-2 text-center" data-aos="fade-left" data-aos-duration="1500">
                 <h2 class="text-2xl font-bold text-gray-800 md:text-3xl ">
                     Undergraduate
                 </h2>
                 <p class="lg:mx-auto lg:w-6/12 text-gray-600">

                 </p>
             </div>
             <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 border-b  pb-5" data-aos="fade-left" data-aos-duration="2000">


                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">FYBSCIT NEP</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>
                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">SYBSCIT NEP</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>

                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">TYBSCIT NEP</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>

                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">FYBSCIT</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2023-2024</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>
                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">SYBSCIT</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2023-2024</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>

                 <a href="#" class="flex flex-row items-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full p-4 hover:translate-y-[-0.5rem] transition-all duration-300">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">TYBSCIT</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2023-2024</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>



             </div>

             <!--Masters syllabus-->
             <div class="mb-12 space-y-2 text-center mt-12" data-aos="zoom-in">
                 <h2 class="text-2xl font-bold text-gray-800 md:text-3xl ">
                     Post-Graduate
                 </h2>
                 <p class="lg:mx-auto lg:w-6/12 text-gray-600">

                 </p>
             </div>
             <div class="grid grid-cols-1 gap-4 md:grid-cols-2 border-b pb-3 mx-auto overflow-hidden" data-aos="fade-right" data-aos-duration="1000">


                 <a href="#" class="flex flex-row bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full md:max-w-96 p-4 ">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">MSCIT Part I</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>
                 <a href="#" class="flex flex-row bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 flex-nowrap mx-auto overflow-hidden w-full md:max-w-96 p-4">
                     <img class=" w-full rounded-t-lg max-h-28  md:rounded-none md:rounded-s-lg object-cover basis-[30%] flex-shrink-0" src="/College/src/assests/pdf.webp" alt="">
                     <div class="flex flex-col justify-between p-4 leading-normal basis-[70%]">
                         <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 text-center">MSCIT Part II</h5>
                         <h5 class="mb-2 text-sm font-bold tracking-tight text-gray-700 text-center">2024-2025</h5>
                         <svg class="rtl:rotate-180 w-5.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                         </svg>
                     </div>
                 </a>



             </div>



         </div>

     </section>
 </div>


 <!-- Department acativities-->
 <?php
    $query2 = "SELECT DISTINCT dy.academic_year FROM dept_has_dept_activities as dc INNER JOIN departmental_activities_in_academic_year as dy on dc.dept_act_id=dy.dept_act_id and dc.dept_sect_id=$dept_sect_id ORDER by dy.academic_year desc";
    $result2 = $conn->query($query2);
    if ($result2->num_rows > 0) {
        $year = array();
    ?>

     <!--year selection-->
     <div class="py-12 border-b " data-aos="zoom-in-up">
         <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
             <div class="mb-8 space-y-2 text-center">
                 <h2 class="text-5xl font-bold text-gray-800 md:text-6xl ">
                     Departmental Activities
                 </h2>
                 <p class="lg:mx-auto lg:w-6/12 text-gray-600 ">
                     List of the activities Conducted
                 </p>
             </div>
             <div class="flex hide-scroll-bar p-2 justify-center items-center gap-6 flex-nowrap overflow-x-auto mx-auto" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-aos="fade-left" data-aos-duration="1500">
                 <?php
                    while ($row = $result2->fetch_assoc()) {
                        $year[] = $row['academic_year'];
                        echo '
        
        <button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100 bg border-2 hover:scale-[110%] duration-150" data-tabs-target="#_' . $row['academic_year'] . '" type="button" role="tab" aria-controls="profile" aria-selected="false">' . $row['academic_year'] . '</button>
        ';
                    }

                    ?>
             </div>

         </div>
     </div>


     <!--Activities-->
     <?php
        foreach ($year as $x) {
            $query3 = "SELECT dept_act_name as act FROM departmental_activities where dept_act_id in(SELECT dc.dept_act_id FROM dept_has_dept_activities as dc INNER JOIN departmental_activities_in_academic_year as dy on dc.dept_act_id=dy.dept_act_id and dc.dept_sect_id=$dept_sect_id and dy.academic_year='$x')";
            $result3 = $conn->query($query3);
            if ($result3->num_rows > 0) {


        ?>
             <section class=" px-2 md:px-[50px] my-4 py-4 grid items-start justify-items-center md:grid-cols-2 gap-4 bg-grey-200 pb-6 max-w-[95dvw] rounded-2xl mb-12 bg-white mx-auto overflow-hidden" id="<?php echo "_" . $x; ?>">
                 <?php
                    while ($row3 = $result3->fetch_assoc()) {
                        echo '
         <div class="flex space-x-4 sm:space-x-4p-4  rounded-lg min-w-full  bg-white border border-gray-200 shadow hover:bg-gray-100 justify-start p-4" data-aos="fade-right" >
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-shrink-0 w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
             </svg>
             <div class="space-y-2">
                 <p class=" text-lg  leading-snug capitalize">' . $row3['act'] . ' Nam erat risus, sodales sit amet lobortis ut, finibus eget metus. Cras aliquam ante ut tortor posuere feugiat. Duis sodales nisi id porta lacinia.
           </p>
             </div>
         </div>
               ';
                    }
                    ?>


             </section>
             <!-- <div class="max-w-full flex flex-col bg-white border border-t-4 border-t-blue-600 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:border-t-blue-500 dark:shadow-neutral-700/70"> -->
     <?php
            } else {
                echo
                "<h1>error!!!!!</h1>";
            }
        }
        ?>


 <?php
    } else {
        echo "<H1> NO ACTIVITY</H1>";
    }
    ?>
 <section class="relative overflow-hidden py-4 px-4 bg-gray-900 md:px-8">
     <div class="w-full h-full rounded-full bg-gradient-to-r from-[#58AEF1] to-pink-500 absolute -top-12 -right-14 blur-2xl opacity-10"></div>
     <div class="max-w-xl mx-auto text-center relative">
         <div class="py-2">
             <h3 class="text-3xl text-gray-200 font-bold md:text-4xl">
                 Departmental Website
             </h3>
         </div>
         <div class="m-5 items-center justify-center gap-3 sm:flex">
             <a href="javascript:void()" class="block w-full mt-2 py-2.5 px-8 text-gray-700 bg-white rounded-md font-medium duration-150 hover:bg-gray-300 hover:text-gray-900 hover:scale-[110%] sm:w-auto">
                 Visit
             </a>
         </div>
     </div>
 </section>

 <!-- select* from other_pdfs where all_pdf_id IN (SELECT sy.other_pdf_id FROM programmes as p INNER join syllabus_belongs_to_programmes_for_class as sy on p.prog_id=sy.prog_id where sy.class_name=''); -->