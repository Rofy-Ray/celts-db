<?php
include '../config/open_connect.php';
session_start();

function login($myusername,$mypassword){
    global $link;
    $query = "SELECT * FROM profile WHERE Username = '$myusername'";

    $result_set = mysqli_query($link,$query);
        if (mysqli_num_rows($result_set) === 1) {
            $row = mysqli_fetch_assoc($result_set);
            if (password_verify($mypassword, $row['Password'])) {
                $_SESSION['login_user'] = $row['First_Name'];
                header('Location: ../page/dashboard.php');
            }else{
                echo " <script>alert('Password is incorrect.');document.location='../index.php'</script> ";
            }
        }else{
            echo " <script>alert('No username found: {$myusername}.');document.location='../index.php'</script> ";
        }
}

$myusername = mysqli_real_escape_string ($link, $_POST['username']);
$mypassword= mysqli_real_escape_string ($link, $_POST['password']);
login($myusername,$mypassword);

include '../config/close_connect.php';
?>
