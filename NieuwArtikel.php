<?php

    include "KlantenDB.php";

    $query = "INSERT INTO tblartikel (Artikelgroep, Verpakking, Inhoud, Omschrijving, btw_code, emballage, prijs) VALUES (?,?,?,?,?,?,?);";

    $getData = $database->prepare($query);
    $data = array("BLUERAY", "doos", 12, "The Incredibles", 3, 0, 12.35);

    try {
      $getData->execute($data);
      echo "<br />" . "Query uitgevoerd";
    } 
    catch (PDOException $th) {
        echo "<br />" . "Data niet opgehaald";
    }



?>