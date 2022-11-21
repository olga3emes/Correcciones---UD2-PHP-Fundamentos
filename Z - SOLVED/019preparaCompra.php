<!-- A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
supermercado de confianza) en ficheros externos y referenciando a ellos 
mediante include.
019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 
019imprimeTiquetCompra.php cambiando la tabla por una lista 
desordenada de los productos junto a su precio. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>019preparaCompra</title>
</head>
<body>
    <?php include_once '019encabezadoCompra.php' ?>

    <form action="019listaCompra.php" method="get">
        <?php
        $productos=[];
        $productos["Tomate" ]=[0.5];
        $productos["Patata"]=[0.8];
        $productos["Hamburguesa"]=[3];
        $productos["Agua"]=[0.7];

        foreach ($productos as $nombre => $valor) {
            echo "<label for='producto".$nombre."'>".$nombre.":</label>
            <input type='number' id='producto".$nombre."' name='cant".$nombre."'><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>

    <?php include_once '019footerCompra.php' ?>
</body>
</html>