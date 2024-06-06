

<!-- drawer init and show -->
<div class="text-center fixed right-0 top-56 ">
   <button id="marqueeStarter" class=" flex flex-col text-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
    <span>
    N
    </span>
    <span>
    o
    </span>
    <span>
    t
    </span>
    <span>
    i
    </span>
    <span>
    c
    </span>
    <span>
    e
    </span>
    <span>
    s
    </span>
   
   <!-- <svg id="Layer_1" class="text-white h-6" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.83"><title>notification-bell</title><path d="M73.81,7.47A43.14,43.14,0,0,1,92.69,19.35a42.33,42.33,0,0,1,10.76,21.36l0,.28c.21,1.21.36,2.36.45,3.44.11,1.26.17,2.53.17,3.8h0V58.36c0,2.81,0,5.67.2,8.54a32.41,32.41,0,0,0,4.34,14.62A36.6,36.6,0,0,0,120,92.83a6.34,6.34,0,0,1,2.65,3.65,6.52,6.52,0,0,1-.08,3.56,6.62,6.62,0,0,1-1.91,3,6.33,6.33,0,0,1-4.25,1.57H82.27l0,.08h0c-4.14,24.2-37.61,24.13-41.65-.08H6.45A6.33,6.33,0,0,1,2,102.92a6.6,6.6,0,0,1-1.81-6.5A6.33,6.33,0,0,1,3,92.71c5.66-3.83,9.62-8,12.12-12.76s3.65-10.44,3.65-17.28V48.23c0-1.16.06-2.42.18-3.77s.29-2.52.51-3.76A42.89,42.89,0,0,1,49.39,7.41C54-2.47,69.2-2.49,73.81,7.47ZM87.71,24A36.34,36.34,0,0,0,70.38,13.57,3.42,3.42,0,0,1,68,11.22c-1.71-5.87-11-6-12.72-.05a3.43,3.43,0,0,1-2.48,2.38A36.1,36.1,0,0,0,26.15,41.9q-.28,1.58-.42,3.15c-.09,1-.13,2-.13,3.18V62.67c0,7.91-1.38,14.56-4.45,20.43-2.94,5.62-7.36,10.39-13.54,14.72H115.27A42.38,42.38,0,0,1,102.8,85,39.18,39.18,0,0,1,97.5,67.4c-.22-2.88-.21-6-.2-9V48.23h0c0-1.1,0-2.17-.13-3.22s-.21-2-.36-2.85l-.06-.27a35.62,35.62,0,0,0-9-17.9Z"/></svg> -->

   </button>
</div>

<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-fit h-screen p-4 overflow-y-auto transition-transform -translate-x-full  bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Notices</h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="py-14 overflow-y-hidden flex flex-col md:flex-row justify-between ">

    <!-- style="background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoyS3VE8JtvmI_9JWmyHpQmh48vOAiWUT3JQ&usqp=CAU'); background-repeat:no-repeat ; background-size: cover;background-position: center; background-color: rgba(0,0,0,.5);" -->
    <div class="w-full h-screen p-3 my-16 md:my-0" >
    <h1 class="text-2xl font-bold tracking-tight sm:text-4xl">Notices</h1>
    <div class="flex w-full  flex-col marquee overflow-y-hidden h-full border mt-5 text-left p-2" id="notices">
                <p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
                    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank" >KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                </p>
                


