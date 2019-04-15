<?php
// Create connection
session_start();    
$con = mysqli_connect("localhost","root","","cc");
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$un = $_POST["sid"];
$pd = $_POST["password"];

$sql = "SELECT username, branch, password, sid, year FROM signup where sid='$un'";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
       $pass = $row["password"];
	   $name = $row["username"];
    }
if($pass == $pd){
    $_SESSION['user'] = $name;
    $_SESSION['userid'] = $un;	
    include 'mainpagephp.php';
}
?>