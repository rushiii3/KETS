<?php
$query = "SELECT DISTINCT academic_year FROM `academic_years` ORDER BY academic_year DESC LIMIT 5";
$result = $con->query($query);

$academic_years = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $academic_years[] = $row['academic_year'];
    }
}
?>
<script>
function fetchNotices(year, button, section) {
    document.querySelectorAll('.academic-year-button').forEach(btn => btn.classList.remove('bg-blue-500'));
    button.classList.add('bg-blue-500');

    fetch(`fetch_notices.php?year=${year}&section=${section}`)
        .then(response => response.json())
        .then(data => {
            const noticesContainer = document.getElementById('notices');
            noticesContainer.innerHTML = '';
            data.forEach(notice => {
                const noticeDiv = document.createElement('div');
                noticeDiv.classList.add('notice', 'bg-white', 'dark:bg-gray-500', 'rounded-lg', 'shadow-sm', 'group', 'hover:shadow-lg', 'hover:translate-y-[-0.25rem]', 'transition-all', 'duration-300', 'mb-2');
                noticeDiv.innerHTML = `<p class="text-base px-2 my-5 cursor-pointer"><a href="../Pages/Viewer.php?link=${notice.link}" target="_blank"><span class="font-semibold">${notice.date} : </span>${notice.content}</a></p>`;
                noticesContainer.appendChild(noticeDiv);
            });
        });
}
</script>

<div class="bg-gray-100 overflow-x-hidden mx-auto dark:bg-black" style="transition: all 2s ease">
    <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center">
        <img src="../../../assests/college.png" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">Notices and Circular</h1>
        </div>
    </div>
    
    <!-- Breadcrumbs -->
    <nav aria-label="Breadcrumb" class="pl-16 mt-10" id="Breadcrumb">
        <ol class="flex items-stretch gap-2 list-none">
            <li class="flex items-center gap-2">
                <a href="#" class="flex max-w-[20ch] items-center gap-1 truncate whitespace-nowrap text-slate-700 transition-colors hover:text-emerald-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-01 description-01" role="link">
                        <title id="title-01">Home</title>
                        <desc id="description-01">Home button indicating the homepage of the website.</desc>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="hidden md:block">Home</span>
                </a>
                <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-4 h-4 transition-transform stroke-slate-700 md:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" aria-hidden="true" aria-labelledby="title-02 description-02" role="graphics-symbol">
                    <title id="title-02">Arrow</title>
                    <desc id="description-02">Arrow icon that points to the next page in big screen resolution sizes and previous page in small screen resolution sizes.</desc>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </li>
            <li class="flex items-center flex-1 gap-2">
                <a href="#" aria-current="page" class="pointer-events-none max-w-[20ch] truncate whitespace-nowrap text-slate-400">Notice and Circular</a>
            </li>
        </ol>
    </nav>
    
    <section class="py-12">
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="">
                <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400" id="tabs-example" role="tablist">
                    <li class="me-2" role="presentation">
                        <a href="#" class="inline-block p-4 text-white bg-blue-700 rounded-lg dark:bg-gray-800 dark:text-blue-500" id="profile-tab-example" type="button" role="tab" aria-controls="profile-example" aria-selected="false">Academic Notices</a>
                    </li>
                    <li class="me-2" role="presentation">
                        <a href="#" id="dashboard-tab-example" type="button" role="tab" aria-controls="dashboard-example" aria-selected="false" class="inline-block p-4 rounded-lg">PRN</a>
                    </li>
                </ul>
                <div id="tabContentExample" class="w-full">
                    <div class="mt-10 bg-gray-100 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                        <div>
                            <div class="mb-12 space-y-2 text-center">
                                <h2 class="text-4xl font-bold text-gray-800 md:text-5xl dark:text-white">Academic Notices</h2>
                                <p class="lg:mx-auto lg:w-6/12 text-gray-600 dark:text-gray-300">Stay informed with the latest updates by exploring our notices and circulars. Keep yourself updated and never miss out on important information.</p>
                            </div>
                            
                            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Junior College</button>
                                    </li>
                                    <li class="me-2" role="presentation">
                                        <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Degree College</button>
                                    </li>
                                </ul>
                            </div>
                            
                            <div id="default-tab-content">
                                <div class="p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="flex flex-col w-full items-center justify-center">
                                        <?php foreach ($academic_years as $year): ?>
                                            <button onclick="fetchNotices('<?php echo $year; ?>', this, 'junior')" class="academic-year-button bg-blue-500 text-white py-2 px-4 rounded-lg mb-2"><?php echo $year; ?></button>
                                        <?php endforeach; ?>
                                        <div id="notices" class="w-full"></div>
                                    </div>
                                </div>
                                
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                    <div class="flex flex-col w-full items-center justify-center">
                                        <?php foreach ($academic_years as $year): ?>
                                            <button onclick="fetchNotices('<?php echo $year; ?>', this, 'degree')" class="academic-year-button bg-blue-500 text-white py-2 px-4 rounded-lg mb-2"><?php echo $year; ?></button>
                                        <?php endforeach; ?>
                                        <div id="notices" class="w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden p-4 rounded-lg md:p-8" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                        <p class="text-sm text-gray-500 dark:text-gray-400">PRN Content Here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
