<?php
$con = mysqli_connect("localhost","root","","image");
$query = "insert into sample(id int(255),value int(30),primary key(id))";
mysqli_query($con,$query);
for($i = 1;$i<=200;$i++)
{
    $query = "insert into sample values('$i','0')";
    mysqli_query($con,$query);
}
?>