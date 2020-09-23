<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Webudvikling - Tobias K. Larsen</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!--    Bootstrap css-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesFilm.min.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">
    <link href="css/whiteHeader.css" rel="stylesheet" type="text/css">
    <link href="css/projectPreview.css" rel="stylesheet" type="text/css">

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

<section class="videoEditing">
    <!--    Rows background-->
    <div class="w-100 bg-rows bg-row1"></div>
    <div class="w-100 bg-rows bg-row2"></div>
    <div class="w-100 bg-rows bg-row3"></div>
    <div class="w-100 bg-rows bg-row4"></div>
    <div class="w-100 bg-rows bg-row5"></div>
    <div class="row1 w-100 bg-rows"></div>
    <div class="row2 w-100 bg-rows"></div>
    <div class="row3 w-100 bg-rows"></div>
    <div class="row4 w-100 bg-rows"></div>
    <div class="row5 w-100 bg-rows"></div>
    <div class="row6 w-100 bg-rows"></div>
    <div class="row7 w-100 bg-rows"></div>
    <div class="w-100 bg-rows bg-row6"></div>
    <div class="w-100 bg-rows bg-row7"></div>
    <div class="w-100 bg-rows bg-row8"></div>
    <div class="w-100 bg-rows bg-row9"></div>
    <div class="w-100 bg-rows bg-row10"></div>


    <!--    Film F-->
    <div class="textFilm fx row1 textFilmF w-55"></div>
    <div class="textFilm fx row2 textFilmF w-20"></div>
    <div class="textFilm fx row3 textFilmF w-20"></div>
    <div class="textFilm fx row4 textFilmF w-45"></div>
    <div class="textFilm fx row5 textFilmF w-20"></div>
    <div class="textFilm fx row6 textFilmF w-20"></div>
    <div class="textFilm fx row7 textFilmF w-20"></div>

    <!--    Film I-->
    <div class="textFilm fx row1 textFilmI1 w-45"></div>
    <div class="textFilm fx row2 textFilmI w-20"></div>
    <div class="textFilm fx row3 textFilmI w-20"></div>
    <div class="textFilm fx row4 textFilmI w-20"></div>
    <div class="textFilm fx row5 textFilmI w-20"></div>
    <div class="textFilm fx row6 textFilmI w-20"></div>
    <div class="textFilm fx row7 textFilmI1 w-45"></div>

    <!--    Film L-->
    <div class="textFilm fx row1 textFilmL w-20"></div>
    <div class="textFilm fx row2 textFilmL w-20"></div>
    <div class="textFilm fx row3 textFilmL w-20"></div>
    <div class="textFilm fx row4 textFilmL w-20"></div>
    <div class="textFilm fx row5 textFilmL w-20"></div>
    <div class="textFilm fx row6 textFilmL w-20"></div>
    <div class="textFilm fx row7 textFilmL w-55"></div>

    <!--    Film M-->
    <div class="textFilm fx row1 textFilmM w-30"></div>
    <div class="textFilm fx row1 textFilmM3 w-30"></div>
    <div class="textFilm fx row2 textFilmM w-51"></div>
    <div class="textFilm fx row2 textFilmM4 w-51"></div>
    <div class="textFilm fx row3 textFilmM w-20"></div>
    <div class="textFilm fx row3 textFilmM1 w-30"></div>
    <div class="textFilm fx row3 textFilmM5 w-20"></div>
    <div class="textFilm fx row4 textFilmM w-20"></div>
    <div class="textFilm fx row4 textFilmM2 w-10"></div>
    <div class="textFilm fx row4 textFilmM5 w-20"></div>
    <div class="textFilm fx row5 textFilmM w-20"></div>
    <div class="textFilm fx row5 textFilmM5 w-20"></div>
    <div class="textFilm fx row6 textFilmM w-20"></div>
    <div class="textFilm fx row6 textFilmM5 w-20"></div>
    <div class="textFilm fx row7 textFilmM w-20"></div>
    <div class="textFilm fx row7 textFilmM5 w-20"></div>


