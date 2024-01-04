<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Logowanie</title>
        <link rel="stylesheet" href="logowanieStyle.css">
    </head>

    <body>
    <div id="cHeader">
        <a href="main.php"><img class="logo" src="Icons/Logo.jpg"></a>
    </div>
        <hr>
        <div id="logowanieContainer">
            <div class="logowanie"> 
                <h2>Zaloguj się</h2>
                <form action="logowanie.php" method="POST">
                    <input type="text" name="login" placeholder="Login">
                    <input type="password" name="pass" placeholder="hasło">
                    <input class="send" type="submit" name="send" value="Zaloguj się">
                </form>
             </div>
             <div class="rejestracja">       
                <h1>Nie masz konta?</h1><br>
                <a href="register.php"><h3 class ="send">Zarejestruj się</h3></a><br>
                <h3>Dlaczego warto mieć konto w x‑komie</h3>
                <ul class="customList">
                    <li class="list"><img src="Icons\Zamawiaj.svg">
                    <span>Zamawiaj szybciej</span>
                    </li>
                    <li class="list"><img src="Icons\Sprawdzaj.svg">
                    <span>Sprawdzaj poprzednie zamówienia</span>
                    </li>
                    <li class="list"><img src="Icons\Sledz.svg">
                    <span>Śledź status zamówienia</span>
                    </li>
                    <li class="list"><img src="Icons\Korzystaj.svg">
                    <span>Korzystaj z rabatów i promocji</span>
                    </li>
                </ul>
            </div>
             <?php
                include 'conn.php';

                session_Start();

                $username = "";
                $password = "";

                    if(isset($_SESSION['login']) != null) {
                        header("Location: userDetails.php");
                        exit();
                    } else {
                        if($_SERVER["REQUEST_METHOD"] == "POST") {
                            if(isset($_POST['login']) && isset($_POST['pass'])) {
                                $username = $_POST['login'];
                                $password = $_POST['pass'];
                            }
        
                            $sql = "SELECT * FROM user WHERE name = '$username'";
                            $result = $conn->query($sql);
        
                            if($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $hashedPassword = $row['pass'];
        
                                if(password_verify($password, $hashedPassword)) {
                                    $_SESSION['login'] = $username;
                                    header("Location: userDetails.php");
                                } else {
                                    echo "Niepoprawne hasło";
                                }
                            } else {
                                echo "Użytkownik nie istnieje";
                        }
                    }
                }
             ?>
    </body>
</html>
