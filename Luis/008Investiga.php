
<?php

/*008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de l√≠neas su propósito y mediante código demuestra su uso.*/

$edad = $_GET["edad"];

$resultado = match (true){ //! mejor con una comparación

    $edad < 3 =>'El bebé tiene menos de 3 años',
    $edad <= 12 =>'Niño si tiene entre 3 y 12 años',
    $edad <= 17 =>'Adolescente entre 13 y 17 años',
    $edad <= 66 =>'Adulto entre 18 y 66',
    default =>'Jubilado a partir de 67',
};

echo($resultado);
?>