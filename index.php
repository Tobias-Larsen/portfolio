<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Tobias K. Larsen - Webudvikling og film</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesIndex.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Indsætter favicon -->
    <link rel="icon" type="image/png" href="img/favicon1.png"/>
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<?php
include 'header.php';
?>

<section class="nr1">
    <div class="circleContainer">
        <div class="circleClip">
            <img src="img/tobias-index-mobile.png" alt="Billede af Tobias">
            <img src="img/tobias-index-pc.png" alt="Billede af Tobias">
        </div>
    </div>


    <div class="nameContainer">
        <h1>tobias kozak larsen</h1>
        <p>webudvikling & film</p>
        <a href="#" class="button-bg-sky">om mig</a>
        <a href="pdf/CV-TobiasK.Larsen.pdf" class="cvDownload button-bg-sky" target="_blank">mit CV</a>
    </div>
</section>

<section class="nr2">
    <div class="infoContainer">
        <h6>Mobile-first responsive hjemmesider</h6>
        <p>Den nye standard inden for hjemmesider</p>
        <a href="webudvikler.php" class="button-bg-sky">webudvikling</a>
    </div>
    
    <div class="resp-screens">
        <div class="mobile">
            <img src="img/mobileFrame1.png" alt="Hjemmesider vist på mobil">
            <img src="img/mobileFrame2.png" alt="Hjemmesider vist på mobil">
            <div class="mobileSitesContainer">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="pc">
            <img src="img/laptopFrame1.png" alt="Hjemmesider vist på computer">
            <img src="img/laptopFrame2.png" alt="Hjemmesider vist på computer">
            <div class="pcSitesContainer">
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="nr3">
    <div class="image"></div>
    <div class="infoContainer">
        <div>
            <h6>Film</h6>
            <div>
                <h6>planlægning</h6>
                <h6>optagelse</h6>
                <h6>redigering</h6>
                <h6>planlægning</h6>
            </div>
        </div>
        <p>Narrativ dramafilm, blæret musikvideo eller
            <br>informerende reklamefilm? Jeg vil være med!</p>
        <a href="film.php" class="button-bg-sky">film & video</a>
    </div>
</section>


<?php
include 'footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(function () {

    });

</script>
</body>
</html>