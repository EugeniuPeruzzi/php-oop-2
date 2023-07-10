<?php
    class Utility extends Product {
        public $dimension;
        
        function __construct($img, $title ,$animal_type , $price , $description, $dimension ){
             
            parent::__construct($img, $title, $animal_type , $price , $description);
            $this->dimension = $dimension;
        }
 
    
    }
?>