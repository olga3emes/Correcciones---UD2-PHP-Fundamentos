<?php 

$numero = 123456789;
//! lo has enreversado mucho!!!!
echo "La cantidad de cifras de ". $numero . " es ". digitos($numero)."<br><br>";

function digitos(int $numero) : int{
    $aux = 0;
    while($numero != 0){
        $numero = floor($numero / 10);
        $aux++;
    }

    return $aux;
}


$pos = 2;

echo digitoN($numero, $pos);

 function digitoN($numero, $pos){
    $array = str_split($numero);

    if(is_string($pos) || $pos < 0 || $pos > sizeof($array))
           echo "La posición elegia no es correcta o no existe";
    else
        echo "El digito de la posición ". $pos ." es el ".$array[$pos-1]."<br><br>";
        
}

$cant = 5;

echo quitaPorDetras($numero, $cant);

function quitaPorDetras($numero, $cant){
    $diez = 10**$cant;
     $number = floor($numero/$diez);


    if($cant > $number || is_string($cant)  || $cant < 0){
        echo "La cantidad elegia no es correcta o no existe<br><br>";
    }else{
        if($number == 0){
            echo "Has quitado todos los números☺<br><br>";
        }
        else
         echo "El numero sería ".$number."<br><br>";
    } 
}

echo quitaPorDelante($numero, $cant);

function quitaPorDelante($numero, $cant){
    $array = str_split($numero);
    $array = array_reverse($array);
    $num = "";
    for ($i=0; $i < sizeof($array); $i++) { 
        $num .= $array[$i];
    }
    $num = intval($num);
    echo quitaPorDetras($num, $cant);
}

?>