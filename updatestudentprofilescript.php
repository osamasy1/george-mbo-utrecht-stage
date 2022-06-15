<?php
include("./connect_db.php");

$voornaam = $_POST["voornaam"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$achternaam = $_POST["achternaam"];
$mobiel = $_POST["cijfer"];
$email = $_POST["email"];
$woonplaats = $_POST["woonplaats"];
$straat = $_POST["straat"];
$postcode = $_POST["postcode"];
$id = $_POST["id"];



$sql = "UPDATE `student` SET voornaam = \"$voornaam\", tussenvoegsel = \"$tussenvoegsel\", achternaam = \"$achternaam\", mobiel = \"$mobiel\", email = \"$email\", woonplaats = \"$woonplaats\", straat = \"$straat\", postcode = \"$postcode\" WHERE id = $id";
// $sql = "UPDATE `voortgang` SET `id`=[value-1],`student`=[value-2],`cijfer`=[value-3],`begleider`=[value-4],`vak`=[value-5] WHERE 1";
$result = mysqli_query($conn, $sql);
// $conn->prepare($sql);
// $conn->bindParam();
// $conn->execute()
header("location:./index.php?content=Studentprofile");



?>