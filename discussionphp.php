<?php
if(!session_id())
{
    session_start();
}
?>
   <html>
    <head>
        <title>
            Discussion | page
        </title>
        <link rel="stylesheet" type="text/css" href="discussion.css">
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
        <div class="discussion">
            <p id="he1"><?php echo $_SESSION['user']."...you are on a discussion page" ?></p>
            <p id="he2">Discussions:-</p>
            <!--<a href="#"><p id="he3">Add Discussion</p></a>-->
            <div id="t1">
                <?php
                    if(isset($_GET['postid']))
                    {
                        $id = $_GET['postid'];
                        $_SESSION['postid'] = $id;
                    }//$id = $_GET['postid'];
                else
                {
                    $id = $_SESSION['postid'];
                }
                    
                    $db = mysqli_connect("localhost","root","","cc");
                    $sql = "select image,description from post where postid=$id";
                    $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<div id='img_div'>";
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';
                        echo "<p id= 'description'>".$row['description']."</p>";
                        echo "</div>";
                    }
                ?>
            </div>
            <a href="#"><p id="vote">Vote</p></a>
            <a href="#"><p id="report">Report</p></a>
            <!--<textarea id="t2">
                Discussions........
            </textarea>-->
            <div id="t2">
                <?php
                    $db = mysqli_connect("localhost","root","","cc");
                    $id = $_GET['postid'];
                    $sql = "select * from discussion where postid =$id";
                    $result = mysqli_query($db,$sql);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<div id='dis_div'>";
                        //echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="100" height="100">';
                        echo "<p id= 'description'>".$row['discussion']."</p>";
                        echo "</div>";
                    }
                ?>
            </div>
            <form method="GET" action="discuss.php">
                <textarea id="t3" name="discussion" placeholder="Add Discussion......"></textarea>
                <?php
                echo '<input name  = "pid" type = "hidden" value = "'.$id.'">';
                echo '<input type="submit" name="submit" value="submit" id="he3">';
            ?>
                    </form>
               
        </div>
        
        
        
        <script>
            $(function(){
              $('#logo11').slideUp(0).slideDown(600);
              $('#logo111').slideUp(0).delay(1000).slideDown(600);
              });
        </script>
    </body>
</html>