<?php 

$billetes = [500,200,100,50,20,10,5,2,1]; /*ARRAY BILLETES*/
$num = 0;
$medio = ""; /* VARIABLE string DONDE SE GUARDARÁ EL MEDIO DE PAGO */

$cantidad = 888; //! Se tiene que recoger por URL.



for ($i=0; $i < sizeof($billetes); $i++){
     if($cantidad/$billetes[$i] != 0){

        $num = floor($cantidad / $billetes[$i]); /* FLOOR() NOS DEVUELVE UN ENTERO */
        /* CON EL TERNARIO PODEMOS DIFERENCIAR ENTRE SIGULAR O PLURAL */ //! Muy bien el uso del ternario aquí
        $medio = $billetes[$i] > 5 ? ($medio = $num >= 2 ? 'billetes' : 'billete') : ($medio = $num >= 2 ? 'monedas':'moneda');
        
        echo "Hay ".$num." ". $medio." de ".$billetes[$i];
        print("<br>");
     }

     $cantidad = $cantidad % $billetes[$i];
        
}

?>