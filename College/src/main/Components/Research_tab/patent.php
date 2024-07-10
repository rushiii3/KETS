 <div>
     <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[25rem] h-[15rem] mx-auto w-full items-center justify-center">
         <img src="../../../assests/college.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
         <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
         <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
         <div class="text-center z-1" data-aos="fade-up">
             <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                 Patents
             </h1>
         </div>

     </div>

 </div>

 

 <script>
     document.getElementById('menu-button').addEventListener('click', function() {
         var navbar = document.getElementById('navbar-cta');
         navbar.classList.toggle('hidden');
     });
 </script>

 <!-- Component: Flat breadcrumb with text & leading icon -->
 <nav aria-label="Breadcrumb" class="pl-3 mt-5 dark:bg-black dark:text-white " id="Breadcrumb" data-aos="fade-right">
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
             <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">Research</a>

         </li>
     </ol>
 </nav>
 <!DOCTYPE html>
<html lang="en" class="antialiased">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Table</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .table-auto {
            width: 100%;
            border-collapse: collapse;
        }

        .table-auto th,
        .table-auto td {
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            text-align: left;
        }

        .table-auto th {
            background-color: #edf2f7;
        }

        @media (max-width: 640px) {
            .table-auto thead {
                display: none;
            }

            .table-auto tbody,
            .table-auto tr,
            .table-auto td {
                display: block;
                width: 100%;
            }

            .table-auto tr {
                margin-bottom: 0.625rem;
            }

            .table-auto td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .table-auto td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 50%;
                padding-left: 0.75rem;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
    <div class="container w-full md:w-4/5 xl:w-3/5 mx-auto px-2">
        
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Name">Tiger Nixon</td>
                        <td data-label="Position">System Architect</td>
                        <td data-label="Office">Edinburgh</td>
                        <td data-label="Age">61</td>
                        <td data-label="Start date">2011/04/25</td>
                        <td data-label="Salary">$320,800</td>
                    </tr>
                    <!-- More rows here -->
                    <tr>
                        <td data-label="Name">Donna Snider</td>
                        <td data-label="Position">Customer Support</td>
                        <td data-label="Office">New York</td>
                        <td data-label="Age">27</td>
                        <td data-label="Start date">2011/01/25</td>
                        <td data-label="Salary">$112,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

 