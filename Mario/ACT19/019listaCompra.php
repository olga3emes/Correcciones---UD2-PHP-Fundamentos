<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    include '019preparaCompra.php';
    echo "<ul>";
    echo "<li><b>Nombre producto 1:</b> " .$producto1. " - <b>Cantidad:</b> " .$cantidad_manzana. " - <b>Precio 1 unidad:</b> " .$coste_manzana. " - <b>Precio unidades seleccionadas:</b> " .$coste_manzana*$cantidad_manzana. "</li>";
    echo "<br><br>";
    echo "<li><b>Nombre producto 2:</b> " .$producto2. " - <b>Cantidad:</b> " .$cantidad_camiseta. " - <b>Precio 1 unidad:</b> " .$coste_camiseta. " - <b>Precio unidades seleccionadas:</b> " .$coste_camiseta*$cantidad_camiseta. "</li>";
    echo "<br><br>";
    echo "<li><b>Nombre producto 1:</b> " .$producto3. " - <b>Cantidad:</b> " .$cantidad_colonia. " - <b>Precio 1 unidad:</b> " .$coste_colonia. " - <b>Precio unidades seleccionadas:</b> " .$coste_colonia*$cantidad_colonia. "</li>";
    echo "</ul>";
    ?>
</body>
</html>