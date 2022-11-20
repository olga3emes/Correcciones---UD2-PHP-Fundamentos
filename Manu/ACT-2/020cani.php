<?php 

$string = "escribe una funcion que transforme una cadena en cani.";
$array_string = str_split($string);

echo conversor($array_string, $string);

function conversor($array_string, $string){
    $j = 1;
    for ($i=0; $i < strlen($string); $i++) {  //STRLEN() DEVUELVE LA LONGITUD DE UN SRTIN
        //STRTOUPPER() Y STRTOLOWER() DEVUELVEN UN STRING EN MAYÚSCULAS O MÍNUSCULAS
        if($string[$i] != " " && $j == 1){
            $array_string[$i] = strtoupper($array_string[$i]);
            echo $array_string[$i];
            $j = 0;
        }else if($string[$i] != " "){
            $array_string[$i] = strtolower($array_string[$i]);
            echo $array_string[$i];
            $j=1;
        }else{
            echo  " ";
        }
    }
}




?>