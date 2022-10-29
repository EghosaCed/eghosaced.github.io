<?php
include_once("scripts/connection.php");
session_start();

  $_SESSION['homepage']  =  $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];

                        if (isset($_GET['affiliateid'])) {

                            $affiliateId  =  $_GET['affiliateid'];

                            $_SESSION['affiliatelink'] = $affiliateId;

                            setcookie("affiliate", $affiliateId, time() + 60 * 60 * 24 * 30);
                        }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="styles/style.css">
</head>

<?php
$error = 'error message';
$error2 = 'error message 23';
$name = '';
$email = ''; 

if(isset($_GET['error']))
{

    $error = "Password Incorrect!";
    $name = $_GET['name'];
    $email = $_GET['email'];
}
?>
<body>


<div id="data"></div>


<div id="enternameandemail" class="div ">
<p>ENTER NAME <br> AND  EMAIL</p> 
<form action="scripts/user.php" method="POST">
    
    <input type="text" name="name" placeholder="name" id="name" required value="<?php echo $name?>"> 
    <input type="email" name="email" id="email" placeholder="email" value="<?php echo $email?>">
    <input type="password" name="password" id="" placeholder="password">
    <p id="errormsg"><?php echo $error?></p>
  <input id = "submit" type="submit" name="submit" value="Enter">

    </form>

</div> 






<script src="jquery/jquery-3.6.0.min.js"></script>
<script src="scripts/login.js"></script>

</body>
</html>
