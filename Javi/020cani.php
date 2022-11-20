<?php 
    function cadenaCani(String $cadena){
        $array = str_split($cadena);
        $controlador=true;
        for($i=0;$i<sizeof($array);$i++){
            if($controlador==true && $array[$i]!=" "){
                $array[$i]= strtoupper($array[$i]);
                $controlador=false;
            }else if ($array[$i]!=" "){
                $array[$i]= strtolower($array[$i]);
                $controlador=true;
            }else{
                $array[$i]=" ";
            }
        }
        return implode("",$array);
    }
    echo(cadenaCani("escribe una funcion que convierta una cadena en cani"));
?>