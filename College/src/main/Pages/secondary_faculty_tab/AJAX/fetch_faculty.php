<?php
include("../../../../config/connect.php");
include("../../../../php/encrypt_query_params.php");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search_query = strtolower(mysqli_real_escape_string($conn, $_GET["search"] ?? ""));
    $sort_letter = strtolower(mysqli_real_escape_string($conn, $_GET["sort"] ?? ""));
    $dept_filter = strtolower(mysqli_real_escape_string($conn, $_GET["dept"] ?? ""));
    $faculty_filter = strtolower(mysqli_real_escape_string($conn, $_GET["faculty"] ?? ""));
    $designation_filter = strtolower(mysqli_real_escape_string($conn, $_GET["designation"] ?? ""));
    $college_section_filter = strtolower(mysqli_real_escape_string($conn, $_GET["college_sec"] ?? ""));

    //print_r(strlen($search_query));

    assert(strlen($sort_letter) < 2);

    $bind_param_type_string = "s";
    $bind_param_array = [$search_query];

    $sort_part_of_query = "";
    $designation_part_of_query = "";
    $faculty_part_of_query = "";
    $dept_part_of_query = "";
    $college_section_part_of_query = "";
    $dont_consider_sort_params = false;
    $sort_part_of_count_query_of_previous_letter = "";
    $count_of_previous_letter_bind_param_type_string = "s";
    $count_of_previous_letter_bind_param_array = [$search_query];

    if (strlen($sort_letter) > 0) {
        $bind_param_type_string .= "s";
        array_push($bind_param_array, $sort_letter);
        $sort_part_of_query = "AND LOWER(college_personnel.cp_name) LIKE CONCAT(?,'%')";
        $dont_consider_sort_params = true;

        $current_letter_ascii = ord(strtoupper(trim($sort_letter)));
        $starting_part_of_sort_query = "AND (";
        for ($ascii = 65; $ascii < $current_letter_ascii; $ascii++) {


            $count_of_previous_letter_bind_param_type_string .= "s";
            array_push($count_of_previous_letter_bind_param_array, strtolower(chr($ascii)));
            $sort_part_of_count_query_of_previous_letter .= " $starting_part_of_sort_query LOWER(college_personnel.cp_name) LIKE CONCAT(?,'%') ";

            $starting_part_of_sort_query = " OR";
        }

        if (65 < $current_letter_ascii) {
            $sort_part_of_count_query_of_previous_letter .= ") ";
        }
    }


    if (strlen($dept_filter) > 0) {
        $dept_filter_array = explode(",", $dept_filter);
        $bind_param_type_string .= str_repeat("s", count($dept_filter_array));
        array_push($bind_param_array, ...$dept_filter_array);

        $count_of_previous_letter_bind_param_type_string .= str_repeat("s", count($dept_filter_array));
        array_push($count_of_previous_letter_bind_param_array, ...$dept_filter_array);

        $question_mark_array = array_fill(0, count($dept_filter_array), "?");
        $placeholders = implode(",", $question_mark_array);
        $dept_part_of_query = " AND departments.dept_name IN ($placeholders)";
    }

    if (strlen($faculty_filter) > 0) {
        $faculty_filter_array = explode(",", $faculty_filter);
        $bind_param_type_string .= str_repeat("s", count($faculty_filter_array));
        array_push($bind_param_array, ...$faculty_filter_array);

        $count_of_previous_letter_bind_param_type_string .= str_repeat("s", count($faculty_filter_array));
        array_push($count_of_previous_letter_bind_param_array, ...$faculty_filter_array);

        $question_mark_array = array_fill(0, count($faculty_filter_array), "?");
        $placeholders = implode(",", $question_mark_array);
        $faculty_part_of_query = " AND dept_belongs_to_clg_section.dept_faculty_name IN ($placeholders)";
    }
    //print_r($designation_filter);

    if (strlen($designation_filter) > 0) {
        $designation_filter_array = explode(",", $designation_filter);

        $bind_param_type_string .= str_repeat("s", count($designation_filter_array));
        array_push($bind_param_array, ...$designation_filter_array);

        $count_of_previous_letter_bind_param_type_string .= str_repeat("s", count($designation_filter_array));
        array_push($count_of_previous_letter_bind_param_array, ...$designation_filter_array);

        // $bind_param_type_string.="s";
        // array_push($bind_param_array,$designation_filter);

        //$question_mark_array=array(0,count($designation_filter_array),"?");
        //$placeholders=implode(",",$question_mark_array);
        $designation_part_of_query = " AND college_personnel.cp_id IN (SELECT cp_designation.cp_id FROM cp_designation WHERE cp_designation.cp_designation LIKE (CONCAT(?,'%'))";
        //print_r($designation_part_of_query);

        for ($i = 1; $i < count($designation_filter_array); $i++) {
            $designation_part_of_query .= " OR cp_designation.cp_designation LIKE (CONCAT(?,'%'))";
        }
        $designation_part_of_query .= ") ";
    }
    if (strlen($college_section_filter) > 0) {
        $college_section_filter_array = explode(",", $college_section_filter);
        $bind_param_type_string .= str_repeat("s", count($college_section_filter_array));
        array_push($bind_param_array, ...$college_section_filter_array);

        $count_of_previous_letter_bind_param_type_string .= str_repeat("s", count($college_section_filter_array));
        array_push($count_of_previous_letter_bind_param_array, ...$college_section_filter_array);

        $question_mark_array = array_fill(0, count($college_section_filter_array), "?");
        $placeholders = implode(",", $question_mark_array);
        $college_section_part_of_query = " AND dept_belongs_to_clg_section.college_sec_name IN ($placeholders)";
    }

    // print_r($bind_param_array);
    // print_r($bind_param_type_string);

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    $fetch_faculty_stmt = "SELECT *,GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ' | ') AS cp_desig FROM college_personnel 
    JOIN dept_belongs_to_clg_section ON college_personnel.cp_department_section=dept_belongs_to_clg_section.dept_sect_id 
    JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
    JOIN cp_designation ON cp_designation.cp_id= college_personnel.cp_id 
    WHERE LOWER(college_personnel.cp_name) LIKE CONCAT(?,'%')";



    $fetch_faculty_stmt .= $sort_part_of_query;
    $fetch_faculty_stmt .= $dept_part_of_query;
    $fetch_faculty_stmt .= $faculty_part_of_query;
    $fetch_faculty_stmt .= $designation_part_of_query;
    $fetch_faculty_stmt .= $college_section_part_of_query;
    $fetch_faculty_stmt .= " GROUP BY college_personnel.cp_id 
