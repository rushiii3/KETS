<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// Define a hardcoded list of items
$items = [
    ['id' => 1, 'name' => 'Item 1', 'description' => 'Description for Item 1'],
    ['id' => 2, 'name' => 'Item 2', 'description' => 'Description for Item 2'],
    ['id' => 3, 'name' => 'Item 3', 'description' => 'Description for Item 3'],
];
// $urls = [
//    [ "uri" => $_SERVER['REQUEST_URI']],
//    [ "method" => $_SERVER['REQUEST_METHOD']]
// ];
// // Return the list of items as a JSON response
// echo json_encode($urls,JSON_PRETTY_PRINT);
echo($uri);

switch ($method | $uri) {
    case ($method == 'GET' && $uri == '/api/users'):
        header('Content-Type: application/json');
        echo json_encode($items, JSON_PRETTY_PRINT);
        break;
    }
?>
