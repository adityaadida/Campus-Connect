<?php
if(!session_id())
{
    session_start();
}
$db = mysqli_connect("localhost","root","","cc");
$text = $_GET['discussion'];
$un = $_SESSION['userid'];
$id1 = $_GET['pid'];
echo $text." ".$un." ".$id1;
$sql = "insert into discussion(postid,sid,discussion) values ('$id1','$un','$text')";
mysqli_query($db,$sql);
echo '<html><body><form method = "get" action="discussionphp.php"><input name  = "postid" type = "hidden" value = "'.$id1.'"><input type = "submit" value = "Go Back"></body></html>';
//include 'discussionphp.php';
?>