<?php
    
    class Games extends Product {
        public $dimension_games;
        
        function __construct($img, $title, $animal_type, $price, $description, $dimension_games ){
            
            parent::__construct($img, $title, $animal_type, $price, $description);
            $this->dimension_games = $dimension_games;
        }

    }
    
?>