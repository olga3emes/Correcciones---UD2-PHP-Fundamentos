<!-- 008Investiga para qué sirve la instrucción match(), disponible desde PHP8 
(https://www.php.net/manual/es/control-structures.match.php). Explica 
con un par de líneas su propósito y mediante código demuestra su uso. -->
<?php
$comida = 'Manzana';

$resultado = match ($comida) {
    'Manzana' => 'Fruto del manzano, comestible, de forma redondeada y algo hundida por los extremos, piel fina, de color verde, amarillo o rojo, carne blanca y jugosa, de sabor dulce o ácido, y semillas en forma de pepitas encerradas en una cápsula de cinco divisiones.',
    'Pera' => 'Fruto del peral, comestible, de color verde, amarillo o encarnado, ancho por la parte de abajo y delgado por la de arriba (donde tiene el pedúnculo), de piel fina y pulpa blanca, muy jugosa, sabor dulce y, en el centro, unas semillas pequeñas de color negro.',
    'Pastel' => 'Dulce elaborado con una masa a base de harina, mantequilla, huevos, azúcar, leche, y otros ingredientes, que se cuece al horno y se rellena o se cubre de crema, chocolate, frutas u otros productos de repostería.',
};
echo "Has elegido: $comida <br>" . $resultado;
?>

//! y la explicación del uso del match?