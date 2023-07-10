<?php

    class Product {
        public $img;
        public $title;
        public $animal_type;
        public $price;
        public $description;

        function __construct($img, $title, $animal_type ,$price , $description){
            $this->img =$img;
            $this->title = $title;
            $this->animal_type = $animal_type;
            $this->price = $price;
            $this->description = $description;
        }
    }
?>