<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <caption>Tabla del <?=$numerot = $_GET['num']?></caption>
        <thead>
            <th>A * B = A*B</th>
        </thead>
        <tbody>
            <tr>
                <td>
                <?php
                //! Has hecho + de lo que se pide

                    $numerot = $_GET['num'];
                    $multiplicador = $_GET['multi'];

                    for ($multiplicador = 1; $multiplicador <= $_GET['multi']; $multiplicador++) {
                        $solucion = $numerot * $multiplicador;
                        echo "$numerot * $multiplicador = $solucion";
                        echo "<br>";
                    }
                ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>