<?php

require_once __DIR__ . '/product.php';

class FoodProduct extends Product {
    private $ingredients;
    private $expiration;
    public static $type = 'food';

    public function __construct($name,$image,$price, category $category, $ingredients, $expiration)
    {
    // parent::__construct a cosa serve? e come mai non ripetiamo più category $category?perchè stiamo facendo due costruttori se il primo costruttore ha già tutte le proprietà?????????
    parent::__construct($name,$image,$price,$category);}
    // perchè i setter hanno una proprietà come attributo ed i getter no?????????????????????????????????????????????????????????????????????????????????????????????????????????????????
    public function getIngredients(){
        return $ingredients->ingredients;
        }
    public function setIngredients($ingredients): self{
         $this->ingredients = $ingredients;
         return $this;
        }
    public function getExpiration(){
        return $this->expiration;
         }
    public function setExpiration($expiration): self{
         $this->expiration = strtotime($expiration);
         return $this;}

    public function isExpired(){
        $today = strtotime(date('d-m-Y'));
        return $this->expiration < $today;
    }







    }






















?>