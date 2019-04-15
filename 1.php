<?php
    $con = mysqli_connect("localhost","root","","image");
    if(mysqli_connect_errno())
    {
        echo "failed to connect:".mysqli_connect_error();
    }
    $imagecontent = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    //get the contrent of the image then add slashes to it
    $imagetmp = $_POST['text'];
    //addslashes(file_get_contents($_FILES['image']['tmp_name']));
    //insert the image name and image content in image table
    $insertimage = "INSERT INTO image VALUES('$imagetmp','$imagecontent')";
    //mysqli_query($con,$insertimage);
    mysqli_query($con,$insertimage);
?>