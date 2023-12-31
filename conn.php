<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = ""; 
    $db = "xkom";

    $conn = new mysqli($dbHost, $dbUser, $dbPass, $db) or die("Błąd połączenia z bazą danych ".$conn->error);
    return $conn;

    function CloseConn($conn) {
        $conn->close();
    }
?>