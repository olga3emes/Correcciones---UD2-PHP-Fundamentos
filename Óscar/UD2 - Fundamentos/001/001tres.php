<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001tres</title>
</head>

<body>

    <!-- muestra 3 frases cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. Tras ello, introduce dos comentarios, uno de bloque y otro de una línea. -->

    <p><?php echo "Frase número 1"; ?></p>
    <p><?php print "Frase número 2"; ?></p>
    <p><?= "Frase número 3";
        //Comentario en linea
        /*
        Comentario
        En
        Bloque
        */
        ?>
    </p>

</body>

</html>