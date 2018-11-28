<?php
include '../include/_header.php';
include '../operate/session.php';
include '../include/sub_header.php';
include '../config/open_connect.php';

$id = $_GET['id'];
mysqli_select_db($link, 'celts') or die(mysqli_error());

$sql = "DELETE FROM staff WHERE Staff_ID = $id";
$result = mysqli_query($link, $sql);

if (!$result) {
      echo "Could not successfully run query ($sql) from DB: " . mysqli_connect_error();
      exit;
}
  else {
      header('Location: del_staff_success.php');
}

include '../config/close_connect.php';
include '../include/_footer.php';

?>
