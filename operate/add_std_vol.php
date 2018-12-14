<?php

include '../config/open_connect.php';

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if (isset($_POST['Add_Rec'])) {
$sql = "INSERT INTO std_vol (First_Name, Last_Name, Prog_ID) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("sss", $_POST['first_name'], $_POST['last_name'], $_POST['prog']);
}

if ($stmt->execute() === TRUE) {
  header('Location: ../page/add_std_vol_success.php');
}
else {
    echo "Error: " . $sql . "<br>" . $link->connect_error;
}

include '../config/close_connect.php';

?>
