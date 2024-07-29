<?php
include("../../../../config/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["caqar_ay"])) {
        //print_r("here");
        //print_r($_GET["caqar_ay"]);
        $caqar_ay = mysqli_real_escape_string($conn, $_GET["caqar_ay"]);
        // $fetch_caqar_stmt = "SELECT * FROM reports WHERE reports_type='caqar' AND reports_should_it_be_visible='y' AND reports_academic_year LIKE CONCAT('%',?,'%') ORDER BY all_pdf_title ASC";

        $fetch_caqar_stmt = "SELECT * FROM reports JOIN reports_belong_to_aqar_criteria ON reports_belong_to_aqar_criteria.report_id=reports.all_pdf_id WHERE reports.reports_should_it_be_visible='y' AND reports.reports_academic_year LIKE CONCAT('%',?,'%') ORDER BY reports_belong_to_aqar_criteria.aqar_criteria_number ASC, reports_belong_to_aqar_criteria.aqar_sub_criteria ASC";

        $fetch_caqar_query = $conn->prepare($fetch_caqar_stmt);
        $fetch_caqar_query->bind_param("s", $caqar_ay);
        $fetch_caqar_query->execute();
        $fetch_caqar_query_result = $fetch_caqar_query->get_result();

        if ($fetch_caqar_query_result) {
            
            $json_response = ["criteria_1"=>[],"criteria_2"=>[],"criteria_3"=>[],"criteria_4"=>[],"criteria_5"=>[],"criteria_6"=>[],"criteria_7"=>[],];
            while ($row = $fetch_caqar_query_result->fetch_assoc()) {
                $required_data = [];
                $required_data["all_pdf_pdf_link"] = $row["all_pdf_pdf_link"];
                $required_data["all_pdf_title"] = $row["all_pdf_title"];
                $required_data["aqar_sub_criteria"]=$row["aqar_sub_criteria"];
                $required_data["aqar_criteria_number"]=$row["aqar_criteria_number"];
                //print_r($row);

                
                array_push($json_response["criteria_".$row["aqar_criteria_number"]], $required_data);
            }

            print_r(json_encode($json_response));
            //return json_encode($json_response);
        }
    }
}
