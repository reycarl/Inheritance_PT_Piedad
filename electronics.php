<?php
require_once 'parent.php';

class Electronics extends Product {
    private $warrantyPeriod;

    public function __construct($name, $price, $category, $warrantyPeriod) {
        parent::__construct($name, $price, $category);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getDetails() {
        return parent::getDetails() . ", Warranty: $this->warrantyPeriod years";
    }
}
?>
