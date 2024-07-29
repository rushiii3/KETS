<?php
include("../../../../config/connect.php");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["iqac_ay"])) {
        //print_r("here");
        //print_r($_GET["iqac_ay"]);
        $iqac_ay = mysqli_real_escape_string($conn, $_GET["iqac_ay"]);
        $fetch_iqac_stmt = "SELECT * FROM reports WHERE reports_type='iqac' AND reports_should_it_be_visible='y' AND reports_academic_year LIKE CONCAT('%',?,'%') ORDER BY all_pdf_title ASC";

        $fetch_iqac_query = $conn->prepare($fetch_iqac_stmt);
        $fetch_iqac_query->bind_param("s", $iqac_ay);
        $fetch_iqac_query->execute();
        $fetch_iqac_query_result = $fetch_iqac_query->get_result();

        if ($fetch_iqac_query_result) {
            $json_response = [];
            while ($row = $fetch_iqac_query_result->fetch_assoc()) {
                $required_data = [];
                $required_data["all_pdf_pdf_link"] = $row["all_pdf_pdf_link"];
                $required_data["all_pdf_title"] = $row["all_pdf_title"];
                array_push($json_response, $required_data);
            }

            print_r(json_encode($json_response));
            //return json_encode($json_response);
        }
    }
}
