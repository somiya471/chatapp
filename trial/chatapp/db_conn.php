<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "harmit";

$conn = mysqli_connect($servername, $username, $password, $database) or die("Sorry failed to connect!". mysqli_connect_error());

?>