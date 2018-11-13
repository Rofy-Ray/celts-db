<?php
include '../config/open_connect.php';
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($link,"select First_Name from profile where First_Name = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['First_Name'];

if(!isset($_SESSION['login_user'])){
  header('Location: index.php');
}

include '../config/close_connect.php';
?>
