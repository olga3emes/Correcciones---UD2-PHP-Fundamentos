<!-- Es una comprobación de identidad, se comporta como un switch pero más estricto,
 con la diferencia de que devuelve un valor
y no comprueba casos anteriores. 
No necesita usar break, y podemos usar default.
Ejemplo: Clasificación en una carrera -->

<?php 
    $posicion = "2";

    $result = match($posicion){
        1, 2, 3 => 'Clasificado para el podio',
        default => 'Desclasificado' 
    };
    echo($result);
?>

<!-- Al no ser idéntico ( === ) se ejecutará el patrón default.  --> 
