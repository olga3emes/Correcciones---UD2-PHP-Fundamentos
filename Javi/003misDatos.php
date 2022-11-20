<?php
    $nombre= $_GET["nombre"];
    $apellido1= $_GET["apellido1"];
    $apellido2= $_GET["apellido2"];
    $email= $_GET["email"];
    $año= $_GET["año"]; //! Ñ nuncaaaaaaaaaaa NEVER, STOP, Ñ caca, nunca se le da value por defecto. LOCURON :(
    $numero= $_GET["numero"]; //! Es type tel de teléfono

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