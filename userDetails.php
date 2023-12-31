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

    <form action="userDetails.php" method="POST">
        <input class="send" type="submit" name="send" value="Wyloguj się">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            unset($_SESSION['login']);
            unset($_SESSION['pass']);
            session_destroy();
            header("Location: logowanie.php");
            exit();
        }
    ?>
</body>
</html>
