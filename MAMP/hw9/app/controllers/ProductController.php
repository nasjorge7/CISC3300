<?php
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    /**
     */
    public function searchPage() {
        include __DIR__ . '/../views/product_search.php';
    }

    /**
     */
    public function search() {

        $query = isset($_GET['q']) ? $_GET['q'] : '';
        
        
        $model = new ProductModel();
        $results = $model->searchByType($query);
        
        // Return results as JSON
        header('Content-Type: application/json');
        echo json_encode($results);
    }
}
