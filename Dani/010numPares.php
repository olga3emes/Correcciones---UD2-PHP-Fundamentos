<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $inicio = $_GET["inicio"];
        $fin = $_GET["fin"];
        $pares = $inicio;
        for ($i = $inicio; $i <= $fin; $i++) {
//! por qué no reutilizas la i????? RARO
            if ($pares % 2 == 0) {
                echo "<li>$pares</li>";
            }
            $pares++;
        }

        ?>
    </ul>
</body>

</html>