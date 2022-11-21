<?php 
    $array[31]=[]; //! Nooooooooo X_X
    
    for($i=0;$i<32;$i++){
        $array[$i]=rand(0,100);
        print("$array[$i] <br>");
    }
    
    print("El número mayor es : ".max($array). "<br>");
    print("El número menor es : ".min($array). "<br>");
    print("La media es : ".array_sum($array)/sizeof($array). "<br>");

?>  