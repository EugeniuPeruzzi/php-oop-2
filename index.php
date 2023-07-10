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
    <div class="">
        <!-- Food -->
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
        <!-- Utility -->
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

    <div class="">
        <!-- Games -->
        <?php foreach ($games as $index => $show) { ?>
            <div class="img-container">
                <img src="<?php echo $show->img; ?>" alt="">
            </div>
            <h4><?php echo $show->title; ?></h4>
            <h6><?php echo $show->animal_type; ?></h6>
            <h6><?php echo $show->price; ?></h6>
            <h6><?php echo $show->description; ?></h6>
            <h6><?php echo $show->dimension_games; ?></h6>
        <?php } ?>
    </div>
</body>

</html>