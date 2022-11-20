<!-- uestra dentro de una tabla HTML la tabla de multiplicar del 
número que reciba como parámetro. Utiliza <thead> con sus respectivos 
<th> y <tbody> para dibujar la tabla. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>011</title>
</head>
<body>
    <table>
        <thead>
            <th><tr>TABLA DE MULTIPLICAR</tr></th>
            <br>
            <br>
        </thead>
        <tbody>
            <?php 
            $numero = $_GET["numero"];
            for($i=0; $i <= 10;$i++){
                $multiplicacion = $numero * $i;
                echo "<th>
                <tr> $numero * </tr>
                <tr>$i = </tr>
                <tr>$multiplicacion</tr>
                </th><br>";
            }
            ?>
        </tbody>
        
    </table>
</body>
</html>