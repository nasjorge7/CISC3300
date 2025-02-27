<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uriArray = explode("/", $uri);

if ($uriArray[1] === 'submit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($name) && !empty($email)) {
        echo json_encode(['message' => "Thank you, $name! Your email ($email) has been submitted."]);
    } else {
        echo json_encode(['message' => "Error: Please fill in all fields."]);
    }
    exit();
}
?>
