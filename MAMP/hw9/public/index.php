<?php

require_once __DIR__ . '/../app/controllers/ProductController.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$controller = new ProductController();
if ($action === 'search') {
    $controller->search();
    exit; 
} else {
    $controller->searchPage();
    exit;
}
