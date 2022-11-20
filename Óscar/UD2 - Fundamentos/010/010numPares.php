<!--  A partir del anterior, refactorizar para que funcione con 
inicio y fin. -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>010</title>
    </head>
    <body>
    <?php 
    
    $num_inicio = $_GET["inicio"];
    $num_fin = $_GET["fin"];

    echo "<ul>Números Pares entre $num_inicio y $num_fin</ul>";
    while ($num_inicio <= $num_fin){
        if (($num_inicio % 2) == 0){
            echo "<li> $num_inicio </li>";
        }
        $num_inicio = $num_inicio + 1;
    }
    ?>

    </body>
</html>