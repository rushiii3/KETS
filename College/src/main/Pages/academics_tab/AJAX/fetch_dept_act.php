<?php

include("../../../../config/connect.php");

//TODO:ENCRYPT THE BASE64 PARAMS AND THEN DECODE IT HERE

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["dept_sect_id"]) && !empty($_GET["dept_sect_id"]) && isset($_GET["ay"]) && !empty($_GET["ay"])) {

        $dept_sect_id = mysqli_real_escape_string($conn, base64_decode($_GET["dept_sect_id"]));
        $ay = mysqli_real_escape_string($conn, $_GET["ay"]);

        $fetch_dept_act_stmt = "SELECT * FROM departmental_activities where dept_act_id in(SELECT dc.dept_act_id FROM dept_has_dept_activities as dc INNER JOIN departmental_activities as dy on dc.dept_act_id=dy.dept_act_id 
    WHERE dc.dept_sect_id=? and dy.dept_act_academic_year=?)";
        $fetch_dept_act_query = $conn->prepare($fetch_dept_act_stmt);
        $fetch_dept_act_query->bind_param("ss", $dept_sect_id, $ay);
        $fetch_dept_act_query->execute();
        $fetch_dept_act_query_result = $fetch_dept_act_query->get_result();

        if ($fetch_dept_act_query_result && $fetch_dept_act_query_result->num_rows > 0) {
            $json_response = [];
            while ($row = $fetch_dept_act_query_result->fetch_assoc()) {
                $require_data=[];
                $require_data["dept_act_title"]=$row["dept_act_title"];
                $require_data["dept_act_desc"]=$row["dept_act_desc"];
                array_push($json_response, $require_data);
            }

            echo json_encode($json_response);
        }
    }
}