ORDER BY college_personnel.cp_name ASC";

    //RESULTS FOR A PARTICULAR LETTER QUERY
    $fetch_faculty_query = $conn->prepare($fetch_faculty_stmt);
    $fetch_faculty_query->bind_param($bind_param_type_string, ...$bind_param_array);
    $fetch_faculty_query->execute();
    $fetch_faculty_query_result = $fetch_faculty_query->get_result();

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    $fetch_faculty_count_stmt = "SELECT college_personnel.cp_id,GROUP_CONCAT(cp_designation.cp_designation SEPARATOR ' | ') AS cp_desig FROM college_personnel 
    JOIN dept_belongs_to_clg_section ON college_personnel.cp_department_section=dept_belongs_to_clg_section.dept_sect_id 
    JOIN departments ON departments.dept_id= dept_belongs_to_clg_section.dept_id 
    JOIN cp_designation ON cp_designation.cp_id= college_personnel.cp_id 
    WHERE LOWER(college_personnel.cp_name) LIKE CONCAT(?,'%')";

    $count_of_previous_letter_query_stmt = $fetch_faculty_count_stmt;

    //exclude sort from count query
    $fetch_faculty_count_stmt .= $dept_part_of_query;
    $fetch_faculty_count_stmt .= $faculty_part_of_query;
    $fetch_faculty_count_stmt .= $designation_part_of_query;
    $fetch_faculty_count_stmt .= $college_section_part_of_query;
    $fetch_faculty_count_stmt .= " GROUP BY college_personnel.cp_id 
