<?php
$nombre = $_POST['nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nacimiento = $_POST['nacimiento'];

//! Las validaciones son un desastre, numbre??? 2099 de fecha de nacimiento?
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style.css" rel="stylesheet">
    <title>Tabla</title>
</head>
<body>
    <table>
        <tbody>
        <tr>
            <td>Nombre</td>
            <td><?=$nombre?></td>

        </tr>

        <tr>
            <td>Primer Apellido</td>
            <td><?=$primer_apellido?></td>
        </tr>

        <tr>
            <td>Segundo Apellido</td>
            <td><?=$segundo_apellido?></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
        
        <tr>
            <td>Nacimiento</td>
            <td><?=$nacimiento?></td>
        </tr>

        <tr>
            <td>Telefono Movil</td>
            <td><?=$tel?></td>
        </tr>
    </tbody>
    </table>
    
</body>
</html>