<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Debate-Competition-Poster.pdf" target="_blank" style="color:#333;">Debate Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Science-Fest-kelkar-clg-28.09-4.pdf" target="_blank" style="color:#333;">Science -Fest (2023-2024)</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/PPT-Competition-Department-of-Commerce.pdf" target="_blank" style="color:#333;">PPT Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/09/program.pdf" target="_blank" style="color:#333;">हिंदी साहित्य परिषद और हिंदी विभाग द्वारा 15 सितंबर, 2023 को 'हिंदी दिवस' का आयोजन किया गया है।</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Student-Excellence-Award-instituted-by-Vimal-Lifesciences.pdf" target="_blank" style="color:#333;">Student Excellence Award Instituted by VIMAL LIFESCIENCES</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Library-Newsletter-Vol-7-Issue-2.pdf" target="_blank" style="color:#333;">Library's Digital Newsletter - 'Library Connect' Vol. 7, Issue No. 2 (July 2023)   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/07/FY-INDUCTION-PROGRAM-2023-24.pdf" target="_blank" style="color:#333;">First Year Orientation Program (Aided &amp; Self Financing)for the Academic Year 2023-2024   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2020/08/Dr.-Kashmira-Sankhe-1st-in-state-of-Maharashtra-25th-all-India-rank-UPSC-2023-150x150.png" target="_blank" style="color:#333;">Dr. Kashmira Sankhe 1st in state of Maharashtra 25th all India rank UPSC 2023 Class XI and XII from Vaze College(Autonomous) being felicitated at the Ruby Jubilee Celebration Launch Event</a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/06/Schedule-for-Interviews-Degree-College-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Interview Schedule for Assistant Professor (CHB basis) for Degree College Academic Year 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://drive.google.com/drive/folders/1YZVg_JAcH_ao9gehHNdDi27xTZeZv0wV?usp=sharing" target="_blank" style="color:#333;">Convocation Photographs April 2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/05/Assistant-Professor-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Vacancy for Assistant Professor(CHB)for Degree College 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/Disclaimer.pdf" rel="noopener noreferrer">DISCLAIMER  </a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
 	<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/ADMISSION DISCLAIMER.pdf" rel="noopener noreferrer">ADMISSION DISCLAIMER</a> 
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/03/International Womens Day Celebration.pdf" target="_blank" style="color:#333;">International Women's Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/The-Kelkar-Education-Trusts-Vinayak-Ganesh-Vaze-College-of-Arts-Science-and-Commerce20230217-.pdf" target="_blank" style="color:#333;">NIRF Report 2022-2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/5945ec76-03a2-49ac-b64b-913d3e90385c.pdf" target="_blank" style="color:#333;">Shri. G.D.Kelkar &amp; Dr.R.A.Kulkarni Memorial Lecture Series (10th Year) 2022-2023  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/01/understand-Bugdet-2023.pdf" target="_blank" style="color:#333;">Understand Budget-2023 Guest Lecture on 9th February, 2023 at 10.30 am   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Hindi-Program.pdf" target="_blank" style="color:#333;">Hindi Diwas Samaroh On 19.09.2022  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Job-oriented-courses.pdf" target="_blank" style="color:#333;">Job Oriented Certificate Course in Travel &amp; Tourism   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Saral-Hindi-Banner-July-20220.pdf" target="_blank" style="color:#333;">Saral Hindi  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Degree-College-Interview-notrice.pdf" target="_blank" style="color:#333;">Interview for Degree College Assistant Professor (CHB) Academic Year 2022-2023 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/VACCINATION-CAMP-NOTICE.pdf" target="_blank" style="color:#333;">Vaccination Camp on Wednesday,20th July 2022   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-11-at-9.28.36-PM.pdf" target="_blank" style="color:#333;">पुस्तक विमोचन समारोह एवं परिचर्चा दिनांक १५/०७/२०२२  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/06/International YOGA Day.jpg" target="_blank" style="color:#333;">International YOGA Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/05/World-Environment-Day.pdf" target="_blank" style="color:#333;">World Environment Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/post-graduate-diploma-in-perfumery-and-cosmetics-management-course/" target="_blank" style="color:#333;">CLICK HERE To know about PGDPCM </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/wp-content/uploads/2021/01/HAPPY_HORMONES_THROUGH-YOGA-570x787-400x400_c.jpeg" target="_blank" style="color:#333;">Online webinar for highlighting importance of YOGA in our life - HAPPY HORMONES THROUGH YOGA by Dr. B. B. Sharma - organized by Gymkhana Committee on 23rd April 2022</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/11/DEGREE-DISTRIBUTION-NOTICE-TO-THE-STUDENTS-OF-2020-21-REGARDING-DATA-COLLECTION.pdf" target="_blank" style="color:#333;">Urgent Notice regarding Convocation (Pass Out Batch 2020-2021) </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/07/Helpline_Number_for_Women.jpg" target="_blank" style="color:#333;">Help Line Number for Women  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/Report-of-the-work-done-for-Minor-research-project.pdf" target="_blank" style="color:#333;">UGC Minor Research Project  Dated 25 Feb 2013 (2013-2015) Entitled Evaluation of Pongamia Pinnata Extracts For its Hypoglycemic and antioxidant effect  on Alloxan induced diabetes in Experimental rats undertaken by Dr. B. B. Sharma.    </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/All-Report-MHRD-National-Institutional-Ranking-Framework-NIRF.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 8.12.2017 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/01/VAZE-COLLEGE-SSR-4th-cycle-January-2017-1.pdf" target="_blank" style="color:#333;">Vaze College SSR for 4th Cycle Accreditation by NAAC uploaded</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2016/11/nirf-report-1.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 2016 </a></li>
</p>


            </div>
    </div>
   

    <div class="w-full h-screen p-3 my-16 md:my-0" >
    <h1 class="text-2xl font-bold tracking-tight sm:text-4xl">Junior College</h1>
    <div class="flex w-full  flex-col marquee overflow-y-hidden h-full border mt-5 text-left p-2" id="juniorcollege">
    <p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
                    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank" >KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                </p>
                


