<?php
if(isset($_GET['cajanumero']))
{
    $numeroingresado = $_GET['cajanumero'];
    echo "<table border='1'><br>";
    echo "<h3>Tabla del $numeroingresado </h3>";
    
    for($i=1; $i <= 10; $i++)
    {
        $valor = $i*$numeroingresado;
        echo"<thead>";
        //! no repitas todo esto
            echo "<th>A</th>";
            echo "<th>*</th>";
            echo "<th>B</th>";
            echo "<th>=</th>";
            echo "<th>A*B</th>";
        echo "</thead>";

        echo "<tbody>";
                echo "<td>$i</td>";
                echo "<td>*</td>";
                echo "<td>$numeroingresado</td>";
                echo "<td>=</td>";
                echo "<td>$valor</td>";
        echo "</tbody>";
           


        /*
        OLGA:  ME HAS AUTORIZADO HACERLO ASI JAJAJAJA
        */
    }
    echo "</table>";
    
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas</title>
</head>
<body>
    <br>
    <br>
    <form action="#" method="GET">
        <input type="number" min="1" name="cajanumero" required>
        <input type="submit" value="Crear tabla">
    </form>
</body>

</html>