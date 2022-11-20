<?php 
    function generaPass(int $longitud){
        $caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $array = str_split($caracteres);
        $contraseña="";    
        for($i=0;$i<$longitud-1;$i++){
            $contraseña.=$caracteres[rand(0,sizeof($array)-1)];
            }
        return $contraseña;
    }
    
    echo(generaPass(45));
    
    
    
?>