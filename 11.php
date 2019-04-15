<html>
<head>
    <title>my sample html form</title>
    <style>
        #content{
            border-style: dashed;
            border-color: red;
            border-width: 5px;
            border-radius: 20px;
            color: red;
            width: 50%;
        }
        #img_div{
            border-style: dashed;
            border-width: 5px;
            border-color: chartreuse;
            align-content: center;
        }
        
        
        
    </style>
</head>
<body>
    <form action="1.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value="upload image"><br>
        <textarea name="text" placeholder="enter details of the image">
        </textarea>
        <input type="submit" name="submit"><br>
        
    </form>
    <div id="content">
        <?php
        $db = mysqli_connect("localhost","root","","image");
        $sql = "SELECT * FROM image";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';
            echo "<p>".$row['name']."</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>