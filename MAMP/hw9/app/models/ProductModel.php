<?php
class ProductModel {
    private $pdo;
    
    public function __construct() {
        // Include database configuration 
        require __DIR__ . '/../../config/database.php';
        $this->pdo = $pdo;
    }
    
    /**
     * @param string 
     * @return array            
     */
    public function searchByType(string $typeQuery): array {
        $sql = "SELECT id, name, type, price 
                FROM products 
                WHERE type LIKE ?";

        $stmt = $this->pdo->prepare($sql);
        $searchTerm = "%" . $typeQuery . "%";
        $stmt->execute([$searchTerm]);
        
    
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results !== false ? $results : [];
    }
}
