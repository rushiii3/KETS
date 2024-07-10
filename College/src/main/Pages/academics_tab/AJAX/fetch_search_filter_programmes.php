<?php
include("../../../../config/connect.php");
$path_to_credential_file = "../../../../config/openssl_encrypt_decrypt_credentials.php";
include("../../../../php/encrypt_query_params.php");
$programmes_array = [];


if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $limit = $_GET["limit"] ?? 50;
    $offset = $_GET["offset"] ?? 0;
    $search_query = mysqli_real_escape_string($conn, $_GET["search"] ?? "");
    $level = mysqli_real_escape_string($conn, $_GET["level"] ?? "");
    $section = mysqli_real_escape_string($conn, $_GET["section"] ?? "");
    $faculty = mysqli_real_escape_string($conn, $_GET["faculty"] ?? "");
    //$show_certificate_courses=mysqli_real_escape_string($conn,$_GET["cc"]??0);

    $bind_param_param_types_string = "s";
    $bind_param_params_array = [$search_query];
    $level_part_of_query = "";
    $section_part_of_query = "";
    $faculty_part_of_query = "";
    if (strlen($level) > 0) {
        $level_array = explode(",", $level);
        //print_r($level_array);
        $question_mark_array = array_fill(0, count($level_array), '?');

        $placeholders = implode(",", $question_mark_array);
        $level_part_of_query = " AND programmes.prog_type IN ($placeholders)";
        $string_1 = str_repeat("s", count($level_array));
        $bind_param_param_types_string .= $string_1;
        array_push($bind_param_params_array, ...$level_array);
    }

    if (strlen($section) > 0) {
        $section_array = explode(",", $section);
        //print_r($level_array);
        $question_mark_array = array_fill(0, count($section_array), '?');

        $placeholders = implode(",", $question_mark_array);
        $section_part_of_query = " AND dept_belongs_to_clg_section.college_sec_name IN ($placeholders)";
        $string_1 = str_repeat("s", count($section_array));
        $bind_param_param_types_string .= $string_1;
        array_push($bind_param_params_array, ...$section_array);
    }

    if (strlen($faculty) > 0) {
        $faculty_array = explode(",", $faculty);
        //print_r($level_array);
        $question_mark_array = array_fill(0, count($faculty_array), '?');

        $placeholders = implode(",", $question_mark_array);
        $faculty_part_of_query = " AND programmes.faculty_sec_name IN ($placeholders)";
        $string_1 = str_repeat("s", count($faculty_array));
        $bind_param_param_types_string .= $string_1;
        array_push($bind_param_params_array, ...$faculty_array);
    }



    array_push($bind_param_params_array, $limit, $offset);
    $bind_param_param_types_string .= "ii";



    //assert($limit!=null && $offset!=null);

    $stmt = "SELECT * FROM `programmes`, dept_belongs_to_clg_section WHERE dept_belongs_to_clg_section.dept_sect_id=programmes.prog_dept_sec_id AND LOWER(programmes.prog_name) LIKE CONCAT('%',?,'%') " . $level_part_of_query ?? "";

    $stmt .= $section_part_of_query ?? "";
    $stmt .= $faculty_part_of_query ?? "";
    $stmt .= " ORDER BY programmes.prog_name ASC LIMIT ? OFFSET ? ";
    //echo $stmt;
    //echo $bind_param_param_types_string;
    //print_r($bind_param_params_array);
    $fetch_query = $conn->prepare($stmt);

    $fetch_query->bind_param($bind_param_param_types_string, ...$bind_param_params_array);


    $fetch_query->execute();

    $result = $fetch_query->get_result();

    $returned_json = ["msg" => "", "programmes_array" => []];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            //echo "here";
            //showAlert($row["prog_name"]);
            $temp = [];
            $temp["prog_id"] = encryptId($row["prog_id"], $path_to_credential_file);
            $temp["prog_name"] = $row["prog_name"];
            $temp["prog_duration"] = $row["prog_duration"];
            $temp["prog_type"] = $row["prog_type"];
            $temp["college_sec_name"] = $row["college_sec_name"];
            $temp["prog_bg_image_link"] = $row["prog_bg_image_link"];
            array_push($programmes_array, $temp);
        }

        $returned_json["msg"] = "success";
        $returned_json["programmes_array"] = $programmes_array;
        echo json_encode($returned_json);
    } else {
        //echo "<script> alert('".$conn->error."')</script>";
        //showAlert($conn->error);
        $returned_json["msg"] = "failed. Reason: " . $conn->error;
        $returned_json["programmes_array"] = [];
        echo json_encode($returned_json);
    }
}
