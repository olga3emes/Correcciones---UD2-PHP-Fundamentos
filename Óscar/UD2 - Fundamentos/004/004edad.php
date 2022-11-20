<!-- Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y");  -->

<?php 

//! Está OK. Pero te falta control de los parámetros. Acepta cosas negativas, si alguien es mayor de 67 ya está jubilado... etc.

$edad = $_GET["edad"];
$anyodespues = ($edad + 10);
$anyoantes = ($edad - 10) ;
$anyoActual = date("Y");
$anyojubilacion = (67 - $edad) + $anyoActual;


echo "Actualmente tiene $edad <br>";
echo "Dentro de 10 años tendrá $anyodespues <br>";
echo "Hace 10 años tenía $anyoantes <br>";
echo "Se jubilará en el año $anyojubilacion <br>";
?>