<?php
require "../../../credentials__proyecto-login.php";
// Create connection
$conn = mysqli_connect($BBDD_CONFIG['HOST'], $BBDD_CONFIG['USERNAME'], $BBDD_CONFIG['PASSWORD'], $BBDD_CONFIG['DBNAME']);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>