<?php
class Product {
    private static int $id;
    private static string $name;
    private static float $price;

  //TODO: Initialize properties.
    public function __construct(int $id, string $name, float $price) { 
        self::$id = $id;
        self::$name = $name;
        self::$price = $price;
    }

    public static function create(int $id, string $name, float $price): Product {
        return new Product($id, $name, $price);
    }


  // TODO: Add getFormattedPrice method.
    private function getFormattedPrice(): string { 
        // Format the price with two decimal places
        return '$' . number_format(self::$price, 2);
    }

    private function getId(): int {  
        return self::$id;
    }

    private function getName(): string {
        return self::$name;
    }

  // TODO: Add showDetails method.
    public function showDetails() { 
    echo "Product Details:\n";
    echo "- ID: {$this->getId()}\n";
    echo "- Name: {$this->getName()}\n";
    echo "- Price: {$this->getFormattedPrice()}\n";
  }
}



// TODO: Test the Product class.

/*As static function was used,the following syntax is used here, 
instead of : $product = new Product(1, 'T-shirt', 19.99);*/

$product = Product::create(1, 'T-shirt', 19.99); 
$product->showDetails();



?>