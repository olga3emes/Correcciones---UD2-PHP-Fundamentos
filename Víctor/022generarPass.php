<?php  
$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=28;

for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
    $x = rand(0,$n);
    $pass.= $caracteres[$x];
  }

  echo $pass;

?>  