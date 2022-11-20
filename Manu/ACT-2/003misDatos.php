<?php
    $name = $_GET["nombre"]; /* CON EL MÉTODO $_GET OBTENEMOS POR VÍA URL EL VALOR DEL NAME EN EL HTML */
    $surname1 = $_GET["apellido1"];
    $surname2 = $_GET["apellido2"];
    $email = $_GET["correo"];
    $birthday = $_GET["nacimiento"];
    $mobile = $_GET["movil"];

    echo "Hola ".$name." ".$surname1." ".$surname2." <br> tu correo es: ".$email." , naciste el ".$birthday.
    " y tu télefono es el ".$mobile;

    echo "<br><br>**********<br>Ejercicio 003";
    
    //! Y la tabla?, EL móvil es un número y año de nacimiento es una fecha

 ?>