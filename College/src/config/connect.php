<?php
define("DB_HOST","localhost");
define("DB_PASSWORD","");
define("DB_USERNAME","root");
define("DB_NAME","");

$con = mysqli_connect(DB_HOST,DB_USERNAME, DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno()){
    echo("not connected");
}else{
   
}














