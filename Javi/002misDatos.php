<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
           $nombre= "Javier";
           $apellido1= "Antequera";
           $apellido2= "Gaspar";
           $email= "javiantmine@gmail.com";
           $año= "2002"; //! Número
           $numero="615 839 844"; //! Número
        ?>
        <table>
            <tr>
                <td>Nombre</td>
                <td>Primer Apellido</td>
                <td>Segundo Apellido</td>
                <td>Email</td>
                <td>Año de nacimiento</td>
                <td>Número de teléfono</td>
            </tr>
            <tr>
                <td><?= $nombre ?></td>
                <td><?= $apellido1 ?></td>
                <td><?= $apellido2 ?></td>
                <td><?= $email ?></td>
                <td><?= $año ?></td>
                <td><?= $numero ?></td>
            </tr>
        </table>
        

    </body>
</html>