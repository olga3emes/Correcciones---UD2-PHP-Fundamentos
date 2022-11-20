<?php 

//! Esto no está bien. Rendimiento malísimo. Metes la cantidad manualmente, sin comprobaciones.
$dinero = [ "billetes" => [500, 200, 100, 50, 20, 10, 5], "monedas" => [2, 1] ];
 
$cantidad = 5348.72; //! Número con .
 
foreach($dinero as $fisico => $valores)
{
    foreach($valores as $valor) //! Muy lento for dentro de for.
   {
           if($cantidad >= $valor)
           {
               print ("$fisico con valor de $valor €: ".floor($cantidad/$valor)."<br>");
               $cantidad = $cantidad % $valor; 
               if(!$cantidad)
                   break; //! Esto no se debe de hacer
           }
   }
}
?>