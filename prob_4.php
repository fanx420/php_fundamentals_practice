<!-- 📝 Problem: Product Inventory

Scenario: You are building a simple inventory system.

Create an associative array of products, where the key is the product name and the value is the product price. Example:

$products = [
    "Laptop" => 45000,
    "Mouse" => 500,
    "Keyboard" => 1500,
    "Monitor" => 8000,
    "Headphones" => 2000
];


Write a function calculateTotal($arr) that takes the product array and returns the total cost of all products.

Loop through the array and print each product and its price.

At the end, print the total cost using the function.

🎯 Expected Output
Laptop => 45000
Mouse => 500
Keyboard => 1500
Monitor => 8000
Headphones => 2000
Total cost: 57000 -->

<?php
$products = [
    "Laptop" => 45000,
    "Mouse" => 500,
    "Keyboard" => 1500,
    "Monitor" => 8000,
    "Headphones" => 2000
];

function calculateTotal($arr){
    $total = array_reduce($arr, fn($acc, $number) => $acc + $number,0);
    echo "Total cost: ". $total;
}
forEach($products as $product => $value){
    echo "{$product} => {$value}\n";
}
calculateTotal($products);
?>