<?php

/**
 * PRODUCT CLASS
 * 
 * Parent Class - modello principale per i prodotti del negozio
 */

class Product {
    //Properties
    public $name;
    public $price;
    public $product_by;

    //Constructor
    public function __construct($name, $price, $product_by) {
    $this->name = $name;
    $this->price = $price;
    $this->product_by = $product_by;
    }

    //Methods
    public function getDiscount() { //Applico l'eventuale sconto al prezzo
        return $discount = $this->price - ($this->price * 0);
    }
}