<!--    OG-->
    <!--    Film O-->
    <div class="secondGrid textOgO w-90">
        <div class="textOg fx row1 textOgO1 w-90 noOpacity"></div>
        <div class="textOg fx row2 textOgO1 w-20 noOpacity"></div>
        <div class="textOg fx row2 textOgO2 w-20 noOpacity"></div>
        <div class="textOg fx row3 textOgO1 w-20 noOpacity"></div>
        <div class="textOg fx row3 textOgO2 w-20 noOpacity"></div>
        <div class="textOg fx row4 textOgO1 w-20 noOpacity"></div>
        <div class="textOg fx row4 textOgO2 w-20 noOpacity"></div>
        <div class="textOg fx row5 textOgO1 w-20 noOpacity"></div>
        <div class="textOg fx row5 textOgO2 w-20 noOpacity"></div>
        <div class="textOg fx row6 textOgO1 w-20 noOpacity"></div>
        <div class="textOg fx row6 textOgO2 w-20 noOpacity"></div>
        <div class="textOg fx row7 textOgO1 w-90 noOpacity"></div>
    </div>

    <div class="secondGrid textOgG w-90">
        <div class="textOg fx row1 textOgG1 w-90 noOpacity"></div>
        <div class="textOg fx row2 textOgG1 w-20 noOpacity"></div>
        <div class="textOg fx row2 textOgG2 w-20 noOpacity"></div>
        <div class="textOg fx row3 textOgG1 w-20 noOpacity"></div>
        <div class="textOg fx row4 textOgG1 w-20 noOpacity"></div>
        <div class="textOg fx row4 textOgG3 w-45 noOpacity"></div>
        <div class="textOg fx row5 textOgG1 w-20 noOpacity"></div>
        <div class="textOg fx row5 textOgG2 w-20 noOpacity"></div>
        <div class="textOg fx row6 textOgG1 w-20 noOpacity"></div>
        <div class="textOg fx row6 textOgG2 w-20 noOpacity"></div>
        <div class="textOg fx row7 textOgG1 w-90 noOpacity"></div>
    </div>

<!--    VIDEO-->
    <!--        Film V-->
    <div class="textVideo fx row1 textVideoV1 w-20 noOpacity"></div>
    <div class="textVideo fx row1 textVideoV2 w-20 noOpacity"></div>
    <div class="textVideo fx row2 textVideoV3 w-20 noOpacity"></div>
    <div class="textVideo fx row2 textVideoV4 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoV5 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoV6 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoV7 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoV8 w-20 noOpacity"></div>
    <div class="textVideo fx row5 textVideoV9 w-40 noOpacity"></div>
    <div class="textVideo fx row6 textVideoV10 w-30 noOpacity"></div>
    <div class="textVideo fx row7 textVideoV11 w-20 noOpacity"></div>

    <!--        Film I-->
    <div class="textVideo fx row1 textVideoI1 w-45 noOpacity"></div>
    <div class="textVideo fx row2 textVideoI2 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoI2 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoI2 w-20 noOpacity"></div>
    <div class="textVideo fx row5 textVideoI2 w-20 noOpacity"></div>
    <div class="textVideo fx row6 textVideoI2 w-20 noOpacity"></div>
    <div class="textVideo fx row7 textVideoI1 w-45 noOpacity"></div>

    <!--        Film D-->
    <div class="textVideo fx row1 textVideoD1 w-45 noOpacity"></div>
    <div class="textVideo fx row2 textVideoD1 w-20 noOpacity"></div>
    <div class="textVideo fx row2 textVideoD2 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoD1 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoD3 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoD1 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoD3 w-20 noOpacity"></div>
    <div class="textVideo fx row5 textVideoD1 w-20 noOpacity"></div>
    <div class="textVideo fx row5 textVideoD3 w-20 noOpacity"></div>
    <div class="textVideo fx row6 textVideoD1 w-20 noOpacity"></div>
    <div class="textVideo fx row6 textVideoD2 w-20 noOpacity"></div>
    <div class="textVideo fx row7 textVideoD1 w-45 noOpacity"></div>

    <!--    Film E-->
    <div class="textVideo fx row1 textVideoE1 w-55 noOpacity"></div>
    <div class="textVideo fx row2 textVideoE1 w-20 noOpacity"></div>
    <div class="textVideo fx row3 textVideoE1 w-20 noOpacity"></div>
    <div class="textVideo fx row4 textVideoE1 w-45 noOpacity"></div>
    <div class="textVideo fx row5 textVideoE1 w-20 noOpacity"></div>
    <div class="textVideo fx row6 textVideoE1 w-20 noOpacity"></div>
    <div class="textVideo fx row7 textVideoE1 w-55 noOpacity"></div>

    <!--    Film O-->
    <div class="secondGrid textVideoO w-60">
        <div class="textVideo fx row1 textVideoO1 w-60 noOpacity"></div>
        <div class="textVideo fx row2 textVideoO1 w-20 noOpacity"></div>
        <div class="textVideo fx row2 textVideoO2 w-20 noOpacity"></div>
        <div class="textVideo fx row3 textVideoO1 w-20 noOpacity"></div>
        <div class="textVideo fx row3 textVideoO2 w-20 noOpacity"></div>
        <div class="textVideo fx row4 textVideoO1 w-20 noOpacity"></div>
        <div class="textVideo fx row4 textVideoO2 w-20 noOpacity"></div>
        <div class="textVideo fx row5 textVideoO1 w-20 noOpacity"></div>
        <div class="textVideo fx row5 textVideoO2 w-20 noOpacity"></div>
        <div class="textVideo fx row6 textVideoO1 w-20 noOpacity"></div>
        <div class="textVideo fx row6 textVideoO2 w-20 noOpacity"></div>
        <div class="textVideo fx row7 textVideoO1 w-60 noOpacity"></div>
    </div>
