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
    $nombre = $_GET["nombre"];
    $apellido1 = $_GET["apellido1"];
    $apellido2 = $_GET["apellido2"];
    $email = $_GET["email"];
    $añoNacimiento = $_GET["añoNacimiento"];
    $movil = $_GET["movil"];
    ?>
    <table>
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Email</td>
                <td>Año Nacimiento</td>
                <td>Móvil</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $nombre ?></td>
                <td><?= $apellido1 ?></td>
                <td><?= $apellido2 ?></td>
                <td><?= $email ?></td>
                <td><?= $añoNacimiento ?></td>
                <td><?= $movil ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>