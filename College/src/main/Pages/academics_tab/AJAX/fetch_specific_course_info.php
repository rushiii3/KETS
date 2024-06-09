<?php
//include("../../../../config/connect.php");
include("../../../php/encrypt_query_params.php");
$path_to_encrytion_credentail_file = "../../../config/openssl_encrypt_decrypt_credentials.php";
$data = [];

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET["id"] ?? "";
    assert($id != "");
    $id = decryptId($id, $path_to_encrytion_credentail_file);
    //echo $id;
    $stmt = "SELECT * FROM programmes JOIN dept_belongs_to_clg_section ON prog_dept_id= dept_belongs_to_clg_section.dept_sect_id JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id WHERE prog_id=?";


    $fetch_query = $conn->prepare($stmt);
    $fetch_query->bind_param("s", $id);
    $fetch_query->execute();
    $result = $fetch_query->get_result();


    //$returned_json = ["msg" => "", "data" => []];
    if ($result) {
        //$temp=[];
        while ($row = $result->fetch_assoc()) {
            //array_push($data,$row);
            $data = $row;
            break;
        }

        // $returned_json["msg"]="success";
        //$returned_json["data"]=$temp;
        //echo json_encode($returned_json);
        //print_r( $data);

    } else {
        // $returned_json["msg"]="Error".$conn->error;
        //echo json_encode($returned_json);
        echo "<script>console.log(" . $conn->error . "</script>";
    }
}
