<?php
session_start();
?>
   <html>
    <head>
        <title>
            
        </title>
        <link rel="stylesheet" type="text/css" href="post.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>
    <body>
       
        <div class="logo1">
            <a href="#"><img src="logo3.png" id="logo11"></a>
        </div>
        <div class="logo" id="immg">
            <a href="#" ><img src="logo2.png"  id="logo111"></a>
        </div>
        <img src="logo6.png" id="commlogo">
        <p id="college">COLLEGE</p>
        <form method="post" action="post.php" enctype="multipart/form-data">
        <div class="post">
            <p id="heading" ><?php echo $_SESSION['user']?> Create a Post </p>
            <textarea name="text" id="desc" placeholder="enter post details!!"></textarea>
            <a href="#"> <p id="uimg"> <input type="file" name="image" id="submit" > </p> </a>
            <a href="#"> <p id="uimg2"> <input type="submit" name="post" id="submit" value="upload"></p> </a>
            <select id="select" name="type" >
                <option value="Education">Education</option>
                <option value="Entertainment">Entertainment</option>
                <option value="General knowledge">General Knowledge</option>
            </select>
        </div>
        </form>
        <script>
            $(function(){
              $('#logo11').slideUp(0).slideDown(600);
                $('#logo111').slideUp(0).delay(1000).slideDown(600);
              });
        </script>
    </body>
</html>