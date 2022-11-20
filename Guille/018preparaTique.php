<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 18</title>
</head>
<body>
    <form method="GET" action="018preparaTique.php">
        <a href="link"></a>
        <p>
            <label for="nprod">Nombre: </label>
            <input type="text" name="nprod" id="nprod"/>
        </p>
        <p><input type="submit" value="Enviar" /></p>
    </form>    
</body>
</html>

<?php
$nombre = $_GET["nprod"];


?>