</section>

<section class="projectPreview project1">

    <div class="imageContainer noOpacity">
        <div class="mobileSite">
            <img src="img/webudvikler/krokZooMobile.jpg" alt="Hjemmesider vist på mobil">
            <img src="img/webudvikler/krokZooMobile1.jpg" alt="Hjemmesider vist på mobil">
        </div>

        <div class="pcSite">
            <img src="img/webudvikler/krokZooPC.jpg" alt="Hjemmesider vist på computer">
            <img src="img/webudvikler/krokZooPC1.jpg" alt="Hjemmesider vist på computer">
        </div>
    </div>

    <div class="infoContainer">
        <img class="project1 centered" src="img/krokLogo.png" alt="Logo for Krokodille Zoo">

        <div class="info noOpacity">
            <div><p>Kunde</p><p class="fact1 noOpacity">Krokodille Zoo</p></div>
            <div><p>Færdiggjort</p><p class="fact2 noOpacity">Juni 2020</p></div>
            <div><p>Målgruppe</p><p class="fact3 noOpacity">Forældre og børn 4 - 8 år</p></div>
            <p class="noOpacity">
                En lille zoo i Eskilstrup, der gerne vil ramme børnefamilierne lidt mere, end hvad de i forvejen gør. Dette var vores sommereksamen, hvor der både er hovedsiden, og en specifik hjemmeside til børnene, med blandt andet et interaktivt kort over zooen. Alt dette for at fremme Krokodille Zoos brand hos børnene, hvilket derefter vil smitte af på forældrene.
                <br>
                <br>
                Da vores projekter er gruppearbejde, kan jeg ikke tage æren for hele hjemmesiden. Jeg har lavet header, footer og forside som kan ses <a href="https://tobiaskozaklarsen.dk/krokodillezoo/" target="_blank">her</a>, samt det interaktive kort på børnesiden som kan ses <a href="https://tobiaskozaklarsen.dk/krokodillezoo/kids/interaktivtKort" target="_blank">her</a>.
            </p>
        </div>
    </div>
</section>

