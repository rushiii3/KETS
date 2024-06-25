<?php
include("../../config/connect.php");
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
$sql = "SELECT * FROM college_personnel WHERE 1=1";

if (!empty($name)) {
    $sql .= " AND name LIKE '%$name%'";
}
if (!empty($college)) {
    $sql .= " AND college='$college'";
}
if (!empty($department)) {
    $sql .= " AND department='$department'";
}
if (!empty($course)) {
    $sql .= " AND course='$course'";
}

$result = $con->query($sql);
$faculty = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $faculty[] = $row;
    }
}
echo "fetch_faculty page running";
echo json_encode($faculty);
?>