<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Debate-Competition-Poster.pdf" target="_blank" style="color:#333;">Debate Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Science-Fest-kelkar-clg-28.09-4.pdf" target="_blank" style="color:#333;">Science -Fest (2023-2024)</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/PPT-Competition-Department-of-Commerce.pdf" target="_blank" style="color:#333;">PPT Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/09/program.pdf" target="_blank" style="color:#333;">हिंदी साहित्य परिषद और हिंदी विभाग द्वारा 15 सितंबर, 2023 को 'हिंदी दिवस' का आयोजन किया गया है।</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Student-Excellence-Award-instituted-by-Vimal-Lifesciences.pdf" target="_blank" style="color:#333;">Student Excellence Award Instituted by VIMAL LIFESCIENCES</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Library-Newsletter-Vol-7-Issue-2.pdf" target="_blank" style="color:#333;">Library's Digital Newsletter - 'Library Connect' Vol. 7, Issue No. 2 (July 2023)   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/07/FY-INDUCTION-PROGRAM-2023-24.pdf" target="_blank" style="color:#333;">First Year Orientation Program (Aided &amp; Self Financing)for the Academic Year 2023-2024   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2020/08/Dr.-Kashmira-Sankhe-1st-in-state-of-Maharashtra-25th-all-India-rank-UPSC-2023-150x150.png" target="_blank" style="color:#333;">Dr. Kashmira Sankhe 1st in state of Maharashtra 25th all India rank UPSC 2023 Class XI and XII from Vaze College(Autonomous) being felicitated at the Ruby Jubilee Celebration Launch Event</a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/06/Schedule-for-Interviews-Degree-College-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Interview Schedule for Assistant Professor (CHB basis) for Degree College Academic Year 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://drive.google.com/drive/folders/1YZVg_JAcH_ao9gehHNdDi27xTZeZv0wV?usp=sharing" target="_blank" style="color:#333;">Convocation Photographs April 2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/05/Assistant-Professor-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Vacancy for Assistant Professor(CHB)for Degree College 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/Disclaimer.pdf" rel="noopener noreferrer">DISCLAIMER  </a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
 	<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/ADMISSION DISCLAIMER.pdf" rel="noopener noreferrer">ADMISSION DISCLAIMER</a> 
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/03/International Womens Day Celebration.pdf" target="_blank" style="color:#333;">International Women's Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/The-Kelkar-Education-Trusts-Vinayak-Ganesh-Vaze-College-of-Arts-Science-and-Commerce20230217-.pdf" target="_blank" style="color:#333;">NIRF Report 2022-2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/5945ec76-03a2-49ac-b64b-913d3e90385c.pdf" target="_blank" style="color:#333;">Shri. G.D.Kelkar &amp; Dr.R.A.Kulkarni Memorial Lecture Series (10th Year) 2022-2023  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/01/understand-Bugdet-2023.pdf" target="_blank" style="color:#333;">Understand Budget-2023 Guest Lecture on 9th February, 2023 at 10.30 am   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Hindi-Program.pdf" target="_blank" style="color:#333;">Hindi Diwas Samaroh On 19.09.2022  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Job-oriented-courses.pdf" target="_blank" style="color:#333;">Job Oriented Certificate Course in Travel &amp; Tourism   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Saral-Hindi-Banner-July-20220.pdf" target="_blank" style="color:#333;">Saral Hindi  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Degree-College-Interview-notrice.pdf" target="_blank" style="color:#333;">Interview for Degree College Assistant Professor (CHB) Academic Year 2022-2023 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/VACCINATION-CAMP-NOTICE.pdf" target="_blank" style="color:#333;">Vaccination Camp on Wednesday,20th July 2022   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-11-at-9.28.36-PM.pdf" target="_blank" style="color:#333;">पुस्तक विमोचन समारोह एवं परिचर्चा दिनांक १५/०७/२०२२  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/06/International YOGA Day.jpg" target="_blank" style="color:#333;">International YOGA Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/05/World-Environment-Day.pdf" target="_blank" style="color:#333;">World Environment Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/post-graduate-diploma-in-perfumery-and-cosmetics-management-course/" target="_blank" style="color:#333;">CLICK HERE To know about PGDPCM </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/wp-content/uploads/2021/01/HAPPY_HORMONES_THROUGH-YOGA-570x787-400x400_c.jpeg" target="_blank" style="color:#333;">Online webinar for highlighting importance of YOGA in our life - HAPPY HORMONES THROUGH YOGA by Dr. B. B. Sharma - organized by Gymkhana Committee on 23rd April 2022</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/11/DEGREE-DISTRIBUTION-NOTICE-TO-THE-STUDENTS-OF-2020-21-REGARDING-DATA-COLLECTION.pdf" target="_blank" style="color:#333;">Urgent Notice regarding Convocation (Pass Out Batch 2020-2021) </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/07/Helpline_Number_for_Women.jpg" target="_blank" style="color:#333;">Help Line Number for Women  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/Report-of-the-work-done-for-Minor-research-project.pdf" target="_blank" style="color:#333;">UGC Minor Research Project  Dated 25 Feb 2013 (2013-2015) Entitled Evaluation of Pongamia Pinnata Extracts For its Hypoglycemic and antioxidant effect  on Alloxan induced diabetes in Experimental rats undertaken by Dr. B. B. Sharma.    </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/All-Report-MHRD-National-Institutional-Ranking-Framework-NIRF.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 8.12.2017 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/01/VAZE-COLLEGE-SSR-4th-cycle-January-2017-1.pdf" target="_blank" style="color:#333;">Vaze College SSR for 4th Cycle Accreditation by NAAC uploaded</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2016/11/nirf-report-1.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 2016 </a></li>
</p>

            </div>
    </div>

    <div class="w-full h-screen p-3 my-16 md:my-0" >
    <h1 class="text-2xl font-bold tracking-tight sm:text-4xl">Degree College</h1>
    <div class="flex w-full  flex-col marquee overflow-y-hidden h-full border mt-5 text-left p-2" id="degreecollege">
    <p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
                    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" target="_blank" >KET's V.G. Vaze College (Autonomous) was felicitated by the Honorable Governor of Maharashtra for an initiative towards social inclusivity and welfare of the visually challenged through a special program undertaken by the Institution.</a>
                </p>
                


