<?php

    class Product {
        public $img;
        public $title;
        public $price;
        public $description;

        function __construct($img, $title, $price , $description){
            $this->img =$img;
            $this->title = $title;
            $this->price = $price;
            $this->description = $description;
        }


    }


?>