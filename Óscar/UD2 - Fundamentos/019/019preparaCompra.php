<!-- A partir de los archivos creados en el ejercicio anterior, crea una plantilla 
mediante includes: 019preparaCompra.php: similar a 019preparaTique.php, 
pero separando el encabezado (Supermercado Lodi en h1) y el pie (Tu 
supermercado de confianza) en ficheros externos y referenciando a ellos 
mediante include.
019listaCompra.php: recibe los datos del anterior, y reutiliza parte de 
019imprimeTiquetCompra.php cambiando la tabla por una lista 
desordenada de los productos junto a su precio. -->

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

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php include("header.php");?>

<ul>
<?php
foreach ($producto1 as $key => $producto1) {
    echo "<li>$key: $producto1</li>";
}
?>
</ul>
<ul>
<?php
foreach ($producto2 as $key => $producto2) {
    echo "<li>$key: $producto2</li>";
}
?>
</ul>

<?php include_once "footer.php"; ?>

</body>
    
</html>