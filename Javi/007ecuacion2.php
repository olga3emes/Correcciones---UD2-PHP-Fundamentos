<?php
    $a=1;
    $b=4;
    $c=0;
    echo"Ecuación: $a x <sup>2</sup> + $b x + $c = 0<br>";
    $raiz=sqrt(($b**2)-(4*$a*$c));
    if(is_nan($raiz)){
        echo"La ecuación no tiene solución en los números reales";
    }else{
      $solucionSuma=($b*-1+$raiz)/(2*$a);
      $solucionResta=($b*-1-$raiz)/(2*$a);  
      echo"Solución: $solucionSuma y $solucionResta";  
    }
?>