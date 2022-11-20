<!-- Crea un programa que resuelva una ecuación de 2º 
grado del tipo ax² + bx + c = 0. Ten en cuenta que puede tener 2, 1 o no 
tener solución dependiendo del valor del discriminante b²-4ac.

Tip: Para calcular la raíz cuadrada deberás utilizar la función sqrt() -->

<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$solucion1;
$solucion2;

$valordiscriminante = $b*$b-(4 * $a * $c);

echo " el valor discriminante es $valordiscriminante <br>";
   //! mejor un switch con <=>
if($valordiscriminante < 0){
    echo "El problema no tiene solución";
}else if($valordiscriminante == 0){
        $solucion1 = (-$b + sqrt($valordiscriminante)) / (2 * $a);
        echo " La solución es: $solucion1 <br>";  
}
else{
    $solucion1 = (-$b + sqrt($valordiscriminante)) / (2 * $a);
        echo "La 1º solución es: $solucion1 <br>";

    $solucion2 = (-$b - sqrt($valordiscriminante)) / (2 * $a);
        echo "La 2º solución es: $solucion2 <br>";
}
?>