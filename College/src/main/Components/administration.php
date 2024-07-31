<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Administration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css" integrity="sha512-xu5MdeiY4wTlIlC4kneewvUN7x7Mdj3zqfcly7Jp6WJk8G94Rr53+QbcRINe4lE9J1b2ipuWmAdF/hZ6NVtDdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">

    <!-- Banner Section -->
    <div class="relative flex flex-col overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">
        <img src="../../assets/college.png" alt="fallback image" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">College
                Administration</h1>
        </div>
    </div>

    <!-- Breadcrumb Navigation -->
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
                <a href="../../Pages/academics_tab/Dept_Index.php" data-aos-duration="1000" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-600 hover:text-emerald-500 hover:scale-105 scale- transition-all ease-linear" data-aos="fade-right">About</a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02">
                        Arrow icon that points to the next page in big screen resolution sizes
                        and previous page in small screen resolution sizes.
                    </desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
                <a href="#" data-aos="fade-right" data-aos-duration="1300" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400 ">Administration</a>
            </li>
        </ol>
    </nav>

    <!-- Administrative Visionaries Section -->
    <div class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 xl:px-32">
            <div class="mb-16 text-center">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-4xl">Administrative Visionaries</h2>
                <p class="text-gray-600 lg:w-8/12 lg:mx-auto">Meet the trailblazing team shaping our college's future, dedicated to fostering a vibrant and supportive community for everyone.</p>
            </div>

            <!-- Grid for Leadership -->
            <div class="grid gap-12 items-center md:grid-cols-3">
                <!-- Principal -->
                <div class="space-y-4 text-center md:order-2">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-48 md:h-64 lg:w-64 lg:h-80" src="https://tailus.io/sources/blocks/classic/preview/images/woman1.jpg" alt="woman" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Prof. (Dr.) Preeta Nilesh</h4>
                        <span class="block text-sm text-gray-500">Principal</span>
                    </div>
                </div>

                <!-- Vice-Principal (Degree College) -->
                <div class="space-y-4 text-center md:order-1">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="https://tailus.io/sources/blocks/classic/preview/images/man.jpg" alt="man" loading="lazy">
                    <div>
                        <h4 class="text-2xl">CA. Anil Naik</h4>
                        <span class="block text-sm text-gray-500">Vice-Principal (Degree College)</span>
                    </div>
                </div>

                <!-- Vice-Principal (Junior College) -->
                <div class="space-y-4 text-center md:order-3">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl md:w-40 md:h-40 lg:w-64 lg:h-64" src="https://tailus.io/sources/blocks/classic/preview/images/woman.jpg" alt="woman" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Ms. Madhuri Nagarkar</h4>
                        <span class="block text-sm text-gray-500">Vice-Principal (Junior College)</span>
                    </div>
                </div>
            </div>
            <!-- Senior Administrative Roles in Grid -->
            <div class="mb-16 text-center mt-10">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-3xl">Senior Administration</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mt-12">
                <!-- Loop through administrative roles -->
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Sangeeta Radhakrishnan</h4>
                        <span class="block text-sm text-gray-500">Supervisor (Junior College)</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Alka Kolhatkar</h4>
                        <span class="block text-sm text-gray-500">Controller of Examination</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Neeta Mehta</h4>
                        <span class="block text-sm text-gray-500">Convener of IQAC, Dean, Quality</span>
                    </div>
                </div>
            </div>
            <!-- Faculty Deans Roles in Grid -->
            <!-- Dean, Humanities Social Sciences: Ms. Vaishali Dhammapathee
            Dean, Science and Nodal Office NEP and ABC: Prof. Dr. Suresh Shendage
            Dean, Commerce: Dr. Adhir V. Ambavane
            Dean, Self Financing Courses: Dr. Deepali Karkhanis
            Dean, HR and Coordinator, RUSA, Autonomy Grants and CSR: Ms. Shirisha Gupte -->
            <div class="mb-16 text-center mt-10">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-3xl">Faculty Deans</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mt-12">
                <!-- Loop through Faculty Deans roles -->
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Sangeeta Radhakrishnan</h4>
                        <span class="block text-sm text-gray-500">Supervisor (Junior College)</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Alka Kolhatkar</h4>
                        <span class="block text-sm text-gray-500">Controller of Examination</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Neeta Mehta</h4>
                        <span class="block text-sm text-gray-500">Convener of IQAC, Dean, Quality</span>
                    </div>
                </div>
            </div>

            <!-- Specialized Committees and Directors in Grid -->
            <!-- Convenor, Steering Committee and Director, PhD Centres: Dr. Dinesh Kumar
            Convenor, Special Cell: Dr. Vinod Ragde
            Director, Research and Development: Dr. Paresh More
            Coordinator, STAR Scheme, UGC and FIST: Dr. Ashok Awale
            Director, Entrepreneurship Cell: Dr. Amit Breed -->
            <div class="mb-16 text-center mt-10">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-3xl">Specialized Committees and Directors</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mt-12">
                <!-- Loop through Specialized Committees and Directors roles -->
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Sangeeta Radhakrishnan</h4>
                        <span class="block text-sm text-gray-500">Supervisor (Junior College)</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Alka Kolhatkar</h4>
                        <span class="block text-sm text-gray-500">Controller of Examination</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Neeta Mehta</h4>
                        <span class="block text-sm text-gray-500">Convener of IQAC, Dean, Quality</span>
                    </div>
                </div>
            </div>

            <!-- Department Heads in Grid -->
            <!-- Head Department of English: Dr. Dinesh Kumar
            Head Department of Economics: Ms. Vaishali Dhammapathee
            Head Department of Hindi: Dr. Archana Dube
            Head Department of History: Prof. (Dr.) Preeta Nilesh
            Head Department of Marathi: Mr. Arvind Jadhav
            Head Department of Psychology: Dr. Neeta Mehta
            Head Department of Sociology: Ms. Deepa Shirsat
            Head Department of Political Science: Ms. Shilpa Suryawanshi
            Head Department of Botany: Prof. (Dr.) Ajit Kengar
            Head Department of Chemistry: Prof. Dr. Suresh Shendage
            Head Department of Mathematics: Mr. Sandip Kamble
            Head Department of Physics: Dr. Suresh Kadam
            Head Department of Zoology: Dr. Vinod R. Ragade
            Head Department of Accountancy: CA Anil Naik
            Head Department of EVS: MS. Shirisha N. Gupte
            Head Department of Business Economics: Mr. Prasannjeet S. Bhave
            Head Department of Business Law: Reena Pillai
            Head Department of Information Technology: Ms. Pournima P Bhangale
            Head Department of Biotechnology: Dr. Deepali Karkhanis
            Head Department of Accounting and Finance: Ms. Seema Pawar
            Head Department of Banking Insurance: Ms. Seema Pawar
            Head Department of Mass Media: Dr. Shyam Choithani
            Head Department of Management Studies: Ms. Seema Pawar
            Convener Vocational Studies In Tourism And Hospitality: Ms. Arpita Joshi -->
            <div class="mb-16 text-center mt-10">
                <h2 class="mb-4 text-center text-2xl text-gray-900 font-bold md:text-3xl">Department Heads</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mt-12">
                <!-- Loop through Department Heads roles -->
                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Sangeeta Radhakrishnan</h4>
                        <span class="block text-sm text-gray-500">Supervisor (Junior College)</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Mrs. Supriya Kamble</h4>
                        <span class="block text-sm text-gray-500">I/C Registrar</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Alka Kolhatkar</h4>
                        <span class="block text-sm text-gray-500">Controller of Examination</span>
                    </div>
                </div>

                <div class="space-y-4 text-center">
                    <img class="w-64 h-64 mx-auto object-cover rounded-xl" src="https://via.placeholder.com/640x480.png" alt="placeholder image" loading="lazy">
                    <div>
                        <h4 class="text-2xl">Dr. Neeta Mehta</h4>
                        <span class="block text-sm text-gray-500">Convener of IQAC, Dean, Quality</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>