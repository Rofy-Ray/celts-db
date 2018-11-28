<?php

include '../config/open_connect.php';
// include '../page/edit_std_staff.php';

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

if (isset($_POST['Add_Rec'])) {
$sql_update_query = "UPDATE std_lab_staff
                    SET First_Name = \"" .$_POST["first_name"]. "\",
                    Last_Name = \"" .$_POST["last_name"]. "\",
                    Labor_Pos = \"" .$_POST["lab_pos"]. "\",
                    Role = \"" .$_POST["role"]. "\"
                    WHERE Std_Staff_ID = " .$_POST["id"]. ";";
}

if (mysqli_query($link, $sql_update_query)) {
  header('Location: ../page/update_std_lab_success.php');
}
else {
    echo "Error: " . $sql_update_query . "<br>" . $link->connect_error;
}

include '../config/close_connect.php';

?>
