<div class="relative isolate flex flex-col  overflow-hidden py-2 md:h-[30rem] h-[25rem] mx-auto w-full items-center justify-center"> <img src="../../assests/college.png" alt="fallback image" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">Faculty</h1>
        </div>

    </div>

    <body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold text-center mb-8">Faculty Members</h1>
        <div class="flex justify-between mb-8">
            <input type="text" id="searchName" placeholder="Search by Name" class="p-2 border border-gray-300 rounded-md w-1/4">
            <select id="filterCollege" class="p-2 border border-gray-300 rounded-md w-1/4">
                <option value="">Filter by College</option>
                <!-- Add options dynamically from backend or static -->
            </select>
            <select id="filterDepartment" class="p-2 border border-gray-300 rounded-md w-1/4">
                <option value="">Filter by Department</option>
                <!-- Add options dynamically from backend or static -->
            </select>
            <select id="filterCourse" class="p-2 border border-gray-300 rounded-md w-1/4">
                <option value="">Filter by Course</option>
                <!-- Add options dynamically from backend or static -->
            </select>
        </div>
        <div id="facultyList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Faculty members will be displayed here -->
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const searchName = document.getElementById('searchName');
    const filterCollege = document.getElementById('filterCollege');
    const filterDepartment = document.getElementById('filterDepartment');
    const filterCourse = document.getElementById('filterCourse');
    const facultyList = document.getElementById('facultyList');

    const fetchFaculty = () => {
        const name = searchName.value;
        const college = filterCollege.value;
        const department = filterDepartment.value;
        const course = filterCourse.value;

        const xhr = new XMLHttpRequest();
        xhr.open('GET', `fetch_faculty.php?name=${name}&college=${college}&department=${department}&course=${course}`, true);
        xhr.onload = function() {
            if (this.status === 200) {
                const faculty = JSON.parse(this.responseText);
                displayFaculty(faculty);
            }
        };
        xhr.send();
    };

    const displayFaculty = (faculty) => {
        facultyList.innerHTML = '';
        faculty.forEach(member => {
            const div = document.createElement('div');
            div.className = 'bg-white p-6 rounded-lg shadow-md';
            div.innerHTML = `
                <h2 class="text-xl font-bold mb-2">${member.name}</h2>
                <p class="text-gray-700">College: ${member.college}</p>
                <p class="text-gray-700">Department: ${member.department}</p>
                <p class="text-gray-700">Course: ${member.course}</p>
            `;
            facultyList.appendChild(div);
        });
    };

    searchName.addEventListener('input', fetchFaculty);
    filterCollege.addEventListener('change', fetchFaculty);
    filterDepartment.addEventListener('change', fetchFaculty);
    filterCourse.addEventListener('change', fetchFaculty);

    // Fetch initial faculty list
    fetchFaculty();
});

    </script>
</body>