<?php

include("the_head.php");

?>




<html>
<head>
    <title>Food Database</title>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    


    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleMain.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
</head>
    <body>

    <div class="top_bar">
            <div class="logo">
                <h4 class="thetitle"><a style = "color:white; margin-left:10px;" href="index.php">Donated Food Tracker</a>
                <a style = "color:white; float:right; margin-right:10px;" href="main.php">Main Page</a></h4>    
            </div>
           <u style="color:white"><h3 id="main">Register/Login</h3></u>
        </div> 

<br>
<br>
<br>
<center>
<?php
                   if (isset($_SESSION['username']))   //when user logs in
                   {
                       echo "<h4 style=\"color:white;\">(You are logged in!)</h4>";
                   }
                   else{
                    echo "<h4 style=\"color:white;\">(You are logged out.)</h4>";
                   }
                   ?>
                <form action="register_login.php" method="POST">   
                     <input type="submit" name="logout_button" placeholder="Logout" value="Logout" required>
                    </form>
<br>
<hr>
<br>
        
              <div class="second" id="second">      
              <h3 style="color:white;">Register</h3>  
                <form action="register_login.php" method="POST">
                <input type="email" name="reg_email" placeholder="Email" required><br>
                <input type="password" name="reg_password" placeholder="Password" required><br>
                <input type="submit" name="register_button" placeholder="Register" required>
                </form>
                </div>

<br>
<br>

<br>
<hr>
<br>
                        <h3 style="color:white;">Login</h3>  
                        <form action="register_login.php" method="POST">
                        <input type="email" name="log_email" placeholder="Email Address" required>
                        <br>
                        <input type="password" name="log_password" placeholder="Password">
                        <br>
                        <input type="submit" name="login_button" value="Login">
                        <br>
                        </form>
    </center>               

    </body>
   </html>
