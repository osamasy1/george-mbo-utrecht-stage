<?php
include("./connect_db.php");

$student = $_POST["student"];
$begleider = $_POST["begleider"];
$vak = $_POST["vak"];
$cijfer = $_POST["cijfer"];
$id = $_POST["id"];



$sql = "UPDATE `voortgang` SET student = \"$student\", begleider = \"$begleider\", vak = \"$vak\", cijfer = \"$cijfer\" WHERE id = $id";
// $sql = "UPDATE `voortgang` SET `id`=[value-1],`student`=[value-2],`cijfer`=[value-3],`begleider`=[value-4],`vak`=[value-5] WHERE 1";
$result = mysqli_query($conn, $sql);
// $conn->prepare($sql);
// $conn->bindParam();
// $conn->execute()
header("location:./index.php?content=studenten");



?>