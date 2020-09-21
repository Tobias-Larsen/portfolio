<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesTest.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->

<?php
include 'header.php';
?>

<p class="sentence">Krokodille <br></br>Zoo</p>
<br>



<a href="pdf/CV-TobiasK.Larsen.pdf" target="_blank">Download the pdf</a>





<div class="testClip"></div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(function () {

        const textClass = $(".sentence").attr('class');
        const testVariable = $("."+ textClass +"").text();
        const textLength = testVariable.length;
        let counter = 0;

        function writeOut(){
            if (counter == textLength){
                clearInterval(self);
            } else {
                counter = parseInt(counter) + 1;
                $("." + textClass + "").text(testVariable.slice(0, counter));
            }
        }

        let name = setInterval(function () {
            writeOut();
        }, 70);

    });




</script>
</body>
</html>