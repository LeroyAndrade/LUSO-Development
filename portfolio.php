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
            <a href="about.php" class="navigation-link">OVER ONS</a>
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
            <h2 class="work-item-head">Be the best</h2>
            <div class="work-item-text">
                Deze poster is gemaakt voor een bedrijf waarvan het doel was om in de komende
                periode, 64 medewerkers te hebben werken op een vestiging. Als ze dat was gelukt dan waren ze de
                grootste vestiging van allemaal. Wij besloten Micheal Jordan op de poster te zetten met het nummer 64 en
                niet zijn originele nummer 23. Dit was een verwijzing naar het doelnummer 64. Verder hadden we de tekst
                erbij gezet ‘be the best, become the biggest’.
            </div>
            <img src="images/Mockup-POster-sam.jpg" alt="" class="work-item__image">
        </div>
        <div class="work-item work-item__main work-item__right">
            <h2 class="work-item-head">Logo planet visum</h2>
            <div class="work-item-text">
                Dit is een logo dat ontworpen is voor het bedrijf Planet Visum dit bedrijf bied visums aan voor het
                buitenland. De voorkeuren voor de huisstijl waren blauw, zakelijk en een ruimte gevoel erbij want
                bedrijf vond dit staan voor vrijheid. De klant was erg blij met het logo en heeft nu een prachtig logo
                die zichtbaar is op al het bedrijf hun producten.
            </div>
            <img src="images/Mockup-logo-ferdy.jpg" alt="" class="work-item__image">
        </div>

        <div class="work-item work-item__main-light">
            <h2 class="work-item-head">Poster template</h2>
            <div class="work-item-text">Dit project was voor een klant die graag een universele poster template wou voor
                zijn opkomende bedrijf. De klant had enkel wat kleuren die hij mooi eruit vond zien. Met deze informatie
                hebben wij een strakke poster template neer gezet die makkelijk te bewerken is en handig is voor alle
                opkomende evenementen van het bedrijf
            </div>
            <img src="images/Mockup-poster-ferdy.jpg" alt="" class="work-item__image">
        </div>

    </div>


</div>

</body>
</html>
