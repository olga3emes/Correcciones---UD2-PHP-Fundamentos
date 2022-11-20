<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>numeros pares
    
    <?php

/*010numPares.php: A partir del anterior, refactorizar para que funcione con 
inicio y fin.*/

for ($i=1; $i <=50 ; $i++) { 
    # code...
    if ($i % 2 == 0) {
        echo "<li> $i </li>";
    }
}

?>
    


    </ul>
</body>
</html>