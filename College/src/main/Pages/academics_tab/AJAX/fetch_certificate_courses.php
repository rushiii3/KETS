<?php
include("../../../../config/connect.php");
$path_to_credential_file="../../../../config/openssl_encrypt_decrypt_credentials.php";
include("../../../../php/encrypt_query_params.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $search=strtolower(mysqli_real_escape_string($conn,$_GET["search"]??""));
    $certificate_courses_array = [];
    $stmt = "SELECT * FROM programmes WHERE prog_type='gd' AND LOWER(prog_type) LIKE CONCAT('%',?,'%') ";

    $fetch_query = $conn->prepare($stmt);

    $fetch_query->bind_param("s", $search);

    $fetch_query->execute();

    $result = $fetch_query->get_result();

    $returned_json = ["msg" => "", "programmes_array" => []];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            //echo "here";
            //showAlert($row["prog_name"]);
            $temp=[];
            $temp["prog_id"]=encryptId($row["prog_id"],$path_to_credential_file);
            $temp["prog_name"]=$row["prog_name"];
            $temp["prog_duration"]=$row["prog_duration"];
            array_push($certificate_courses_array, $temp);
        }

        $returned_json["msg"] = "success";
        $returned_json["cc_array"] = $certificate_courses_array;
        echo json_encode($returned_json);
    } else {
        //echo "<script> alert('".$conn->error."')</script>";
        //showAlert($conn->error);
        $returned_json["msg"] = "failed. Reason: " . $conn->error;
        $returned_json["cc_arrray"] = [];
        echo json_encode($returned_json);
    }
}
