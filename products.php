<?php
require('includes/functions.php');
$connection = dbConnect();
// haal de producten op
$statement = getProducts($connection);
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/products.css">
    <script src="script/stop-loop.js"></script>
    <title>Diensten</title>
</head>
<body>
<div class="navigation">
    <div class="navigation-content">
        <div class="navigation-button">
            <a href="about.php" class="navigation-link">OVER ONS</a>
        </div>
        <div class="navigation-button">
            <a href="products.php" class="navigation-link link-active">DIENSTEN</a>
        </div>
        <div class="navigation-logo">
            <a href="">
                <img src="images/doorlopen.gif" alt="Logo" class="navigation-logo-image" id="loop"
                     onload="setTimeout(stopLoop, 1000)">
            </a>
        </div>
        <div class="navigation-button">
            <a href="portfolio.php" class="navigation-link">PORTFOLIO</a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">CONTACT</a>
        </div>
    </div>
</div>
<div class="page-content">
    <h1 class="page-content__head">portfolio</h1>
    <div class="products--product-container">
        <?php foreach ($statement as $product): ?>
            <div class="product-container">
                <img src="images/<?php echo $product['image'] ?>" alt="" class="product-image">
                <h2 class="product-name"><?php echo $product['product_name'] ?></h2>
                <p class="product-description"><?php echo $product['description'] ?></p>
                <a href="portfolio.php" class="product__more-button">Lees meer</a>
            </div>

        <?php endforeach; ?>
    </div>
</div>
</body>
</html>


