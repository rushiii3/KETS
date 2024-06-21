<?php
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

$result = $conn->query($sql);
$faculty = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $faculty[] = $row;
    }
}

echo json_encode($faculty);
?>
