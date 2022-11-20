<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Act 5</title>
</head>
<body>


    <form method="post">
        <p>
            <label for="cant">Introduce el dinero: </label>
            <input type="number" name="cant" id="cant"/>
        </p>
    </form>

<?php 
//! Fántastica Solución!
    if ($_SERVER['REQUEST_METHOD'] =='POST'){
        $cant = intval ($_POST['cant']);
        $mon1  =  $cant;

        $bi500 = ($mon1 - $mon1 % 500) /500;
        $mon1 = $mon1 % 500;

        $bi200 = ($mon1 - $mon1 % 200) /200;
        $mon1 = $mon1 % 200;

        $bi100 = ($mon1 - $mon1 % 100) /100;
        $mon1 = $mon1 % 100;

        $bi50 = ($mon1 - $mon1 % 50) /50;
        $mon1 = $mon1 % 50;

        $bi20 = ($mon1 - $mon1 % 20) /20;
        $mon1 = $mon1 % 20;

        $bi10 = ($mon1 - $mon1 % 10) /10;
        $mon1 = $mon1 % 10;

        $bi5 = ($mon1 - $mon1 % 5) /5;
        $mon1 = $mon1 % 5;

        $mon2 = ($mon1 - $mon1 % 2) /2; 
        $mon1 = $mon1 % 2;  
        
        echo 'Billetes de 500: ' . $bi500 . "<br/>\n";
        echo 'Billetes de 200: ' . $bi200 . "<br/>\n";
        echo 'Billetes de 100: ' . $bi100 . "<br/>\n";
        echo 'Billetes de 50: ' . $bi50 . "<br/>\n";
        echo 'Billetes de 20: ' . $bi20 . "<br/>\n";
        echo 'Billetes de 10: ' . $bi10 . "<br/>\n";
        echo 'Billetes de 5: ' . $bi5 . "<br/>\n";
        echo 'Monedas de 2: ' . $mon2 . "<br/>\n";
        echo 'Monedas de 1: ' . $mon1;
    }
    ?>

</body>
</html>