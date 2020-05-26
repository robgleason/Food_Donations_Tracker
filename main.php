<?php

include("the_head.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// $con = mysqli_connect("localhost", "root","","food");

if(mysqli_connect_errno()) 
{
    echo "Failed to connect: " .mysqli_connect_errno();
}

$timezone = date_default_timezone_set("America/Chicago");
$newDate = date("m/j/Y \a\\t g:i a");

$dairyID = "SELECT id FROM dairy"; 
       
$re = mysqli_query($con, $dairyID); 
$row = mysqli_num_rows($re);



if(isset($_POST['post']))
{
    if (isset($_SESSION['username'])) 
    {
       $newId = $row + 1;
       $_POST['post_text'] = strip_tags($_POST['post_text']);
     
        //  mail("rob.w.gleason@gmail.com","Food Tracker Insert","hello");
        $query = mysqli_query($con, "INSERT INTO dairy VALUES('".$newId."', '".$_POST['post_text']."', '".$newDate."','".$_POST['reg_name']."')");
        header("Location: main.php");
    }
    else{
        echo "You must be logged in to post.";
    }   
}
      
?>



<html>
<head>
    <title>Food Database</title>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167583727-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-167583727-1');
    </script>


    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleMain.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
</head>
    <body>


        <div class="top_bar" style="clear: both;">
            <div class="logo">
                <h4 class="thetitle"><u><a style = "color:white; padding-left:10px;" href="index.php">Donated Food Tracker</a></u>
            
                <!-- <u><a style = "color:white; float:right; margin-left:10px; margin-right:10px; margin-top:0px;" > 
                                <i class="fas fa-sign-out-alt"></i>
                    </a></u> -->

                
               <u> <a style = "color:white; float:right; padding-right:10px;" href="register_login.php">Register/Login</a></u>
                   

            </h4> 
            </div>
          
               
           

       
            
            <h3 id="main">Welcome to Donated Food Tracker</h3>
        </div>    
        <div class="wrapper">
         <br>   
       
               
        




        
        
        <div class="user_details column meat">
        <img src="https://image.flaticon.com/icons/png/512/26/26143.png">
            <div class="user_details_left_right" style="color: black;">
            <h1 style="text-indent: .6em;"> Meat</h1>
            </div>
        </div>





        <div class="user_details column milk">
        <img src="assets/images/milk.png">
        <div class="user_details_left_right" style="color: black;">
            <h1 style="text-indent: .3em;"> Dairy</h1>
            </div>
        </div>





        <div class="user_details column vegetable">
        <img src="assets/images/vegetables.png">
        <div class="user_details_left_right" style="color: black;">
            <h1> Vegetables</h1>
            </div>
        </div>





        <div class="main_column saySomething">
            <form class="post_form" action="main.php" method="POST">
                 <input type="text" name="reg_name"  placeholder="Name" style="width: 275px;" required>
                <textarea name="post_text" id="post_text" placeholder="Do you have something to donate?"></textarea>
                <br>
                <input type="submit" name="post" id="post_button" value="Post">
                
                <?php
                   if (isset($_SESSION['username']))   //when user logs in
                   {
                       echo "<h4 style=\"color:white;\">You are logged in!</h4>";
                   }
                   else{
                    echo "<h4 style=\"color:white;\">You must be logged in to enter food.</h4>";
                   }
                   ?>
                    <hr>

            </form>

            <?php
                   
                   
                    $sql = "SELECT id, body, pName, date_added FROM dairy";
                    $result = $con->query($sql);
                    $str="";

                    while($row = $result->fetch_assoc()) {


                        $str = "<div class='column' >
                           

                            <div class='posted_by' id='namePost'>
                         <u><b>  ".$row["pName"]."  </b></u> &nbsp; <b>".$row["date_added"]."</b>
                            </div>
                            <br>
                            <div id='post_body'>
                             ".$row["body"]."
                                <br>
                            </div>
        
                        </div>
                        <hr>" . $str;
                        
                        
                        
                        
                      }
                    echo $str;

            ?>
        </div>




        </div>
    </body>
</html>    
