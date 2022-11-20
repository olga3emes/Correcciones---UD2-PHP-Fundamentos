<?php 
$nombre = " Augusto Guillermo";
$apellido1 = "Neuman"; 
$apellido2 = "Vera"; 
$email = "guillermo@gmail.com";
$dia = "28/04/2003"; //! Año
$numero = "123 45 67 89"; //! Número no String
?>

    <table>
      <tr>
        <td>Nombre</td>
        <td><?= $nombre ?></td>
      </tr>
      <tr>
        <td>Primer apellido</td>
        <td><?= $apellido1 ?></td>
      </tr>
      <tr>
        <td>Segundo apellido</td>
        <td><?= $apellido2 ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?= $email ?></td>
      </tr>
      <tr>
        <td>Nacimiento</td>
        <td><?= $dia ?></td>
      </tr>
      <tr>
        <td>Número</td>
        <td><?= $numero ?></td>
      </tr>
    </table>
  </body>
</html>