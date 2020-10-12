<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Tobias K. Larsen - Webudvikling og film</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/stylesIndex.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="img/favicon1.png"/>
</head>

<body>

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
        <a href="omMig.php" class="button-bg-sky">om mig</a>
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