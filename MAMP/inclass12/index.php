<?php
$type = isset($_GET['type']) ? $_GET['type'] : '';

if ($type == "html") {
    echo "<h3>Hello, this is an HTML response!</h3>";
} else
if ($type == "json") {
    header("Content-Type: application/json");
    echo json_encode(["message" => "Hello, this is a JSON response!"]);
} else {
    readfile("<inclass-12></inclass-12>.html");
}
?>
