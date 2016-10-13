<?php

$name = $_GET["Name"];
$msg = $_GET["Description"];
$sjt = $_GET["Subject"];
$email = $_GET["Email"];
$phone = $_GET["Phone"];


$subject = "Message from".$name." ".$email." regarding ".$sjt ;
$msg = "Description:".$msg."Phone:".$phone;

// send email
mail("sanketdave79@techmentation.com",$subject,$msg);
header('Location: http://www.techmentation.com');
?>