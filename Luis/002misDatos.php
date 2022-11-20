<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
/*002misDatos.php: Escribe un programa que almacene en variables tu 
nombre, primer apellido, segundo apellido, email, año en el que naciste y 
móvil. Luego muéstralos por pantalla dentro de una tabla. */



    <?php 
    $nombre ="luis";
    $apellido_1 = "parra";
    $apellido_2 = "vaquerizo";
    $email = "luis@luis.com";
    $movil = "685875410"; //! Número
    //! Año de nacimiento??? 

    
    
    ?>
    <table>
        <tr>
            <td>nombre</td>
            <td><?php echo" $nombre" ?> </td>
        </tr>
        <tr>
            <td>Primer apellido</td>
            <td><?php echo" $apellido_1" ?></td>
        </tr>
        <tr>
            <td>segundo apallido</td>
            <td><?php echo" $apellido_2" ?></td>
        </tr>
        <tr>
            <td>emai</td>
            <td><?php echo" $email" ?></td>
        </tr>
        <tr>
            <td>telefono</td>
            <td><?php echo" $movil" ?></td>
        </tr>
    </table>

    
    
</body>
</html>