<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/") {
    $cats = [
        ["name" => "Pinecone"],
        ["name" => "Mr. Whiskers"]
    ];

    echo json_encode($cats);
    exit();
}

echo json_encode(["message" => "Invalid request"]);
?>