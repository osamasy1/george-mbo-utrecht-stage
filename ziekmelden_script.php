<?php
include("./connect_db.php");
include("./functions.php");



$Voornaam = sanitize($_POST ["Voornaam"]);
$Achternaam = sanitize($_POST ["Achternaam"]);
$opleiding = sanitize($_POST ["opleiding"]);
$ouder = sanitize($_POST ["ouder"]);
$Omschrijving = sanitize($_POST ["Omschrijving"]);

//met deze functie maken we contact met de mysql-server

$sql= "INSERT INTO `ziekmelden` (`id`, `Voornaam`, `Achternaam`, `opleiding`, `ouder`, `Omschrijving`) VALUES (NULL, '$Voornaam', '$Achternaam', '$opleiding', '$ouder', '$Omschrijving');";

mysqli_query($conn, $sql);

if($result) {
  $tekst ="Het opslaan is gelukt!";
} else { 

  $tekst= "Het opslaan is niet gelukt!"; 
}

header("Location: ./index.php?content=message&alert=ziekmelden-success");

?>
