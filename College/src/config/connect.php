<?php

define("DB_HOST", "127.0.0.1:3307");
define("DB_PASSWORD","");
define("DB_USERNAME","root");
define("DB_NAME","vaze_college_website_db");

$conn = new mysqli(DB_HOST,DB_USERNAME, DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno()){
    //echo("not connected");
}else{
   
}

