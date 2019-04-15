<?php
$con = mysqli_connect("localhost","root","","image");
$name = 'sammy';
$id = 4;
$query = "create table $nmae.$id(id int(255),value int(30),primary key(id))";
mysqli_query($con,$query);
?>