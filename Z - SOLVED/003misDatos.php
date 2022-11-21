<!-- 003misDatos.html y 003misDatos.php: Es el mismo ejercicio anterior, pero 
separando la lógica. En el html crearemos el formulario para introducir los 
datos, y luego recogemos los datos y generamos la tabla en el segundo 
archivo. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>003misDatos</title>
    <?php
    $nombre = $_GET['nombre'];
    $apellido1 = $_GET['apellido1'];
    $apellido2 = $_GET['apellido2'];
    $email = $_GET['email'];
    $yearNac = $_GET['yearNac'];
    $movil = $_GET['movil'];
    ?>
</head>

<body>
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
        <td><?= $yearNac?></td>
        <td><?= $movil?></td>
       </tr>
       </tbody>
    </table>
</body>

</html>