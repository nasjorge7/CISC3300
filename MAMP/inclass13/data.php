<?php
header('Content-Type: application/json');

$data = [
    'message' => 'Hello from the PHP backend!',
    'timestamp' => date('Y-m-d H:i:s')
];

echo json_encode($data);
?>
