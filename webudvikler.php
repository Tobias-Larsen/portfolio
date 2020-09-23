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
    <link href="css/stylesWebudvikler.css" rel="stylesheet" type="text/css">
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

<section class="imageTop">
    <div class="infoContainer">
        <h1>Webudvikling</h1>
        <div class="noOpacity" id="typeOutHead">Her kan ses et udvalg af de hjemmesider jeg har været med til at udtænke og udvikle</div>
    </div>
</section>

<section class="skillsSection">
    <div class="fadeOut top"></div>
    <h3 class="text-center my-auto font-weight-bold">Mine værktøjer</h3>
    <div class="blueLine"></div>
    <div class="skillsContainer">
        <div>
            <div class="skill">
                <div class="skillImage html"></div>
            </div>

            <div class="skill">
                <div class="skillImage scss"></div>
            </div>

            <div class="skill">
                <div class="skillImage java"></div>
            </div>

            <div class="skill">
                <div class="skillImage jquery"></div>
            </div>

            <div class="skill">
                <div class="skillImage gulp"></div>
            </div>

            <div class="skill">
                <div class="skillImage github"></div>
            </div>

            <div class="skill">
                <div class="skillImage bootstrap"></div>
            </div>

            <div class="skill">
                <div class="skillImage html"></div>
            </div>
        </div>
    </div>
    <div class="fadeOut bottom"></div>
    <p class="text-center mt-auto">Klik på logoerne nedenunder, for at se mine projekter</p>
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

<section class="projectPreview project3">
    <div class="imageContainer noOpacity">
        <div class="mobileSite">
            <img src="img/webudvikler/cykleboersenMobile.jpg" alt="Hjemmesider vist på mobil">
            <img src="img/webudvikler/cykleboersenMobile1.jpg" alt="Hjemmesider vist på mobil">
        </div>

        <div class="pcSite">
            <img src="img/webudvikler/cykleboersenPC.jpg" alt="Hjemmesider vist på computer">
            <img src="img/webudvikler/cykleboersenPC1.jpg" alt="Hjemmesider vist på computer">
        </div>
    </div>

    <div class="infoContainer">
        <img class="project3 centered" src="img/cykleboersenLogo.png" alt="Logo for Krokodille Zoo">

        <div class="info noOpacity">
            <div><p>Kunde</p><p class="fact1 noOpacity">CykleBørsen</p></div>
            <div><p>Færdiggjort</p><p class="fact2 noOpacity">Februar 2020</p></div>
            <div><p>Målgruppe</p><p class="fact3 noOpacity">Elcykel 55 - 65 år  /  Mountainbike 35 - 55 år</p></div>
            <p class="noOpacity">
                CykleBørsen er en lokal cykelforretning i Nykøbing F. med en historie der rækker næsten 25 år tilbage. Ejeren Jan kunne hurtigt fortælle os, at elcykler og mountainbikes, er de cykler der sælger mest. Herfra udarbejdede vi målgrupper og personas. Hjemmesiden er tiltænkt til hele CykleBørsens kundegruppe, men der bliver taget højde for målgrupperne, ved at henvende sig til dem i starten, med en karrusel, der fremviser elcykler og mountainbikes.
                <br>
                <br>
                Det er svært at inkludere mit tidligere arbejde, da jeg allerede nu har en masse ting, jeg ville have gjort anderledes. I dette projekt fik vi introduceret jQuery for første gang, og jeg har her lavet header og forside.
                <br>
                <br>
                Se siden <a href="https://tobiaskozaklarsen.dk/cykleboersen/" target="_blank">her</a>.
            </p>
        </div>
    </div>
</section>

<section class="projectPreview project4">
    <div class="imageContainer noOpacity">
        <div class="mobileSite">
            <img src="img/webudvikler/oVandMobile.jpg" alt="Hjemmesider vist på mobil">
            <img src="img/webudvikler/oVandMobile1.jpg" alt="Hjemmesider vist på mobil">
        </div>

        <div class="pcSite">
            <img src="img/webudvikler/oVandPC.jpg" alt="Hjemmesider vist på computer">
            <img src="img/webudvikler/oVandPC1.jpg" alt="Hjemmesider vist på computer">
        </div>
    </div>

    <div class="infoContainer">
        <img class="project4 centered" src="img/ovandLogo.png" alt="Logo for Krokodille Zoo">

        <div class="info noOpacity">
            <div><p>Kunde</p><p class="fact1 noOpacity">Ø vand (fiktiv)</p></div>
            <div><p>Færdiggjort</p><p class="fact2 noOpacity">November 2019</p></div>
            <div><p>Målgruppe</p><p class="fact3 noOpacity">16 - 25 årige under uddannelse</p></div>
            <p class="noOpacity">
                Opgaven lød på at opfinde et koncept til at brande vandflasker. Med utallige billeder af plastik i havene, var det ikke den klassiske 2 kroners vand fra Netto, vi valgte som vores produkt. Genbrugelige drikkedunke, der kan byttes til en fyldt i en automat, på den uddannelse man går på. På den måde slipper man for at skulle vaske og fylde sin egen op, og man er fri for den dårlige samvittighed ved at drikke vand på flaske.
                <br>
                <br>
                Når det kommer til hjemmesiden, så er vi her helt tilbage til, at jeg kun havde kendt html og css i 4 måneder. Alligevel bliver jeg altid lidt glad når jeg ser den her, fordi den opfører sig godt i media queries, og den hover effekt der på smagsvarianterne, er en sjov detalje, og hvem ved hvordan den side havde set ud hvis jeg havde kendt til jQuery.
                <br>
                <br>
                Jeg har lavet smagsvælgeren til Ø vand hjemmeside, som kan ses <a href="https://tobiaskozaklarsen.dk/øvand/smag" target="_blank">her</a>.
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
        let textId = 0;
        let textVariable = 0;
        let textLength;
        let counter = 0;

        function writeOutHeader(){
            textLength = textVariable.length;

            if (counter == textLength){
                clearInterval(self);
            } else {
                counter = parseInt(counter) + 1;
                $(textId) .text(textVariable.slice(0, counter)) .removeClass("noOpacity");
                console.log(1);
            }
        }

        setTimeout(function () {
            textId = "#typeOutHead";
            textVariable = $(textId).text();


            let interval = setInterval(function () {
                writeOutHeader();
            }, 30);
        }, 400);



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