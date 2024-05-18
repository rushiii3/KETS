   <!-- <div class="relative isolate">
     <div id="mediaContainer" class="relative">
       <video id="myVideo" class="h-screen w-screen object-cover" muted>
         <source id="videoSource" type="video/mp4"> Your browser does not support the video tag.
       </video>
       <img id="fallbackImage" src="../../assests/college.png" alt="Fallback Image" class="absolute top-0 left-0  w-full h-full object-cover">
       <button id="playButton" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded z-2 absolute bottom-0 right-0">
         <svg class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
           <polygon points="5 3 19 12 5 21 5 3" />
         </svg>
       </button>
       <div class="text-center absolute z-1" style="top:35%" data-aos="fade-up">
         <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Welcome to V. G. Vaze College of Arts, Science and Commerce (Autonomous)</h1>
         <p class="mt-6 text-lg leading-8 text-white"> Immerse yourself in the energy of our campus, the spirit of innovation, and the kaleidoscope of experiences that define us. </p>
       </div>
     </div>
   </div> -->

   <!-- component -->
   <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" rel="stylesheet" />
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <style>
     .swiper-pagination {
       bottom: 0;
       position: relative;
     }

     .swiper-container {
       overflow: hidden;
     }

     .swiper-pagination-bullet {
       background-color: rgb(14 211 207);
     }

     .swiper-pagination-bullet-active {
       background-color: rgb(14 211 207);
     }
   </style>
   <div class="bg-no-repeat bg-cover bg-center relative" style="background-image: url(../../assests/college.png);">
     <div class="absolute bg-gradient-to-r from-gray-900 to-gray-900 opacity-75 inset-0 z-0"></div>
     <div>
       <div class="min-h-screen flex justify-center">

         <div class="grid grid-cols-2 gap-4 items-center z-10">
           <div class="max-w-lg text-center sm:text-left">
             <h2 class="text-4xl font-bold text-gray-100 tracking-tight">
               Welcome to V. G. Vaze College of Arts, Science and Commerce (Autonomous) <br class="hidden sm:block lg:hidden">

             </h2>

             <p class="mt-4 text-gray-300">
               Immerse yourself in the energy of our campus, the spirit of innovation, and the kaleidoscope of experiences that define us.
             </p>
             <div class="flex flex-row  items-center space-x-3 mt-5">
               <a href="https://www.behance.net/ajeeshmon" target="_blank" class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg   bg-blue-600 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                 <svg class="w-4 fill-gray-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                   <path d="M8.072 9.301s1.892-.147 1.892-2.459c0-2.315-1.548-3.441-3.51-3.441H0v12.926h6.454s3.941.129 3.941-3.816c-.001-.001.171-3.21-2.323-3.21zM2.844 5.697h3.61s.878 0 .878 1.344c0 1.346-.516 1.541-1.102 1.541H2.844V5.697zm3.427 8.332H2.844v-3.455h3.61s1.308-.018 1.308 1.775c0 1.512-.977 1.669-1.491 1.68zm9.378-7.341c-4.771 0-4.767 4.967-4.767 4.967s-.326 4.941 4.767 4.941c0 0 4.243.254 4.243-3.437H17.71s.072 1.391-1.988 1.391c0 0-2.184.152-2.184-2.25h6.423c.001-.001.709-5.612-4.312-5.612zm1.941 3.886h-4.074s.266-1.992 2.182-1.992 1.892 1.992 1.892 1.992zm.507-6.414H12.98v1.594h5.117V4.16z" />
                 </svg>
               </a>
               <a href="https://codepen.io/uidesignhub" target="_blank" class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg   bg-gray-900 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300">
                 <svg class="h-5 fill-gray-100" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                   <path d="M22 15.047a.846.846 0 0 1-.008.112l-.006.037-.016.072c-.003.015-.008.028-.013.042l-.022.063-.02.042c-.008.02-.018.038-.028.057l-.025.04a.769.769 0 0 1-.108.135l-.035.034a.812.812 0 0 1-.049.04l-.038.03c-.005.003-.01.008-.015.01l-9.14 6.095a.858.858 0 0 1-.954 0l-9.14-6.094-.014-.01a.807.807 0 0 1-.088-.071c-.012-.01-.023-.022-.034-.034-.015-.015-.03-.03-.043-.046a.707.707 0 0 1-.066-.09 1.038 1.038 0 0 1-.054-.096l-.019-.042a.868.868 0 0 1-.022-.063c-.005-.014-.01-.027-.013-.042-.007-.023-.01-.048-.015-.072l-.007-.037A.847.847 0 0 1 2 15.047V8.953c0-.038.003-.075.008-.112l.007-.037c.004-.024.008-.049.015-.072a.774.774 0 0 1 .145-.295.978.978 0 0 1 .029-.038l.043-.046.034-.034a.834.834 0 0 1 .088-.07c.005-.003.009-.008.014-.01l9.14-6.095a.86.86 0 0 1 .954 0l9.14 6.094c.005.003.01.008.015.01l.038.03a.839.839 0 0 1 .05.041l.034.034a.735.735 0 0 1 .108.136l.025.04.029.056.019.042.022.063c.005.014.01.027.013.042.007.023.011.048.016.072l.006.037a.834.834 0 0 1 .008.112v6.094ZM3.719 10.562v2.876L5.869 12l-2.15-1.438Zm7.422-2.088V4.465l-6.734 4.49 3.008 2.011 3.726-2.492Zm8.452.48L12.86 4.465v4.009l3.726 2.492 3.007-2.012ZM4.407 15.046l6.734 4.489v-4.009l-3.726-2.492-3.008 2.012Zm8.453.48v4.009l6.733-4.49-3.007-2.01-3.726 2.491ZM12 9.966 8.96 12 12 14.033 15.04 12 12 9.967Zm8.281 3.472v-2.876L18.131 12l2.15 1.438Z" fill="" fill-rule="evenodd" />
                 </svg>
               </a>
               <a href="https://twitter.com/ajeemon?lang=en" target="_blank" class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-blue-400 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300"><img class="w-3" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDY4MS4zMzQ2NCA2ODEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIwMC45NjQ4NDQgNTE1LjI5Mjk2OWMyNDEuMDUwNzgxIDAgMzcyLjg3MTA5NC0xOTkuNzAzMTI1IDM3Mi44NzEwOTQtMzcyLjg3MTA5NCAwLTUuNjcxODc1LS4xMTcxODgtMTEuMzIwMzEzLS4zNzEwOTQtMTYuOTM3NSAyNS41ODU5MzctMTguNSA0Ny44MjQyMTgtNDEuNTg1OTM3IDY1LjM3MTA5NC02Ny44NjMyODEtMjMuNDgwNDY5IDEwLjQ0MTQwNi00OC43NTM5MDcgMTcuNDYwOTM3LTc1LjI1NzgxMyAyMC42MzY3MTggMjcuMDU0Njg3LTE2LjIzMDQ2OCA0Ny44MjgxMjUtNDEuODk0NTMxIDU3LjYyNS03Mi40ODgyODEtMjUuMzIwMzEzIDE1LjAxMTcxOS01My4zNjMyODEgMjUuOTE3OTY5LTgzLjIxNDg0NCAzMS44MDg1OTQtMjMuOTE0MDYyLTI1LjQ3MjY1Ni01Ny45NjQ4NDMtNDEuNDAyMzQ0LTk1LjY2NDA2Mi00MS40MDIzNDQtNzIuMzY3MTg4IDAtMTMxLjA1ODU5NCA1OC42ODc1LTEzMS4wNTg1OTQgMTMxLjAzMTI1IDAgMTAuMjg5MDYzIDEuMTUyMzQ0IDIwLjI4OTA2MyAzLjM5ODQzNyAyOS44ODI4MTMtMTA4LjkxNzk2OC01LjQ4MDQ2OS0yMDUuNTAzOTA2LTU3LjYyNS0yNzAuMTMyODEyLTEzNi45MjE4NzUtMTEuMjUgMTkuMzYzMjgxLTE3Ljc0MjE4OCA0MS44NjMyODEtMTcuNzQyMTg4IDY1Ljg3MTA5MyAwIDQ1LjQ2MDkzOCAyMy4xMzY3MTkgODUuNjA1NDY5IDU4LjMxNjQwNyAxMDkuMDgyMDMyLTIxLjUtLjY2MDE1Ni00MS42OTUzMTMtNi41NjI1LTU5LjM1MTU2My0xNi4zODY3MTktLjAxOTUzMS41NTA3ODEtLjAxOTUzMSAxLjA4NTkzNy0uMDE5NTMxIDEuNjcxODc1IDAgNjMuNDY4NzUgNDUuMTcxODc1IDExNi40NjA5MzggMTA1LjE0NDUzMSAxMjguNDY4NzUtMTEuMDE1NjI1IDIuOTk2MDk0LTIyLjYwNTQ2OCA0LjYwOTM3NS0zNC41NTg1OTQgNC42MDkzNzUtOC40Mjk2ODcgMC0xNi42NDg0MzctLjgyODEyNS0yNC42MzI4MTItMi4zNjMyODEgMTYuNjgzNTk0IDUyLjA3MDMxMiA2NS4wNjY0MDYgODkuOTYwOTM3IDEyMi40MjU3ODEgOTEuMDIzNDM3LTQ0Ljg1NTQ2OSAzNS4xNTYyNS0xMDEuMzU5Mzc1IDU2LjA5NzY1Ny0xNjIuNzY5NTMxIDU2LjA5NzY1Ny0xMC41NjI1IDAtMjEuMDAzOTA2LS42MDU0NjktMzEuMjYxNzE4OC0xLjgxNjQwNyA1Ny45OTk5OTk4IDM3LjE3NTc4MSAxMjYuODcxMDkzOCA1OC44NzEwOTQgMjAwLjg4NjcxODggNTguODcxMDk0IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg=="></span>
                 <a href="https://in.linkedin.com/in/ajeeshmon" target="_blank" class="w-10 h-10 items-center justify-center inline-flex rounded-2xl font-bold text-lg  text-white bg-blue-500 hover:drop-shadow-lg cursor-pointer transition ease-in duration-300"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDI0IDI0IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj48Zz48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yMy45OTQgMjR2LS4wMDFoLjAwNnYtOC44MDJjMC00LjMwNi0uOTI3LTcuNjIzLTUuOTYxLTcuNjIzLTIuNDIgMC00LjA0NCAxLjMyOC00LjcwNyAyLjU4N2gtLjA3di0yLjE4NWgtNC43NzN2MTYuMDIzaDQuOTd2LTcuOTM0YzAtMi4wODkuMzk2LTQuMTA5IDIuOTgzLTQuMTA5IDIuNTQ5IDAgMi41ODcgMi4zODQgMi41ODcgNC4yNDN2Ny44MDF6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtLjM5NiA3Ljk3N2g0Ljk3NnYxNi4wMjNoLTQuOTc2eiIgZmlsbD0iI2ZmZmZmZiIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIuODgyIDBjLTEuNTkxIDAtMi44ODIgMS4yOTEtMi44ODIgMi44ODJzMS4yOTEgMi45MDkgMi44ODIgMi45MDkgMi44ODItMS4zMTggMi44ODItMi45MDljLS4wMDEtMS41OTEtMS4yOTItMi44ODItMi44ODItMi44ODJ6IiBmaWxsPSIjZmZmZmZmIiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" class="w-3"></a>
             </div>
           </div>

           <div class="mx-0 max-w-xl flex rounded-2xl bg-indigo-700">
             <div class="swiper-container flex-col flex  self-center">
               <div class="swiper-wrapper">
                 <div class="swiper-slide">
                   <blockquote class="text-left ">
                     <div class="relative">
                       <div class="relative">
                         <img src="../../assests/Felicitation-br-the-Honorable-Governor-of-Maharashtra.png" alt="aji" class="object-cover w-full h-60 mx-auto rounded-t-2xl" />
                         <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                       </div>
                     </div>

                     <div class="relative m-5 p-5">
                       <svg class="absolute left-0 w-6  fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                         <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                       </svg>
                       <p class="text-gray-100 text-xl px-5">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                         assumenda officiis sit amet itaque eveniet accusantium corporis
                         tempora.
                       </p>
                       <svg class="absolute right-0  w-6 fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                         <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                       </svg>
                       <div class="text-sm mt-5 mx-5">
                         <p class="font-medium text-white">Ajimon</p>
                         <p class="mt-1 text-gray-300">CEO Of Marketing </p>
                       </div>
                     </div>

                   </blockquote>
                 </div>

                 <div class="swiper-slide">
                   <blockquote class="text-left">
                     <div class="">
                       <div class="relative">
                         <img src="../../assests/15-August-2022.png" alt="aji" class="object-cover w-full mx-auto rounded-t-2xl h-60" />
                         <div class="rounded-t-2xl absolute bg-gradient-to-t from-gray-800 opacity-75 inset-0 z-0"></div>
                       </div>
                     </div>

                     <div class="relative relative m-5 p-5">
                       <svg class="absolute left-0  w-6  fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                         <path d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" />
                       </svg>
                       <p class="text-gray-100 text-xl px-5">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                         assumenda officiis sit amet itaque eveniet accusantium corporis
                         tempora.
                       </p>
                       <svg class="absolute right-0 w-6 fill-indigo-500" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                         <path d="M464 32H336c-26.5 0-48 21.5-48 48v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48zm-288 0H48C21.5 32 0 53.5 0 80v128c0 26.5 21.5 48 48 48h80v64c0 35.3-28.7 64-64 64h-8c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h8c88.4 0 160-71.6 160-160V80c0-26.5-21.5-48-48-48z" />
                       </svg>
                       <div class="text-sm mt-5 mx-5">
                         <p class="font-medium text-white">John Doe</p>
                         <p class="mt-1 text-gray-300">Marketing Manager </p>
                       </div>
                     </div>

                   </blockquote>
                 </div>

                 
               </div>

               <div class="mt-12 swiper-pagination hidden"></div>
             </div>
           </div>
         </div>



       </div>
     </div>
   </div>
   <script crossorigin="anonymous" defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"></script>
   <script>
     document.addEventListener('DOMContentLoaded', function() {
       new Swiper('.swiper-container', {
         loop: true,
         slidesPerView: 1,
         spaceBetween: 8,
         autoplay: {
           delay: 8000,
         },
         pagination: {
           el: '.swiper-pagination',
           clickable: true,
         },
         breakpoints: {
           640: {
             slidesPerView: 1.5,
           },
           1024: {
             slidesPerView: 1,
           },
         },
       })
     })
   </script>





   <div class="full-screen flex justify-center items-center mt-8 " data-aos="zoom-in">
     <div class="text-center">
       <h1 class="font-extrabold text-center text-centre " style="font-size: 3.5rem;">A Societal Mission</h1><br>
       <p class="font-light text-justify" style="font-size: 2.5rem; gap: 2px; width: 88vw;">V.G. Vaze College of
         Arts, Science and Commerce was founded almost 40 years ago on a bedrock of societal purpose. Our mission
         is to contribute to the world by educating students for lives of leadership and contribution with
         integrity; advancing fundamental knowledge and cultivating creativity; leading in pioneering research
         for effective clinical therapies; and accelerating solutions and amplifying their impact.</p>
       <br><br>
       <button style="width: 60%; font: 2rem sans-serif;   height: 3rem; background-color: #007ACC;">More about
         Vaze</button>
     </div>

   </div>
   </div>

   <div class="h-auto my-10 grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-2 gap-8 md:mx-16 p-1 overflow-hidden">
     <!-- <div data-aos="fade-right">
       <image alt="NextUI hero Image with delay" src="http://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" class="rounded-xl p-1 h-96 object-cover object-center" />
       <h1 class="text-violet-600 text-xl font-extrabold  leading-none  md:text-4xl lg:text-2xl dark:text-white text-center mt-1"> Prof. (Dr.) Preeta Nilesh, Principal</h1>

     </div>
     <div data-aos="fade-left">
       <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> From The Principal’s Desk </h1>
       <p class="mt-3"> “Enfold Challenges and Emerge with Opportunities” </p>
       <p class="mt-3"> Prof. (Dr.) Preeta Nilesh, Principal </p>
       <p class="mt-3"> Education drives out ignorance and emboldens us towards studied thought and action. Education empowers and energises. Education is undoubtedly, an effective medium of social transformation. It is education that helps shape careers and contributes to nation building. Vaze College, dedicated to the academic progression of students and health and safety of the community, is the dream come true of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.
       </p>
     </div> -->
     <div class="flex justify-center items-center h-fit w-screen bg-gray-100">
       <!-- Card Container -->
       <div class="flex flex-row space-x-4 p-4 bg-white  shadow-lg rounded-lg">
         <!-- First Card -->
         <div class="w-2/3 text-center" data-aos="fade-right">
           <h2 class="text-lg font-bold mb-4 text-center" style="font-size: 2.5rem;">From the Principal's Desk</h2>
           <p style="font-size: 1.8rem; " class="font-light text-justify">“Enfold Challenges and Emerge with
             Opportunities”<br>

             Prof. (Dr.) Preeta Nilesh, Principal

             Education drives out ignorance and emboldens us towards studied thought and action. Education
             empowers and energises. Education is undoubtedly, an effective medium of social transformation. It
             is education that helps shape careers and contributes to nation building. Vaze College, dedicated to
             the academic progression of students and health and safety of the community, is the dream come true
             of the commitment to education of its founder Chairman, Shri Bhausaheb Kelkar.</p>
           <br> <button style="font-size: 2rem; background-color: #007ACC; width:40%">Read More</button>
         </div>
         <!-- Second Card -->
         <div class="w-1/3" data-aos="fade-left">
           <div class="bg-gray-200 p-4 rounded-lg">
             <img src="http://vazecollege.net/wp-content/uploads/2022/08/Prof-Dr-Preeta-Nilesh-300x200.jpeg" alt="Person" class="w-full rounded-lg mb-4">
             <p class="text-center font-semibold">PRINCIPAL Prof. (Dr.) Preeta Nilesh</p>
           </div>
         </div>
       </div>
     </div>
     <br>
     <div class="h-auto w-screen   my-16 grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-2 gap-8 md:mx-16 p-1 overflow-hidden">
       <div data-aos="fade-right">
         <image alt="NextUI hero Image with delay" src="https://pbs.twimg.com/media/EQA8sr8U4AEKmXL.jpg" class="rounded-xl p-1" />
       </div>
       <div data-aos="fade-left">
         <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Our Achievements</h1>
         <p class="mt-3">
         <ul class="text-left ml-1 font-light" style="font-size: 2rem; list-style-type: ' ★ '; margin-left:10px;">
           <li>First affiliated College in Maharashtra, Accredited by NAAC with ‘A’ Grade in First Cycle.
             Reaccredited with ‘A’ Grade in Second and Third Cycles.</li>
           <li>Junior College Awarded ‘A’ Grade by Maharashtra State Education Board Gradation in 2008.</li>
           <li>Biotech Department was ranked 5th in India by Biospectrum.</li>
           <li>College With Potential For Excellence.</li>
           <li>First Recipient of Best College Award (Urban Area) by University of Mumbai.</li>
           <li>Awarded STAR SCHEME of DBT.</li>
         </ul>
         </p>
       </div>
     </div>
     <!-- <div class="h-auto my-16 grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-2 gap-8 md:mx-16 p-1 overflow-hidden ">
       <div class="order-last md:order-1" data-aos="fade-right">
         <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Elevating Minds, Igniting Passions Within </h1>
         <p> Our academic programs nurture creativity, foster critical thinking, and facilitate real-world application. Our educational platform transforms learners into global leaders. </p>
       </div>
       <div class="md:order-2" data-aos="fade-left">
         <image alt="NextUI hero Image with delay" class="rounded-xl p-1" src="https://vazecollege.net/wp-content/uploads/2016/04/Laboratories-1024x718.jpg" />
       </div> -->
   </div>
   </div>
   <div class="mx-auto  w-fit py-28 sm:py-28 lg:py-28 text-center px-2" data-aos="zoom-in">
     <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Vaze Spotlight </h1>
     <p class="mt-5"> Embark on your academic journey with V. G. Vaze College. Unlock your potential and shape your future. </p>
     <!-- <button class="mt-3 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
       <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0"> Apply Now </span>
     </button> -->
     <div class="flex flex-wrap justify-center">
        <!-- Card 1 -->
        <div class="w-full md:w-1/5 px-4 py-4">
            <div class="flex items-center justify-center">
                <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                    <!-- Circular image of student -->
                    <img src="student_image.jpg" class="rounded-full" alt="Student" />
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-lg font-semibold">5000+</p>
                <p class="text-sm">Students</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="w-full md:w-1/5 px-4 py-4">
            <div class="flex items-center justify-center">
                <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                    <!-- Circular image of room -->
                    <img src="room_image.jpg" class="rounded-full" alt="Room" />
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-lg font-semibold">50+</p>
                <p class="text-sm">Rooms</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="w-full md:w-1/5 px-4 py-4">
            <div class="flex items-center justify-center">
                <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                    <!-- Circular image of book -->
                    <img src="book_image.jpg" class="rounded-full" alt="Book" />
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="text-lg font-semibold">5+</p>
                <p class="text-sm">Libraries</p>
            </div>
        </div>

        <!-- Add more cards as needed -->
    </div>
   </div>
   <!-- <div class=" max-w-2xl py-28 sm:py-28 lg:py-28 text-left px-10">
     <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white" data-aos="fade-down-right"> Campus Life </h1>
     <p class="mt-10" data-aos="fade-down-right"> Experience the Extraordinary. Revel in the vibrant tapestry of cultures, ideas, and experiences at V. G. Vaze College. Dive into an enriching community that nurtures creativity. </p>
     <div class="mt-10 flex justify-between	flex-col md:flex-row">
       <div class="p-2" data-aos="fade-right" data-aos-duration="1000">
         <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> 123 </h1>
         <p class="mt-2"> Unique Experiences </p>
       </div>
       <div class="p-2" data-aos="fade-right" data-aos-duration="2000">
         <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> 456 </h1>
         <p class="mt-2"> Diverse Cultures </p>
       </div>
       <div class="p-2" data-aos="fade-right" data-aos-duration="3000">
         <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> 789 </h1>
         <p class="mt-2"> Champion Creativity </p>
       </div>
     </div>
   </div> -->
   <div class="h-auto  my-16 grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-2 gap-8 md:mx-16 p-1 overflow-hidden">
     <div data-aos="fade-right">
       <image alt="NextUI hero Image with delay" src="https://vazecollege.net/wp-content/uploads/2016/04/2005_0413Image0007-1024x768.jpg" class="rounded-xl p-1" />
     </div>
     <div data-aos="fade-left">
       <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Trailblazing the Future through Research and Innovation </h1>
       <p class="mt-3">
         At V. G. Vaze College, we’re pushing the boundaries of knowledge and challenging the status quo, shaping the future through curiosity and collaboration.
       </p>
     </div>
   </div>
   <div class="h-auto my-16 grid grid-cols-1 items-center justify-center mx-auto md:grid-cols-2 gap-8 md:mx-16 p-1 overflow-hidden ">
     <div class="order-last md:order-1" data-aos="fade-right">
       <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Stay in the Spotlight with Our News and Events</h1>
       <p>
         Keep pace with the latest achievements, breakthroughs, and happenings at V. G. Vaze College. We’re constantly buzzing with academic triumphs, cultural celebrations, and much more.
       </p>
     </div>
     <div class="md:order-2" data-aos="fade-left">
       <image alt="NextUI hero Image with delay" class="rounded-xl p-1" src="https://vazecollege.net/wp-content/uploads/2016/04/Picture5-1024x768.jpg" />
     </div>
   </div>
   </div>
   <div class="mx-auto max-w-2xl py-28 sm:py-28 lg:py-28 text-center px-2" data-aos="zoom-in">
     <h1 class="text-violet-600 text-4xl font-extrabold  leading-none  md:text-4xl lg:text-5xl dark:text-white"> Stay Connected </h1>
     <p class="mt-5"> Whether it’s a question you have or just a casual hello you’d like to drop, feel free to reach out to us anytime. We're here for you. </p>
     <button class="mt-3 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
       <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0"> Get in Touch </span>
     </button>
   </div>




   <script>
     $(document).ready(function() {
       var video = $('#myVideo')[0];
       var videoSource = $('#videoSource');
       var fallbackImage = $('#fallbackImage');
       var playButton = $('#playButton');
       var mediaContainer = $('#mediaContainer');
       playButton.click(function() {
         if (video.paused || video.ended) {
           video.play();
           fallbackImage.hide();
           playButton.html('<svg class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="4" width="4" height="16" /><rect x="14" y="4" width="4" height="16" /></svg>');
         } else {
           video.pause();
           playButton.html('<svg class="h-10 w-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3" /></svg>');
         }
       });
       var videoUrl = "../../assests/1699694317902902.mp4";
       // Check if the browser supports the video tag
       if (video.canPlayType && video.canPlayType('video/mp4').replace(/no/, '')) {
         // Set the video source and load it
         videoSource.attr('src', videoUrl);
         video.load();
         // Show video and hide fallback image
         mediaContainer.addClass('video-mode');
       } else {
         // Hide video and show fallback image
         mediaContainer.removeClass('video-mode');
         fallbackImage.show();
       }
     });
   </script>