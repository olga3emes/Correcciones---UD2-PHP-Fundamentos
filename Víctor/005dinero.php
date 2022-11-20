<?php 
$dinero = [ "billetes" => [500, 200, 100, 50, 20, 10, 5], "monedas" => [2, 1] ]; //! Las de céntimos sobran

//! Joder hay veces que como no lees... te tomas más trabajo. LEE!!
 
$cantidad = 888; //! Por URL
 
foreach($dinero as $tipo_cambio => $valores) //! Muy lentorro, for dentro de for, usar intval
{
    foreach($valores as $valor)
   {
           if($cantidad >= $valor)
           {
               echo "$tipo_cambio de \$$valor: ".floor($cantidad/$valor)." Items <br>";
               $cantidad = $cantidad % $valor; 
               if(!$cantidad)
                   break 2;
           }
   }
}

//! La creatividad para el FRONT, el BACK tiene que ser súper exacto :(