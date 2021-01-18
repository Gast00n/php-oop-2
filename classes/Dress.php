<?php
include_once __DIR__ . '/Product.php'; //importo la classe originale.
//A cui aggiungerò l'estensione di Dress

/**
 * DRESSES CLASS
 * 
 * Son Class - classe estesa di Product
 */

 class Dress extends Product {
    public $type;
    public $size;

    public function __construct($name, $price, $product_by, $size) {
        //1 passare valori originali al padre
        parent::__construct($name, $price, $product_by);
        //2 set new prop
        $this->size = $size;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function getDiscount() {
        return $discount = $this->price;
    }
 }