<!-- A partir de una cantidad de productos, leer el 
nombre y coste de la cantidad de productos indicados (la cantidad, se 
recibe mediante un parámetro GET vía URL) -->

<?php 

$producto1 = [
    "nombre" => "PS5",
    "cantidad" => $_GET["cantidad1"],
    "euros" => 500,
    "pesetas" => 83.193,
    "id" => 1,
    "totalE" => 0,
    "totalP" => 0,
];

$producto1["totalE"] = $producto1["euros"] * $producto1["cantidad"];
$producto1["totalP"] = $producto1["pesetas"] * $producto1["cantidad"];

$producto2 = [
    "nombre" => "Cachimba Wookah",
    "cantidad" => $_GET["cantidad2"],
    "euros" => 300,
    "pesetas" =>  49.915,
    "id" => 2,
    "totalE" => 0,
    "totalP" => 0,
];
$producto2["totalE"] = $producto2["euros"] * $producto2["cantidad"];
$producto2["totalP"] = $producto2["pesetas"] * $producto2["cantidad"];
?>