<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Debate-Competition-Poster.pdf" target="_blank" style="color:#333;">Debate Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/Science-Fest-kelkar-clg-28.09-4.pdf" target="_blank" style="color:#333;">Science -Fest (2023-2024)</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/10/PPT-Competition-Department-of-Commerce.pdf" target="_blank" style="color:#333;">PPT Competition from Department of Commerce</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/09/program.pdf" target="_blank" style="color:#333;">हिंदी साहित्य परिषद और हिंदी विभाग द्वारा 15 सितंबर, 2023 को 'हिंदी दिवस' का आयोजन किया गया है।</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Student-Excellence-Award-instituted-by-Vimal-Lifesciences.pdf" target="_blank" style="color:#333;">Student Excellence Award Instituted by VIMAL LIFESCIENCES</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/08/Library-Newsletter-Vol-7-Issue-2.pdf" target="_blank" style="color:#333;">Library's Digital Newsletter - 'Library Connect' Vol. 7, Issue No. 2 (July 2023)   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/07/FY-INDUCTION-PROGRAM-2023-24.pdf" target="_blank" style="color:#333;">First Year Orientation Program (Aided &amp; Self Financing)for the Academic Year 2023-2024   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2020/08/Dr.-Kashmira-Sankhe-1st-in-state-of-Maharashtra-25th-all-India-rank-UPSC-2023-150x150.png" target="_blank" style="color:#333;">Dr. Kashmira Sankhe 1st in state of Maharashtra 25th all India rank UPSC 2023 Class XI and XII from Vaze College(Autonomous) being felicitated at the Ruby Jubilee Celebration Launch Event</a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/06/Schedule-for-Interviews-Degree-College-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Interview Schedule for Assistant Professor (CHB basis) for Degree College Academic Year 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://drive.google.com/drive/folders/1YZVg_JAcH_ao9gehHNdDi27xTZeZv0wV?usp=sharing" target="_blank" style="color:#333;">Convocation Photographs April 2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/05/Assistant-Professor-CHB-2023-2024.pdf" target="_blank" style="color:#333;">Vacancy for Assistant Professor(CHB)for Degree College 2023-2024 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
    <a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/Disclaimer.pdf" rel="noopener noreferrer">DISCLAIMER  </a>
