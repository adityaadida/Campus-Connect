<?php
    session_start();
    //copnnec to the database
    $db = mysqli_connect("localhost","root","","cc");
    //get all the submitted data from the form
    $image = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); //$_FILES['image']['name'];
    $text = $_POST['text'];
    $type = $_POST['type'];
    //echo $text." ".$type;
    $user = $_SESSION['user'];
    $sql = "INSERT INTO post (username,description,image) VALUES ('$user','$text','$image')";
    mysqli_query($db,$sql);//stores the data
    include 'mainpagephp.php';
?>