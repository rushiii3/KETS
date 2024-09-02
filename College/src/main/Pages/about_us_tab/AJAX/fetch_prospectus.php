<?php
include("../../../../config/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["ay"]) && !empty($_GET["ay"])) {

    $ay = mysqli_real_escape_string($conn, $_GET["ay"]);
    $fetch_prospectus_stmt = "SELECT * FROM other_pdfs join `other_pdf_is_for_clg_section_in_academic_year` on other_pdfs.all_pdf_id=other_pdf_is_for_clg_section_in_academic_year.other_pdf_id WHERE other_pdfs.other_pdfs_type_name='prospectus' AND other_pdfs.other_pdfs_should_it_be_visible='y' AND other_pdf_is_for_clg_section_in_academic_year.academic_year =?;";

    $fetch_prospectus_query = $conn->prepare($fetch_prospectus_stmt);
    $fetch_prospectus_query->bind_param("s",$ay);
    $fetch_prospectus_query->execute();
    $fetch_prospectus_query_result = $fetch_prospectus_query->get_result();

    if($fetch_prospectus_query_result && $fetch_prospectus_query_result->num_rows>0){
        $json_response=[];
        while($row=$fetch_prospectus_query_result->fetch_assoc()){
            $required_data=[];
            $required_data["all_pdf_pdf_link"]=$row["all_pdf_pdf_link"];
            $required_data["all_pdf_title"]=$row["all_pdf_title"];
            array_push($json_response,$required_data);
        }

        echo json_encode($json_response);
    }
    else{
        echo json_encode("no data found");
    }
} else {
    echo json_encode("no data");
    echo "<script>window.history.back()</script>";
    exit;
}
