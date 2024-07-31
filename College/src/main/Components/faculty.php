<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="relative isolate flex flex-col  overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center"> <img src="../../assests/college.png" alt="fallback image" class="absolute inset-0 -z-10 h-full w-full object-cover" />
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
    <div class="text-center z-1" data-aos="fade-up">
        <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">Faculty Members</h1>
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
            <a href="../../Pages/academics_tab/Dept_Index.php" data-aos-duration="1000" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-600 hover:text-emerald-500 hover:scale-105 scale- transition-all ease-linear" data-aos="fade-right">About</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                <title id="title-02">Arrow</title>
                <desc id="description-02">
                    Arrow icon that points to the next page in big screen resolution sizes
                    and previous page in small screen resolution sizes.
                </desc>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <a href="#" data-aos="fade-right" data-aos-duration="1300" aria-current=" page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400 ">Faculty</a>

        </li>
    </ol>
</nav>

<div class="bg-gray-100">


</div>

<!-- Container for demo purpose -->
<section class="bg-white dark:bg-white">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-black">Our Educators</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Connect with our distinguished faculty, dedicated to pioneering quality education and groundbreaking research.</p>
        </div>
        <div class="container mx-auto py-8">

            <div class="grid lg:grid-cols-8 grid-cols-3 mb-8">
                <input type="text" id="searchName" placeholder="Search by Name" class="p-2 border border-gray-300 rounded-md   m-2 bg-white text-black px-2 w-full max-w-[700px] pl-4 col-span-3 lg:col-span-5">
                <!-- Filter -->

                <select id="filterCollege" class="p-2 border-0 m-2 text-center">
                    <option value="">College</option>
                    <!-- Add options dynamically from backend or static  
                -->
                    <option value="d">degree college</option>
                    <option value="s">self-financing courses</option>
                    <option value="j">junior college</option>
                    <option value="m">management</option>
                    <option value="nt">non-teaching </option>
                </select>
                <select id="filterDepartment" class="p-2 border-0 m-2 text-center ">
                    <option value=""> Department</option>
                    <!-- Add options dynamically from backend or static -->
                </select>
                <select id="filterCourse" class="p-2 border-0 m-2 text-center ">
                    <option value=""> Course</option>
                    <!-- Add options dynamically from backend or static -->
                </select>
            </div>
            <div id="facultyList" class="container my-24 mx-auto md:px-6">

                <div id="loading_spinner" class=" items-center justify-center mb-24  hidden">
                    <div class="relative">
                        <div class="h-24 w-24 rounded-full border-t-8 border-b-8 border-gray-200"></div>
                        <div class="absolute top-0 left-0 h-24 w-24 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin">
                        </div>
                    </div>
                </div>
                <!-- Faculty members will be displayed here -->

                <!-- Section: Design Block -->
                <section class="mb-32 text-center ">

                    <div class="grid gap-6 grid-cols-1 lg:grid-cols-4 md:grid-cols-2 xl:gap-x-12">
                        <div class="mb-6 lg:mb-0">
                            <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div class="flex-row items-center ">
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.jpg" alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <h5 class="mb-2 text-lg font-bold">Darren Randolph</h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Marketing expert</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6 lg:mb-0">
                            <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div class="flex-row items-center ">
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/4.jpg" alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <h5 class="mb-2 text-lg font-bold">Maliha Welch</h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Web designer</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6 lg:mb-0">
                            <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div class="flex-row items-center ">
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/12.jpg" alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <h5 class="mb-2 text-lg font-bold">Avaya Hills</h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Copywriter</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6 lg:mb-0">
                            <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                <div class="flex-row items-center ">
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.jpg" alt="Trendy Pants and Shoes" class="mb-6 w-full rounded-md lg:mb-0" />
                                    </div>
                                    <div class="w-full shrink-0 grow-0 basis-auto ">
                                        <h5 class="mb-2 text-lg font-bold">Darren Randolph</h5>
                                        <p class="mb-4 text-neutral-500 dark:text-neutral-300">Marketing expert</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Design Block -->
            </div>



        </div>

    </div>
</section>

