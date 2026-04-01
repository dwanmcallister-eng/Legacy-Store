<?php

session_start();

$connection = require_once ('conn.php');

$myusername = htmlspecialchars($_POST["username"]);
$mypassword = htmlspecialchars($_POST["password"]);

$query ="SELECT * from tbl_users WHERE user_email = '$myusername'";
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

if (!$count ) 
{
    header ("Location: login.php?msg='Invalid username or password'"); //fail state: username does not exist,
    //echo "Invalid username/password";
}
else
{
    $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $dbpassword = $record["user_pass"];
    if (password_verify($mypassword, $dbpassword))
    {
        $_SESSION["logged"] = true;
        $_SESSION["name"] = $record["user_name"];
        header ("Location: index.php");
    }
    else
    {
        header ("Location: login.php"); //fail state: username/password does not match,
        echo "Invalid username/password";
    }//end if
}//end if

?>