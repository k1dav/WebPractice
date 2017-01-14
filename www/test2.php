<?php
$servername = "localhost";
$username = "sa";
$password = "!password1f23";
$dbname = "rd";

$link = new mysqli($servername, $username, $password, $dbname);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysqli_close($link); 
?>
