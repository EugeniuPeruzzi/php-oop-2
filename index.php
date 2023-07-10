<?php 
    // importing files 
    require __DIR__.'/models/product.php' ;
    require __DIR__.'/models/food.php';
    require __DIR__.'/models/utility.php';
    require __DIR__.'/models/games.php';
    require __DIR__.'/db.php';
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
    <div class="container">
        <div class="row">
            <h1 class="ms-2 mb-5">Boolshop</h1>
            <h2 class="ms-2 mt-5">I nostri prodotti</h2>
            <div class="col-10 d-flex flex-wrap">
                <!-- Food -->
                <?php foreach ($food as $index => $show) { ?>
                    <div class="card m-2" style="width: 21rem;">
                        <div class="img-container">
                            <img src="<?php echo $show->img; ?>" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $show->title; ?></h4>
                            <h6 class="mb-3"><?php echo $show->animal_type; ?></h6>
                            <div class="my-1">Prezzo: <strong><?php echo $show->price; ?></strong></div>
                            <div class="my-1">Peso netto: <?php echo $show->weight; ?></div>
                            <div class="my-1">Ingredienti: <?php echo $show->description; ?></div>
                        </div>
                    </div>
                <?php } ?>
                
                
                <!-- Utility -->
                <?php foreach ($utility as $index => $show) { ?>
                    <div class="card m-2" style="width: 21rem;">
                        <div class="img-container">
                            <img src="<?php echo $show->img; ?>" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $show->title; ?></h4>
                            <h6 class="mb-3"><?php echo $show->animal_type; ?></h6>
                            <div class="my-1">Prezzo: <strong><?php echo $show->price; ?></strong></div>
                            <div class="my-1">Materiale: <?php echo $show->description; ?></div>
                            <div class="my-1">Dimensioni: <?php echo $show->dimension; ?></div>
                        </div>
                    </div>
                <?php } ?>
            
                <!-- Games -->
                <?php foreach ($games as $index => $show) { ?>
                    <div class="card m-2" style="width: 21rem;">
                        <div class="img-container">
                            <img src="<?php echo $show->img; ?>" alt="" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h4><?php echo $show->title; ?></h4>
                            <h6 class="my-3"><?php echo $show->animal_type; ?></h6>
                            <div class="my-1">Prezzo: <strong><?php echo $show->price; ?></strong></div>
                            <div class="my-1">Carratteristiche: <?php echo $show->description; ?></div>
                            <div class="my-1">Dimensioni: <?php echo $show->dimension_games; ?></div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</body>

</html>