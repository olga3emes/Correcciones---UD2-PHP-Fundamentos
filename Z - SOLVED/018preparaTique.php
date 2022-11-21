<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="nombre-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>018preparaTique</title>
</head>

<body>
    <form action="018imprimeTique.php" method="get">
        <?php
        $productos=[];
        $productos["Tomate" ]=[0.5];
        $productos["Patata"]=[0.8];
        $productos["Hamburguesa"]=[3];
        $productos["Agua"]=[0.7];

        foreach ($productos as $nombre => $valor) {
            echo "<label for='producto".$nombre."'>".$nombre.":</label>
            <input type='number' id='producto".$nombre."' name='cant".$nombre."'><br>";
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>