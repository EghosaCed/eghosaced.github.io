<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include_once("scripts/connection.php");
$emailf  =  $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email = '$emailf';";
$result  =  mysqli_query($conn,$sql);


$name = '';
$donetask = 0;
$numofaffiliate = 0;
$affiliateid = '';

if(mysqli_num_rows($result)>0){
    
    $res = mysqli_fetch_assoc($result);
 
    $name = $res['name'];
    $donetask = $res['donetggask'];
    $numofaffiliate = $res['numofaffiliate'];
    $affiliateid =  $res['affiliateid'];
  
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

<?php

if($donetask == 0)
{

   echo '<div id="congrat" class="div ">';
    echo '<p id="msg">CONGRATULATIONS  '."$name".'<br> YOU JUST WON <br> $500</p>';
   echo '<div class="btndiv">';
     
   echo '<button id="linkbtn">SIGN UP TO CLAIM</button>';
   echo '</div>';
   echo '</div>';

    
}
else{
$strng = $_SESSION['homepage'] . '?affiliateid=' . $affiliateid;

   echo '<div id="finaldiv" class="div ">

        <p>
            <span id="span">FINAL STEP</span>
            <br>
            INVITE <br>
            5
            <br>
            FRIENDS TO CLAIM REWARD.
        </p>
        <hr>
        <p id="remain">REMAINING <span id="left">'."$numofaffiliate".'</span> </p>
        <hr>

        <p id="sharetxt">SHARE ON WHATSAPP OR <br> COPY AFFILIATE LINK</p>
        <div class="btndiv">

            <button></button>

        </div>

        <div id="linkdiv">
            <p>'."$strng".'</p>
        </div>



    </div>';

}


?>



    <div id="finaldiv" class="div hide">

        <p>
            <span id="span">FINAL STEP</span>
            <br>
            INVITE <br>
            5
            <br>
            FRIENDS TO CLAIM REWARD.
        </p>
        <hr>
        <p id="remain">REMAINING <span id="left"><?php echo $numofaffiliate ?></span> </p>
        <hr>

        <p id="sharetxt">SHARE ON WHATSAPP OR <br> COPY AFFILIATE LINK</p>
        <div class="btndiv">

            <button id="whatsappshare"></button>

        </div>

        <div id="linkdiv">
            <p id="affiliatelink"><?php     echo $_SESSION['homepage'].'?affiliateid='.$affiliateid;?>
</p>
        </div>



    </div>


    <script src="jquery/jquery-3.6.0.min.js"></script>
    <script src="scripts/link.js"></script>
    <script src="scripts/finaldiv.js"></script>
</body>

</html>