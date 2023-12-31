<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projekt x-kom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="cHeader">
        <a href="main.php"><img class="logo" src="Icons/Logo.jpg"></a>
        <div class="searchBoxContainer">
            <input type="text" placeholder="Wpisz czego szukasz...">
            <img class="iconSearch" src="Icons/Search.png">
        </div>
        <div id="iconContainer">
            <img class="icon" src="Icons/Support.png"><span>Pomoc</span></img>
        </div>
        <div class="verticalBreak"></div>
        <div id="iconContainer">
                <img class="icon" src="Icons/Account.png"> <a href="logowanie.php">
                    <?php
                        include 'conn.php';
                        session_start();

                        if(isset($_SESSION['login']) != null) {
                            echo $_SESSION['login'];
                        } else {
                            echo "Twoje Konto";
                        }
                    ?>
                </img>
            </a>
        </div>
        <div id="iconContainer">
            <img class="icon" src="Icons/Favorites.png">Twoje listy</img>
        </div>
        <div id="iconContainer">
            <img class="icon" src="Icons/Cart.png">Koszyk</img>
        </div>
    </div>

    <div id="banerContainer">
        <img id="baner" class="baner" src="Icons/baner1.png"></div>
        <script src="script.js"></script>
    </div>
    <div id="banerElementContainer">
        <div class="banerElement"> <b>Wyprzedaż z rabatami do 60%</b> </div>
        <div class="banerElement"> Wykorzystaj budżet firmy </div>
        <div class="banerElement"> Laptop dla nauczyciela </div>
    </div>

    <hr>


    <div id="boxContainer">
        <div class="boxElement">
            <p> <b> un.Box </b> </p>
            <img src="Icons/Box.png" height="10px"> 
            <h3> Codziennie losuj 3 zniżki </h3>
            <span> W boxach znajdziesz produkty <br> nawet za 1 zł </span>
            <div class="discount"> Losuj zniżki </div>
        </div>
        <div class="recommendedElement"> </div>
    </div>
</body>
</html>
