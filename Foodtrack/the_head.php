<?php
session_start();




// $con = mysqli_connect("localhost", "root","root","food");
$con = mysqli_connect("localhost", "donatedf_donatedfood","bluemidnightkevin","donatedf_food");

if(mysqli_connect_errno()) 
{
    echo "Failed to connect: " .mysqli_connect_errno();
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$timezone = date_default_timezone_set("America/Chicago");
$newDate = date("m/j/Y \a\\t g:i a");

$registerID = "SELECT id FROM registers"; 
       
$re = mysqli_query($con, $registerID); 
$row = mysqli_num_rows($re);

$loginID = "SELECT id FROM logins"; 
       
$reLogin = mysqli_query($con, $loginID); 
$rowLogin = mysqli_num_rows($reLogin);



if(isset($_POST['register_button']))
{
    $newId = $row + 1;
    $query = mysqli_query($con, "INSERT INTO registers VALUES('".$newId."', '".$_POST['reg_email']."', '".$_POST['reg_password']."')");
    header("Location: register_login.php");

}


if(isset($_POST['logout_button']))
{
    $_SESSION['username'] = NULL;
    
    header("Location: register_login.php");

}

// if(isset($_POST['login_button']))
// {
//     $newLoginId = $rowLogin + 1;
//     $query = mysqli_query($con, "INSERT INTO logins VALUES('".$newLoginId."', '".$_POST['log_email']."', '".$_POST['log_password']."')");
//     header("Location: register_login.php");

// }










if(isset($_POST['login_button']))
{
    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); // sanitize email

    $_SESSION['log_email'] = $email; //Store email into session variable
    $password = $_POST['log_password']; // Get password

    $check_database_query = mysqli_query($con, "SELECT * FROM registers WHERE rEmail = '$email' AND rPassword='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if($check_login_query > 0)
    {
        $row = mysqli_fetch_array($check_database_query);
        $username = "Correct";

        // $user_closed_query = mysqli_query($con, "SELECT * FROM users2 WHERE email='$email' AND user_closed='yes'");
        // if(mysqli_num_rows($user_closed_query) == 1)
        // {
        //     $reopen_account = mysqli_query($con, "UPDATE users2 SET user_closed='no' WHERE email='$email'");
        // }
        $_SESSION['username'] = $username;
        // header("Location: register_login.php");
        // $_SESSION['log_email'] = "";
        // exit();
    }
    
    else
    {
        $_SESSION['username'] = NULL;
    }
}



















?>