<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- No he terminado de enterder que me pide el enunciado exactamente,
así que lo he hecho tal y como lo he interpretado.
En lugar de crear 019preparaCompra, he reutilizado el 018 en este .php.
Al mismo tiempo, aquí incluyo los dos archivos html y el bucle para crear la lista.
Espero que sea más o menos lo que se pide :) -->
<body>
    <?php
    include_once("018preparaTique.php");
    include_once("019cabecera.html");
    ?>
    <ul>
        <?php
        foreach ($productos as $clave => $valor) {

            echo "<li>
        $clave </br> 
        Precio: " . $valor[1] . "€ </br> 
        Cantidad: " . $valor[0] . " unidades
        </li>";
        }

        ?>
    </ul>
    <?php
    include_once("019pie.html");
    ?>


</body>

</html>