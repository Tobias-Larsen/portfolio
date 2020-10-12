<!DOCTYPE html>

<html lang="da">

<head>
    <meta charset="utf-8">

    <title>Header</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/stylesHeader.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

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
                <a href="omMig.php">Om mig</a>
                <a href="webudvikler.php">Webudvikling</a>
                <a href="film.php">Film</a>
                <a class="contactBurger clickable">Kontakt</a>
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

        document.querySelector(".contactBurger").addEventListener("click", () => {
            hideMenu();
            window.scrollTo(0,document.body.scrollHeight);
            setTimeout(() => {
                document.querySelector(".footerInfo > .button-bg-sky").click();
            }, 150);
        })
    });



</script>
</body>
</html>