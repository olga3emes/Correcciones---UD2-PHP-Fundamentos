<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>002misDatos</title>
</head>
<body>
    <?php
        $nombre = "Daniel";
        $apellido1 = "Reyes";
        $apellido2 = "Pérez";
        $email = "dangioparefape@gmail.com";
        $añoNacimiento = 1996;
        $movil = 651439036;
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
        <td><?= $nombre?></td>
        <td><?= $apellido1?></td>
        <td><?= $apellido2?></td>
        <td><?= $email?></td>
        <td><?= $añoNacimiento?></td>
        <td><?= $movil?></td>
       </tr>
       </tbody>
    </table>
</body>
</html>