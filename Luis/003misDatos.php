<?php 
    $nombre = $_GET["nombre"];
    $apellido_1 = $_GET["apellido_1"];
    $apellido_2 = $_GET["apellido_2"];
    $email =  $_GET["email"];
    $movil =  $_GET["movil"];
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
            <td><?php echo" $movil" ?></td> //! Validar tienes que validar con número OJO con los tipos de datos
        </tr>
    </table>