<?php 
    $nombre = $_GET["nombre"];
    $apellido1 = $_GET["apellido1"]; 
    $apellido2 = $_GET["apellido2"]; 
    $email = $_GET["email"];
    $dia = $_GET["dia"];
    $numero = $_GET["numero"];
?>

<table>
      <tr>
        <td>Nombre</td>
        <td><?php echo $nombre ?></td>
      </tr>
      <tr>
        <td>Primer apellido</td>
        <td><?php echo $apellido1 ?></td>
      </tr>
      <tr>
        <td>Segundo apellido</td>
        <td><?php echo $apellido2 ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
      </tr>
      <tr>
        <td>Nacimiento</td>
        <td><?php echo $dia ?></td>
      </tr>
      <tr>
        <td>Número</td>
        <td><?php echo $numero ?></td>
      </tr>
</table>