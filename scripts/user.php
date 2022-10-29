<?php
session_start();
require_once("randomaffiliateid.php");
require_once("connection.php");


$user =  $_POST['name'];
$email =  $_POST['email'];
$password = $_POST['password'];

$sql =  "SELECT * FROM users WHERE email = '$email';";

$result = mysqli_query($conn,$sql);
$ew = "";
if(mysqli_num_rows($result)>0){

    $res =  mysqli_fetch_assoc($result);
    


    if ($res['password'] == $password)
  { $_SESSION["email"]  = $email;
    header("Location:../profile.php");
   
}

else{
    
    header("Location:../index.php?error=passwordincorrect&name=$user&email=$email");

}


}

else{
    
    $affid = generateRandomtext();
    
    mysqli_query($conn,"INSERT INTO users(name,email,password,affiliateid,numofaffiliate,donetask) VALUES('$user','$email','$password','$affid',5,0);");
     $_SESSION["email"]  = $email;

        if(isset($_SESSION['affiliatelink']))
        {

            $userwhoinvited  = $_SESSION['affiliatelink'];

        }

        elseif(isset($_COOKIE['affiliate']))
        {

            $userwhoinvited  =  $_COOKIE['affiliate'];
        }

if($userwhoinvited  != null)
{

    $result = mysqli_query($conn,"SELECT * FROM users WHERE affiliateid = '$userwhoinvited';");

    $aff = 0;
    

if( mysqli_num_rows($result) > 0 )
{
    $res =  mysqli_fetch_assoc($result);
$aff  =  $res['numofaffiliate'];
if($aff  >  0)
{
    $newaff =  $aff -1;
    mysqli_query($conn,"UPDATE users SET numofaffiliate = $newaff WHERE affiliateid = '$userwhoinvited';");
}
}



    header("Location:../profile.php");
}


}
