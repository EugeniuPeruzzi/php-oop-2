<?php

    //  !! ATTENZIONE nella dichiarazione della variabile di new food il peso e ultimo come stringa invece nella struttura HTML e messo come pen ultimo !!
    
    // prodotti cibo
    $food_1 = new Food('https://petworld-cdn-media.media-tinyelephant.no/pub/media/catalog/product/cache/32817bdccd358503519584bdb6c86f4d/3/1/3182550831383.jfif.jpg', 'Royal Canin Mini Adult', '<i class="fa-solid fa-dog"></i> Cane' , '$ 43,99' ,'prosciutto, riso', 'Peso netto: 545g');
    $food_2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Naturale Holistic Maintenance Medium Large Tonno e Riso', '<i class="fa-solid fa-dog"></i> Cane' , '$ 44.99' ,'manzo, cereali', '600g');
    $food_3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Naturale Cat Daily Lattina', '<i class="fa-solid fa-cat"></i> Gatto' , '$ 34.99' ,'tonno, pollo, prosciutto', '400g');
    $food_4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', '<i class="fa-solid fa-fish-fins"></i> Pesce' , '$ 2,95' ,'Pesci e sottoprodotti di pesci, ceriali, Lieviti, Alghe', '30g');
    
    
    // utility
    $utility_1 = new Utility('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', '<i class="fa-solid fa-fish-fins"></i> Ucello' , '$ 184,99' ,'Legno', 'M: L 83 x P 67 x H 153 cm');
    $utility_2 = new Utility('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', '<i class="fa-solid fa-fish-fins"></i> Pesce' , '$ 2,29' ,'Materiale Espanso', 'ND');
    
    
    // games
    $game_1 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', '<i class="fa-solid fa-fish-fins"></i> Cane' , '$ 13,49' ,'Galleggia e rimbalza', '8,5cm x 10cm');
    $game_2 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', '<i class="fa-solid fa-fish-fins"></i> Gatto' , '$ 4,99' ,'Morbido con codina in corda', '8.5cm x 10cm ');

    // food array 
    $food = [
        $food_1,
        $food_2,
        $food_3,
        $food_4,
    ];

    //utility array
    $utility = [
        $utility_1,
        $utility_2,
    ];

    // games array
    $games = [
        $game_1,
        $game_2,
    ];
    

?>