</p>
<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
 	<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/PDFs/ADMISSION DISCLAIMER.pdf" rel="noopener noreferrer">ADMISSION DISCLAIMER</a> 
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/03/International Womens Day Celebration.pdf" target="_blank" style="color:#333;">International Women's Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/The-Kelkar-Education-Trusts-Vinayak-Ganesh-Vaze-College-of-Arts-Science-and-Commerce20230217-.pdf" target="_blank" style="color:#333;">NIRF Report 2022-2023</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/02/5945ec76-03a2-49ac-b64b-913d3e90385c.pdf" target="_blank" style="color:#333;">Shri. G.D.Kelkar &amp; Dr.R.A.Kulkarni Memorial Lecture Series (10th Year) 2022-2023  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2023/01/understand-Bugdet-2023.pdf" target="_blank" style="color:#333;">Understand Budget-2023 Guest Lecture on 9th February, 2023 at 10.30 am   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Hindi-Program.pdf" target="_blank" style="color:#333;">Hindi Diwas Samaroh On 19.09.2022  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/09/Job-oriented-courses.pdf" target="_blank" style="color:#333;">Job Oriented Certificate Course in Travel &amp; Tourism   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Saral-Hindi-Banner-July-20220.pdf" target="_blank" style="color:#333;">Saral Hindi  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/08/Degree-College-Interview-notrice.pdf" target="_blank" style="color:#333;">Interview for Degree College Assistant Professor (CHB) Academic Year 2022-2023 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/VACCINATION-CAMP-NOTICE.pdf" target="_blank" style="color:#333;">Vaccination Camp on Wednesday,20th July 2022   </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/07/WhatsApp-Image-2022-07-11-at-9.28.36-PM.pdf" target="_blank" style="color:#333;">पुस्तक विमोचन समारोह एवं परिचर्चा दिनांक १५/०७/२०२२  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/06/International YOGA Day.jpg" target="_blank" style="color:#333;">International YOGA Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2022/05/World-Environment-Day.pdf" target="_blank" style="color:#333;">World Environment Day </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/post-graduate-diploma-in-perfumery-and-cosmetics-management-course/" target="_blank" style="color:#333;">CLICK HERE To know about PGDPCM </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=https://vazecollege.net/wp-content/uploads/2021/01/HAPPY_HORMONES_THROUGH-YOGA-570x787-400x400_c.jpeg" target="_blank" style="color:#333;">Online webinar for highlighting importance of YOGA in our life - HAPPY HORMONES THROUGH YOGA by Dr. B. B. Sharma - organized by Gymkhana Committee on 23rd April 2022</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/11/DEGREE-DISTRIBUTION-NOTICE-TO-THE-STUDENTS-OF-2020-21-REGARDING-DATA-COLLECTION.pdf" target="_blank" style="color:#333;">Urgent Notice regarding Convocation (Pass Out Batch 2020-2021) </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2021/07/Helpline_Number_for_Women.jpg" target="_blank" style="color:#333;">Help Line Number for Women  </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/Report-of-the-work-done-for-Minor-research-project.pdf" target="_blank" style="color:#333;">UGC Minor Research Project  Dated 25 Feb 2013 (2013-2015) Entitled Evaluation of Pongamia Pinnata Extracts For its Hypoglycemic and antioxidant effect  on Alloxan induced diabetes in Experimental rats undertaken by Dr. B. B. Sharma.    </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/12/All-Report-MHRD-National-Institutional-Ranking-Framework-NIRF.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 8.12.2017 </a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2017/01/VAZE-COLLEGE-SSR-4th-cycle-January-2017-1.pdf" target="_blank" style="color:#333;">Vaze College SSR for 4th Cycle Accreditation by NAAC uploaded</a>
</p>

<p class="text-2xl px-2 my-5 hover:underline hover:text-green-500 cursor-pointer">
<a href="../Pages/Viewer.php?link=http://vazecollege.net/wp-content/uploads/2016/11/nirf-report-1.pdf" target="_blank" style="color:#333;">NATIONAL INSTITUTIONAL RANKING FRAMEWORK (NIRF) 2016 </a></li>
</p>

            </div>
    </div>
    
        </div>






    


   </div>
</div>


<script>


   var $mq =  $('.marquee').marquee({
    //speed in milliseconds of the marquee
    duration: 10000,
    //gap in pixels between the tickers
    gap: 50,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'up',
    //true or false - should the marquee be duplicated to show an effect of continues flow
    duplicated: true,

    pauseOnHover : true,
});
$mq.marquee('pause');
$('#marqueeStarter').click(function(){
    $mq.marquee('resume');
});

</script>