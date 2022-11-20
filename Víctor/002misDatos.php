<?php
/*
002misDatos.php: Escribe un programa que almacene en variables tu 
nombre, primer apellido, segundo apellido, email, año en el que naciste y 
móvil. Luego muéstralos por pantalla dentro de una tabla.

*/

$nombre = "Victor";
$primer_apellido = "Torres";
$segundo_apellido = "Ortiz";
$email = "Victor.torres.ortiz.18@gmail.com";
$nacimiento = "4 de Abril de 2001"; //! Año en el que naciste, no la fecha
$tel_movil = 691386582;
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
            <?=$tel_movil?>
        </tr>
    </tbody>
    </table>
    
</body>
</html>