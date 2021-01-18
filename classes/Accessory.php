<?php
include_once __DIR__ . '/Product.php'; //importo la classe originale.
//A cui aggiungerò l'estensione di Shoe

/**
 * SHOES CLASS
 * 
 * Son Class - classe estesa di Product
 */

 class Accessory extends Product {
    public $materials;

    public function __construct($name, $price, $product_by, $materials) {
        //1 passare valori originali al padre
        parent::__construct($name, $price, $product_by);
        //2 set new prop
        $this->materials = $materials;
    }

    public function getDiscount() {
        return $discount = $this->price - ($this->price * 0.15);
    }
 }