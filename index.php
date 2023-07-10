<?php 
    require __DIR__.'/product.php' ;
    require __DIR__.'/models/food.php';
    require __DIR__.'/models/utility.php';



    // prodotti cibo

    //  !! ATTENZIONE nella dichiarazione della variabile di new food il peso e ultimo come stringa invece nella struttura HTML e messo come pen ultimo !!
    $food_1 = new Food('https://petworld-cdn-media.media-tinyelephant.no/pub/media/catalog/product/cache/32817bdccd358503519584bdb6c86f4d/3/1/3182550831383.jfif.jpg', 'Royal Canin Mini Adult', '<i class="fa-solid fa-dog"></i> Cane' , '$ 43,99' ,'prosciutto, riso', 'Peso netto: 545g');
    $food_2 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Naturale Holistic Maintenance Medium Large Tonno e Riso', '<i class="fa-solid fa-dog"></i> Cane' , '$ 44.99' ,'manzo, cereali', '600g');
    $food_3 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Naturale Cat Daily Lattina', '<i class="fa-solid fa-cat"></i> Gatto' , '$ 34.99' ,'tonno, pollo, prosciutto', '400g');
    $food_4 = new Food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', '<i class="fa-solid fa-fish-fins"></i> Pesce' , '$ 2,95' ,'Pesci e sottoprodotti di pesci, ceriali, Lieviti, Alghe', '30g');
    $utility_1 = new Utility('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', '<i class="fa-solid fa-fish-fins"></i> Ucello' , '$ 184,99' ,'Legno', 'M: L 83 x P 67 x H 153 cm');
    $utility_2 = new Utility('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', '<i class="fa-solid fa-fish-fins"></i> Pesce' , '$ 2,29' ,'Materiale Espanso', 'ND');
    

    $food = [
        $food_1,
        $food_2,
        $food_3,
        $food_4,
    ];

    $utility = [
        $utility_1,
        $utility_2,
    ];

    $games = [
        $game_1,
        $game_2,
    ]
    
    
    
    var_dump($utility);


    

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <title>PhP OOP 2 </title>
</head>

<body>
    <div class="">
    
        <?php foreach ($food as $index => $show) { ?>
            <div class="img-container">
                <img src="<?php echo $show->img; ?>" alt="">
            </div>
            <h4><?php echo $show->title; ?></h4>
            <h6><?php echo $show->animal_type; ?></h6>
            <h6><?php echo $show->price; ?></h6>
            <h6><?php echo $show->weight; ?></h6>
            <h6><?php echo $show->description; ?></h6>
        <?php } ?>
    </div>

    <div class="">
    
        <?php foreach ($utility as $index => $show) { ?>
            <div class="img-container">
                <img src="<?php echo $show->img; ?>" alt="">
            </div>
            <h4><?php echo $show->title; ?></h4>
            <h6><?php echo $show->animal_type; ?></h6>
            <h6><?php echo $show->price; ?></h6>
            <h6><?php echo $show->description; ?></h6>
            <h6><?php echo $show->dimension; ?></h6>
        <?php } ?>
    </div>
</body>

</html>