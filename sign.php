<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cc";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "hello world---1";
if(isset($_POST['submit']))
{
    echo "hello world---2";
$username = $_POST['username'];
$branch = $_POST['branch'];
$sid = $_POST['sid'];
$password = $_POST['password'];
$year = $_POST['year'];
$gender = $_POST['gender'];
    $sql="insert into signup (username,branch,sid,password,year,gender) values ('$username','$branch','$sid','$password','$year','$gender')";
	mysqli_query($con, $sql);
header('Location: mainpage.html');
}
?>