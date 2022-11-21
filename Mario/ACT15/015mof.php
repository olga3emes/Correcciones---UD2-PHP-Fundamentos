<?php 

$opciones = array('M', 'F');
$letras = array();

for ($i = 0 ; $i < 100 ; $i++) {
    $j = $i + 1;
    $letra_aleatoria = $opciones[rand(0, 2 - 1)];; //! un poco raro esto--> ;; y 2-1 es 1... ¬¬
    array_push($letras,$letra_aleatoria);
    echo " Posición $j = " .$letras[$i]. "<br>";
}

echo "<br>";
print_r(array_count_values($letras));
?>