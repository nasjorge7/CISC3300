<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$uri = strtok($_SERVER["REQUEST_URI"], '?');
$uriArray = explode("/", $uri);

// Astro Assist product list
if ($uriArray[1] === 'products' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $products = [
        ['name' => 'Astro Alpha', 'price' => 299.99],
        ['name' => 'Astro Beta', 'price' => 199.99],
        ['name' => 'Astro Companion', 'price' => 149.99],
        ['name' => 'Astro Mini', 'price' => 99.99]
    ];
    echo json_encode($products);
    exit();
}
?>