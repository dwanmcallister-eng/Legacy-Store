<?php

session_start();
$connection = require_once ('conn.php');
$name = htmlspecialchars($_POST["rUsername"]);
$email = htmlspecialchars($_POST["rEmail"]);
$rPassword = htmlspecialchars($_POST["rPassword"]);
$hashPassword = password_hash($rPassword, PASSWORD_DEFAULT);
$result = $connection->prepare("INSERT INTO tbl_users 
(user_id, user_name, user_email, user_pass) VALUES (?, ?, ?, ?)");
$result->bind_param("ssss", $id, $name, $email, $hashPassword);
$result->execute();
header ("Location: index.php");

?>