<script>
    $(document).ready(function() {
        function fetchFaculty() {
            const searchName = $('#searchName').val();
            const filterCollege = $('#filterCollege').val();
            const filterDepartment = $('#filterDepartment').val();
            const filterCourse = $('#filterCourse').val();

            $.ajax({
                type: "POST",
                url: "../Components/fetch_faculty.php",
                data: {
                    name: searchName,
                    college: filterCollege,
                    department: filterDepartment,
                    course: filterCourse
                },
                beforeSend: function() {
                    $("#loading_spinner").show();
                },
                success: function(result) {
                    $("#loading_spinner").hide();

                    // Debugging logs
                    console.log("Raw result: ", result);

                    // Ensure result is parsed as JSON
                    let facultyList = [];
                    try {
                        facultyList = typeof result === 'string' ? JSON.parse(result) : result;
                    } catch (e) {
                        console.error("Error parsing JSON: ", e);
                        return;
                    }

                    console.log("Parsed faculty list: ", facultyList);

                    if (!Array.isArray(facultyList)) {
                        console.error("Expected an array but got:", facultyList);
                        return;
                    }

                    const facultyContainer = $("#facultyList");
                    facultyContainer.empty();

                    facultyList.forEach(faculty => {
                        const facultyDiv = `
                            <div class="mb-6 lg:mb-0">
                                <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex-row items-center ">
                                        <div class="w-full shrink-0 grow-0 basis-auto">
                                            <img src="${faculty.image}" alt="${faculty.name}" class="mb-6 w-full rounded-md lg:mb-0" />
                                        </div>
                                        <div class="w-full shrink-0 grow-0 basis-auto">
                                            <h5 class="mb-2 text-lg font-bold">${faculty.name}</h5>
                                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">${faculty.position}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        facultyContainer.append(facultyDiv);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);
                    $("#loading_spinner").hide();
                }
            });
        }

        $("#searchName").on("keyup", fetchFaculty);
        $("#filterCollege, #filterDepartment, #filterCourse").on("change", fetchFaculty);
    });
</script>
<script>
    $(document).ready(function() {
        function fetchFaculty() {
            const searchName = $('#searchName').val();
            const filterCollege = $('#filterCollege').val();
            const filterDepartment = $('#filterDepartment').val();
            const filterCourse = $('#filterCourse').val();

            $.ajax({
                type: "POST",
                url: "../Components/fetch_faculty.php",
                data: {
                    name: searchName,
                    college: filterCollege,
                    department: filterDepartment,
                    course: filterCourse
                },
                beforeSend: function() {
                    $("#loading_spinner").show();
                },
                success: function(result) {
                    $("#loading_spinner").hide();

                    // Debugging logs
                    console.log("Raw result: ", result);

                    // Ensure result is parsed as JSON
                    let facultyList = [];
                    try {
                        facultyList = typeof result === 'string' ? JSON.parse(result) : result;
                    } catch (e) {
                        console.error("Error parsing JSON: ", e);
                        return;
                    }

                    console.log("Parsed faculty list: ", facultyList);

                    if (!Array.isArray(facultyList)) {
                        console.error("Expected an array but got:", facultyList);
                        return;
                    }

                    const facultyContainer = $("#facultyList");
                    facultyContainer.empty();

                    facultyList.forEach(faculty => {
                        const facultyDiv = `
                            <div class="mb-6 lg:mb-0">
                                <div class="relative block rounded-lg p-6 bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                                    <div class="flex-row items-center ">
                                        <div class="w-full shrink-0 grow-0 basis-auto">
                                            <img src="${faculty.image}" alt="${faculty.name}" class="mb-6 w-full rounded-md lg:mb-0" />
                                        </div>
                                        <div class="w-full shrink-0 grow-0 basis-auto">
                                            <h5 class="mb-2 text-lg font-bold">${faculty.name}</h5>
                                            <p class="mb-4 text-neutral-500 dark:text-neutral-300">${faculty.position}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        facultyContainer.append(facultyDiv);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);
                    $("#loading_spinner").hide();
                }
            });
        }

        $("#searchName").on("keyup", fetchFaculty);
        $("#filterCollege, #filterDepartment, #filterCourse").on("change", fetchFaculty);
    });
</script>