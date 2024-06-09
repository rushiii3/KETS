<?php
////////////////////////////////////////////////FUNCTIONS///////////////////////////////
//create an alert
function showAlert($alertMessage)
{
    echo "<script> alert('" . $alertMessage . "')</script>";
}

function consoleLogFromPhp($message){
    echo "<script> console.log(".$message.")</script>";
}




?>