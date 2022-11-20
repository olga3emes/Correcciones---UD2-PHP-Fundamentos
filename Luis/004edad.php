/* Sabiendo la edad de una persona, mostrar la edad que 
tendrá dentro de 10 años y hace 10 años. Además, muestra qué año será en 
cada uno de los casos. Finalmente, muestra el año de jubilación suponiendo 
que trabajarás hasta los 67 años. En este caso, no hace falta que 
previamente crees un formulario, puedes probar el ejercicio vía URL: 
004edad.php?edad=33. Tip: $anyoActual = date("Y");*/

<?php 
$edad =33; //! POR URL LUIS!!! Controla los negativos también.
$anuoActual = date("Y");
$edadJubilacion=67-$edad;

echo "el año actual es $anuoActual le quitamos diez años".$anuoActual-10;
echo "el año actual es $anuoActual le añadimos diez años".$anuoActual+10;
echo "el año para la jubilacion".$edadJubilacion+$anuoActual;

?>