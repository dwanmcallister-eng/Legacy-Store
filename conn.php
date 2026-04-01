<?php

$connection = mysqli_connect("localhost", "dimcallister", "mYCjufNmqU", "dimcallister");
// Check connection
if (mysqli_connect_errno())
{
    echo "Could not connect to database: " . mysqli_connect_error();
}

return $connection;

?>