<?php

$strings = "0123456789abcdefghijklmnopqrstuvwxyz";
    $randomstring = '';



function generateRandomtext()
{
    global $strings;
global $randomstring;
$randomstring = '';
//generate the random string
for  ($i = 0; $i < 15 ; $i++)
{
    $randomstring .= $strings[rand(0,strlen($strings)-1)];
}



return $randomstring;


//check if it exsist

}


?>