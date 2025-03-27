<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$envPath = __DIR__ . '/.env';


if (!file_exists($envPath)) {
    die(json_encode(['error' => 'Missing .env file at ' . $envPath]));
}


$env = parse_ini_file($envPath);
if (!$env) {
    die(json_encode(['error' => 'Failed to parse .env file']));
}


$host = $env['DB_HOST'];
$db   = $env['DB_NAME'];
$user = $env['DB_USER'];
$pass = $env['DB_PASS'];
$port = isset($env['DB_PORT']) ? $env['DB_PORT'] : 3306;

try {
   
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
   
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll();
    

    header('Content-Type: application/json');
    echo json_encode($posts, JSON_PRETTY_PRINT);

} catch (PDOException $e) {
    die(json_encode(['error' => 'Database connection failed: ' . $e->getMessage()]));
}
?>
