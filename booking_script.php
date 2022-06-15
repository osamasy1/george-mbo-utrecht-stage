<?php
//var_dump($_POST); exit;
include("./connect_db.php");
include("./functions.php");
session_start();
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$total_guest = ($_POST["guest"]);

$date_res = ($_POST["date_res"]);

$time = ($_POST["time"]);

$suggestions = $_POST["suggestions"];



$qurey = "INSERT INTO `reservation` (total_guest,date,time,disc,email) VALUES (?,?,?,?,?)";
echo 'on this date '.$date_res." and this on time ".$time."<br>";
$stmt = mysqli_prepare($conn, $qurey);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "issss", $total_guest, $date_res, $time, $suggestions,$_SESSION['email']);

    $result = mysqli_stmt_execute($stmt);
    if ($result) {
        echo "we get your booking ".'<br>';
    } else {
        echo "there is a problem in the database fix it frist pls";
        mysqli_rollback($conn);
    }
} else {
    echo "fix the query first";
    mysqli_rollback($conn);
    // always query error
}
mysqli_commit($conn);

header("location:./index.php?content=home");