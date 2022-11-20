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
        $nombre = "Mario";
        $apellido1 = "Rufo";
        $apellido2 = "Ariza";
        $email = "mario@gmail.com";
        $a_nacimiento = "2003"; //! Número
        $movil = "626 626 626";//! Número
    ?>
    <table>
        <tr>
            <th>Nombre:</th>
            <td><p><?=("$nombre")?></p></td>
        </tr>
        <tr>
            <th>Apellidos:</th>
            <td><p><?=("$apellido1 $apellido2")?></p></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><p><?=("$email")?></p></td>
        </tr>
        <tr>
            <th>Año nacimiento:</th>
            <td><p><?=("$a_nacimiento")?></p></td>
        </tr>
        <tr>
            <th>Móvil:</th>
            <td><p><?=("$movil")?></p></td>
        </tr>
    </table>
</body>
</html>