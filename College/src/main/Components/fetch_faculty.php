<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "vaze_college_website_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['error' => 'Connection failed: ' . $conn->connect_error]));
}

echo '<script>alert("Welcome to Geeks for Geeks")</script>';

$name = $_POST['name'] ?? '';
$college = $_POST['college'] ?? '';
$department = $_POST['department'] ?? '';
$course = $_POST['course'] ?? '';
$sql = "SELECT * FROM college_personnel WHERE 1=1";

if (!empty($name)) {
    $sql .= " AND name LIKE '%$name%'";
}
if (!empty($college)) {
    $sql .= " AND college_sec_name='$college'";
}
if (!empty($department)) {
    $sql .= " AND department='$department'";
}
if (!empty($course)) {
    $sql .= " AND course='$course'";
}

$result = $conn->query($sql);

if (!$result) {
    echo json_encode(['error' => 'SQL error: ' . $conn->error]);
    exit;
}

if ($result->num_rows > 0) {
    $faculty = [];
    while ($row = $result->fetch_assoc()) {
        $faculty[] = $row;
    }
    echo json_encode($faculty);
} else {
    echo json_encode([]);
}
?>
