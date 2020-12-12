<?php

    $dbhost='localhost';
    $user='root';
    $pass='';
    $dbname='klanten';

    try {
        $database = new PDO("mysql:host=$dbhost;dbname=$dbname", $user, $pass);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<br />" . "Verbinding gemaakt";
    } 
    catch (PDOException $th) {
        echo $th->getMessage();
        echo "<br />" . "Verbinding niet gemaakt";
    }

?>