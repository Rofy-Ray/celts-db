<?php

include '../config/open_connect.php';

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if (isset($_POST['SignUp']) and $_POST['pword'] === $_POST['confirm_pword']) {
$hash = password_hash($_POST['confirm_pword'], PASSWORD_DEFAULT);
$sql = "INSERT INTO login (First_Name, Last_Name, Username, Email, Password) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($link, $sql);
$stmt->bind_param("sssss", $_POST['first_name'], $_POST['last_name'], $_POST['user_name'], $_POST['email'], $hash);
// $stmt->execute();
}

if ($stmt->execute() === TRUE) {
    header('Location: ../page/signup_success.php');
}
else {
    echo "Error: " . $sql . "<br>" . $link->connect_error;
}

include '../config/close_connect.php';

?>