<section class="projectPreview project2">
    <div class="imageContainer right noOpacity">
        <div class="mobileSite">
            <img src="img/webudvikler/cssStyleMobile.jpg" alt="Hjemmesider vist på mobil">
            <img src="img/webudvikler/cssStyleMobile1.jpg" alt="Hjemmesider vist på mobil">
        </div>

        <div class="pcSite">
            <img src="img/webudvikler/cssStylePC.jpg" alt="Hjemmesider vist på computer">
            <img src="img/webudvikler/cssStylePC1.jpg" alt="Hjemmesider vist på computer">
        </div>
    </div>

    <div class="infoContainer">
        <img class="project2 centered" src="img/cssStyleLogo.png" alt="Logo for Krokodille Zoo">

        <div class="info noOpacity">
            <div><p>Kunde</p><p class="fact1 noOpacity">CSS Style (fiktiv)</p></div>
            <div><p>Færdiggjort</p><p class="fact2 noOpacity">April 2020</p></div>
            <div><p>Målgruppe</p><p class="fact3 noOpacity">Webudviklere</p></div>
            <p class="noOpacity">
                Vi fik til opgave at opfinde vores eget koncept til en t-shirt virksomhed, og her var det oplagt at bruge os selv som målgruppe. T-shirt designs der henvender sig til webudviklere, skal også have en hjemmeside, som en webudvikler føler sig hjemme på. Vi stødte dog på udfordringer, da dette var første gang vi blev introduceret til Wordpress, og skulle udarbejde hjemmesiden idet. Vi havde blandt andet problemer med links og opløsning på billeder, men jeg har inddraget den alligevel, fordi der er mange gode tanker bag og muligheden for at gå i 'dark mode' er både en lækker detalje, men også en feature med voksende popularitet på alverdens hjemmesider.
                <br>
                <br>

                Se siden <a href="https://tobiaskozaklarsen.dk/cssstyle/" target="_blank">her</a>.
            </p>
        </div>
    </div>
</section>




