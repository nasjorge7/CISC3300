<?php

require_once __DIR__ . '/../Controllers/PostsController.php';
require_once __DIR__ . '/../Models/posts.php';

use Controllers\PostsController;

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET' && $requestUri === '/posts') {
    $controller = new PostsController();
    $controller->index();
    exit;
}

// Handle 404
http_response_code(404);
echo json_encode(['error' => 'Not Found']);