ORDER BY college_personnel.cp_name ASC";

    $fetch_faculty_count_final_stmt = "SELECT COUNT(*) as total_rows FROM ($fetch_faculty_count_stmt) as count_query";

    //TOTAL RESULTS COUNT QUERY
    $fetch_faculty_count_query = $conn->prepare($fetch_faculty_count_final_stmt);

    if ($dont_consider_sort_params) {
        $count_bind_param_array[0] = $bind_param_array[0];
        for ($i = 2; $i < count($bind_param_array); $i++) {
            $count_bind_param_array[$i - 1] = $bind_param_array[$i];
        }
        $fetch_faculty_count_query->bind_param(substr($bind_param_type_string, 1), ...$count_bind_param_array);
    } else {
        $fetch_faculty_count_query->bind_param($bind_param_type_string, ...$bind_param_array);
    }

    $fetch_faculty_count_query->execute();
    $fetch_faculty_count_query_result = $fetch_faculty_count_query->get_result();

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    //PREVIOUS ALPHABETS COUNT  QUERY

    if ($sort_part_of_count_query_of_previous_letter != "") {
        $count_of_previous_letter_query_stmt .= $sort_part_of_count_query_of_previous_letter;
        $count_of_previous_letter_query_stmt .= $dept_part_of_query;
        $count_of_previous_letter_query_stmt .= $faculty_part_of_query;
        $count_of_previous_letter_query_stmt .= $designation_part_of_query;
        $count_of_previous_letter_query_stmt .= $college_section_part_of_query;
        $count_of_previous_letter_query_stmt .= " GROUP BY college_personnel.cp_id 
ORDER BY college_personnel.cp_name ASC";


        $count_of_previous_letter_query_final_stmt = "SELECT COUNT(*) as count_of_previous_letters FROM ($count_of_previous_letter_query_stmt) as count_of_previous_letters_query";

        //COUNT OF RESULTS OF ALL THE PREVIOUS LETTERS.
        //EG:IF THE SORT LETTER IS "R", RETURN THE COUNT OF ALL THE RESULTS THAT SATISFY THE CONDITIONS UPTO LETTER Q
        $fetch_count_of_previous_letters_query = $conn->prepare($count_of_previous_letter_query_final_stmt);
        $fetch_count_of_previous_letters_query->bind_param($count_of_previous_letter_bind_param_type_string, ...$count_of_previous_letter_bind_param_array);
        $fetch_count_of_previous_letters_query->execute();
        $fetch_count_of_previous_letters_query_result = $fetch_count_of_previous_letters_query->get_result();
    } else {
        $count_of_previous_letters=0;
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    //RETURN THE RESPONSE
    $faculty_array = [];

    if ($fetch_faculty_query_result && $fetch_faculty_count_query_result) {
        while ($row = $fetch_faculty_query_result->fetch_assoc()) {
            //print_r($row);
            $row["cp_id"] = encryptId($row["cp_id"], "../../../../config/openssl_encrypt_decrypt_credentials.php");

            $row["dept_id"] = encryptId($row["dept_id"], "../../../../config/openssl_encrypt_decrypt_credentials.php");
            array_push($faculty_array, $row);
        }

        while ($row = $fetch_faculty_count_query_result->fetch_assoc()) {
            $total_rows = $row["total_rows"];
        }

        if ($sort_part_of_count_query_of_previous_letter != "") {
            while ($row = $fetch_count_of_previous_letters_query_result->fetch_assoc()) {
                $count_of_previous_letters = $row["count_of_previous_letters"];
            }
        }

        //print_r($count_of_previous_letters);

        $response_array = ["faculty_array" => $faculty_array, "total_rows" => $total_rows, "count_of_previous_letters" => $count_of_previous_letters];
        print_r(json_encode($response_array));
        return json_encode($response_array);
    }
}
