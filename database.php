<?php
$servername = "localhost"
$ussername = "username";
$password = "password";
$conn = mysqli_connect($servername, $username, $password);
if(!conn) {
die("connection failed: " . mysqli_connect_error());
}
echo "connected successfully" ;
?>
