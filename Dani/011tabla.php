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
    $numero = $_GET["numero"];
    ?>
    <table>
        <thead>
            <tr>
                <th>A</th>
                <th>*</th>
                <th>B</th>
                <th>=</th>
                <th>A*B</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i < 11; $i++) {
                $resultado = ($numero * $i);
                echo "<tr>
                    <th>$numero</th>
                    <th>*</th>
                    <th>$i</th>
                    <th>=</th>
                    <th>$resultado</th>
                </tr>";
            };
            ?>
        </tbody>
    </table>
</body>

</html>