<?php
class Product
{
    private int $id;
    private string $name;
    private float $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice()
    {
        return "$" . number_format($this->price, 2);
    }

    public function showDetails()
    {
        // Add code to display the details of the product
        $details = <<<EOT
        Product Details:
        - ID: {$this->id}
        - Name: {$this->name}
        - Price: {$this->getFormattedPrice()}
        EOT;
        echo $details;

    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();