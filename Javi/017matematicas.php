<?php 
    function digitos(int $num){
        return (strlen($num));
    }
    echo(digitos(3456752));
    echo "<br>";

    function digitoN(int $num, int $pos){
        $string = (string) $num;
        $array = str_split($string);
            return $array[$pos-1];
        
    }
    echo(digitoN(125365345,3));
    echo "<br>";

    function quitaPorDetras(int $num, int $cant){
        $string = (string) $num;
        return substr($string, 0, -$cant);
        //Otra opcion
        /*
        $array = str_split($string);
         for($i=0;$i<sizeof($array)-$cant;$i++){
             print($array[$i]);
            }*/
    }
    echo(quitaPorDetras(345273923,3));
    echo "<br>";

    function quitaPorDelante(int $num, int $cant){
        $string = (string) $num;
        return substr($string,$cant);
        //Otra opcion
        /*
        $array = str_split($string);
            for($i=0;$i<sizeof($array);$i++){
                if($i>$cant-1){
                    print($array[$i]);
                }
                
            }*/
    }
    echo(quitaPorDelante(345273923,3));
?>