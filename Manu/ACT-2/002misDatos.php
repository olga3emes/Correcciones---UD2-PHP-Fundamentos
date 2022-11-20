<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <td>
            <tr>
                <?php 
                    $name = "Manuel";
                    print($name); /* PRINT(string) MUESTRA EL VALOR DEL STRING */
                ?>
            </tr>
        </td>
        <td>
            <tr>
                 <?php 
                    $surName1 = "Moya";
                    print($surName1);
                 ?>
            </tr>
        </td>
        <td>
            <tr>
                <?php 
                    $surName2 = "Vadillo";
                    print($surName2);
                ?>
            </tr>
        </td>
        <td>
            <tr>
                <?php
                    $email = "manuel.moyavadillo2@gmail.com";
                    print($email);
                ?>    
            </tr>
        </td>
        <td>
            <tr>
                <?php
                    $birthday = "10/12/2003";   //! Año de nacimiento, no fecha 
                    print($birthday);     
                ?>
            </tr>
        </td>
        <td>
            <tr>
                <?php
                    $mobile = "644428371"; //! Número
                    print($mobile); 
                    
                    echo "<br>**********<br>Ejercicio 002";
                ?>
            </tr>
        </td>
    </table>
</body>
</html>