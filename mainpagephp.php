<?php
if(!session_id())
{
 session_start();   
}
?>
   <html>
    <head>
        <title>
            account | page
        </title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="mainpage.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div>
            <ul>
                <li><a href="postmain.php"> Create post </a></li>
                <li><a href="#">Profile </a>
                    <ul>
                        <li> <a href="#"> settings </a> </li>
                        <li> <a href="#"> My Account </a> </li>
                        <li> <a href="#"> Log Out </a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    <div class="logo1">
        <a href="home.html"><img src="logo3.png" id="logo11"></a>
    </div>
    <div class="logo" id="immg">
        <a href="#" ><img src="logo2.png"  id="logo111"></a>
    </div>
    <div class="search-box">
        <input class="search-txt" type="text" name="" placeholder="type to search">
        <a href="#" class="search-btn">
            <i class="far fa-search"></i>
        </a>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="submit" name="submit">
        </form>
    </div>
    <div class="posts">
        <p id="post">Posts</p>
        <?php
        $db = mysqli_connect("localhost","root","","cc");
        $sql = "SELECT postid,description,image FROM post";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result)){
            echo "<div id='img_div'>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';
            echo "<p id= 'description'>".$row['description']."</p>";
            $pid = $row['postid'];
            echo '<form action="discussionphp.php" method="get" enctype="multipart/form-data">';
            echo '<input type="hidden" name="postid" value = "'.$pid.'">';
            echo '<input type ="submit" value ="Add Discussion">';
            echo '</form>';
            echo "</div>";
        }
        //$sql = "";
        ?>
        
    </div>
    <div class="notifications">
        <p id="post">Notifications</p>
        <input type="text" name="" placeholder="Add Description" id=" textbox">
    </div>
    <img src="logo6.png" id="commlogo">
    <p id="college">COLLEGE</p>
    <p id="post" >
        <?php 
        echo " welcome :".$_SESSION['user'];
        ?>
    </p>
    
    
    
    
    
    </body>
    <script type="text/javascript">
     $(function(){
         $('li').hover(function(){
             $(this).find('ul>li').stop().fadeToggle(3000);
         })
         $('#logo11').slideUp(0).slideDown(600);
         $('#commlogo').slideUp(0).slideDown(600);
         $('#logo111').slideUp(0).delay(1000).slideDown(600);
         $('#id11').toggle(0).delay(1100).slideDown(600);
         $('#college').slideUp(0).slideDown(600);
     });
        
    </script>
</html>