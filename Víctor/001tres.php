<?php 
    /*
    php: muestra 3 frases cada una en un párrafo utilizando las tres 
    posibilidades que existen de mostrar contenido. Tras ello, introduce dos comentarios, 
    uno de bloque y otro de una línea.
    */

    //Comentario de Linea Normal
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
</head>


<body>
    <p><?echo"Hola Mundo"?></p>
    <br>
    <p><?="Hola Mundo"?></p>
    <br>
    <p><?print "Hola Mundo"?></p>
    
</body>
</html>