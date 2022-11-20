<?php
    $edad=35;//! Por URL , esto acepta negativos, había que usar un switch... ,que era mejor que if else... 
    if($edad<=2){
        $etapa="bebe";
    }
    else if($edad<=12){
        $etapa="niño";
    }
    else if($edad<=17){
        $etapa="adolescente";
    }
    else if($edad<=66){
        $etapa="adulto";
    }
    else {
        $etapa="jubilado";
    }
    echo"La persona es un $etapa"
?>