<?php 

$producto1 = "Manzana";
$producto2 = "Camiseta";
$producto3 = "Colonia";
$coste_manzana = 3;
$coste_camiseta = 36;
$coste_colonia = 15;
$cantidad_manzana = count($_GET) > 0 ? $_GET['cantidad_manzana'] : 1;
$cantidad_camiseta = count($_GET) > 0 ? $_GET['cantidad_camiseta'] : 1;
$cantidad_colonia = count($_GET) > 0 ? $_GET['cantidad_colonia'] : 1;

echo "<b>Nombre producto 1:</b> " .$producto1. " - <b>Cantidad:</b> " .$cantidad_manzana. " - <b>Precio 1 unidad:</b> " .$coste_manzana. " - <b>Precio unidades seleccionadas:</b> " .$coste_manzana*$cantidad_manzana;
echo "<br><br>";
echo "<b>Nombre producto 2:</b> " .$producto2. " - <b>Cantidad:</b> " .$cantidad_camiseta. " - <b>Precio 1 unidad:</b> " .$coste_camiseta. " - <b>Precio unidades seleccionadas:</b> " .$coste_camiseta*$cantidad_camiseta;
echo "<br><br>";
echo "<b>Nombre producto 1:</b> " .$producto3. " - <b>Cantidad:</b> " .$cantidad_colonia. " - <b>Precio 1 unidad:</b> " .$coste_colonia. " - <b>Precio unidades seleccionadas:</b> " .$coste_colonia*$cantidad_colonia;
?>