<?php
    class Food extends Product {
        public $weight;
        
        function __construct($img, $title ,$animal_type , $price , $description, $weight ){
             
            parent::__construct($img, $title, $animal_type , $price , $description);
            $this->weight = $weight;
        }
 
    
    }
?>