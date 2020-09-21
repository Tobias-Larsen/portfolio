<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Header</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/stylesHeader.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
    <header class="headerContainer">
        <a href="index.php" class="logo">tobias</a>

        <div class="menuClick">
            <div class="burgerLineContainer">
                <div class="burgerLine"></div>
            </div>
        </div>
    </header>


    <div class="blurOverlay hide"></div>

    <div class="burgermenuContainer">
        <div class="burgerMenu">
            <div class="crossClick">
                <div class="crossContainer">
                    <div class="crossLine"></div>
                </div>
            </div>

            <div>
                <a href="index.php">Hjem</a>
                <a href="#">Om mig</a>
                <a href="webudvikler.php">Webudvikling</a>
                <a href="#">Film</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    $(function () {
        $(".menuClick").click(function () {
            if ($(".burgerMenu").hasClass("transform")){
                hideMenu();
            } else {
                showMenu();
            }
        });

        $(".crossClick, .blurOverlay").click(function () {
            if ($(".burgerMenu").hasClass("transform")){
                hideMenu();
            } else {
                showMenu();
            }
        });

        function showMenu() {
            $(".blurOverlay").fadeIn(200);
            $(".burgerMenu").addClass("transform");
            //Til at deaktivere scroll, kan hurtigt aktiveres
            // $("html").css("overflow-y", "hidden");
        }

        function hideMenu() {
            $(".blurOverlay").fadeOut(300);
            $(".burgerMenu").removeClass("transform");
            //Til at aktivere scroll igen, hvis scroll bliver deaktiveret ved menu visning
            // $("html").css("overflow-y", "scroll")
        }
    });

</script>
</body>
</html>