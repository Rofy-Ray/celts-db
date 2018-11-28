<?php

include '../config/open_connect.php';

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if (isset($_POST['Add_Rec'])) {
$sql = "INSERT INTO std_lab_staff (First_Name, Last_Name, Labor_Pos, Role) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("ssss", $_POST['first_name'], $_POST['last_name'], $_POST['lab_pos'], $_POST['role']);
}

if ($stmt->execute() === TRUE) {
  header('Location: ../page/add_std_lab_success.php');
}
else {
    echo "Error: " . $sql . "<br>" . $link->connect_error;
}

include '../config/close_connect.php';

?>
