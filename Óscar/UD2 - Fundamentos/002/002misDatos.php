<!-- Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, 
año en el que naciste y móvil. Luego muéstralos por pantalla dentro de una tabla. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis datos</title>
</head>

<body>
    <?php
    $nombre = "Óscar";
    $apellido1 = "Povea";
    $apellido2 = "Campuzano";
    $email = "ejemplo@gmail.com";
    $anio = "20/11/2002"; //! Año de nacimiento, no fecha
    $movil = "6327367"; //! Número
    ?>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">1º apellido</th>
                    <th scope="col">2º apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Año</th>
                    <th scope="col">Movil</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row"><?php echo $nombre ?></td>
                    <td scope="row"><?php echo $apellido1 ?></td>
                    <td scope="row"><?php echo $apellido2 ?></td>
                    <td scope="row"><?php echo $email ?></td>
                    <td scope="row"><?php echo $anio ?></td>
                    <td scope="row"><?php echo $movil ?></td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>