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
    <title>Document</title>
</head>
<body>
<div class="navigation">
    <div class="navigation-content">
        <div class="navigation-button">
            <a href="" class="navigation-link">OVER ONS</a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">DIENSTEN</a>
        </div>
        <div class="navigation-logo">
            <a href="">
                <img src="images/Luso%20-%20DEF%20-%20RGB-02.svg" alt="Logo"
                     class="navigation-logo-image">
            </a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">PORTFOLIO</a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">CONTACT</a>
        </div>
    </div>
</div>
<div class="page-content">
    <img src="https://via.placeholder.com/359x166?text=Placeholder" alt="" class="big-picture">
    <div class="products--product-container">
        <?php foreach ($statement as $product): ?>
            <div class="product-container">
                <img src="images/<?php echo $product['image']?>" alt="" class="product-image">
                <h2 class="product-name"><?php echo $product['product_name'] ?></h2>
                <p class="product-description"><?php echo $product['description'] ?></p>
            </div>

        <?php endforeach; ?>
    </div>
</div>
</body>
</html>


