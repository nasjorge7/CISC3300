<?php
namespace MyBusiness;

class Item {
    private $name;
    private $price;
    private $description;

    public function __construct($name, $price, $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public function getItemData() {
        return json_encode([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description
        ]);
    }
}
?>