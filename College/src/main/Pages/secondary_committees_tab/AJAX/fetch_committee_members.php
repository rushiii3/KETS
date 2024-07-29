<?php
include("../../../../config/connect.php");
include("../../../../php/encrypt_query_params.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $committee_id = $_GET["id"] ?? "";
    assert($committee_id != "");

    $committee_id = decryptId($committee_id, "../../../../config/openssl_encrypt_decrypt_credentials.php");

    $degree_college_members = [];
    $junior_college_members = [];
    $mgmt_members = [];
    //print_r (json_encode($committee_id));

    $fetch_committee_members_stmt = "SELECT * FROM college_personnel 
JOIN cp_is_part_of_committee ON cp_is_part_of_committee.cp_id=college_personnel.cp_id
JOIN committee_belongs_to_clg_section ON committee_belongs_to_clg_section.committee_clg_section_id=cp_is_part_of_committee.committee_sec_id
WHERE committee_belongs_to_clg_section.committee_id=? 
ORDER BY cp_is_part_of_committee.role ASC, committee_belongs_to_clg_section.college_sec_name ASC, college_personnel.cp_name ASC;
    ";

    $fetch_committee_members_query = $conn->prepare($fetch_committee_members_stmt);
    $fetch_committee_members_query->bind_param("i", $committee_id);
    $fetch_committee_members_query->execute();
    $fetch_committee_members_query_result = $fetch_committee_members_query->get_result();

    if ($fetch_committee_members_query_result) {
        while ($row = $fetch_committee_members_query_result->fetch_assoc()) {
            $required_data = ["cp_name" => $row["cp_name"], "cp_gender" => $row["cp_gender"], "cp_honourific" => $row["cp_honourific"], "cp_personal_website_link" => $row["cp_personal_website_link"], "role" => $row["role"], "cp_image_path" => $row["cp_image_path"]];
            if ($row["college_sec_name"] == "d") {
                array_push($degree_college_members, $row);
            } else if ($row["college_sec_name"] == "j") {
                array_push($junior_college_members, $required_data);
            } else if ($row["college_sec_name"] == "m") {
                array_push($mgmt_members, $required_data);
            }
        }
    }

    $final_json_response = [];
    $final_json_response["degree_members"] = $degree_college_members;
    $final_json_response["junior_members"] = $junior_college_members;
    $final_json_response["mgmt_members"] = $mgmt_members;

    print_r(json_encode($final_json_response));
    //return json_encode($final_json_response);
}
