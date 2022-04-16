<?php
session_start();
require_once("connection.php");

$emailf =  $_SESSION['email'];

mysqli_query($conn, "UPDATE users SET donetask = 2 WHERE email  = '$emailf';");


?>