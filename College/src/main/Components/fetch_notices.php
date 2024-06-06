<?php
$con = mysqli_connect("localhost","root","","college");
if(mysqli_connect_errno()){
    echo("not connected");
}else{
   
}

if (isset($_GET['year']) && isset($_GET['section'])) {
    $year = $_GET['year'];
    $section = $_GET['section'];

    $query = "SELECT * FROM `notices` WHERE `academic_year` = ? AND `section` = ? ORDER BY `date` DESC";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $year, $section);
    $stmt->execute();
    $result = $stmt->get_result();

    $notices = [];
    while ($row = $result->fetch_assoc()) {
        $notices[] = [
            'date' => $row['date'],
            'content' => $row['content'],
            'link' => $row['link']
        ];
    }

    echo json_encode($notices);
}
?>
