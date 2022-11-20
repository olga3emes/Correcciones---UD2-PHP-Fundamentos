<!-- 009numPares.php: Escribe un programa que muestre los números pares del 
0 al 50 (dentro de una lista desordenada). -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <ul>Números Pares</ul>
    <?php 
    $num_par = 0;

    while ($num_par <= 50){
        echo "<li> $num_par </li>";
        $num_par = $num_par + 2;
    }
    
    ?>

    </body>
</html>