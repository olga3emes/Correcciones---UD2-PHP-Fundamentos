<?php 

//! No has hecho lo que pide el ejercicio

    $edad=33;
    $en10=$edad+10;
    $hace10=$edad-10;
    $anyoactual=date("Y");
    $jubilacion=(67-$edad)+$anyoactual;

    echo"La persona tiene 33 años <br>";
    echo"En 10 años tendrá $en10 años<br>";
    echo"Hace 10 años tenía $hace10 años<br>";
    echo"Se jubilará en el año $jubilacion";
?>