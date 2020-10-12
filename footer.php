
<head>
    <link href="node_modules/@fortawesome/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="css/stylesFooter.css" rel="stylesheet" type="text/css">
    <link href="css/universalStyles.css" rel="stylesheet" type="text/css">
</head>

<body>


<footer>
    <div class="footerInfo">
        <div class="lineBlue"></div>
        <p>Hvis du har spørgsmål, eller vil vide mere</p>
        <a class="button-bg-sky clickable">kontakt mig</a>
    </div>
    <div class="imageContainer notClickable">
        <div class="footer-bg-mountain mountain1"></div>
        <div class="footer-bg-mountain mountain2"></div>
        <div class="footer-bg-mountain mountain3"></div>
        <div class="footer-bg-mountain mountain4"></div>
    </div>
    <div class="contactInfo hide notClickable">
        <a class="messengerInfo clickable" href="https://www.m.me/tobias.larsen.5209" target="_blank">
            <i class="fab fa-facebook-messenger"></i>
            <p>Tobias Kozak Larsen</p>
        </a>

        <a class="mailInfo clickable" href="mailto:tobiaskozaklarsen@hotmail.com" target="_blank">
            <i class="fas fa-envelope"></i>
            <p>tobiaskozaklarsen@hotmail.com</p>
        </a>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    let footerBgMountain = ".footer-bg-mountain";

    let mountain1 = document.querySelector(footerBgMountain + ".mountain1");
    let mountain2 = document.querySelector(footerBgMountain + ".mountain2");
    let mountain3 = document.querySelector(footerBgMountain + ".mountain3");
    let mountain4 = document.querySelector(footerBgMountain + ".mountain4");

    function showContact() {
        //Bjerge bevægelse
        mountain4.classList.add("animateMountain");
        setTimeout(() => {
            mountain3.classList.add("animateMountain");
            setTimeout(() => {
                mountain2.classList.add("animateMountain");
            }, 100)
        }, 100)

        //Får kontakt information op
        document.querySelector(".contactInfo").classList.remove("hide", "notClickable");

        //Fjerner knappen
        document.querySelector(".footerInfo").classList.add("hide");
    }

    document.querySelector(".footerInfo > .button-bg-sky").addEventListener("click", () => {
        showContact();
    })



    function hideContact() {
        mountain2.classList.remove("animateMountain");
        setTimeout(() => {
            mountain3.classList.remove("animateMountain");
            setTimeout(() => {
                mountain4.classList.remove("animateMountain");
            }, 100)
        }, 100)
    }
</script>
