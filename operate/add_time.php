<?php

include '../config/open_connect.php';

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = '';

if (isset($_POST['Add_Rec'], $_POST['vol_strt_time'], $_POST['vol_end_time'])) {

$strStart = $_POST['vol_strt_time'];
$strEnd   = $_POST['vol_end_time'];
$dteStart = new DateTime($strStart);
$dteEnd   = new DateTime($strEnd);
$dteDiff  = $dteStart->diff($dteEnd);
$date_insert = $dteDiff->format('%H:%I:%S');

$sql = "INSERT INTO happened (First_Name, Last_Name, Prog_ID, Vol_Date, Vol_Hours) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("sssss", $_POST['vol_first_name'], $_POST['vol_last_name'], $_POST['vol_prog'], $_POST['vol_date'], $date_insert);
}

if (isset($stmt) and $stmt->execute() === TRUE) {
  header('Location: ../page/add_time_success.php');
}
else {
    echo "Error: " . $sql . "<br>" . $link->connect_error;
}

include '../config/close_connect.php';

?>
