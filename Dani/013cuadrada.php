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
    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];
    ?>

    <table>
        <tbody>
            <?php
            for ($i = 0; $i < $filas; $i++) {
                echo "<tr></tr>";
                for ($j = 0; $j < $columnas; $j++) {
                    //Se que style está super prohibido, pero quería ver la tabla con más claridad sin añadir archivo css.
                    if ($i == 0 or $i == $filas - 1 or $j == 0 or $j == $columnas - 1) {
                        echo "<th style='border: 1px solid black;'>Fila: $i - Columna: $j</th>";
                    } else {
                        echo "<th style='border: 1px solid black;'>X</th>";
                    }
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>