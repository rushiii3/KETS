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
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "vaze_college_website_db";

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$con) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "
    <script>
    alert('succesfull!');
    </script>
    ";
}
?>


