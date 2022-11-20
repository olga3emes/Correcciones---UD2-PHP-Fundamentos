<?php 
    //! Tengo la teoría de que tienes que aprender a leer, dice que el parámetro edad se recoge de la URL, has liado una buena...
    $nowDate = date("d/m/y"); //Fecha actual
    $year = 20;

    $inTen = $year + 10; //Edad en 10 años
    $agoTen = $year - 10; //Edad hace 10 años
    $yearInten = date("d/m/".$year+10); //Edad en 10 años
    $yearAgoten = date("d/m/".$year-10); //Edad hace 10 años

    $retirement = 67 - $year; //Años restantes para jubilación
    $nowDate = date("y"); // Obtenemos el año de la fecha actual
    $yearRetirement = date("d/m/".intval($nowDate) + $retirement);// Con la función INTVAL(), Convertimos String en int.


    echo "Dentro de  10 años tendrás ".$inTen."(".$yearInten.") años<br>
            Pero hace 10 años tenías ".$agoTen."(".$yearAgoten.") años<br>";


    echo "Te Jubilarás el ".$yearRetirement; 
    

    

   
?>