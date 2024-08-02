<?php
include("../../../../config/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["type"])) {
    //print_r("here");

    $type = mysqli_real_escape_string($conn, $_GET["type"] ?? "");
    $ay = mysqli_real_escape_string($conn, $_GET["ay"] ?? "");
    assert($type != "");

    $fetch_stmt = "";


    switch ($type) {
            // case "history":
            //     $fetch_stmt = "SELECT * FROM `photos_of_faculty_academic_year` join photos on photos_of_faculty_academic_year.photo_id= photos.photo_id;";
            //     break;

        case "achievements":
            $fetch_stmt = "SELECT * FROM `photos_for_achievements_in_academic_year` join achievements on achievements.achievement_id=photos_for_achievements_in_academic_year.achievement_id join photos on photos.photo_id = photos_for_achievements_in_academic_year.photo_id WHERE photos_for_achievements_in_academic_year.academic_year LIKE CONCAT('%',?,'%')
            ORDER by achievements.achievement_date";

            break;
        case "faculty":
            $fetch_stmt = "SELECT * FROM `photos_of_faculty_academic_year` join photos on photos_of_faculty_academic_year.photo_id= photos.photo_id WHERE photos_of_faculty_academic_year.academic_year LIKE CONCAT('%',?,'%') ;";
            break;
        case "committees":
            $fetch_stmt = "SELECT * FROM `photos_are_for_committees_in_academic_year` join photos on photos.photo_id=photos_are_for_committees_in_academic_year.photo_id 
            WHERE photos_are_for_committees_in_academic_year.academic_year LIKE CONCAT('%',?,'%')
            order by academic_year DESC;";
            break;
        case "events":
            $fetch_stmt = "SELECT * FROM `photos_for_events_in_academic_year` 
            JOIN photos on photos_for_events_in_academic_year.photo_id=photos.photo_id
            JOIN clg_events on clg_events.event_id=photos_for_events_in_academic_year.event_id 
            WHERE photos_for_events_in_academic_year.academic_year LIKE CONCAT('%',?,'%')
            ORDER BY clg_events.event_end_date DESC;";
            break;
    }

    $fetch_photos_query = $conn->prepare($fetch_stmt);
    $fetch_photos_query->bind_param("s",$ay);
    $fetch_photos_query->execute();
    $fetch_photos_query_result = $fetch_photos_query->get_result();

    if ($fetch_photos_query_result) {
        $json_response = [];
        while ($row = $fetch_photos_query_result->fetch_assoc()) {
            $required_data = [];
            $required_data["photo_link"] = $row["photo_link"];
            $required_data["photo_caption"] = $row["photo_caption"];

            array_push($json_response, $required_data);
        }
        echo json_encode($json_response);
    } else {
        echo "Some error occurred";
    }
} else {
    echo "<script>window.history.back()</script>";
    exit;
}
