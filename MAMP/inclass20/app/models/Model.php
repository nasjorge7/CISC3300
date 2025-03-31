<?php

namespace app\models;

use PDO;
use PDOException;

class Model {
    protected $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=localhost;port=3307;dbname=post_app", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("DB Connection failed: " . $e->getMessage());
        }
    }

    protected function query($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}