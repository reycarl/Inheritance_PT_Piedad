<?php
require_once 'food.php';
require_once 'electronics.php';
require_once 'clothe';

$electronic = new Electronics("Laptop", 50000, "Gadget", 2);
$food = new Food("Bread", 50, "Grocery", "2025-05-10");
$clothe = new Clothe("T-Shirt", 500, "Apparel", "Large", "Cotton");


echo $electronic->getDetails() . "<br>";
echo $food->getDetails() . "<br>";
echo $clothe->getDetails() . "<br>";
?>
