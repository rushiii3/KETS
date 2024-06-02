<?php
/*
define("DB_HOST","localhost");
define("DB_PASSWORD","");
define("DB_USERNAME","root");
define("DB_NAME","");

$con = mysqli_connect(DB_HOST,DB_USERNAME, DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno()){
    echo("not connected");
}else{
   
}
*/

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "vaze_clg";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    // echo "
    // <script>
    // alert('succesfull!');
    // </script>
    // ";
}
?>



<div>
    <div class="relative isolate flex flex-col overflow-hidden py-2 md:h-[20rem] h-[15rem] mx-auto w-full items-center justify-center">
        <img src="../../../assests/department.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover" />
        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-800 via-gray-900/10"></div>
        <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-white/10"></div>
        <div class="text-center z-1" data-aos="fade-up">
            <h1 class="md:text-7xl text-5xl font-bold tracking-tight text-white sm:text-6xl text-center px-[20px]">
                <?php
                if (isset($_GET['d_id']) || !empty($_GET['d_id'])) {
                    $encoded_id = $_GET['d_id'];
                    $d_id = base64_decode($encoded_id);
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
<nav aria-label="Breadcrumb" class="pl-3 mt-10" id="Breadcrumb">
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



<section class="py-12 border-b">
    <div class="xl:container mb-28 m-auto px-6 text-gray-600 md:px-12 xl:px-6">
        <div class="mb-12 space-y-2 text-center">
            <h2 class="text-4xl font-bold text-gray-800 md:text-5xl ">
                Faculty
            </h2>
            <p class="lg:mx-auto lg:w-6/12 text-gray-600 ">
                Our Guiding Force
            </p>
        </div>
    </div>
    <div class="grid gap-2 md:grid-cols-3  mx-auto p-3">
        <?php
        error_reporting(0);
        $query = "SELECT count(*) as count FROM `college_personnel` WHERE cp_dept_id='$d_id'";
        $result = $conn->query($query);
        // Check if the query was successful
        if ($result) {
            // Fetch the result as an associative array
            $row = $result->fetch_assoc();
            // Get the count value
            $count = $row['count'];
            // echo"
            // <script>
            // alert('$count');
            // </script>
            // ";
        } else {
            // Handle query failure
            echo "Error executing query: " . $conn->error;
        }

        $query2 = "SELECT * FROM `college_personnel` WHERE cp_dept_id='$d_id'";
        $result2 = $conn->query($query2);
        if ($result2->num_rows) {
            while ($row2 = $result2->fetch_assoc()) {
                $cp_name = $row2['cp_name'];
                $cp_id = $row2['cp_id'];
                $cp_web = $row2['cp_personal_website_link'];
                $cp_img = $row2['cp_image_path'];
                $cp_hon = $row2['cp_honourific'];

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
                   <div class="group space-y-4 pb-9 text-center border-y-4 border-x-4">
                   <div class="mx-auto h-56 w-56 rotate-45 overflow-hidden rounded-[4rem] md:h-40 md:w-40 lg:h-56 lg:w-56">
                   <img class="mx-auto h-full w-full -rotate-45 scale-125 object-cover transition duration-300 group-hover:scale-[1.4]" src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8YXZhdGFyfGVufDB8fDB8fHww" alt="woman" loading="lazy" width="640" height="805" />
                   </div>
                   <div class="pt-4">
                   <h4 class="text-2xl text-gray-700">' . $cp_hon . ' ' . $cp_name . '</h4>
                   ';
                if ($cp_desig == 'Head') {
                    echo '<span class="block text-xl text-gray-700 font-bold">' . $cp_desig . '</span>';
                    echo '<span class="block text-base text-purple-700 hover:underline p-1 font-medium"><a href="#">know more</a></span>
                         </div>
                         </div>';
                } else {
                    echo '<span class="block text-sm text-gray-500">' . $cp_desig . '</span>';
                    echo '<span class="block text-base text-purple-700 hover:underline p-2 font-medium""><a href="#">know more</a></span>
                           </div>
                         </div>';
                }
            }
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

    </div>
</section>
<button class="bg-gray-50 text-nowrap px-5 py-3 text-sm shadow-sm font-bold tracking-wider  text-gray-600 rounded-full hover:shadow-2xl hover:bg-gray-100 bg  bg border-2" data-tabs-target="#_2023-2024" type="button" role="tab" aria-controls="dashboard" aria-selected="false">2023-2024</button>