<?php ?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/portfolio.css">
    <script src="script/stop-loop.js"></script>
    <title>Document</title>
</head>
<body>
<div class="navigation">
    <div class="navigation-content">
        <div class="navigation-button">
            <a href="" class="navigation-link">OVER ONS</a>
        </div>
        <div class="navigation-button">
            <a href="products.php" class="navigation-link">DIENSTEN</a>
        </div>
        <div class="navigation-logo">
            <a href="">
                <img src="images/doorlopen.gif" alt="Logo" class="navigation-logo-image" id="loop"
                     onload="setTimeout(stopLoop, 1000)">
            </a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link link-active">PORTFOLIO</a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">CONTACT</a>
        </div>
    </div>
</div>
<div class="page-content">
    <h1 class="page-content__head">portfolio</h1>
    <div class="work-container">
        <div class="work-item work-item__main-light">
            <h2 class="work-item-head">Voorbeeldtitel</h2>
            <div class="work-item-text">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."
            </div>
            <img src="https://via.placeholder.com/359x166?text=Placeholder" alt="" class="work-item__image">
        </div>
        <div class="work-item work-item__main work-item__right">
            <h2 class="work-item-head">Voorbeeldtitel</h2>
            <div class="work-item-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa
                qui officia deserunt mollit anim id est laborum."
            </div>
            <img src="https://via.placeholder.com/359x166?text=Placeholder" alt="" class="work-item__image">
        </div>

        <div class="work-item work-item__main-light">
            <h2 class="work-item-head">Voorbeeldtitel</h2>
            <div class="work-item-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa
                qui officia deserunt mollit anim id est laborum."
            </div>
            <img src="https://via.placeholder.com/359x166?text=Placeholder" alt="" class="work-item__image">
        </div>

    </div>


</div>

</body>
</html>