<?php
include 'footer.php';
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(function () {

        let filmClass = ".textFilm";
        let ogClass = ".textOg";
        let videoClass = ".textVideo";

        let currentClass = 0;
        let counterTop = 0;
        let reverseCounter = 0;

        function lettersOut() {
            let selectedDiv = $(currentClass + ":eq(" + counterTop + ")");
            let marginValue = selectedDiv.offset().left - selectedDiv.parent().offset().left;
            let marginValueVW = (marginValue / window.innerWidth) * 100;
            let newMarginValueVW = marginValueVW - 200 + "vw";
            selectedDiv.css("margin-left", newMarginValueVW);
            counterTop ++;
            setTimeout(function () {
                selectedDiv.removeClass("noOpacity");
            }, 300);
        }

        function lettersIn() {
            let selectedDiv = $(currentClass + ":eq(" + counterTop + ")");
            let marginValue = selectedDiv.offset().left - selectedDiv.parent().offset().left;
            let marginValueVW = (marginValue / window.innerWidth) * 100;
            let newMarginValueVW = marginValueVW + 200 + "vw";
            selectedDiv.css("margin-left", newMarginValueVW);
            counterTop --;
        }


        //For "film"
        function filmAnimationOut(){
            counterTop = 0;

            let lettersMoveFilm = setInterval(function () {
                currentClass = filmClass;

                let brickClassAmount = document.querySelectorAll(currentClass).length;

                if (counterTop === brickClassAmount){
                    clearInterval(lettersMoveFilm);
                } else {
                    lettersOut();
                }
            }, 25);
        }
        function filmAnimationIn(){
            currentClass = filmClass;
            counterTop = document.querySelectorAll(currentClass).length - 1;

            let lettersMoveFilm = setInterval(function () {
                currentClass = filmClass;

                if (counterTop === -1){
                    clearInterval(lettersMoveFilm);
                } else {
                    lettersIn();
                }
            }, 25);
        }

        // For "og"
        function ogAnimationOut(){
            counterTop = 0;

            let lettersMoveOg = setInterval(function () {
                currentClass = ogClass;

                let brickClassAmount = document.querySelectorAll(currentClass).length;

                if (counterTop === brickClassAmount){
                    clearInterval(lettersMoveOg);
                } else {
                    lettersOut();
                }
            }, 25);
        }
        function ogAnimationIn(){
            currentClass = ogClass;
            counterTop = document.querySelectorAll(currentClass).length - 1;

            let lettersMoveOg = setInterval(function () {
                currentClass = ogClass;

                if (counterTop === -1){
                    clearInterval(lettersMoveOg);
                } else {
                    lettersIn();
                }
            }, 25);
        }

        // For "video"
        function videoAnimationOut(){
            counterTop = 0;

            let lettersMoveVideo = setInterval(function () {
                currentClass = videoClass;

                let brickClassAmount = document.querySelectorAll(currentClass).length;

                if (counterTop === brickClassAmount){
                    clearInterval(lettersMoveVideo);
                } else {
                    lettersOut();
                }
            }, 25);
        }
        function videoAnimationIn(){
            currentClass = videoClass;
            counterTop = document.querySelectorAll(currentClass).length - 1;

            let lettersMoveVideo = setInterval(function () {
                currentClass = videoClass;

                if (counterTop === -1){
                    clearInterval(lettersMoveVideo);
                } else {
                    lettersIn();
                }
            }, 25);
        }


        //Hele animationen ved load
        ogAnimationOut();
        setTimeout(function () {
            videoAnimationOut();
        }, 1000);

        function loopTop() {
            setTimeout(function () {
                filmAnimationOut();
                setTimeout(function () {
                    ogAnimationIn();
                    setTimeout(function () {
                        ogAnimationOut();
                        setTimeout(function () {
                            videoAnimationIn();
                            setTimeout(function () {
                                videoAnimationOut();
                                setTimeout(function () {
                                    filmAnimationIn();
                                }, 1500);
                            }, 3000);
                        }, 1500);
                    }, 3000);
                }, 1500);
            }, 3000);
        }

        setTimeout(function () {
            loopTop();
            setInterval(loopTop, 14000);
        }, 500);




        let counterFacts = 0;
        let textLengthFacts = 0;
        let textVariableFacts = 0;
        let textIdFacts = 0;
        let selectedClass;
        let selectedSection;
        let factNumber = 0;

        function writeOutFactsTrigger() {
            factNumber = parseInt(factNumber) + 1;
            counterFacts = 0;
            textIdFacts = selectedSection + " .fact" + factNumber;
            textVariableFacts = $(textIdFacts).text();

            let interval  = setInterval(function () {
                textLengthFacts = textVariableFacts.length;

                if (counterFacts == textLengthFacts){
                    clearInterval(interval);
                } else {
                    counterFacts = parseInt(counterFacts) + 1;
                    $(textIdFacts) .text(textVariableFacts.slice(0, counterFacts)) .removeClass("noOpacity");
                }
            }, 50);
        }

        function hideOther(){
            $(".infoContainer > img:not(" + selectedClass + ")").addClass('centered');
            $("section > .infoContainer > .info:not(" + selectedSection + " > .infoContainer > .info)").addClass('noOpacity')
            $("section .info > p:not(" + selectedSection + " .info > p)").addClass('noOpacity');
            $("section > .imageContainer:not(" + selectedSection + " > .imageContainer)").addClass('noOpacity');
            $("section .info > div > p:nth-of-type(2):not(" + selectedSection + ".info > div > p:nth-of-type(2))").addClass('noOpacity');


        }


        $(".infoContainer > img.centered").click(function () {

            selectedClass = "." + $(this).attr('class').replace(" centered", "");
            $(selectedClass).removeClass('centered');
            selectedSection = "section" + selectedClass;

            //Deaktiver denne knap, og aktiver alle andre knapper
            $('.infoContainer > img' + selectedClass).addClass('notClickable');
            $('.infoContainer > img:not(.infoContainer > img' + selectedClass + ')').removeClass('notClickable');

            factNumber = 0;
            setTimeout(function () {
                $(selectedSection + " > .infoContainer > .info").removeClass('noOpacity');

                setTimeout(function () {
                    writeOutFactsTrigger();
                    setTimeout(function () {
                        writeOutFactsTrigger();
                        setTimeout(function () {
                            writeOutFactsTrigger();
                            setTimeout(function () {
                                $(selectedSection + " .info > p").removeClass('noOpacity');
                                $(selectedSection + " > .imageContainer").removeClass('noOpacity');
                            }, 1500)
                        }, 1000)
                    }, 1000)
                }, 500)

            }, 200);

            //Til at skjule de andre
            hideOther()
        });



    });

</script>
</body>
</html>