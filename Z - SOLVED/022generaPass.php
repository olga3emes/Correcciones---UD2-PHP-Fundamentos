<?php 
    $size = $_GET["size"]?? 8;
    echo generaPass($size);

    function generaPass(int $size) :string {
        $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; 
        $shfl = str_shuffle($caracteres); // El str_shuffle mezcla una cadena aleatoriamente
        $pass = substr($shfl,0,$size);
        return  $pass;
    } 
?>


