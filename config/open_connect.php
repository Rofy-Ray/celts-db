<?php
/* I got this block of code from http://php.net/manual/en/function.mysqli-connect.php */

$servername = "localhost";
$username = "celts";
$password = "Uw0Hujicaxr@c";
$dbname = "celts";

/* Connect to the DB */
$link = mysqli_connect($servername, $username, $password, $dbname);

/*Did the DB connect?*/
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/* Message confirming connection details */
// echo "SUCCESS: MySQL DB Connected!" . PHP_EOL;
// echo "<br>" . PHP_EOL;
// echo "Host information: " . mysqli_get_host_info($link) . "." . PHP_EOL;

?>
